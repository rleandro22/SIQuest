<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Regex;

class ParametroTipoPruebaType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('tipoPrueba', 'entity', array('class' => 'UciBaseDatosBundle:TipoPrueba', 'required' => false, 'empty_value' => 'T. Prueba:'))
                ->add('cantidadA', 'integer', array("label" => "Cant. Preguntas: ", "mapped" => false, "required" => false, 'precision' => 0, 'constraints' => array(
                        new Regex(array('pattern' => '/^[0-9]\d*$/', 'message' => 'Use solo números positivos.')))))
                ->add('porcentajeA', 'integer', array("label" => "% de preguntas: ", "mapped" => false, "required" => false, 'precision' => 0, 'constraints' => array(
                        new Regex(array('pattern' => '/^[0-9]\d*$/', 'message' => 'Use solo números positivos.')))));
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
        return 'uci_bundle_basedatosbundle_parametro_tipo_prueba';
    }

}
