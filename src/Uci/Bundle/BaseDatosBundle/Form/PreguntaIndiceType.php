<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PreguntaIndiceType extends AbstractType {
//    private $tipoUsuario;
//
//    public function __construct($tipoUsuario) {
//        $this->tipoUsuario = $tipoUsuario;
//    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('libro', 'entity', array('class' => 'UciBaseDatosBundle:Libro', 'required' => false, 'mapped' => false));
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
        return 'uci_bundle_basedatosbundle_preguntaindice';
    }

}
