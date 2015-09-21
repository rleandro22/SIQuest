<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function aInicioAction() {
            return $this->render('UciAdministradorBundle:Vista:index.html.twig');
    }
    public function aIndiceUsuarioAction() {
            return $this->render('UciAdministradorBundle:Vista:indiceUsuario.html.twig');
    }
}
