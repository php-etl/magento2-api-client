<?php

namespace Kiboko\Magento\v2_1\Model;

class CatalogInventoryDataStockStatusCollectionInterface
{
    /**
     * Items
     *
     * @var CatalogInventoryDataStockStatusInterface[]
     */
    protected $items;
    /**
     * Interface StockStatusCriteriaInterface
     *
     * @var CatalogInventoryStockStatusCriteriaInterface
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
     * @return CatalogInventoryDataStockStatusInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * Items
     *
     * @param CatalogInventoryDataStockStatusInterface[] $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Interface StockStatusCriteriaInterface
     *
     * @return CatalogInventoryStockStatusCriteriaInterface
     */
    public function getSearchCriteria(): CatalogInventoryStockStatusCriteriaInterface
    {
        return $this->searchCriteria;
    }
    /**
     * Interface StockStatusCriteriaInterface
     *
     * @param CatalogInventoryStockStatusCriteriaInterface $searchCriteria
     *
     * @return self
     */
    public function setSearchCriteria(CatalogInventoryStockStatusCriteriaInterface $searchCriteria): self
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
