<?php

namespace Uci\Bundle\BaseDatosBundle\Archivos;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Response;

class CrearArchivoCuestionario {

    private $cuestionario;
    private $ruta;

    function __construct($ruta, $cuestionario) {
        $this->cuestionario = $cuestionario;
        $this->ruta = $ruta;
    }

    function getRuta() {
        return $this->ruta;
    }

    function setRuta($ruta) {
        $this->ruta = $ruta;
    }

    function getCuestionario() {
        return $this->cuestionario;
    }

    function setCuestionario($cuestionario) {
        $this->cuestionario = $cuestionario;
    }

    function generarArchivo() {
        try {
            $fs = new Filesystem();
            $filename = $date = date('Ymdihs') . rand(0, 100) . '.txt';
            if (!$fs->exists($this->ruta . '/Descargas/')) {
                $fs->mkdir($this->ruta . '/Descargas/');
            }
            $preguntas = $this->cuestionario->getPregunta();
            $content = '';
            $contador = 0;
            foreach ($preguntas as $pregunta) {
                $contador++;
                $content = $content . '// pregunta: ' . $pregunta->getId() . "\r\n" . '::Q' . $contador . '::[html]' . $pregunta->getTitulo();
                if ($pregunta->getTipoRespuesta()->getId() != 7) {
                    $content = $content . '\:{';
                }
                if ($pregunta->getTipoRespuesta()->getId() != 4 && $pregunta->getTipoRespuesta()->getId() != 2) {
                    $content = $content . "\r\n";
                }
                $respuestas = $pregunta->getRespuesta();
                foreach ($respuestas as $respuesta) {
                    if ($pregunta->getTipoRespuesta()->getId() != 2 && $pregunta->getTipoRespuesta()->getId() != 4) {
                        $content = $content . "\t";
                    }
                    if ($pregunta->getTipoRespuesta()->getId() == 1) {
                        $content = $content . '=';
                    } else if ($pregunta->getTipoRespuesta()->getId() == 2) {
                        $content = $content . '#';
                    } else if ($pregunta->getTipoRespuesta()->getId() == 3) {
                        if ($respuesta->getCorrecta() == 1) {
                            $content = $content . '=';
                        } else {
                            $content = $content . '~';
                        }
                    } else if ($pregunta->getTipoRespuesta()->getId() == 4) {
                        if ($respuesta->getCorrecta() == 1) {
                            $content = $content . 'T';
                        } else {
                            $content = $content . 'V';
                        }
                    } else if ($pregunta->getTipoRespuesta()->getId() == 6) {
                        if ($respuesta->getCorrecta() == 1) {
                            $content = $content . '=';
                        } else {
                            $content = $content . '~';
                        }
                    } else if ($pregunta->getTipoRespuesta()->getId() == 8) {
                        $content = $content . '=';
                    } else if ($pregunta->getTipoRespuesta()->getId() == 9) {
                        $content = $content . '=';
                    }
                    if ($pregunta->getTipoRespuesta()->getId() != 4 && $pregunta->getTipoRespuesta()->getId() != 5) {
                        $content = $content . $respuesta->getTextoRespuesta();
                        if ($pregunta->getTipoRespuesta()->getId() == 9) {
                            $content = $content . '->' . $respuesta->getExtra();
                        }
                        if ($pregunta->getTipoRespuesta()->getId() != 2) {
                            $content = $content . "\r\n";
                        }
                    }
                }
                if ($pregunta->getTipoRespuesta()->getId() != 7) {
                    $content = $content . "}";
                }
                $content = $content . "\r\n\r\n";
            }
            $response = new Response();
            $response->headers->set('Content-Type', 'text/csv');
            $response->headers->set('Content-Disposition', 'attachment;filename="' . $filename);
            $response->setContent($content);
            ignore_user_abort(true);
            if (file_exists($filename)) {
                unlink($filename);
            }
            return $response;
        } catch (IOExceptionInterface $e) {
            echo "An error occurred while creating your directory at " . $e->getPath();
        }
    }

}
