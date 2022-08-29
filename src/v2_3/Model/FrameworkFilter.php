<?php

namespace Kiboko\Magento\v2_3\Model;

class FrameworkFilter
{
    /**
     * Field
     *
     * @var string
     */
    protected $field;
    /**
     * Value
     *
     * @var string
     */
    protected $value;
    /**
     * Condition type
     *
     * @var string
     */
    protected $conditionType;
    /**
     * Field
     *
     * @return string
     */
    public function getField() : string
    {
        return $this->field;
    }
    /**
     * Field
     *
     * @param string $field
     *
     * @return self
     */
    public function setField(string $field) : self
    {
        $this->field = $field;
        return $this;
    }
    /**
     * Value
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * Value
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->value = $value;
        return $this;
    }
    /**
     * Condition type
     *
     * @return string
     */
    public function getConditionType() : string
    {
        return $this->conditionType;
    }
    /**
     * Condition type
     *
     * @param string $conditionType
     *
     * @return self
     */
    public function setConditionType(string $conditionType) : self
    {
        $this->conditionType = $conditionType;
        return $this;
    }
}