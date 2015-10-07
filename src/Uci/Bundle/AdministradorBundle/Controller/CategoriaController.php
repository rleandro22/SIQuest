<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Uci\Bundle\BaseDatosBundle\Entity\Generacion;
use Uci\Bundle\BaseDatosBundle\Entity\Curso;
use Uci\Bundle\BaseDatosBundle\Form\GeneracionType;
use Uci\Bundle\BaseDatosBundle\Form\CursoType;

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
        $generacion = $em->getRepository('UciBaseDatosBundle:Generacion')->find($id);
        $entities = $em->getRepository('UciBaseDatosBundle:Curso')->createQueryBuilder('u')
                        ->innerJoin('u.generacion', 'g')
                        ->where('g.id = :id')
                        ->setParameter('id', $id)
                        ->getQuery()->getResult();
        foreach ($entities as $entity) {
            $this->setTodasLasPropiedades($entity);
        }
        $error = '';
        if (empty($entities)) {
            $error = 'La ' . $generacion->getGeneracion() . ' aún no tiene cursos';
        }
        return $this->render('UciAdministradorBundle:VistaCategoria:indiceCursos.html.twig', array(
                    'entities' => $entities,
                    'error' => $error,
                    'generacion' => $generacion
        ));
    }

    public function aIngresarCursoAction(Request $request, $id) {
        $entity = new Curso();
        $form = $this->createForm(new CursoType(), $entity);
        $form->handleRequest($request);
        $error = '';
        if ($request->getMethod() == 'POST') {
            $error = $form->getErrors();
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $entity->addGeneracion($em->getRepository('UciBaseDatosBundle:Generacion')->find($id));
                $em->persist($entity);
                $em->flush();
                return $this->redirect($this->generateUrl("uci_administrador_indicecurso", array("id" => $id)));
            }
        }
        return $this->render('UciAdministradorBundle:VistaCategoria:registrarCurso.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'error' => $error,
                    'id' => $id
        ));
    }

    public function aEditarCategoriaAction(Request $request, $id) {
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

    private function setTodasLasPropiedades(&$entityp) {
        $em = $this->getDoctrine()->getManager();
        $entityp = $em->getRepository('UciBaseDatosBundle:Curso')->find($entityp->getId());
    }

}
