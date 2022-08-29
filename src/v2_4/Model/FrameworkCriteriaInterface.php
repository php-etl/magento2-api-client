<?php

namespace Kiboko\Magento\v2_4\Model;

class FrameworkCriteriaInterface
{
    /**
     * Associated Mapper Interface name
     *
     * @var string
     */
    protected $mapperInterfaceName;
    /**
     * Criteria objects added to current Composite Criteria
     *
     * @var FrameworkCriteriaInterface[]
     */
    protected $criteriaList;
    /**
     * List of filters
     *
     * @var string[]
     */
    protected $filters;
    /**
     * Ordering criteria
     *
     * @var string[]
     */
    protected $orders;
    /**
     * Limit
     *
     * @var string[]
     */
    protected $limit;
    /**
     * Associated Mapper Interface name
     *
     * @return string
     */
    public function getMapperInterfaceName(): string
    {
        return $this->mapperInterfaceName;
    }
    /**
     * Associated Mapper Interface name
     *
     * @param string $mapperInterfaceName
     *
     * @return self
     */
    public function setMapperInterfaceName(string $mapperInterfaceName): self
    {
        $this->mapperInterfaceName = $mapperInterfaceName;
        return $this;
    }
    /**
     * Criteria objects added to current Composite Criteria
     *
     * @return FrameworkCriteriaInterface[]
     */
    public function getCriteriaList(): array
    {
        return $this->criteriaList;
    }
    /**
     * Criteria objects added to current Composite Criteria
     *
     * @param FrameworkCriteriaInterface[] $criteriaList
     *
     * @return self
     */
    public function setCriteriaList(array $criteriaList): self
    {
        $this->criteriaList = $criteriaList;
        return $this;
    }
    /**
     * List of filters
     *
     * @return string[]
     */
    public function getFilters(): array
    {
        return $this->filters;
    }
    /**
     * List of filters
     *
     * @param string[] $filters
     *
     * @return self
     */
    public function setFilters(array $filters): self
    {
        $this->filters = $filters;
        return $this;
    }
    /**
     * Ordering criteria
     *
     * @return string[]
     */
    public function getOrders(): array
    {
        return $this->orders;
    }
    /**
     * Ordering criteria
     *
     * @param string[] $orders
     *
     * @return self
     */
    public function setOrders(array $orders): self
    {
        $this->orders = $orders;
        return $this;
    }
    /**
     * Limit
     *
     * @return string[]
     */
    public function getLimit(): array
    {
        return $this->limit;
    }
    /**
     * Limit
     *
     * @param string[] $limit
     *
     * @return self
     */
    public function setLimit(array $limit): self
    {
        $this->limit = $limit;
        return $this;
    }
}
