<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Respuesta
 *
 * @ORM\Table(name="respuesta")
 * @ORM\Entity
 */
class Respuesta {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="texto_respuesta", type="text", nullable=false)
     */
    private $textoRespuesta;

    /**
     * @var string
     *
     * @ORM\Column(name="correcta", type="smallint", length=1, nullable=false)
     */
    private $correcta;

    /**
     * @var string
     *
     * @ORM\Column(name="extra", type="text", nullable=false)
     */
    private $extra;

    /**
     * @var string
     *
     * @ORM\Column(name="texto_retroalimentacion", type="text", nullable=true)
     */
    private $textoRetroalimentacion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Pregunta", mappedBy="respuesta")
     */
    private $pregunta;

    /**
     * Constructor
     */
    public function __construct() {
        $this->pregunta = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return PreguntaTieneRespuestas
     */
    public function setOrden($orden) {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden() {
        return $this->orden;
    }

    /**
     * Set textoRespuesta
     *
     * @param string $textoRespuesta
     * @return Respuesta
     */
    public function setTextoRespuesta($textoRespuesta) {
        $this->textoRespuesta = $textoRespuesta;

        return $this;
    }

    /**
     * Get textoRespuesta
     *
     * @return string 
     */
    public function getTextoRespuesta() {
        return $this->textoRespuesta;
    }

    /**
     * Set textoRetroalimentacion
     *
     * @param string $textoRetroalimentacion
     * @return Respuesta
     */
    public function setTextoRetroalimentacion($textoRetroalimentacion) {
        $this->textoRetroalimentacion = $textoRetroalimentacion;

        return $this;
    }

    /**
     * Get textoRetroalimentacion
     *
     * @return string 
     */
    public function getTextoRetroalimentacion() {
        return $this->textoRetroalimentacion;
    }

    /**
     * Add pregunta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta
     * @return TipoPrueba
     */
    public function addPreguntum(\Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta) {
        $this->pregunta[] = $pregunta;

        return $this;
    }

    /**
     * Remove pregunta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta
     */
    public function removePreguntum(\Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta) {
        $this->pregunta->removeElement($pregunta);
    }

    /**
     * Get pregunta
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPregunta() {
        return $this->pregunta;
    }

    function getCorrecta() {
        return $this->correcta;
    }

    function getExtra() {
        return $this->extra;
    }

    function setCorrecta($correcta) {
        $this->correcta = $correcta;
    }

    function setExtra($extra) {
        $this->extra = $extra;
    }

    public function __toString() {
        return $this->textoRespuesta;
    }

}
