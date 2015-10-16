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
        $esPmbok = 0;
        $em = $this->getDoctrine()->getManager();
        $pregunta = new Pregunta();
        if ($request->getMethod() == 'POST') {
            $idLibro = $request->request->get('PreguntaIndiceType')['libro'];
            $libro = $em->getRepository('UciBaseDatosBundle:Libro')->find($idLibro);
            if (isset($libro)) {
                $pregunta->setLibro($libro);
                $esPmbok = $libro->getEsPmbok();
            }
        }
        $preguntas = $this->aSortearPreguntas($idLibro, '', '', '');
        $form = $this->createForm(new PreguntaIndiceType(), $pregunta);
        return $this->render('UciAdministradorBundle:VistaPregunta:indicePregunta.html.twig', array(
                    'entities' => $preguntas,
                    'form' => $form->createView(),
                    'espmbok' => $esPmbok
        ));
    }

    private function aSortearPreguntas($idLibro, $idCapitulo, $idGrupoProcesos, $idAreaConocimiento) {
        $em = $this->getDoctrine()->getManager();
        if (empty($idLibro) && empty($idCapitulo) && empty($idGrupoProcesos) && empty($idAreaConocimiento)) {
            $preguntas = $em->getRepository('UciBaseDatosBundle:Pregunta')->findBy(array(), array('titulo' => 'ASC'));
        } else {
            $preguntas = $em->getRepository('UciBaseDatosBundle:Pregunta')->createQueryBuilder('u')
                            ->innerJoin('u.libro', 'g')
                            ->where('g.id = :id')
                            ->setParameter('id', $idLibro)
                            ->orderBy('u.titulo', 'ASC')
                            ->getQuery()->getResult();
        }
        return $preguntas;
    }

}
