<?php

namespace Kiboko\Magento\Model;

class FrameworkFilter
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
     * @var string|null
     */
    protected $conditionType;
    /**
     * Field
     *
     * @return string|null
     */
    public function getField() : ?string
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
    public function setField(?string $field) : self
    {
        $this->initialized['field'] = true;
        $this->field = $field;
        return $this;
    }
    /**
     * Value
     *
     * @return string|null
     */
    public function getValue() : ?string
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
    public function setValue(?string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Condition type
     *
     * @return string|null
     */
    public function getConditionType() : ?string
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
    public function setConditionType(?string $conditionType) : self
    {
        $this->initialized['conditionType'] = true;
        $this->conditionType = $conditionType;
        return $this;
    }
}