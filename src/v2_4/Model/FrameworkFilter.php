<?php

namespace Kiboko\Magento\V2_4\Model;

class FrameworkFilter
{
    /**
     * Condition type
     *
     * @var string|null
     */
    protected $conditionType;
    /**
     * Field
     *
     * @var string|null
     */
    protected $field;
    /**
     * Value
     *
     * @var string|null
     */
    protected $value;
    /**
     * Condition type
     *
     * @return string|null
     */
    public function getConditionType(): ?string
    {
        return $this->conditionType;
    }
    /**
     * Condition type
     *
     * @param string|null $conditionType
     *
     * @return self
     */
    public function setConditionType(?string $conditionType): self
    {
        $this->conditionType = $conditionType;
        return $this;
    }
    /**
     * Field
     *
     * @return string|null
     */
    public function getField(): ?string
    {
        return $this->field;
    }
    /**
     * Field
     *
     * @param string|null $field
     *
     * @return self
     */
    public function setField(?string $field): self
    {
        $this->field = $field;
        return $this;
    }
    /**
     * Value
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Value
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
