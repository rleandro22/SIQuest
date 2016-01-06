<?php

namespace Uci\Bundle\AsistenteAcademicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller {

    public function aAInicioAction() {
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $asistente = $em->getRepository('UciBaseDatosBundle:AsistenteAcademica')->findBy(array('usuario' => $user->getId()));
        $idAsistente = $asistente[0]->getId();
        $numeroSolicitudes = $em->getRepository('UciBaseDatosBundle:Solicitud')->createQueryBuilder('u')
                ->select('COUNT(u)')
                ->innerJoin('u.curso', 'g')
                ->innerJoin('g.asistenteAcademica', 'a')
                ->where('u.activa = 1')
                ->andWhere('a.id = :idAsist')
                ->setParameter('idAsist', $idAsistente)
                ->getQuery()
                ->getSingleScalarResult();
        return $this->render('UciAsistenteAcademicaBundle:Vista:index.html.twig', array(
                    'numeroSolicitudes' => $numeroSolicitudes));
    }

    public function aASolicitudesActivasAction(Request $request) {
        if (strcmp(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH', FILTER_SANITIZE_STRING), 'XMLHttpRequest') == 0) {
            $user = $this->get('security.context')->getToken()->getUser();
            $em = $this->getDoctrine()->getManager();
            $asistente = $em->getRepository('UciBaseDatosBundle:AsistenteAcademica')->findBy(array('usuario' => $user->getId()));
            $idAsistente = $asistente[0]->getId();
            $numeroSolicitudes = $em->getRepository('UciBaseDatosBundle:Solicitud')->createQueryBuilder('u')
                    ->select('COUNT(u)')
                    ->innerJoin('u.curso', 'g')
                    ->innerJoin('g.asistenteAcademica', 'a')
                    ->where('u.activa = 1')
                    ->andWhere('a.id = :idAsist')
                    ->setParameter('idAsist', $idAsistente)
                    ->getQuery()
                    ->getSingleScalarResult();
            return new JsonResponse(array('numeroSolicitudes' => $numeroSolicitudes));
        }
    }

}
