<?php

namespace Uci\Bundle\ProfesorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Uci\Bundle\BaseDatosBundle\Form\FiltrarCuestionariosProfesorType;
use Uci\Bundle\BaseDatosBundle\Entity\Cuestionario;
use Symfony\Component\HttpFoundation\JsonResponse;
use Uci\Bundle\BaseDatosBundle\Entity\UsuarioCorrigePregunta;

class CuestionarioController extends Controller {

    public function pIndiceCuestionarioAction(Request $request) {
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $profesor = $em->getRepository('UciBaseDatosBundle:Profesor')->findBy(array('usuario' => $user->getId()));
        $idProfesor = $profesor[0]->getId();
        $cuestionario = new Cuestionario();
        $form = $this->createForm(new FiltrarCuestionariosProfesorType($idProfesor), $cuestionario);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($cuestionario->getCurso()) {
                $idCurso = $cuestionario->getCurso()->getId();
                $entities = $em->getRepository('UciBaseDatosBundle:Cuestionario')->createQueryBuilder('u')
                                ->innerJoin('u.curso', 'g')
                                ->innerJoin('g.profesor', 'a')
                                ->where('g.id = :id')
                                ->andWhere('a.id = :idProf')
                                ->setParameter('idProf', $idProfesor)
                                ->setParameter('id', $idCurso)
                                ->orderBy('u.cuestionarioname', 'ASC')
                                ->getQuery()->getArrayResult();
            } else {
                $entities = $em->getRepository('UciBaseDatosBundle:Cuestionario')->createQueryBuilder('u')
                                ->innerJoin('u.curso', 'g')
                                ->innerJoin('g.profesor', 'a')
                                ->where('a.id = :idProf')
                                ->setParameter('idProf', $idProfesor)
                                ->orderBy('u.cuestionarioname', 'ASC')
                                ->getQuery()->getArrayResult();
            }
        } else {
            $entities = $em->getRepository('UciBaseDatosBundle:Cuestionario')->createQueryBuilder('u')
                            ->innerJoin('u.curso', 'g')
                            ->innerJoin('g.profesor', 'a')
                            ->where('a.id = :idProf')
                            ->setParameter('idProf', $idProfesor)
                            ->orderBy('u.cuestionarioname', 'ASC')
                            ->getQuery()->getArrayResult();
        }
        return $this->render('UciProfesorBundle:VistaCuestionario:indiceCuestionario.html.twig', array(
                    'form' => $form->createView(),
                    'entities' => $entities,
        ));
    }

    public function pVerCuestionarioAction(Request $request, $id) {
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $profesor = $em->getRepository('UciBaseDatosBundle:Profesor')->findBy(array('usuario' => $user->getId()));
        $idProfesor = $profesor[0]->getId();
        $cuestionario = $em->getRepository('UciBaseDatosBundle:Cuestionario')->createQueryBuilder('u')
                        ->innerJoin('u.curso', 'g')
                        ->innerJoin('g.profesor', 'a')
                        ->where('a.id = :idProf')
                        ->andWhere('u.id = :id')
                        ->setParameter('idProf', $idProfesor)
                        ->setParameter('id', $id)
                        ->getQuery()->getSingleResult();
        $preguntas = $cuestionario->getPregunta();
        $idCuestionario = $cuestionario->getId();
        $idUsuario = $user->getId();
        foreach ($preguntas as $pregunta) {
            $usuarioCorrige = $em->getRepository('UciBaseDatosBundle:UsuarioCorrigePregunta')->createQueryBuilder('u')
                            ->innerJoin('u.cuestionario', 'c')
                            ->innerJoin('u.usuario', 'p')
                            ->innerJoin('u.pregunta', 'r')
                            ->where('c.id = :idCuest')
                            ->andWhere('p.id = :idUser')
                            ->andWhere('r.id = :idPreg')
                            ->setParameter('idCuest', $idCuestionario)
                            ->setParameter('idUser', $idUsuario)
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
        return $this->render('UciProfesorBundle:VistaCuestionario:verCuestionario.html.twig', array(
                    'entity' => $cuestionario,
                    'preguntasComentario' => $preguntasComentario,
        ));
    }

    public function pAgregarComentarioCuestionarioAction(Request $request) {
        if (strcmp(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH', FILTER_SANITIZE_STRING), 'XMLHttpRequest') == 0) {
            $user = $this->get('security.context')->getToken()->getUser();
            $em = $this->getDoctrine()->getManager();
            $idCuestionario = $request->request->get('idCuestionario');
            $cuestionario = $em->getRepository('UciBaseDatosBundle:Cuestionario')->find($idCuestionario);
            $usuario = $em->getRepository('UciBaseDatosBundle:Usuario')->find($user);
            $idUsuario = $usuario->getId();
            $comentarios = $request->request->get('comentarios');
            $em->getConnection()->beginTransaction();
            try {
                foreach ($comentarios as $comentario) {
                    $usuarioCorrige = new UsuarioCorrigePregunta();
                    $idPregunda = $comentario['id'];
                    $texto = $comentario['texto'];
                    $usuarioCorrigeExistente = $em->getRepository('UciBaseDatosBundle:UsuarioCorrigePregunta')->createQueryBuilder('u')
                                    ->innerJoin('u.cuestionario', 'c')
                                    ->innerJoin('u.usuario', 'p')
                                    ->innerJoin('u.pregunta', 'r')
                                    ->where('c.id = :idCuest')
                                    ->andWhere('p.id = :idUser')
                                    ->andWhere('r.id = :idPreg')
                                    ->setParameter('idCuest', $idCuestionario)
                                    ->setParameter('idUser', $idUsuario)
                                    ->setParameter('idPreg', $idPregunda)
                                    ->getQuery()->getResult();
                    if ($usuarioCorrigeExistente == null) {
                        $pregunta = $em->getRepository('UciBaseDatosBundle:Pregunta')->find($idPregunda);
                        $usuarioCorrige->setComentario($texto);
                        $usuarioCorrige->setCuestionario($cuestionario);
                        $usuarioCorrige->setPregunta($pregunta);
                        $usuarioCorrige->setUsuario($usuario);
                    } else {
                        $usuarioCorrige = $usuarioCorrigeExistente[0];
                        $usuarioCorrige->setComentario($texto);
                    }
                    $em->persist($usuarioCorrige);
                    $noBorrar[] = $usuarioCorrige->getId();
                    $em->clear($usuarioCorrige);
                }
                $correccionesBorrar = $em->getRepository('UciBaseDatosBundle:UsuarioCorrigePregunta')->createQueryBuilder('p')
                        ->where('p.id NOT IN (:miarray2)')
                        ->setParameter('miarray2', $noBorrar)
                        ->getQuery()
                        ->getResult();
                foreach ($correccionesBorrar as $correccion) {
                    $em->remove($correccion);
                    $em->clear($correccion);
                }
                $em->flush();
                $em->commit();
                return new JsonResponse(array('resultado' => 1));
            } catch (\Doctrine\ORM\ORMException $e) {
                $em->getConnection()->rollback();
                return new JsonResponse(array('resultado' => 0));
            } catch (\Exception $e) {
                $em->getConnection()->rollback();
                return new JsonResponse(array('resultado' => 0));
            }
            return new JsonResponse(array('resultado' => 0));
        }
    }

}
