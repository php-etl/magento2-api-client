<?php

namespace Kiboko\Magento\V2_1\Model;

class GiftCardDataGiftcardAmountInterface
{
    /**
     *
     *
     * @var int|null
     */
    protected $attributeId;
    /**
     * ExtensionInterface class for @see \Magento\GiftCard\Api\Data\GiftcardAmountInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @var float|null
     */
    protected $value;
    /**
     *
     *
     * @var int|null
     */
    protected $websiteId;
    /**
     *
     *
     * @var float|null
     */
    protected $websiteValue;
    /**
     *
     *
     * @return int|null
     */
    public function getAttributeId(): ?int
    {
        return $this->attributeId;
    }
    /**
     *
     *
     * @param int|null $attributeId
     *
     * @return self
     */
    public function setAttributeId(?int $attributeId): self
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
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }
    /**
     *
     *
     * @param float|null $value
     *
     * @return self
     */
    public function setValue(?float $value): self
    {
        $this->value = $value;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getWebsiteId(): ?int
    {
        return $this->websiteId;
    }
    /**
     *
     *
     * @param int|null $websiteId
     *
     * @return self
     */
    public function setWebsiteId(?int $websiteId): self
    {
        $this->websiteId = $websiteId;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getWebsiteValue(): ?float
    {
        return $this->websiteValue;
    }
    /**
     *
     *
     * @param float|null $websiteValue
     *
     * @return self
     */
    public function setWebsiteValue(?float $websiteValue): self
    {
        $this->websiteValue = $websiteValue;
        return $this;
    }
}
