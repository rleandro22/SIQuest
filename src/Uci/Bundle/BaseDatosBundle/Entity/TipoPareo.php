<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoPareo
 *
 * @ORM\Table(name="tipo_pareo", indexes={@ORM\Index(name="fk_respuesta_corta_respuesta1_idx", columns={"respuesta_id"})})
 * @ORM\Entity
 */
class TipoPareo
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
     * @ORM\Column(name="asociada", type="text", nullable=false)
     */
    private $asociada;

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
     * Set asociada
     *
     * @param string $asociada
     * @return TipoPareo
     */
    public function setAsociada($asociada)
    {
        $this->asociada = $asociada;

        return $this;
    }

    /**
     * Get asociada
     *
     * @return string 
     */
    public function getAsociada()
    {
        return $this->asociada;
    }

    /**
     * Set porcentajeCorreccion
     *
     * @param string $porcentajeCorreccion
     * @return TipoPareo
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
     * @return TipoPareo
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
