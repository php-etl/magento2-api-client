<?php

namespace Kiboko\Magento\Model;

class InventoryLowQuantityNotificationApiDataSourceItemConfigurationInterface
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
     * Source code
     *
     * @var string|null
     */
    protected $sourceCode;
    /**
     * Notify stock qty
     *
     * @var float|null
     */
    protected $notifyStockQty;
    /**
     * SKU
     *
     * @var string|null
     */
    protected $sku;
    /**
     * ExtensionInterface class for @see \Magento\InventoryLowQuantityNotificationApi\Api\Data\SourceItemConfigurationInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Source code
     *
     * @return string|null
     */
    public function getSourceCode() : ?string
    {
        return $this->sourceCode;
    }
    /**
     * Source code
     *
     * @param string|null $sourceCode
     *
     * @return self
     */
    public function setSourceCode(?string $sourceCode) : self
    {
        $this->initialized['sourceCode'] = true;
        $this->sourceCode = $sourceCode;
        return $this;
    }
    /**
     * Notify stock qty
     *
     * @return float|null
     */
    public function getNotifyStockQty() : ?float
    {
        return $this->notifyStockQty;
    }
    /**
     * Notify stock qty
     *
     * @param float|null $notifyStockQty
     *
     * @return self
     */
    public function setNotifyStockQty(?float $notifyStockQty) : self
    {
        $this->initialized['notifyStockQty'] = true;
        $this->notifyStockQty = $notifyStockQty;
        return $this;
    }
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
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}