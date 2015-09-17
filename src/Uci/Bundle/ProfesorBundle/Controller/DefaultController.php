<?php

namespace Uci\Bundle\ProfesorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UciProfesorBundle:Default:index.html.twig', array('name' => $name));
    }
}
