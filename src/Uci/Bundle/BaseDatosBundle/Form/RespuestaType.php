<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RespuestaType extends AbstractType {

    private $idTipoRespuesta;
    private $labelCorrecta;
    private $labelTextoRespuesta;
    private $labelTextoRetroalimentacion;
    private $labelTextoExtra;
    private $correcta = 'Si';
    private $incorrecta = 'No';
    private $tipoDinamico = 'textarea';
    private $requerida = FALSE;
        

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
            $builder->add('correcta', 'choice', array('choices' => array(1 => $this->correcta, 0 => $this->incorrecta), 'data' => 0, 'label' => $this->labelCorrecta, 'multiple' => false, 'expanded' => false));
        }
        
        if ($this->idTipoRespuesta != 5 || $this->idTipoRespuesta != 7) {
            $builder->add('textoRespuesta', $this->tipoDinamico, array("label" => $this->labelTextoRespuesta, "required" => TRUE));
        }

        if ($this->idTipoRespuesta == 2 || $this->idTipoRespuesta == 3 || $this->idTipoRespuesta == 8) {
            $builder->add('textoRetroalimentacion', 'textarea', array("label" => $this->labelTextoRetroalimentacion, "required" => FALSE));
        }

        if ($this->idTipoRespuesta == 9) {
            $builder->add('extra', 'textarea', array("label" => $this->labelTextoExtra, "required" => $this->requerida));
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
        if ($this->idTipoRespuesta == 1) {
            $this->labelTextoRespuesta = 'Respuesta válida: ';
        }
        if ($this->idTipoRespuesta == 2) {
            $this->labelTextoRespuesta = 'Numero de la respuesta: ';
            $this->tipoDinamico = 'integer';
        }
        if ($this->idTipoRespuesta == 3) {
            $this->labelCorrecta = '¿Es la respuesta correcta? ';
            $this->labelTextoRespuesta = 'Enunciado de la respuesta: ';
        }
        if ($this->idTipoRespuesta == 6) {
            $this->labelCorrecta = '¿Es la respuesta válida? ';
            $this->labelTextoRespuesta = 'Palabra de la respuesta: ';
        }
        if ($this->idTipoRespuesta == 8) {
            $this->labelTextoRespuesta = 'Respuesta válida: ';
        }
        if ($this->idTipoRespuesta == 9) {
            $this->labelTextoRespuesta = 'Enunciado de la respuesta: ';
            $this->labelTextoExtra = 'Escriba la respuesta asociada: ';
            $this->requerida = TRUE;
        }
    }

}
