<?php

namespace Kiboko\Magento\Model;

class InventoryInStorePickupApiDataSearchRequestInterface
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
     * Filter by Distance to the Address. Pickup Locations will be filtered by distance according to the geo-position of the entered address. Required fields for the address are country and one of the field: region or city or postcode.
     *
     * @var InventoryInStorePickupApiDataSearchRequestAreaInterface|null
     */
    protected $area;
    /**
     * Filter to filter by Fields. Each field may be filtered with different condition type. Supported condition types restricted by @see \Magento\Framework\Api\SearchCriteriaInterface
     *
     * @var InventoryInStorePickupApiDataSearchRequestFiltersInterface|null
     */
    protected $filters;
    /**
     * Page size.
     *
     * @var int|null
     */
    protected $pageSize;
    /**
     * Current page.
     *
     * @var int|null
     */
    protected $currentPage;
    /**
     * Sales Channel Type.
     *
     * @var string|null
     */
    protected $scopeType;
    /**
     * Sales Channel code.
     *
     * @var string|null
     */
    protected $scopeCode;
    /**
     * Sort Order.
     *
     * @var FrameworkSortOrder[]|null
     */
    protected $sort;
    /**
     * ExtensionInterface class for @see \Magento\InventoryInStorePickupApi\Api\Data\SearchRequestInterface
     *
     * @var InventoryInStorePickupApiDataSearchRequestExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Filter by Distance to the Address. Pickup Locations will be filtered by distance according to the geo-position of the entered address. Required fields for the address are country and one of the field: region or city or postcode.
     *
     * @return InventoryInStorePickupApiDataSearchRequestAreaInterface|null
     */
    public function getArea() : ?InventoryInStorePickupApiDataSearchRequestAreaInterface
    {
        return $this->area;
    }
    /**
     * Filter by Distance to the Address. Pickup Locations will be filtered by distance according to the geo-position of the entered address. Required fields for the address are country and one of the field: region or city or postcode.
     *
     * @param InventoryInStorePickupApiDataSearchRequestAreaInterface|null $area
     *
     * @return self
     */
    public function setArea(?InventoryInStorePickupApiDataSearchRequestAreaInterface $area) : self
    {
        $this->initialized['area'] = true;
        $this->area = $area;
        return $this;
    }
    /**
     * Filter to filter by Fields. Each field may be filtered with different condition type. Supported condition types restricted by @see \Magento\Framework\Api\SearchCriteriaInterface
     *
     * @return InventoryInStorePickupApiDataSearchRequestFiltersInterface|null
     */
    public function getFilters() : ?InventoryInStorePickupApiDataSearchRequestFiltersInterface
    {
        return $this->filters;
    }
    /**
     * Filter to filter by Fields. Each field may be filtered with different condition type. Supported condition types restricted by @see \Magento\Framework\Api\SearchCriteriaInterface
     *
     * @param InventoryInStorePickupApiDataSearchRequestFiltersInterface|null $filters
     *
     * @return self
     */
    public function setFilters(?InventoryInStorePickupApiDataSearchRequestFiltersInterface $filters) : self
    {
        $this->initialized['filters'] = true;
        $this->filters = $filters;
        return $this;
    }
    /**
     * Page size.
     *
     * @return int|null
     */
    public function getPageSize() : ?int
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
    public function setPageSize(?int $pageSize) : self
    {
        $this->initialized['pageSize'] = true;
        $this->pageSize = $pageSize;
        return $this;
    }
    /**
     * Current page.
     *
     * @return int|null
     */
    public function getCurrentPage() : ?int
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
    public function setCurrentPage(?int $currentPage) : self
    {
        $this->initialized['currentPage'] = true;
        $this->currentPage = $currentPage;
        return $this;
    }
    /**
     * Sales Channel Type.
     *
     * @return string|null
     */
    public function getScopeType() : ?string
    {
        return $this->scopeType;
    }
    /**
     * Sales Channel Type.
     *
     * @param string|null $scopeType
     *
     * @return self
     */
    public function setScopeType(?string $scopeType) : self
    {
        $this->initialized['scopeType'] = true;
        $this->scopeType = $scopeType;
        return $this;
    }
    /**
     * Sales Channel code.
     *
     * @return string|null
     */
    public function getScopeCode() : ?string
    {
        return $this->scopeCode;
    }
    /**
     * Sales Channel code.
     *
     * @param string|null $scopeCode
     *
     * @return self
     */
    public function setScopeCode(?string $scopeCode) : self
    {
        $this->initialized['scopeCode'] = true;
        $this->scopeCode = $scopeCode;
        return $this;
    }
    /**
     * Sort Order.
     *
     * @return FrameworkSortOrder[]|null
     */
    public function getSort() : ?array
    {
        return $this->sort;
    }
    /**
     * Sort Order.
     *
     * @param FrameworkSortOrder[]|null $sort
     *
     * @return self
     */
    public function setSort(?array $sort) : self
    {
        $this->initialized['sort'] = true;
        $this->sort = $sort;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventoryInStorePickupApi\Api\Data\SearchRequestInterface
     *
     * @return InventoryInStorePickupApiDataSearchRequestExtensionInterface|null
     */
    public function getExtensionAttributes() : ?InventoryInStorePickupApiDataSearchRequestExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventoryInStorePickupApi\Api\Data\SearchRequestInterface
     *
     * @param InventoryInStorePickupApiDataSearchRequestExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?InventoryInStorePickupApiDataSearchRequestExtensionInterface $extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}