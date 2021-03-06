<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Regex;

class VerCuestionarioType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('cuestionarioname', 'text', array("label" => "Nombre corto: ", "required" => true, "attr" => array('class' => 'form-control')))
                ->add('curso', 'entity', array('class' => 'UciBaseDatosBundle:Curso', 'required' => true, 'empty_value' => 'Curso'))
                ->add('cantidadPreguntas', 'integer', array("label" => "Cant. Preguntas: ", 'attr' => array('min' => 1), "required" => TRUE, 'precision' => 0, 'constraints' => array(
                        new Regex(array(
                            'pattern' => '/^[1-9]\d*$/',
                            'message' => 'Use solo números positivos.'
        )))));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Uci\Bundle\BaseDatosBundle\Entity\Cuestionario'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'uci_bundle_basedatosbundle_cuestionario';
    }

}
