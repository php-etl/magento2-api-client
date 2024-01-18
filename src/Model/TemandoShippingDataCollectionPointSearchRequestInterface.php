<?php

namespace Kiboko\Magento\Model;

class TemandoShippingDataCollectionPointSearchRequestInterface
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
     * @var int|null
     */
    protected $shippingAddressId;
    /**
     * 
     *
     * @var string|null
     */
    protected $countryId;
    /**
     * 
     *
     * @var string|null
     */
    protected $postcode;
    /**
     * 
     *
     * @var bool|null
     */
    protected $pending;
    /**
     * 
     *
     * @return int|null
     */
    public function getShippingAddressId() : ?int
    {
        return $this->shippingAddressId;
    }
    /**
     * 
     *
     * @param int|null $shippingAddressId
     *
     * @return self
     */
    public function setShippingAddressId(?int $shippingAddressId) : self
    {
        $this->initialized['shippingAddressId'] = true;
        $this->shippingAddressId = $shippingAddressId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCountryId() : ?string
    {
        return $this->countryId;
    }
    /**
     * 
     *
     * @param string|null $countryId
     *
     * @return self
     */
    public function setCountryId(?string $countryId) : self
    {
        $this->initialized['countryId'] = true;
        $this->countryId = $countryId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPostcode() : ?string
    {
        return $this->postcode;
    }
    /**
     * 
     *
     * @param string|null $postcode
     *
     * @return self
     */
    public function setPostcode(?string $postcode) : self
    {
        $this->initialized['postcode'] = true;
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getPending() : ?bool
    {
        return $this->pending;
    }
    /**
     * 
     *
     * @param bool|null $pending
     *
     * @return self
     */
    public function setPending(?bool $pending) : self
    {
        $this->initialized['pending'] = true;
        $this->pending = $pending;
        return $this;
    }
}