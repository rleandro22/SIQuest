<?php

namespace Uci\Bundle\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pregunta
 *
 * @ORM\Table(name="pregunta", indexes={@ORM\Index(name="fk_pregunta_capitulo1_idx", columns={"capitulo_id"}), @ORM\Index(name="fk_pregunta_grupo_procesos1_idx", columns={"grupo_procesos_id"}), @ORM\Index(name="fk_pregunta_area_conocimiento1_idx", columns={"area_conocimiento_id"}), @ORM\Index(name="fk_pregunta_tipo_pregunta1_idx", columns={"tipo_pregunta_id"})})
 * @ORM\Entity
 */
class Pregunta
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
     * @var \Capitulo
     *
     * @ORM\ManyToOne(targetEntity="Capitulo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="capitulo_id", referencedColumnName="id")
     * })
     */
    private $capitulo;

    /**
     * @var \GrupoProcesos
     *
     * @ORM\ManyToOne(targetEntity="GrupoProcesos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grupo_procesos_id", referencedColumnName="id")
     * })
     */
    private $grupoProcesos;

    /**
     * @var \AreaConocimiento
     *
     * @ORM\ManyToOne(targetEntity="AreaConocimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="area_conocimiento_id", referencedColumnName="id")
     * })
     */
    private $areaConocimiento;

    /**
     * @var \TipoPregunta
     *
     * @ORM\ManyToOne(targetEntity="TipoPregunta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_pregunta_id", referencedColumnName="id")
     * })
     */
    private $tipoPregunta;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Cuestionario", mappedBy="pregunta")
     */
    private $cuestionario;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Respuesta", mappedBy="pregunta")
     */
    private $respuesta;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TipoPrueba", inversedBy="pregunta")
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
     * Constructor
     */
    public function __construct()
    {
        $this->cuestionario = new \Doctrine\Common\Collections\ArrayCollection();
        $this->respuesta = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set capitulo
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Capitulo $capitulo
     * @return Pregunta
     */
    public function setCapitulo(\Uci\Bundle\DataBaseBundle\Entity\Capitulo $capitulo = null)
    {
        $this->capitulo = $capitulo;

        return $this;
    }

    /**
     * Get capitulo
     *
     * @return \Uci\Bundle\DataBaseBundle\Entity\Capitulo 
     */
    public function getCapitulo()
    {
        return $this->capitulo;
    }

    /**
     * Set grupoProcesos
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\GrupoProcesos $grupoProcesos
     * @return Pregunta
     */
    public function setGrupoProcesos(\Uci\Bundle\DataBaseBundle\Entity\GrupoProcesos $grupoProcesos = null)
    {
        $this->grupoProcesos = $grupoProcesos;

        return $this;
    }

    /**
     * Get grupoProcesos
     *
     * @return \Uci\Bundle\DataBaseBundle\Entity\GrupoProcesos 
     */
    public function getGrupoProcesos()
    {
        return $this->grupoProcesos;
    }

    /**
     * Set areaConocimiento
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\AreaConocimiento $areaConocimiento
     * @return Pregunta
     */
    public function setAreaConocimiento(\Uci\Bundle\DataBaseBundle\Entity\AreaConocimiento $areaConocimiento = null)
    {
        $this->areaConocimiento = $areaConocimiento;

        return $this;
    }

    /**
     * Get areaConocimiento
     *
     * @return \Uci\Bundle\DataBaseBundle\Entity\AreaConocimiento 
     */
    public function getAreaConocimiento()
    {
        return $this->areaConocimiento;
    }

    /**
     * Set tipoPregunta
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\TipoPregunta $tipoPregunta
     * @return Pregunta
     */
    public function setTipoPregunta(\Uci\Bundle\DataBaseBundle\Entity\TipoPregunta $tipoPregunta = null)
    {
        $this->tipoPregunta = $tipoPregunta;

        return $this;
    }

    /**
     * Get tipoPregunta
     *
     * @return \Uci\Bundle\DataBaseBundle\Entity\TipoPregunta 
     */
    public function getTipoPregunta()
    {
        return $this->tipoPregunta;
    }

    /**
     * Add cuestionario
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Cuestionario $cuestionario
     * @return Pregunta
     */
    public function addCuestionario(\Uci\Bundle\DataBaseBundle\Entity\Cuestionario $cuestionario)
    {
        $this->cuestionario[] = $cuestionario;

        return $this;
    }

    /**
     * Remove cuestionario
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Cuestionario $cuestionario
     */
    public function removeCuestionario(\Uci\Bundle\DataBaseBundle\Entity\Cuestionario $cuestionario)
    {
        $this->cuestionario->removeElement($cuestionario);
    }

    /**
     * Get cuestionario
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCuestionario()
    {
        return $this->cuestionario;
    }

    /**
     * Add respuesta
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Respuesta $respuesta
     * @return Pregunta
     */
    public function addRespuestum(\Uci\Bundle\DataBaseBundle\Entity\Respuesta $respuesta)
    {
        $this->respuesta[] = $respuesta;

        return $this;
    }

    /**
     * Remove respuesta
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Respuesta $respuesta
     */
    public function removeRespuestum(\Uci\Bundle\DataBaseBundle\Entity\Respuesta $respuesta)
    {
        $this->respuesta->removeElement($respuesta);
    }

    /**
     * Get respuesta
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRespuesta()
    {
        return $this->respuesta;
    }

    /**
     * Add tipoPrueba
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\TipoPrueba $tipoPrueba
     * @return Pregunta
     */
    public function addTipoPrueba(\Uci\Bundle\DataBaseBundle\Entity\TipoPrueba $tipoPrueba)
    {
        $this->tipoPrueba[] = $tipoPrueba;

        return $this;
    }

    /**
     * Remove tipoPrueba
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\TipoPrueba $tipoPrueba
     */
    public function removeTipoPrueba(\Uci\Bundle\DataBaseBundle\Entity\TipoPrueba $tipoPrueba)
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
}
