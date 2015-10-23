<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrianguloTalento
 *
 * @ORM\Table(name="triangulo_talento")
 * @ORM\Entity
 */
class TrianguloTalento {

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
     * @ORM\Column(name="nombre_talento", type="string", length=200, nullable=false)
     */
    private $nombreTalento;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Pmbok", inversedBy="trianguloTalento")
     * @ORM\JoinTable(name="pmbok_tiene_triangulos_talento",
     *   joinColumns={
     *     @ORM\JoinColumn(name="triangulo_talento_id", referencedColumnName="id")
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
    public function __construct() {
        $this->pmbok = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombreTalento
     *
     * @param string $nombreTalento
     * @return TrianguloTalento
     */
    public function setNombreTalento($nombreTalento) {
        $this->nombreTalento = $nombreTalento;

        return $this;
    }

    /**
     * Get nombreTalento
     *
     * @return string 
     */
    public function getNombreTalento() {
        return $this->nombreTalento;
    }

    /**
     * Add pmbok
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Pmbok $pmbok
     * @return TrianguloTalento
     */
    public function addPmbok(\Uci\Bundle\BaseDatosBundle\Entity\Pmbok $pmbok) {
        $this->pmbok[] = $pmbok;

        return $this;
    }

    /**
     * Remove pmbok
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Pmbok $pmbok
     */
    public function removePmbok(\Uci\Bundle\BaseDatosBundle\Entity\Pmbok $pmbok) {
        $this->pmbok->removeElement($pmbok);
    }

    /**
     * Get pmbok
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPmbok() {
        return $this->pmbok;
    }

    public function __toString() {
        return $this->nombreTalento;
    }

}
