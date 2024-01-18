<?php

namespace Kiboko\Magento\Model;

class FrameworkSearchBucketInterface
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
     * Field name
     *
     * @var string|null
     */
    protected $name;
    /**
     * Field values
     *
     * @var FrameworkSearchAggregationValueInterface[]|null
     */
    protected $values;
    /**
     * Field name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Field name
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Field values
     *
     * @return FrameworkSearchAggregationValueInterface[]|null
     */
    public function getValues() : ?array
    {
        return $this->values;
    }
    /**
     * Field values
     *
     * @param FrameworkSearchAggregationValueInterface[]|null $values
     *
     * @return self
     */
    public function setValues(?array $values) : self
    {
        $this->initialized['values'] = true;
        $this->values = $values;
        return $this;
    }
}