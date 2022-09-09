<?php

namespace Kiboko\Magento\V2_1\Model;

class FrameworkSearchBucketInterface
{
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
    public function getName(): ?string
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
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Field values
     *
     * @return FrameworkSearchAggregationValueInterface[]|null
     */
    public function getValues(): ?array
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
    public function setValues(?array $values): self
    {
        $this->values = $values;
        return $this;
    }
}
