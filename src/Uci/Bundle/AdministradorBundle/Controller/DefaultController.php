<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Uci\Bundle\BaseDatosBundle\Entity\Usuario;

class DefaultController extends Controller
{
    public function aInicioAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            return $this->render('UciAdministradorBundle:Vista:index.html.twig', array('usuario' => $session->get('usuario')));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }
}
