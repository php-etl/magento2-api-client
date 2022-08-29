<?php

namespace Kiboko\Magento\v2_3\Model;

class InventoryLowQuantityNotificationApiDataSourceItemConfigurationInterface
{
    /**
     * Source code
     *
     * @var string
     */
    protected $sourceCode;
    /**
     * Notify stock qty
     *
     * @var float
     */
    protected $notifyStockQty;
    /**
     * SKU
     *
     * @var string
     */
    protected $sku;
    /**
     * ExtensionInterface class for @see \Magento\InventoryLowQuantityNotificationApi\Api\Data\SourceItemConfigurationInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Source code
     *
     * @return string
     */
    public function getSourceCode() : string
    {
        return $this->sourceCode;
    }
    /**
     * Source code
     *
     * @param string $sourceCode
     *
     * @return self
     */
    public function setSourceCode(string $sourceCode) : self
    {
        $this->sourceCode = $sourceCode;
        return $this;
    }
    /**
     * Notify stock qty
     *
     * @return float
     */
    public function getNotifyStockQty() : float
    {
        return $this->notifyStockQty;
    }
    /**
     * Notify stock qty
     *
     * @param float $notifyStockQty
     *
     * @return self
     */
    public function setNotifyStockQty(float $notifyStockQty) : self
    {
        $this->notifyStockQty = $notifyStockQty;
        return $this;
    }
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
     * ExtensionInterface class for @see \Magento\InventoryLowQuantityNotificationApi\Api\Data\SourceItemConfigurationInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventoryLowQuantityNotificationApi\Api\Data\SourceItemConfigurationInterface
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