<?php

namespace Kiboko\Magento\Model;

class V1AmazonBillingAddressAmazonOrderReferenceIdPutBody
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
     * 
     *
     * @var string|null
     */
    protected $addressConsentToken;
    /**
     * 
     *
     * @return string|null
     */
    public function getAddressConsentToken() : ?string
    {
        return $this->addressConsentToken;
    }
    /**
     * 
     *
     * @param string|null $addressConsentToken
     *
     * @return self
     */
    public function setAddressConsentToken(?string $addressConsentToken) : self
    {
        $this->initialized['addressConsentToken'] = true;
        $this->addressConsentToken = $addressConsentToken;
        return $this;
    }
}