<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ParametroConjuntoType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('areaConocimiento', 'collection', array(
                    'type' => new ParametroAreaType(),
                    'by_reference' => FALSE,
                    'allow_delete' => TRUE,
                    'allow_add' => TRUE,
                    'prototype' => TRUE,
                    'label' => FALSE))
                ->add('grupoProcesos', 'collection', array(
                    'type' => new ParametroGrupoType(),
                    'by_reference' => FALSE,
                    'allow_delete' => TRUE,
                    'allow_add' => TRUE,
                    'prototype' => TRUE,
                    'label' => FALSE))
                ->add('trianguloTalento', 'collection', array(
                    'type' => new ParametroTrianguloType(),
                    'by_reference' => FALSE,
                    'allow_delete' => TRUE,
                    'allow_add' => TRUE,
                    'prototype' => TRUE,
                    'label' => FALSE))
                ->add('tipoPrueba', 'collection', array(
                    'type' => new ParametroTipoPruebaType(),
                    'by_reference' => FALSE,
                    'allow_delete' => TRUE,
                    'allow_add' => TRUE,
                    'prototype' => TRUE,
                    'label' => FALSE))
                ->add('tipoRespuesta', 'collection', array(
                    'type' => new ParametroTipoRespuestaType(),
                    'by_reference' => FALSE,
                    'allow_delete' => TRUE,
                    'allow_add' => TRUE,
                    'prototype' => TRUE,
                    'label' => FALSE))
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
        return 'uci_bundle_basedatosbundle_parametro_conjunto';
    }

}
