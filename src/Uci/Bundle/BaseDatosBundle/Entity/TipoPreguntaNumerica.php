<?php

namespace Uci\Bundle\BaseDatosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoPreguntaNumerica
 *
 * @ORM\Table(name="tipo_pregunta_numerica", indexes={@ORM\Index(name="fk_preguntas_numericas_respuesta1_idx", columns={"respuesta_id"})})
 * @ORM\Entity
 */
class TipoPreguntaNumerica
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
     * @ORM\Column(name="primer_numero", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $primerNumero;

    /**
     * @var string
     *
     * @ORM\Column(name="segundo_numero", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $segundoNumero;

    /**
     * @var string
     *
     * @ORM\Column(name="es_span", type="blob", length=1, nullable=true)
     */
    private $esSpan;

    /**
     * @var \Uci\Bundle\BaseDatosBundle\Entity\Respuesta
     *
     * @ORM\ManyToOne(targetEntity="Uci\Bundle\BaseDatosBundle\Entity\Respuesta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="respuesta_id", referencedColumnName="id")
     * })
     */
    private $respuesta;



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
     * Set primerNumero
     *
     * @param string $primerNumero
     * @return TipoPreguntaNumerica
     */
    public function setPrimerNumero($primerNumero)
    {
        $this->primerNumero = $primerNumero;

        return $this;
    }

    /**
     * Get primerNumero
     *
     * @return string 
     */
    public function getPrimerNumero()
    {
        return $this->primerNumero;
    }

    /**
     * Set segundoNumero
     *
     * @param string $segundoNumero
     * @return TipoPreguntaNumerica
     */
    public function setSegundoNumero($segundoNumero)
    {
        $this->segundoNumero = $segundoNumero;

        return $this;
    }

    /**
     * Get segundoNumero
     *
     * @return string 
     */
    public function getSegundoNumero()
    {
        return $this->segundoNumero;
    }

    /**
     * Set esSpan
     *
     * @param string $esSpan
     * @return TipoPreguntaNumerica
     */
    public function setEsSpan($esSpan)
    {
        $this->esSpan = $esSpan;

        return $this;
    }

    /**
     * Get esSpan
     *
     * @return string 
     */
    public function getEsSpan()
    {
        return $this->esSpan;
    }

    /**
     * Set respuesta
     *
     * @param \Uci\Bundle\BaseDatosBundle\Entity\Respuesta $respuesta
     * @return TipoPreguntaNumerica
     */
    public function setRespuesta(\Uci\Bundle\BaseDatosBundle\Entity\Respuesta $respuesta = null)
    {
        $this->respuesta = $respuesta;

        return $this;
    }

    /**
     * Get respuesta
     *
     * @return \Uci\Bundle\BaseDatosBundle\Entity\Respuesta 
     */
    public function getRespuesta()
    {
        return $this->respuesta;
    }
}
