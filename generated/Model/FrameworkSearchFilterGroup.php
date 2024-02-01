<?php

namespace Kiboko\Magento\Model;

class FrameworkSearchFilterGroup
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
     * A list of filters in this group
     *
     * @var FrameworkFilter[]|null
     */
    protected $filters;
    /**
     * A list of filters in this group
     *
     * @return FrameworkFilter[]|null
     */
    public function getFilters() : ?array
    {
        return $this->filters;
    }
    /**
     * A list of filters in this group
     *
     * @param FrameworkFilter[]|null $filters
     *
     * @return self
     */
    public function setFilters(?array $filters) : self
    {
        $this->initialized['filters'] = true;
        $this->filters = $filters;
        return $this;
    }
}