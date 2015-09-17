<?php

namespace Uci\Bundle\DecanoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UciDecanoBundle:Default:index.html.twig', array('name' => $name));
    }
}
