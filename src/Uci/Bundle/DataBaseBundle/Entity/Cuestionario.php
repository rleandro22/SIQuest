<?php

namespace Uci\Bundle\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuestionario
 *
 * @ORM\Table(name="cuestionario", indexes={@ORM\Index(name="fk_cuestionario_asistente_academica1_idx", columns={"asistente_academica_id"})})
 * @ORM\Entity
 */
class Cuestionario
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="prueba_id", type="integer", nullable=false)
     */
    private $pruebaId;

    /**
     * @var \AsistenteAcademica
     *
     * @ORM\ManyToOne(targetEntity="AsistenteAcademica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="asistente_academica_id", referencedColumnName="id")
     * })
     */
    private $asistenteAcademica;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Pregunta", inversedBy="cuestionario")
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Curso", mappedBy="cuestionario")
     */
    private $curso;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pregunta = new \Doctrine\Common\Collections\ArrayCollection();
        $this->curso = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Cuestionario
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set pruebaId
     *
     * @param integer $pruebaId
     * @return Cuestionario
     */
    public function setPruebaId($pruebaId)
    {
        $this->pruebaId = $pruebaId;

        return $this;
    }

    /**
     * Get pruebaId
     *
     * @return integer 
     */
    public function getPruebaId()
    {
        return $this->pruebaId;
    }

    /**
     * Set asistenteAcademica
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\AsistenteAcademica $asistenteAcademica
     * @return Cuestionario
     */
    public function setAsistenteAcademica(\Uci\Bundle\DataBaseBundle\Entity\AsistenteAcademica $asistenteAcademica = null)
    {
        $this->asistenteAcademica = $asistenteAcademica;

        return $this;
    }

    /**
     * Get asistenteAcademica
     *
     * @return \Uci\Bundle\DataBaseBundle\Entity\AsistenteAcademica 
     */
    public function getAsistenteAcademica()
    {
        return $this->asistenteAcademica;
    }

    /**
     * Add pregunta
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Pregunta $pregunta
     * @return Cuestionario
     */
    public function addPreguntum(\Uci\Bundle\DataBaseBundle\Entity\Pregunta $pregunta)
    {
        $this->pregunta[] = $pregunta;

        return $this;
    }

    /**
     * Remove pregunta
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Pregunta $pregunta
     */
    public function removePreguntum(\Uci\Bundle\DataBaseBundle\Entity\Pregunta $pregunta)
    {
        $this->pregunta->removeElement($pregunta);
    }

    /**
     * Get pregunta
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPregunta()
    {
        return $this->pregunta;
    }

    /**
     * Add curso
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Curso $curso
     * @return Cuestionario
     */
    public function addCurso(\Uci\Bundle\DataBaseBundle\Entity\Curso $curso)
    {
        $this->curso[] = $curso;

        return $this;
    }

    /**
     * Remove curso
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Curso $curso
     */
    public function removeCurso(\Uci\Bundle\DataBaseBundle\Entity\Curso $curso)
    {
        $this->curso->removeElement($curso);
    }

    /**
     * Get curso
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCurso()
    {
        return $this->curso;
    }
}
