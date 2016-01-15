<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pmbok
 *
 * @ORM\Table(name="pmbok")
 * @ORM\Entity
 */
class Pmbok {

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
     * @ORM\Column(name="edicion", type="integer", nullable=false)
     */
    private $edicion;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\AreaConocimiento", inversedBy="pmbok")
     * @ORM\JoinTable(name="pmbok_tiene_areas_conocimiento",
     *   joinColumns={
     *     @ORM\JoinColumn(name="pmbok_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="area_conocimiento_id", referencedColumnName="id")
     *   }
     * )
     */
    private $areaConocimiento;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\TrianguloTalento", inversedBy="pmbok")
     * @ORM\JoinTable(name="pmbok_tiene_triangulos_talento",
     *   joinColumns={
     *     @ORM\JoinColumn(name="pmbok_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="triangulo_talento_id", referencedColumnName="id")
     *   }
     * )
     */
    private $trianguloTalento;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\GrupoProcesos", inversedBy="pmbok")
     * @ORM\JoinTable(name="pmbok_tiene_grupo_procesos",
     *   joinColumns={
     *     @ORM\JoinColumn(name="pmbok_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="grupo_procesos_id", referencedColumnName="id")
     *   }
     * )
     */
    private $grupoProcesos;

    /**
     * Constructor
     */
    public function __construct() {
        $this->areaConocimiento = new \Doctrine\Common\Collections\ArrayCollection();
        $this->grupoProcesos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->trianguloTalento = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    function setId($id) {
        $this->id = $id;
    }

    function setAreaConocimiento(\Doctrine\Common\Collections\Collection $areaConocimiento) {
        $this->areaConocimiento = $areaConocimiento;
    }

    function setTrianguloTalento(\Doctrine\Common\Collections\Collection $trianguloTalento) {
        $this->trianguloTalento = $trianguloTalento;
    }

    function setGrupoProcesos(\Doctrine\Common\Collections\Collection $grupoProcesos) {
        $this->grupoProcesos = $grupoProcesos;
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
     * Set edicion
     *
     * @param integer $edicion
     * @return Pmbok
     */
    public function setEdicion($edicion) {
        $this->edicion = $edicion;

        return $this;
    }

    /**
     * Get edicion
     *
     * @return integer 
     */
    public function getEdicion() {
        return $this->edicion;
    }

    /**
     * Add areaConocimiento
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\AreaConocimiento $areaConocimiento
     * @return Pmbok
     */
    public function addAreaConocimiento(\Uci\Bundle\BaseDatosBundle\Entity\AreaConocimiento $areaConocimiento) {
        $this->areaConocimiento[] = $areaConocimiento;

        return $this;
    }

    /**
     * Remove areaConocimiento
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\AreaConocimiento $areaConocimiento
     */
    public function removeAreaConocimiento(\Uci\Bundle\BaseDatosBundle\Entity\AreaConocimiento $areaConocimiento) {
        $this->areaConocimiento->removeElement($areaConocimiento);
    }

    /**
     * Get areaConocimiento
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAreaConocimiento() {
        return $this->areaConocimiento;
    }

    /**
     * Add grupoProcesos
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\GrupoProcesos $grupoProcesos
     * @return Pmbok
     */
    public function addGrupoProceso(\Uci\Bundle\BaseDatosBundle\Entity\GrupoProcesos $grupoProcesos) {
        $this->grupoProcesos[] = $grupoProcesos;

        return $this;
    }

    /**
     * Remove grupoProcesos
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\GrupoProcesos $grupoProcesos
     */
    public function removeGrupoProceso(\Uci\Bundle\BaseDatosBundle\Entity\GrupoProcesos $grupoProcesos) {
        $this->grupoProcesos->removeElement($grupoProcesos);
    }

    /**
     * Get grupoProcesos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGrupoProcesos() {
        return $this->grupoProcesos;
    }

    /**
     * Add trianguloTalento
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\TrianguloTalento $trianguloTalento
     * @return Pmbok
     */
    public function addTrianguloTalento(\Uci\Bundle\BaseDatosBundle\Entity\TrianguloTalento $trianguloTalento) {
        $this->trianguloTalento[] = $trianguloTalento;

        return $this;
    }

    /**
     * Remove trianguloTalento
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\TrianguloTalento $trianguloTalento
     */
    public function removeTrianguloTalento(\Uci\Bundle\BaseDatosBundle\Entity\TrianguloTalento $trianguloTalento) {
        $this->trianguloTalento->removeElement($trianguloTalento);
    }

    /**
     * Get trianguloTalento
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTrianguloTalento() {
        return $this->trianguloTalento;
    }

    public function __toString() {
        return 'Año: ' . $this->getEdicion();
    }

}
