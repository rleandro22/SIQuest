<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RespuestaType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('correcta', 'choice', array('choices' => array(1 => 'Sí', 0 => 'No'), 'label' => '¿Es correcta? ', 'multiple' => false, 'expanded' => false))
                ->add('textoRespuesta', 'textarea', array("label" => "Respuesta: ", "required" => true, "attr" => array('class' => 'form-control')))
                ->add('textoRetroalimentacion', 'textarea', array("label" => "Retroalimentación: ", "required" => true, "attr" => array('class' => 'form-control')))
                ->add('extra', 'textarea', array("label" => "Extra: ", "required" => true, "attr" => array('class' => 'form-control')))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Uci\Bundle\BaseDatosBundle\Entity\Respuesta'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'uci_bundle_basedatosbundle_respuesta';
    }

}
