<?php

namespace Kiboko\Magento\Model;

class SalesRuleDataCouponInterface
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
     * Coupon id
     *
     * @var int|null
     */
    protected $couponId;
    /**
     * The id of the rule associated with the coupon
     *
     * @var int|null
     */
    protected $ruleId;
    /**
     * Coupon code
     *
     * @var string|null
     */
    protected $code;
    /**
     * Usage limit
     *
     * @var int|null
     */
    protected $usageLimit;
    /**
     * Usage limit per customer
     *
     * @var int|null
     */
    protected $usagePerCustomer;
    /**
     * The number of times the coupon has been used
     *
     * @var int|null
     */
    protected $timesUsed;
    /**
     * Expiration date
     *
     * @var string|null
     */
    protected $expirationDate;
    /**
     * The coupon is primary coupon for the rule that it's associated with
     *
     * @var bool|null
     */
    protected $isPrimary;
    /**
     * When the coupon is created
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Of coupon
     *
     * @var int|null
     */
    protected $type;
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\CouponInterface
     *
     * @var SalesRuleDataCouponExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Coupon id
     *
     * @return int|null
     */
    public function getCouponId() : ?int
    {
        return $this->couponId;
    }
    /**
     * Coupon id
     *
     * @param int|null $couponId
     *
     * @return self
     */
    public function setCouponId(?int $couponId) : self
    {
        $this->initialized['couponId'] = true;
        $this->couponId = $couponId;
        return $this;
    }
    /**
     * The id of the rule associated with the coupon
     *
     * @return int|null
     */
    public function getRuleId() : ?int
    {
        return $this->ruleId;
    }
    /**
     * The id of the rule associated with the coupon
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
     * Coupon code
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Coupon code
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Usage limit
     *
     * @return int|null
     */
    public function getUsageLimit() : ?int
    {
        return $this->usageLimit;
    }
    /**
     * Usage limit
     *
     * @param int|null $usageLimit
     *
     * @return self
     */
    public function setUsageLimit(?int $usageLimit) : self
    {
        $this->initialized['usageLimit'] = true;
        $this->usageLimit = $usageLimit;
        return $this;
    }
    /**
     * Usage limit per customer
     *
     * @return int|null
     */
    public function getUsagePerCustomer() : ?int
    {
        return $this->usagePerCustomer;
    }
    /**
     * Usage limit per customer
     *
     * @param int|null $usagePerCustomer
     *
     * @return self
     */
    public function setUsagePerCustomer(?int $usagePerCustomer) : self
    {
        $this->initialized['usagePerCustomer'] = true;
        $this->usagePerCustomer = $usagePerCustomer;
        return $this;
    }
    /**
     * The number of times the coupon has been used
     *
     * @return int|null
     */
    public function getTimesUsed() : ?int
    {
        return $this->timesUsed;
    }
    /**
     * The number of times the coupon has been used
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
     * Expiration date
     *
     * @return string|null
     */
    public function getExpirationDate() : ?string
    {
        return $this->expirationDate;
    }
    /**
     * Expiration date
     *
     * @param string|null $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(?string $expirationDate) : self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * The coupon is primary coupon for the rule that it's associated with
     *
     * @return bool|null
     */
    public function getIsPrimary() : ?bool
    {
        return $this->isPrimary;
    }
    /**
     * The coupon is primary coupon for the rule that it's associated with
     *
     * @param bool|null $isPrimary
     *
     * @return self
     */
    public function setIsPrimary(?bool $isPrimary) : self
    {
        $this->initialized['isPrimary'] = true;
        $this->isPrimary = $isPrimary;
        return $this;
    }
    /**
     * When the coupon is created
     *
     * @return string|null
     */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * When the coupon is created
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Of coupon
     *
     * @return int|null
     */
    public function getType() : ?int
    {
        return $this->type;
    }
    /**
     * Of coupon
     *
     * @param int|null $type
     *
     * @return self
     */
    public function setType(?int $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\CouponInterface
     *
     * @return SalesRuleDataCouponExtensionInterface|null
     */
    public function getExtensionAttributes() : ?SalesRuleDataCouponExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\CouponInterface
     *
     * @param SalesRuleDataCouponExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?SalesRuleDataCouponExtensionInterface $extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}