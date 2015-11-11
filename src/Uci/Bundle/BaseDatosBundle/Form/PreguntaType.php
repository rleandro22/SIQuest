<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Regex;

class PreguntaType extends AbstractType {

    private $idTipoRespuesta;

    public function __construct($idTipoRespuesta) {
        $this->idTipoRespuesta= $idTipoRespuesta;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $factory = $builder->getFormFactory();
        $capituloSubscriber = new EventSuscribers\AgregarCapituloSuscriber($factory);
        $builder->addEventSubscriber($capituloSubscriber);
        $builder->add('libro', 'entity', array('class' => 'UciBaseDatosBundle:Libro', 'required' => false, 'empty_value' => 'Libro'))
                ->add('titulo', 'textarea', array("label" => "Enunciado: ", "required" => true, "attr" => array('class' => 'form-control')))
                ->add('numeroPagina', 'integer', array("label" => "Página Num.: ", "required" => false, 'precision' => 0, 'constraints' => array(
                        new Regex(array(
                            'pattern' => '/^[0-9]\d*$/',
                            'message' => 'Use solo números positivos.'
                        )))))
                ->add('areaConocimiento', 'entity', array('class' => 'UciBaseDatosBundle:AreaConocimiento', 'required' => false, 'attr' => array('style' => 'width: 100%')))
                ->add('trianguloTalento', 'entity', array('class' => 'UciBaseDatosBundle:TrianguloTalento', 'required' => false, 'attr' => array('style' => 'width: 100%')))
                ->add('grupoProcesos', 'entity', array('class' => 'UciBaseDatosBundle:GrupoProcesos', 'required' => false, 'attr' => array('style' => 'width: 100%')))
                ->add('tipoPrueba', 'entity', array('class' => 'UciBaseDatosBundle:TipoPrueba', 'expanded' => true, 'multiple' => true, 'required' => false, 'attr' => array('style' => 'width: 100%')))
                ->add('respuesta', 'collection', array(
                    'type' => new RespuestaType($this->idTipoRespuesta),
                    'prototype' => true,
                    'allow_add' => true,
                    'allow_delete' => TRUE,
                    'by_reference' => false,
                    'label' => ' ',
                    'options' => array('label' => false)
        ));
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
