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
}
