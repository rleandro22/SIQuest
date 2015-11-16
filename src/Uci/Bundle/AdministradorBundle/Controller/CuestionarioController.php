<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Uci\Bundle\BaseDatosBundle\Form\CuestionarioType;
use Uci\Bundle\BaseDatosBundle\Form\FiltrarCuestionariosType;
use Uci\Bundle\BaseDatosBundle\Entity\Cuestionario;
use Symfony\Component\HttpFoundation\JsonResponse;

class CuestionarioController extends Controller {

    public function aIndiceCuestionarioAction(Request $request) {
        $cuestionario = new Cuestionario();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new FiltrarCuestionariosType(), $cuestionario);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($cuestionario->getCurso()) {
                $idCurso = $cuestionario->getCurso()->getId();
                $entities = $em->getRepository('UciBaseDatosBundle:Cuestionario')->createQueryBuilder('u')
                                ->innerJoin('u.curso', 'g')
                                ->where('g.id = :id')
                                ->setParameter('id', $idCurso)
                                ->orderBy('u.cuestionarioname', 'ASC')
                                ->getQuery()->getArrayResult();
            } else {
                $entities = $em->getRepository('UciBaseDatosBundle:Cuestionario')->findBy(array(), array('cuestionarioname' => 'ASC'));
            }
        } else {
            $entities = $em->getRepository('UciBaseDatosBundle:Cuestionario')->findBy(array(), array('cuestionarioname' => 'ASC'));
        }
        return $this->render('UciAdministradorBundle:VistaCuestionario:indiceCuestionario.html.twig', array(
                    'form' => $form->createView(),
                    'entities' => $entities,
        ));
    }

    public function aConstruirCuestionarioAction(Request $request) {
        $cuestionario = new Cuestionario();
        $form = $this->createForm(new CuestionarioType(), $cuestionario);
        $form->handleRequest($request);
        if (strcmp(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH', FILTER_SANITIZE_STRING), 'XMLHttpRequest') == 0) {
            return $this->aObtenerDatosLibro($pregunta->getLibro());
        } else if ($request->getMethod() == 'POST') {
            $idLibro = '1'; //$request->request->get('PreguntaIndiceType')['libro'];
        }
        return $this->render('UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    public function aSetearLibrosCuestionarioAction(Request $request) {
        if (strcmp(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH', FILTER_SANITIZE_STRING), 'XMLHttpRequest') == 0) {
            $idLibro = $request->get('idLibro');
            return $this->aObtenerDatosLibro($idLibro);
        }
    }
    
    private function aObtenerDatosLibro($idLibrop) {
        $em = $this->getDoctrine()->getManager();
        $libro = $em->getRepository('UciBaseDatosBundle:Libro')->find($idLibrop);
        $idLibro = ($libro) ? $libro->getId() : 0;
        $idPmbok = ($libro) ? $idPmbok = ($libro->getEsPmbok() == 1) ? $libro->getPmbok()->getId() : 0 : 0;
        $response = new JsonResponse();

        $capitulos = $em->getRepository('UciBaseDatosBundle:Capitulo')->createQueryBuilder('u')
                        ->innerJoin('u.libro', 'g')
                        ->where('g.id = :id')
                        ->setParameter('id', $idLibro)
                        ->orderBy('u.nombreCapitulo', 'ASC')
                        ->getQuery()->getArrayResult();
        if ($idLibro == 0) {
            $qb1 = $em->getRepository('UciBaseDatosBundle:AreaConocimiento')->createQueryBuilder('a');
            $areas = $qb1->getQuery()->getArrayResult();
            $qb2 = $em->getRepository('UciBaseDatosBundle:GrupoProcesos')->createQueryBuilder('g');
            $grupos = $qb2->getQuery()->getArrayResult();
            $qb3 = $em->getRepository('UciBaseDatosBundle:TrianguloTalento')->createQueryBuilder('t');
            $triangulos = $qb3->getQuery()->getArrayResult();
        } else {
            $areas = $em->getRepository('UciBaseDatosBundle:AreaConocimiento')->createQueryBuilder('u')
                            ->innerJoin('u.pmbok', 'g')
                            ->where('g.id = :id')
                            ->setParameter('id', $idPmbok)
                            ->orderBy('u.nombreArea', 'ASC')
                            ->getQuery()->getArrayResult();
            $grupos = $em->getRepository('UciBaseDatosBundle:GrupoProcesos')->createQueryBuilder('u')
                            ->innerJoin('u.pmbok', 'g')
                            ->where('g.id = :id')
                            ->setParameter('id', $idPmbok)
                            ->orderBy('u.nombreGrupo', 'ASC')
                            ->getQuery()->getArrayResult();
            $triangulos = $em->getRepository('UciBaseDatosBundle:TrianguloTalento')->createQueryBuilder('u')
                            ->innerJoin('u.pmbok', 'g')
                            ->where('g.id = :id')
                            ->setParameter('id', $idPmbok)
                            ->orderBy('u.nombreTalento', 'ASC')
                            ->getQuery()->getArrayResult();
        }
        $response_array = array();
        $response_array['capitulos'] = (empty($capitulos)) ? array('id' => '0') : $capitulos;
        $response_array['areas'] = (empty($areas)) ? array('id' => '0') : $areas;
        $response_array['grupos'] = (empty($grupos)) ? array('id' => '0') : $grupos;
        $response_array['triangulos'] = (empty($triangulos)) ? array('id' => '0') : $triangulos;
        $response->setContent(json_encode($response_array));
        return $response;
    }

}
