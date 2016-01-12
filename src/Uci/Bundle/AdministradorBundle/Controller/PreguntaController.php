<?php

namespace Uci\Bundle\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Uci\Bundle\BaseDatosBundle\Form\PreguntaIndiceType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use \Uci\Bundle\BaseDatosBundle\Entity\Pregunta;
use Uci\Bundle\BaseDatosBundle\Entity\Respuesta;
use Uci\Bundle\BaseDatosBundle\Form\EligeTipoType;
use Uci\Bundle\BaseDatosBundle\Form\PreguntaType;
use Uci\Bundle\BaseDatosBundle\Form\ImportarPreguntaType;
use Doctrine\Common\Collections\ArrayCollection;

class PreguntaController extends Controller {

    public function aIndicePreguntaAction(Request $request) {
        $idLibro = '';
        $idCapitulo = '';
        $idGrupoProcesos = '';
        $idAreaConocimiento = '';
        $idTrianguloTalento = '';
        $esPmbok = 0;
        $pregunta = new Pregunta();
        if ($request->getMethod() == 'POST') {
            $idLibro = $request->request->get('PreguntaIndiceType')['libro'];
            $idCapitulo = $request->request->get('PreguntaIndiceType')['capitulo'];
            $idGrupoProcesos = isset($request->request->get('PreguntaIndiceType')['grupoProcesos']) ? $request->request->get('PreguntaIndiceType')['grupoProcesos'] : '';
            $idAreaConocimiento = isset($request->request->get('PreguntaIndiceType')['areaConocimiento']) ? $request->request->get('PreguntaIndiceType')['areaConocimiento'] : '';
            $idTrianguloTalento = isset($request->request->get('PreguntaIndiceType')['trianguloTalento']) ? $request->request->get('PreguntaIndiceType')['trianguloTalento'] : '';
            $this->setearPregunta($idLibro, $idCapitulo, $idGrupoProcesos, $idAreaConocimiento, $idTrianguloTalento, $pregunta);
            if ($pregunta->getLibro()) {
                $esPmbok = $pregunta->getLibro()->getEsPmbok();
            }
        }
        $preguntas = $this->aSortearPreguntas($idLibro, $idCapitulo, $idGrupoProcesos, $idAreaConocimiento, $idTrianguloTalento);
        $form = $this->createForm(new PreguntaIndiceType(), $pregunta);
        return $this->render('UciAdministradorBundle:VistaPregunta:indicePregunta.html.twig', array(
                    'entities' => $preguntas,
                    'form' => $form->createView(),
                    'espmbok' => $esPmbok
        ));
    }

    public function aRegistrarPreguntaAction(Request $request, $idTipoRespuesta, $idTipoRespuesta) {
        $entity = new Pregunta();
        $em = $this->getDoctrine()->getManager();
        $entity->setTipoRespuesta($em->getRepository('UciBaseDatosBundle:TipoRespuesta')->find($idTipoRespuesta));
        $error = '';
        $form = $this->createForm(new PreguntaType($idTipoRespuesta, 1), $entity);
        $form->handleRequest($request);
        if (strcmp(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH', FILTER_SANITIZE_STRING), 'XMLHttpRequest') == 0) {
            return $this->aObtenerDatosLibro($entity->getLibro());
        } else if ($request->getMethod() == 'POST') {
            $error = $form->getErrors();
            if ($form->isValid()) {
                $em->getConnection()->beginTransaction();
                try {
                    $this->guardarRespuestas($em, $entity);
                    $em->persist($entity);
                    $em->flush();
                    $em->commit();
                    return $this->redirectToRoute('uci_administrador_indicepreguntas');
                } catch (Exception $e) {
                    $em->getConnection()->rollback();
                    $error = $e;
                }
            }
        }
        return $this->render('UciAdministradorBundle:VistaPregunta:registrarPregunta.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'error' => $error,
        ));
    }

    public function aEditarPreguntaAction(Request $request, $idPregunta) {
        $em = $this->getDoctrine()->getManager();
        $pregunta = $em->getRepository('UciBaseDatosBundle:Pregunta')->find($idPregunta);
        $error = '';
        if (!$pregunta) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }
        $form = $this->createForm(new PreguntaType($pregunta->getTipoRespuesta()->getId(), 0), $pregunta);
        $form->handleRequest($request);
        if (strcmp(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH', FILTER_SANITIZE_STRING), 'XMLHttpRequest') == 0) {
            return $this->aObtenerDatosLibro($pregunta->getLibro());
        } else if ($request->getMethod() == 'POST') {
            $error = $form->getErrors();
            if ($form->isValid()) {
                $em->getConnection()->beginTransaction();
                try {
                    $this->guardarRespuestas($em, $pregunta);
                    $em->persist($pregunta);
                    $em->flush();
                    $em->commit();
                } catch (\Exception $e) {
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

    public function aBorrarRespuestaAction(Request $request) {
        if (strcmp(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH', FILTER_SANITIZE_STRING), 'XMLHttpRequest') == 0) {
            $idRespuesta = $request->get('idRespuesta');
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UciBaseDatosBundle:Respuesta')->find($idRespuesta);
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Usuario entity.');
            }
            try {
                $em->remove($entity);
                $em->flush();
                $mensaje = 'Borrado exitoso';
            } catch (Exception $e) {
                $em->getConnection()->rollback();
                $mensaje = 'Ocurrio un error';
            }
            return new JsonResponse(array('mensaje' => $mensaje));
        }
    }

    public function aBorrarPreguntaAction(Request $request, $idPregunta) {
        $em = $this->getDoctrine()->getManager();
        $pregunta = $em->getRepository('UciBaseDatosBundle:Pregunta')->find($idPregunta);
        if (!$pregunta) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }
        $em->getConnection()->beginTransaction();
        try {
            $this->borrarRespuestas($em, $pregunta);
            $em->remove($pregunta);
            $em->flush();
            $em->commit();
        } catch (\Exception $e) {
            $em->getConnection()->rollback();
        }
        return $this->redirectToRoute('uci_administrador_indicepreguntas');
    }

    private function aObtenerDatosLibro($libro) {
        $idLibro = ($libro) ? $libro->getId() : 0;
        $em = $this->getDoctrine()->getManager();
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

    public function aElegirTipoAction(Request $request) {
        $form = $this->createForm(new EligeTipoType());
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $tipoRespuesta = $form["tipoRespuesta"]->getData();
                return $this->redirect($this->generateUrl("uci_administrador_registrarPregunta", array("idTipoRespuesta" => $tipoRespuesta->getId())));
            }
        }
        return $this->render('UciAdministradorBundle:VistaPregunta:elegirTipoPregunta.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    public function aImportarPreguntasAction(Request $request) {
        $form = $this->createForm(new ImportarPreguntaType());
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $arregloPreguntas = new ArrayCollection();
                $file = $form['file']->getData();
                $extension = $file->guessExtension();
                if ($extension == "xls") { // check if the file extension is as required; you can also check the mime type itself: $file->getMimeType()
                    $em = $this->getDoctrine()->getManager();
                    $tipoRespuesta = $em->getRepository('UciBaseDatosBundle:TipoRespuesta')->find(3);
                    $nombreArchivo = $file->getPathname();
                    $this->importarArchivo($arregloPreguntas, $tipoRespuesta, $nombreArchivo);
                }
                return $this->guardarPreguntas($arregloPreguntas);
            }
        }
        return $this->render('UciAdministradorBundle:VistaPregunta:importarPreguntas.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    /*
     * Este metodo contruye la entidad pregunta a partir de los id de sus componentes
     */

    private function setearPregunta($idLibro, $idCapitulo, $idGrupoProcesos, $idAreaConocimiento, $idTrianguloTalento, &$pregunta) {
        $em = $this->getDoctrine()->getManager();
        $libro = $em->getRepository('UciBaseDatosBundle:Libro')->find($idLibro);
        $capitulo = $em->getRepository('UciBaseDatosBundle:Capitulo')->find($idCapitulo);
        $grupo = $em->getRepository('UciBaseDatosBundle:GrupoProcesos')->find($idGrupoProcesos);
        $area = $em->getRepository('UciBaseDatosBundle:AreaConocimiento')->find($idAreaConocimiento);
        $triangulo = $em->getRepository('UciBaseDatosBundle:TrianguloTalento')->find($idTrianguloTalento);
        $pregunta->setLibro($libro);
        $pregunta->setAreaConocimiento($area);
        $pregunta->setTrianguloTalento($triangulo);
        $pregunta->setCapitulo($capitulo);
        $pregunta->setGrupoProcesos($grupo);
    }

    /*
     * Este metodo devuelve la lista de preguntas que se muestran en la tabla.
     * Si ninguno de los parametro esta establecido, devuelve toda la lista
     */

    private function aSortearPreguntas($idLibro = '', $idCapitulo = '', $idGrupoProcesos = '', $idAreaConocimiento = '', $idTrianguloTalento = '') {
        $em = $this->getDoctrine()->getManager();
        if (empty($idLibro) && empty($idCapitulo) && empty($idGrupoProcesos) && empty($idAreaConocimiento) && empty($idTrianguloTalento)) {
            $preguntas = $em->getRepository('UciBaseDatosBundle:Pregunta')->findBy(array(), array('titulo' => 'ASC'));
        } else {
            $repository = $this->getDoctrine()->getRepository('UciBaseDatosBundle:Pregunta');
            $qb = $repository->createQueryBuilder('p');

            if (!empty($idLibro)) {
                $qb->innerJoin('p.libro', 'l');
                $qb->where('l.id= :idLibro')
                        ->setParameter('idLibro', $idLibro);
            }
            if (!empty($idCapitulo)) {
                $qb->innerJoin('p.capitulo', 'c');
                $qb->andWhere('c.id= :idCapitulo')
                        ->setParameter('idCapitulo', $idCapitulo);
            }
            if (!empty($idGrupoProcesos)) {
                $qb->innerJoin('p.grupoProcesos', 'g');
                $qb->andWhere('g.id= :idGrupoProcesos')
                        ->setParameter('idGrupoProcesos', $idGrupoProcesos);
            }
            if (!empty($idAreaConocimiento)) {
                $qb->innerJoin('p.areaConocimiento', 'a');
                $qb->andWhere('a.id= :idAreaConocimiento')
                        ->setParameter('idAreaConocimiento', $idAreaConocimiento);
            }
            if (!empty($idTrianguloTalento)) {
                $qb->innerJoin('p.trianguloTalento', 't');
                $qb->andWhere('t.id= :idTrianguloTalento')
                        ->setParameter('idTrianguloTalento', $idTrianguloTalento);
            }
            $preguntas = $qb->getQuery()->getResult();
        }
        return $preguntas;
    }

    private function borrarRespuestas($em, &$pregunta) {
        $respuestas = $pregunta->getRespuesta();
        foreach ($respuestas as $respuesta) {
            $em->remove($respuesta);
            $em->clear($respuesta);
        }
    }

    private function guardarRespuestas($em, &$pregunta) {
        $respuestas = $pregunta->getRespuesta();
        foreach ($respuestas as $respuesta) {
            $em->persist($respuesta);
            $em->clear($respuesta);
        }
    }

    private function guardarPreguntas($arregloPreguntas) {
        $em = $this->getDoctrine()->getManager();
        $em->getConnection()->beginTransaction();
        try {
            foreach ($arregloPreguntas as $pregunta) {
                $this->guardarRespuestas($em, $pregunta);
                $em->persist($pregunta);
                $em->clear($pregunta);
            }
            $em->flush();
            $em->commit();
            return $this->redirectToRoute('uci_administrador_indicepreguntas');
        } catch (\Exception $e) {
            $em->getConnection()->rollback();
        }
    }

    //Método para importar el archivo excel
    private function importarArchivo(&$arregloPreguntas, $tipoRespuesta, $ubicacion) {
        $em = $this->getDoctrine()->getManager();
        $preguntasParametro = $em->getRepository('UciBaseDatosBundle:Pregunta')->findAll();
        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject($ubicacion);
        $objWorksheet = $phpExcelObject->setActiveSheetIndex(0);
        $highestRow = $objWorksheet->getHighestRow();
        //Se recorre toda la hoja excel desde la fila 2 y se almacenan los datos
        for ($row = 4; $row <= $highestRow; ++$row) {
            $dataRow = $objWorksheet->rangeToArray('A' . $row . ':' . 'E' . $row, null, true, true, true);
            if ((isset($dataRow[$row]['A'])) && ($dataRow[$row]['A'] > '')) {
                if ((strpos($dataRow[$row]['A'], "::") === 0) &&(isset($dataRow[$row]['C'])) && ($dataRow[$row]['C'] > '')) {
                    $pregunta = new Pregunta();
                    $textoPregunta = trim($dataRow[$row]['C']);
                    $pregunta->setTitulo($textoPregunta);
                    $pregunta->setTipoRespuesta($tipoRespuesta);
                } else if ((strpos($dataRow[$row]['A'], "=") === 0) || (strpos($dataRow[$row]['A'], "~") === 0)) {
                    $respuesta = new Respuesta();
                    $textoRespuesta = trim($dataRow[$row]['C']);
                    $respuesta->setTextoRespuesta($textoRespuesta);
                    if ((isset($dataRow[$row]['E'])) && ($dataRow[$row]['E'] > '') && ($dataRow[$row]['E'] != 'Feedback')) {
                        $textoRetroalimentacion = trim($dataRow[$row]['E']);
                        $respuesta->setTextoRetroalimentacion($textoRetroalimentacion);
                    }
                    if (strpos($dataRow[$row]['A'], "=") === 0) {
                        $esCorrecta = 1;
                    } else if (strpos($dataRow[$row]['A'], "~") === 0) {
                        $esCorrecta = 0;
                    }
                    $respuesta->setCorrecta($esCorrecta);
                    $pregunta->addRespuesta($respuesta);
                }
                if (strpos($dataRow[$row]['A'], "}") === 0 && $this->existePregunta($pregunta, $preguntasParametro) == FALSE) {
                    $arregloPreguntas[] = $pregunta;
                }
            } //endif
        }//end for
    }
    
    private function existePregunta($pregunta, $preguntas){
        foreach ($preguntas as $preguntaActual){
            $existe = $pregunta->equals($preguntaActual);
            if($existe == TRUE){
                return TRUE;
            }
        }
        return FALSE;
    }

}
