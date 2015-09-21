<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreguntaTieneRespuestas
 *
 * @ORM\Table(name="pregunta_tiene_respuestas", indexes={@ORM\Index(name="fk_pregunta_tiene_respuestas_respuesta_idx", columns={"respuesta_id"}), @ORM\Index(name="fk_pregunta_tiene_respuestas_pregunta1_idx", columns={"pregunta_id"})})
 * @ORM\Entity
 */
class PreguntaTieneRespuestas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=false)
     */
    private $orden;

    /**
     * @var \Uci\Bundle\BaseDatosBundle\Entity\Respuesta
     *
     * @ORM\ManyToOne(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Respuesta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="respuesta_id", referencedColumnName="id")
     * })
     */
    private $respuesta;

    /**
     * @var \Uci\Bundle\BaseDatosBundle\Entity\Pregunta
     *
     * @ORM\ManyToOne(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Pregunta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pregunta_id", referencedColumnName="id")
     * })
     */
    private $pregunta;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return PreguntaTieneRespuestas
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set respuesta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Respuesta $respuesta
     * @return PreguntaTieneRespuestas
     */
    public function setRespuesta(\Uci\Bundle\BaseDatosBundle\Entity\Respuesta $respuesta = null)
    {
        $this->respuesta = $respuesta;

        return $this;
    }

    /**
     * Get respuesta
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\Respuesta 
     */
    public function getRespuesta()
    {
        return $this->respuesta;
    }

    /**
     * Set pregunta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta
     * @return PreguntaTieneRespuestas
     */
    public function setPregunta(\Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta = null)
    {
        $this->pregunta = $pregunta;

        return $this;
    }

    /**
     * Get pregunta
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\Pregunta 
     */
    public function getPregunta()
    {
        return $this->pregunta;
    }
}
