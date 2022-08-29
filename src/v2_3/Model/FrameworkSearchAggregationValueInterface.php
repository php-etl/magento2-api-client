<?php

namespace Kiboko\Magento\v2_3\Model;

class FrameworkSearchAggregationValueInterface
{
    /**
     * Metrics
     *
     * @var string[]
     */
    protected $metrics;
    /**
     * Aggregation
     *
     * @var string
     */
    protected $value;
    /**
     * Metrics
     *
     * @return string[]
     */
    public function getMetrics(): array
    {
        return $this->metrics;
    }
    /**
     * Metrics
     *
     * @param string[] $metrics
     *
     * @return self
     */
    public function setMetrics(array $metrics): self
    {
        $this->metrics = $metrics;
        return $this;
    }
    /**
     * Aggregation
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Aggregation
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->value = $value;
        return $this;
    }
}
