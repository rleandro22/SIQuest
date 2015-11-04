<?php

namespace Uci\Bundle\BaseDatosBundle\Form\EventSuscribers;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityRepository;
use \Uci\Bundle\BaseDatosBundle\Entity\Libro;

class AgregarCapituloSuscriber implements EventSubscriberInterface {

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

    private function agregarLibroForm($form, $libro) {
        $form->add($this->factory->createNamed('capitulo', 'entity', null, array(
                    'auto_initialize' => false,
                    'required' => false,
                    'class' => 'UciBaseDatosBundle:Capitulo',
                    //'empty_value' => 'Capitulo',
                    'query_builder' => function (EntityRepository $repository) use ($libro) {
                        $qb = $repository->createQueryBuilder('capitulo')
                                ->innerJoin('capitulo.libro', 'libro');
                        if ($libro instanceof Libro) {
                            $qb->where('capitulo.libro = :libro')
                                    ->setParameter('libro', $libro->getId());
                        } elseif (is_numeric($libro)) {
                            $qb->where('libro.id = :libro')
                                    ->setParameter('libro', $libro);
                        } else {
                            $qb->where('libro.titulo = :libro')
                                    ->setParameter('libro', null);
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
        $this->agregarLibroForm($form, $libro);
    }

    public function preBind(FormEvent $event) {
        $data = $event->getData();
        $form = $event->getForm();

        if (null === $data) {
            return;
        }
        $libro = array_key_exists('libro', $data) ? $data['libro'] : null;
        $this->agregarLibroForm($form, $libro);
    }

}
