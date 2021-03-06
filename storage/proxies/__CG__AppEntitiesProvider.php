<?php

namespace DoctrineProxies\__CG__\App\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Provider extends \App\Entities\Provider implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'id', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'userId', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'firstName', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'lastName', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'companyName', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'companySite', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'companyContactNo', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'logo', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'country', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'address', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'providerIndustryId', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'productProvider'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'id', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'userId', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'firstName', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'lastName', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'companyName', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'companySite', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'companyContactNo', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'logo', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'country', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'address', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'providerIndustryId', '' . "\0" . 'App\\Entities\\Provider' . "\0" . 'productProvider'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Provider $proxy) {
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
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdminId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdminId', []);

        return parent::getAdminId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdminId($adminId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdminId', [$adminId]);

        return parent::setAdminId($adminId);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName($firstName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName($lastName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductProvider()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductProvider', []);

        return parent::getProductProvider();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductProvider($productProvider)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductProvider', [$productProvider]);

        return parent::setProductProvider($productProvider);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserId', []);

        return parent::getUserId();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserId($userId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserId', [$userId]);

        return parent::setUserId($userId);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompanyName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompanyName', []);

        return parent::getCompanyName();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompanyName($companyName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompanyName', [$companyName]);

        return parent::setCompanyName($companyName);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompanySite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompanySite', []);

        return parent::getCompanySite();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompanySite($companySite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompanySite', [$companySite]);

        return parent::setCompanySite($companySite);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompanyContactNo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompanyContactNo', []);

        return parent::getCompanyContactNo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompanyContactNo($companyContactNo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompanyContactNo', [$companyContactNo]);

        return parent::setCompanyContactNo($companyContactNo);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogo', []);

        return parent::getLogo();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogo($logo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogo', [$logo]);

        return parent::setLogo($logo);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry($country)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$country]);

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getProviderIndustryId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProviderIndustryId', []);

        return parent::getProviderIndustryId();
    }

    /**
     * {@inheritDoc}
     */
    public function setProviderIndustryId($providerIndustryId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProviderIndustryId', [$providerIndustryId]);

        return parent::setProviderIndustryId($providerIndustryId);
    }

}
