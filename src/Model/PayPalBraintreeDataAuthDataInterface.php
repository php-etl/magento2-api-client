<?php

namespace Kiboko\Magento\Model;

class PayPalBraintreeDataAuthDataInterface
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Client token
     *
     * @var string|null
     */
    protected $clientToken;
    /**
     * Display name
     *
     * @var string|null
     */
    protected $displayName;
    /**
     * To success page
     *
     * @var string|null
     */
    protected $actionSuccess;
    /**
     * 
     *
     * @var bool|null
     */
    protected $loggedIn;
    /**
     * Current store code
     *
     * @var string|null
     */
    protected $storeCode;
    /**
     * Client token
     *
     * @return string|null
     */
    public function getClientToken() : ?string
    {
        return $this->clientToken;
    }
    /**
     * Client token
     *
     * @param string|null $clientToken
     *
     * @return self
     */
    public function setClientToken(?string $clientToken) : self
    {
        $this->initialized['clientToken'] = true;
        $this->clientToken = $clientToken;
        return $this;
    }
    /**
     * Display name
     *
     * @return string|null
     */
    public function getDisplayName() : ?string
    {
        return $this->displayName;
    }
    /**
     * Display name
     *
     * @param string|null $displayName
     *
     * @return self
     */
    public function setDisplayName(?string $displayName) : self
    {
        $this->initialized['displayName'] = true;
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * To success page
     *
     * @return string|null
     */
    public function getActionSuccess() : ?string
    {
        return $this->actionSuccess;
    }
    /**
     * To success page
     *
     * @param string|null $actionSuccess
     *
     * @return self
     */
    public function setActionSuccess(?string $actionSuccess) : self
    {
        $this->initialized['actionSuccess'] = true;
        $this->actionSuccess = $actionSuccess;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getLoggedIn() : ?bool
    {
        return $this->loggedIn;
    }
    /**
     * 
     *
     * @param bool|null $loggedIn
     *
     * @return self
     */
    public function setLoggedIn(?bool $loggedIn) : self
    {
        $this->initialized['loggedIn'] = true;
        $this->loggedIn = $loggedIn;
        return $this;
    }
    /**
     * Current store code
     *
     * @return string|null
     */
    public function getStoreCode() : ?string
    {
        return $this->storeCode;
    }
    /**
     * Current store code
     *
     * @param string|null $storeCode
     *
     * @return self
     */
    public function setStoreCode(?string $storeCode) : self
    {
        $this->initialized['storeCode'] = true;
        $this->storeCode = $storeCode;
        return $this;
    }
}