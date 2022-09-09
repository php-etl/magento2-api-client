<?php

namespace Kiboko\Magento\V2_3\Model;

class FrameworkSearchAggregationValueInterface
{
    /**
     * Metrics
     *
     * @var string[]|null
     */
    protected $metrics;
    /**
     * Aggregation
     *
     * @var string|null
     */
    protected $value;
    /**
     * Metrics
     *
     * @return string[]|null
     */
    public function getMetrics(): ?array
    {
        return $this->metrics;
    }
    /**
     * Metrics
     *
     * @param string[]|null $metrics
     *
     * @return self
     */
    public function setMetrics(?array $metrics): self
    {
        $this->metrics = $metrics;
        return $this;
    }
    /**
     * Aggregation
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Aggregation
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }
}
