<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Regex;

class ParametroTipoRespuestaType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('tipoRespuesta', 'entity', array('class' => 'UciBaseDatosBundle:TipoRespuesta', 'required' => TRUE, 'empty_value' => 'T. Respuesta'))
                ->add('cantidad', 'integer', array("label" => "Cant. Preguntas: ", "mapped" => false, 'attr' => array('min' => 1), "required" => TRUE, 'precision' => 0, 'constraints' => array(
                        new Regex(array('pattern' => '/^[0-9]\d*$/', 'message' => 'Use solo números positivos.')))))
                ->add('porcentaje', 'percent', array("label" => "% de preguntas: ", "mapped" => false, "required" => TRUE));
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
        return 'uci_bundle_basedatosbundle_parametro_tipo_respuesta';
    }

}
