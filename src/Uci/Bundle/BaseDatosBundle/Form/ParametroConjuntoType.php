<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ParametroConjuntoType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $factory = $builder->getFormFactory();
        $capituloSubscriber = new EventSuscribers\AgregarCapituloSuscriber($factory);
        $builder->addEventSubscriber($capituloSubscriber);
        $builder->add('libro', 'entity', array('class' => 'UciBaseDatosBundle:Libro', 'required' => false, 'empty_value' => 'Libro'))
                ->add('numeroPaginaDe', 'integer', array("label" => "Página Num.: ", "mapped" => false, "required" => false, 'precision' => 0, 'constraints' => array(
                        new Regex(array(
                            'pattern' => '/^[0-9]\d*$/',
                            'message' => 'Use solo números positivos.'
                        )))))
                ->add('numeroPaginaHasta', 'integer', array("label" => "Página Num.: ", "mapped" => false, "required" => false, 'precision' => 0, 'constraints' => array(
                        new Regex(array(
                            'pattern' => '/^[0-9]\d*$/',
                            'message' => 'Use solo números positivos.'
                        )))))
                ->add('areaConocimiento', 'entity', array('class' => 'UciBaseDatosBundle:AreaConocimiento', 'required' => false, 'attr' => array('style' => 'width: 100%')))
                ->add('trianguloTalento', 'entity', array('class' => 'UciBaseDatosBundle:TrianguloTalento', 'required' => false, 'attr' => array('style' => 'width: 100%')))
                ->add('grupoProcesos', 'entity', array('class' => 'UciBaseDatosBundle:GrupoProcesos', 'required' => false, 'attr' => array('style' => 'width: 100%')))
                ->add('tipoPrueba', 'entity', array('class' => 'UciBaseDatosBundle:TipoPrueba', 'expanded' => true, 'multiple' => true, 'required' => false, 'attr' => array('style' => 'width: 100%')))
                ->add('tipoRespuesta', 'entity', array('class' => 'UciBaseDatosBundle:TipoRespuesta', 'expanded' => true, 'multiple' => true, 'required' => false, 'attr' => array('style' => 'width: 100%')))
        ;
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
        return 'uci_bundle_basedatosbundle_parametro_conjunto';
    }

}
