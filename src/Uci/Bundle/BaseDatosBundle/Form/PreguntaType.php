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
        $builder->add('libro', 'entity', array('class' => 'UciBaseDatosBundle:Libro', 'required' => false, 'empty_value' => 'Libro'));
        $factory = $builder->getFormFactory();
        $capituloSubscriber = new EventSuscribers\AgregarCapituloSuscriber($factory);
        $builder->addEventSubscriber($capituloSubscriber);
//        $grupoSubscriber = new EventSuscribers\AgregarGrupoSuscriber($factory);
//        $builder->addEventSubscriber($grupoSubscriber);
//        $areaSubscriber = new EventSuscribers\AgregarAreaSuscriber($factory);
//        $builder->addEventSubscriber($areaSubscriber);
//        $trianguloSubscriber = new EventSuscribers\AgregarTrianguloSuscriber($factory);
//        $builder->addEventSubscriber($trianguloSubscriber);
        $builder
                ->add('titulo', 'textarea', array("label" => "Enunciado: ", "required" => true, "attr" => array('class' => 'form-control')))
                ->add('numeroPagina', 'integer', array("label" => "Página Num.: ", "required" => true, "attr" => array('class' => 'form-control')))
                ->add('areaConocimiento', 'entity', array('class' => 'UciBaseDatosBundle:AreaConocimiento', 'required' => false, 'attr' => array('style' => 'width: 100%')))
                ->add('trianguloTalento', 'entity', array('class' => 'UciBaseDatosBundle:TrianguloTalento', 'required' => false, 'attr' => array('style' => 'width: 100%')))
//                ->add('capitulo', 'entity', array('class' => 'UciBaseDatosBundle:Capitulo', 'required' => false, 'attr' => array('style' => 'width: 100%')))
                ->add('grupoProcesos', 'entity', array('class' => 'UciBaseDatosBundle:GrupoProcesos', 'required' => false, 'attr' => array('style' => 'width: 100%')))
                ->add('tipoPrueba', 'entity', array('class' => 'UciBaseDatosBundle:TipoPrueba', 'expanded' => true, 'multiple' => true, 'required' => false, 'attr' => array('style' => 'width: 100%')))
                ->add('respuesta', 'collection', array(
                    'type' => new RespuestaType(),
                    'prototype' => true,
                    'allow_add' => true,
                    'by_reference' => false,
                    'label' => ' '
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
