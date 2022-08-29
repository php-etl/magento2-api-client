<?php

namespace Kiboko\Magento\v2_3\Model;

class SalesRuleDataCouponGenerationSpecInterface
{
    /**
     * The id of the rule associated with the coupon
     *
     * @var int
     */
    protected $ruleId;
    /**
     * Format of generated coupon code
     *
     * @var string
     */
    protected $format;
    /**
     * Of coupons to generate
     *
     * @var int
     */
    protected $quantity;
    /**
     * Length of coupon code
     *
     * @var int
     */
    protected $length;
    /**
     * The prefix
     *
     * @var string
     */
    protected $prefix;
    /**
     * The suffix
     *
     * @var string
     */
    protected $suffix;
    /**
     * The spacing where the delimiter should exist
     *
     * @var int
     */
    protected $delimiterAtEvery;
    /**
     * The delimiter
     *
     * @var string
     */
    protected $delimiter;
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\CouponGenerationSpecInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
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
     * Format of generated coupon code
     *
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }
    /**
     * Format of generated coupon code
     *
     * @param string $format
     *
     * @return self
     */
    public function setFormat(string $format): self
    {
        $this->format = $format;
        return $this;
    }
    /**
     * Of coupons to generate
     *
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }
    /**
     * Of coupons to generate
     *
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Length of coupon code
     *
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }
    /**
     * Length of coupon code
     *
     * @param int $length
     *
     * @return self
     */
    public function setLength(int $length): self
    {
        $this->length = $length;
        return $this;
    }
    /**
     * The prefix
     *
     * @return string
     */
    public function getPrefix(): string
    {
        return $this->prefix;
    }
    /**
     * The prefix
     *
     * @param string $prefix
     *
     * @return self
     */
    public function setPrefix(string $prefix): self
    {
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * The suffix
     *
     * @return string
     */
    public function getSuffix(): string
    {
        return $this->suffix;
    }
    /**
     * The suffix
     *
     * @param string $suffix
     *
     * @return self
     */
    public function setSuffix(string $suffix): self
    {
        $this->suffix = $suffix;
        return $this;
    }
    /**
     * The spacing where the delimiter should exist
     *
     * @return int
     */
    public function getDelimiterAtEvery(): int
    {
        return $this->delimiterAtEvery;
    }
    /**
     * The spacing where the delimiter should exist
     *
     * @param int $delimiterAtEvery
     *
     * @return self
     */
    public function setDelimiterAtEvery(int $delimiterAtEvery): self
    {
        $this->delimiterAtEvery = $delimiterAtEvery;
        return $this;
    }
    /**
     * The delimiter
     *
     * @return string
     */
    public function getDelimiter(): string
    {
        return $this->delimiter;
    }
    /**
     * The delimiter
     *
     * @param string $delimiter
     *
     * @return self
     */
    public function setDelimiter(string $delimiter): self
    {
        $this->delimiter = $delimiter;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\CouponGenerationSpecInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\CouponGenerationSpecInterface
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
}
