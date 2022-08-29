<?php

namespace Kiboko\Magento\v2_4\Model;

class GiftCardDataGiftcardAmountInterface
{
    /**
     *
     *
     * @var int
     */
    protected $attributeId;
    /**
     * ExtensionInterface class for @see \Magento\GiftCard\Api\Data\GiftcardAmountInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @var float
     */
    protected $value;
    /**
     *
     *
     * @var int
     */
    protected $websiteId;
    /**
     *
     *
     * @var float
     */
    protected $websiteValue;
    /**
     *
     *
     * @return int
     */
    public function getAttributeId(): int
    {
        return $this->attributeId;
    }
    /**
     *
     *
     * @param int $attributeId
     *
     * @return self
     */
    public function setAttributeId(int $attributeId): self
    {
        $this->attributeId = $attributeId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\GiftCard\Api\Data\GiftcardAmountInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\GiftCard\Api\Data\GiftcardAmountInterface
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
     *
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     *
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value): self
    {
        $this->value = $value;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getWebsiteId(): int
    {
        return $this->websiteId;
    }
    /**
     *
     *
     * @param int $websiteId
     *
     * @return self
     */
    public function setWebsiteId(int $websiteId): self
    {
        $this->websiteId = $websiteId;
        return $this;
    }
    /**
     *
     *
     * @return float
     */
    public function getWebsiteValue(): float
    {
        return $this->websiteValue;
    }
    /**
     *
     *
     * @param float $websiteValue
     *
     * @return self
     */
    public function setWebsiteValue(float $websiteValue): self
    {
        $this->websiteValue = $websiteValue;
        return $this;
    }
}
