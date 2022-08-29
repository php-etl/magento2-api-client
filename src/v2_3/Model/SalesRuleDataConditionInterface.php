<?php

namespace Kiboko\Magento\v2_3\Model;

class SalesRuleDataConditionInterface
{
    /**
     * Condition type
     *
     * @var string
     */
    protected $conditionType;
    /**
     * List of conditions
     *
     * @var SalesRuleDataConditionInterface[]
     */
    protected $conditions;
    /**
     * The aggregator type
     *
     * @var string
     */
    protected $aggregatorType;
    /**
     * The operator of the condition
     *
     * @var string
     */
    protected $operator;
    /**
     * The attribute name of the condition
     *
     * @var string
     */
    protected $attributeName;
    /**
     * The value of the condition
     *
     * @var string
     */
    protected $value;
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\ConditionInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
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
    /**
     * List of conditions
     *
     * @return SalesRuleDataConditionInterface[]
     */
    public function getConditions() : array
    {
        return $this->conditions;
    }
    /**
     * List of conditions
     *
     * @param SalesRuleDataConditionInterface[] $conditions
     *
     * @return self
     */
    public function setConditions(array $conditions) : self
    {
        $this->conditions = $conditions;
        return $this;
    }
    /**
     * The aggregator type
     *
     * @return string
     */
    public function getAggregatorType() : string
    {
        return $this->aggregatorType;
    }
    /**
     * The aggregator type
     *
     * @param string $aggregatorType
     *
     * @return self
     */
    public function setAggregatorType(string $aggregatorType) : self
    {
        $this->aggregatorType = $aggregatorType;
        return $this;
    }
    /**
     * The operator of the condition
     *
     * @return string
     */
    public function getOperator() : string
    {
        return $this->operator;
    }
    /**
     * The operator of the condition
     *
     * @param string $operator
     *
     * @return self
     */
    public function setOperator(string $operator) : self
    {
        $this->operator = $operator;
        return $this;
    }
    /**
     * The attribute name of the condition
     *
     * @return string
     */
    public function getAttributeName() : string
    {
        return $this->attributeName;
    }
    /**
     * The attribute name of the condition
     *
     * @param string $attributeName
     *
     * @return self
     */
    public function setAttributeName(string $attributeName) : self
    {
        $this->attributeName = $attributeName;
        return $this;
    }
    /**
     * The value of the condition
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * The value of the condition
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
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}