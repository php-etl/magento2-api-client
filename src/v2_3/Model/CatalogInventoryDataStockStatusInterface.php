<?php

namespace Kiboko\Magento\V2_3\Model;

class CatalogInventoryDataStockStatusInterface
{
    /**
     * ExtensionInterface class for @see \Magento\CatalogInventory\Api\Data\StockStatusInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @var int|null
     */
    protected $productId;
    /**
     *
     *
     * @var int|null
     */
    protected $qty;
    /**
     *
     *
     * @var int|null
     */
    protected $stockId;
    /**
     * Interface StockItem
     *
     * @var CatalogInventoryDataStockItemInterface|null
     */
    protected $stockItem;
    /**
     *
     *
     * @var int|null
     */
    protected $stockStatus;
    /**
     * ExtensionInterface class for @see \Magento\CatalogInventory\Api\Data\StockStatusInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\CatalogInventory\Api\Data\StockStatusInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }
    /**
     *
     *
     * @param int|null $productId
     *
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getQty(): ?int
    {
        return $this->qty;
    }
    /**
     *
     *
     * @param int|null $qty
     *
     * @return self
     */
    public function setQty(?int $qty): self
    {
        $this->qty = $qty;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getStockId(): ?int
    {
        return $this->stockId;
    }
    /**
     *
     *
     * @param int|null $stockId
     *
     * @return self
     */
    public function setStockId(?int $stockId): self
    {
        $this->stockId = $stockId;
        return $this;
    }
    /**
     * Interface StockItem
     *
     * @return CatalogInventoryDataStockItemInterface|null
     */
    public function getStockItem(): ?CatalogInventoryDataStockItemInterface
    {
        return $this->stockItem;
    }
    /**
     * Interface StockItem
     *
     * @param CatalogInventoryDataStockItemInterface|null $stockItem
     *
     * @return self
     */
    public function setStockItem(?CatalogInventoryDataStockItemInterface $stockItem): self
    {
        $this->stockItem = $stockItem;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getStockStatus(): ?int
    {
        return $this->stockStatus;
    }
    /**
     *
     *
     * @param int|null $stockStatus
     *
     * @return self
     */
    public function setStockStatus(?int $stockStatus): self
    {
        $this->stockStatus = $stockStatus;
        return $this;
    }
}
