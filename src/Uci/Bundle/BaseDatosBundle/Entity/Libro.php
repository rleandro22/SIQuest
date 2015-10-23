<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * Libro
 *
 * @ORM\Table(name="libro", indexes={@ORM\Index(name="fk_libro_idiomas1_idx", columns={"idiomas_id"}),@ORM\Index(name="fk_libro_pmbok1_idx", columns={"pmbok_id"})})
 * @ORM\Entity
 */
class Libro {
    
     /**
     * @ORM\OneToMany(targetEntity="Categoria", mappedBy="libro_id")
     */
    private $capitulos;
 
    public function __construct()
    {
        $this->capitulos = new ArrayCollection();
    }
    

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
     * @ORM\Column(name="es_pmbok", type="smallint", length=1, nullable=false)
     */
    private $esPmbok;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="numero_paginas", type="integer", nullable=false)
     */
    private $numeroPaginas;

    /**
     * @var \Uci\Bundle\BaseDatosBundle\Entity\Idiomas
     *
     * @ORM\ManyToOne(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Idiomas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idiomas_id", referencedColumnName="id")
     * })
     */
    private $idiomas;

    /**
     * @var \Uci\Bundle\BaseDatosBundle\Entity\Pmbok
     *
     * @ORM\ManyToOne(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Pmbok")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pmbok_id", referencedColumnName="id")
     * })
     */
    private $pmbok;

    /**
     * Set usuario
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Pmbok $pmbok
     * @return Libro
     */
    public function setPmbok(\Uci\Bundle\BaseDatosBundle\Entity\Pmbok $pmbok = null) {
        $this->pmbok = $pmbok;

        return $this;
    }

    /**
     * Get pmbok
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\Pmbok
     */
    public function getPmbok() {
        return $this->pmbok;
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
     * Set titulo
     *
     * @param string $titulo
     * @return Libro
     */
    public function setTitulo($titulo) {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo() {
        return $this->titulo;
    }

    /**
     * Set anio
     *
     * @param integer $anio
     * @return Libro
     */
    public function setAnio($anio) {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return integer 
     */
    public function getAnio() {
        return $this->anio;
    }

    /**
     * Set esPmbok
     *
     * @param string $esPmbok
     * @return Libro
     */
    public function setEsPmbok($esPmbok) {
        $this->esPmbok = $esPmbok;

        return $this;
    }

    /**
     * Get esPmbok
     *
     * @return string 
     */
    public function getEsPmbok() {
        return $this->esPmbok;
    }

    /**
     * Set idiomas
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Idiomas $idiomas
     * @return Libro
     */
    public function setIdiomas(\Uci\Bundle\BaseDatosBundle\Entity\Idiomas $idiomas = null) {
        $this->idiomas = $idiomas;

        return $this;
    }

    /**
     * Get idiomas
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\Idiomas 
     */
    public function getIdiomas() {
        return $this->idiomas;
    }
    
    /**
     * Add capitulo
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Capitulo $capitulo
     * @return Curso
     */
    public function addCapitulo(\Uci\Bundle\BaseDatosBundle\Entity\Capitulo $capitulo)
    {
        $this->capitulos[] = $capitulo;

        return $this;
    }
    
    
    public function setCapitulos($capitulos) {
     $this->capitulos= $capitulos;
    }
    
    public function getCapitulos(){
        return $this->capitulos;
    }
    
    function getNumeroPaginas() {
        return $this->numeroPaginas;
    }

    function setNumeroPaginas($numeroPaginas) {
        $this->numeroPaginas = $numeroPaginas;
    }

    

        public function __toString() {
        return $this->titulo;
    }

}
