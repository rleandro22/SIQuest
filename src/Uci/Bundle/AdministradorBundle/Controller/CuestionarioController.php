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
            $this->procesarPeticionCuestionario($request);
        } else if ($request->getMethod() == 'POST') {
            //$this->procesarPeticionCuestionario($request);
        }
        return $this->render('UciAdministradorBundle:VistaCuestionario:generarCuestionario.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    private function procesarPeticionCuestionario($request) {
        $libros = null;
        $areas = null;
        $grupos = null;
        $triangulos = null;
        $tiposPrueba = null;
        $tiposRespuesta = null;
        $parametrosConjuntos = null;
        $arregloParametros = $request->request->get('uci_bundle_basedatosbundle_cuestionario');
        $nombreCuestionario = $arregloParametros['cuestionarioname'];
        $cantidadPreguntas = $arregloParametros['cantidadPreguntas'];
        if (array_key_exists('libro', $arregloParametros)) {
            $libros = $arregloParametros['libro'];
        }if (array_key_exists('areaConocimiento', $arregloParametros)) {
            $areas = $arregloParametros['areaConocimiento'];
        }if (array_key_exists('grupoProcesos', $arregloParametros)) {
            $grupos = $arregloParametros['grupoProcesos'];
        }if (array_key_exists('trianguloTalento', $arregloParametros)) {
            $triangulos = $arregloParametros['trianguloTalento'];
        }if (array_key_exists('tipoPrueba', $arregloParametros)) {
            $tiposPrueba = $arregloParametros['tipoPrueba'];
        }if (array_key_exists('tipoRespuesta', $arregloParametros)) {
            $tiposRespuesta = $arregloParametros['tipoRespuesta'];
        }if (array_key_exists('parametroConjunto', $arregloParametros)) {
            $parametrosConjuntos = $arregloParametros['parametroConjunto'];
        }
        $this->sacarPreguntasParaCuestionario($libros, $areas, $grupos, $triangulos, $tiposPrueba, $tiposRespuesta, $parametrosConjuntos);
    }

    private function sacarPreguntasParaCuestionario($libros, $areas, $grupos, $triangulos, $tiposPrueba, $tiposRespuesta, $parametrosConjuntos) {
        $em = $this->getDoctrine()->getManager();
        $idsFinales = array(0);
        if ($libros) {
            foreach ($libros as $libro) {
                $indice = 0;
                $idsDeCondicion = $em->getRepository('UciBaseDatosBundle:Pregunta')->createQueryBuilder('u')
                                ->select('u.id')
                                ->where('u.libro = :id')
                                ->andWhere('u.id NOT IN (:miarray2)')
                                ->setParameter('miarray2', $idsFinales)
                                ->setParameter('id', $libro['libro'])
                                ->getQuery()->getScalarResult();
                shuffle($idsDeCondicion);
                $idsDeConsulta = null;
                while ($idsDeCondicion && $indice < $libro['cantidad']) {
                    $elemento = array_pop($idsDeCondicion);
                    $idsDeConsulta[] = $elemento;
                    $indice++;
                }
                if ($idsDeConsulta) {
                    $idsFinales = array_merge($idsFinales, $idsDeConsulta);
                }
            }
        }
        if ($areas) {
            foreach ($areas as $area) {
                $indice = 0;
                $idsDeCondicion = $em->getRepository('UciBaseDatosBundle:Pregunta')->createQueryBuilder('u')
                                ->select('u.id')
                                ->innerJoin('u.areaConocimiento', 'g')
                                ->where('u.areaConocimiento = :id')
                                ->setParameter('id', $area['areaConocimiento'])
                                ->getQuery()->getScalarResult();
                shuffle($idsDeCondicion);
                $idsDeConsulta = null;
                while ($idsDeCondicion && $indice < $area['cantidad']) {
                    $idsDeConsulta[] = array_pop($idsDeCondicion);
                    $indice++;
                }
                if ($idsDeConsulta) {
                    $idsFinales = array_merge($idsFinales, $idsDeConsulta);
                }
            }
        }
        if ($grupos) {
            foreach ($grupos as $grupo) {
                $indice = 0;
                $idsDeCondicion = $em->getRepository('UciBaseDatosBundle:Pregunta')->createQueryBuilder('u')
                                ->select('u.id')
                                ->where('u.grupoProcesos = :id')
                                ->andWhere('u.id NOT IN (:miarray2)')
                                ->setParameter('miarray2', $idsFinales)
                                ->setParameter('id', $grupo['grupoProcesos'])
                                ->getQuery()->getScalarResult();
                shuffle($idsDeCondicion);
                $idsDeConsulta = null;
                while ($idsDeCondicion && $indice < $grupo['cantidad']) {
                    $idsDeConsulta[] = array_pop($idsDeCondicion);
                    $indice++;
                }
                if ($idsDeConsulta) {
                    $idsFinales = array_merge($idsFinales, $idsDeConsulta);
                }
            }
        }
        if ($triangulos) {
            foreach ($triangulos as $triangulo) {
                $indice = 0;
                $idsDeCondicion = $em->getRepository('UciBaseDatosBundle:Pregunta')->createQueryBuilder('u')
                                ->select('u.id')
                                ->andWhere('u.id NOT IN (:miarray2)')
                                ->setParameter('miarray2', $idsFinales)
                                ->where('u.trianguloTalento = :id')
                                ->setParameter('id', $triangulo['trianguloTalento'])
                                ->getQuery()->getScalarResult();
                shuffle($idsDeCondicion);
                $idsDeConsulta = null;
                while ($idsDeCondicion && $indice < $triangulo['cantidad']) {
                    $idsDeConsulta[] = array_pop($idsDeCondicion);
                    $indice++;
                }
                if ($idsDeConsulta) {
                    $idsFinales = array_merge($idsFinales, $idsDeConsulta);
                }
            }
        }
        if ($tiposPrueba) {
            foreach ($tiposPrueba as $tipoP) {
                $indice = 0;
                $idsDeCondicion = $em->getRepository('UciBaseDatosBundle:Pregunta')->createQueryBuilder('u')
                                ->select('u.id')
                                ->innerJoin('u.tipoPrueba', 'g')
                                ->where('g.id = :id')
                                ->andWhere('u.id NOT IN (:miarray2)')
                                ->setParameter('miarray2', $idsFinales)
                                ->setParameter('id', $tipoP['tipoPrueba'])
                                ->getQuery()->getScalarResult();
                shuffle($idsDeCondicion);
                $idsDeConsulta = null;
                while ($idsDeCondicion && $indice < $tipoP['cantidad']) {
                    $idsDeConsulta[] = array_pop($idsDeCondicion);
                    $indice++;
                }
                if ($idsDeConsulta) {
                    $idsFinales = array_merge($idsFinales, $idsDeConsulta);
                }
            }
        }
        if ($tiposRespuesta) {
            foreach ($tiposRespuesta as $tipoR) {
                $indice = 0;
                $idsDeCondicion = $em->getRepository('UciBaseDatosBundle:Pregunta')->createQueryBuilder('u')
                                ->select('u.id')
                                ->where('u.tipoRespuesta = :id')
                                ->andWhere('u.id NOT IN (:miarray2)')
                                ->setParameter('miarray2', $idsFinales)
                                ->setParameter('id', $tipoR['tipoRespuesta'])
                                ->getQuery()->getScalarResult();
                shuffle($idsDeCondicion);
                $idsDeConsulta = null;
                while ($idsDeCondicion && $indice < $tipoR['cantidad']) {
                    $idsDeConsulta[] = array_pop($idsDeCondicion);
                    $indice++;
                }
                if ($idsDeConsulta) {
                    $idsFinales = array_merge($idsFinales, $idsDeConsulta);
                }
            }
        }
        if ($parametrosConjuntos) {
            foreach ($parametrosConjuntos as $pConjunto) {
                $indice = 0;
                $repository = $this->getDoctrine()->getRepository('UciBaseDatosBundle:Pregunta');
                $qb = $repository->createQueryBuilder('p')
                        ->select('p.id');
                $qb->where('p.id NOT IN (:miarray2)')
                        ->setParameter('miarray2', $idsFinales);
                if (!empty($pConjunto['libro'])) {
                    $qb->andWhere('p.libro= :idLibro')
                            ->setParameter('idLibro', $pConjunto['libro']);
                }
                if (!empty($pConjunto['numeroPaginaDe'])) {
                    $qb->andWhere('p.numeroPagina>= :paginaDesde')
                            ->setParameter('paginaDesde', $pConjunto['numeroPaginaDe']);
                }
                if (!empty($pConjunto['numeroPaginaHasta'])) {
                    $qb->andWhere('p.numeroPagina<= :numeroPaginaHasta')
                            ->setParameter('numeroPaginaHasta', $pConjunto['numeroPaginaHasta']);
                }
                if (!empty($pConjunto['capitulo'])) {
                    $qb->andWhere('p.capitulo= :idCapitulo')
                            ->setParameter('idCapitulo', $pConjunto['capitulo']);
                }
                if (!empty($pConjunto['grupoProcesos'])) {
                    $qb->andWhere('p.grupoProcesos= :idGrupoProcesos')
                            ->setParameter('idGrupoProcesos', $pConjunto['grupoProcesos']);
                }
                if (!empty($pConjunto['areaConocimiento'])) {
                    $qb->andWhere('p.areaConocimiento= :idAreaConocimiento')
                            ->setParameter('idAreaConocimiento', $pConjunto['areaConocimiento']);
                }
                if (!empty($pConjunto['trianguloTalento'])) {
                    $qb->andWhere('p.trianguloTalento= :idTrianguloTalento')
                            ->setParameter('idTrianguloTalento', $pConjunto['trianguloTalento']);
                }
                if (!empty($pConjunto['tipoPrueba'])) {
                    $qb->innerJoin('p.tipoPrueba', 't');
                    $qb->andWhere('t.id= :tipoPrueba')
                            ->setParameter('tipoPrueba', $pConjunto['tipoPrueba']);
                }
                if (!empty($pConjunto['tipoRespuesta'])) {
                    $qb->andWhere('p.tipoRespuesta= :idTipoRespuesta')
                            ->setParameter('idTipoRespuesta', $pConjunto['tipoRespuesta']);
                }

                $idsDeCondicion = $qb->getQuery()->getScalarResult();
                shuffle($idsDeCondicion);
                $idsDeConsulta = null;
                while ($idsDeCondicion && $indice < $pConjunto['cantidad']) {
                    $idsDeConsulta[] = array_pop($idsDeCondicion);
                    $indice++;
                }
                if ($idsDeConsulta) {
                    $idsFinales = array_merge($idsFinales, $idsDeConsulta);
                }
            }
        }
        unset($idsFinales[0]);
        $idsFinales = array_values($idsFinales);
        $preguntas = $em->getRepository('UciBaseDatosBundle:Pregunta')->createQueryBuilder('u')
                        ->select('u.id, u.titulo')
                        ->where('u.id IN (:miarray)')
                        ->setParameter('miarray', $idsFinales)
                        ->getQuery()->getArrayResult();
        $response = new JsonResponse();
        $response_array = array();
        $response_array['preguntas'] = (empty($preguntas)) ? array('id' => '0') : $preguntas;
        $response->setContent(json_encode($response_array));
        return $response;
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
