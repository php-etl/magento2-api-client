<?php

namespace Kiboko\Magento\Model;

class VertexAddressValidationApiDataCleansedAddressInterface
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
    protected $city;
    /**
     * 
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $countryName;
    /**
     * 
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * 
     *
     * @var int|null
     */
    protected $regionId;
    /**
     * 
     *
     * @var string|null
     */
    protected $regionName;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $streetAddress;
    /**
     * The regional sub division, such as a county or parish
     *
     * @var string|null
     */
    protected $subDivision;
    /**
     * 
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * 
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
    /**
     * 
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * 
     *
     * @param string|null $countryCode
     *
     * @return self
     */
    public function setCountryCode(?string $countryCode) : self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCountryName() : ?string
    {
        return $this->countryName;
    }
    /**
     * 
     *
     * @param string|null $countryName
     *
     * @return self
     */
    public function setCountryName(?string $countryName) : self
    {
        $this->initialized['countryName'] = true;
        $this->countryName = $countryName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * 
     *
     * @param string|null $postalCode
     *
     * @return self
     */
    public function setPostalCode(?string $postalCode) : self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRegionId() : ?int
    {
        return $this->regionId;
    }
    /**
     * 
     *
     * @param int|null $regionId
     *
     * @return self
     */
    public function setRegionId(?int $regionId) : self
    {
        $this->initialized['regionId'] = true;
        $this->regionId = $regionId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRegionName() : ?string
    {
        return $this->regionName;
    }
    /**
     * 
     *
     * @param string|null $regionName
     *
     * @return self
     */
    public function setRegionName(?string $regionName) : self
    {
        $this->initialized['regionName'] = true;
        $this->regionName = $regionName;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getStreetAddress() : ?array
    {
        return $this->streetAddress;
    }
    /**
     * 
     *
     * @param string[]|null $streetAddress
     *
     * @return self
     */
    public function setStreetAddress(?array $streetAddress) : self
    {
        $this->initialized['streetAddress'] = true;
        $this->streetAddress = $streetAddress;
        return $this;
    }
    /**
     * The regional sub division, such as a county or parish
     *
     * @return string|null
     */
    public function getSubDivision() : ?string
    {
        return $this->subDivision;
    }
    /**
     * The regional sub division, such as a county or parish
     *
     * @param string|null $subDivision
     *
     * @return self
     */
    public function setSubDivision(?string $subDivision) : self
    {
        $this->initialized['subDivision'] = true;
        $this->subDivision = $subDivision;
        return $this;
    }
}