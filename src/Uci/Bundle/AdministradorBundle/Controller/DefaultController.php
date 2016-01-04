<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function aInicioAction() {
        return $this->render('UciAdministradorBundle:Vista:index.html.twig');
    }
}
