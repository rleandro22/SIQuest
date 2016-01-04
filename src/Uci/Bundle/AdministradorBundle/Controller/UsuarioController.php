<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Uci\Bundle\BaseDatosBundle\Entity\Usuario;
use Uci\Bundle\BaseDatosBundle\Form\UsuarioType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormError;

class UsuarioController extends Controller {

    public function aIndiceUsuarioAction() {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('UciBaseDatosBundle:Usuario')->findBy(array(), array('nombre' => 'ASC'));
        return $this->render('UciAdministradorBundle:VistaUsuario:indiceUsuario.html.twig', array(
                    'entities' => $entities,
        ));
    }

    public function aRegistrarUsuarioAction(Request $request) {
        $entity = new Usuario();
        $form = $this->createForm(new UsuarioType(0), $entity);
        $form->handleRequest($request);
        $error = '';
        if ($request->getMethod() == 'POST') {
            $clave = $form["password"]->getData();
            if (empty($clave)) {
                $form->addError(new FormError('Debe ingresar la clave'));
            }
            $error = $form->getErrors();
            if ($form->isValid()) {
                $this->setSecurePassword($entity);
                $em = $this->getDoctrine()->getManager();
                try {
                    $em->persist($entity);
                    $rol = $entity->getRol()->getNombre();
                    $this->agregaOtrasTablas($entity, $rol, $form);
                    $em->flush();
                    return $this->redirectToRoute('uci_administrador_indiceuser');
                } catch (\Doctrine\DBAL\DBALException $e) {
                    if ($e->getPrevious() && 0 === strpos($e->getPrevious()->getCode(), '23')) {
                        $error = 'Este usuario ya existe';
                    }
                }
            }
        }
        return $this->render('UciAdministradorBundle:VistaUsuario:registrarUsuario.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'error' => $error,
        ));
    }

    public function aEditarUsuarioAction(Request $request, $id) {
        $editaTodas = 0;
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UciBaseDatosBundle:Usuario')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }
        $rolInicial = $entity->getRol()->getNombre();
        if ($rolInicial == 'Profesor') {
            $profesor = $em->getRepository('UciBaseDatosBundle:Profesor')->findOneBy(array('usuario' => $id));
            $editaTodas = $profesor->getEditatodas();
        }
        $form = $this->createForm(new UsuarioType($editaTodas), $entity);
        $editForm = $form;
        $claveVieja = $entity->getPassword();
        $error = '';
        if ($request->getMethod() == 'POST') {
            $editForm->handleRequest($request);
            $error = $form->getErrors();
            if ($editForm->isValid()) {
                try {
                    $this->modificarOtrasTablas($entity, $rolInicial, $form);
                    if ($entity->getPassword() == null) {
                        $entity->setPassword($claveVieja);
                    } else {
                        $this->setSecurePassword($entity);
                    }
                    $em->flush();
                    return $this->redirectToRoute('uci_administrador_indiceuser');
                } catch (\Doctrine\DBAL\DBALException $e) {
                    if ($e->getPrevious() && 0 === strpos($e->getPrevious()->getCode(), '23')) {
                        $error = 'Este usuario ya existe';
                    }
                }
            }
        }


        return $this->render('UciAdministradorBundle:VistaUsuario:editarUsuario.html.twig', array(
                    'entity' => $entity,
                    'form' => $editForm->createView(),
                    'error' => $error,
                    'editaTodas' => $editaTodas,
        ));
    }

    public function aBorrarUsuarioAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UciBaseDatosBundle:Usuario')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }
        $rol = $entity->getRol()->getNombre();
        if ($rol == 'Profesor') {
            $profesorBorrar = $em->getRepository('UciBaseDatosBundle:Profesor')->findOneBy(array('usuario' => $entity->getId()));
            $em->remove($profesorBorrar);
            $em->flush();
        } else if ($rol == 'Asistente') {
            $asistenteBorrar = $em->getRepository('UciBaseDatosBundle:AsistenteAcademica')->findOneBy(array('usuario' => $entity->getId()));
            $em->remove($asistenteBorrar);
            $em->flush();
        }
        $em->remove($entity);
        $em->flush();
        return $this->redirectToRoute('uci_administrador_indiceuser');
    }

    private function modificarOtrasTablas($entity, $rolInicial, $form) {
        $em = $this->getDoctrine()->getManager();
        $rolNuevo = $entity->getRol()->getNombre();
        if ($rolNuevo != $rolInicial) {
            if ($rolNuevo == 'Profesor') {
                $edita = $form["editatodas"]->getData();
                $profesor = new \Uci\Bundle\BaseDatosBundle\Entity\Profesor();
                $profesor->setUsuario($entity);
                $profesor->setEditatodas($edita);
                $em->persist($profesor);
            } else if ($rolNuevo == 'Asistente') {
                $asistente = new \Uci\Bundle\BaseDatosBundle\Entity\AsistenteAcademica();
                $asistente->setUsuario($entity);
                $em->persist($asistente);
            }
            if ($rolInicial == 'Profesor') {
                $profesorBorrar = $em->getRepository('UciBaseDatosBundle:Profesor')->findOneBy(array('usuario' => $entity->getId()));
                $em->remove($profesorBorrar);
                $em->flush();
            } else if ($rolInicial == 'Asistente') {
                $asistenteBorrar = $em->getRepository('UciBaseDatosBundle:AsistenteAcademica')->findOneBy(array('usuario' => $entity->getId()));
                $em->remove($asistenteBorrar);
                $em->flush();
            }
        } else {
            $rol = $entity->getRol()->getNombre();
            if ($rol == 'Profesor') {
                $profesor = $em->getRepository('UciBaseDatosBundle:Profesor')->findOneBy(array('usuario' => $entity->getId()));
                $edita = $form["editatodas"]->getData();
                $profesor->setEditatodas($edita);
                $em->flush();
            }
        }
    }

    private function agregaOtrasTablas($entity, $rol, $form) {
        $em = $this->getDoctrine()->getManager();
        if ($rol == 'Profesor') {
            $edita = $form["editatodas"]->getData();
            $profesor = new \Uci\Bundle\BaseDatosBundle\Entity\Profesor();
            $profesor->setUsuario($entity);
            $profesor->setEditatodas($edita);
            $em->persist($profesor);
        } else if ($rol == 'Asistente') {
            $asistente = new \Uci\Bundle\BaseDatosBundle\Entity\AsistenteAcademica();
            $asistente->setUsuario($entity);
            $em->persist($asistente);
        }
        $em->flush();
    }

    private function setSecurePassword(&$entity) {
        $entity->setSalt(md5(time()));
        $encoder = new \Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder('sha512', true, 10);
        $password = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
        $entity->setPassword($password);
    }

}
