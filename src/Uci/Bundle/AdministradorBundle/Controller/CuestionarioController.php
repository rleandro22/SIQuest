<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Uci\Bundle\BaseDatosBundle\Form\FiltrarCuestionariosType;
use Symfony\Component\HttpFoundation\JsonResponse;

class CuestionarioController extends Controller {

    public function aIndiceCuestionarioAction() {
        $form = $this->createForm(new FiltrarCuestionariosType());
        return $this->render('UciAdministradorBundle:VistaCuestionario:indiceCuestionario.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    public function aRetornarCuestionariosAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        if (strcmp(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH', FILTER_SANITIZE_STRING), 'XMLHttpRequest') == 0) {
            $idCurso = $request->get('idCurso');
            $nombreCuestionario = $request->get('nombreCuestionario');
            $entities = $em->getRepository('UciBaseDatosBundle:Cuestionario')->createQueryBuilder('u')
                            ->innerJoin('u.curso', 'g')
                            ->where('g.id = :id')
                            ->setParameter('id', $idCurso)
                            ->orderBy('u.cuestionarioname', 'ASC')
                            ->getQuery()->getArrayResult();
        } else {
            $entities = $em->getRepository('UciBaseDatosBundle:Cuestionario')->findBy(array(), array('cuestionarioname' => 'ASC'));
        }


        return $this->render('UciAdministradorBundle:VistaCuestionario:listaCuestionarios.html.twig', array(
                    'entities' => $entities,
        ));
    }

}
