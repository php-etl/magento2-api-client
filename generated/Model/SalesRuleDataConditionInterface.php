<?php

namespace Kiboko\Magento\Model;

class SalesRuleDataConditionInterface
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
     * Condition type
     *
     * @var string|null
     */
    protected $conditionType;
    /**
     * List of conditions
     *
     * @var SalesRuleDataConditionInterface[]|null
     */
    protected $conditions;
    /**
     * The aggregator type
     *
     * @var string|null
     */
    protected $aggregatorType;
    /**
     * The operator of the condition
     *
     * @var string|null
     */
    protected $operator;
    /**
     * The attribute name of the condition
     *
     * @var string|null
     */
    protected $attributeName;
    /**
     * The value of the condition
     *
     * @var string|null
     */
    protected $value;
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\ConditionInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
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
    /**
     * List of conditions
     *
     * @return SalesRuleDataConditionInterface[]|null
     */
    public function getConditions() : ?array
    {
        return $this->conditions;
    }
    /**
     * List of conditions
     *
     * @param SalesRuleDataConditionInterface[]|null $conditions
     *
     * @return self
     */
    public function setConditions(?array $conditions) : self
    {
        $this->initialized['conditions'] = true;
        $this->conditions = $conditions;
        return $this;
    }
    /**
     * The aggregator type
     *
     * @return string|null
     */
    public function getAggregatorType() : ?string
    {
        return $this->aggregatorType;
    }
    /**
     * The aggregator type
     *
     * @param string|null $aggregatorType
     *
     * @return self
     */
    public function setAggregatorType(?string $aggregatorType) : self
    {
        $this->initialized['aggregatorType'] = true;
        $this->aggregatorType = $aggregatorType;
        return $this;
    }
    /**
     * The operator of the condition
     *
     * @return string|null
     */
    public function getOperator() : ?string
    {
        return $this->operator;
    }
    /**
     * The operator of the condition
     *
     * @param string|null $operator
     *
     * @return self
     */
    public function setOperator(?string $operator) : self
    {
        $this->initialized['operator'] = true;
        $this->operator = $operator;
        return $this;
    }
    /**
     * The attribute name of the condition
     *
     * @return string|null
     */
    public function getAttributeName() : ?string
    {
        return $this->attributeName;
    }
    /**
     * The attribute name of the condition
     *
     * @param string|null $attributeName
     *
     * @return self
     */
    public function setAttributeName(?string $attributeName) : self
    {
        $this->initialized['attributeName'] = true;
        $this->attributeName = $attributeName;
        return $this;
    }
    /**
     * The value of the condition
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * The value of the condition
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
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\ConditionInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\ConditionInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}