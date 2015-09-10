<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrupoProcesos
 *
 * @ORM\Table(name="grupo_procesos")
 * @ORM\Entity
 */
class GrupoProcesos
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
     * @ORM\Column(name="nombre_grupo", type="string", length=45, nullable=false)
     */
    private $nombreGrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="porcentaje", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $porcentaje;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Pmbok", mappedBy="grupoProcesos")
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
     * Set nombreGrupo
     *
     * @param string $nombreGrupo
     * @return GrupoProcesos
     */
    public function setNombreGrupo($nombreGrupo)
    {
        $this->nombreGrupo = $nombreGrupo;

        return $this;
    }

    /**
     * Get nombreGrupo
     *
     * @return string 
     */
    public function getNombreGrupo()
    {
        return $this->nombreGrupo;
    }

    /**
     * Set porcentaje
     *
     * @param string $porcentaje
     * @return GrupoProcesos
     */
    public function setPorcentaje($porcentaje)
    {
        $this->porcentaje = $porcentaje;

        return $this;
    }

    /**
     * Get porcentaje
     *
     * @return string 
     */
    public function getPorcentaje()
    {
        return $this->porcentaje;
    }

    /**
     * Add pmbok
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Pmbok $pmbok
     * @return GrupoProcesos
     */
    public function addPmbok(\Uci\Bundle\BaseDatosBundle\Entity\Pmbok $pmbok)
    {
        $this->pmbok[] = $pmbok;

        return $this;
    }

    /**
     * Remove pmbok
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Pmbok $pmbok
     */
    public function removePmbok(\Uci\Bundle\BaseDatosBundle\Entity\Pmbok $pmbok)
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
