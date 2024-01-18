<?php

namespace Kiboko\Magento\Model;

class CatalogInventoryDataStockItemInterface
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
     * 
     *
     * @var int|null
     */
    protected $itemId;
    /**
     * 
     *
     * @var int|null
     */
    protected $productId;
    /**
     * Stock identifier
     *
     * @var int|null
     */
    protected $stockId;
    /**
     * 
     *
     * @var float|null
     */
    protected $qty;
    /**
     * Stock Availability
     *
     * @var bool|null
     */
    protected $isInStock;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isQtyDecimal;
    /**
     * 
     *
     * @var bool|null
     */
    protected $showDefaultNotificationMessage;
    /**
     * 
     *
     * @var bool|null
     */
    protected $useConfigMinQty;
    /**
     * Minimal quantity available for item status in stock
     *
     * @var float|null
     */
    protected $minQty;
    /**
     * 
     *
     * @var int|null
     */
    protected $useConfigMinSaleQty;
    /**
     * Minimum Qty Allowed in Shopping Cart or NULL when there is no limitation
     *
     * @var float|null
     */
    protected $minSaleQty;
    /**
     * 
     *
     * @var bool|null
     */
    protected $useConfigMaxSaleQty;
    /**
     * Maximum Qty Allowed in Shopping Cart data wrapper
     *
     * @var float|null
     */
    protected $maxSaleQty;
    /**
     * 
     *
     * @var bool|null
     */
    protected $useConfigBackorders;
    /**
     * Backorders status
     *
     * @var int|null
     */
    protected $backorders;
    /**
     * 
     *
     * @var bool|null
     */
    protected $useConfigNotifyStockQty;
    /**
     * Notify for Quantity Below data wrapper
     *
     * @var float|null
     */
    protected $notifyStockQty;
    /**
     * 
     *
     * @var bool|null
     */
    protected $useConfigQtyIncrements;
    /**
     * Quantity Increments data wrapper
     *
     * @var float|null
     */
    protected $qtyIncrements;
    /**
     * 
     *
     * @var bool|null
     */
    protected $useConfigEnableQtyInc;
    /**
     * Whether Quantity Increments is enabled
     *
     * @var bool|null
     */
    protected $enableQtyIncrements;
    /**
     * 
     *
     * @var bool|null
     */
    protected $useConfigManageStock;
    /**
     * Can Manage Stock
     *
     * @var bool|null
     */
    protected $manageStock;
    /**
     * 
     *
     * @var string|null
     */
    protected $lowStockDate;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isDecimalDivided;
    /**
     * 
     *
     * @var int|null
     */
    protected $stockStatusChangedAuto;
    /**
     * ExtensionInterface class for @see \Magento\CatalogInventory\Api\Data\StockItemInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * 
     *
     * @return int|null
     */
    public function getItemId() : ?int
    {
        return $this->itemId;
    }
    /**
     * 
     *
     * @param int|null $itemId
     *
     * @return self
     */
    public function setItemId(?int $itemId) : self
    {
        $this->initialized['itemId'] = true;
        $this->itemId = $itemId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getProductId() : ?int
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
    public function setProductId(?int $productId) : self
    {
        $this->initialized['productId'] = true;
        $this->productId = $productId;
        return $this;
    }
    /**
     * Stock identifier
     *
     * @return int|null
     */
    public function getStockId() : ?int
    {
        return $this->stockId;
    }
    /**
     * Stock identifier
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
     * 
     *
     * @return float|null
     */
    public function getQty() : ?float
    {
        return $this->qty;
    }
    /**
     * 
     *
     * @param float|null $qty
     *
     * @return self
     */
    public function setQty(?float $qty) : self
    {
        $this->initialized['qty'] = true;
        $this->qty = $qty;
        return $this;
    }
    /**
     * Stock Availability
     *
     * @return bool|null
     */
    public function getIsInStock() : ?bool
    {
        return $this->isInStock;
    }
    /**
     * Stock Availability
     *
     * @param bool|null $isInStock
     *
     * @return self
     */
    public function setIsInStock(?bool $isInStock) : self
    {
        $this->initialized['isInStock'] = true;
        $this->isInStock = $isInStock;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsQtyDecimal() : ?bool
    {
        return $this->isQtyDecimal;
    }
    /**
     * 
     *
     * @param bool|null $isQtyDecimal
     *
     * @return self
     */
    public function setIsQtyDecimal(?bool $isQtyDecimal) : self
    {
        $this->initialized['isQtyDecimal'] = true;
        $this->isQtyDecimal = $isQtyDecimal;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getShowDefaultNotificationMessage() : ?bool
    {
        return $this->showDefaultNotificationMessage;
    }
    /**
     * 
     *
     * @param bool|null $showDefaultNotificationMessage
     *
     * @return self
     */
    public function setShowDefaultNotificationMessage(?bool $showDefaultNotificationMessage) : self
    {
        $this->initialized['showDefaultNotificationMessage'] = true;
        $this->showDefaultNotificationMessage = $showDefaultNotificationMessage;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getUseConfigMinQty() : ?bool
    {
        return $this->useConfigMinQty;
    }
    /**
     * 
     *
     * @param bool|null $useConfigMinQty
     *
     * @return self
     */
    public function setUseConfigMinQty(?bool $useConfigMinQty) : self
    {
        $this->initialized['useConfigMinQty'] = true;
        $this->useConfigMinQty = $useConfigMinQty;
        return $this;
    }
    /**
     * Minimal quantity available for item status in stock
     *
     * @return float|null
     */
    public function getMinQty() : ?float
    {
        return $this->minQty;
    }
    /**
     * Minimal quantity available for item status in stock
     *
     * @param float|null $minQty
     *
     * @return self
     */
    public function setMinQty(?float $minQty) : self
    {
        $this->initialized['minQty'] = true;
        $this->minQty = $minQty;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUseConfigMinSaleQty() : ?int
    {
        return $this->useConfigMinSaleQty;
    }
    /**
     * 
     *
     * @param int|null $useConfigMinSaleQty
     *
     * @return self
     */
    public function setUseConfigMinSaleQty(?int $useConfigMinSaleQty) : self
    {
        $this->initialized['useConfigMinSaleQty'] = true;
        $this->useConfigMinSaleQty = $useConfigMinSaleQty;
        return $this;
    }
    /**
     * Minimum Qty Allowed in Shopping Cart or NULL when there is no limitation
     *
     * @return float|null
     */
    public function getMinSaleQty() : ?float
    {
        return $this->minSaleQty;
    }
    /**
     * Minimum Qty Allowed in Shopping Cart or NULL when there is no limitation
     *
     * @param float|null $minSaleQty
     *
     * @return self
     */
    public function setMinSaleQty(?float $minSaleQty) : self
    {
        $this->initialized['minSaleQty'] = true;
        $this->minSaleQty = $minSaleQty;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getUseConfigMaxSaleQty() : ?bool
    {
        return $this->useConfigMaxSaleQty;
    }
    /**
     * 
     *
     * @param bool|null $useConfigMaxSaleQty
     *
     * @return self
     */
    public function setUseConfigMaxSaleQty(?bool $useConfigMaxSaleQty) : self
    {
        $this->initialized['useConfigMaxSaleQty'] = true;
        $this->useConfigMaxSaleQty = $useConfigMaxSaleQty;
        return $this;
    }
    /**
     * Maximum Qty Allowed in Shopping Cart data wrapper
     *
     * @return float|null
     */
    public function getMaxSaleQty() : ?float
    {
        return $this->maxSaleQty;
    }
    /**
     * Maximum Qty Allowed in Shopping Cart data wrapper
     *
     * @param float|null $maxSaleQty
     *
     * @return self
     */
    public function setMaxSaleQty(?float $maxSaleQty) : self
    {
        $this->initialized['maxSaleQty'] = true;
        $this->maxSaleQty = $maxSaleQty;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getUseConfigBackorders() : ?bool
    {
        return $this->useConfigBackorders;
    }
    /**
     * 
     *
     * @param bool|null $useConfigBackorders
     *
     * @return self
     */
    public function setUseConfigBackorders(?bool $useConfigBackorders) : self
    {
        $this->initialized['useConfigBackorders'] = true;
        $this->useConfigBackorders = $useConfigBackorders;
        return $this;
    }
    /**
     * Backorders status
     *
     * @return int|null
     */
    public function getBackorders() : ?int
    {
        return $this->backorders;
    }
    /**
     * Backorders status
     *
     * @param int|null $backorders
     *
     * @return self
     */
    public function setBackorders(?int $backorders) : self
    {
        $this->initialized['backorders'] = true;
        $this->backorders = $backorders;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getUseConfigNotifyStockQty() : ?bool
    {
        return $this->useConfigNotifyStockQty;
    }
    /**
     * 
     *
     * @param bool|null $useConfigNotifyStockQty
     *
     * @return self
     */
    public function setUseConfigNotifyStockQty(?bool $useConfigNotifyStockQty) : self
    {
        $this->initialized['useConfigNotifyStockQty'] = true;
        $this->useConfigNotifyStockQty = $useConfigNotifyStockQty;
        return $this;
    }
    /**
     * Notify for Quantity Below data wrapper
     *
     * @return float|null
     */
    public function getNotifyStockQty() : ?float
    {
        return $this->notifyStockQty;
    }
    /**
     * Notify for Quantity Below data wrapper
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
     * 
     *
     * @return bool|null
     */
    public function getUseConfigQtyIncrements() : ?bool
    {
        return $this->useConfigQtyIncrements;
    }
    /**
     * 
     *
     * @param bool|null $useConfigQtyIncrements
     *
     * @return self
     */
    public function setUseConfigQtyIncrements(?bool $useConfigQtyIncrements) : self
    {
        $this->initialized['useConfigQtyIncrements'] = true;
        $this->useConfigQtyIncrements = $useConfigQtyIncrements;
        return $this;
    }
    /**
     * Quantity Increments data wrapper
     *
     * @return float|null
     */
    public function getQtyIncrements() : ?float
    {
        return $this->qtyIncrements;
    }
    /**
     * Quantity Increments data wrapper
     *
     * @param float|null $qtyIncrements
     *
     * @return self
     */
    public function setQtyIncrements(?float $qtyIncrements) : self
    {
        $this->initialized['qtyIncrements'] = true;
        $this->qtyIncrements = $qtyIncrements;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getUseConfigEnableQtyInc() : ?bool
    {
        return $this->useConfigEnableQtyInc;
    }
    /**
     * 
     *
     * @param bool|null $useConfigEnableQtyInc
     *
     * @return self
     */
    public function setUseConfigEnableQtyInc(?bool $useConfigEnableQtyInc) : self
    {
        $this->initialized['useConfigEnableQtyInc'] = true;
        $this->useConfigEnableQtyInc = $useConfigEnableQtyInc;
        return $this;
    }
    /**
     * Whether Quantity Increments is enabled
     *
     * @return bool|null
     */
    public function getEnableQtyIncrements() : ?bool
    {
        return $this->enableQtyIncrements;
    }
    /**
     * Whether Quantity Increments is enabled
     *
     * @param bool|null $enableQtyIncrements
     *
     * @return self
     */
    public function setEnableQtyIncrements(?bool $enableQtyIncrements) : self
    {
        $this->initialized['enableQtyIncrements'] = true;
        $this->enableQtyIncrements = $enableQtyIncrements;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getUseConfigManageStock() : ?bool
    {
        return $this->useConfigManageStock;
    }
    /**
     * 
     *
     * @param bool|null $useConfigManageStock
     *
     * @return self
     */
    public function setUseConfigManageStock(?bool $useConfigManageStock) : self
    {
        $this->initialized['useConfigManageStock'] = true;
        $this->useConfigManageStock = $useConfigManageStock;
        return $this;
    }
    /**
     * Can Manage Stock
     *
     * @return bool|null
     */
    public function getManageStock() : ?bool
    {
        return $this->manageStock;
    }
    /**
     * Can Manage Stock
     *
     * @param bool|null $manageStock
     *
     * @return self
     */
    public function setManageStock(?bool $manageStock) : self
    {
        $this->initialized['manageStock'] = true;
        $this->manageStock = $manageStock;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLowStockDate() : ?string
    {
        return $this->lowStockDate;
    }
    /**
     * 
     *
     * @param string|null $lowStockDate
     *
     * @return self
     */
    public function setLowStockDate(?string $lowStockDate) : self
    {
        $this->initialized['lowStockDate'] = true;
        $this->lowStockDate = $lowStockDate;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsDecimalDivided() : ?bool
    {
        return $this->isDecimalDivided;
    }
    /**
     * 
     *
     * @param bool|null $isDecimalDivided
     *
     * @return self
     */
    public function setIsDecimalDivided(?bool $isDecimalDivided) : self
    {
        $this->initialized['isDecimalDivided'] = true;
        $this->isDecimalDivided = $isDecimalDivided;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStockStatusChangedAuto() : ?int
    {
        return $this->stockStatusChangedAuto;
    }
    /**
     * 
     *
     * @param int|null $stockStatusChangedAuto
     *
     * @return self
     */
    public function setStockStatusChangedAuto(?int $stockStatusChangedAuto) : self
    {
        $this->initialized['stockStatusChangedAuto'] = true;
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
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}