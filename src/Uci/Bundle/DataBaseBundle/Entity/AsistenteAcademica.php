<?php

namespace Uci\Bundle\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AsistenteAcademica
 *
 * @ORM\Table(name="asistente_academica", indexes={@ORM\Index(name="fk_asistente_academica_usuario1_idx", columns={"usuario_id"})})
 * @ORM\Entity
 */
class AsistenteAcademica
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
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
    private $usuario;



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
     * @param \Uci\Bundle\DataBaseBundle\Entity\Usuario $usuario
     * @return AsistenteAcademica
     */
    public function setUsuario(\Uci\Bundle\DataBaseBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Uci\Bundle\DataBaseBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
