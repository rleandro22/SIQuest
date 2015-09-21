<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Respuesta
 *
 * @ORM\Table(name="respuesta", indexes={@ORM\Index(name="fk_respuesta_tipo_respuesta1_idx", columns={"tipo_respuesta_id"})})
 * @ORM\Entity
 */
class Respuesta
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
     * @var string
     *
     * @ORM\Column(name="texto_respuesta", type="text", nullable=false)
     */
    private $textoRespuesta;

    /**
     * @var string
     *
     * @ORM\Column(name="texto_retroalimentacion", type="text", nullable=true)
     */
    private $textoRetroalimentacion;

    /**
     * @var \Uci\Bundle\BaseDatosBundle\Entity\TipoRespuesta
     *
     * @ORM\ManyToOne(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\TipoRespuesta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_respuesta_id", referencedColumnName="id")
     * })
     */
    private $tipoRespuesta;



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
     * Set textoRespuesta
     *
     * @param string $textoRespuesta
     * @return Respuesta
     */
    public function setTextoRespuesta($textoRespuesta)
    {
        $this->textoRespuesta = $textoRespuesta;

        return $this;
    }

    /**
     * Get textoRespuesta
     *
     * @return string 
     */
    public function getTextoRespuesta()
    {
        return $this->textoRespuesta;
    }

    /**
     * Set textoRetroalimentacion
     *
     * @param string $textoRetroalimentacion
     * @return Respuesta
     */
    public function setTextoRetroalimentacion($textoRetroalimentacion)
    {
        $this->textoRetroalimentacion = $textoRetroalimentacion;

        return $this;
    }

    /**
     * Get textoRetroalimentacion
     *
     * @return string 
     */
    public function getTextoRetroalimentacion()
    {
        return $this->textoRetroalimentacion;
    }

    /**
     * Set tipoRespuesta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\TipoRespuesta $tipoRespuesta
     * @return Respuesta
     */
    public function setTipoRespuesta(\Uci\Bundle\BaseDatosBundle\Entity\TipoRespuesta $tipoRespuesta = null)
    {
        $this->tipoRespuesta = $tipoRespuesta;

        return $this;
    }

    /**
     * Get tipoRespuesta
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\TipoRespuesta 
     */
    public function getTipoRespuesta()
    {
        return $this->tipoRespuesta;
    }
}
