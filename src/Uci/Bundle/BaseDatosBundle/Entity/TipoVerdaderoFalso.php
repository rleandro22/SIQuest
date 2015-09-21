<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoVerdaderoFalso
 *
 * @ORM\Table(name="tipo_verdadero_falso", uniqueConstraints={@ORM\UniqueConstraint(name="respuesta_id_UNIQUE", columns={"respuesta_id"})})
 * @ORM\Entity
 */
class TipoVerdaderoFalso
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
     * @ORM\Column(name="verdadera", type="blob", length=1, nullable=false)
     */
    private $verdadera;

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
     * Set verdadera
     *
     * @param string $verdadera
     * @return TipoVerdaderoFalso
     */
    public function setVerdadera($verdadera)
    {
        $this->verdadera = $verdadera;

        return $this;
    }

    /**
     * Get verdadera
     *
     * @return string 
     */
    public function getVerdadera()
    {
        return $this->verdadera;
    }

    /**
     * Set respuesta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Respuesta $respuesta
     * @return TipoVerdaderoFalso
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
