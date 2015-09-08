<?php

namespace Uci\Bundle\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pmbok
 *
 * @ORM\Table(name="pmbok", indexes={@ORM\Index(name="fk_pmbok_libro1_idx", columns={"libro_id"})})
 * @ORM\Entity
 */
class Pmbok
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="edicion", type="integer", nullable=false)
     */
    private $edicion;

    /**
     * @var \Libro
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Libro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="libro_id", referencedColumnName="id")
     * })
     */
    private $libro;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AreaConocimiento", mappedBy="pmbok")
     */
    private $areaConocimiento;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="GrupoProcesos", inversedBy="pmbok")
     * @ORM\JoinTable(name="pmbok_tiene_grupos_procesos",
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
    public function __construct()
    {
        $this->areaConocimiento = new \Doctrine\Common\Collections\ArrayCollection();
        $this->grupoProcesos = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set id
     *
     * @param integer $id
     * @return Pmbok
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set edicion
     *
     * @param integer $edicion
     * @return Pmbok
     */
    public function setEdicion($edicion)
    {
        $this->edicion = $edicion;

        return $this;
    }

    /**
     * Get edicion
     *
     * @return integer 
     */
    public function getEdicion()
    {
        return $this->edicion;
    }

    /**
     * Set libro
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Libro $libro
     * @return Pmbok
     */
    public function setLibro(\Uci\Bundle\DataBaseBundle\Entity\Libro $libro = null)
    {
        $this->libro = $libro;

        return $this;
    }

    /**
     * Get libro
     *
     * @return \Uci\Bundle\DataBaseBundle\Entity\Libro 
     */
    public function getLibro()
    {
        return $this->libro;
    }

    /**
     * Add areaConocimiento
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\AreaConocimiento $areaConocimiento
     * @return Pmbok
     */
    public function addAreaConocimiento(\Uci\Bundle\DataBaseBundle\Entity\AreaConocimiento $areaConocimiento)
    {
        $this->areaConocimiento[] = $areaConocimiento;

        return $this;
    }

    /**
     * Remove areaConocimiento
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\AreaConocimiento $areaConocimiento
     */
    public function removeAreaConocimiento(\Uci\Bundle\DataBaseBundle\Entity\AreaConocimiento $areaConocimiento)
    {
        $this->areaConocimiento->removeElement($areaConocimiento);
    }

    /**
     * Get areaConocimiento
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAreaConocimiento()
    {
        return $this->areaConocimiento;
    }

    /**
     * Add grupoProcesos
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\GrupoProcesos $grupoProcesos
     * @return Pmbok
     */
    public function addGrupoProceso(\Uci\Bundle\DataBaseBundle\Entity\GrupoProcesos $grupoProcesos)
    {
        $this->grupoProcesos[] = $grupoProcesos;

        return $this;
    }

    /**
     * Remove grupoProcesos
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\GrupoProcesos $grupoProcesos
     */
    public function removeGrupoProceso(\Uci\Bundle\DataBaseBundle\Entity\GrupoProcesos $grupoProcesos)
    {
        $this->grupoProcesos->removeElement($grupoProcesos);
    }

    /**
     * Get grupoProcesos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGrupoProcesos()
    {
        return $this->grupoProcesos;
    }
}
