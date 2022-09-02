<?php

namespace Kiboko\Magento\V2_2\Model;

class CatalogDataBasePriceInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\BasePriceInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Price.
     *
     * @var float
     */
    protected $price;
    /**
     * SKU.
     *
     * @var string
     */
    protected $sku;
    /**
     * Store id.
     *
     * @var int
     */
    protected $storeId;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\BasePriceInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\BasePriceInterface
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
     * Price.
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
    /**
     * Price.
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
     * SKU.
     *
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }
    /**
     * SKU.
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
     * Store id.
     *
     * @return int
     */
    public function getStoreId(): int
    {
        return $this->storeId;
    }
    /**
     * Store id.
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
