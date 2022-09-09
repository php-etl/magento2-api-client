<?php

namespace Kiboko\Magento\V2_4\Model;

class FrameworkSearchCriteriaInterface
{
    /**
     * Current page.
     *
     * @var int|null
     */
    protected $currentPage;
    /**
     * A list of filter groups.
     *
     * @var FrameworkSearchFilterGroup[]|null
     */
    protected $filterGroups;
    /**
     * Page size.
     *
     * @var int|null
     */
    protected $pageSize;
    /**
     * Sort order.
     *
     * @var FrameworkSortOrder[]|null
     */
    protected $sortOrders;
    /**
     * Current page.
     *
     * @return int|null
     */
    public function getCurrentPage(): ?int
    {
        return $this->currentPage;
    }
    /**
     * Current page.
     *
     * @param int|null $currentPage
     *
     * @return self
     */
    public function setCurrentPage(?int $currentPage): self
    {
        $this->currentPage = $currentPage;
        return $this;
    }
    /**
     * A list of filter groups.
     *
     * @return FrameworkSearchFilterGroup[]|null
     */
    public function getFilterGroups(): ?array
    {
        return $this->filterGroups;
    }
    /**
     * A list of filter groups.
     *
     * @param FrameworkSearchFilterGroup[]|null $filterGroups
     *
     * @return self
     */
    public function setFilterGroups(?array $filterGroups): self
    {
        $this->filterGroups = $filterGroups;
        return $this;
    }
    /**
     * Page size.
     *
     * @return int|null
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }
    /**
     * Page size.
     *
     * @param int|null $pageSize
     *
     * @return self
     */
    public function setPageSize(?int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }
    /**
     * Sort order.
     *
     * @return FrameworkSortOrder[]|null
     */
    public function getSortOrders(): ?array
    {
        return $this->sortOrders;
    }
    /**
     * Sort order.
     *
     * @param FrameworkSortOrder[]|null $sortOrders
     *
     * @return self
     */
    public function setSortOrders(?array $sortOrders): self
    {
        $this->sortOrders = $sortOrders;
        return $this;
    }
}
