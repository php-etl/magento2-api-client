<?php

namespace Kiboko\Magento\Model;

class CatalogInventoryStockItemCriteriaInterface
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
     * Associated Mapper Interface name
     *
     * @var string|null
     */
    protected $mapperInterfaceName;
    /**
     * Criteria objects added to current Composite Criteria
     *
     * @var FrameworkCriteriaInterface[]|null
     */
    protected $criteriaList;
    /**
     * List of filters
     *
     * @var string[]|null
     */
    protected $filters;
    /**
     * Ordering criteria
     *
     * @var string[]|null
     */
    protected $orders;
    /**
     * Limit
     *
     * @var string[]|null
     */
    protected $limit;
    /**
     * Associated Mapper Interface name
     *
     * @return string|null
     */
    public function getMapperInterfaceName() : ?string
    {
        return $this->mapperInterfaceName;
    }
    /**
     * Associated Mapper Interface name
     *
     * @param string|null $mapperInterfaceName
     *
     * @return self
     */
    public function setMapperInterfaceName(?string $mapperInterfaceName) : self
    {
        $this->initialized['mapperInterfaceName'] = true;
        $this->mapperInterfaceName = $mapperInterfaceName;
        return $this;
    }
    /**
     * Criteria objects added to current Composite Criteria
     *
     * @return FrameworkCriteriaInterface[]|null
     */
    public function getCriteriaList() : ?array
    {
        return $this->criteriaList;
    }
    /**
     * Criteria objects added to current Composite Criteria
     *
     * @param FrameworkCriteriaInterface[]|null $criteriaList
     *
     * @return self
     */
    public function setCriteriaList(?array $criteriaList) : self
    {
        $this->initialized['criteriaList'] = true;
        $this->criteriaList = $criteriaList;
        return $this;
    }
    /**
     * List of filters
     *
     * @return string[]|null
     */
    public function getFilters() : ?array
    {
        return $this->filters;
    }
    /**
     * List of filters
     *
     * @param string[]|null $filters
     *
     * @return self
     */
    public function setFilters(?array $filters) : self
    {
        $this->initialized['filters'] = true;
        $this->filters = $filters;
        return $this;
    }
    /**
     * Ordering criteria
     *
     * @return string[]|null
     */
    public function getOrders() : ?array
    {
        return $this->orders;
    }
    /**
     * Ordering criteria
     *
     * @param string[]|null $orders
     *
     * @return self
     */
    public function setOrders(?array $orders) : self
    {
        $this->initialized['orders'] = true;
        $this->orders = $orders;
        return $this;
    }
    /**
     * Limit
     *
     * @return string[]|null
     */
    public function getLimit() : ?array
    {
        return $this->limit;
    }
    /**
     * Limit
     *
     * @param string[]|null $limit
     *
     * @return self
     */
    public function setLimit(?array $limit) : self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
        return $this;
    }
}