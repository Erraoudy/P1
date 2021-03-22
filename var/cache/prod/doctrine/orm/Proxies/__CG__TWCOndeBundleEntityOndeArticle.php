<?php

namespace Proxies\__CG__\TWC\OndeBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class OndeArticle extends \TWC\OndeBundle\Entity\OndeArticle implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'id', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'creationDate', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'updateDate', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'titre', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'titreAr', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'titreEn', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'status', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'auteur', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'publication', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'contenu', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'contenuAr', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'contenuEn', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'image', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'category', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'type'];
        }

        return ['__isInitialized__', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'id', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'creationDate', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'updateDate', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'titre', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'titreAr', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'titreEn', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'status', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'auteur', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'publication', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'contenu', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'contenuAr', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'contenuEn', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'image', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'category', '' . "\0" . 'TWC\\OndeBundle\\Entity\\OndeArticle' . "\0" . 'type'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (OndeArticle $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreationDate($creationDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreationDate', [$creationDate]);

        return parent::setCreationDate($creationDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreationDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreationDate', []);

        return parent::getCreationDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateDate($updateDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateDate', [$updateDate]);

        return parent::setUpdateDate($updateDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateDate', []);

        return parent::getUpdateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre($titre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuteur($auteur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuteur', [$auteur]);

        return parent::setAuteur($auteur);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuteur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuteur', []);

        return parent::getAuteur();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublication($publication)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublication', [$publication]);

        return parent::setPublication($publication);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublication()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublication', []);

        return parent::getPublication();
    }

    /**
     * {@inheritDoc}
     */
    public function setContenu($contenu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContenu', [$contenu]);

        return parent::setContenu($contenu);
    }

    /**
     * {@inheritDoc}
     */
    public function getContenu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContenu', []);

        return parent::getContenu();
    }

    /**
     * {@inheritDoc}
     */
    public function addImage(\Twc\OndeBundle\Entity\OndeImage $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addImage', [$image]);

        return parent::addImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function removeImage(\Twc\OndeBundle\Entity\OndeImage $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeImage', [$image]);

        return parent::removeImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(\Twc\OndeBundle\Entity\OndeCategories $category = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitreAr($titreAr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitreAr', [$titreAr]);

        return parent::setTitreAr($titreAr);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitreAr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitreAr', []);

        return parent::getTitreAr();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitreEn($titreEn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitreEn', [$titreEn]);

        return parent::setTitreEn($titreEn);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitreEn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitreEn', []);

        return parent::getTitreEn();
    }

    /**
     * {@inheritDoc}
     */
    public function setContenuAr($contenuAr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContenuAr', [$contenuAr]);

        return parent::setContenuAr($contenuAr);
    }

    /**
     * {@inheritDoc}
     */
    public function getContenuAr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContenuAr', []);

        return parent::getContenuAr();
    }

    /**
     * {@inheritDoc}
     */
    public function setContenuEn($contenuEn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContenuEn', [$contenuEn]);

        return parent::setContenuEn($contenuEn);
    }

    /**
     * {@inheritDoc}
     */
    public function getContenuEn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContenuEn', []);

        return parent::getContenuEn();
    }

}
