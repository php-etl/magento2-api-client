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
     * @var SalesRuleDataRuleDiscountInterface[]|null
     */
    protected $discounts;
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