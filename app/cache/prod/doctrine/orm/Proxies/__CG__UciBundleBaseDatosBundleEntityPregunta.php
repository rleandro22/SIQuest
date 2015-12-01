<?php

namespace Proxies\__CG__\Uci\Bundle\BaseDatosBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Pregunta extends \Uci\Bundle\BaseDatosBundle\Entity\Pregunta implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'id', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'titulo', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'numeroPagina', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'areaConocimiento', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'trianguloTalento', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'capitulo', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'libro', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'grupoProcesos', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'tipoPrueba', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'respuesta', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'cuestionario', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'tipoRespuesta');
        }

        return array('__isInitialized__', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'id', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'titulo', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'numeroPagina', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'areaConocimiento', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'trianguloTalento', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'capitulo', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'libro', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'grupoProcesos', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'tipoPrueba', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'respuesta', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'cuestionario', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pregunta' . "\0" . 'tipoRespuesta');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Pregunta $proxy) {
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
    public function addRespuesta(\Uci\Bundle\BaseDatosBundle\Entity\Respuesta $respuesta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRespuesta', array($respuesta));

        return parent::addRespuesta($respuesta);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRespuesta(\Uci\Bundle\BaseDatosBundle\Entity\Respuesta $respuesta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRespuesta', array($respuesta));

        return parent::removeRespuesta($respuesta);
    }

    /**
     * {@inheritDoc}
     */
    public function getRespuesta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRespuesta', array());

        return parent::getRespuesta();
    }

    /**
     * {@inheritDoc}
     */
    public function setRespuesta(\Doctrine\Common\Collections\Collection $respuesta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRespuesta', array($respuesta));

        return parent::setRespuesta($respuesta);
    }

    /**
     * {@inheritDoc}
     */
    public function resetearRespuestas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetearRespuestas', array());

        return parent::resetearRespuestas();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoPrueba(\Doctrine\Common\Collections\Collection $tipoPrueba)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoPrueba', array($tipoPrueba));

        return parent::setTipoPrueba($tipoPrueba);
    }

    /**
     * {@inheritDoc}
     */
    public function addTipoPrueba(\Uci\Bundle\BaseDatosBundle\Entity\TipoPrueba $tipoPrueba)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTipoPrueba', array($tipoPrueba));

        return parent::addTipoPrueba($tipoPrueba);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTipoPrueba(\Uci\Bundle\BaseDatosBundle\Entity\TipoPrueba $tipoPrueba)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTipoPrueba', array($tipoPrueba));

        return parent::removeTipoPrueba($tipoPrueba);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoPrueba()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoPrueba', array());

        return parent::getTipoPrueba();
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
    public function setTitulo($titulo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitulo', array($titulo));

        return parent::setTitulo($titulo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitulo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitulo', array());

        return parent::getTitulo();
    }

    /**
     * {@inheritDoc}
     */
    public function setAreaConocimiento(\Uci\Bundle\BaseDatosBundle\Entity\AreaConocimiento $areaConocimiento = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAreaConocimiento', array($areaConocimiento));

        return parent::setAreaConocimiento($areaConocimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getAreaConocimiento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAreaConocimiento', array());

        return parent::getAreaConocimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setTrianguloTalento(\Uci\Bundle\BaseDatosBundle\Entity\TrianguloTalento $trianguloTalento = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTrianguloTalento', array($trianguloTalento));

        return parent::setTrianguloTalento($trianguloTalento);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrianguloTalento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrianguloTalento', array());

        return parent::getTrianguloTalento();
    }

    /**
     * {@inheritDoc}
     */
    public function setCapitulo(\Uci\Bundle\BaseDatosBundle\Entity\Capitulo $capitulo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCapitulo', array($capitulo));

        return parent::setCapitulo($capitulo);
    }

    /**
     * {@inheritDoc}
     */
    public function getCapitulo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCapitulo', array());

        return parent::getCapitulo();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibro(\Uci\Bundle\BaseDatosBundle\Entity\Libro $libro = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibro', array($libro));

        return parent::setLibro($libro);
    }

    /**
     * {@inheritDoc}
     */
    public function getLibro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibro', array());

        return parent::getLibro();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrupoProcesos(\Uci\Bundle\BaseDatosBundle\Entity\GrupoProcesos $grupoProcesos = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrupoProcesos', array($grupoProcesos));

        return parent::setGrupoProcesos($grupoProcesos);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrupoProcesos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrupoProcesos', array());

        return parent::getGrupoProcesos();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoRespuesta(\Uci\Bundle\BaseDatosBundle\Entity\TipoRespuesta $tipoRespuesta = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoRespuesta', array($tipoRespuesta));

        return parent::setTipoRespuesta($tipoRespuesta);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoRespuesta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoRespuesta', array());

        return parent::getTipoRespuesta();
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeroPagina()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroPagina', array());

        return parent::getNumeroPagina();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumeroPagina($numeroPagina)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumeroPagina', array($numeroPagina));

        return parent::setNumeroPagina($numeroPagina);
    }

    /**
     * {@inheritDoc}
     */
    public function addCuestionarium(\Uci\Bundle\BaseDatosBundle\Entity\Cuestionario $cuestionario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCuestionarium', array($cuestionario));

        return parent::addCuestionarium($cuestionario);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCuestionarium(\Uci\Bundle\BaseDatosBundle\Entity\Cuestionario $cuestionario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCuestionarium', array($cuestionario));

        return parent::removeCuestionarium($cuestionario);
    }

    /**
     * {@inheritDoc}
     */
    public function getCuestionario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCuestionario', array());

        return parent::getCuestionario();
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
