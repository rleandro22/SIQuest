<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pregunta
 *
 * @ORM\Table(name="pregunta", indexes={@ORM\Index(name="fk_pregunta_capitulo1_idx", columns={"capitulo_id"}), @ORM\Index(name="fk_pregunta_grupo_procesos1_idx", columns={"grupo_procesos_id"}), @ORM\Index(name="fk_respuesta_tipo_respuesta1_idx", columns={"tipo_respuesta_id"}), @ORM\Index(name="fk_pregunta_area_conocimiento1_idx", columns={"area_conocimiento_id"}), @ORM\Index(name="fk_pregunta_libro1_idx", columns={"libro_id"})})
 * @ORM\Entity
 */
class Pregunta
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
     * @ORM\Column(name="titulo", type="text", nullable=false)
     */
    private $titulo;

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
    public function __construct()
    {
        $this->tipoPrueba = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Pregunta
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
     * Set areaConocimiento
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\AreaConocimiento $areaConocimiento
     * @return Pregunta
     */
    public function setAreaConocimiento(\Uci\Bundle\BaseDatosBundle\Entity\AreaConocimiento $areaConocimiento = null)
    {
        $this->areaConocimiento = $areaConocimiento;

        return $this;
    }

    /**
     * Get areaConocimiento
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\AreaConocimiento 
     */
    public function getAreaConocimiento()
    {
        return $this->areaConocimiento;
    }

    /**
     * Set capitulo
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Capitulo $capitulo
     * @return Pregunta
     */
    public function setCapitulo(\Uci\Bundle\BaseDatosBundle\Entity\Capitulo $capitulo = null)
    {
        $this->capitulo = $capitulo;

        return $this;
    }

    /**
     * Get capitulo
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\Capitulo 
     */
    public function getCapitulo()
    {
        return $this->capitulo;
    }
    
    /**
     * Set libro
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Libro $libro
     * @return Pregunta
     */
    public function setLibro(\Uci\Bundle\BaseDatosBundle\Entity\Libro $libro = null)
    {
        $this->libro = $libro;

        return $this;
    }

    /**
     * Get libro
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\Libro 
     */
    public function getLibro()
    {
        return $this->libro;
    }

    /**
     * Set grupoProcesos
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\GrupoProcesos $grupoProcesos
     * @return Pregunta
     */
    public function setGrupoProcesos(\Uci\Bundle\BaseDatosBundle\Entity\GrupoProcesos $grupoProcesos = null)
    {
        $this->grupoProcesos = $grupoProcesos;

        return $this;
    }

    /**
     * Get grupoProcesos
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\GrupoProcesos 
     */
    public function getGrupoProcesos()
    {
        return $this->grupoProcesos;
    }

    /**
     * Add tipoPrueba
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\TipoPrueba $tipoPrueba
     * @return Pregunta
     */
    public function addTipoPrueba(\Uci\Bundle\BaseDatosBundle\Entity\TipoPrueba $tipoPrueba)
    {
        $this->tipoPrueba[] = $tipoPrueba;

        return $this;
    }

    /**
     * Remove tipoPrueba
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\TipoPrueba $tipoPrueba
     */
    public function removeTipoPrueba(\Uci\Bundle\BaseDatosBundle\Entity\TipoPrueba $tipoPrueba)
    {
        $this->tipoPrueba->removeElement($tipoPrueba);
    }

    /**
     * Get tipoPrueba
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTipoPrueba()
    {
        return $this->tipoPrueba;
    }
    
    /**
     * Set tipoRespuesta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\TipoRespuesta $tipoRespuesta
     * @return Respuesta
     */
    public function setTipoRespuesta(\Uci\Bundle\BaseDatosBundle\Entity\TipoRespuesta $tipoRespuesta = null)
    {
        $this->tipoRespuesta = $tipoRespuesta;

        return $this;
    }

    /**
     * Get tipoRespuesta
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\TipoRespuesta 
     */
    public function getTipoRespuesta()
    {
        return $this->tipoRespuesta;
    }
    
    public function __toString() {
        return $this->titulo;
    }

}
