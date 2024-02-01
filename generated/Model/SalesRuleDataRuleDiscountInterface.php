<?php

namespace Kiboko\Magento\Model;

class SalesRuleDataRuleDiscountInterface
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
     * Discount Data Interface
     *
     * @var SalesRuleDataDiscountDataInterface|null
     */
    protected $discountData;
    /**
     * Rule Label
     *
     * @var string|null
     */
    protected $ruleLabel;
    /**
     * Rule ID
     *
     * @var int|null
     */
    protected $ruleId;
    /**
     * Discount Data Interface
     *
     * @return SalesRuleDataDiscountDataInterface|null
     */
    public function getDiscountData() : ?SalesRuleDataDiscountDataInterface
    {
        return $this->discountData;
    }
    /**
     * Discount Data Interface
     *
     * @param SalesRuleDataDiscountDataInterface|null $discountData
     *
     * @return self
     */
    public function setDiscountData(?SalesRuleDataDiscountDataInterface $discountData) : self
    {
        $this->initialized['discountData'] = true;
        $this->discountData = $discountData;
        return $this;
    }
    /**
     * Rule Label
     *
     * @return string|null
     */
    public function getRuleLabel() : ?string
    {
        return $this->ruleLabel;
    }
    /**
     * Rule Label
     *
     * @param string|null $ruleLabel
     *
     * @return self
     */
    public function setRuleLabel(?string $ruleLabel) : self
    {
        $this->initialized['ruleLabel'] = true;
        $this->ruleLabel = $ruleLabel;
        return $this;
    }
    /**
     * Rule ID
     *
     * @return int|null
     */
    public function getRuleId() : ?int
    {
        return $this->ruleId;
    }
    /**
     * Rule ID
     *
     * @param int|null $ruleId
     *
     * @return self
     */
    public function setRuleId(?int $ruleId) : self
    {
        $this->initialized['ruleId'] = true;
        $this->ruleId = $ruleId;
        return $this;
    }
}