<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Regex;

class CuestionarioType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('cuestionarioname', 'text', array("label" => "Nombre corto: ", "required" => true, "attr" => array('class' => 'form-control')))
                ->add('curso', 'entity', array('class' => 'UciBaseDatosBundle:Curso', 'required' => true, 'empty_value' => 'Curso'))
                ->add('cantidadPreguntas', 'integer', array("label" => "Cant. Preguntas: ", 'attr' => array('min' => 1), "required" => TRUE, 'precision' => 0, 'constraints' => array(
                        new Regex(array(
                            'pattern' => '/^[1-9]\d*$/',
                            'message' => 'Use solo números positivos.'
                        )))))
                ->add('libro', 'collection', array(
                    'type' => new ParametroLibroType(),
                    'by_reference' => FALSE,
                    'allow_delete' => TRUE,
                    'allow_add' => TRUE,
                    'prototype' => TRUE,
                    'mapped' => FALSE,
                    'label' => FALSE))
                ->add('areaConocimiento', 'collection', array(
                    'type' => new ParametroAreaType(),
                    'by_reference' => FALSE,
                    'allow_delete' => TRUE,
                    'allow_add' => TRUE,
                    'prototype' => TRUE,
                    'mapped' => FALSE,
                    'label' => FALSE))
                ->add('grupoProcesos', 'collection', array(
                    'type' => new ParametroGrupoType(),
                    'by_reference' => FALSE,
                    'allow_delete' => TRUE,
                    'allow_add' => TRUE,
                    'prototype' => TRUE,
                    'mapped' => FALSE,
                    'label' => FALSE))
                ->add('trianguloTalento', 'collection', array(
                    'type' => new ParametroTrianguloType(),
                    'by_reference' => FALSE,
                    'allow_delete' => TRUE,
                    'allow_add' => TRUE,
                    'prototype' => TRUE,
                    'mapped' => FALSE,
                    'label' => FALSE))
                ->add('tipoPrueba', 'collection', array(
                    'type' => new ParametroTipoPruebaType(),
                    'by_reference' => FALSE,
                    'allow_delete' => TRUE,
                    'allow_add' => TRUE,
                    'prototype' => TRUE,
                    'mapped' => FALSE,
                    'label' => FALSE))
                ->add('tipoRespuesta', 'collection', array(
                    'type' => new ParametroTipoRespuestaType(),
                    'by_reference' => FALSE,
                    'allow_delete' => TRUE,
                    'allow_add' => TRUE,
                    'prototype' => TRUE,
                    'mapped' => FALSE,
                    'label' => FALSE))
                ->add('parametroConjunto', 'collection', array(
                    'type' => new ParametroConjuntoType(),
                    'by_reference' => FALSE,
                    'allow_delete' => TRUE,
                    'allow_add' => TRUE,
                    'prototype' => TRUE,
                    'mapped' => FALSE,
                    'label' => FALSE))
        ;
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
        return 'uci_bundle_basedatosbundle_cuestionario';
    }

}
