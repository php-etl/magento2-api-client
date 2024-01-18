<?php

namespace Kiboko\Magento\Model;

class SalesDataInvoiceSearchResultInterface
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
     * Array of collection items.
     *
     * @var SalesDataInvoiceInterface[]|null
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
     * Array of collection items.
     *
     * @return SalesDataInvoiceInterface[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Array of collection items.
     *
     * @param SalesDataInvoiceInterface[]|null $items
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
     * Search criteria interface.
     *
     * @return FrameworkSearchCriteriaInterface|null
     */
    public function getSearchCriteria() : ?FrameworkSearchCriteriaInterface
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
    public function setSearchCriteria(?FrameworkSearchCriteriaInterface $searchCriteria) : self
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