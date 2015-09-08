<?php

namespace Uci\Bundle\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Libro
 *
 * @ORM\Table(name="libro", indexes={@ORM\Index(name="fk_Libro_idiomas1_idx", columns={"idiomas_id"})})
 * @ORM\Entity
 */
class Libro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=200, nullable=false)
     */
    private $titulo;

    /**
     * @var integer
     *
     * @ORM\Column(name="anio", type="integer", nullable=false)
     */
    private $anio;

    /**
     * @var string
     *
     * @ORM\Column(name="es_pmbok", type="blob", length=1, nullable=false)
     */
    private $esPmbok;

    /**
     * @var \Idiomas
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Idiomas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idiomas_id", referencedColumnName="id")
     * })
     */
    private $idiomas;



    /**
     * Set id
     *
     * @param integer $id
     * @return Libro
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set titulo
     *
     * @param string $titulo
     * @return Libro
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set anio
     *
     * @param integer $anio
     * @return Libro
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return integer 
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set esPmbok
     *
     * @param string $esPmbok
     * @return Libro
     */
    public function setEsPmbok($esPmbok)
    {
        $this->esPmbok = $esPmbok;

        return $this;
    }

    /**
     * Get esPmbok
     *
     * @return string 
     */
    public function getEsPmbok()
    {
        return $this->esPmbok;
    }

    /**
     * Set idiomas
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Idiomas $idiomas
     * @return Libro
     */
    public function setIdiomas(\Uci\Bundle\DataBaseBundle\Entity\Idiomas $idiomas = null)
    {
        $this->idiomas = $idiomas;

        return $this;
    }

    /**
     * Get idiomas
     *
     * @return \Uci\Bundle\DataBaseBundle\Entity\Idiomas 
     */
    public function getIdiomas()
    {
        return $this->idiomas;
    }
}
