<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IdiomasType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigoLenguaje')
            ->add('nombreLenguaje')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Uci\Bundle\BaseDatosBundle\Entity\Idiomas'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uci_bundle_basedatosbundle_idiomas';
    }
}
