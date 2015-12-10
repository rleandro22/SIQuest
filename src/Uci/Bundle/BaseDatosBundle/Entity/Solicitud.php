<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

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
     * @ORM\Column(name="id", type="integer")
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
     * @var string
     *
     * @ORM\Column(name="activa", type="smallint", length=1, nullable=false)
     */
    private $activa;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Curso", inversedBy="solicitud")
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
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Decano", mappedBy="solicitud")
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
     * Set activa
     *
     * @param string $activa
     * @return Solicitud
     */
    public function setActiva($activa)
    {
        $this->activa = $activa;

        return $this;
    }

    /**
     * Get activa
     *
     * @return string 
     */
    public function getActiva()
    {
        return $this->activa;
    }

    /**
     * Add curso
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Curso $curso
     * @return Solicitud
     */
    public function addCurso(\Uci\Bundle\BaseDatosBundle\Entity\Curso $curso)
    {
        $this->curso[] = $curso;

        return $this;
    }

    /**
     * Remove curso
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Curso $curso
     */
    public function removeCurso(\Uci\Bundle\BaseDatosBundle\Entity\Curso $curso)
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
    
    function setCurso(\Uci\Bundle\BaseDatosBundle\Entity\Curso $curso) {
        $this->curso[0] = $curso;
    }

    
    /**
     * Add decano
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Decano $decano
     * @return Solicitud
     */
    public function addDecano(\Uci\Bundle\BaseDatosBundle\Entity\Decano $decano)
    {
        $this->decano[] = $decano;

        return $this;
    }

    /**
     * Remove decano
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Decano $decano
     */
    public function removeDecano(\Uci\Bundle\BaseDatosBundle\Entity\Decano $decano)
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
