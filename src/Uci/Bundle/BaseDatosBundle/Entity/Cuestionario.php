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
     * @var \Uci\Bundle\BaseDatosBundle\Entity\Curso
     *
     * @ORM\ManyToOne(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Curso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="curso_id", referencedColumnName="id")
     * })
     */
    private $curso;



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
}
