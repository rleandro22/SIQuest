<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PreguntaType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('titulo', 'textarea', array("label" => "Enunciado: ", "required" => true, "attr" => array('class' => 'form-control')))
                ->add('areaConocimiento', 'entity', array('class' => 'UciBaseDatosBundle:AreaConocimiento', 'required' => false, 'attr' => array('style' => 'width: 100%')))
                ->add('capitulo', 'entity', array('class' => 'UciBaseDatosBundle:Capitulo', 'required' => false, 'attr' => array('style' => 'width: 100%')))
                ->add('grupoProcesos', 'entity', array('class' => 'UciBaseDatosBundle:GrupoProcesos', 'required' => false, 'attr' => array('style' => 'width: 100%')))
                ->add('tipoPrueba', 'entity', array('class' => 'UciBaseDatosBundle:TipoPrueba', 'required' => false, 'attr' => array('style' => 'width: 100%')))
                ->add('libro', 'entity', array('class' => 'UciBaseDatosBundle:Libro', 'required' => false, 'attr' => array('style' => 'width: 100%')))
                ->add('tiporespuestamultiple', 'collection', array(
                    'type' => new TipoRespuestaMultipleType(),
                    'by_reference' => false,
                    'allow_delete' => true,
                    'allow_add' => true,
                    'prototype' => true,
                    'label' => ' ',
                    'mapped' => false
                ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Uci\Bundle\BaseDatosBundle\Entity\Pregunta'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'uci_bundle_basedatosbundle_pregunta';
    }

}
