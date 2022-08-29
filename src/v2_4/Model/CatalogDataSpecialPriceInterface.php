<?php

namespace Kiboko\Magento\v2_4\Model;

class CatalogDataSpecialPriceInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\SpecialPriceInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Product special price value.
     *
     * @var float
     */
    protected $price;
    /**
     * Start date for special price in Y-m-d H:i:s format.
     *
     * @var string
     */
    protected $priceFrom;
    /**
     * End date for special price in Y-m-d H:i:s format.
     *
     * @var string
     */
    protected $priceTo;
    /**
     * SKU of product, that contains special price value.
     *
     * @var string
     */
    protected $sku;
    /**
     * ID of store, that contains special price value.
     *
     * @var int
     */
    protected $storeId;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\SpecialPriceInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\SpecialPriceInterface
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
     * Product special price value.
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
    /**
     * Product special price value.
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
     * Start date for special price in Y-m-d H:i:s format.
     *
     * @return string
     */
    public function getPriceFrom(): string
    {
        return $this->priceFrom;
    }
    /**
     * Start date for special price in Y-m-d H:i:s format.
     *
     * @param string $priceFrom
     *
     * @return self
     */
    public function setPriceFrom(string $priceFrom): self
    {
        $this->priceFrom = $priceFrom;
        return $this;
    }
    /**
     * End date for special price in Y-m-d H:i:s format.
     *
     * @return string
     */
    public function getPriceTo(): string
    {
        return $this->priceTo;
    }
    /**
     * End date for special price in Y-m-d H:i:s format.
     *
     * @param string $priceTo
     *
     * @return self
     */
    public function setPriceTo(string $priceTo): self
    {
        $this->priceTo = $priceTo;
        return $this;
    }
    /**
     * SKU of product, that contains special price value.
     *
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }
    /**
     * SKU of product, that contains special price value.
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
     * ID of store, that contains special price value.
     *
     * @return int
     */
    public function getStoreId(): int
    {
        return $this->storeId;
    }
    /**
     * ID of store, that contains special price value.
     *
     * @param int $storeId
     *
     * @return self
     */
    public function setStoreId(int $storeId): self
    {
        $this->storeId = $storeId;
        return $this;
    }
}
