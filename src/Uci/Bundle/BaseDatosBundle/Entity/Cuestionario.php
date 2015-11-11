<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuestionario
 *
 * @ORM\Table(name="cuestionario", uniqueConstraints={@ORM\UniqueConstraint(name="cuestionarioname_UNIQUE", columns={"cuestionarioname"})}, indexes={@ORM\Index(name="fk_cuestionario_curso1_idx", columns={"curso_id"})})
 * @ORM\Entity
 */
class Cuestionario {

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
     * @ORM\Column(name="cantidad_preguntas", type="integer", nullable=false)
     */
    private $cantidadPreguntas;

    /**
     * @var \Uci\Bundle\BaseDatosBundle\Entity\Curso
     *
     * @ORM\ManyToOne(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Curso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="curso_id", referencedColumnName="id")
     * })
     */
    private $curso;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=200, nullable=false)
     */
    private $cuestionarioname;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Pregunta", inversedBy="cuestionario")
     * @ORM\JoinTable(name="cuestionario_tiene_preguntas",
     *   joinColumns={
     *     @ORM\JoinColumn(name="cuestionario_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="pregunta_id", referencedColumnName="id")
     *   }
     * )
     */
    private $pregunta;

    /**
     * Constructor
     */
    public function __construct() {
        $this->pregunta = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    function getCuestionarioname() {
        return $this->cuestionarioname;
    }

    function setCuestionarioname($cuestionarioname) {
        $this->cuestionarioname = $cuestionarioname;
    }

    /**
     * Set cantidadPreguntas
     *
     * @param integer $cantidadPreguntas
     * @return Cuestionario
     */
    public function setCantidadPreguntas($cantidadPreguntas) {
        $this->cantidadPreguntas = $cantidadPreguntas;

        return $this;
    }

    /**
     * Get cantidadPreguntas
     *
     * @return integer 
     */
    public function getCantidadPreguntas() {
        return $this->cantidadPreguntas;
    }

    /**
     * Set curso
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Curso $curso
     * @return Cuestionario
     */
    public function setCurso(\Uci\Bundle\BaseDatosBundle\Entity\Curso $curso = null) {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get curso
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\Curso 
     */
    public function getCurso() {
        return $this->curso;
    }

    /**
     * Add pregunta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta
     * @return Pregunta
     */
    public function addPregunta(\Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta) {
        $this->pregunta[] = $pregunta;

        return $this;
    }

    /**
     * Remove pregunta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta
     */
    public function removePregunta(\Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta) {
        $this->pregunta->removeElement($pregunta);
    }

    /**
     * Get pregunta
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPregunta() {
        return $this->pregunta;
    }

    public function setPregunta(\Doctrine\Common\Collections\Collection $pregunta) {
        $this->pregunta = $pregunta;
    }
    
    public function __toString() {
        return $this->cuestionarioname;
    }


}
