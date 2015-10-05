<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Uci\Bundle\BaseDatosBundle\Entity\Generacion;
use Uci\Bundle\BaseDatosBundle\Form\GeneracionType;
use Symfony\Component\Form\FormError;

class CategoriaController extends Controller {

    public function aIndiceCategoriaAction() {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('UciBaseDatosBundle:Generacion')->findBy(array(), array('generacion' => 'ASC'));
        return $this->render('UciAdministradorBundle:VistaCategoria:indiceCategoria.html.twig', array(
                    'entities' => $entities,
        ));
    }

    public function aIndiceCursosAction($id) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('UciBaseDatosBundle:Curso');
        $query = $repository->createQueryBuilder('c')
                ->where('c.generacion > :id')
                ->setParameter('id', $id)
                ->orderBy('c.nombrecurso', 'ASC')
                ->getQuery();

        $cursos = $query->getResult();
        $error = '';
//        $form->addError(new FormError('Debe ingresar la clave'));
        return $this->render('UciAdministradorBundle:VistaCategoria:indiceCursos.html.twig', array(
                    'cursos' => $cursos,
                    'error' => $error
        ));
    }

    public function aEditarCategoriaAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UciBaseDatosBundle:Generacion')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }
        $form = $this->createForm(new GeneracionType(), $entity);
        $editForm = $form;
        if ($request->getMethod() == 'POST') {
            $editForm->handleRequest($request);
            if ($editForm->isValid()) {
                $em->flush();
            }
            return $this->redirectToRoute('uci_administrador_indicecategoria');
        }
        return $this->render('UciAdministradorBundle:VistaCategoria:editarCategoria.html.twig', array(
                    'entity' => $entity,
                    'form' => $editForm->createView()
        ));
    }

    public function aIngresarGeneracionAction(Request $request) {
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

    public function aBorrarCategoriaAction($id) {
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
