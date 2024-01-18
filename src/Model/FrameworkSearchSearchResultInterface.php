<?php

namespace Kiboko\Magento\Model;

class FrameworkSearchSearchResultInterface
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
     * @var FrameworkSearchDocumentInterface[]|null
     */
    protected $items;
    /**
     * Faceted data
     *
     * @var FrameworkSearchAggregationInterface|null
     */
    protected $aggregations;
    /**
     * Interface SearchCriteriaInterface
     *
     * @var FrameworkSearchSearchCriteriaInterface|null
     */
    protected $searchCriteria;
    /**
     * Total count.
     *
     * @var int|null
     */
    protected $totalCount;
    /**
     * 
     *
     * @return FrameworkSearchDocumentInterface[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param FrameworkSearchDocumentInterface[]|null $items
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
     * Faceted data
     *
     * @return FrameworkSearchAggregationInterface|null
     */
    public function getAggregations() : ?FrameworkSearchAggregationInterface
    {
        return $this->aggregations;
    }
    /**
     * Faceted data
     *
     * @param FrameworkSearchAggregationInterface|null $aggregations
     *
     * @return self
     */
    public function setAggregations(?FrameworkSearchAggregationInterface $aggregations) : self
    {
        $this->initialized['aggregations'] = true;
        $this->aggregations = $aggregations;
        return $this;
    }
    /**
     * Interface SearchCriteriaInterface
     *
     * @return FrameworkSearchSearchCriteriaInterface|null
     */
    public function getSearchCriteria() : ?FrameworkSearchSearchCriteriaInterface
    {
        return $this->searchCriteria;
    }
    /**
     * Interface SearchCriteriaInterface
     *
     * @param FrameworkSearchSearchCriteriaInterface|null $searchCriteria
     *
     * @return self
     */
    public function setSearchCriteria(?FrameworkSearchSearchCriteriaInterface $searchCriteria) : self
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