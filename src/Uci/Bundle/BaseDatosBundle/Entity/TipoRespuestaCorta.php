<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoRespuestaCorta
 *
 * @ORM\Table(name="tipo_respuesta_corta", indexes={@ORM\Index(name="fk_tipo_respuesta_corta_respuesta1_idx", columns={"respuesta_id"})})
 * @ORM\Entity
 */
class TipoRespuestaCorta
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
     * @ORM\Column(name="correcta", type="blob", length=1, nullable=false)
     */
    private $correcta;

    /**
     * @var string
     *
     * @ORM\Column(name="porcentaje_correccion", type="decimal", precision=2, scale=0, nullable=true)
     */
    private $porcentajeCorreccion;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set correcta
     *
     * @param string $correcta
     * @return TipoRespuestaCorta
     */
    public function setCorrecta($correcta)
    {
        $this->correcta = $correcta;

        return $this;
    }

    /**
     * Get correcta
     *
     * @return string 
     */
    public function getCorrecta()
    {
        return $this->correcta;
    }

    /**
     * Set porcentajeCorreccion
     *
     * @param string $porcentajeCorreccion
     * @return TipoRespuestaCorta
     */
    public function setPorcentajeCorreccion($porcentajeCorreccion)
    {
        $this->porcentajeCorreccion = $porcentajeCorreccion;

        return $this;
    }

    /**
     * Get porcentajeCorreccion
     *
     * @return string 
     */
    public function getPorcentajeCorreccion()
    {
        return $this->porcentajeCorreccion;
    }

    /**
     * Set respuesta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Respuesta $respuesta
     * @return TipoRespuestaCorta
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
}
