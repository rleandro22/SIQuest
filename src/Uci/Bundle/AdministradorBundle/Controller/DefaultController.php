<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Uci\Bundle\BaseDatosBundle\Entity\Usuario;
use Uci\Bundle\BaseDatosBundle\Form\UsuarioType;

class DefaultController extends Controller {

    public function aInicioAction() {
        return $this->render('UciAdministradorBundle:Vista:index.html.twig');
    }

    public function aIndiceUsuarioAction() {
//        $em = $this->getDoctrine()->getManager();
//
//        $entity = $em->getRepository('UciBaseDatosBundle:Usuario')->find($id);
//
//        if (!$entity) {
//            throw $this->createNotFoundException('Unable to find Usuario entity.');
//        }
//
//        $deleteForm = $this->createDeleteForm($id);
        return $this->render('UciAdministradorBundle:Vista:indiceUsuario.html.twig');
    }

}
