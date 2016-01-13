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
        return $this->render('UciProfesorBundle:VistaCuestionario:verCuestionario.html.twig', array(
                    'entity' => $cuestionario,
                    'preguntas' => $preguntas,
        ));
    }

    public function pAgregarComentarioCuestionarioAction(Request $request) {
        if (strcmp(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH', FILTER_SANITIZE_STRING), 'XMLHttpRequest') == 0) {
            $user = $this->get('security.context')->getToken()->getUser();
            $em = $this->getDoctrine()->getManager();
            $idCuestionario = $request->request->get('idCuestionario');
            $cuestionario = $em->getRepository('UciBaseDatosBundle:Cuestionario')->find($idCuestionario);
            $usuario = $em->getRepository('UciBaseDatosBundle:Usuario')->find($user);
            $comentarios = $request->request->get('comentarios');
            $em->getConnection()->beginTransaction();
            try {
                foreach ($comentarios as $comentario) {
                    $usuarioCorrige = new UsuarioCorrigePregunta();
                    $idPregunda = $comentario['id'];
                    $pregunta = $em->getRepository('UciBaseDatosBundle:Pregunta')->find($idPregunda);
                    $texto = $comentario['texto'];
                    $usuarioCorrige->setComentario($texto);
                    $usuarioCorrige->setCuestionario($cuestionario);
                    $usuarioCorrige->setPregunta($pregunta);
                    $usuarioCorrige->setUsuario($usuario);
                    $em->persist($usuarioCorrige);
                    $em->clear($usuarioCorrige);
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
