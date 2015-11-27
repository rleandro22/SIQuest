<?php

namespace Uci\Bundle\BaseDatosBundle\Archivos;

class CrearArchivoCuestionario {

    private $cuestionario;

    function __construct($cuestionario) {
        $this->cuestionario = $cuestionario;
    }

    function getCuestionario() {
        return $this->cuestionario;
    }

    function setCuestionario($cuestionario) {
        $this->cuestionario = $cuestionario;
    }

    function generarArchivo() {
        
    }

}
