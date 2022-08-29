<?php

namespace Kiboko\Magento\v2_4\Model;

class InventorySourceSelectionApiDataInventoryRequestInterface
{
    /**
     * Stock Id
     *
     * @var int
     */
    protected $stockId;
    /**
     * Items
     *
     * @var InventorySourceSelectionApiDataItemRequestInterface[]
     */
    protected $items;
    /**
     * ExtensionInterface class for @see \Magento\InventorySourceSelectionApi\Api\Data\InventoryRequestInterface
     *
     * @var InventorySourceSelectionApiDataInventoryRequestExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Stock Id
     *
     * @return int
     */
    public function getStockId(): int
    {
        return $this->stockId;
    }
    /**
     * Stock Id
     *
     * @param int $stockId
     *
     * @return self
     */
    public function setStockId(int $stockId): self
    {
        $this->stockId = $stockId;
        return $this;
    }
    /**
     * Items
     *
     * @return InventorySourceSelectionApiDataItemRequestInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * Items
     *
     * @param InventorySourceSelectionApiDataItemRequestInterface[] $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventorySourceSelectionApi\Api\Data\InventoryRequestInterface
     *
     * @return InventorySourceSelectionApiDataInventoryRequestExtensionInterface
     */
    public function getExtensionAttributes(): InventorySourceSelectionApiDataInventoryRequestExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventorySourceSelectionApi\Api\Data\InventoryRequestInterface
     *
     * @param InventorySourceSelectionApiDataInventoryRequestExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(InventorySourceSelectionApiDataInventoryRequestExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
