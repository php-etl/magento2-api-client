<?php

namespace Kiboko\Magento\V2_3\Model;

class FrameworkSearchSearchResultInterface
{
    /**
     * Faceted data
     *
     * @var FrameworkSearchAggregationInterface|null
     */
    protected $aggregations;
    /**
     *
     *
     * @var FrameworkSearchDocumentInterface[]|null
     */
    protected $items;
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
     * Faceted data
     *
     * @return FrameworkSearchAggregationInterface|null
     */
    public function getAggregations(): ?FrameworkSearchAggregationInterface
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
    public function setAggregations(?FrameworkSearchAggregationInterface $aggregations): self
    {
        $this->aggregations = $aggregations;
        return $this;
    }
    /**
     *
     *
     * @return FrameworkSearchDocumentInterface[]|null
     */
    public function getItems(): ?array
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
    public function setItems(?array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Interface SearchCriteriaInterface
     *
     * @return FrameworkSearchSearchCriteriaInterface|null
     */
    public function getSearchCriteria(): ?FrameworkSearchSearchCriteriaInterface
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
    public function setSearchCriteria(?FrameworkSearchSearchCriteriaInterface $searchCriteria): self
    {
        $this->searchCriteria = $searchCriteria;
        return $this;
    }
    /**
     * Total count.
     *
     * @return int|null
     */
    public function getTotalCount(): ?int
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
    public function setTotalCount(?int $totalCount): self
    {
        $this->totalCount = $totalCount;
        return $this;
    }
}
