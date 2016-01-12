<?php

namespace Uci\Bundle\ProfesorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function pInicioAction() {
        return $this->render('UciProfesorBundle:Vista:index.html.twig');
    }

}
