<?php

namespace Kiboko\Magento\V2_3\Model;

class NegotiableQuoteDataNegotiableQuoteItemInterface
{
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\NegotiableQuoteItemInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Quote item id
     *
     * @var int|null
     */
    protected $itemId;
    /**
     * Quote item original discount amount
     *
     * @var float|null
     */
    protected $originalDiscountAmount;
    /**
     * Quote item original price
     *
     * @var float|null
     */
    protected $originalPrice;
    /**
     * Quote item original tax amount
     *
     * @var float|null
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
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Quote item id
     *
     * @param int|null $itemId
     *
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }
    /**
     * Quote item original discount amount
     *
     * @return float|null
     */
    public function getOriginalDiscountAmount(): ?float
    {
        return $this->originalDiscountAmount;
    }
    /**
     * Quote item original discount amount
     *
     * @param float|null $originalDiscountAmount
     *
     * @return self
     */
    public function setOriginalDiscountAmount(?float $originalDiscountAmount): self
    {
        $this->originalDiscountAmount = $originalDiscountAmount;
        return $this;
    }
    /**
     * Quote item original price
     *
     * @return float|null
     */
    public function getOriginalPrice(): ?float
    {
        return $this->originalPrice;
    }
    /**
     * Quote item original price
     *
     * @param float|null $originalPrice
     *
     * @return self
     */
    public function setOriginalPrice(?float $originalPrice): self
    {
        $this->originalPrice = $originalPrice;
        return $this;
    }
    /**
     * Quote item original tax amount
     *
     * @return float|null
     */
    public function getOriginalTaxAmount(): ?float
    {
        return $this->originalTaxAmount;
    }
    /**
     * Quote item original tax amount
     *
     * @param float|null $originalTaxAmount
     *
     * @return self
     */
    public function setOriginalTaxAmount(?float $originalTaxAmount): self
    {
        $this->originalTaxAmount = $originalTaxAmount;
        return $this;
    }
}
