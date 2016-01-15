<?php

namespace Uci\Bundle\AsistenteAcademicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Uci\Bundle\BaseDatosBundle\Form\FiltrarCuestionariosAsistenteType;
use Uci\Bundle\BaseDatosBundle\Entity\Cuestionario;
use Uci\Bundle\BaseDatosBundle\Entity\UsuarioCorrigePregunta;

class ObservacionesController extends Controller {

    public function aAIndiceCuestionarioObservadosAction(Request $request) {
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $asistente = $em->getRepository('UciBaseDatosBundle:AsistenteAcademica')->findBy(array('usuario' => $user->getId()));
        $idAsistente = $asistente[0]->getId();
        $cuestionarios = null;
        $cuestionario = new Cuestionario();
        $form = $this->createForm(new FiltrarCuestionariosAsistenteType($idAsistente), $cuestionario);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($cuestionario->getCurso()) {
                $corregidos = $em->getRepository('UciBaseDatosBundle:UsuarioCorrigePregunta')->createQueryBuilder('u')
                                ->innerJoin('u.cuestionario', 'g')
                                ->innerJoin('g.curso', 'c')
                                ->innerJoin('c.asistenteAcademica', 'a')
                                ->where('c.id = :id')
                                ->andWhere('a.id = :idAsist')
                                ->setParameter('id', $cuestionario->getCurso())
                                ->setParameter('idAsist', $idAsistente)
                                ->orderBy('g.cuestionarioname', 'ASC')
                                ->getQuery()->getResult();
            } else {
                $corregidos = $em->getRepository('UciBaseDatosBundle:UsuarioCorrigePregunta')->createQueryBuilder('u')
                                ->innerJoin('u.cuestionario', 'g')
                                ->innerJoin('g.curso', 'c')
                                ->innerJoin('c.asistenteAcademica', 'a')
                                ->andWhere('a.id = :idAsist')
                                ->setParameter('idAsist', $idAsistente)
                                ->orderBy('g.cuestionarioname', 'ASC')
                                ->getQuery()->getResult();
            }
        } else {
            $corregidos = $em->getRepository('UciBaseDatosBundle:UsuarioCorrigePregunta')->createQueryBuilder('u')
                            ->innerJoin('u.cuestionario', 'g')
                            ->innerJoin('g.curso', 'c')
                            ->innerJoin('c.asistenteAcademica', 'a')
                            ->andWhere('a.id = :idAsist')
                            ->setParameter('idAsist', $idAsistente)
                            ->orderBy('g.cuestionarioname', 'ASC')
                            ->getQuery()->getResult();
        }
        foreach ($corregidos as $corregido) {
            if ($cuestionarios) {
                if (!in_array($corregido->getCuestionario(), $cuestionarios)) {
                    $cuestionarios[] = $corregido->getCuestionario();
                }
            } else {
                $cuestionarios[] = $corregido->getCuestionario();
            }
        }

        return $this->render('UciAsistenteAcademicaBundle:VistaObservacion:indiceObservacion.html.twig', array(
                    'form' => $form->createView(),
                    'entities' => $cuestionarios,
        ));
    }

    public function aAVerCuestionarioObservadoAction(Request $request, $id) {
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $asistente = $em->getRepository('UciBaseDatosBundle:AsistenteAcademica')->findBy(array('usuario' => $user->getId()));
        $idAsistente = $asistente[0]->getId();
        $cuestionario = $em->getRepository('UciBaseDatosBundle:Cuestionario')->createQueryBuilder('u')
                        ->innerJoin('u.curso', 'g')
                        ->innerJoin('g.asistenteAcademica', 'a')
                        ->where('u.id = :id')
                        ->andWhere('a.id = :idAsist')
                        ->setParameter('idAsist', $idAsistente)
                        ->setParameter('id', $id)
                        ->getQuery()->getSingleResult();
        $preguntas = $cuestionario->getPregunta();
        $idCuestionario = $cuestionario->getId();
        foreach ($preguntas as $pregunta) {
            $usuarioCorrige = $em->getRepository('UciBaseDatosBundle:UsuarioCorrigePregunta')->createQueryBuilder('u')
                            ->innerJoin('u.cuestionario', 'c')
                            ->innerJoin('u.usuario', 'p')
                            ->innerJoin('u.pregunta', 'r')
                            ->where('c.id = :idCuest')
                            ->andWhere('r.id = :idPreg')
                            ->setParameter('idCuest', $idCuestionario)
                            ->setParameter('idPreg', $pregunta->getId())
                            ->getQuery()->getResult();
            if ($usuarioCorrige == null) {
                $usuarioCorrige = new UsuarioCorrigePregunta();
                $usuarioCorrige->setComentario('');
                $usuarioCorrige->setPregunta($pregunta);
            } else {
                $usuarioCorrige = $usuarioCorrige[0];
            }
            $preguntasComentario[] = $usuarioCorrige;
        }
        return $this->render('UciAsistenteAcademicaBundle:VistaObservacion:verObservacion.html.twig', array(
                    'entity' => $cuestionario,
                    'preguntasComentario' => $preguntasComentario,
        ));
    }

    public function aABorrarCuestionarioObservadoAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $observaciones = $em->getRepository('UciBaseDatosBundle:UsuarioCorrigePregunta')->findBy(array('cuestionario' => $id));
        $em->getConnection()->beginTransaction();
        try {
            foreach ($observaciones as $observacion) {
                $em->remove($observacion);
                $em->clear($observacion);
            }
            $em->flush();
            $em->commit();
        } catch (\Exception $e) {
            $em->getConnection()->rollback();
        }

        return $this->redirectToRoute('uci_asistente_academica_indiceobservaciones');
    }

    public function aARemoverPreguntaObservacionAction(Request $request, $idPregunta, $idCuestionario) {
        $em = $this->getDoctrine()->getManager();
        $cuestionario = $em->getRepository('UciBaseDatosBundle:Cuestionario')->find($idCuestionario);
        $pregunta = $em->getRepository('UciBaseDatosBundle:Pregunta')->find($idPregunta);
        if (!$cuestionario) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }
        $em->getConnection()->beginTransaction();
        try {
            $cuestionario->removePregunta($pregunta);
            $cuestionario->setCantidadPreguntas(count($cuestionario->getPregunta()));
            $em->persist($cuestionario);
            $em->flush();
            $em->commit();
        } catch (Exception $e) {
            $em->getConnection()->rollback();
        }
        return $this->redirect($this->generateUrl("uci_asistente_academica_verObservacion", array("id" => $idCuestionario)));
    }

}
