<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Uci\Bundle\BaseDatosBundle\Entity\Generacion;
use Uci\Bundle\BaseDatosBundle\Entity\Curso;
use Uci\Bundle\BaseDatosBundle\Form\GeneracionType;
use Uci\Bundle\BaseDatosBundle\Form\CursoType;
use Uci\Bundle\BaseDatosBundle\Form\UsuarioMatriculaType;

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
                        ->orderBy('u.nombrecurso', 'ASC')
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

    public function aIngresarCursoAction(Request $request, $idGeneracion) {
        $entity = new Curso();
        $form = $this->createForm(new CursoType(), $entity);
        $form->handleRequest($request);
        $error = '';
        if ($request->getMethod() == 'POST') {
            $error = $form->getErrors();
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $generacion = $em->getRepository('UciBaseDatosBundle:Generacion')->find($idGeneracion);
                $entity->addGeneracion($generacion);
                $em->persist($entity);
                $em->flush();
                return $this->redirect($this->generateUrl("uci_administrador_indicecurso", array("id" => $idGeneracion)));
            }
        }
        return $this->render('UciAdministradorBundle:VistaCategoria:registrarCurso.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'error' => $error,
                    'idGeneracion' => $idGeneracion
        ));
    }

    public function matricularUsuarioAction(Request $request, $idCurso, $idGeneracion, $tipoUsuario) {
        $form = $this->createForm(new UsuarioMatriculaType($tipoUsuario));
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $usuario = $form["usuario"]->getData();
                $em = $this->getDoctrine()->getManager();
                $usuario->addCurso($em->getRepository('UciBaseDatosBundle:Curso')->find($idCurso));
                $em->persist($usuario);
                $em->flush();
            }
            return $this->redirect($this->generateUrl("uci_administrador_indicecurso", array("id" => $idGeneracion)));
        }
        return $this->render('UciAdministradorBundle:VistaCategoria:matricularUsuario.html.twig', array(
                    'form' => $form->createView(),
                    'idGeneracion' => $idGeneracion,
                    'idCurso' => $idCurso,
                    'tipoUsuario' => $tipoUsuario,
                    'accion' => 'matricular'
        ));
    }

    public function aDesmatricularUsuarioAction($idGeneracion, $idCurso, $tipoUsuario, $idUsuario) {
        $em = $this->getDoctrine()->getManager();
        $curso = $em->getRepository('UciBaseDatosBundle:Curso')->find($idCurso);
        if ($tipoUsuario == 1) {
            $usuario = $em->getRepository('UciBaseDatosBundle:Profesor')->find($idUsuario);
        } else {
            $usuario = $em->getRepository('UciBaseDatosBundle:AsistenteAcademica')->find($idUsuario);
        }
        $usuario->removeCurso($curso);
        $em->persist($usuario);
        $em->flush();
        return $this->redirect($this->generateUrl("uci_administrador_indicecurso", array("id" => $idGeneracion)));
    }

    public function aEditarCategoriaAction(Request $request, $id) {
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

    public function aEditarCursoAction(Request $request, $id, $idGeneracion) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UciBaseDatosBundle:Curso')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }
        $form = $this->createForm(new CursoType(), $entity);
        $editForm = $form;
        if ($request->getMethod() == 'POST') {
            $editForm->handleRequest($request);
            if ($editForm->isValid()) {
                $em->flush();
            }
            return $this->redirect($this->generateUrl("uci_administrador_indicecurso", array("id" => $idGeneracion)));
        }
        return $this->render('UciAdministradorBundle:VistaCategoria:editarCurso.html.twig', array(
                    'entity' => $entity,
                    'form' => $editForm->createView(),
                    'idGeneracion' => $idGeneracion
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
            }
            return $this->redirectToRoute('uci_administrador_indicecategoria');
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
        try {
            $cursos = $em->getRepository('UciBaseDatosBundle:Curso')->createQueryBuilder('u')
                            ->innerJoin('u.generacion', 'g')
                            ->where('g.id = :id')
                            ->setParameter('id', $entity->getId())
                            ->getQuery()->getResult();
            foreach ($cursos as $curso) {
                $this->borrarCurso($curso->getId());
            }
            $em->remove($entity);
            $em->flush();
        } catch (Exception $e) {
            $em->getConnection()->rollback();
        }
        return $this->redirectToRoute('uci_administrador_indicecategoria');
    }

    public function aBorrarCursoAction($idGeneracion, $id) {
        $this->borrarCurso($id);
        return $this->redirect($this->generateUrl("uci_administrador_indicecurso", array("id" => $idGeneracion)));
    }

    private function borrarCurso($idCurso) {
        $em = $this->getDoctrine()->getManager();
        $curso = $em->getRepository('UciBaseDatosBundle:Curso')->find($idCurso);
        if (!$curso) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }
        $em->getConnection()->beginTransaction();
        try {
            $cuestionarios = $em->getRepository('UciBaseDatosBundle:Cuestionario')->createQueryBuilder('u')
                            ->innerJoin('u.curso', 'g')
                            ->where('g.id = :id')
                            ->setParameter('id', $idCurso)
                            ->getQuery()->getResult();
            foreach ($cuestionarios as $cuestionario) {
                $em->remove($cuestionario);
                $em->clear($cuestionario);
            }
            $em->remove($curso);
            $em->flush();
            $em->commit();
        } catch (Exception $e) {
            $em->getConnection()->rollback();
        }
    }

    private function setTodasLasPropiedades(&$entityp) {
        $em = $this->getDoctrine()->getManager();
        $entityp = $em->getRepository('UciBaseDatosBundle:Curso')->find($entityp->getId());
    }

}
