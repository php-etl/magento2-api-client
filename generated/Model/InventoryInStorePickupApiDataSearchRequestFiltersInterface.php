<?php

namespace Kiboko\Magento\Model;

class InventoryInStorePickupApiDataSearchRequestFiltersInterface
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
     * Filter for Pickup Location search.
     *
     * @var InventoryInStorePickupApiDataSearchRequestFilterInterface|null
     */
    protected $country;
    /**
     * Filter for Pickup Location search.
     *
     * @var InventoryInStorePickupApiDataSearchRequestFilterInterface|null
     */
    protected $postcode;
    /**
     * Filter for Pickup Location search.
     *
     * @var InventoryInStorePickupApiDataSearchRequestFilterInterface|null
     */
    protected $region;
    /**
     * Filter for Pickup Location search.
     *
     * @var InventoryInStorePickupApiDataSearchRequestFilterInterface|null
     */
    protected $regionId;
    /**
     * Filter for Pickup Location search.
     *
     * @var InventoryInStorePickupApiDataSearchRequestFilterInterface|null
     */
    protected $city;
    /**
     * Filter for Pickup Location search.
     *
     * @var InventoryInStorePickupApiDataSearchRequestFilterInterface|null
     */
    protected $street;
    /**
     * Filter for Pickup Location search.
     *
     * @var InventoryInStorePickupApiDataSearchRequestFilterInterface|null
     */
    protected $name;
    /**
     * Filter for Pickup Location search.
     *
     * @var InventoryInStorePickupApiDataSearchRequestFilterInterface|null
     */
    protected $pickupLocationCode;
    /**
     * Filter for Pickup Location search.
     *
     * @return InventoryInStorePickupApiDataSearchRequestFilterInterface|null
     */
    public function getCountry() : ?InventoryInStorePickupApiDataSearchRequestFilterInterface
    {
        return $this->country;
    }
    /**
     * Filter for Pickup Location search.
     *
     * @param InventoryInStorePickupApiDataSearchRequestFilterInterface|null $country
     *
     * @return self
     */
    public function setCountry(?InventoryInStorePickupApiDataSearchRequestFilterInterface $country) : self
    {
        $this->initialized['country'] = true;
        $this->country = $country;
        return $this;
    }
    /**
     * Filter for Pickup Location search.
     *
     * @return InventoryInStorePickupApiDataSearchRequestFilterInterface|null
     */
    public function getPostcode() : ?InventoryInStorePickupApiDataSearchRequestFilterInterface
    {
        return $this->postcode;
    }
    /**
     * Filter for Pickup Location search.
     *
     * @param InventoryInStorePickupApiDataSearchRequestFilterInterface|null $postcode
     *
     * @return self
     */
    public function setPostcode(?InventoryInStorePickupApiDataSearchRequestFilterInterface $postcode) : self
    {
        $this->initialized['postcode'] = true;
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * Filter for Pickup Location search.
     *
     * @return InventoryInStorePickupApiDataSearchRequestFilterInterface|null
     */
    public function getRegion() : ?InventoryInStorePickupApiDataSearchRequestFilterInterface
    {
        return $this->region;
    }
    /**
     * Filter for Pickup Location search.
     *
     * @param InventoryInStorePickupApiDataSearchRequestFilterInterface|null $region
     *
     * @return self
     */
    public function setRegion(?InventoryInStorePickupApiDataSearchRequestFilterInterface $region) : self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * Filter for Pickup Location search.
     *
     * @return InventoryInStorePickupApiDataSearchRequestFilterInterface|null
     */
    public function getRegionId() : ?InventoryInStorePickupApiDataSearchRequestFilterInterface
    {
        return $this->regionId;
    }
    /**
     * Filter for Pickup Location search.
     *
     * @param InventoryInStorePickupApiDataSearchRequestFilterInterface|null $regionId
     *
     * @return self
     */
    public function setRegionId(?InventoryInStorePickupApiDataSearchRequestFilterInterface $regionId) : self
    {
        $this->initialized['regionId'] = true;
        $this->regionId = $regionId;
        return $this;
    }
    /**
     * Filter for Pickup Location search.
     *
     * @return InventoryInStorePickupApiDataSearchRequestFilterInterface|null
     */
    public function getCity() : ?InventoryInStorePickupApiDataSearchRequestFilterInterface
    {
        return $this->city;
    }
    /**
     * Filter for Pickup Location search.
     *
     * @param InventoryInStorePickupApiDataSearchRequestFilterInterface|null $city
     *
     * @return self
     */
    public function setCity(?InventoryInStorePickupApiDataSearchRequestFilterInterface $city) : self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * Filter for Pickup Location search.
     *
     * @return InventoryInStorePickupApiDataSearchRequestFilterInterface|null
     */
    public function getStreet() : ?InventoryInStorePickupApiDataSearchRequestFilterInterface
    {
        return $this->street;
    }
    /**
     * Filter for Pickup Location search.
     *
     * @param InventoryInStorePickupApiDataSearchRequestFilterInterface|null $street
     *
     * @return self
     */
    public function setStreet(?InventoryInStorePickupApiDataSearchRequestFilterInterface $street) : self
    {
        $this->initialized['street'] = true;
        $this->street = $street;
        return $this;
    }
    /**
     * Filter for Pickup Location search.
     *
     * @return InventoryInStorePickupApiDataSearchRequestFilterInterface|null
     */
    public function getName() : ?InventoryInStorePickupApiDataSearchRequestFilterInterface
    {
        return $this->name;
    }
    /**
     * Filter for Pickup Location search.
     *
     * @param InventoryInStorePickupApiDataSearchRequestFilterInterface|null $name
     *
     * @return self
     */
    public function setName(?InventoryInStorePickupApiDataSearchRequestFilterInterface $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Filter for Pickup Location search.
     *
     * @return InventoryInStorePickupApiDataSearchRequestFilterInterface|null
     */
    public function getPickupLocationCode() : ?InventoryInStorePickupApiDataSearchRequestFilterInterface
    {
        return $this->pickupLocationCode;
    }
    /**
     * Filter for Pickup Location search.
     *
     * @param InventoryInStorePickupApiDataSearchRequestFilterInterface|null $pickupLocationCode
     *
     * @return self
     */
    public function setPickupLocationCode(?InventoryInStorePickupApiDataSearchRequestFilterInterface $pickupLocationCode) : self
    {
        $this->initialized['pickupLocationCode'] = true;
        $this->pickupLocationCode = $pickupLocationCode;
        return $this;
    }
}