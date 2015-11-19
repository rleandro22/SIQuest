<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Regex;

class ParametroConjuntoType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('libro', 'entity', array('class' => 'UciBaseDatosBundle:Libro', 'required' => false, 'empty_value' => 'Libro'))
                ->add('numeroPaginaDe', 'integer', array("label" => "Desde.: ", "mapped" => false, 'attr' => array('min' => 0), "required" => false, 'precision' => 0,'attr' => array('placeholder' => 'Desde'), 'constraints' => array(
                        new Regex(array(
                            'pattern' => '/^[0-9]\d*$/',
                            'message' => 'Use solo números positivos.'
                        )))))
                ->add('numeroPaginaHasta', 'integer', array("label" => "Hasta.: ", "mapped" => false, 'attr' => array('min' => 0), "required" => false, 'attr' => array('placeholder' => 'Hasta'),  'precision' => 0, 'constraints' => array(
                        new Regex(array(
                            'pattern' => '/^[0-9]\d*$/',
                            'message' => 'Use solo números positivos.'
                        )))))
                ->add('capitulo', 'entity', array('class' => 'UciBaseDatosBundle:Capitulo', 'required' => false, 'empty_value' => 'Capitulo', 'attr' => array('style' => 'width: 100%')))
                ->add('areaConocimiento', 'entity', array('class' => 'UciBaseDatosBundle:AreaConocimiento', 'required' => false, 'empty_value' => 'A. Conocimiento', 'attr' => array('style' => 'width: 100%')))
                ->add('trianguloTalento', 'entity', array('class' => 'UciBaseDatosBundle:TrianguloTalento', 'required' => false, 'empty_value' => 'T. Talento', 'attr' => array('style' => 'width: 100%')))
                ->add('grupoProcesos', 'entity', array('class' => 'UciBaseDatosBundle:GrupoProcesos', 'required' => false, 'empty_value' => 'G. Procesos', 'attr' => array('style' => 'width: 100%')))
                ->add('tipoPrueba', 'entity', array('class' => 'UciBaseDatosBundle:TipoPrueba', 'required' => false, 'empty_value' => 'T. Prueba', 'attr' => array('style' => 'width: 100%')))
                ->add('tipoRespuesta', 'entity', array('class' => 'UciBaseDatosBundle:TipoRespuesta', 'required' => false, 'empty_value' => 'T. Respuesta', 'attr' => array('style' => 'width: 100%')))
                ->add('cantidad', 'integer', array("label" => "Cant. Preguntas: ", "mapped" => false, 'attr' => array('min' => 1), "required" => TRUE, 'precision' => 0, 'constraints' => array(
                        new Regex(array('pattern' => '/^[0-9]\d*$/', 'message' => 'Use solo números positivos.')))))
                ->add('porcentaje', 'percent', array("label" => "% de preguntas: ", "mapped" => false, "required" => TRUE))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => null
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'uci_bundle_basedatosbundle_parametro_conjunto';
    }

}
