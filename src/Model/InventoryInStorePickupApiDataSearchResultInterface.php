<?php

namespace Kiboko\Magento\Model;

class InventoryInStorePickupApiDataSearchResultInterface
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
     * Items list.
     *
     * @var InventoryInStorePickupApiDataPickupLocationInterface[]|null
     */
    protected $items;
    /**
     * Endpoint used to search Pickup Locations by different parameters: - by attribute filters fields @see \Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\FiltersInterface - by distance to the address @see \Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\AreaInterface Also, endpoint supports paging and sort orders.
     *
     * @var InventoryInStorePickupApiDataSearchRequestInterface|null
     */
    protected $searchRequest;
    /**
     * Total count.
     *
     * @var int|null
     */
    protected $totalCount;
    /**
     * Items list.
     *
     * @return InventoryInStorePickupApiDataPickupLocationInterface[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Items list.
     *
     * @param InventoryInStorePickupApiDataPickupLocationInterface[]|null $items
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
     * Endpoint used to search Pickup Locations by different parameters: - by attribute filters fields @see \Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\FiltersInterface - by distance to the address @see \Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\AreaInterface Also, endpoint supports paging and sort orders.
     *
     * @return InventoryInStorePickupApiDataSearchRequestInterface|null
     */
    public function getSearchRequest() : ?InventoryInStorePickupApiDataSearchRequestInterface
    {
        return $this->searchRequest;
    }
    /**
     * Endpoint used to search Pickup Locations by different parameters: - by attribute filters fields @see \Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\FiltersInterface - by distance to the address @see \Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\AreaInterface Also, endpoint supports paging and sort orders.
     *
     * @param InventoryInStorePickupApiDataSearchRequestInterface|null $searchRequest
     *
     * @return self
     */
    public function setSearchRequest(?InventoryInStorePickupApiDataSearchRequestInterface $searchRequest) : self
    {
        $this->initialized['searchRequest'] = true;
        $this->searchRequest = $searchRequest;
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