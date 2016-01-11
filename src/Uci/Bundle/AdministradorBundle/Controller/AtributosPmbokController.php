<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Uci\Bundle\BaseDatosBundle\Entity\AreaConocimiento;
use Uci\Bundle\BaseDatosBundle\Entity\GrupoProcesos;
use Uci\Bundle\BaseDatosBundle\Entity\TrianguloTalento;
use Uci\Bundle\BaseDatosBundle\Form\AreaConocimientoType;
use Uci\Bundle\BaseDatosBundle\Form\GrupoProcesosType;
use Uci\Bundle\BaseDatosBundle\Form\TrianguloTalentoType;

class AtributosPmbokController extends Controller {

    public function aIndiceAtributosPmbokAction() {
        $em = $this->getDoctrine()->getManager();
        $areas = $em->getRepository('UciBaseDatosBundle:AreaConocimiento')->findBy(array(), array('nombreArea' => 'ASC'));
        $grupos = $em->getRepository('UciBaseDatosBundle:GrupoProcesos')->findBy(array(), array('nombreGrupo' => 'ASC'));
        $triangulos = $em->getRepository('UciBaseDatosBundle:TrianguloTalento')->findBy(array(), array('nombreTalento' => 'ASC'));
        return $this->render('UciAdministradorBundle:VistaAtributosPmbok:indiceAtributosPmbok.html.twig', array(
                    'areas' => $areas,
                    'grupos' => $grupos,
                    'triangulos' => $triangulos
        ));
    }

    public function aIngresarAreaAction(Request $request) {
        $entity = new AreaConocimiento();
        $form = $this->createForm(new AreaConocimientoType(), $entity);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();
            }
            return $this->redirectToRoute('uci_administrador_indiceatrpmbok');
        }
        return $this->render('UciAdministradorBundle:VistaAtributosPmbok:registrarArea.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView()
        ));
    }

    public function aEditarAreaAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UciBaseDatosBundle:AreaConocimiento')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }
        $form = $this->createForm(new AreaConocimientoType(), $entity);
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em->flush();
            }
            return $this->redirectToRoute('uci_administrador_indiceatrpmbok');
        }
        return $this->render('UciAdministradorBundle:VistaAtributosPmbok:editarArea.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView()
        ));
    }

    public function aBorrarAreaAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UciBaseDatosBundle:AreaConocimiento')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }
        try {
            $em->remove($entity);
            $em->flush();
        } catch (\Exception $e) {
            return $this->redirectToRoute('uci_administrador_indiceatrpmbok');
        }
        return $this->redirectToRoute('uci_administrador_indiceatrpmbok');
    }
    
    public function aIngresarGrupoAction(Request $request) {
        $entity = new GrupoProcesos();
        $form = $this->createForm(new GrupoProcesosType(), $entity);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();
            }
            return $this->redirectToRoute('uci_administrador_indiceatrpmbok');
        }
        return $this->render('UciAdministradorBundle:VistaAtributosPmbok:registrarGrupo.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView()
        ));
    }

    public function aEditarGrupoAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UciBaseDatosBundle:GrupoProcesos')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }
        $form = $this->createForm(new GrupoProcesosType(), $entity);
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em->flush();
            }
            return $this->redirectToRoute('uci_administrador_indiceatrpmbok');
        }
        return $this->render('UciAdministradorBundle:VistaAtributosPmbok:editarGrupo.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView()
        ));
    }

    public function aBorrarGrupoAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UciBaseDatosBundle:GrupoProcesos')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }
        try {
            $em->remove($entity);
            $em->flush();
        } catch (\Exception $e) {
            return $this->redirectToRoute('uci_administrador_indiceatrpmbok');
        }
        return $this->redirectToRoute('uci_administrador_indiceatrpmbok');
    }
    
    public function aIngresarTrianguloAction(Request $request) {
        $entity = new TrianguloTalento();
        $form = $this->createForm(new TrianguloTalentoType(), $entity);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();
            }
            return $this->redirectToRoute('uci_administrador_indiceatrpmbok');
        }
        return $this->render('UciAdministradorBundle:VistaAtributosPmbok:registrarTriangulo.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView()
        ));
    }

    public function aEditarTrianguloAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UciBaseDatosBundle:TrianguloTalento')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }
        $form = $this->createForm(new TrianguloTalentoType(), $entity);
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em->flush();
            }
            return $this->redirectToRoute('uci_administrador_indiceatrpmbok');
        }
        return $this->render('UciAdministradorBundle:VistaAtributosPmbok:editarTriangulo.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView()
        ));
    }

    public function aBorrarTrianguloAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UciBaseDatosBundle:TrianguloTalento')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }
        try {
            $em->remove($entity);
            $em->flush();
        } catch (\Exception $e) {
            return $this->redirectToRoute('uci_administrador_indiceatrpmbok');
        }
        return $this->redirectToRoute('uci_administrador_indiceatrpmbok');
    }

}
