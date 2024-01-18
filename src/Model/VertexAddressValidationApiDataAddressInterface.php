<?php

namespace Kiboko\Magento\Model;

class VertexAddressValidationApiDataAddressInterface
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
     * The proper name of the city
     *
     * @var string|null
     */
    protected $city;
    /**
     * ISO 3166-1 Alpha-3 country code
     *
     * @var string|null
     */
    protected $country;
    /**
     * The proper name or the postal abbreviation of the state, province, or territory
     *
     * @var string|null
     */
    protected $mainDivision;
    /**
     * The Postal Code
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * The street address
     *
     * @var string[]|null
     */
    protected $streetAddress;
    /**
     * The name of the county
     *
     * @var string|null
     */
    protected $subDivision;
    /**
     * The proper name of the city
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * The proper name of the city
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
     * ISO 3166-1 Alpha-3 country code
     *
     * @return string|null
     */
    public function getCountry() : ?string
    {
        return $this->country;
    }
    /**
     * ISO 3166-1 Alpha-3 country code
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
     * The proper name or the postal abbreviation of the state, province, or territory
     *
     * @return string|null
     */
    public function getMainDivision() : ?string
    {
        return $this->mainDivision;
    }
    /**
     * The proper name or the postal abbreviation of the state, province, or territory
     *
     * @param string|null $mainDivision
     *
     * @return self
     */
    public function setMainDivision(?string $mainDivision) : self
    {
        $this->initialized['mainDivision'] = true;
        $this->mainDivision = $mainDivision;
        return $this;
    }
    /**
     * The Postal Code
     *
     * @return string|null
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * The Postal Code
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
     * The street address
     *
     * @return string[]|null
     */
    public function getStreetAddress() : ?array
    {
        return $this->streetAddress;
    }
    /**
     * The street address
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
     * The name of the county
     *
     * @return string|null
     */
    public function getSubDivision() : ?string
    {
        return $this->subDivision;
    }
    /**
     * The name of the county
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