<?php

namespace Kiboko\Magento\V2_4\Model;

class SalesRuleDataRuleInterface
{
    /**
     * Interface ConditionInterface
     *
     * @var SalesRuleDataConditionInterface
     */
    protected $actionCondition;
    /**
     * The rule applies to shipping
     *
     * @var bool
     */
    protected $applyToShipping;
    /**
     * Interface ConditionInterface
     *
     * @var SalesRuleDataConditionInterface
     */
    protected $condition;
    /**
     * Coupon type
     *
     * @var string
     */
    protected $couponType;
    /**
     * Ids of customer groups that the rule applies to
     *
     * @var int[]
     */
    protected $customerGroupIds;
    /**
     * Description
     *
     * @var string
     */
    protected $description;
    /**
     * Discount amount
     *
     * @var float
     */
    protected $discountAmount;
    /**
     * Maximum qty discount is applied
     *
     * @var float
     */
    protected $discountQty;
    /**
     * Discount step
     *
     * @var int
     */
    protected $discountStep;
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\RuleInterface
     *
     * @var SalesRuleDataRuleExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * The start date when the coupon is active
     *
     * @var string
     */
    protected $fromDate;
    /**
     * The coupon is active
     *
     * @var bool
     */
    protected $isActive;
    /**
     * Is this field needed
     *
     * @var bool
     */
    protected $isAdvanced;
    /**
     * Whether the rule is in RSS
     *
     * @var bool
     */
    protected $isRss;
    /**
     * Rule name
     *
     * @var string
     */
    protected $name;
    /**
     * Product ids
     *
     * @var int[]
     */
    protected $productIds;
    /**
     * Rule id
     *
     * @var int
     */
    protected $ruleId;
    /**
     * Simple action of the rule
     *
     * @var string
     */
    protected $simpleAction;
    /**
     * To grant free shipping
     *
     * @var string
     */
    protected $simpleFreeShipping;
    /**
     * Sort order
     *
     * @var int
     */
    protected $sortOrder;
    /**
     * To stop rule processing
     *
     * @var bool
     */
    protected $stopRulesProcessing;
    /**
     * Display label
     *
     * @var SalesRuleDataRuleLabelInterface[]
     */
    protected $storeLabels;
    /**
     * How many times the rule has been used
     *
     * @var int
     */
    protected $timesUsed;
    /**
     * The end date when the coupon is active
     *
     * @var string
     */
    protected $toDate;
    /**
     * To auto generate coupon
     *
     * @var bool
     */
    protected $useAutoGeneration;
    /**
     * Limit of uses per coupon
     *
     * @var int
     */
    protected $usesPerCoupon;
    /**
     * Number of uses per customer
     *
     * @var int
     */
    protected $usesPerCustomer;
    /**
     * A list of websites the rule applies to
     *
     * @var int[]
     */
    protected $websiteIds;
    /**
     * Interface ConditionInterface
     *
     * @return SalesRuleDataConditionInterface
     */
    public function getActionCondition(): SalesRuleDataConditionInterface
    {
        return $this->actionCondition;
    }
    /**
     * Interface ConditionInterface
     *
     * @param SalesRuleDataConditionInterface $actionCondition
     *
     * @return self
     */
    public function setActionCondition(SalesRuleDataConditionInterface $actionCondition): self
    {
        $this->actionCondition = $actionCondition;
        return $this;
    }
    /**
     * The rule applies to shipping
     *
     * @return bool
     */
    public function getApplyToShipping(): bool
    {
        return $this->applyToShipping;
    }
    /**
     * The rule applies to shipping
     *
     * @param bool $applyToShipping
     *
     * @return self
     */
    public function setApplyToShipping(bool $applyToShipping): self
    {
        $this->applyToShipping = $applyToShipping;
        return $this;
    }
    /**
     * Interface ConditionInterface
     *
     * @return SalesRuleDataConditionInterface
     */
    public function getCondition(): SalesRuleDataConditionInterface
    {
        return $this->condition;
    }
    /**
     * Interface ConditionInterface
     *
     * @param SalesRuleDataConditionInterface $condition
     *
     * @return self
     */
    public function setCondition(SalesRuleDataConditionInterface $condition): self
    {
        $this->condition = $condition;
        return $this;
    }
    /**
     * Coupon type
     *
     * @return string
     */
    public function getCouponType(): string
    {
        return $this->couponType;
    }
    /**
     * Coupon type
     *
     * @param string $couponType
     *
     * @return self
     */
    public function setCouponType(string $couponType): self
    {
        $this->couponType = $couponType;
        return $this;
    }
    /**
     * Ids of customer groups that the rule applies to
     *
     * @return int[]
     */
    public function getCustomerGroupIds(): array
    {
        return $this->customerGroupIds;
    }
    /**
     * Ids of customer groups that the rule applies to
     *
     * @param int[] $customerGroupIds
     *
     * @return self
     */
    public function setCustomerGroupIds(array $customerGroupIds): self
    {
        $this->customerGroupIds = $customerGroupIds;
        return $this;
    }
    /**
     * Description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Discount amount
     *
     * @return float
     */
    public function getDiscountAmount(): float
    {
        return $this->discountAmount;
    }
    /**
     * Discount amount
     *
     * @param float $discountAmount
     *
     * @return self
     */
    public function setDiscountAmount(float $discountAmount): self
    {
        $this->discountAmount = $discountAmount;
        return $this;
    }
    /**
     * Maximum qty discount is applied
     *
     * @return float
     */
    public function getDiscountQty(): float
    {
        return $this->discountQty;
    }
    /**
     * Maximum qty discount is applied
     *
     * @param float $discountQty
     *
     * @return self
     */
    public function setDiscountQty(float $discountQty): self
    {
        $this->discountQty = $discountQty;
        return $this;
    }
    /**
     * Discount step
     *
     * @return int
     */
    public function getDiscountStep(): int
    {
        return $this->discountStep;
    }
    /**
     * Discount step
     *
     * @param int $discountStep
     *
     * @return self
     */
    public function setDiscountStep(int $discountStep): self
    {
        $this->discountStep = $discountStep;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\RuleInterface
     *
     * @return SalesRuleDataRuleExtensionInterface
     */
    public function getExtensionAttributes(): SalesRuleDataRuleExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\RuleInterface
     *
     * @param SalesRuleDataRuleExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(SalesRuleDataRuleExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * The start date when the coupon is active
     *
     * @return string
     */
    public function getFromDate(): string
    {
        return $this->fromDate;
    }
    /**
     * The start date when the coupon is active
     *
     * @param string $fromDate
     *
     * @return self
     */
    public function setFromDate(string $fromDate): self
    {
        $this->fromDate = $fromDate;
        return $this;
    }
    /**
     * The coupon is active
     *
     * @return bool
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }
    /**
     * The coupon is active
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * Is this field needed
     *
     * @return bool
     */
    public function getIsAdvanced(): bool
    {
        return $this->isAdvanced;
    }
    /**
     * Is this field needed
     *
     * @param bool $isAdvanced
     *
     * @return self
     */
    public function setIsAdvanced(bool $isAdvanced): self
    {
        $this->isAdvanced = $isAdvanced;
        return $this;
    }
    /**
     * Whether the rule is in RSS
     *
     * @return bool
     */
    public function getIsRss(): bool
    {
        return $this->isRss;
    }
    /**
     * Whether the rule is in RSS
     *
     * @param bool $isRss
     *
     * @return self
     */
    public function setIsRss(bool $isRss): self
    {
        $this->isRss = $isRss;
        return $this;
    }
    /**
     * Rule name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Rule name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Product ids
     *
     * @return int[]
     */
    public function getProductIds(): array
    {
        return $this->productIds;
    }
    /**
     * Product ids
     *
     * @param int[] $productIds
     *
     * @return self
     */
    public function setProductIds(array $productIds): self
    {
        $this->productIds = $productIds;
        return $this;
    }
    /**
     * Rule id
     *
     * @return int
     */
    public function getRuleId(): int
    {
        return $this->ruleId;
    }
    /**
     * Rule id
     *
     * @param int $ruleId
     *
     * @return self
     */
    public function setRuleId(int $ruleId): self
    {
        $this->ruleId = $ruleId;
        return $this;
    }
    /**
     * Simple action of the rule
     *
     * @return string
     */
    public function getSimpleAction(): string
    {
        return $this->simpleAction;
    }
    /**
     * Simple action of the rule
     *
     * @param string $simpleAction
     *
     * @return self
     */
    public function setSimpleAction(string $simpleAction): self
    {
        $this->simpleAction = $simpleAction;
        return $this;
    }
    /**
     * To grant free shipping
     *
     * @return string
     */
    public function getSimpleFreeShipping(): string
    {
        return $this->simpleFreeShipping;
    }
    /**
     * To grant free shipping
     *
     * @param string $simpleFreeShipping
     *
     * @return self
     */
    public function setSimpleFreeShipping(string $simpleFreeShipping): self
    {
        $this->simpleFreeShipping = $simpleFreeShipping;
        return $this;
    }
    /**
     * Sort order
     *
     * @return int
     */
    public function getSortOrder(): int
    {
        return $this->sortOrder;
    }
    /**
     * Sort order
     *
     * @param int $sortOrder
     *
     * @return self
     */
    public function setSortOrder(int $sortOrder): self
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     * To stop rule processing
     *
     * @return bool
     */
    public function getStopRulesProcessing(): bool
    {
        return $this->stopRulesProcessing;
    }
    /**
     * To stop rule processing
     *
     * @param bool $stopRulesProcessing
     *
     * @return self
     */
    public function setStopRulesProcessing(bool $stopRulesProcessing): self
    {
        $this->stopRulesProcessing = $stopRulesProcessing;
        return $this;
    }
    /**
     * Display label
     *
     * @return SalesRuleDataRuleLabelInterface[]
     */
    public function getStoreLabels(): array
    {
        return $this->storeLabels;
    }
    /**
     * Display label
     *
     * @param SalesRuleDataRuleLabelInterface[] $storeLabels
     *
     * @return self
     */
    public function setStoreLabels(array $storeLabels): self
    {
        $this->storeLabels = $storeLabels;
        return $this;
    }
    /**
     * How many times the rule has been used
     *
     * @return int
     */
    public function getTimesUsed(): int
    {
        return $this->timesUsed;
    }
    /**
     * How many times the rule has been used
     *
     * @param int $timesUsed
     *
     * @return self
     */
    public function setTimesUsed(int $timesUsed): self
    {
        $this->timesUsed = $timesUsed;
        return $this;
    }
    /**
     * The end date when the coupon is active
     *
     * @return string
     */
    public function getToDate(): string
    {
        return $this->toDate;
    }
    /**
     * The end date when the coupon is active
     *
     * @param string $toDate
     *
     * @return self
     */
    public function setToDate(string $toDate): self
    {
        $this->toDate = $toDate;
        return $this;
    }
    /**
     * To auto generate coupon
     *
     * @return bool
     */
    public function getUseAutoGeneration(): bool
    {
        return $this->useAutoGeneration;
    }
    /**
     * To auto generate coupon
     *
     * @param bool $useAutoGeneration
     *
     * @return self
     */
    public function setUseAutoGeneration(bool $useAutoGeneration): self
    {
        $this->useAutoGeneration = $useAutoGeneration;
        return $this;
    }
    /**
     * Limit of uses per coupon
     *
     * @return int
     */
    public function getUsesPerCoupon(): int
    {
        return $this->usesPerCoupon;
    }
    /**
     * Limit of uses per coupon
     *
     * @param int $usesPerCoupon
     *
     * @return self
     */
    public function setUsesPerCoupon(int $usesPerCoupon): self
    {
        $this->usesPerCoupon = $usesPerCoupon;
        return $this;
    }
    /**
     * Number of uses per customer
     *
     * @return int
     */
    public function getUsesPerCustomer(): int
    {
        return $this->usesPerCustomer;
    }
    /**
     * Number of uses per customer
     *
     * @param int $usesPerCustomer
     *
     * @return self
     */
    public function setUsesPerCustomer(int $usesPerCustomer): self
    {
        $this->usesPerCustomer = $usesPerCustomer;
        return $this;
    }
    /**
     * A list of websites the rule applies to
     *
     * @return int[]
     */
    public function getWebsiteIds(): array
    {
        return $this->websiteIds;
    }
    /**
     * A list of websites the rule applies to
     *
     * @param int[] $websiteIds
     *
     * @return self
     */
    public function setWebsiteIds(array $websiteIds): self
    {
        $this->websiteIds = $websiteIds;
        return $this;
    }
}
