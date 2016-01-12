<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FiltrarCuestionariosProfesorType extends AbstractType {

    private $idProfesor;

    public function __construct($idProfesor) {
        $this->idProfesor = $idProfesor;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $idProfesor = $this->idProfesor;
        $builder
                ->add('curso', 'entity', array(
                    'class' => 'UciBaseDatosBundle:Curso',
                    'required' => false,
                    'expanded' => false,
                    'multiple' => false,
                    'mapped' => TRUE,
                    'label' => FALSE,
                    'query_builder' => function(\Doctrine\ORM\EntityRepository $r) use($idProfesor) {
                        return $r->createQueryBuilder('w')
                                ->innerJoin('w.profesor', 'a')
                                ->where('a.id = :idProfesor')
                                ->setParameter('idProfesor', $idProfesor);
                    }));
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
        return 'uci_bundle_basedatosbundle_filtracuestionarioprofesor';
    }

}
