<?php

namespace Kiboko\Magento\V2_4\Model;

class FrameworkSearchFilterGroup
{
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
    public function getFilters(): ?array
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
    public function setFilters(?array $filters): self
    {
        $this->filters = $filters;
        return $this;
    }
}
