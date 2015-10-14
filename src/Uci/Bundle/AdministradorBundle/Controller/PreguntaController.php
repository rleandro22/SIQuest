<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Uci\Bundle\BaseDatosBundle\Form\PreguntaIndiceType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class PreguntaController extends Controller {

    public function aIndicePreguntaAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('UciBaseDatosBundle:Pregunta')->findBy(array(), array('titulo' => 'ASC'));
        $form = $this->createForm(new PreguntaIndiceType());
        if ($request->getMethod() == 'POST') {
            if ($request->isXmlHttpRequest()) {
                return new Response("<b>The email is valid</b>");
            }
        }
        return $this->render('UciAdministradorBundle:VistaPregunta:indicePregunta.html.twig', array(
                    'entities' => $entities,
                    'form' => $form->createView(),
        ));
    }

}
