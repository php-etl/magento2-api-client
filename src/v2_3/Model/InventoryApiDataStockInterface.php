<?php

namespace Kiboko\Magento\v2_3\Model;

class InventoryApiDataStockInterface
{
    /**
     * Stock id
     *
     * @var int
     */
    protected $stockId;
    /**
     * Stock name
     *
     * @var string
     */
    protected $name;
    /**
     * TODO: temporal fix of extension classes generation during installation ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\StockInterface
     *
     * @var InventoryApiDataStockExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Stock id
     *
     * @return int
     */
    public function getStockId() : int
    {
        return $this->stockId;
    }
    /**
     * Stock id
     *
     * @param int $stockId
     *
     * @return self
     */
    public function setStockId(int $stockId) : self
    {
        $this->stockId = $stockId;
        return $this;
    }
    /**
     * Stock name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Stock name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * TODO: temporal fix of extension classes generation during installation ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\StockInterface
     *
     * @return InventoryApiDataStockExtensionInterface
     */
    public function getExtensionAttributes() : InventoryApiDataStockExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * TODO: temporal fix of extension classes generation during installation ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\StockInterface
     *
     * @param InventoryApiDataStockExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(InventoryApiDataStockExtensionInterface $extensionAttributes) : self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}