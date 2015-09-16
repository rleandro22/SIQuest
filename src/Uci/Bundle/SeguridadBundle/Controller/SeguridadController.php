<?php

namespace Uci\Bundle\SeguridadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SeguridadController extends Controller {

    public function indexAction() {
        return $this->render('UciSeguridadBundle:VistaIdentificacion:index.html.twig');
    }

    public function identificacionAction() {
        return $this->render('UciSeguridadBundle:VistaIdentificacion:identificacion.html.twig');
    }

}
