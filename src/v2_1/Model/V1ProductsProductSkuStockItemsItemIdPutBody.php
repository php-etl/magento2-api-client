<?php

namespace Kiboko\Magento\V2_1\Model;

class V1ProductsProductSkuStockItemsItemIdPutBody
{
    /**
     * Interface StockItem
     *
     * @var CatalogInventoryDataStockItemInterface|null
     */
    protected $stockItem;
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
}
