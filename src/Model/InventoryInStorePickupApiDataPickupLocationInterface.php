<?php

namespace Kiboko\Magento\Model;

class InventoryInStorePickupApiDataPickupLocationInterface
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
     * Source code of Pickup Location.
     *
     * @var string|null
     */
    protected $pickupLocationCode;
    /**
     * Pickup Location name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Pickup Location contact email.
     *
     * @var string|null
     */
    protected $email;
    /**
     * Fax contact info.
     *
     * @var string|null
     */
    protected $fax;
    /**
     * Pickup Location contact name.
     *
     * @var string|null
     */
    protected $contactName;
    /**
     * Pickup Location description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Pickup Location latitude.
     *
     * @var float|null
     */
    protected $latitude;
    /**
     * Pickup Location longitude.
     *
     * @var float|null
     */
    protected $longitude;
    /**
     * Pickup Location country ID.
     *
     * @var string|null
     */
    protected $countryId;
    /**
     * Pickup Location region ID.
     *
     * @var int|null
     */
    protected $regionId;
    /**
     * Pickup Location region.
     *
     * @var string|null
     */
    protected $region;
    /**
     * Pickup Location city.
     *
     * @var string|null
     */
    protected $city;
    /**
     * Pickup Location street.
     *
     * @var string|null
     */
    protected $street;
    /**
     * Pickup Location postcode.
     *
     * @var string|null
     */
    protected $postcode;
    /**
     * Pickup Location phone.
     *
     * @var string|null
     */
    protected $phone;
    /**
     * ExtensionInterface class for @see \Magento\InventoryInStorePickupApi\Api\Data\PickupLocationInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Source code of Pickup Location.
     *
     * @return string|null
     */
    public function getPickupLocationCode() : ?string
    {
        return $this->pickupLocationCode;
    }
    /**
     * Source code of Pickup Location.
     *
     * @param string|null $pickupLocationCode
     *
     * @return self
     */
    public function setPickupLocationCode(?string $pickupLocationCode) : self
    {
        $this->initialized['pickupLocationCode'] = true;
        $this->pickupLocationCode = $pickupLocationCode;
        return $this;
    }
    /**
     * Pickup Location name.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Pickup Location name.
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
     * Pickup Location contact email.
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * Pickup Location contact email.
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
     * Fax contact info.
     *
     * @return string|null
     */
    public function getFax() : ?string
    {
        return $this->fax;
    }
    /**
     * Fax contact info.
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
     * Pickup Location contact name.
     *
     * @return string|null
     */
    public function getContactName() : ?string
    {
        return $this->contactName;
    }
    /**
     * Pickup Location contact name.
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
     * Pickup Location description.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Pickup Location description.
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
     * Pickup Location latitude.
     *
     * @return float|null
     */
    public function getLatitude() : ?float
    {
        return $this->latitude;
    }
    /**
     * Pickup Location latitude.
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
     * Pickup Location longitude.
     *
     * @return float|null
     */
    public function getLongitude() : ?float
    {
        return $this->longitude;
    }
    /**
     * Pickup Location longitude.
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
     * Pickup Location country ID.
     *
     * @return string|null
     */
    public function getCountryId() : ?string
    {
        return $this->countryId;
    }
    /**
     * Pickup Location country ID.
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
     * Pickup Location region ID.
     *
     * @return int|null
     */
    public function getRegionId() : ?int
    {
        return $this->regionId;
    }
    /**
     * Pickup Location region ID.
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
     * Pickup Location region.
     *
     * @return string|null
     */
    public function getRegion() : ?string
    {
        return $this->region;
    }
    /**
     * Pickup Location region.
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
     * Pickup Location city.
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * Pickup Location city.
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
     * Pickup Location street.
     *
     * @return string|null
     */
    public function getStreet() : ?string
    {
        return $this->street;
    }
    /**
     * Pickup Location street.
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
     * Pickup Location postcode.
     *
     * @return string|null
     */
    public function getPostcode() : ?string
    {
        return $this->postcode;
    }
    /**
     * Pickup Location postcode.
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
     * Pickup Location phone.
     *
     * @return string|null
     */
    public function getPhone() : ?string
    {
        return $this->phone;
    }
    /**
     * Pickup Location phone.
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
     * ExtensionInterface class for @see \Magento\InventoryInStorePickupApi\Api\Data\PickupLocationInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventoryInStorePickupApi\Api\Data\PickupLocationInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}