<?php

namespace Kiboko\Magento\Model;

class InventoryApiDataStockInterface
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
     * Stock id
     *
     * @var int|null
     */
    protected $stockId;
    /**
     * Stock name
     *
     * @var string|null
     */
    protected $name;
    /**
     * TODO: temporal fix of extension classes generation during installation ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\StockInterface
     *
     * @var InventoryApiDataStockExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Stock id
     *
     * @return int|null
     */
    public function getStockId() : ?int
    {
        return $this->stockId;
    }
    /**
     * Stock id
     *
     * @param int|null $stockId
     *
     * @return self
     */
    public function setStockId(?int $stockId) : self
    {
        $this->initialized['stockId'] = true;
        $this->stockId = $stockId;
        return $this;
    }
    /**
     * Stock name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Stock name
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * TODO: temporal fix of extension classes generation during installation ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\StockInterface
     *
     * @return InventoryApiDataStockExtensionInterface|null
     */
    public function getExtensionAttributes() : ?InventoryApiDataStockExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * TODO: temporal fix of extension classes generation during installation ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\StockInterface
     *
     * @param InventoryApiDataStockExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?InventoryApiDataStockExtensionInterface $extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}