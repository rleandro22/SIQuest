<?php

namespace Uci\Bundle\AsistenteAcademicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Uci\Bundle\BaseDatosBundle\Form\PreguntaType;

class PreguntaController extends Controller {

    public function aAVerPreguntaAction(Request $request, $idPregunta, $idCuestionario) {
        $em = $this->getDoctrine()->getManager();
        $pregunta = $em->getRepository('UciBaseDatosBundle:Pregunta')->find($idPregunta);
        if (!$pregunta) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }
        $form = $this->createForm(new PreguntaType($pregunta->getTipoRespuesta()->getId(), 0), $pregunta);
        return $this->render('UciAsistenteAcademicaBundle:VistaPregunta:verPregunta.html.twig', array(
                    'entity' => $pregunta,
                    'idCuestionario' => $idCuestionario,
                    'esPmbok' => ($pregunta->getLibro()) ? $pregunta->getLibro()->getEsPmbok() : 0,
                    'form' => $form->createView()
        ));
    }

}
