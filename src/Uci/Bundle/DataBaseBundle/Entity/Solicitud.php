<?php

namespace Uci\Bundle\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitud
 *
 * @ORM\Table(name="solicitud")
 * @ORM\Entity
 */
class Solicitud
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
     * @var string
     *
     * @ORM\Column(name="textoSolicitud", type="string", length=45, nullable=false)
     */
    private $textosolicitud;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Curso", inversedBy="solicitud")
     * @ORM\JoinTable(name="curso_tiene_solicitudes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="solicitud_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="curso_id", referencedColumnName="id")
     *   }
     * )
     */
    private $curso;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Decano", mappedBy="solicitud")
     */
    private $decano;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->curso = new \Doctrine\Common\Collections\ArrayCollection();
        $this->decano = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set textosolicitud
     *
     * @param string $textosolicitud
     * @return Solicitud
     */
    public function setTextosolicitud($textosolicitud)
    {
        $this->textosolicitud = $textosolicitud;

        return $this;
    }

    /**
     * Get textosolicitud
     *
     * @return string 
     */
    public function getTextosolicitud()
    {
        return $this->textosolicitud;
    }

    /**
     * Add curso
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Curso $curso
     * @return Solicitud
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

    /**
     * Add decano
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Decano $decano
     * @return Solicitud
     */
    public function addDecano(\Uci\Bundle\DataBaseBundle\Entity\Decano $decano)
    {
        $this->decano[] = $decano;

        return $this;
    }

    /**
     * Remove decano
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Decano $decano
     */
    public function removeDecano(\Uci\Bundle\DataBaseBundle\Entity\Decano $decano)
    {
        $this->decano->removeElement($decano);
    }

    /**
     * Get decano
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDecano()
    {
        return $this->decano;
    }
}
