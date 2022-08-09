<?php

namespace Kiboko\Magento\V2\Model;

class TaxDataTaxRuleSearchResultsInterface
{
    /**
     * Items
     *
     * @var TaxDataTaxRuleInterface[]
     */
    protected $items;
    /**
     * Search criteria interface.
     *
     * @var FrameworkSearchCriteriaInterface
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
     * @return TaxDataTaxRuleInterface[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * Items
     *
     * @param TaxDataTaxRuleInterface[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Search criteria interface.
     *
     * @return FrameworkSearchCriteriaInterface
     */
    public function getSearchCriteria() : FrameworkSearchCriteriaInterface
    {
        return $this->searchCriteria;
    }
    /**
     * Search criteria interface.
     *
     * @param FrameworkSearchCriteriaInterface $searchCriteria
     *
     * @return self
     */
    public function setSearchCriteria(FrameworkSearchCriteriaInterface $searchCriteria) : self
    {
        $this->searchCriteria = $searchCriteria;
        return $this;
    }
    /**
     * Total count.
     *
     * @return int
     */
    public function getTotalCount() : int
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
    public function setTotalCount(int $totalCount) : self
    {
        $this->totalCount = $totalCount;
        return $this;
    }
}