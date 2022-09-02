<?php

namespace Kiboko\Magento\V2_1\Model;

class FrameworkSearchBucketInterface
{
    /**
     * Field name
     *
     * @var string
     */
    protected $name;
    /**
     * Field values
     *
     * @var FrameworkSearchAggregationValueInterface[]
     */
    protected $values;
    /**
     * Field name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Field name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Field values
     *
     * @return FrameworkSearchAggregationValueInterface[]
     */
    public function getValues(): array
    {
        return $this->values;
    }
    /**
     * Field values
     *
     * @param FrameworkSearchAggregationValueInterface[] $values
     *
     * @return self
     */
    public function setValues(array $values): self
    {
        $this->values = $values;
        return $this;
    }
}
