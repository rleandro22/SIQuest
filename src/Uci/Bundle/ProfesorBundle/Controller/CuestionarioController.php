<?php

namespace Uci\Bundle\ProfesorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Uci\Bundle\BaseDatosBundle\Form\CuestionarioAsistenteType;
use Uci\Bundle\BaseDatosBundle\Archivos\CrearArchivoCuestionario;
use Uci\Bundle\BaseDatosBundle\Form\FiltrarCuestionariosProfesorType;
use Uci\Bundle\BaseDatosBundle\Entity\Cuestionario;
use Uci\Bundle\BaseDatosBundle\Form\VerCuestionarioAsistenteType;
use Uci\Bundle\BaseDatosBundle\Form\AgregarPreguntaCuestionarioType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Common\Collections;

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

    public function aAVerCuestionarioAction(Request $request, $id) {
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $asistente = $em->getRepository('UciBaseDatosBundle:AsistenteAcademica')->findBy(array('usuario' => $user->getId()));
        $idAsistente = $asistente[0]->getId();
        $mensaje = 1;
        $cuestionario = $em->getRepository('UciBaseDatosBundle:Cuestionario')->find($id);
        $preguntas = $cuestionario->getPregunta();
        $form = $this->createForm(new VerCuestionarioAsistenteType($idAsistente), $cuestionario);
        $form->handleRequest($request);
        if (strcmp(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH', FILTER_SANITIZE_STRING), 'XMLHttpRequest') == 0) {
            try {
                $em->persist($cuestionario);
                $em->flush();
                return new JsonResponse(array('resultado' => $mensaje));
            } catch (\Doctrine\DBAL\DBALException $e) {
                if ($e->getPrevious() && 0 === strpos($e->getPrevious()->getCode(), '23')) {
                    $mensaje = 'Este nombre corto ya existe';
                }
                return new JsonResponse(array('resultado' => $mensaje));
            }
        } else if ($request->getMethod() == 'POST') {
            $path = $this->get('kernel')->getRootDir() . '/Resources';
            $crearArchivo = new CrearArchivoCuestionario($path, $cuestionario);
            return $crearArchivo->generarArchivo();
        }
        return $this->render('UciAsistenteAcademicaBundle:VistaCuestionario:verCuestionario.html.twig', array(
                    'entity' => $cuestionario,
                    'form' => $form->createView(),
                    'preguntas' => $preguntas,
        ));
    }

    public function aAConstruirCuestionarioAction(Request $request) {
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $asistente = $em->getRepository('UciBaseDatosBundle:AsistenteAcademica')->findBy(array('usuario' => $user->getId()));
        $idAsistente = $asistente[0]->getId();
        $cuestionario = new Cuestionario();
        $form = $this->createForm(new CuestionarioAsistenteType($idAsistente), $cuestionario);
        $form->handleRequest($request);
        if (strcmp(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH', FILTER_SANITIZE_STRING), 'XMLHttpRequest') == 0) {
            return $this->procesarPeticionCuestionario($request);
        }
        return $this->render('UciAsistenteAcademicaBundle:VistaCuestionario:generarCuestionario.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    public function aAAgregarPreguntaCuestionarioAction(Request $request, $idCuestionario) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UciBaseDatosBundle:Cuestionario')->find($idCuestionario);
        $idsPreguntasDeCuestionario = $em->getRepository('UciBaseDatosBundle:Pregunta')->createQueryBuilder('u')
                        ->innerJoin('u.cuestionario', 'g')
                        ->select('u.id')
                        ->where('g.id = :id')
                        ->setParameter('id', $entity->getId())
                        ->getQuery()->getScalarResult();
        $form = $this->createForm(new AgregarPreguntaCuestionarioType($idsPreguntasDeCuestionario));
        if (strcmp(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH', FILTER_SANITIZE_STRING), 'XMLHttpRequest') == 0) {
            $ids = $request->request->get('ids');
            $preguntas = $em->getRepository('UciBaseDatosBundle:Pregunta')->createQueryBuilder('p')
                    ->where('p.id IN (:miarray2)')
                    ->setParameter('miarray2', $ids)
                    ->getQuery()
                    ->getResult();
            $preguntas = new Collections\ArrayCollection($preguntas);
            foreach ($preguntas as $pregunta) {
                $entity->addPregunta($pregunta);
            }
            $em->getConnection()->beginTransaction();
            $entity->setCantidadPreguntas(count($entity->getPregunta()));
            try {
                $em->persist($entity);
                $em->flush();
                $em->commit();
                return new JsonResponse(array('resultado' => 1));
            } catch (Exception $e) {
                $em->getConnection()->rollback();
                return new JsonResponse(array('resultado' => 0));
            }
        }
        return $this->render('UciAsistenteAcademicaBundle:VistaCuestionario:agregarPreguntaCuestionario.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView()
        ));
    }

    public function aARemoverPreguntaCuestionarioAction(Request $request, $idPregunta, $idCuestionario) {
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
        return $this->redirect($this->generateUrl("uci_asistente_academica_ver_cuestionario", array("id" => $idCuestionario)));
    }

    public function aAGuardarCuestionarioAction(Request $request) {
        if (strcmp(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH', FILTER_SANITIZE_STRING), 'XMLHttpRequest') == 0) {
            $em = $this->getDoctrine()->getManager();
            $cuestionario = new Cuestionario();
            $cuestionario->setCuestionarioname($request->request->get('nombreCuestionario'));
            $curso = $em->getRepository('UciBaseDatosBundle:Curso')->find($request->request->get('curso'));
            $cuestionario->setCurso($curso);
            $idPreguntas = $request->request->get('preguntas');
            $cuestionario->setCantidadPreguntas(count($idPreguntas));
            $preguntas = $em->getRepository('UciBaseDatosBundle:Pregunta')->createQueryBuilder('p')
                    ->where('p.id IN (:miarray2)')
                    ->setParameter('miarray2', $idPreguntas)
                    ->getQuery()
                    ->getResult();
            $preguntas = new Collections\ArrayCollection($preguntas);
            $em->getConnection()->beginTransaction();
            try {
                $cuestionario->setPregunta($preguntas);
                $em->persist($cuestionario);
                $em->flush();
                $em->commit();
                return new JsonResponse(array('resultado' => 1));
            } catch (Exception $e) {
                $em->getConnection()->rollback();
                return new JsonResponse(array('resultado' => 0));
            }
        }
    }

    private function procesarPeticionCuestionario($request) {
        $vacio = FALSE;
        $libros = null;
        $areas = null;
        $grupos = null;
        $triangulos = null;
        $tiposPrueba = null;
        $tiposRespuesta = null;
        $parametrosConjuntos = null;
        $arregloParametros = $request->request->get('uci_bundle_basedatosbundle_cuestionario');
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
        if ($libros == NULL && $areas == NULL && $grupos == NULL && $triangulos == NULL && $tiposPrueba == NULL && $tiposRespuesta == NULL && $parametrosConjuntos == NULL) {
            $vacio = TRUE;
        }
        return $this->sacarPreguntasParaCuestionario($libros, $areas, $grupos, $triangulos, $tiposPrueba, $tiposRespuesta, $parametrosConjuntos, $vacio, $cantidadPreguntas);
    }

    private function sacarPreguntasParaCuestionario($libros, $areas, $grupos, $triangulos, $tiposPrueba, $tiposRespuesta, $parametrosConjuntos, $vacio, $cantPreguntas) {
        $em = $this->getDoctrine()->getManager();
        $idsFinales = array(0);
        if ($vacio) {
            $indice = 0;
            $idsDeCondicion = $em->getRepository('UciBaseDatosBundle:Pregunta')->createQueryBuilder('u')
                            ->select('u.id')
                            ->getQuery()->getScalarResult();
            shuffle($idsDeCondicion);
            $idsDeConsulta = null;
            while ($idsDeCondicion && $indice < $cantPreguntas) {
                $el = array_rand($idsDeCondicion);
                $idsDeConsulta[] = $idsDeCondicion[$el];
                array_splice($idsDeCondicion, $el, 1);
                $indice++;
            }
            if ($idsDeConsulta) {
                $idsFinales = array_merge($idsFinales, $idsDeConsulta);
            }
        } else {
            if ($libros) {
                foreach ($libros as $libro) {
                    if ($libro['libro']) {
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
                            $el = array_rand($idsDeCondicion);
                            $idsDeConsulta[] = $idsDeCondicion[$el];
                            array_splice($idsDeCondicion, $el, 1);
                            $indice++;
                        }
                        if ($idsDeConsulta) {
                            $idsFinales = array_merge($idsFinales, $idsDeConsulta);
                        }
                    }
                }
            }
            if ($areas) {
                foreach ($areas as $area) {
                    if ($area['areaConocimiento']) {
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
                            $el = array_rand($idsDeCondicion);
                            $idsDeConsulta[] = $idsDeCondicion[$el];
                            array_splice($idsDeCondicion, $el, 1);
                            $indice++;
                        }
                        if ($idsDeConsulta) {
                            $idsFinales = array_merge($idsFinales, $idsDeConsulta);
                        }
                    }
                }
            }
            if ($grupos) {
                foreach ($grupos as $grupo) {
                    if ($grupo['grupoProcesos']) {
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
                            $el = array_rand($idsDeCondicion);
                            $idsDeConsulta[] = $idsDeCondicion[$el];
                            array_splice($idsDeCondicion, $el, 1);
                            $indice++;
                        }
                        if ($idsDeConsulta) {
                            $idsFinales = array_merge($idsFinales, $idsDeConsulta);
                        }
                    }
                }
            }
            if ($triangulos) {
                foreach ($triangulos as $triangulo) {
                    if ($triangulo['trianguloTalento']) {
                        $indice = 0;
                        $idsDeCondicion = $em->getRepository('UciBaseDatosBundle:Pregunta')->createQueryBuilder('u')
                                        ->select('u.id')
                                        ->where('u.trianguloTalento = :id')
                                        ->andWhere('u.id NOT IN (:miarray2)')
                                        ->setParameter('miarray2', $idsFinales)
                                        ->setParameter('id', $triangulo['trianguloTalento'])
                                        ->getQuery()->getScalarResult();
                        shuffle($idsDeCondicion);
                        $idsDeConsulta = null;
                        while ($idsDeCondicion && $indice < $triangulo['cantidad']) {
                            $el = array_rand($idsDeCondicion);
                            $idsDeConsulta[] = $idsDeCondicion[$el];
                            array_splice($idsDeCondicion, $el, 1);
                            $indice++;
                        }
                        if ($idsDeConsulta) {
                            $idsFinales = array_merge($idsFinales, $idsDeConsulta);
                        }
                    }
                }
            }
            if ($tiposPrueba) {
                foreach ($tiposPrueba as $tipoP) {
                    if ($tipoP['tipoPrueba']) {
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
                            $el = array_rand($idsDeCondicion);
                            $idsDeConsulta[] = $idsDeCondicion[$el];
                            array_splice($idsDeCondicion, $el, 1);
                            $indice++;
                        }
                        if ($idsDeConsulta) {
                            $idsFinales = array_merge($idsFinales, $idsDeConsulta);
                        }
                    }
                }
            }
            if ($tiposRespuesta) {
                foreach ($tiposRespuesta as $tipoR) {
                    if ($tipoR['tipoRespuesta']) {
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
                            $el = array_rand($idsDeCondicion);
                            $idsDeConsulta[] = $idsDeCondicion[$el];
                            array_splice($idsDeCondicion, $el, 1);
                            $indice++;
                        }
                        if ($idsDeConsulta) {
                            $idsFinales = array_merge($idsFinales, $idsDeConsulta);
                        }
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
                        $el = array_rand($idsDeCondicion);
                        $idsDeConsulta[] = $idsDeCondicion[$el];
                        array_splice($idsDeCondicion, $el, 1);
                        $indice++;
                    }
                    if ($idsDeConsulta) {
                        $idsFinales = array_merge($idsFinales, $idsDeConsulta);
                    }
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

    public function aASetearLibrosCuestionarioAction(Request $request) {
        if (strcmp(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH', FILTER_SANITIZE_STRING), 'XMLHttpRequest') == 0) {
            $idLibro = $request->get('idLibro');
            return $this->aObtenerDatosLibro($idLibro);
        }
    }

    public function aABorrarCuestionarioAction(Request $request, $idCuestionario) {
        $em = $this->getDoctrine()->getManager();
        $cuestionario = $em->getRepository('UciBaseDatosBundle:Cuestionario')->find($idCuestionario);
        if (!$cuestionario) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }
        $em->getConnection()->beginTransaction();
        try {
            $em->remove($cuestionario);
            $em->flush();
            $em->commit();
        } catch (Exception $e) {
            $em->getConnection()->rollback();
        }
        return $this->redirectToRoute('uci_asistente_academica_indicecuestionario');
    }

    private function aObtenerDatosLibro($idLibrop) {
        $em = $this->getDoctrine()->getManager();
        $libro = $em->getRepository('UciBaseDatosBundle:Libro')->find($idLibrop);
        $idLibro = ($libro) ? $libro->getId() : 0;
        $idPmbok = ($libro) ? $idPmbok = ($libro->getEsPmbok() == 1) ? $libro->getPmbok()->getId() : 0 : 0;
        $response = new JsonResponse();

        if ($idLibro == 0) {
            $qb1 = $em->getRepository('UciBaseDatosBundle:AreaConocimiento')->createQueryBuilder('a');
            $areas = $qb1->getQuery()->getArrayResult();
            $qb2 = $em->getRepository('UciBaseDatosBundle:GrupoProcesos')->createQueryBuilder('g');
            $grupos = $qb2->getQuery()->getArrayResult();
            $qb3 = $em->getRepository('UciBaseDatosBundle:TrianguloTalento')->createQueryBuilder('t');
            $triangulos = $qb3->getQuery()->getArrayResult();
            $qb4 = $em->getRepository('UciBaseDatosBundle:Capitulo')->createQueryBuilder('c');
            $capitulos = $qb4->getQuery()->getArrayResult();
        } else {
            $capitulos = $em->getRepository('UciBaseDatosBundle:Capitulo')->createQueryBuilder('u')
                            ->innerJoin('u.libro', 'g')
                            ->where('g.id = :id')
                            ->setParameter('id', $idLibro)
                            ->orderBy('u.nombreCapitulo', 'ASC')
                            ->getQuery()->getArrayResult();
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
