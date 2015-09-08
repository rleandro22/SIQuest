<?php

namespace Uci\Bundle\DataBaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UciDataBaseBundle:Default:index.html.twig', array('name' => $name));
    }
}
