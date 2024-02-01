<?php

namespace Kiboko\Magento\Model;

class QuoteDataAddressExtensionInterface
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
    protected $pickupLocationCode;
    /**
     * 
     *
     * @var SalesRuleDataRuleDiscountInterface[]|null
     */
    protected $discounts;
    /**
     * 
     *
     * @return string|null
     */
    public function getPickupLocationCode() : ?string
    {
        return $this->pickupLocationCode;
    }
    /**
     * 
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
     * 
     *
     * @return SalesRuleDataRuleDiscountInterface[]|null
     */
    public function getDiscounts() : ?array
    {
        return $this->discounts;
    }
    /**
     * 
     *
     * @param SalesRuleDataRuleDiscountInterface[]|null $discounts
     *
     * @return self
     */
    public function setDiscounts(?array $discounts) : self
    {
        $this->initialized['discounts'] = true;
        $this->discounts = $discounts;
        return $this;
    }
}