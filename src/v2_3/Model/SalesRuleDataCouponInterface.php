<?php

namespace Kiboko\Magento\v2_3\Model;

class SalesRuleDataCouponInterface
{
    /**
     * Coupon code
     *
     * @var string
     */
    protected $code;
    /**
     * Coupon id
     *
     * @var int
     */
    protected $couponId;
    /**
     * When the coupon is created
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Expiration date
     *
     * @var string
     */
    protected $expirationDate;
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\CouponInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * The coupon is primary coupon for the rule that it's associated with
     *
     * @var bool
     */
    protected $isPrimary;
    /**
     * The id of the rule associated with the coupon
     *
     * @var int
     */
    protected $ruleId;
    /**
     * The number of times the coupon has been used
     *
     * @var int
     */
    protected $timesUsed;
    /**
     * Of coupon
     *
     * @var int
     */
    protected $type;
    /**
     * Usage limit
     *
     * @var int
     */
    protected $usageLimit;
    /**
     * Usage limit per customer
     *
     * @var int
     */
    protected $usagePerCustomer;
    /**
     * Coupon code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Coupon code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Coupon id
     *
     * @return int
     */
    public function getCouponId(): int
    {
        return $this->couponId;
    }
    /**
     * Coupon id
     *
     * @param int $couponId
     *
     * @return self
     */
    public function setCouponId(int $couponId): self
    {
        $this->couponId = $couponId;
        return $this;
    }
    /**
     * When the coupon is created
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * When the coupon is created
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Expiration date
     *
     * @return string
     */
    public function getExpirationDate(): string
    {
        return $this->expirationDate;
    }
    /**
     * Expiration date
     *
     * @param string $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(string $expirationDate): self
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\CouponInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\CouponInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * The coupon is primary coupon for the rule that it's associated with
     *
     * @return bool
     */
    public function getIsPrimary(): bool
    {
        return $this->isPrimary;
    }
    /**
     * The coupon is primary coupon for the rule that it's associated with
     *
     * @param bool $isPrimary
     *
     * @return self
     */
    public function setIsPrimary(bool $isPrimary): self
    {
        $this->isPrimary = $isPrimary;
        return $this;
    }
    /**
     * The id of the rule associated with the coupon
     *
     * @return int
     */
    public function getRuleId(): int
    {
        return $this->ruleId;
    }
    /**
     * The id of the rule associated with the coupon
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
     * The number of times the coupon has been used
     *
     * @return int
     */
    public function getTimesUsed(): int
    {
        return $this->timesUsed;
    }
    /**
     * The number of times the coupon has been used
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
     * Of coupon
     *
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }
    /**
     * Of coupon
     *
     * @param int $type
     *
     * @return self
     */
    public function setType(int $type): self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Usage limit
     *
     * @return int
     */
    public function getUsageLimit(): int
    {
        return $this->usageLimit;
    }
    /**
     * Usage limit
     *
     * @param int $usageLimit
     *
     * @return self
     */
    public function setUsageLimit(int $usageLimit): self
    {
        $this->usageLimit = $usageLimit;
        return $this;
    }
    /**
     * Usage limit per customer
     *
     * @return int
     */
    public function getUsagePerCustomer(): int
    {
        return $this->usagePerCustomer;
    }
    /**
     * Usage limit per customer
     *
     * @param int $usagePerCustomer
     *
     * @return self
     */
    public function setUsagePerCustomer(int $usagePerCustomer): self
    {
        $this->usagePerCustomer = $usagePerCustomer;
        return $this;
    }
}
