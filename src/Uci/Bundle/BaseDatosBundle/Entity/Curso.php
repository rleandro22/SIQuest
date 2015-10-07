<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Curso
 *
 * @ORM\Table(name="curso")
 * @ORM\Entity
 */
class Curso {

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
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Generacion", inversedBy="curso", cascade="delete")
     * @ORM\JoinTable(name="generacion_tiene_curso",
     *   joinColumns={
     *     @ORM\JoinColumn(name="curso_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="generacion_id", referencedColumnName="id")
     *   }
     * )
     */
    
    private $generacion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Profesor", mappedBy="curso", cascade={"persist","remove"})
     */
    private $profesor;

    /**
     * Constructor
     */
    public function __construct() {
        $this->asistenteAcademica = new \Doctrine\Common\Collections\ArrayCollection();
        $this->solicitud = new \Doctrine\Common\Collections\ArrayCollection();
        $this->generacion = new \Doctrine\Common\Collections\ArrayCollection();
        $this->profesor = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombrecurso
     *
     * @param string $nombrecurso
     * @return Curso
     */
    public function setNombrecurso($nombrecurso) {
        $this->nombrecurso = $nombrecurso;

        return $this;
    }

    /**
     * Get nombrecurso
     *
     * @return string 
     */
    public function getNombrecurso() {
        return $this->nombrecurso;
    }

    /**
     * Add asistenteAcademica
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\AsistenteAcademica $asistenteAcademica
     * @return Curso
     */
    public function addAsistenteAcademica(\Uci\Bundle\BaseDatosBundle\Entity\AsistenteAcademica $asistenteAcademica) {
        $this->asistenteAcademica[] = $asistenteAcademica;

        return $this;
    }

    /**
     * Remove asistenteAcademica
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\AsistenteAcademica $asistenteAcademica
     */
    public function removeAsistenteAcademica(\Uci\Bundle\BaseDatosBundle\Entity\AsistenteAcademica $asistenteAcademica) {
        $this->asistenteAcademica->removeElement($asistenteAcademica);
    }

    /**
     * Get asistenteAcademica
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAsistenteAcademica() {
        return $this->asistenteAcademica;
    }

    /**
     * Add solicitud
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Solicitud $solicitud
     * @return Curso
     */
    public function addSolicitud(\Uci\Bundle\BaseDatosBundle\Entity\Solicitud $solicitud) {
        $this->solicitud[] = $solicitud;

        return $this;
    }

    /**
     * Remove solicitud
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Solicitud $solicitud
     */
    public function removeSolicitud(\Uci\Bundle\BaseDatosBundle\Entity\Solicitud $solicitud) {
        $this->solicitud->removeElement($solicitud);
    }

    /**
     * Get solicitud
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSolicitud() {
        return $this->solicitud;
    }

    /**
     * Add generacion
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Generacion $generacion
     * @return Curso
     */
    public function addGeneracion(\Uci\Bundle\BaseDatosBundle\Entity\Generacion $generacion) {
        $this->generacion[] = $generacion;
        $generacion->addCurso($this);
        return $this;
    }

    /**
     * Remove generacion
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Generacion $generacion
     */
    public function removeGeneracion(\Uci\Bundle\BaseDatosBundle\Entity\Generacion $generacion) {
        $this->generacion->removeElement($generacion);
        $generacion->removeCurso($this);
    }

    /**
     * Get generacion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGeneracion() {
        return $this->generacion;
    }

    /**
     * Add profesor
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Profesor $profesor
     * @return Curso
     */
    public function addProfesor(\Uci\Bundle\BaseDatosBundle\Entity\Profesor $profesor) {
        $this->profesor[] = $profesor;

        return $this;
    }

    /**
     * Remove profesor
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Profesor $profesor
     */
    public function removeProfesor(\Uci\Bundle\BaseDatosBundle\Entity\Profesor $profesor) {
        $this->profesor->removeElement($profesor);
    }

    /**
     * Get profesor
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProfesor() {
        return $this->profesor;
    }

    public function __toString() {
        return $this->nombrecurso;
    }
}
