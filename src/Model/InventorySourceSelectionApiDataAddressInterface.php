<?php

namespace Kiboko\Magento\Model;

class InventorySourceSelectionApiDataAddressInterface
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
     * Shipping country
     *
     * @var string|null
     */
    protected $country;
    /**
     * Shipping postcode
     *
     * @var string|null
     */
    protected $postcode;
    /**
     * Shipping street address
     *
     * @var string|null
     */
    protected $street;
    /**
     * Shipping region
     *
     * @var string|null
     */
    protected $region;
    /**
     * Shipping city
     *
     * @var string|null
     */
    protected $city;
    /**
     * Shipping country
     *
     * @return string|null
     */
    public function getCountry() : ?string
    {
        return $this->country;
    }
    /**
     * Shipping country
     *
     * @param string|null $country
     *
     * @return self
     */
    public function setCountry(?string $country) : self
    {
        $this->initialized['country'] = true;
        $this->country = $country;
        return $this;
    }
    /**
     * Shipping postcode
     *
     * @return string|null
     */
    public function getPostcode() : ?string
    {
        return $this->postcode;
    }
    /**
     * Shipping postcode
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
     * Shipping street address
     *
     * @return string|null
     */
    public function getStreet() : ?string
    {
        return $this->street;
    }
    /**
     * Shipping street address
     *
     * @param string|null $street
     *
     * @return self
     */
    public function setStreet(?string $street) : self
    {
        $this->initialized['street'] = true;
        $this->street = $street;
        return $this;
    }
    /**
     * Shipping region
     *
     * @return string|null
     */
    public function getRegion() : ?string
    {
        return $this->region;
    }
    /**
     * Shipping region
     *
     * @param string|null $region
     *
     * @return self
     */
    public function setRegion(?string $region) : self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * Shipping city
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * Shipping city
     *
     * @param string|null $city
     *
     * @return self
     */
    public function setCity(?string $city) : self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
}