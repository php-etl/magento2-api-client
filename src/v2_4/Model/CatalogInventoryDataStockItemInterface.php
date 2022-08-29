<?php

namespace Kiboko\Magento\v2_4\Model;

class CatalogInventoryDataStockItemInterface
{
    /**
     *
     *
     * @var int
     */
    protected $itemId;
    /**
     *
     *
     * @var int
     */
    protected $productId;
    /**
     * Stock identifier
     *
     * @var int
     */
    protected $stockId;
    /**
     *
     *
     * @var float
     */
    protected $qty;
    /**
     * Stock Availability
     *
     * @var bool
     */
    protected $isInStock;
    /**
     *
     *
     * @var bool
     */
    protected $isQtyDecimal;
    /**
     *
     *
     * @var bool
     */
    protected $showDefaultNotificationMessage;
    /**
     *
     *
     * @var bool
     */
    protected $useConfigMinQty;
    /**
     * Minimal quantity available for item status in stock
     *
     * @var float
     */
    protected $minQty;
    /**
     *
     *
     * @var int
     */
    protected $useConfigMinSaleQty;
    /**
     * Minimum Qty Allowed in Shopping Cart or NULL when there is no limitation
     *
     * @var float
     */
    protected $minSaleQty;
    /**
     *
     *
     * @var bool
     */
    protected $useConfigMaxSaleQty;
    /**
     * Maximum Qty Allowed in Shopping Cart data wrapper
     *
     * @var float
     */
    protected $maxSaleQty;
    /**
     *
     *
     * @var bool
     */
    protected $useConfigBackorders;
    /**
     * Backorders status
     *
     * @var int
     */
    protected $backorders;
    /**
     *
     *
     * @var bool
     */
    protected $useConfigNotifyStockQty;
    /**
     * Notify for Quantity Below data wrapper
     *
     * @var float
     */
    protected $notifyStockQty;
    /**
     *
     *
     * @var bool
     */
    protected $useConfigQtyIncrements;
    /**
     * Quantity Increments data wrapper
     *
     * @var float
     */
    protected $qtyIncrements;
    /**
     *
     *
     * @var bool
     */
    protected $useConfigEnableQtyInc;
    /**
     * Whether Quantity Increments is enabled
     *
     * @var bool
     */
    protected $enableQtyIncrements;
    /**
     *
     *
     * @var bool
     */
    protected $useConfigManageStock;
    /**
     * Can Manage Stock
     *
     * @var bool
     */
    protected $manageStock;
    /**
     *
     *
     * @var string
     */
    protected $lowStockDate;
    /**
     *
     *
     * @var bool
     */
    protected $isDecimalDivided;
    /**
     *
     *
     * @var int
     */
    protected $stockStatusChangedAuto;
    /**
     * ExtensionInterface class for @see \Magento\CatalogInventory\Api\Data\StockItemInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @return int
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }
    /**
     *
     *
     * @param int $itemId
     *
     * @return self
     */
    public function setItemId(int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }
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
     * Stock identifier
     *
     * @return int
     */
    public function getStockId(): int
    {
        return $this->stockId;
    }
    /**
     * Stock identifier
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
     * @return float
     */
    public function getQty(): float
    {
        return $this->qty;
    }
    /**
     *
     *
     * @param float $qty
     *
     * @return self
     */
    public function setQty(float $qty): self
    {
        $this->qty = $qty;
        return $this;
    }
    /**
     * Stock Availability
     *
     * @return bool
     */
    public function getIsInStock(): bool
    {
        return $this->isInStock;
    }
    /**
     * Stock Availability
     *
     * @param bool $isInStock
     *
     * @return self
     */
    public function setIsInStock(bool $isInStock): self
    {
        $this->isInStock = $isInStock;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getIsQtyDecimal(): bool
    {
        return $this->isQtyDecimal;
    }
    /**
     *
     *
     * @param bool $isQtyDecimal
     *
     * @return self
     */
    public function setIsQtyDecimal(bool $isQtyDecimal): self
    {
        $this->isQtyDecimal = $isQtyDecimal;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getShowDefaultNotificationMessage(): bool
    {
        return $this->showDefaultNotificationMessage;
    }
    /**
     *
     *
     * @param bool $showDefaultNotificationMessage
     *
     * @return self
     */
    public function setShowDefaultNotificationMessage(bool $showDefaultNotificationMessage): self
    {
        $this->showDefaultNotificationMessage = $showDefaultNotificationMessage;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getUseConfigMinQty(): bool
    {
        return $this->useConfigMinQty;
    }
    /**
     *
     *
     * @param bool $useConfigMinQty
     *
     * @return self
     */
    public function setUseConfigMinQty(bool $useConfigMinQty): self
    {
        $this->useConfigMinQty = $useConfigMinQty;
        return $this;
    }
    /**
     * Minimal quantity available for item status in stock
     *
     * @return float
     */
    public function getMinQty(): float
    {
        return $this->minQty;
    }
    /**
     * Minimal quantity available for item status in stock
     *
     * @param float $minQty
     *
     * @return self
     */
    public function setMinQty(float $minQty): self
    {
        $this->minQty = $minQty;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getUseConfigMinSaleQty(): int
    {
        return $this->useConfigMinSaleQty;
    }
    /**
     *
     *
     * @param int $useConfigMinSaleQty
     *
     * @return self
     */
    public function setUseConfigMinSaleQty(int $useConfigMinSaleQty): self
    {
        $this->useConfigMinSaleQty = $useConfigMinSaleQty;
        return $this;
    }
    /**
     * Minimum Qty Allowed in Shopping Cart or NULL when there is no limitation
     *
     * @return float
     */
    public function getMinSaleQty(): float
    {
        return $this->minSaleQty;
    }
    /**
     * Minimum Qty Allowed in Shopping Cart or NULL when there is no limitation
     *
     * @param float $minSaleQty
     *
     * @return self
     */
    public function setMinSaleQty(float $minSaleQty): self
    {
        $this->minSaleQty = $minSaleQty;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getUseConfigMaxSaleQty(): bool
    {
        return $this->useConfigMaxSaleQty;
    }
    /**
     *
     *
     * @param bool $useConfigMaxSaleQty
     *
     * @return self
     */
    public function setUseConfigMaxSaleQty(bool $useConfigMaxSaleQty): self
    {
        $this->useConfigMaxSaleQty = $useConfigMaxSaleQty;
        return $this;
    }
    /**
     * Maximum Qty Allowed in Shopping Cart data wrapper
     *
     * @return float
     */
    public function getMaxSaleQty(): float
    {
        return $this->maxSaleQty;
    }
    /**
     * Maximum Qty Allowed in Shopping Cart data wrapper
     *
     * @param float $maxSaleQty
     *
     * @return self
     */
    public function setMaxSaleQty(float $maxSaleQty): self
    {
        $this->maxSaleQty = $maxSaleQty;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getUseConfigBackorders(): bool
    {
        return $this->useConfigBackorders;
    }
    /**
     *
     *
     * @param bool $useConfigBackorders
     *
     * @return self
     */
    public function setUseConfigBackorders(bool $useConfigBackorders): self
    {
        $this->useConfigBackorders = $useConfigBackorders;
        return $this;
    }
    /**
     * Backorders status
     *
     * @return int
     */
    public function getBackorders(): int
    {
        return $this->backorders;
    }
    /**
     * Backorders status
     *
     * @param int $backorders
     *
     * @return self
     */
    public function setBackorders(int $backorders): self
    {
        $this->backorders = $backorders;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getUseConfigNotifyStockQty(): bool
    {
        return $this->useConfigNotifyStockQty;
    }
    /**
     *
     *
     * @param bool $useConfigNotifyStockQty
     *
     * @return self
     */
    public function setUseConfigNotifyStockQty(bool $useConfigNotifyStockQty): self
    {
        $this->useConfigNotifyStockQty = $useConfigNotifyStockQty;
        return $this;
    }
    /**
     * Notify for Quantity Below data wrapper
     *
     * @return float
     */
    public function getNotifyStockQty(): float
    {
        return $this->notifyStockQty;
    }
    /**
     * Notify for Quantity Below data wrapper
     *
     * @param float $notifyStockQty
     *
     * @return self
     */
    public function setNotifyStockQty(float $notifyStockQty): self
    {
        $this->notifyStockQty = $notifyStockQty;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getUseConfigQtyIncrements(): bool
    {
        return $this->useConfigQtyIncrements;
    }
    /**
     *
     *
     * @param bool $useConfigQtyIncrements
     *
     * @return self
     */
    public function setUseConfigQtyIncrements(bool $useConfigQtyIncrements): self
    {
        $this->useConfigQtyIncrements = $useConfigQtyIncrements;
        return $this;
    }
    /**
     * Quantity Increments data wrapper
     *
     * @return float
     */
    public function getQtyIncrements(): float
    {
        return $this->qtyIncrements;
    }
    /**
     * Quantity Increments data wrapper
     *
     * @param float $qtyIncrements
     *
     * @return self
     */
    public function setQtyIncrements(float $qtyIncrements): self
    {
        $this->qtyIncrements = $qtyIncrements;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getUseConfigEnableQtyInc(): bool
    {
        return $this->useConfigEnableQtyInc;
    }
    /**
     *
     *
     * @param bool $useConfigEnableQtyInc
     *
     * @return self
     */
    public function setUseConfigEnableQtyInc(bool $useConfigEnableQtyInc): self
    {
        $this->useConfigEnableQtyInc = $useConfigEnableQtyInc;
        return $this;
    }
    /**
     * Whether Quantity Increments is enabled
     *
     * @return bool
     */
    public function getEnableQtyIncrements(): bool
    {
        return $this->enableQtyIncrements;
    }
    /**
     * Whether Quantity Increments is enabled
     *
     * @param bool $enableQtyIncrements
     *
     * @return self
     */
    public function setEnableQtyIncrements(bool $enableQtyIncrements): self
    {
        $this->enableQtyIncrements = $enableQtyIncrements;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getUseConfigManageStock(): bool
    {
        return $this->useConfigManageStock;
    }
    /**
     *
     *
     * @param bool $useConfigManageStock
     *
     * @return self
     */
    public function setUseConfigManageStock(bool $useConfigManageStock): self
    {
        $this->useConfigManageStock = $useConfigManageStock;
        return $this;
    }
    /**
     * Can Manage Stock
     *
     * @return bool
     */
    public function getManageStock(): bool
    {
        return $this->manageStock;
    }
    /**
     * Can Manage Stock
     *
     * @param bool $manageStock
     *
     * @return self
     */
    public function setManageStock(bool $manageStock): self
    {
        $this->manageStock = $manageStock;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getLowStockDate(): string
    {
        return $this->lowStockDate;
    }
    /**
     *
     *
     * @param string $lowStockDate
     *
     * @return self
     */
    public function setLowStockDate(string $lowStockDate): self
    {
        $this->lowStockDate = $lowStockDate;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getIsDecimalDivided(): bool
    {
        return $this->isDecimalDivided;
    }
    /**
     *
     *
     * @param bool $isDecimalDivided
     *
     * @return self
     */
    public function setIsDecimalDivided(bool $isDecimalDivided): self
    {
        $this->isDecimalDivided = $isDecimalDivided;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getStockStatusChangedAuto(): int
    {
        return $this->stockStatusChangedAuto;
    }
    /**
     *
     *
     * @param int $stockStatusChangedAuto
     *
     * @return self
     */
    public function setStockStatusChangedAuto(int $stockStatusChangedAuto): self
    {
        $this->stockStatusChangedAuto = $stockStatusChangedAuto;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\CatalogInventory\Api\Data\StockItemInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\CatalogInventory\Api\Data\StockItemInterface
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
