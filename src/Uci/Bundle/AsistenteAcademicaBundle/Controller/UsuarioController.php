<?php

namespace Uci\Bundle\AsistenteAcademicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Uci\Bundle\BaseDatosBundle\Form\UsuarioTypeSinDerechos;
use Symfony\Component\HttpFoundation\Request;

class UsuarioController extends Controller {

    public function aEditarUsuarioAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UciBaseDatosBundle:Usuario')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }
        $form = $this->createForm(new UsuarioTypeSinDerechos(), $entity);
        $editForm = $form;
        $claveVieja = $entity->getPassword();
        $error = '';
        if ($request->getMethod() == 'POST') {
            $editForm->handleRequest($request);
            $error = $form->getErrors();
            if ($editForm->isValid()) {
                if ($entity->getPassword() == null) {
                    $entity->setPassword($claveVieja);
                } else {
                    $this->setSecurePassword($entity);
                }
                try {
                    $em->persist($entity);
                    $em->flush();
                } catch (\Doctrine\DBAL\DBALException $e) {
                    if ($e->getPrevious() && 0 === strpos($e->getPrevious()->getCode(), '23')) {
                        $entity = $em->getRepository('UciBaseDatosBundle:Usuario')->find($id);
                        $error = 'Este usuario ya existe';
                    }
                }
            }
        }


        return $this->render('UciAsistenteAcademicaBundle:VistaUsuario:editarUsuario.html.twig', array(
                    'entity' => $entity,
                    'form' => $editForm->createView(),
                    'error' => $error
        ));
    }

    private function setSecurePassword(&$entity) {
        $entity->setSalt(md5(time()));
        $encoder = new \Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder('sha512', true, 10);
        $password = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
        $entity->setPassword($password);
    }

}
