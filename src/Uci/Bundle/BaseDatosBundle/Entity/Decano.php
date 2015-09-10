<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Decano
 *
 * @ORM\Table(name="decano", indexes={@ORM\Index(name="fk_decano_usuario1_idx", columns={"usuario_id"})})
 * @ORM\Entity
 */
class Decano
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
     * @var \Uci\Bundle\BaseDatosBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
    private $usuario;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Solicitud", inversedBy="decano")
     * @ORM\JoinTable(name="decano_realiza_solicitud",
     *   joinColumns={
     *     @ORM\JoinColumn(name="decano_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="solicitud_id", referencedColumnName="id")
     *   }
     * )
     */
    private $solicitud;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->solicitud = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set usuario
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Usuario $usuario
     * @return Decano
     */
    public function setUsuario(\Uci\Bundle\BaseDatosBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Add solicitud
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Solicitud $solicitud
     * @return Decano
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
}
