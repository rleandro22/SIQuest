<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioMatriculaType extends AbstractType {

    private $tipoUsuario;

    public function __construct($tipoUsuario) {
        $this->tipoUsuario = $tipoUsuario;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        //Es profesor
        if ($this->tipoUsuario == 1) {
            $builder
                    ->add('usuario', 'entity', array('class' => 'UciBaseDatosBundle:Profesor', 'required' => true, 'mapped' => false));
        }
        //Es asistente
        else {
            $builder
                    ->add('usuario', 'entity', array('class' => 'UciBaseDatosBundle:AsistenteAcademica', 'required' => true, 'mapped' => false));
        }
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
        return 'uci_bundle_basedatosbundle_curso';
    }

}
