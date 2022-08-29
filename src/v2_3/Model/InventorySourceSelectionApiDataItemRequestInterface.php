<?php

namespace Kiboko\Magento\v2_3\Model;

class InventorySourceSelectionApiDataItemRequestInterface
{
    /**
     * SKU
     *
     * @var string
     */
    protected $sku;
    /**
     * Product Quantity
     *
     * @var float
     */
    protected $qty;
    /**
     * ExtensionInterface class for @see \Magento\InventorySourceSelectionApi\Api\Data\ItemRequestInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * SKU
     *
     * @return string
     */
    public function getSku() : string
    {
        return $this->sku;
    }
    /**
     * SKU
     *
     * @param string $sku
     *
     * @return self
     */
    public function setSku(string $sku) : self
    {
        $this->sku = $sku;
        return $this;
    }
    /**
     * Product Quantity
     *
     * @return float
     */
    public function getQty() : float
    {
        return $this->qty;
    }
    /**
     * Product Quantity
     *
     * @param float $qty
     *
     * @return self
     */
    public function setQty(float $qty) : self
    {
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
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}