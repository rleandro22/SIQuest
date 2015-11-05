<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pregunta
 *
 * @ORM\Table(name="pregunta", indexes={@ORM\Index(name="fk_pregunta_capitulo1_idx", columns={"capitulo_id"}), @ORM\Index(name="fk_pregunta_grupo_procesos1_idx", columns={"grupo_procesos_id"}), @ORM\Index(name="fk_respuesta_tipo_respuesta1_idx", columns={"tipo_respuesta_id"}), @ORM\Index(name="fk_pregunta_area_conocimiento1_idx", columns={"area_conocimiento_id"}), @ORM\Index(name="fk_pregunta_libro1_idx", columns={"libro_id"})})
 * @ORM\Entity
 */
class Pregunta {

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
     * @ORM\Column(name="titulo", type="text", nullable=false)
     */
    private $titulo;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_pagina", type="integer", nullable=true)
     */
    private $numeroPagina;

    /**
     * @var \Uci\Bundle\BaseDatosBundle\Entity\AreaConocimiento
     *
     * @ORM\ManyToOne(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\AreaConocimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="area_conocimiento_id", referencedColumnName="id")
     * })
     */
    private $areaConocimiento;

    /**
     * @var \Uci\Bundle\BaseDatosBundle\Entity\TrianguloTalento
     *
     * @ORM\ManyToOne(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\TrianguloTalento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="triangulo_talento_id", referencedColumnName="id")
     * })
     */
    private $trianguloTalento;

    /**
     * @var \Uci\Bundle\BaseDatosBundle\Entity\Capitulo
     *
     * @ORM\ManyToOne(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Capitulo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="capitulo_id", referencedColumnName="id")
     * })
     */
    private $capitulo;

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
     * @var \Uci\Bundle\BaseDatosBundle\Entity\GrupoProcesos
     *
     * @ORM\ManyToOne(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\GrupoProcesos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grupo_procesos_id", referencedColumnName="id")
     * })
     */
    private $grupoProcesos;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\TipoPrueba", inversedBy="pregunta")
     * @ORM\JoinTable(name="pregunta_tiene_tipos_prueba",
     *   joinColumns={
     *     @ORM\JoinColumn(name="pregunta_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="tipo_prueba_id", referencedColumnName="id")
     *   }
     * )
     */
    private $tipoPrueba;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Respuesta", inversedBy="pregunta")
     * @ORM\JoinTable(name="pregunta_tiene_respuesta",
     *   joinColumns={
     *     @ORM\JoinColumn(name="pregunta_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="respuesta_id", referencedColumnName="id")
     *   }
     * )
     */
    private $respuesta;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Cuestionario", mappedBy="pregunta")
     */
    private $cuestionario;

    /**
     * @var \Uci\Bundle\BaseDatosBundle\Entity\TipoRespuesta
     *
     * @ORM\ManyToOne(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\TipoRespuesta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_respuesta_id", referencedColumnName="id")
     * })
     */
    private $tipoRespuesta;

    /**
     * Constructor
     */
    public function __construct() {
        $this->tipoPrueba = new \Doctrine\Common\Collections\ArrayCollection();
        $this->respuesta = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cuestionario = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add respuesta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Respuesta $respuesta
     * @return Pregunta
     */
    public function addRespuesta(\Uci\Bundle\BaseDatosBundle\Entity\Respuesta $respuesta) {
        $this->respuesta[] = $respuesta;

        return $this;
    }

    /**
     * Remove respuesta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Respuesta $respuesta
     */
    public function removeRespuesta(\Uci\Bundle\BaseDatosBundle\Entity\Respuesta $respuesta) {
        $this->respuesta->removeElement($respuesta);
    }

    /**
     * Get respuesta
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRespuesta() {
        return $this->respuesta;
    }

    public function setRespuesta(\Doctrine\Common\Collections\Collection $respuesta) {
        $this->respuesta = $respuesta;
    }

    public function resetearRespuestas() {
        $this->respuesta = new \Doctrine\Common\Collections\ArrayCollection();
    }

    function setTipoPrueba(\Doctrine\Common\Collections\Collection $tipoPrueba) {
        $this->tipoPrueba = $tipoPrueba;
    }

    /**
     * Add tipoPrueba
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\TipoPrueba $tipoPrueba
     * @return Pregunta
     */
    public function addTipoPrueba(\Uci\Bundle\BaseDatosBundle\Entity\TipoPrueba $tipoPrueba) {
        $this->tipoPrueba[] = $tipoPrueba;

        return $this;
    }

    /**
     * Remove tipoPrueba
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\TipoPrueba $tipoPrueba
     */
    public function removeTipoPrueba(\Uci\Bundle\BaseDatosBundle\Entity\TipoPrueba $tipoPrueba) {
        $this->tipoPrueba->removeElement($tipoPrueba);
    }

    /**
     * Get tipoPrueba
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTipoPrueba() {
        return $this->tipoPrueba;
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
     * @return Pregunta
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
     * Set areaConocimiento
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\AreaConocimiento $areaConocimiento
     * @return Pregunta
     */
    public function setAreaConocimiento(\Uci\Bundle\BaseDatosBundle\Entity\AreaConocimiento $areaConocimiento = null) {
        $this->areaConocimiento = $areaConocimiento;

        return $this;
    }

    /**
     * Get areaConocimiento
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\AreaConocimiento 
     */
    public function getAreaConocimiento() {
        return $this->areaConocimiento;
    }

    /**
     * Set trianguloTalento
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\TrianguloTalento $trianguloTalento
     * @return Pregunta
     */
    public function setTrianguloTalento(\Uci\Bundle\BaseDatosBundle\Entity\TrianguloTalento $trianguloTalento = null) {
        $this->trianguloTalento = $trianguloTalento;

        return $this;
    }

    /**
     * Get trianguloTalento
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\TrianguloTalento 
     */
    public function getTrianguloTalento() {
        return $this->trianguloTalento;
    }

    /**
     * Set capitulo
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Capitulo $capitulo
     * @return Pregunta
     */
    public function setCapitulo(\Uci\Bundle\BaseDatosBundle\Entity\Capitulo $capitulo = null) {
        $this->capitulo = $capitulo;

        return $this;
    }

    /**
     * Get capitulo
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\Capitulo 
     */
    public function getCapitulo() {
        return $this->capitulo;
    }

    /**
     * Set libro
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Libro $libro
     * @return Pregunta
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

    /**
     * Set grupoProcesos
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\GrupoProcesos $grupoProcesos
     * @return Pregunta
     */
    public function setGrupoProcesos(\Uci\Bundle\BaseDatosBundle\Entity\GrupoProcesos $grupoProcesos = null) {
        $this->grupoProcesos = $grupoProcesos;

        return $this;
    }

    /**
     * Get grupoProcesos
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\GrupoProcesos 
     */
    public function getGrupoProcesos() {
        return $this->grupoProcesos;
    }

    /**
     * Set tipoRespuesta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\TipoRespuesta $tipoRespuesta
     * @return Respuesta
     */
    public function setTipoRespuesta(\Uci\Bundle\BaseDatosBundle\Entity\TipoRespuesta $tipoRespuesta = null) {
        $this->tipoRespuesta = $tipoRespuesta;

        return $this;
    }

    /**
     * Get tipoRespuesta
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\TipoRespuesta 
     */
    public function getTipoRespuesta() {
        return $this->tipoRespuesta;
    }

    function getNumeroPagina() {
        return $this->numeroPagina;
    }

    function setNumeroPagina($numeroPagina) {
        $this->numeroPagina = $numeroPagina;
    }

    /**
     * Add cuestionario
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Cuestionario $cuestionario
     * @return TipoPrueba
     */
    public function addCuestionarium(\Uci\Bundle\BaseDatosBundle\Entity\Cuestionario $cuestionario) {
        $this->cuestionario[] = $cuestionario;

        return $this;
    }

    /**
     * Remove cuestionario
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Cuestionario $cuestionario
     */
    public function removeCuestionarium(\Uci\Bundle\BaseDatosBundle\Entity\Cuestionario $cuestionario) {
        $this->cuestionario->removeElement($cuestionario);
    }

    /**
     * Get cuestionario
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCuestionario() {
        return $this->cuestionario;
    }

    public function __toString() {
        return $this->titulo;
    }

}
