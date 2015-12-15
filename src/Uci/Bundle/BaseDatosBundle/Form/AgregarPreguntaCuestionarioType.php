<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AgregarPreguntaCuestionarioType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('pregunta', 'entity', array('class' => 'UciBaseDatosBundle:Pregunta', 'required' => false, 'expanded' => true, 'multiple' => false, 'mapped' => FALSE));
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
        return 'uci_agregar_pregunta_cuestionario';
    }

}
