<?php

namespace Uci\Bundle\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", indexes={@ORM\Index(name="fk_usuario_roles1_idx", columns={"rol_id"})})
 * @ORM\Entity
 */
class Usuario
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
     * @ORM\Column(name="usuario", type="string", length=45, nullable=false)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=45, nullable=false)
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

    /**
     * @var \Rol
     *
     * @ORM\ManyToOne(targetEntity="Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rol_id", referencedColumnName="id")
     * })
     */
    private $rol;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="UsuarioRevisaCuestionarios", inversedBy="usuario")
     * @ORM\JoinTable(name="usuario_hace_revisiones",
     *   joinColumns={
     *     @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="revision_usuario_id", referencedColumnName="id")
     *   }
     * )
     */
    private $revisionUsuario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->revisionUsuario = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @param string $usuario
     * @return Usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set clave
     *
     * @param string $clave
     * @return Usuario
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set rol
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Rol $rol
     * @return Usuario
     */
    public function setRol(\Uci\Bundle\DataBaseBundle\Entity\Rol $rol = null)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return \Uci\Bundle\DataBaseBundle\Entity\Rol 
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Add revisionUsuario
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\UsuarioRevisaCuestionarios $revisionUsuario
     * @return Usuario
     */
    public function addRevisionUsuario(\Uci\Bundle\DataBaseBundle\Entity\UsuarioRevisaCuestionarios $revisionUsuario)
    {
        $this->revisionUsuario[] = $revisionUsuario;

        return $this;
    }

    /**
     * Remove revisionUsuario
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\UsuarioRevisaCuestionarios $revisionUsuario
     */
    public function removeRevisionUsuario(\Uci\Bundle\DataBaseBundle\Entity\UsuarioRevisaCuestionarios $revisionUsuario)
    {
        $this->revisionUsuario->removeElement($revisionUsuario);
    }

    /**
     * Get revisionUsuario
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRevisionUsuario()
    {
        return $this->revisionUsuario;
    }
}
