<?php

namespace Kiboko\Magento\Model;

class InventoryInStorePickupApiDataSearchRequestFilterInterface
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
     * Value.
     *
     * @var string|null
     */
    protected $value;
    /**
     * Condition Type.
     *
     * @var string|null
     */
    protected $conditionType;
    /**
     * Value.
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * Value.
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
     * Condition Type.
     *
     * @return string|null
     */
    public function getConditionType() : ?string
    {
        return $this->conditionType;
    }
    /**
     * Condition Type.
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