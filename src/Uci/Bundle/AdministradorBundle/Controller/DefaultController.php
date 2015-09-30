<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Uci\Bundle\BaseDatosBundle\Entity\Usuario;
use Uci\Bundle\BaseDatosBundle\Form\UsuarioType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormError;

class DefaultController extends Controller {

    public function aInicioAction() {
        return $this->render('UciAdministradorBundle:Vista:index.html.twig');
    }

    public function aIndiceUsuarioAction() {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('UciBaseDatosBundle:Usuario')->findBy(array(), array('nombre' => 'ASC'));
        return $this->render('UciAdministradorBundle:Vista:indiceUsuario.html.twig', array(
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
                $em->persist($entity);
                $rol = $entity->getRol()->getNombre();
                if ($rol == 'Profesor') {
                    $edita = $form["editatodas"]->getData();
                    $profesor = new \Uci\Bundle\BaseDatosBundle\Entity\Profesor();
                    $profesor->setUsuario($entity);
                    $profesor->setEditatodas($edita);
                    $em->persist($profesor);
                }
                $em->flush();
                return $this->redirectToRoute('uci_administrador_indiceuser');
            }
        }
        return $this->render('UciAdministradorBundle:Vista:registrarUsuario.html.twig', array(
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
                $this->modificarOtrasTablas($entity, $rolInicial, $form);
                if ($entity->getPassword() == null) {
                    $entity->setPassword($claveVieja);
                } else {
                    $this->setSecurePassword($entity);
                }
                $em->flush();
                return $this->redirectToRoute('uci_administrador_indiceuser');
            }
        }
        return $this->render('UciAdministradorBundle:Vista:editarUsuario.html.twig', array(
                    'entity' => $entity,
                    'form' => $editForm->createView(),
                    'error' => $error,
                    'editaTodas' => $editaTodas,
        ));
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
            } else {
                $profesor = $em->getRepository('UciBaseDatosBundle:Profesor')->findOneBy(array('usuario' => $entity->getId()));
                $em->remove($profesor);
                $em->flush();
            }
        }
    }

    private function setSecurePassword(&$entity) {
        $entity->setSalt(md5(time()));
        $encoder = new \Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder('sha512', true, 10);
        $password = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
        $entity->setPassword($password);
    }

}
