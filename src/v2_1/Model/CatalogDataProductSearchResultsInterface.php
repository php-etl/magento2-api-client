<?php

namespace Kiboko\Magento\V2_1\Model;

class CatalogDataProductSearchResultsInterface
{
    /**
     * Attributes list.
     *
     * @var CatalogDataProductInterface[]|null
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
     * Attributes list.
     *
     * @return CatalogDataProductInterface[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * Attributes list.
     *
     * @param CatalogDataProductInterface[]|null $items
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
