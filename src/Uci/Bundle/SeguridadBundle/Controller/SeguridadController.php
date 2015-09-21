<?php

namespace Uci\Bundle\SeguridadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class SeguridadController extends Controller {

    public function indexAction() {
        if (TRUE === $this->get('security.authorization_checker')->isGranted('ROLE_ADMINISTRADOR')) {
                return $this->render('UciAdministradorBundle:Vista:index.html.twig');
        }
    }

    public function loginAction() {
        if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
            if (TRUE === $this->get('security.authorization_checker')->isGranted('ROLE_ADMINISTRADOR')) {
                return $this->render('UciAdministradorBundle:Vista:index.html.twig');
            }
        }
        $request = $this->getRequest();
        $session = $request->getSession();
        // obtiene el error de inicio de sesión si lo hay
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        }
        return $this->render('UciSeguridadBundle:VistaIdentificacion:identificacion.html.twig', array(
                    // el último nombre de usuario ingresado por el usuario
                    'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                    'error' => $error,
        ));
    }//fin metodo

    public function loginCheckAction() {
        // this controller will not be executed,
    }

}
