<?php

namespace Kiboko\Magento\v2_4\Model;

class FrameworkSearchFilterGroup
{
    /**
     * A list of filters in this group
     *
     * @var FrameworkFilter[]
     */
    protected $filters;
    /**
     * A list of filters in this group
     *
     * @return FrameworkFilter[]
     */
    public function getFilters(): array
    {
        return $this->filters;
    }
    /**
     * A list of filters in this group
     *
     * @param FrameworkFilter[] $filters
     *
     * @return self
     */
    public function setFilters(array $filters): self
    {
        $this->filters = $filters;
        return $this;
    }
}
