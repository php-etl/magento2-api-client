<?php

namespace Kiboko\Magento\v2_4\Model;

class CatalogInventoryDataStockStatusInterface
{
    /**
     *
     *
     * @var int
     */
    protected $productId;
    /**
     *
     *
     * @var int
     */
    protected $stockId;
    /**
     *
     *
     * @var int
     */
    protected $qty;
    /**
     *
     *
     * @var int
     */
    protected $stockStatus;
    /**
     * Interface StockItem
     *
     * @var CatalogInventoryDataStockItemInterface
     */
    protected $stockItem;
    /**
     * ExtensionInterface class for @see \Magento\CatalogInventory\Api\Data\StockStatusInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @return int
     */
    public function getProductId(): int
    {
        return $this->productId;
    }
    /**
     *
     *
     * @param int $productId
     *
     * @return self
     */
    public function setProductId(int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getStockId(): int
    {
        return $this->stockId;
    }
    /**
     *
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
     *
     *
     * @return int
     */
    public function getQty(): int
    {
        return $this->qty;
    }
    /**
     *
     *
     * @param int $qty
     *
     * @return self
     */
    public function setQty(int $qty): self
    {
        $this->qty = $qty;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getStockStatus(): int
    {
        return $this->stockStatus;
    }
    /**
     *
     *
     * @param int $stockStatus
     *
     * @return self
     */
    public function setStockStatus(int $stockStatus): self
    {
        $this->stockStatus = $stockStatus;
        return $this;
    }
    /**
     * Interface StockItem
     *
     * @return CatalogInventoryDataStockItemInterface
     */
    public function getStockItem(): CatalogInventoryDataStockItemInterface
    {
        return $this->stockItem;
    }
    /**
     * Interface StockItem
     *
     * @param CatalogInventoryDataStockItemInterface $stockItem
     *
     * @return self
     */
    public function setStockItem(CatalogInventoryDataStockItemInterface $stockItem): self
    {
        $this->stockItem = $stockItem;
        return $this;
    }
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
}
