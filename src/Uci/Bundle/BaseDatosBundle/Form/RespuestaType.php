<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RespuestaType extends AbstractType {

    private $idTipoRespuesta;

    public function __construct($idTipoRespuesta) {
        $this->idTipoRespuesta = $idTipoRespuesta;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $this->setCamposRespuesta();

        if ($this->idTipoRespuesta == 3 || $this->idTipoRespuesta == 4 || $this->idTipoRespuesta == 6) {
            $builder->add('correcta', 'choice', array('choices' => array(1 => 'Sí', 0 => 'No'), 'data' => 0, 'label' => '¿Es correcta? ', 'multiple' => false, 'expanded' => false, 'attr' => array('style' => 'width: 96%; margin: 2% auto;')));
        }
        
        if ($this->idTipoRespuesta != 5 || $this->idTipoRespuesta == 7) {
            $builder->add('textoRespuesta', 'textarea', array("label" => "Texto de la respuesta: ", "required" => TRUE, "attr" => array('class' => 'form-control', 'style' => 'width: 96%; margin: 2% auto;')));
        }

        if ($this->idTipoRespuesta == 2 || $this->idTipoRespuesta == 3 || $this->idTipoRespuesta == 8) {
            $builder->add('textoRetroalimentacion', 'textarea', array("label" => "Retroalimentación: ", "required" => FALSE, "attr" => array('class' => 'form-control', 'style' => 'width: 96%; margin: 2% auto;')));
        }

        if ($this->idTipoRespuesta == 9) {
            $builder->add('extra', 'textarea', array("label" => "Extra: ", "required" => TRUE, "attr" => array('class' => 'form-control', 'style' => 'width: 96%; margin: 2% auto;')));
        }
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

    private function setCamposRespuesta() {
        if ($this->idTipoRespuesta != 3) {
            
        }
    }

}
