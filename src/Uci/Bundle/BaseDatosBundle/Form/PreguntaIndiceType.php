<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PreguntaIndiceType extends AbstractType {
//    private $libro;
//
//    public function __construct($libro) {
//        $this->libro = $libro;
//    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('libro', 'entity', array('class' => 'UciBaseDatosBundle:Libro', 'required' => false));
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
        return 'PreguntaIndiceType';
    }

}
