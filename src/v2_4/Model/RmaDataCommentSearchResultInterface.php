<?php

namespace Kiboko\Magento\V2_4\Model;

class RmaDataCommentSearchResultInterface
{
    /**
     * Rma Status History list
     *
     * @var RmaDataCommentInterface[]|null
     */
    protected $items;
    /**
     * Search criteria interface.
     *
     * @var FrameworkSearchCriteriaInterface|null
     */
    protected $searchCriteria;
    /**
     * Total count.
     *
     * @var int|null
     */
    protected $totalCount;
    /**
     * Rma Status History list
     *
     * @return RmaDataCommentInterface[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * Rma Status History list
     *
     * @param RmaDataCommentInterface[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Search criteria interface.
     *
     * @return FrameworkSearchCriteriaInterface|null
     */
    public function getSearchCriteria(): ?FrameworkSearchCriteriaInterface
    {
        return $this->searchCriteria;
    }
    /**
     * Search criteria interface.
     *
     * @param FrameworkSearchCriteriaInterface|null $searchCriteria
     *
     * @return self
     */
    public function setSearchCriteria(?FrameworkSearchCriteriaInterface $searchCriteria): self
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
