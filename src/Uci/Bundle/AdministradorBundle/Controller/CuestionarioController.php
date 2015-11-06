<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Uci\Bundle\BaseDatosBundle\Form\FiltrarCuestionariosType;
use Uci\Bundle\BaseDatosBundle\Entity\Cuestionario;

class CuestionarioController extends Controller {

    public function aIndiceCuestionarioAction(Request $request) {
        $cuestionario = new Cuestionario();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new FiltrarCuestionariosType(), $cuestionario);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($cuestionario->getCurso()) {
                $idCurso = $cuestionario->getCurso()->getId();
                $entities = $em->getRepository('UciBaseDatosBundle:Cuestionario')->createQueryBuilder('u')
                                ->innerJoin('u.curso', 'g')
                                ->where('g.id = :id')
                                ->setParameter('id', $idCurso)
                                ->orderBy('u.cuestionarioname', 'ASC')
                                ->getQuery()->getArrayResult();
            } else {
                $entities = $em->getRepository('UciBaseDatosBundle:Cuestionario')->findBy(array(), array('cuestionarioname' => 'ASC'));
            }
        } else {
            $entities = $em->getRepository('UciBaseDatosBundle:Cuestionario')->findBy(array(), array('cuestionarioname' => 'ASC'));
        }
        return $this->render('UciAdministradorBundle:VistaCuestionario:indiceCuestionario.html.twig', array(
                    'form' => $form->createView(),
                    'entities' => $entities,
        ));
    }

}
