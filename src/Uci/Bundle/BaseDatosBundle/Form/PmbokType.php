<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PmbokType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('edicion','integer', array("label" => "Edición: "))
                ->add('areaConocimiento', 'entity', array("label" => "Área de Conocimiento: ",'class' => 'UciBaseDatosBundle:AreaConocimiento', 'required' => false,'expanded' => true, 'multiple' => true, 'attr' => array('style' => 'width: 100%')))
                ->add('grupoProcesos', 'entity', array("label" => "Grupo de Proceso: ",'class' => 'UciBaseDatosBundle:GrupoProcesos', 'required' => false,'expanded' => true, 'multiple' => true, 'attr' => array('style' => 'width: 100%')))
                ->add('trianguloTalento', 'entity', array("label" => "Triángulo de Talento: ",'class' => 'UciBaseDatosBundle:TrianguloTalento', 'required' => false,'expanded' => true, 'multiple' => true, 'attr' => array('style' => 'width: 100%')))

        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Uci\Bundle\BaseDatosBundle\Entity\Pmbok'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'uci_bundle_basedatosbundle_pmbok';
    }

}
