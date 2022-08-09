<?php

namespace Kiboko\Magento\V2\Model;

class V1ProductsProductSkuStockItemsItemIdPutBody
{
    /**
     * Interface StockItem
     *
     * @var CatalogInventoryDataStockItemInterface
     */
    protected $stockItem;
    /**
     * Interface StockItem
     *
     * @return CatalogInventoryDataStockItemInterface
     */
    public function getStockItem() : CatalogInventoryDataStockItemInterface
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
    public function setStockItem(CatalogInventoryDataStockItemInterface $stockItem) : self
    {
        $this->stockItem = $stockItem;
        return $this;
    }
}