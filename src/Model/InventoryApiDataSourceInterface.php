<?php

namespace Kiboko\Magento\Model;

class InventoryApiDataSourceInterface
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
     * Source code
     *
     * @var string|null
     */
    protected $sourceCode;
    /**
     * Source name
     *
     * @var string|null
     */
    protected $name;
    /**
     * Source email
     *
     * @var string|null
     */
    protected $email;
    /**
     * Source contact name
     *
     * @var string|null
     */
    protected $contactName;
    /**
     * If source is enabled. For new entity can be null
     *
     * @var bool|null
     */
    protected $enabled;
    /**
     * Source description
     *
     * @var string|null
     */
    protected $description;
    /**
     * Source latitude
     *
     * @var float|null
     */
    protected $latitude;
    /**
     * Source longitude
     *
     * @var float|null
     */
    protected $longitude;
    /**
     * Source country id
     *
     * @var string|null
     */
    protected $countryId;
    /**
     * Region id if source has registered region.
     *
     * @var int|null
     */
    protected $regionId;
    /**
     * Region title if source has custom region
     *
     * @var string|null
     */
    protected $region;
    /**
     * Source city
     *
     * @var string|null
     */
    protected $city;
    /**
     * Source street name
     *
     * @var string|null
     */
    protected $street;
    /**
     * Source post code
     *
     * @var string|null
     */
    protected $postcode;
    /**
     * Source phone number
     *
     * @var string|null
     */
    protected $phone;
    /**
     * Source fax
     *
     * @var string|null
     */
    protected $fax;
    /**
     * Is need to use default config
     *
     * @var bool|null
     */
    protected $useDefaultCarrierConfig;
    /**
     * 
     *
     * @var InventoryApiDataSourceCarrierLinkInterface[]|null
     */
    protected $carrierLinks;
    /**
     * ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\SourceInterface
     *
     * @var InventoryApiDataSourceExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Source code
     *
     * @return string|null
     */
    public function getSourceCode() : ?string
    {
        return $this->sourceCode;
    }
    /**
     * Source code
     *
     * @param string|null $sourceCode
     *
     * @return self
     */
    public function setSourceCode(?string $sourceCode) : self
    {
        $this->initialized['sourceCode'] = true;
        $this->sourceCode = $sourceCode;
        return $this;
    }
    /**
     * Source name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Source name
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Source email
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * Source email
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * Source contact name
     *
     * @return string|null
     */
    public function getContactName() : ?string
    {
        return $this->contactName;
    }
    /**
     * Source contact name
     *
     * @param string|null $contactName
     *
     * @return self
     */
    public function setContactName(?string $contactName) : self
    {
        $this->initialized['contactName'] = true;
        $this->contactName = $contactName;
        return $this;
    }
    /**
     * If source is enabled. For new entity can be null
     *
     * @return bool|null
     */
    public function getEnabled() : ?bool
    {
        return $this->enabled;
    }
    /**
     * If source is enabled. For new entity can be null
     *
     * @param bool|null $enabled
     *
     * @return self
     */
    public function setEnabled(?bool $enabled) : self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * Source description
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Source description
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Source latitude
     *
     * @return float|null
     */
    public function getLatitude() : ?float
    {
        return $this->latitude;
    }
    /**
     * Source latitude
     *
     * @param float|null $latitude
     *
     * @return self
     */
    public function setLatitude(?float $latitude) : self
    {
        $this->initialized['latitude'] = true;
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * Source longitude
     *
     * @return float|null
     */
    public function getLongitude() : ?float
    {
        return $this->longitude;
    }
    /**
     * Source longitude
     *
     * @param float|null $longitude
     *
     * @return self
     */
    public function setLongitude(?float $longitude) : self
    {
        $this->initialized['longitude'] = true;
        $this->longitude = $longitude;
        return $this;
    }
    /**
     * Source country id
     *
     * @return string|null
     */
    public function getCountryId() : ?string
    {
        return $this->countryId;
    }
    /**
     * Source country id
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
     * Region id if source has registered region.
     *
     * @return int|null
     */
    public function getRegionId() : ?int
    {
        return $this->regionId;
    }
    /**
     * Region id if source has registered region.
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
     * Region title if source has custom region
     *
     * @return string|null
     */
    public function getRegion() : ?string
    {
        return $this->region;
    }
    /**
     * Region title if source has custom region
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
     * Source city
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * Source city
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
     * Source street name
     *
     * @return string|null
     */
    public function getStreet() : ?string
    {
        return $this->street;
    }
    /**
     * Source street name
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
     * Source post code
     *
     * @return string|null
     */
    public function getPostcode() : ?string
    {
        return $this->postcode;
    }
    /**
     * Source post code
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
     * Source phone number
     *
     * @return string|null
     */
    public function getPhone() : ?string
    {
        return $this->phone;
    }
    /**
     * Source phone number
     *
     * @param string|null $phone
     *
     * @return self
     */
    public function setPhone(?string $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * Source fax
     *
     * @return string|null
     */
    public function getFax() : ?string
    {
        return $this->fax;
    }
    /**
     * Source fax
     *
     * @param string|null $fax
     *
     * @return self
     */
    public function setFax(?string $fax) : self
    {
        $this->initialized['fax'] = true;
        $this->fax = $fax;
        return $this;
    }
    /**
     * Is need to use default config
     *
     * @return bool|null
     */
    public function getUseDefaultCarrierConfig() : ?bool
    {
        return $this->useDefaultCarrierConfig;
    }
    /**
     * Is need to use default config
     *
     * @param bool|null $useDefaultCarrierConfig
     *
     * @return self
     */
    public function setUseDefaultCarrierConfig(?bool $useDefaultCarrierConfig) : self
    {
        $this->initialized['useDefaultCarrierConfig'] = true;
        $this->useDefaultCarrierConfig = $useDefaultCarrierConfig;
        return $this;
    }
    /**
     * 
     *
     * @return InventoryApiDataSourceCarrierLinkInterface[]|null
     */
    public function getCarrierLinks() : ?array
    {
        return $this->carrierLinks;
    }
    /**
     * 
     *
     * @param InventoryApiDataSourceCarrierLinkInterface[]|null $carrierLinks
     *
     * @return self
     */
    public function setCarrierLinks(?array $carrierLinks) : self
    {
        $this->initialized['carrierLinks'] = true;
        $this->carrierLinks = $carrierLinks;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\SourceInterface
     *
     * @return InventoryApiDataSourceExtensionInterface|null
     */
    public function getExtensionAttributes() : ?InventoryApiDataSourceExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\SourceInterface
     *
     * @param InventoryApiDataSourceExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?InventoryApiDataSourceExtensionInterface $extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}