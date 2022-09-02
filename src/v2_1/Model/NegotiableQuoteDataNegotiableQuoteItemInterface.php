<?php

namespace Kiboko\Magento\V2_1\Model;

class NegotiableQuoteDataNegotiableQuoteItemInterface
{
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\NegotiableQuoteItemInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Quote item id
     *
     * @var int
     */
    protected $itemId;
    /**
     * Quote item original discount amount
     *
     * @var float
     */
    protected $originalDiscountAmount;
    /**
     * Quote item original price
     *
     * @var float
     */
    protected $originalPrice;
    /**
     * Quote item original tax amount
     *
     * @var float
     */
    protected $originalTaxAmount;
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\NegotiableQuoteItemInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\NegotiableQuoteItemInterface
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
     * Quote item id
     *
     * @return int
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }
    /**
     * Quote item id
     *
     * @param int $itemId
     *
     * @return self
     */
    public function setItemId(int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }
    /**
     * Quote item original discount amount
     *
     * @return float
     */
    public function getOriginalDiscountAmount(): float
    {
        return $this->originalDiscountAmount;
    }
    /**
     * Quote item original discount amount
     *
     * @param float $originalDiscountAmount
     *
     * @return self
     */
    public function setOriginalDiscountAmount(float $originalDiscountAmount): self
    {
        $this->originalDiscountAmount = $originalDiscountAmount;
        return $this;
    }
    /**
     * Quote item original price
     *
     * @return float
     */
    public function getOriginalPrice(): float
    {
        return $this->originalPrice;
    }
    /**
     * Quote item original price
     *
     * @param float $originalPrice
     *
     * @return self
     */
    public function setOriginalPrice(float $originalPrice): self
    {
        $this->originalPrice = $originalPrice;
        return $this;
    }
    /**
     * Quote item original tax amount
     *
     * @return float
     */
    public function getOriginalTaxAmount(): float
    {
        return $this->originalTaxAmount;
    }
    /**
     * Quote item original tax amount
     *
     * @param float $originalTaxAmount
     *
     * @return self
     */
    public function setOriginalTaxAmount(float $originalTaxAmount): self
    {
        $this->originalTaxAmount = $originalTaxAmount;
        return $this;
    }
}
