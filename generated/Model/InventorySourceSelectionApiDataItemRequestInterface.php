<?php

namespace Kiboko\Magento\Model;

class InventorySourceSelectionApiDataItemRequestInterface
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
     * SKU
     *
     * @var string|null
     */
    protected $sku;
    /**
     * Product Quantity
     *
     * @var float|null
     */
    protected $qty;
    /**
     * ExtensionInterface class for @see \Magento\InventorySourceSelectionApi\Api\Data\ItemRequestInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * SKU
     *
     * @return string|null
     */
    public function getSku() : ?string
    {
        return $this->sku;
    }
    /**
     * SKU
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
     * Product Quantity
     *
     * @return float|null
     */
    public function getQty() : ?float
    {
        return $this->qty;
    }
    /**
     * Product Quantity
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
     * ExtensionInterface class for @see \Magento\InventorySourceSelectionApi\Api\Data\ItemRequestInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventorySourceSelectionApi\Api\Data\ItemRequestInterface
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