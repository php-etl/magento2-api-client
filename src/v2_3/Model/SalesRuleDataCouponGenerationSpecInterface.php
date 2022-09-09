<?php

namespace Kiboko\Magento\V2_3\Model;

class SalesRuleDataCouponGenerationSpecInterface
{
    /**
     * The delimiter
     *
     * @var string|null
     */
    protected $delimiter;
    /**
     * The spacing where the delimiter should exist
     *
     * @var int|null
     */
    protected $delimiterAtEvery;
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\CouponGenerationSpecInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Format of generated coupon code
     *
     * @var string|null
     */
    protected $format;
    /**
     * Length of coupon code
     *
     * @var int|null
     */
    protected $length;
    /**
     * The prefix
     *
     * @var string|null
     */
    protected $prefix;
    /**
     * Of coupons to generate
     *
     * @var int|null
     */
    protected $quantity;
    /**
     * The id of the rule associated with the coupon
     *
     * @var int|null
     */
    protected $ruleId;
    /**
     * The suffix
     *
     * @var string|null
     */
    protected $suffix;
    /**
     * The delimiter
     *
     * @return string|null
     */
    public function getDelimiter(): ?string
    {
        return $this->delimiter;
    }
    /**
     * The delimiter
     *
     * @param string|null $delimiter
     *
     * @return self
     */
    public function setDelimiter(?string $delimiter): self
    {
        $this->delimiter = $delimiter;
        return $this;
    }
    /**
     * The spacing where the delimiter should exist
     *
     * @return int|null
     */
    public function getDelimiterAtEvery(): ?int
    {
        return $this->delimiterAtEvery;
    }
    /**
     * The spacing where the delimiter should exist
     *
     * @param int|null $delimiterAtEvery
     *
     * @return self
     */
    public function setDelimiterAtEvery(?int $delimiterAtEvery): self
    {
        $this->delimiterAtEvery = $delimiterAtEvery;
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
    /**
     * Format of generated coupon code
     *
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }
    /**
     * Format of generated coupon code
     *
     * @param string|null $format
     *
     * @return self
     */
    public function setFormat(?string $format): self
    {
        $this->format = $format;
        return $this;
    }
    /**
     * Length of coupon code
     *
     * @return int|null
     */
    public function getLength(): ?int
    {
        return $this->length;
    }
    /**
     * Length of coupon code
     *
     * @param int|null $length
     *
     * @return self
     */
    public function setLength(?int $length): self
    {
        $this->length = $length;
        return $this;
    }
    /**
     * The prefix
     *
     * @return string|null
     */
    public function getPrefix(): ?string
    {
        return $this->prefix;
    }
    /**
     * The prefix
     *
     * @param string|null $prefix
     *
     * @return self
     */
    public function setPrefix(?string $prefix): self
    {
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * Of coupons to generate
     *
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }
    /**
     * Of coupons to generate
     *
     * @param int|null $quantity
     *
     * @return self
     */
    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * The id of the rule associated with the coupon
     *
     * @return int|null
     */
    public function getRuleId(): ?int
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
    public function setRuleId(?int $ruleId): self
    {
        $this->ruleId = $ruleId;
        return $this;
    }
    /**
     * The suffix
     *
     * @return string|null
     */
    public function getSuffix(): ?string
    {
        return $this->suffix;
    }
    /**
     * The suffix
     *
     * @param string|null $suffix
     *
     * @return self
     */
    public function setSuffix(?string $suffix): self
    {
        $this->suffix = $suffix;
        return $this;
    }
}
