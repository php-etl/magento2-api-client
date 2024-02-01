<?php

namespace Kiboko\Magento\Model;

class InventorySourceSelectionApiDataInventoryRequestInterface
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
     * Stock Id
     *
     * @var int|null
     */
    protected $stockId;
    /**
     * Items
     *
     * @var InventorySourceSelectionApiDataItemRequestInterface[]|null
     */
    protected $items;
    /**
     * ExtensionInterface class for @see \Magento\InventorySourceSelectionApi\Api\Data\InventoryRequestInterface
     *
     * @var InventorySourceSelectionApiDataInventoryRequestExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Stock Id
     *
     * @return int|null
     */
    public function getStockId() : ?int
    {
        return $this->stockId;
    }
    /**
     * Stock Id
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
     * Items
     *
     * @return InventorySourceSelectionApiDataItemRequestInterface[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Items
     *
     * @param InventorySourceSelectionApiDataItemRequestInterface[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items) : self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventorySourceSelectionApi\Api\Data\InventoryRequestInterface
     *
     * @return InventorySourceSelectionApiDataInventoryRequestExtensionInterface|null
     */
    public function getExtensionAttributes() : ?InventorySourceSelectionApiDataInventoryRequestExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventorySourceSelectionApi\Api\Data\InventoryRequestInterface
     *
     * @param InventorySourceSelectionApiDataInventoryRequestExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?InventorySourceSelectionApiDataInventoryRequestExtensionInterface $extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}