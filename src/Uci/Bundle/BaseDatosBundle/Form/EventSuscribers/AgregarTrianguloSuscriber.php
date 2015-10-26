<?php

namespace Uci\Bundle\BaseDatosBundle\Form\EventSuscribers;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityRepository;
use \Uci\Bundle\BaseDatosBundle\Entity\Pmbok;

class AgregarTrianguloSuscriber implements EventSubscriberInterface {

    private $factory;

    public function __construct(FormFactoryInterface $factory) {
        $this->factory = $factory;
    }

    public static function getSubscribedEvents() {
        return array(
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_BIND => 'preBind'
        );
    }

    private function agregarTrianguloForm($form, $pmbok) {
        $form->add($this->factory->createNamed('trianguloTalento', 'entity', null, array(
                    'auto_initialize' => false,
                    'class' => 'UciBaseDatosBundle:TrianguloTalento',
                    'empty_value' => 'T. Talento',
                    'query_builder' => function (EntityRepository $repository) use ($pmbok) {
                        $qb = $repository->createQueryBuilder('u')
                                ->innerJoin('u.pmbok', 'g');
                        if ($pmbok instanceof Pmbok) {
                            $qb->where('g.id = :pmbok')
                                    ->setParameter('pmbok', $pmbok->getId());
                        } elseif (is_numeric($pmbok)) {
                            $qb->where('g.id = :pmbok')
                                    ->setParameter('pmbok', $pmbok);
                        } else {
                            $qb->where('g.id = :pmbok')
                                    ->setParameter('pmbok', null);
                        }
                        return $qb;
                    }
        )));
    }

    public function preSetData(FormEvent $event) {
        $data = $event->getData();
        $form = $event->getForm();

        if (null === $data) {
            return;
        }
        $libro = ($data->getLibro()) ? $data->getLibro() : null;
        if (null === $libro) {
            return;
        } else {
            if ($libro->getEsPmbok() == 1) {
                $pmbok = $data->getLibro()->getPmbok();
            } else {
                return;
            }
        }
        $this->agregarTrianguloForm($form, $pmbok);
    }

    public function preBind(FormEvent $event) {
        $data = $event->getData();
        $form = $event->getForm();

        if (null === $data) {
            return;
        }
        $libro = array_key_exists('libro', $data) ? $data['libro'] : null;
        if (null === $libro) {
            return;
        } else {
            if ($libro->getEsPmbok() == 1) {
                $pmbok = $data->getLibro()->getPmbok();
            } else {
                return;
            }
        }
        $this->agregarTrianguloForm($form, $pmbok);
    }

}