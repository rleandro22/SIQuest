<?php

namespace Uci\Bundle\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AreaConocimiento
 *
 * @ORM\Table(name="area_conocimiento")
 * @ORM\Entity
 */
class AreaConocimiento
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
     * @ORM\Column(name="nombre_area", type="string", length=200, nullable=false)
     */
    private $nombreArea;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Pmbok", inversedBy="areaConocimiento")
     * @ORM\JoinTable(name="pmbok_tiene_areas_conocimiento",
     *   joinColumns={
     *     @ORM\JoinColumn(name="area_conocimiento_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="pmbok_id", referencedColumnName="id")
     *   }
     * )
     */
    private $pmbok;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pmbok = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombreArea
     *
     * @param string $nombreArea
     * @return AreaConocimiento
     */
    public function setNombreArea($nombreArea)
    {
        $this->nombreArea = $nombreArea;

        return $this;
    }

    /**
     * Get nombreArea
     *
     * @return string 
     */
    public function getNombreArea()
    {
        return $this->nombreArea;
    }

    /**
     * Add pmbok
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Pmbok $pmbok
     * @return AreaConocimiento
     */
    public function addPmbok(\Uci\Bundle\DataBaseBundle\Entity\Pmbok $pmbok)
    {
        $this->pmbok[] = $pmbok;

        return $this;
    }

    /**
     * Remove pmbok
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Pmbok $pmbok
     */
    public function removePmbok(\Uci\Bundle\DataBaseBundle\Entity\Pmbok $pmbok)
    {
        $this->pmbok->removeElement($pmbok);
    }

    /**
     * Get pmbok
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPmbok()
    {
        return $this->pmbok;
    }
}
