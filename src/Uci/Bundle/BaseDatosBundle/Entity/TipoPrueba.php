<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoPrueba
 *
 * @ORM\Table(name="tipo_prueba")
 * @ORM\Entity
 */
class TipoPrueba
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
     * @ORM\Column(name="nombre_tipo", type="string", length=45, nullable=false)
     */
    private $nombreTipo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Pregunta", mappedBy="tipoPrueba")
     */
    private $pregunta;

    /**
     * Constructor
     */
    public function __construct()
    {
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
     * Set nombreTipo
     *
     * @param string $nombreTipo
     * @return TipoPrueba
     */
    public function setNombreTipo($nombreTipo)
    {
        $this->nombreTipo = $nombreTipo;

        return $this;
    }

    /**
     * Get nombreTipo
     *
     * @return string 
     */
    public function getNombreTipo()
    {
        return $this->nombreTipo;
    }

    /**
     * Add pregunta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta
     * @return TipoPrueba
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
