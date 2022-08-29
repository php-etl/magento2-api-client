<?php

namespace Kiboko\Magento\v2_3\Model;

class CatalogInventoryDataStockItemCollectionInterface
{
    /**
     * Items
     *
     * @var CatalogInventoryDataStockItemInterface[]
     */
    protected $items;
    /**
     * Interface StockItemCriteriaInterface
     *
     * @var CatalogInventoryStockItemCriteriaInterface
     */
    protected $searchCriteria;
    /**
     * Total count.
     *
     * @var int
     */
    protected $totalCount;
    /**
     * Items
     *
     * @return CatalogInventoryDataStockItemInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * Items
     *
     * @param CatalogInventoryDataStockItemInterface[] $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Interface StockItemCriteriaInterface
     *
     * @return CatalogInventoryStockItemCriteriaInterface
     */
    public function getSearchCriteria(): CatalogInventoryStockItemCriteriaInterface
    {
        return $this->searchCriteria;
    }
    /**
     * Interface StockItemCriteriaInterface
     *
     * @param CatalogInventoryStockItemCriteriaInterface $searchCriteria
     *
     * @return self
     */
    public function setSearchCriteria(CatalogInventoryStockItemCriteriaInterface $searchCriteria): self
    {
        $this->searchCriteria = $searchCriteria;
        return $this;
    }
    /**
     * Total count.
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * Total count.
     *
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;
        return $this;
    }
}
