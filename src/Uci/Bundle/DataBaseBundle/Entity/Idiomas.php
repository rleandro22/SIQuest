<?php

namespace Uci\Bundle\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Idiomas
 *
 * @ORM\Table(name="idiomas", uniqueConstraints={@ORM\UniqueConstraint(name="codigo_lenguaje_UNIQUE", columns={"codigo_lenguaje"})})
 * @ORM\Entity
 */
class Idiomas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_lenguaje", type="string", length=2, nullable=false)
     */
    private $codigoLenguaje;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_lenguaje", type="string", length=45, nullable=false)
     */
    private $nombreLenguaje;



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
     * Set codigoLenguaje
     *
     * @param string $codigoLenguaje
     * @return Idiomas
     */
    public function setCodigoLenguaje($codigoLenguaje)
    {
        $this->codigoLenguaje = $codigoLenguaje;

        return $this;
    }

    /**
     * Get codigoLenguaje
     *
     * @return string 
     */
    public function getCodigoLenguaje()
    {
        return $this->codigoLenguaje;
    }

    /**
     * Set nombreLenguaje
     *
     * @param string $nombreLenguaje
     * @return Idiomas
     */
    public function setNombreLenguaje($nombreLenguaje)
    {
        $this->nombreLenguaje = $nombreLenguaje;

        return $this;
    }

    /**
     * Get nombreLenguaje
     *
     * @return string 
     */
    public function getNombreLenguaje()
    {
        return $this->nombreLenguaje;
    }
}
