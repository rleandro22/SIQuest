<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuarioCorrigePregunta
 *
 * @ORM\Table(name="usuario_corrige_pregunta", indexes={@ORM\Index(name="fk_usuario_corrige_pregunta_usuario1_idx", columns={"usuario_id"}), @ORM\Index(name="fk_usuario_corrige_pregunta_pregunta1_idx", columns={"pregunta_id"}), @ORM\Index(name="fk_usuario_corrige_pregunta_cuestionario1_idx", columns={"cuestionario_id"})})
 * @ORM\Entity
 */
class UsuarioCorrigePregunta
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
     * @ORM\Column(name="comentario", type="text", nullable=false)
     */
    private $comentario;

    /**
     * @var \Uci\Bundle\BaseDatosBundle\Entity\Pregunta
     *
     * @ORM\ManyToOne(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Pregunta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pregunta_id", referencedColumnName="id")
     * })
     */
    private $pregunta;

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
     * @var \Uci\Bundle\BaseDatosBundle\Entity\Cuestionario
     *
     * @ORM\ManyToOne(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Cuestionario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cuestionario_id", referencedColumnName="id")
     * })
     */
    private $cuestionario;



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
     * Set cuestionario
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Cuestionario $cuestionario
     * @return UsuarioCorrigePregunta
     */
    public function setCuestionario(\Uci\Bundle\BaseDatosBundle\Entity\Cuestionario $cuestionario = null) {
        $this->cuestionario = $cuestionario;

        return $this;
    }

    /**
     * Get cuestionario
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\Cuestionario
     */
    public function getCuestionario() {
        return $this->cuestionario;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     * @return UsuarioCorrigePregunta
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set pregunta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta
     * @return UsuarioCorrigePregunta
     */
    public function setPregunta(\Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta = null)
    {
        $this->pregunta = $pregunta;

        return $this;
    }

    /**
     * Get pregunta
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\Pregunta 
     */
    public function getPregunta()
    {
        return $this->pregunta;
    }

    /**
     * Set usuario
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Usuario $usuario
     * @return UsuarioCorrigePregunta
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
