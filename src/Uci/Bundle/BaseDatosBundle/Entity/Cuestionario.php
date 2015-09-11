<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuestionario
 *
 * @ORM\Table(name="cuestionario", indexes={@ORM\Index(name="fk_cuestionario_curso1_idx", columns={"curso_id"})})
 * @ORM\Entity
 */
class Cuestionario
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
     * @ORM\Column(name="prueba_numero", type="integer", nullable=false)
     */
    private $pruebaNumero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="revision_id", type="integer", nullable=false)
     */
    private $revisionId;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Usuario", mappedBy="cuestionario")
     */
    private $usuario;

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
    public function __construct()
    {
        $this->usuario = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pregunta = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set pruebaNumero
     *
     * @param integer $pruebaNumero
     * @return Cuestionario
     */
    public function setPruebaNumero($pruebaNumero)
    {
        $this->pruebaNumero = $pruebaNumero;

        return $this;
    }

    /**
     * Get pruebaNumero
     *
     * @return integer 
     */
    public function getPruebaNumero()
    {
        return $this->pruebaNumero;
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
     * Set revisionId
     *
     * @param integer $revisionId
     * @return Cuestionario
     */
    public function setRevisionId($revisionId)
    {
        $this->revisionId = $revisionId;

        return $this;
    }

    /**
     * Get revisionId
     *
     * @return integer 
     */
    public function getRevisionId()
    {
        return $this->revisionId;
    }

    /**
     * Set curso
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Curso $curso
     * @return Cuestionario
     */
    public function setCurso(\Uci\Bundle\BaseDatosBundle\Entity\Curso $curso = null)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get curso
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\Curso 
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Add usuario
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Usuario $usuario
     * @return Cuestionario
     */
    public function addUsuario(\Uci\Bundle\BaseDatosBundle\Entity\Usuario $usuario)
    {
        $this->usuario[] = $usuario;

        return $this;
    }

    /**
     * Remove usuario
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Usuario $usuario
     */
    public function removeUsuario(\Uci\Bundle\BaseDatosBundle\Entity\Usuario $usuario)
    {
        $this->usuario->removeElement($usuario);
    }

    /**
     * Get usuario
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Add pregunta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta
     * @return Cuestionario
     */
    public function addPreguntum(\Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta)
    {
        $this->pregunta[] = $pregunta;

        return $this;
    }

    /**
     * Remove pregunta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta
     */
    public function removePreguntum(\Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta)
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
}
