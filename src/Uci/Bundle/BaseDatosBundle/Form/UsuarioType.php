<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre', 'text', array("label" => "Nombre: ", "required" => true, "attr" => array('class' => 'form-control')))
                ->add('apellidos', 'text', array("label" => "Apellidos: ", "required" => true, "attr" => array('class' => 'form-control')))
                ->add('username', 'text', array("label" => "Usuario: ", "required" => true, "attr" => array('class' => 'form-control')))
                ->add('password', 'repeated', array('type' => 'password', 'invalid_message' => 'Las contraseñas no son iguales, repitelo', 'required' => true, 'first_options' => array('label' => 'Contraseña: ', "attr" => array('class' => 'form-control')), 'second_options' => array('label' => 'Repetir contraseña: ', "attr" => array('class' => 'form-control'))))
                //->add('salt')
                ->add('email', 'email', array("label" => "Correo electronico: ", "required" => true, "attr" => array('class' => 'form-control')))
                ->add('rol');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Uci\Bundle\BaseDatosBundle\Entity\Usuario'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'uci_bundle_basedatosbundle_usuario';
    }

}
