<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Uci\Bundle\BaseDatosBundle\Entity\Usuario;
use Uci\Bundle\BaseDatosBundle\Form\UsuarioType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormError;

class CursoController extends Controller {
    

    public function aIndiceCursoAction() {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('UciBaseDatosBundle:Curso')->findBy(array(), array('nombreCurso' => 'ASC'));
        return $this->render('UciAdministradorBundle:Vista:indiceCurso.html.twig', array(
                    'entities' => $entities,
        ));
    }

}
