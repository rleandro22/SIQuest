<?php

namespace Uci\Bundle\AsistenteAcademicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function aAInicioAction() {
        return $this->render('UciAsistenteAcademicaBundle:Vista:index.html.twig');
    }
}
