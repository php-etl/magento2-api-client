<?php

namespace Kiboko\Magento\v2_2\Model;

class QuoteDataCartItemInterface
{
    /**
     * Item ID. Otherwise, null.
     *
     * @var int
     */
    protected $itemId;
    /**
     * Product SKU. Otherwise, null.
     *
     * @var string
     */
    protected $sku;
    /**
     * Product quantity.
     *
     * @var float
     */
    protected $qty;
    /**
     * Product name. Otherwise, null.
     *
     * @var string
     */
    protected $name;
    /**
     * Product price. Otherwise, null.
     *
     * @var float
     */
    protected $price;
    /**
     * Product type. Otherwise, null.
     *
     * @var string
     */
    protected $productType;
    /**
     * Quote id.
     *
     * @var string
     */
    protected $quoteId;
    /**
     * Product option interface
     *
     * @var QuoteDataProductOptionInterface
     */
    protected $productOption;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\CartItemInterface
     *
     * @var QuoteDataCartItemExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Item ID. Otherwise, null.
     *
     * @return int
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }
    /**
     * Item ID. Otherwise, null.
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
     * Product SKU. Otherwise, null.
     *
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }
    /**
     * Product SKU. Otherwise, null.
     *
     * @param string $sku
     *
     * @return self
     */
    public function setSku(string $sku): self
    {
        $this->sku = $sku;
        return $this;
    }
    /**
     * Product quantity.
     *
     * @return float
     */
    public function getQty(): float
    {
        return $this->qty;
    }
    /**
     * Product quantity.
     *
     * @param float $qty
     *
     * @return self
     */
    public function setQty(float $qty): self
    {
        $this->qty = $qty;
        return $this;
    }
    /**
     * Product name. Otherwise, null.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Product name. Otherwise, null.
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
     * Product price. Otherwise, null.
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
    /**
     * Product price. Otherwise, null.
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }
    /**
     * Product type. Otherwise, null.
     *
     * @return string
     */
    public function getProductType(): string
    {
        return $this->productType;
    }
    /**
     * Product type. Otherwise, null.
     *
     * @param string $productType
     *
     * @return self
     */
    public function setProductType(string $productType): self
    {
        $this->productType = $productType;
        return $this;
    }
    /**
     * Quote id.
     *
     * @return string
     */
    public function getQuoteId(): string
    {
        return $this->quoteId;
    }
    /**
     * Quote id.
     *
     * @param string $quoteId
     *
     * @return self
     */
    public function setQuoteId(string $quoteId): self
    {
        $this->quoteId = $quoteId;
        return $this;
    }
    /**
     * Product option interface
     *
     * @return QuoteDataProductOptionInterface
     */
    public function getProductOption(): QuoteDataProductOptionInterface
    {
        return $this->productOption;
    }
    /**
     * Product option interface
     *
     * @param QuoteDataProductOptionInterface $productOption
     *
     * @return self
     */
    public function setProductOption(QuoteDataProductOptionInterface $productOption): self
    {
        $this->productOption = $productOption;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\CartItemInterface
     *
     * @return QuoteDataCartItemExtensionInterface
     */
    public function getExtensionAttributes(): QuoteDataCartItemExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\CartItemInterface
     *
     * @param QuoteDataCartItemExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(QuoteDataCartItemExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}