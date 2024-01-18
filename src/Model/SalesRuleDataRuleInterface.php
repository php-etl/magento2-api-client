<?php

namespace Kiboko\Magento\Model;

class SalesRuleDataRuleInterface
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
     * Rule id
     *
     * @var int|null
     */
    protected $ruleId;
    /**
     * Rule name
     *
     * @var string|null
     */
    protected $name;
    /**
     * Display label
     *
     * @var SalesRuleDataRuleLabelInterface[]|null
     */
    protected $storeLabels;
    /**
     * Description
     *
     * @var string|null
     */
    protected $description;
    /**
     * A list of websites the rule applies to
     *
     * @var int[]|null
     */
    protected $websiteIds;
    /**
     * Ids of customer groups that the rule applies to
     *
     * @var int[]|null
     */
    protected $customerGroupIds;
    /**
     * The start date when the coupon is active
     *
     * @var string|null
     */
    protected $fromDate;
    /**
     * The end date when the coupon is active
     *
     * @var string|null
     */
    protected $toDate;
    /**
     * Number of uses per customer
     *
     * @var int|null
     */
    protected $usesPerCustomer;
    /**
     * The coupon is active
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * Interface ConditionInterface
     *
     * @var SalesRuleDataConditionInterface|null
     */
    protected $condition;
    /**
     * Interface ConditionInterface
     *
     * @var SalesRuleDataConditionInterface|null
     */
    protected $actionCondition;
    /**
     * To stop rule processing
     *
     * @var bool|null
     */
    protected $stopRulesProcessing;
    /**
     * Is this field needed
     *
     * @var bool|null
     */
    protected $isAdvanced;
    /**
     * Product ids
     *
     * @var int[]|null
     */
    protected $productIds;
    /**
     * Sort order
     *
     * @var int|null
     */
    protected $sortOrder;
    /**
     * Simple action of the rule
     *
     * @var string|null
     */
    protected $simpleAction;
    /**
     * Discount amount
     *
     * @var float|null
     */
    protected $discountAmount;
    /**
     * Maximum qty discount is applied
     *
     * @var float|null
     */
    protected $discountQty;
    /**
     * Discount step
     *
     * @var int|null
     */
    protected $discountStep;
    /**
     * The rule applies to shipping
     *
     * @var bool|null
     */
    protected $applyToShipping;
    /**
     * How many times the rule has been used
     *
     * @var int|null
     */
    protected $timesUsed;
    /**
     * Whether the rule is in RSS
     *
     * @var bool|null
     */
    protected $isRss;
    /**
     * Coupon type
     *
     * @var string|null
     */
    protected $couponType;
    /**
     * To auto generate coupon
     *
     * @var bool|null
     */
    protected $useAutoGeneration;
    /**
     * Limit of uses per coupon
     *
     * @var int|null
     */
    protected $usesPerCoupon;
    /**
     * To grant free shipping
     *
     * @var string|null
     */
    protected $simpleFreeShipping;
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\RuleInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Rule id
     *
     * @return int|null
     */
    public function getRuleId() : ?int
    {
        return $this->ruleId;
    }
    /**
     * Rule id
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
    /**
     * Rule name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Rule name
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
     * Display label
     *
     * @return SalesRuleDataRuleLabelInterface[]|null
     */
    public function getStoreLabels() : ?array
    {
        return $this->storeLabels;
    }
    /**
     * Display label
     *
     * @param SalesRuleDataRuleLabelInterface[]|null $storeLabels
     *
     * @return self
     */
    public function setStoreLabels(?array $storeLabels) : self
    {
        $this->initialized['storeLabels'] = true;
        $this->storeLabels = $storeLabels;
        return $this;
    }
    /**
     * Description
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Description
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
     * A list of websites the rule applies to
     *
     * @return int[]|null
     */
    public function getWebsiteIds() : ?array
    {
        return $this->websiteIds;
    }
    /**
     * A list of websites the rule applies to
     *
     * @param int[]|null $websiteIds
     *
     * @return self
     */
    public function setWebsiteIds(?array $websiteIds) : self
    {
        $this->initialized['websiteIds'] = true;
        $this->websiteIds = $websiteIds;
        return $this;
    }
    /**
     * Ids of customer groups that the rule applies to
     *
     * @return int[]|null
     */
    public function getCustomerGroupIds() : ?array
    {
        return $this->customerGroupIds;
    }
    /**
     * Ids of customer groups that the rule applies to
     *
     * @param int[]|null $customerGroupIds
     *
     * @return self
     */
    public function setCustomerGroupIds(?array $customerGroupIds) : self
    {
        $this->initialized['customerGroupIds'] = true;
        $this->customerGroupIds = $customerGroupIds;
        return $this;
    }
    /**
     * The start date when the coupon is active
     *
     * @return string|null
     */
    public function getFromDate() : ?string
    {
        return $this->fromDate;
    }
    /**
     * The start date when the coupon is active
     *
     * @param string|null $fromDate
     *
     * @return self
     */
    public function setFromDate(?string $fromDate) : self
    {
        $this->initialized['fromDate'] = true;
        $this->fromDate = $fromDate;
        return $this;
    }
    /**
     * The end date when the coupon is active
     *
     * @return string|null
     */
    public function getToDate() : ?string
    {
        return $this->toDate;
    }
    /**
     * The end date when the coupon is active
     *
     * @param string|null $toDate
     *
     * @return self
     */
    public function setToDate(?string $toDate) : self
    {
        $this->initialized['toDate'] = true;
        $this->toDate = $toDate;
        return $this;
    }
    /**
     * Number of uses per customer
     *
     * @return int|null
     */
    public function getUsesPerCustomer() : ?int
    {
        return $this->usesPerCustomer;
    }
    /**
     * Number of uses per customer
     *
     * @param int|null $usesPerCustomer
     *
     * @return self
     */
    public function setUsesPerCustomer(?int $usesPerCustomer) : self
    {
        $this->initialized['usesPerCustomer'] = true;
        $this->usesPerCustomer = $usesPerCustomer;
        return $this;
    }
    /**
     * The coupon is active
     *
     * @return bool|null
     */
    public function getIsActive() : ?bool
    {
        return $this->isActive;
    }
    /**
     * The coupon is active
     *
     * @param bool|null $isActive
     *
     * @return self
     */
    public function setIsActive(?bool $isActive) : self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * Interface ConditionInterface
     *
     * @return SalesRuleDataConditionInterface|null
     */
    public function getCondition() : ?SalesRuleDataConditionInterface
    {
        return $this->condition;
    }
    /**
     * Interface ConditionInterface
     *
     * @param SalesRuleDataConditionInterface|null $condition
     *
     * @return self
     */
    public function setCondition(?SalesRuleDataConditionInterface $condition) : self
    {
        $this->initialized['condition'] = true;
        $this->condition = $condition;
        return $this;
    }
    /**
     * Interface ConditionInterface
     *
     * @return SalesRuleDataConditionInterface|null
     */
    public function getActionCondition() : ?SalesRuleDataConditionInterface
    {
        return $this->actionCondition;
    }
    /**
     * Interface ConditionInterface
     *
     * @param SalesRuleDataConditionInterface|null $actionCondition
     *
     * @return self
     */
    public function setActionCondition(?SalesRuleDataConditionInterface $actionCondition) : self
    {
        $this->initialized['actionCondition'] = true;
        $this->actionCondition = $actionCondition;
        return $this;
    }
    /**
     * To stop rule processing
     *
     * @return bool|null
     */
    public function getStopRulesProcessing() : ?bool
    {
        return $this->stopRulesProcessing;
    }
    /**
     * To stop rule processing
     *
     * @param bool|null $stopRulesProcessing
     *
     * @return self
     */
    public function setStopRulesProcessing(?bool $stopRulesProcessing) : self
    {
        $this->initialized['stopRulesProcessing'] = true;
        $this->stopRulesProcessing = $stopRulesProcessing;
        return $this;
    }
    /**
     * Is this field needed
     *
     * @return bool|null
     */
    public function getIsAdvanced() : ?bool
    {
        return $this->isAdvanced;
    }
    /**
     * Is this field needed
     *
     * @param bool|null $isAdvanced
     *
     * @return self
     */
    public function setIsAdvanced(?bool $isAdvanced) : self
    {
        $this->initialized['isAdvanced'] = true;
        $this->isAdvanced = $isAdvanced;
        return $this;
    }
    /**
     * Product ids
     *
     * @return int[]|null
     */
    public function getProductIds() : ?array
    {
        return $this->productIds;
    }
    /**
     * Product ids
     *
     * @param int[]|null $productIds
     *
     * @return self
     */
    public function setProductIds(?array $productIds) : self
    {
        $this->initialized['productIds'] = true;
        $this->productIds = $productIds;
        return $this;
    }
    /**
     * Sort order
     *
     * @return int|null
     */
    public function getSortOrder() : ?int
    {
        return $this->sortOrder;
    }
    /**
     * Sort order
     *
     * @param int|null $sortOrder
     *
     * @return self
     */
    public function setSortOrder(?int $sortOrder) : self
    {
        $this->initialized['sortOrder'] = true;
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     * Simple action of the rule
     *
     * @return string|null
     */
    public function getSimpleAction() : ?string
    {
        return $this->simpleAction;
    }
    /**
     * Simple action of the rule
     *
     * @param string|null $simpleAction
     *
     * @return self
     */
    public function setSimpleAction(?string $simpleAction) : self
    {
        $this->initialized['simpleAction'] = true;
        $this->simpleAction = $simpleAction;
        return $this;
    }
    /**
     * Discount amount
     *
     * @return float|null
     */
    public function getDiscountAmount() : ?float
    {
        return $this->discountAmount;
    }
    /**
     * Discount amount
     *
     * @param float|null $discountAmount
     *
     * @return self
     */
    public function setDiscountAmount(?float $discountAmount) : self
    {
        $this->initialized['discountAmount'] = true;
        $this->discountAmount = $discountAmount;
        return $this;
    }
    /**
     * Maximum qty discount is applied
     *
     * @return float|null
     */
    public function getDiscountQty() : ?float
    {
        return $this->discountQty;
    }
    /**
     * Maximum qty discount is applied
     *
     * @param float|null $discountQty
     *
     * @return self
     */
    public function setDiscountQty(?float $discountQty) : self
    {
        $this->initialized['discountQty'] = true;
        $this->discountQty = $discountQty;
        return $this;
    }
    /**
     * Discount step
     *
     * @return int|null
     */
    public function getDiscountStep() : ?int
    {
        return $this->discountStep;
    }
    /**
     * Discount step
     *
     * @param int|null $discountStep
     *
     * @return self
     */
    public function setDiscountStep(?int $discountStep) : self
    {
        $this->initialized['discountStep'] = true;
        $this->discountStep = $discountStep;
        return $this;
    }
    /**
     * The rule applies to shipping
     *
     * @return bool|null
     */
    public function getApplyToShipping() : ?bool
    {
        return $this->applyToShipping;
    }
    /**
     * The rule applies to shipping
     *
     * @param bool|null $applyToShipping
     *
     * @return self
     */
    public function setApplyToShipping(?bool $applyToShipping) : self
    {
        $this->initialized['applyToShipping'] = true;
        $this->applyToShipping = $applyToShipping;
        return $this;
    }
    /**
     * How many times the rule has been used
     *
     * @return int|null
     */
    public function getTimesUsed() : ?int
    {
        return $this->timesUsed;
    }
    /**
     * How many times the rule has been used
     *
     * @param int|null $timesUsed
     *
     * @return self
     */
    public function setTimesUsed(?int $timesUsed) : self
    {
        $this->initialized['timesUsed'] = true;
        $this->timesUsed = $timesUsed;
        return $this;
    }
    /**
     * Whether the rule is in RSS
     *
     * @return bool|null
     */
    public function getIsRss() : ?bool
    {
        return $this->isRss;
    }
    /**
     * Whether the rule is in RSS
     *
     * @param bool|null $isRss
     *
     * @return self
     */
    public function setIsRss(?bool $isRss) : self
    {
        $this->initialized['isRss'] = true;
        $this->isRss = $isRss;
        return $this;
    }
    /**
     * Coupon type
     *
     * @return string|null
     */
    public function getCouponType() : ?string
    {
        return $this->couponType;
    }
    /**
     * Coupon type
     *
     * @param string|null $couponType
     *
     * @return self
     */
    public function setCouponType(?string $couponType) : self
    {
        $this->initialized['couponType'] = true;
        $this->couponType = $couponType;
        return $this;
    }
    /**
     * To auto generate coupon
     *
     * @return bool|null
     */
    public function getUseAutoGeneration() : ?bool
    {
        return $this->useAutoGeneration;
    }
    /**
     * To auto generate coupon
     *
     * @param bool|null $useAutoGeneration
     *
     * @return self
     */
    public function setUseAutoGeneration(?bool $useAutoGeneration) : self
    {
        $this->initialized['useAutoGeneration'] = true;
        $this->useAutoGeneration = $useAutoGeneration;
        return $this;
    }
    /**
     * Limit of uses per coupon
     *
     * @return int|null
     */
    public function getUsesPerCoupon() : ?int
    {
        return $this->usesPerCoupon;
    }
    /**
     * Limit of uses per coupon
     *
     * @param int|null $usesPerCoupon
     *
     * @return self
     */
    public function setUsesPerCoupon(?int $usesPerCoupon) : self
    {
        $this->initialized['usesPerCoupon'] = true;
        $this->usesPerCoupon = $usesPerCoupon;
        return $this;
    }
    /**
     * To grant free shipping
     *
     * @return string|null
     */
    public function getSimpleFreeShipping() : ?string
    {
        return $this->simpleFreeShipping;
    }
    /**
     * To grant free shipping
     *
     * @param string|null $simpleFreeShipping
     *
     * @return self
     */
    public function setSimpleFreeShipping(?string $simpleFreeShipping) : self
    {
        $this->initialized['simpleFreeShipping'] = true;
        $this->simpleFreeShipping = $simpleFreeShipping;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\RuleInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\RuleInterface
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