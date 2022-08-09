<?php

namespace Kiboko\Magento\V2\Model;

class FrameworkSearchCriteriaInterface
{
    /**
     * Current page.
     *
     * @var int
     */
    protected $currentPage;
    /**
     * A list of filter groups.
     *
     * @var FrameworkSearchFilterGroup[]
     */
    protected $filterGroups;
    /**
     * Page size.
     *
     * @var int
     */
    protected $pageSize;
    /**
     * Sort order.
     *
     * @var FrameworkSortOrder[]
     */
    protected $sortOrders;
    /**
     * Current page.
     *
     * @return int
     */
    public function getCurrentPage() : int
    {
        return $this->currentPage;
    }
    /**
     * Current page.
     *
     * @param int $currentPage
     *
     * @return self
     */
    public function setCurrentPage(int $currentPage) : self
    {
        $this->currentPage = $currentPage;
        return $this;
    }
    /**
     * A list of filter groups.
     *
     * @return FrameworkSearchFilterGroup[]
     */
    public function getFilterGroups() : array
    {
        return $this->filterGroups;
    }
    /**
     * A list of filter groups.
     *
     * @param FrameworkSearchFilterGroup[] $filterGroups
     *
     * @return self
     */
    public function setFilterGroups(array $filterGroups) : self
    {
        $this->filterGroups = $filterGroups;
        return $this;
    }
    /**
     * Page size.
     *
     * @return int
     */
    public function getPageSize() : int
    {
        return $this->pageSize;
    }
    /**
     * Page size.
     *
     * @param int $pageSize
     *
     * @return self
     */
    public function setPageSize(int $pageSize) : self
    {
        $this->pageSize = $pageSize;
        return $this;
    }
    /**
     * Sort order.
     *
     * @return FrameworkSortOrder[]
     */
    public function getSortOrders() : array
    {
        return $this->sortOrders;
    }
    /**
     * Sort order.
     *
     * @param FrameworkSortOrder[] $sortOrders
     *
     * @return self
     */
    public function setSortOrders(array $sortOrders) : self
    {
        $this->sortOrders = $sortOrders;
        return $this;
    }
}