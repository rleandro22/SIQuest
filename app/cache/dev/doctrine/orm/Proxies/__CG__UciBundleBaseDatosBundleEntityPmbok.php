<?php

namespace Proxies\__CG__\Uci\Bundle\BaseDatosBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Pmbok extends \Uci\Bundle\BaseDatosBundle\Entity\Pmbok implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pmbok' . "\0" . 'id', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pmbok' . "\0" . 'edicion', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pmbok' . "\0" . 'areaConocimiento', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pmbok' . "\0" . 'trianguloTalento', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pmbok' . "\0" . 'grupoProcesos');
        }

        return array('__isInitialized__', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pmbok' . "\0" . 'id', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pmbok' . "\0" . 'edicion', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pmbok' . "\0" . 'areaConocimiento', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pmbok' . "\0" . 'trianguloTalento', '' . "\0" . 'Uci\\Bundle\\BaseDatosBundle\\Entity\\Pmbok' . "\0" . 'grupoProcesos');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Pmbok $proxy) {
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
    public function setEdicion($edicion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEdicion', array($edicion));

        return parent::setEdicion($edicion);
    }

    /**
     * {@inheritDoc}
     */
    public function getEdicion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEdicion', array());

        return parent::getEdicion();
    }

    /**
     * {@inheritDoc}
     */
    public function addAreaConocimiento(\Uci\Bundle\BaseDatosBundle\Entity\AreaConocimiento $areaConocimiento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAreaConocimiento', array($areaConocimiento));

        return parent::addAreaConocimiento($areaConocimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAreaConocimiento(\Uci\Bundle\BaseDatosBundle\Entity\AreaConocimiento $areaConocimiento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAreaConocimiento', array($areaConocimiento));

        return parent::removeAreaConocimiento($areaConocimiento);
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
    public function addGrupoProceso(\Uci\Bundle\BaseDatosBundle\Entity\GrupoProcesos $grupoProcesos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGrupoProceso', array($grupoProcesos));

        return parent::addGrupoProceso($grupoProcesos);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGrupoProceso(\Uci\Bundle\BaseDatosBundle\Entity\GrupoProcesos $grupoProcesos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGrupoProceso', array($grupoProcesos));

        return parent::removeGrupoProceso($grupoProcesos);
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
    public function addTrianguloTalento(\Uci\Bundle\BaseDatosBundle\Entity\TrianguloTalento $trianguloTalento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTrianguloTalento', array($trianguloTalento));

        return parent::addTrianguloTalento($trianguloTalento);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTrianguloTalento(\Uci\Bundle\BaseDatosBundle\Entity\TrianguloTalento $trianguloTalento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTrianguloTalento', array($trianguloTalento));

        return parent::removeTrianguloTalento($trianguloTalento);
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
