<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Uci\Bundle\BaseDatosBundle\Form\FiltrarCuestionariosType;
use Uci\Bundle\BaseDatosBundle\Entity\Cuestionario;
use Symfony\Component\HttpFoundation\JsonResponse;
use Uci\Bundle\BaseDatosBundle\Entity\UsuarioCorrigePregunta;

class ObservacionesController extends Controller {

    public function aIndiceCuestionarioObservadosAction(Request $request) {
        $cuestionario = new Cuestionario();
        $cuestionarios=null;
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new FiltrarCuestionariosType(), $cuestionario);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($cuestionario->getCurso()) {
                $corregidos = $em->getRepository('UciBaseDatosBundle:UsuarioCorrigePregunta')->createQueryBuilder('u')
                                ->innerJoin('u.cuestionario', 'g')
                                ->innerJoin('g.curso', 'c')
                                ->where('c.id = :id')
                                ->setParameter('id', $cuestionario->getCurso())
                                ->orderBy('g.cuestionarioname', 'ASC')
                                ->getQuery()->getResult();
            } else {
                $corregidos = $em->getRepository('UciBaseDatosBundle:UsuarioCorrigePregunta')->findAll();
            }
        } else {
            $corregidos = $em->getRepository('UciBaseDatosBundle:UsuarioCorrigePregunta')->findAll();
        }
        foreach ($corregidos as $corregido) {
            $cuestionarios[] = $corregido->getCuestionario();
        }

        return $this->render('UciAdministradorBundle:VistaObservacion:indiceObservacion.html.twig', array(
                    'form' => $form->createView(),
                    'entities' => $cuestionarios,
        ));
    }

    public function aVerCuestionarioObservadoAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $cuestionario = $em->getRepository('UciBaseDatosBundle:Cuestionario')->createQueryBuilder('u')
                        ->innerJoin('u.curso', 'g')
                        ->andWhere('u.id = :id')
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
        return $this->render('UciAdministradorBundle:VistaObservacion:verObservacion.html.twig', array(
                    'entity' => $cuestionario,
                    'preguntasComentario' => $preguntasComentario,
        ));
    }

    public function aBorrarCuestionarioObservadoAction(Request $request, $id) {
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

        return $this->redirectToRoute('uci_administrador_indiceobservaciones');
    }

}
