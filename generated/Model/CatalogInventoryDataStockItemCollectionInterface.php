<?php

namespace Kiboko\Magento\Model;

class CatalogInventoryDataStockItemCollectionInterface
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
     * Items
     *
     * @var CatalogInventoryDataStockItemInterface[]|null
     */
    protected $items;
    /**
     * Interface StockItemCriteriaInterface
     *
     * @var CatalogInventoryStockItemCriteriaInterface|null
     */
    protected $searchCriteria;
    /**
     * Total count.
     *
     * @var int|null
     */
    protected $totalCount;
    /**
     * Items
     *
     * @return CatalogInventoryDataStockItemInterface[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Items
     *
     * @param CatalogInventoryDataStockItemInterface[]|null $items
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
     * Interface StockItemCriteriaInterface
     *
     * @return CatalogInventoryStockItemCriteriaInterface|null
     */
    public function getSearchCriteria() : ?CatalogInventoryStockItemCriteriaInterface
    {
        return $this->searchCriteria;
    }
    /**
     * Interface StockItemCriteriaInterface
     *
     * @param CatalogInventoryStockItemCriteriaInterface|null $searchCriteria
     *
     * @return self
     */
    public function setSearchCriteria(?CatalogInventoryStockItemCriteriaInterface $searchCriteria) : self
    {
        $this->initialized['searchCriteria'] = true;
        $this->searchCriteria = $searchCriteria;
        return $this;
    }
    /**
     * Total count.
     *
     * @return int|null
     */
    public function getTotalCount() : ?int
    {
        return $this->totalCount;
    }
    /**
     * Total count.
     *
     * @param int|null $totalCount
     *
     * @return self
     */
    public function setTotalCount(?int $totalCount) : self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
}