<?php

namespace Uci\Bundle\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Curso
 *
 * @ORM\Table(name="curso", indexes={@ORM\Index(name="fk_curso_asistente_academica1_idx", columns={"asistente_academica_id"})})
 * @ORM\Entity
 */
class Curso
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
     * @ORM\ManyToMany(targetEntity="Cuestionario", inversedBy="curso")
     * @ORM\JoinTable(name="curso_tiene_cuestionarios",
     *   joinColumns={
     *     @ORM\JoinColumn(name="curso_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="cuestionario_id", referencedColumnName="id")
     *   }
     * )
     */
    private $cuestionario;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Solicitud", mappedBy="curso")
     */
    private $solicitud;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Profesor", mappedBy="curso")
     */
    private $profesor;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cuestionario = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set asistenteAcademica
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\AsistenteAcademica $asistenteAcademica
     * @return Curso
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
     * Add cuestionario
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Cuestionario $cuestionario
     * @return Curso
     */
    public function addCuestionario(\Uci\Bundle\DataBaseBundle\Entity\Cuestionario $cuestionario)
    {
        $this->cuestionario[] = $cuestionario;

        return $this;
    }

    /**
     * Remove cuestionario
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Cuestionario $cuestionario
     */
    public function removeCuestionario(\Uci\Bundle\DataBaseBundle\Entity\Cuestionario $cuestionario)
    {
        $this->cuestionario->removeElement($cuestionario);
    }

    /**
     * Get cuestionario
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCuestionario()
    {
        return $this->cuestionario;
    }

    /**
     * Add solicitud
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Solicitud $solicitud
     * @return Curso
     */
    public function addSolicitud(\Uci\Bundle\DataBaseBundle\Entity\Solicitud $solicitud)
    {
        $this->solicitud[] = $solicitud;

        return $this;
    }

    /**
     * Remove solicitud
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Solicitud $solicitud
     */
    public function removeSolicitud(\Uci\Bundle\DataBaseBundle\Entity\Solicitud $solicitud)
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
     * @param \Uci\Bundle\DataBaseBundle\Entity\Profesor $profesor
     * @return Curso
     */
    public function addProfesor(\Uci\Bundle\DataBaseBundle\Entity\Profesor $profesor)
    {
        $this->profesor[] = $profesor;

        return $this;
    }

    /**
     * Remove profesor
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Profesor $profesor
     */
    public function removeProfesor(\Uci\Bundle\DataBaseBundle\Entity\Profesor $profesor)
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
