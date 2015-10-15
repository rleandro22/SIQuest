<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Uci\Bundle\BaseDatosBundle\Form\PreguntaIndiceType;
use Symfony\Component\HttpFoundation\Request;
use \Uci\Bundle\BaseDatosBundle\Entity\Pregunta;

class PreguntaController extends Controller {

    public function aIndicePreguntaAction(Request $request) {
        $idLibro = '';
        $idCapitulo = '';
        $idGrupoProcesos = '';
        $idAreaConocimiento = '';
        $em = $this->getDoctrine()->getManager();
        $pregunta = new Pregunta();
        if ($request->getMethod() == 'POST') {
            $libro = $em->getRepository('UciBaseDatosBundle:Libro')->find($request->request->get('PreguntaIndiceType')['libro']);
            $pregunta->setLibro($libro);
            $idLibro = $libro->getId();
        }
        $preguntas = $this->aSortearPreguntas($idLibro, '', '', '');
        $form = $this->createForm(new PreguntaIndiceType(), $pregunta);
        return $this->render('UciAdministradorBundle:VistaPregunta:indicePregunta.html.twig', array(
                    'entities' => $preguntas,
                    'form' => $form->createView(),
        ));
    }

    private function aSortearPreguntas($idLibro, $idCapitulo, $idGrupoProcesos, $idAreaConocimiento) {
        $em = $this->getDoctrine()->getManager();
        $preguntas = $em->getRepository('UciBaseDatosBundle:Pregunta')->createQueryBuilder('u')
                        ->innerJoin('u.libro', 'g')
                        ->where('g.id = :id')
                        ->setParameter('id', $idLibro)
                        ->orderBy('u.titulo', 'ASC')
                        ->getQuery()->getResult();
        return $preguntas;
    }

}
