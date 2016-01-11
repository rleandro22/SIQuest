<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Uci\Bundle\BaseDatosBundle\Entity\Generacion;
use Uci\Bundle\BaseDatosBundle\Entity\Curso;
use Uci\Bundle\BaseDatosBundle\Form\GeneracionType;
use Uci\Bundle\BaseDatosBundle\Form\CursoType;
use Uci\Bundle\BaseDatosBundle\Form\UsuarioMatriculaType;

class AreaConocimientoController extends Controller {

    public function aIndiceAreaConocimientoAction() {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('UciBaseDatosBundle:AreaConocimiento')->findBy(array(), array('nombreArea' => 'ASC'));
        return $this->render('UciAdministradorBundle:VistaAreaConocimiento:indiceAreaConocimiento.html.twig', array(
                    'entities' => $entities,
        ));
    }


    public function aEditarAreaConocimientoAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UciBaseDatosBundle:Generacion')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }
        $form = $this->createForm(new GeneracionType(), $entity);
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em->flush();
            }
            return $this->redirectToRoute('uci_administrador_indicecategoria');
        }
        return $this->render('UciAdministradorBundle:VistaCategoria:editarCategoria.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView()
        ));
    }


    public function aIngresarAreaConocimientoAction(Request $request) {
        $entity = new Generacion();
        $form = $this->createForm(new GeneracionType(), $entity);
        $form->handleRequest($request);
        $error = '';
        if ($request->getMethod() == 'POST') {
            $error = $form->getErrors();
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();
                return $this->redirectToRoute('uci_administrador_indicecategoria');
            }
        }
        return $this->render('UciAdministradorBundle:VistaCategoria:registrarCategoria.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'error' => $error,
        ));
    }

    public function aBorrarAreaConocimientoAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UciBaseDatosBundle:Generacion')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }
        $em->remove($entity);
        $em->flush();
        return $this->redirectToRoute('uci_administrador_indicecategoria');
    }

}
