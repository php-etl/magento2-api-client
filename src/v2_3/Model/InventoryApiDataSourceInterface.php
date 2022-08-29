<?php

namespace Kiboko\Magento\v2_3\Model;

class InventoryApiDataSourceInterface
{
    /**
     * Source code
     *
     * @var string
     */
    protected $sourceCode;
    /**
     * Source name
     *
     * @var string
     */
    protected $name;
    /**
     * Source email
     *
     * @var string
     */
    protected $email;
    /**
     * Source contact name
     *
     * @var string
     */
    protected $contactName;
    /**
     * If source is enabled. For new entity can be null
     *
     * @var bool
     */
    protected $enabled;
    /**
     * Source description
     *
     * @var string
     */
    protected $description;
    /**
     * Source latitude
     *
     * @var float
     */
    protected $latitude;
    /**
     * Source longitude
     *
     * @var float
     */
    protected $longitude;
    /**
     * Source country id
     *
     * @var string
     */
    protected $countryId;
    /**
     * Region id if source has registered region.
     *
     * @var int
     */
    protected $regionId;
    /**
     * Region title if source has custom region
     *
     * @var string
     */
    protected $region;
    /**
     * Source city
     *
     * @var string
     */
    protected $city;
    /**
     * Source street name
     *
     * @var string
     */
    protected $street;
    /**
     * Source post code
     *
     * @var string
     */
    protected $postcode;
    /**
     * Source phone number
     *
     * @var string
     */
    protected $phone;
    /**
     * Source fax
     *
     * @var string
     */
    protected $fax;
    /**
     * Is need to use default config
     *
     * @var bool
     */
    protected $useDefaultCarrierConfig;
    /**
     * 
     *
     * @var InventoryApiDataSourceCarrierLinkInterface[]
     */
    protected $carrierLinks;
    /**
     * ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\SourceInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Source code
     *
     * @return string
     */
    public function getSourceCode() : string
    {
        return $this->sourceCode;
    }
    /**
     * Source code
     *
     * @param string $sourceCode
     *
     * @return self
     */
    public function setSourceCode(string $sourceCode) : self
    {
        $this->sourceCode = $sourceCode;
        return $this;
    }
    /**
     * Source name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Source name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Source email
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * Source email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Source contact name
     *
     * @return string
     */
    public function getContactName() : string
    {
        return $this->contactName;
    }
    /**
     * Source contact name
     *
     * @param string $contactName
     *
     * @return self
     */
    public function setContactName(string $contactName) : self
    {
        $this->contactName = $contactName;
        return $this;
    }
    /**
     * If source is enabled. For new entity can be null
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * If source is enabled. For new entity can be null
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * Source description
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Source description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Source latitude
     *
     * @return float
     */
    public function getLatitude() : float
    {
        return $this->latitude;
    }
    /**
     * Source latitude
     *
     * @param float $latitude
     *
     * @return self
     */
    public function setLatitude(float $latitude) : self
    {
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * Source longitude
     *
     * @return float
     */
    public function getLongitude() : float
    {
        return $this->longitude;
    }
    /**
     * Source longitude
     *
     * @param float $longitude
     *
     * @return self
     */
    public function setLongitude(float $longitude) : self
    {
        $this->longitude = $longitude;
        return $this;
    }
    /**
     * Source country id
     *
     * @return string
     */
    public function getCountryId() : string
    {
        return $this->countryId;
    }
    /**
     * Source country id
     *
     * @param string $countryId
     *
     * @return self
     */
    public function setCountryId(string $countryId) : self
    {
        $this->countryId = $countryId;
        return $this;
    }
    /**
     * Region id if source has registered region.
     *
     * @return int
     */
    public function getRegionId() : int
    {
        return $this->regionId;
    }
    /**
     * Region id if source has registered region.
     *
     * @param int $regionId
     *
     * @return self
     */
    public function setRegionId(int $regionId) : self
    {
        $this->regionId = $regionId;
        return $this;
    }
    /**
     * Region title if source has custom region
     *
     * @return string
     */
    public function getRegion() : string
    {
        return $this->region;
    }
    /**
     * Region title if source has custom region
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region) : self
    {
        $this->region = $region;
        return $this;
    }
    /**
     * Source city
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * Source city
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city) : self
    {
        $this->city = $city;
        return $this;
    }
    /**
     * Source street name
     *
     * @return string
     */
    public function getStreet() : string
    {
        return $this->street;
    }
    /**
     * Source street name
     *
     * @param string $street
     *
     * @return self
     */
    public function setStreet(string $street) : self
    {
        $this->street = $street;
        return $this;
    }
    /**
     * Source post code
     *
     * @return string
     */
    public function getPostcode() : string
    {
        return $this->postcode;
    }
    /**
     * Source post code
     *
     * @param string $postcode
     *
     * @return self
     */
    public function setPostcode(string $postcode) : self
    {
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * Source phone number
     *
     * @return string
     */
    public function getPhone() : string
    {
        return $this->phone;
    }
    /**
     * Source phone number
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone) : self
    {
        $this->phone = $phone;
        return $this;
    }
    /**
     * Source fax
     *
     * @return string
     */
    public function getFax() : string
    {
        return $this->fax;
    }
    /**
     * Source fax
     *
     * @param string $fax
     *
     * @return self
     */
    public function setFax(string $fax) : self
    {
        $this->fax = $fax;
        return $this;
    }
    /**
     * Is need to use default config
     *
     * @return bool
     */
    public function getUseDefaultCarrierConfig() : bool
    {
        return $this->useDefaultCarrierConfig;
    }
    /**
     * Is need to use default config
     *
     * @param bool $useDefaultCarrierConfig
     *
     * @return self
     */
    public function setUseDefaultCarrierConfig(bool $useDefaultCarrierConfig) : self
    {
        $this->useDefaultCarrierConfig = $useDefaultCarrierConfig;
        return $this;
    }
    /**
     * 
     *
     * @return InventoryApiDataSourceCarrierLinkInterface[]
     */
    public function getCarrierLinks() : array
    {
        return $this->carrierLinks;
    }
    /**
     * 
     *
     * @param InventoryApiDataSourceCarrierLinkInterface[] $carrierLinks
     *
     * @return self
     */
    public function setCarrierLinks(array $carrierLinks) : self
    {
        $this->carrierLinks = $carrierLinks;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\SourceInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\SourceInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}