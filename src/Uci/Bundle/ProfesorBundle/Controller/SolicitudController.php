<?php

namespace Uci\Bundle\AsistenteAcademicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Uci\Bundle\BaseDatosBundle\Form\SolicitudIndiceAsistenteType;
use Symfony\Component\HttpFoundation\JsonResponse;

class SolicitudController extends Controller {

    public function aAIndiceSolicitudAction(Request $request) {
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $asistente = $em->getRepository('UciBaseDatosBundle:AsistenteAcademica')->findBy(array('usuario' => $user->getId()));
        $idAsistente = $asistente[0]->getId();
        $form = $this->createForm(new SolicitudIndiceAsistenteType($idAsistente));
        $form->handleRequest($request);
        $entities = $em->getRepository('UciBaseDatosBundle:Solicitud')->createQueryBuilder('u')
                        ->innerJoin('u.curso', 'g')
                        ->innerJoin('g.asistenteAcademica', 'a')
                        ->where('a.id = :idAsist')
                        ->setParameter('idAsist', $idAsistente)
                        ->orderBy('u.textosolicitud', 'ASC')
                        ->getQuery()->getResult();
        if ($request->getMethod() == 'POST') {
            $curso = $form['curso']->getData();
            if ($curso) {
                $entities = $em->getRepository('UciBaseDatosBundle:Solicitud')->createQueryBuilder('u')
                                ->innerJoin('u.curso', 'g')
                                ->innerJoin('g.asistenteAcademica', 'a')
                                ->where('g.id = :id')
                                ->andWhere('a.id = :idAsist')
                                ->setParameter('id', $curso->getId())
                                ->setParameter('idAsist', $idAsistente)
                                ->orderBy('u.textosolicitud', 'ASC')
                                ->getQuery()->getResult();
            }
        }
        return $this->render('UciAsistenteAcademicaBundle:VistaSolicitud:indiceSolicitud.html.twig', array(
                    'entities' => $entities,
                    'form' => $form->createView()
        ));
    }

    public function aAEditarSolicitudAction(Request $request) {
        if (strcmp(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH', FILTER_SANITIZE_STRING), 'XMLHttpRequest') == 0) {
            $idSolicitud = $request->request->get('idSolicitud');
            $estado = $request->request->get('estado');
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UciBaseDatosBundle:Solicitud')->find($idSolicitud);
            $entity->setActiva($estado);
            try {
                $em->persist($entity);
                $em->flush();
                $user = $this->get('security.context')->getToken()->getUser();
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
                return new JsonResponse(array('resultado' => $numeroSolicitudes));
            } catch (Exception $e) {
                return new JsonResponse(array('resultado' => 0));
            }
        }
    }

}
