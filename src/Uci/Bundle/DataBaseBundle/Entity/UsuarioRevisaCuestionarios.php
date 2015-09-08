<?php

namespace Uci\Bundle\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuarioRevisaCuestionarios
 *
 * @ORM\Table(name="usuario_revisa_cuestionarios", indexes={@ORM\Index(name="fk_revision_profesor_cuestionario_has_pregunta1_idx", columns={"cuestionario_tiene_pregunta_cuestionario_id", "cuestionario_tiene_pregunta_pregunta_id"})})
 * @ORM\Entity
 */
class UsuarioRevisaCuestionarios
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=45, nullable=true)
     */
    private $comentario;

    /**
     * @var \CuestionarioTienePreguntas
     *
     * @ORM\ManyToOne(targetEntity="CuestionarioTienePreguntas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cuestionario_tiene_pregunta_cuestionario_id", referencedColumnName="cuestionario_id"),
     *   @ORM\JoinColumn(name="cuestionario_tiene_pregunta_pregunta_id", referencedColumnName="pregunta_id")
     * })
     */
    private $cuestionarioTienePreguntaCuestionario;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Usuario", mappedBy="revisionUsuario")
     */
    private $usuario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuario = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return UsuarioRevisaCuestionarios
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     * @return UsuarioRevisaCuestionarios
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
     * Set cuestionarioTienePreguntaCuestionario
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\CuestionarioTienePreguntas $cuestionarioTienePreguntaCuestionario
     * @return UsuarioRevisaCuestionarios
     */
    public function setCuestionarioTienePreguntaCuestionario(\Uci\Bundle\DataBaseBundle\Entity\CuestionarioTienePreguntas $cuestionarioTienePreguntaCuestionario = null)
    {
        $this->cuestionarioTienePreguntaCuestionario = $cuestionarioTienePreguntaCuestionario;

        return $this;
    }

    /**
     * Get cuestionarioTienePreguntaCuestionario
     *
     * @return \Uci\Bundle\DataBaseBundle\Entity\CuestionarioTienePreguntas 
     */
    public function getCuestionarioTienePreguntaCuestionario()
    {
        return $this->cuestionarioTienePreguntaCuestionario;
    }

    /**
     * Add usuario
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Usuario $usuario
     * @return UsuarioRevisaCuestionarios
     */
    public function addUsuario(\Uci\Bundle\DataBaseBundle\Entity\Usuario $usuario)
    {
        $this->usuario[] = $usuario;

        return $this;
    }

    /**
     * Remove usuario
     *
     * @param \Uci\Bundle\DataBaseBundle\Entity\Usuario $usuario
     */
    public function removeUsuario(\Uci\Bundle\DataBaseBundle\Entity\Usuario $usuario)
    {
        $this->usuario->removeElement($usuario);
    }

    /**
     * Get usuario
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
