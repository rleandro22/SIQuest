<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Respuesta
 *
 * @ORM\Table(name="respuesta")
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

}
