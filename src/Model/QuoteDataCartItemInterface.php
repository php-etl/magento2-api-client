<?php

namespace Kiboko\Magento\Model;

class QuoteDataCartItemInterface
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
     * Item ID. Otherwise, null.
     *
     * @var int|null
     */
    protected $itemId;
    /**
     * Product SKU. Otherwise, null.
     *
     * @var string|null
     */
    protected $sku;
    /**
     * Product quantity.
     *
     * @var float|null
     */
    protected $qty;
    /**
     * Product name. Otherwise, null.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Product price. Otherwise, null.
     *
     * @var float|null
     */
    protected $price;
    /**
     * Product type. Otherwise, null.
     *
     * @var string|null
     */
    protected $productType;
    /**
     * Quote id.
     *
     * @var string|null
     */
    protected $quoteId;
    /**
     * Product option interface
     *
     * @var QuoteDataProductOptionInterface|null
     */
    protected $productOption;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\CartItemInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Item ID. Otherwise, null.
     *
     * @return int|null
     */
    public function getItemId() : ?int
    {
        return $this->itemId;
    }
    /**
     * Item ID. Otherwise, null.
     *
     * @param int|null $itemId
     *
     * @return self
     */
    public function setItemId(?int $itemId) : self
    {
        $this->initialized['itemId'] = true;
        $this->itemId = $itemId;
        return $this;
    }
    /**
     * Product SKU. Otherwise, null.
     *
     * @return string|null
     */
    public function getSku() : ?string
    {
        return $this->sku;
    }
    /**
     * Product SKU. Otherwise, null.
     *
     * @param string|null $sku
     *
     * @return self
     */
    public function setSku(?string $sku) : self
    {
        $this->initialized['sku'] = true;
        $this->sku = $sku;
        return $this;
    }
    /**
     * Product quantity.
     *
     * @return float|null
     */
    public function getQty() : ?float
    {
        return $this->qty;
    }
    /**
     * Product quantity.
     *
     * @param float|null $qty
     *
     * @return self
     */
    public function setQty(?float $qty) : self
    {
        $this->initialized['qty'] = true;
        $this->qty = $qty;
        return $this;
    }
    /**
     * Product name. Otherwise, null.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Product name. Otherwise, null.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Product price. Otherwise, null.
     *
     * @return float|null
     */
    public function getPrice() : ?float
    {
        return $this->price;
    }
    /**
     * Product price. Otherwise, null.
     *
     * @param float|null $price
     *
     * @return self
     */
    public function setPrice(?float $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * Product type. Otherwise, null.
     *
     * @return string|null
     */
    public function getProductType() : ?string
    {
        return $this->productType;
    }
    /**
     * Product type. Otherwise, null.
     *
     * @param string|null $productType
     *
     * @return self
     */
    public function setProductType(?string $productType) : self
    {
        $this->initialized['productType'] = true;
        $this->productType = $productType;
        return $this;
    }
    /**
     * Quote id.
     *
     * @return string|null
     */
    public function getQuoteId() : ?string
    {
        return $this->quoteId;
    }
    /**
     * Quote id.
     *
     * @param string|null $quoteId
     *
     * @return self
     */
    public function setQuoteId(?string $quoteId) : self
    {
        $this->initialized['quoteId'] = true;
        $this->quoteId = $quoteId;
        return $this;
    }
    /**
     * Product option interface
     *
     * @return QuoteDataProductOptionInterface|null
     */
    public function getProductOption() : ?QuoteDataProductOptionInterface
    {
        return $this->productOption;
    }
    /**
     * Product option interface
     *
     * @param QuoteDataProductOptionInterface|null $productOption
     *
     * @return self
     */
    public function setProductOption(?QuoteDataProductOptionInterface $productOption) : self
    {
        $this->initialized['productOption'] = true;
        $this->productOption = $productOption;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\CartItemInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\CartItemInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}