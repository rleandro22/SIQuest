<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LibroType extends AbstractType {
    
    private $edita;

    public function __construct($edita) {
        $this->edita= $edita;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('titulo')
                ->add('anio')
                ->add('esPmbok', 'choice', array('choices' => array(1 => 'Sí', 0 => 'No'), 'label' => '¿Es Pmbok? ', 'mapped' => false, 'multiple' => false, 'expanded' => true, 'data' => $this->edita))
                ->add('idiomas')
                ->add('pmbok')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Uci\Bundle\BaseDatosBundle\Entity\Libro'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'uci_bundle_basedatosbundle_libro';
    }

}
