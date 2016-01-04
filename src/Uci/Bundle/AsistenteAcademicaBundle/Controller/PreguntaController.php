<?php

namespace Uci\Bundle\AsistenteAcademicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Uci\Bundle\BaseDatosBundle\Form\PreguntaType;

class PreguntaController extends Controller {

    public function aAVerPreguntaAction(Request $request, $idPregunta) {
        $em = $this->getDoctrine()->getManager();
        $pregunta = $em->getRepository('UciBaseDatosBundle:Pregunta')->find($idPregunta);
        $error = '';
        if (!$pregunta) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }
        $form = $this->createForm(new PreguntaType($pregunta->getTipoRespuesta()->getId(), 0), $pregunta);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            $error = $form->getErrors();
            if ($form->isValid()) {
                $em->getConnection()->beginTransaction();
                try {
                    $this->guardarRespuestas($em, $pregunta);
                    $em->persist($pregunta);
                    $em->flush();
                    $em->commit();
                } catch (Exception $e) {
                    $em->getConnection()->rollback();
                    $error = $e;
                }
            }
            return $this->redirect($this->generateUrl("uci_administrador_editarPregunta", array("idPregunta" => $idPregunta)));
        }
        return $this->render('UciAdministradorBundle:VistaPregunta:editarPregunta.html.twig', array(
                    'entity' => $pregunta,
                    'error' => $error,
                    'esPmbok' => ($pregunta->getLibro()) ? $pregunta->getLibro()->getEsPmbok() : 0,
                    'form' => $form->createView()
        ));
    }
}
