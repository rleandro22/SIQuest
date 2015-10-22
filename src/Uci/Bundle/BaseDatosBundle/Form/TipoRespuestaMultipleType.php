<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TipoRespuestaMultipleType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('respuesta', new RespuestaType(), array(
                    'data_class' => 'Uci\Bundle\BaseDatosBundle\Entity\Respuesta',
                    'label' => ' '))
                ->add('correcta', 'choice', array('choices' => array(1 => 'Sí', 0 => 'No'), 'label' => '¿Es correcta? ',  'multiple' => false, 'expanded' => false, 'required' => true))
                ->add('porcentajeCorreccion');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Uci\Bundle\BaseDatosBundle\Entity\TipoRespuestaMultiple'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'uci_bundle_basedatosbundle_tiporespuestamultiple';
    }

}
