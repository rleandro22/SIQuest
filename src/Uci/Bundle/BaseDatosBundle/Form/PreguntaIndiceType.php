<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PreguntaIndiceType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $factory = $builder->getFormFactory();
        $builder
                ->add('libro', 'entity', array('class' => 'UciBaseDatosBundle:Libro', 'required' => false, 'empty_value' => 'Libro'));
        $capituloSubscriber = new EventSuscribers\AgregarCapituloSuscriber($factory);
        $builder->addEventSubscriber($capituloSubscriber);
        $grupoSubscriber = new EventSuscribers\AgregarGrupoSuscriber($factory);
        $builder->addEventSubscriber($grupoSubscriber);
        $areaSubscriber = new EventSuscribers\AgregarAreaSuscriber($factory);
        $builder->addEventSubscriber($areaSubscriber);
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
