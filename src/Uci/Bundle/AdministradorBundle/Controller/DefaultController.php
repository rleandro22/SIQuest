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
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UciBaseDatosBundle:Usuario')->findAll();

        return $this->render('UciAdministradorBundle:Vista:indiceUsuario.html.twig', array(
                    'entities' => $entities,
        ));
    }

}
