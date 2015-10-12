<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Capitulo
 *
 * @ORM\Table(name="capitulo", indexes={@ORM\Index(name="fk_Capitulo_PMBok_idx", columns={"libro_id"})})
 * @ORM\Entity
 */
class Capitulo {

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
     * @ORM\Column(name="numero_capitulo", type="integer", nullable=false)
     */
    private $numeroCapitulo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_capitulo", type="string", length=200, nullable=false)
     */
    private $nombreCapitulo;

    /**
     * @var \Uci\Bundle\BaseDatosBundle\Entity\Libro
     *
     * @ORM\ManyToOne(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Libro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="libro_id", referencedColumnName="id")
     * })
     */
    private $libro;

    /**
     * Set id
     *
     * @param integer $id
     * @return Capitulo
     */
    public function setId($id) {
        $this->id = $id;

        return $this;
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
     * Set numeroCapitulo
     *
     * @param integer $numeroCapitulo
     * @return Capitulo
     */
    public function setNumeroCapitulo($numeroCapitulo) {
        $this->numeroCapitulo = $numeroCapitulo;

        return $this;
    }

    /**
     * Get numeroCapitulo
     *
     * @return integer 
     */
    public function getNumeroCapitulo() {
        return $this->numeroCapitulo;
    }

    /**
     * Set nombreCapitulo
     *
     * @param string $nombreCapitulo
     * @return Capitulo
     */
    public function setNombreCapitulo($nombreCapitulo) {
        $this->nombreCapitulo = $nombreCapitulo;

        return $this;
    }

    /**
     * Get nombreCapitulo
     *
     * @return string 
     */
    public function getNombreCapitulo() {
        return $this->nombreCapitulo;
    }

    /**
     * Set libro
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Libro $libro
     * @return Capitulo
     */
    public function setLibro(\Uci\Bundle\BaseDatosBundle\Entity\Libro $libro = null) {
        $this->libro = $libro;

        return $this;
    }

    /**
     * Get libro
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\Libro 
     */
    public function getLibro() {
        return $this->libro;
    }

    public function __toString() {
        return $this->numeroCapitulo . '-' . $this->nombreCapitulo;
    }

}
