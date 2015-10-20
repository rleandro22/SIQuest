<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoRespuesta
 *
 * @ORM\Table(name="tipo_respuesta")
 * @ORM\Entity
 */
class TipoRespuesta {

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
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="explicacion", type="text", nullable=false)
     */
    private $explicacion;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return TipoRespuesta
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre() {
        return $this->nombre;
    }
    
    /**
     * Get explicacion
     *
     * @return string 
     */
    function getExplicacion() {
        return $this->explicacion;
    }

    /**
     * Set explicacion
     *
     * @param string $explicacion
     * @return TipoRespuesta
     */
    function setExplicacion($explicacion) {
        $this->explicacion = $explicacion;
        return $this;
    }

    

    public function __toString() {
        return $this->nombre;
    }

}
