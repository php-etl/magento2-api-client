<?php

namespace Kiboko\Magento\v2_1\Model;

class FrameworkSearchSearchResultInterface
{
    /**
     * Faceted data
     *
     * @var FrameworkSearchAggregationInterface
     */
    protected $aggregations;
    /**
     *
     *
     * @var FrameworkSearchDocumentInterface[]
     */
    protected $items;
    /**
     * Interface SearchCriteriaInterface
     *
     * @var FrameworkSearchSearchCriteriaInterface
     */
    protected $searchCriteria;
    /**
     * Total count.
     *
     * @var int
     */
    protected $totalCount;
    /**
     * Faceted data
     *
     * @return FrameworkSearchAggregationInterface
     */
    public function getAggregations(): FrameworkSearchAggregationInterface
    {
        return $this->aggregations;
    }
    /**
     * Faceted data
     *
     * @param FrameworkSearchAggregationInterface $aggregations
     *
     * @return self
     */
    public function setAggregations(FrameworkSearchAggregationInterface $aggregations): self
    {
        $this->aggregations = $aggregations;
        return $this;
    }
    /**
     *
     *
     * @return FrameworkSearchDocumentInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     *
     *
     * @param FrameworkSearchDocumentInterface[] $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Interface SearchCriteriaInterface
     *
     * @return FrameworkSearchSearchCriteriaInterface
     */
    public function getSearchCriteria(): FrameworkSearchSearchCriteriaInterface
    {
        return $this->searchCriteria;
    }
    /**
     * Interface SearchCriteriaInterface
     *
     * @param FrameworkSearchSearchCriteriaInterface $searchCriteria
     *
     * @return self
     */
    public function setSearchCriteria(FrameworkSearchSearchCriteriaInterface $searchCriteria): self
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
