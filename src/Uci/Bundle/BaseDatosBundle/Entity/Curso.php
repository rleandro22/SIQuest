<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Curso
 *
 * @ORM\Table(name="curso")
 * @ORM\Entity
 */
class Curso
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
     * @ORM\Column(name="generacion", type="string", length=45, nullable=false)
     */
    private $generacion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreCurso", type="string", length=45, nullable=false)
     */
    private $nombrecurso;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\AsistenteAcademica", mappedBy="curso")
     */
    private $asistenteAcademica;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Solicitud", mappedBy="curso")
     */
    private $solicitud;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Profesor", mappedBy="curso")
     */
    private $profesor;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->asistenteAcademica = new \Doctrine\Common\Collections\ArrayCollection();
        $this->solicitud = new \Doctrine\Common\Collections\ArrayCollection();
        $this->profesor = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set generacion
     *
     * @param string $generacion
     * @return Curso
     */
    public function setGeneracion($generacion)
    {
        $this->generacion = $generacion;

        return $this;
    }

    /**
     * Get generacion
     *
     * @return string 
     */
    public function getGeneracion()
    {
        return $this->generacion;
    }

    /**
     * Set nombrecurso
     *
     * @param string $nombrecurso
     * @return Curso
     */
    public function setNombrecurso($nombrecurso)
    {
        $this->nombrecurso = $nombrecurso;

        return $this;
    }

    /**
     * Get nombrecurso
     *
     * @return string 
     */
    public function getNombrecurso()
    {
        return $this->nombrecurso;
    }

    /**
     * Add asistenteAcademica
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\AsistenteAcademica $asistenteAcademica
     * @return Curso
     */
    public function addAsistenteAcademica(\Uci\Bundle\BaseDatosBundle\Entity\AsistenteAcademica $asistenteAcademica)
    {
        $this->asistenteAcademica[] = $asistenteAcademica;

        return $this;
    }

    /**
     * Remove asistenteAcademica
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\AsistenteAcademica $asistenteAcademica
     */
    public function removeAsistenteAcademica(\Uci\Bundle\BaseDatosBundle\Entity\AsistenteAcademica $asistenteAcademica)
    {
        $this->asistenteAcademica->removeElement($asistenteAcademica);
    }

    /**
     * Get asistenteAcademica
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAsistenteAcademica()
    {
        return $this->asistenteAcademica;
    }

    /**
     * Add solicitud
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Solicitud $solicitud
     * @return Curso
     */
    public function addSolicitud(\Uci\Bundle\BaseDatosBundle\Entity\Solicitud $solicitud)
    {
        $this->solicitud[] = $solicitud;

        return $this;
    }

    /**
     * Remove solicitud
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Solicitud $solicitud
     */
    public function removeSolicitud(\Uci\Bundle\BaseDatosBundle\Entity\Solicitud $solicitud)
    {
        $this->solicitud->removeElement($solicitud);
    }

    /**
     * Get solicitud
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSolicitud()
    {
        return $this->solicitud;
    }

    /**
     * Add profesor
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Profesor $profesor
     * @return Curso
     */
    public function addProfesor(\Uci\Bundle\BaseDatosBundle\Entity\Profesor $profesor)
    {
        $this->profesor[] = $profesor;

        return $this;
    }

    /**
     * Remove profesor
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Profesor $profesor
     */
    public function removeProfesor(\Uci\Bundle\BaseDatosBundle\Entity\Profesor $profesor)
    {
        $this->profesor->removeElement($profesor);
    }

    /**
     * Get profesor
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProfesor()
    {
        return $this->profesor;
    }
}
