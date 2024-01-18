<?php

namespace Kiboko\Magento\Model;

class CatalogDataBasePriceInterface
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
     * Price.
     *
     * @var float|null
     */
    protected $price;
    /**
     * Store id.
     *
     * @var int|null
     */
    protected $storeId;
    /**
     * SKU.
     *
     * @var string|null
     */
    protected $sku;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\BasePriceInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Price.
     *
     * @return float|null
     */
    public function getPrice() : ?float
    {
        return $this->price;
    }
    /**
     * Price.
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
     * Store id.
     *
     * @return int|null
     */
    public function getStoreId() : ?int
    {
        return $this->storeId;
    }
    /**
     * Store id.
     *
     * @param int|null $storeId
     *
     * @return self
     */
    public function setStoreId(?int $storeId) : self
    {
        $this->initialized['storeId'] = true;
        $this->storeId = $storeId;
        return $this;
    }
    /**
     * SKU.
     *
     * @return string|null
     */
    public function getSku() : ?string
    {
        return $this->sku;
    }
    /**
     * SKU.
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
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}