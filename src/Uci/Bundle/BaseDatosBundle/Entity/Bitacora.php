<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Symfony\Component\Security\Core\Role\RoleInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Rol
 *
 * @ORM\Table(name="bitacora")
 * @ORM\Entity
 */
class Bitacora implements RoleInterface {

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
     * @ORM\Column(name="accion", type="text", nullable=false)
     */
    private $accion;

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
     * Set usuario
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Usuario $usuario
     * @return Bitacora
     */
    public function setUsuario(\Uci\Bundle\BaseDatosBundle\Entity\Usuario $usuario = null) {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\Usuario
     */
    public function getUsuario() {
        return $this->usuario;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    public function __toString() {
        return $this->nombre;
    }

    public function getRole() {
        $this->accion;
    }

}
