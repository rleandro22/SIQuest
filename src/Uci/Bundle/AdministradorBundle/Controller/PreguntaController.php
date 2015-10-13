<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Uci\Bundle\BaseDatosBundle\Form\PreguntaIndiceType;

class PreguntaController extends Controller {

    public function aIndicePreguntaAction() {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('UciBaseDatosBundle:Pregunta')->findBy(array(), array('titulo' => 'ASC'));
        $form = $this->createForm(new PreguntaIndiceType());
        return $this->render('UciAdministradorBundle:VistaPregunta:indicePregunta.html.twig', array(
                    'entities' => $entities,
                    'form' => $form->createView(),
        ));
    }

}
