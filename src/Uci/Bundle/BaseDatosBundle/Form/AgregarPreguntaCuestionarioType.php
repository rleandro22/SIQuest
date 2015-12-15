<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AgregarPreguntaCuestionarioType extends AbstractType {

    private $ids;

    public function __construct($ids) {
        $this->ids = $ids;
    }
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $ids = $this->ids;
        $builder
                ->add('pregunta', 'entity', array(
                    'class' => 'UciBaseDatosBundle:Pregunta',
                    'required' => false,
                    'expanded' => true,
                    'multiple' => true,
                    'mapped' => TRUE,
                    'query_builder' => function(\Doctrine\ORM\EntityRepository $r) use($ids) {
                        return $r->createQueryBuilder('w')
                                ->where('w.id NOT IN (:miarray)')
                                ->setParameter('miarray', $ids);
                    }));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Uci\Bundle\BaseDatosBundle\Entity\Cuestionario'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'uci_agregar_pregunta_cuestionario';
    }

}
