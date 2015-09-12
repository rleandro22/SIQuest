<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CuestionarioAsignadoAUsuario
 *
 * @ORM\Table(name="cuestionario_asignado_a_usuario", indexes={@ORM\Index(name="fk_cuestionario_asignado_a_usuario_cuestionario1_idx", columns={"cuestionario_id"}), @ORM\Index(name="fk_cuestionario_asignado_a_usuario_usuario1_idx", columns={"usuario_id"})})
 * @ORM\Entity
 */
class CuestionarioAsignadoAUsuario
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
     * @ORM\Column(name="aceptado_por_usuario", type="blob", length=1, nullable=false)
     */
    private $aceptadoPorUsuario;

    /**
     * @var \Uci\Bundle\BaseDatosBundle\Entity\Cuestionario
     *
     * @ORM\ManyToOne(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Cuestionario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cuestionario_id", referencedColumnName="id")
     * })
     */
    private $cuestionario;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set aceptadoPorUsuario
     *
     * @param string $aceptadoPorUsuario
     * @return CuestionarioAsignadoAUsuario
     */
    public function setAceptadoPorUsuario($aceptadoPorUsuario)
    {
        $this->aceptadoPorUsuario = $aceptadoPorUsuario;

        return $this;
    }

    /**
     * Get aceptadoPorUsuario
     *
     * @return string 
     */
    public function getAceptadoPorUsuario()
    {
        return $this->aceptadoPorUsuario;
    }

    /**
     * Set cuestionario
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Cuestionario $cuestionario
     * @return CuestionarioAsignadoAUsuario
     */
    public function setCuestionario(\Uci\Bundle\BaseDatosBundle\Entity\Cuestionario $cuestionario = null)
    {
        $this->cuestionario = $cuestionario;

        return $this;
    }

    /**
     * Get cuestionario
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\Cuestionario 
     */
    public function getCuestionario()
    {
        return $this->cuestionario;
    }

    /**
     * Set usuario
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Usuario $usuario
     * @return CuestionarioAsignadoAUsuario
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
}
