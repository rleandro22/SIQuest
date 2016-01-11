<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Regex;


class LibroType extends AbstractType {

    private $edita;

    public function __construct($edita) {
        $this->edita = $edita;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('titulo', 'text', array("label" => "Titulo: ", "required" => true, "attr" => array('class' => 'form-control')))
                ->add('anio', 'integer', array("label" => "Año: ", "required" => true, "attr" => array('class' => 'form-control')))
                ->add('numeroPaginas', 'integer', array("label" => "Páginas: ", "required" => true, "attr" => array('min' => 1, 'class' => 'form-control'),'precision' => 0, 'constraints' => array(
                        new Regex(array(
                            'pattern' => '/^[0-9]\d*$/',
                            'message' => 'Use solo números positivos.'
                        )))))
                ->add('esPmbok', 'choice', array('choices' => array(1 => 'Sí', 0 => 'No'), 'label' => '¿Es Pmbok? ',  'multiple' => false, 'expanded' => true, 'data' => $this->edita))
                ->add('idiomas', 'entity', array('class' => 'UciBaseDatosBundle:Idiomas', 'required' => true))
                ->add('pmbok', new PmbokType(),array('required' => false))
                ->add('capitulos', 'collection', array(
                    'type' => new CapituloType(),
                    'by_reference' => true,
                    'allow_delete' => true,
                    'allow_add' => true,
                    'prototype' => true,
                    'label' => FALSE))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Uci\Bundle\BaseDatosBundle\Entity\Libro'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'uci_bundle_basedatosbundle_libro';
    }

}
