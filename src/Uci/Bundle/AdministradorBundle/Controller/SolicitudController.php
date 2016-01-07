<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Uci\Bundle\BaseDatosBundle\Form\SolicitudIndiceType;
use Uci\Bundle\BaseDatosBundle\Form\SolicitudType;
use Uci\Bundle\BaseDatosBundle\Form\SolicitudNuevaType;
use Uci\Bundle\BaseDatosBundle\Entity\Solicitud;

class SolicitudController extends Controller {

    public function aIndiceSolicitudAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new SolicitudIndiceType());
        $form->handleRequest($request);
        $entities = $em->getRepository('UciBaseDatosBundle:Solicitud')->findBy(array(), array('textosolicitud' => 'ASC'));
        if ($request->getMethod() == 'POST') {
            $curso = $form['curso']->getData();
            if ($curso) {
                $entities = $em->getRepository('UciBaseDatosBundle:Solicitud')->createQueryBuilder('u')
                                ->innerJoin('u.curso', 'g')
                                ->where('g.id = :id')
                                ->setParameter('id', $curso->getId())
                                ->orderBy('u.textosolicitud', 'ASC')
                                ->getQuery()->getResult();
            }
        }
        return $this->render('UciAdministradorBundle:VistaSolicitud:indiceSolicitud.html.twig', array(
                    'entities' => $entities,
                    'form' => $form->createView()
        ));
    }

    public function aSolicitudesActivasAction(Request $request) {
        if (strcmp(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH', FILTER_SANITIZE_STRING), 'XMLHttpRequest') == 0) {
            $em = $this->getDoctrine()->getManager();
            $numeroSolicitudes = $em->getRepository('UciBaseDatosBundle:Solicitud')->createQueryBuilder('u')
                    ->select('COUNT(u)')
                    ->where('u.activa = 1')
                    ->getQuery()
                    ->getSingleScalarResult();
            return new JsonResponse(array('numeroSolicitudes' => $numeroSolicitudes));
        }
    }

    public function aIngresarSolicitudAction(Request $request) {
        $entity = new Solicitud();
        $form = $this->createForm(new SolicitudNuevaType(), $entity);
        $form->handleRequest($request);
        $error = '';
        if ($request->getMethod() == 'POST') {
            $error = $form->getErrors();
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $entity->setActiva(1);
                $em->persist($entity);
                $em->flush();
                return $this->redirectToRoute('uci_administrador_indicesolicitudes');
            }
        }
        return $this->render('UciAdministradorBundle:VistaSolicitud:registrarSolicitud.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'error' => $error,
        ));
    }

    public function aEditarSolicitudAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UciBaseDatosBundle:Solicitud')->find($id);
        $curso = $entity->getCurso()[0];
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }
        $form = $this->createForm(new SolicitudType($curso), $entity);
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em->flush();
            }
            return $this->redirectToRoute('uci_administrador_indicesolicitudes');
        }
        return $this->render('UciAdministradorBundle:VistaSolicitud:editarSolicitud.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView()
        ));
    }

    public function aBorrarSolicitudAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('UciBaseDatosBundle:Solicitud')->find($id);
        $curso = $solicitud->getCurso()[0];
        $solicitud->removeCurso($curso);
        $em->remove($solicitud);
        $em->flush();
        return $this->redirectToRoute('uci_administrador_indicesolicitudes');
    }

}
