<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Uci\Bundle\BaseDatosBundle\Form\SolicitudIndiceType;
use Uci\Bundle\BaseDatosBundle\Form\SolicitudType;
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

    public function aIngresarSolicitudAction(Request $request) {
        $entity = new Solicitud();
        $form = $this->createForm(new SolicitudType(), $entity);
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
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }
        $form = $this->createForm(new SolicitudType(), $entity);
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em->flush();
            }
            return $this->redirectToRoute('uci_administrador_indicesolicitudes');
        }
        return $this->render('UciAdministradorBundle:VistaCategoria:editarSolicitud.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView()
        ));
    }

}
