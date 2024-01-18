<?php

namespace Kiboko\Magento\Model;

class InventoryInStorePickupApiDataSearchRequestProductInfoInterface
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
     * Product SKU.
     *
     * @var string|null
     */
    protected $sku;
    /**
     * ExtensionInterface class for @see \Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\ProductInfoInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Product SKU.
     *
     * @return string|null
     */
    public function getSku() : ?string
    {
        return $this->sku;
    }
    /**
     * Product SKU.
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
     * ExtensionInterface class for @see \Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\ProductInfoInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\ProductInfoInterface
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