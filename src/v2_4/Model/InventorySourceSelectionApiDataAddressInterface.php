<?php

namespace Kiboko\Magento\v2_4\Model;

class InventorySourceSelectionApiDataAddressInterface
{
    /**
     * Shipping country
     *
     * @var string
     */
    protected $country;
    /**
     * Shipping postcode
     *
     * @var string
     */
    protected $postcode;
    /**
     * Shipping street address
     *
     * @var string
     */
    protected $street;
    /**
     * Shipping region
     *
     * @var string
     */
    protected $region;
    /**
     * Shipping city
     *
     * @var string
     */
    protected $city;
    /**
     * Shipping country
     *
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }
    /**
     * Shipping country
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->country = $country;
        return $this;
    }
    /**
     * Shipping postcode
     *
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }
    /**
     * Shipping postcode
     *
     * @param string $postcode
     *
     * @return self
     */
    public function setPostcode(string $postcode): self
    {
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * Shipping street address
     *
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }
    /**
     * Shipping street address
     *
     * @param string $street
     *
     * @return self
     */
    public function setStreet(string $street): self
    {
        $this->street = $street;
        return $this;
    }
    /**
     * Shipping region
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * Shipping region
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->region = $region;
        return $this;
    }
    /**
     * Shipping city
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * Shipping city
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city): self
    {
        $this->city = $city;
        return $this;
    }
}
