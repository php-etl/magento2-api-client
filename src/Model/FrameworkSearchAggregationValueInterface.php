<?php

namespace Kiboko\Magento\Model;

class FrameworkSearchAggregationValueInterface
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
     * Aggregation
     *
     * @var string|null
     */
    protected $value;
    /**
     * Metrics
     *
     * @var string[]|null
     */
    protected $metrics;
    /**
     * Aggregation
     *
     * @return string|null
     */
    public function getValue() : ?string
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
    public function setValue(?string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Metrics
     *
     * @return string[]|null
     */
    public function getMetrics() : ?array
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
    public function setMetrics(?array $metrics) : self
    {
        $this->initialized['metrics'] = true;
        $this->metrics = $metrics;
        return $this;
    }
}