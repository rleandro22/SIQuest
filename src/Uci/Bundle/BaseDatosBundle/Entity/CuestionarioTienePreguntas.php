<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CuestionarioTienePreguntas
 *
 * @ORM\Table(name="cuestionario_tiene_preguntas", indexes={@ORM\Index(name="fk_cuestionario_tiene_preguntas_cuestionario1_idx", columns={"cuestionario_id"}), @ORM\Index(name="fk_cuestionario_tiene_preguntas_pregunta1_idx", columns={"pregunta_id"})})
 * @ORM\Entity
 */
class CuestionarioTienePreguntas
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
     * @var integer
     *
     * @ORM\Column(name="orden_en_cuestionario", type="integer", nullable=false)
     */
    private $ordenEnCuestionario;

    /**
     * @var \Uci\Bundle\BaseDatosBundle\Entity\Cuestionario
     *
     * @ORM\ManyToOne(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Cuestionario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cuestionario_id", referencedColumnName="id")
     * })
     */
    private $cuestionario;

    /**
     * @var \Uci\Bundle\BaseDatosBundle\Entity\Pregunta
     *
     * @ORM\ManyToOne(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Pregunta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pregunta_id", referencedColumnName="id")
     * })
     */
    private $pregunta;



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
     * Set ordenEnCuestionario
     *
     * @param integer $ordenEnCuestionario
     * @return CuestionarioTienePreguntas
     */
    public function setOrdenEnCuestionario($ordenEnCuestionario)
    {
        $this->ordenEnCuestionario = $ordenEnCuestionario;

        return $this;
    }

    /**
     * Get ordenEnCuestionario
     *
     * @return integer 
     */
    public function getOrdenEnCuestionario()
    {
        return $this->ordenEnCuestionario;
    }

    /**
     * Set cuestionario
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Cuestionario $cuestionario
     * @return CuestionarioTienePreguntas
     */
    public function setCuestionario(\Uci\Bundle\BaseDatosBundle\Entity\Cuestionario $cuestionario = null)
    {
        $this->cuestionario = $cuestionario;

        return $this;
    }

    /**
     * Get cuestionario
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\Cuestionario 
     */
    public function getCuestionario()
    {
        return $this->cuestionario;
    }

    /**
     * Set pregunta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta
     * @return CuestionarioTienePreguntas
     */
    public function setPregunta(\Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta = null)
    {
        $this->pregunta = $pregunta;

        return $this;
    }

    /**
     * Get pregunta
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\Pregunta 
     */
    public function getPregunta()
    {
        return $this->pregunta;
    }
}
