<?php

namespace Proxies\__CG__\Uci\Bundle\BaseDatosBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cuestionario extends \Uci\Bundle\BaseDatosBundle\Entity\Cuestionario implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Cuestionario' . "\0" . 'id', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Cuestionario' . "\0" . 'cantidadPreguntas', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Cuestionario' . "\0" . 'curso', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Cuestionario' . "\0" . 'cuestionarioname', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Cuestionario' . "\0" . 'pregunta', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Cuestionario' . "\0" . 'aceptado', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Cuestionario' . "\0" . 'comentarioAceptado');
        }

        return array('__isInitialized__', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Cuestionario' . "\0" . 'id', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Cuestionario' . "\0" . 'cantidadPreguntas', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Cuestionario' . "\0" . 'curso', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Cuestionario' . "\0" . 'cuestionarioname', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Cuestionario' . "\0" . 'pregunta', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Cuestionario' . "\0" . 'aceptado', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Cuestionario' . "\0" . 'comentarioAceptado');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cuestionario $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCuestionarioname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCuestionarioname', array());

        return parent::getCuestionarioname();
    }

    /**
     * {@inheritDoc}
     */
    public function setCuestionarioname($cuestionarioname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCuestionarioname', array($cuestionarioname));

        return parent::setCuestionarioname($cuestionarioname);
    }

    /**
     * {@inheritDoc}
     */
    public function setCantidadPreguntas($cantidadPreguntas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCantidadPreguntas', array($cantidadPreguntas));

        return parent::setCantidadPreguntas($cantidadPreguntas);
    }

    /**
     * {@inheritDoc}
     */
    public function getCantidadPreguntas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCantidadPreguntas', array());

        return parent::getCantidadPreguntas();
    }

    /**
     * {@inheritDoc}
     */
    public function getAceptado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAceptado', array());

        return parent::getAceptado();
    }

    /**
     * {@inheritDoc}
     */
    public function getComentarioAceptado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComentarioAceptado', array());

        return parent::getComentarioAceptado();
    }

    /**
     * {@inheritDoc}
     */
    public function setAceptado($aceptado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAceptado', array($aceptado));

        return parent::setAceptado($aceptado);
    }

    /**
     * {@inheritDoc}
     */
    public function setComentarioAceptado($comentarioAceptado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComentarioAceptado', array($comentarioAceptado));

        return parent::setComentarioAceptado($comentarioAceptado);
    }

    /**
     * {@inheritDoc}
     */
    public function setCurso(\Uci\Bundle\BaseDatosBundle\Entity\Curso $curso = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurso', array($curso));

        return parent::setCurso($curso);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurso', array());

        return parent::getCurso();
    }

    /**
     * {@inheritDoc}
     */
    public function addPregunta(\Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPregunta', array($pregunta));

        return parent::addPregunta($pregunta);
    }

    /**
     * {@inheritDoc}
     */
    public function removePregunta(\Uci\Bundle\BaseDatosBundle\Entity\Pregunta $pregunta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePregunta', array($pregunta));

        return parent::removePregunta($pregunta);
    }

    /**
     * {@inheritDoc}
     */
    public function getPregunta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPregunta', array());

        return parent::getPregunta();
    }

    /**
     * {@inheritDoc}
     */
    public function setPregunta(\Doctrine\Common\Collections\Collection $pregunta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPregunta', array($pregunta));

        return parent::setPregunta($pregunta);
    }

    /**
     * {@inheritDoc}
     */
    public function borrarPreguntas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'borrarPreguntas', array());

        return parent::borrarPreguntas();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
