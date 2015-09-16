<?php

namespace Uci\Bundle\PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UciPrincipalBundle:Default:index.html.twig', array('name' => $name));
    }
}
