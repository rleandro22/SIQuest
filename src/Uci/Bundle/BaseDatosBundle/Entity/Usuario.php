<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

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
     * @ORM\Column(name="id", type="integer")
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
     * @var \Uci\Bundle\BaseDatosBundle\Entity\Rol
     *
     * @ORM\ManyToOne(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rol_id", referencedColumnName="id")
     * })
     */
    private $rol;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Cuestionario", inversedBy="usuario")
     * @ORM\JoinTable(name="cuestionario_asignado_usuario",
     *   joinColumns={
     *     @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="cuestionario_id", referencedColumnName="id")
     *   }
     * )
     */
    private $cuestionario;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Pregunta", inversedBy="usuario")
     * @ORM\JoinTable(name="usuario_corrige_pregunta",
     *   joinColumns={
     *     @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="pregunta_id", referencedColumnName="id")
     *   }
     * )
     */
    private $pregunta;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cuestionario = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pregunta = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add cuestionario
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Cuestionario $cuestionario
     * @return Usuario
     */
    public function addCuestionario(\Uci\Bundle\BaseDatosBundle\Entity\Cuestionario $cuestionario)
    {
        $this->cuestionario[] = $cuestionario;

        return $this;
    }

    /**
     * Remove cuestionario
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Cuestionario $cuestionario
     */
    public function removeCuestionario(\Uci\Bundle\BaseDatosBundle\Entity\Cuestionario $cuestionario)
    {
        $this->cuestionario->removeElement($cuestionario);
    }

    /**
     * Get cuestionario
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCuestionario()
    {
        return $this->cuestionario;
    }

    /**
     * Add pregunta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta
     * @return Usuario
     */
    public function addPreguntum(\Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta)
    {
        $this->pregunta[] = $pregunta;

        return $this;
    }

    /**
     * Remove pregunta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta
     */
    public function removePreguntum(\Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta)
    {
        $this->pregunta->removeElement($pregunta);
    }

    /**
     * Get pregunta
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPregunta()
    {
        return $this->pregunta;
    }
}
