<?php

namespace Uci\Bundle\BaseDatosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FiltrarCuestionariosAsistenteType extends AbstractType {

    private $idAsistente;

    public function __construct($idAsistente) {
        $this->idAsistente = $idAsistente;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $idAsistente = $this->idAsistente;
        $builder
                ->add('curso', 'entity', array(
                    'class' => 'UciBaseDatosBundle:Curso',
                    'required' => false,
                    'expanded' => false,
                    'multiple' => false,
                    'mapped' => TRUE,
                    'label' => FALSE,
                    'query_builder' => function(\Doctrine\ORM\EntityRepository $r) use($idAsistente) {
                        return $r->createQueryBuilder('w')
                                ->innerJoin('w.asistenteAcademica', 'a')
                                ->where('a.id = :idAsistente')
                                ->setParameter('idAsistente', $idAsistente);
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
        return 'uci_bundle_basedatosbundle_filtracuestionarioasistenet';
    }

}
