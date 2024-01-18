<?php

namespace Kiboko\Magento\Model;

class CatalogInventoryDataStockStatusCollectionInterface
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
     * @var CatalogInventoryDataStockStatusInterface[]|null
     */
    protected $items;
    /**
     * Interface StockStatusCriteriaInterface
     *
     * @var CatalogInventoryStockStatusCriteriaInterface|null
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
     * @return CatalogInventoryDataStockStatusInterface[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Items
     *
     * @param CatalogInventoryDataStockStatusInterface[]|null $items
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
     * Interface StockStatusCriteriaInterface
     *
     * @return CatalogInventoryStockStatusCriteriaInterface|null
     */
    public function getSearchCriteria() : ?CatalogInventoryStockStatusCriteriaInterface
    {
        return $this->searchCriteria;
    }
    /**
     * Interface StockStatusCriteriaInterface
     *
     * @param CatalogInventoryStockStatusCriteriaInterface|null $searchCriteria
     *
     * @return self
     */
    public function setSearchCriteria(?CatalogInventoryStockStatusCriteriaInterface $searchCriteria) : self
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