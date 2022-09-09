<?php

namespace Kiboko\Magento\V2_2\Model;

class CatalogInventoryStockItemCriteriaInterface
{
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
     * Limit
     *
     * @var string[]|null
     */
    protected $limit;
    /**
     * Associated Mapper Interface name
     *
     * @var string|null
     */
    protected $mapperInterfaceName;
    /**
     * Ordering criteria
     *
     * @var string[]|null
     */
    protected $orders;
    /**
     * Criteria objects added to current Composite Criteria
     *
     * @return FrameworkCriteriaInterface[]|null
     */
    public function getCriteriaList(): ?array
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
    public function setCriteriaList(?array $criteriaList): self
    {
        $this->criteriaList = $criteriaList;
        return $this;
    }
    /**
     * List of filters
     *
     * @return string[]|null
     */
    public function getFilters(): ?array
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
    public function setFilters(?array $filters): self
    {
        $this->filters = $filters;
        return $this;
    }
    /**
     * Limit
     *
     * @return string[]|null
     */
    public function getLimit(): ?array
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
    public function setLimit(?array $limit): self
    {
        $this->limit = $limit;
        return $this;
    }
    /**
     * Associated Mapper Interface name
     *
     * @return string|null
     */
    public function getMapperInterfaceName(): ?string
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
    public function setMapperInterfaceName(?string $mapperInterfaceName): self
    {
        $this->mapperInterfaceName = $mapperInterfaceName;
        return $this;
    }
    /**
     * Ordering criteria
     *
     * @return string[]|null
     */
    public function getOrders(): ?array
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
    public function setOrders(?array $orders): self
    {
        $this->orders = $orders;
        return $this;
    }
}
