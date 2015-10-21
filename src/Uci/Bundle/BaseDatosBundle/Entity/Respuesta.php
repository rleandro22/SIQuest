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
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=false)
     */
    private $orden;

    /**
     * @var string
     *
     * @ORM\Column(name="texto_retroalimentacion", type="text", nullable=true)
     */
    private $textoRetroalimentacion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Pregunta", inversedBy="respuesta", cascade="delete")
     * @ORM\JoinTable(name="pregunta_tiene_respuesta",
     *   joinColumns={
     *     @ORM\JoinColumn(name="respuesta_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="pregunta_id", referencedColumnName="id")
     *   }
     * )
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
     * @return Respuesta
     */
    public function addPregunta(\Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta) {
        $this->pregunta[] = $pregunta;
        $pregunta->addRespuesta($this);
        return $this;
    }

    /**
     * Remove pregunta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta
     */
    public function removePregunta(\Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta) {
        $this->pregunta->removeElement($pregunta);
        $pregunta->removeRespuesta($this);
    }

    /**
     * Get pregunta
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPregunta() {
        return $this->pregunta;
    }
    
    
    public function __toString() {
        return $this->textoRespuesta;
    }

}
