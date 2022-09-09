<?php

namespace Kiboko\Magento\V2_1\Model;

class CatalogDataSpecialPriceInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\SpecialPriceInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Product special price value.
     *
     * @var float|null
     */
    protected $price;
    /**
     * Start date for special price in Y-m-d H:i:s format.
     *
     * @var string|null
     */
    protected $priceFrom;
    /**
     * End date for special price in Y-m-d H:i:s format.
     *
     * @var string|null
     */
    protected $priceTo;
    /**
     * SKU of product, that contains special price value.
     *
     * @var string|null
     */
    protected $sku;
    /**
     * ID of store, that contains special price value.
     *
     * @var int|null
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
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Product special price value.
     *
     * @param float|null $price
     *
     * @return self
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;
        return $this;
    }
    /**
     * Start date for special price in Y-m-d H:i:s format.
     *
     * @return string|null
     */
    public function getPriceFrom(): ?string
    {
        return $this->priceFrom;
    }
    /**
     * Start date for special price in Y-m-d H:i:s format.
     *
     * @param string|null $priceFrom
     *
     * @return self
     */
    public function setPriceFrom(?string $priceFrom): self
    {
        $this->priceFrom = $priceFrom;
        return $this;
    }
    /**
     * End date for special price in Y-m-d H:i:s format.
     *
     * @return string|null
     */
    public function getPriceTo(): ?string
    {
        return $this->priceTo;
    }
    /**
     * End date for special price in Y-m-d H:i:s format.
     *
     * @param string|null $priceTo
     *
     * @return self
     */
    public function setPriceTo(?string $priceTo): self
    {
        $this->priceTo = $priceTo;
        return $this;
    }
    /**
     * SKU of product, that contains special price value.
     *
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }
    /**
     * SKU of product, that contains special price value.
     *
     * @param string|null $sku
     *
     * @return self
     */
    public function setSku(?string $sku): self
    {
        $this->sku = $sku;
        return $this;
    }
    /**
     * ID of store, that contains special price value.
     *
     * @return int|null
     */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }
    /**
     * ID of store, that contains special price value.
     *
     * @param int|null $storeId
     *
     * @return self
     */
    public function setStoreId(?int $storeId): self
    {
        $this->storeId = $storeId;
        return $this;
    }
}
