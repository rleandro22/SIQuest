<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * Usuario
 *
 * @ORM\Table(name="usuario", uniqueConstraints={@ORM\UniqueConstraint(name="username_UNIQUE", columns={"username"})}, indexes={@ORM\Index(name="fk_usuario_roles1_idx", columns={"rol_id"})})
 * @ORM\Entity
 */
class Usuario implements UserInterface
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
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=200, nullable=false)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=45, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=false)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

    /**
     * @var \Uci\Bundle\BaseDatosBundle\Entity\Rol
     *
     * @ORM\ManyToOne(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rol_id", referencedColumnName="id")
     * })
     */
    private $rol;



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
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Usuario
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Usuario
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
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
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Rol $rol
     * @return Usuario
     */
    public function setRol(\Uci\Bundle\BaseDatosBundle\Entity\Rol $rol = null)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\Rol 
     */
    public function getRol()
    {
        return $this->rol;
    }
    
        /**
     * Get roles
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getRoles() {
        if ($this->rol->getNombre() == "Administrador") {
            return array('ROLE_ADMINISTRADOR');
        } elseif ($this->rol->getNombre() == "Asistente") {
            return array('ROLE_ASISTENTE');
        } else {
            return array('ROLE_PROFESOR');
        }
    }

    /**
     * Compares this user to another to determine if they are the same.
     *
     * @param UserInterface $usuario The user
     * @return boolean True if equal, false othwerwise.
     */
    public function equals(UserInterface $usuario) {
        return md5($this->getUsername()) == md5($usuario->getUsername());
    }

    public function eraseCredentials() {
        
    }
    
    public function __toString() {
        return $this->nombre.' '.$this->apellidos;
    }

}
