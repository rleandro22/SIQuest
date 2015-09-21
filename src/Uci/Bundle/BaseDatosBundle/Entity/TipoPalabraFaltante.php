<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoPalabraFaltante
 *
 * @ORM\Table(name="tipo_palabra_faltante", indexes={@ORM\Index(name="fk_palabra_faltante_respuesta1_idx", columns={"respuesta_id"})})
 * @ORM\Entity
 */
class TipoPalabraFaltante
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
     * @return TipoPalabraFaltante
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
     * Set respuesta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Respuesta $respuesta
     * @return TipoPalabraFaltante
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
