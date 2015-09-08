<?php

namespace Uci\Bundle\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profesor
 *
 * @ORM\Table(name="profesor", indexes={@ORM\Index(name="fk_profesor_usuario1_idx", columns={"usuario_id"})})
 * @ORM\Entity
 */
class Profesor
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
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
    private $usuario;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Curso", inversedBy="profesor")
     * @ORM\JoinTable(name="profesor_imparte_curso",
     *   joinColumns={
     *     @ORM\JoinColumn(name="profesor_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Curso_id", referencedColumnName="id")
     *   }
     * )
     */
    private $curso;

    /**
     * Constructor
     */
    public function __construct()
    {
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
     * Set usuario
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Usuario $usuario
     * @return Profesor
     */
    public function setUsuario(\Uci\Bundle\DataBaseBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Uci\Bundle\DataBaseBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Add curso
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Curso $curso
     * @return Profesor
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
