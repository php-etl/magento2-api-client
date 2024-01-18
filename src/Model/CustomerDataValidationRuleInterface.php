<?php

namespace Kiboko\Magento\Model;

class CustomerDataValidationRuleInterface
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
     * Validation rule name
     *
     * @var string|null
     */
    protected $name;
    /**
     * Validation rule value
     *
     * @var string|null
     */
    protected $value;
    /**
     * Validation rule name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Validation rule name
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
     * Validation rule value
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * Validation rule value
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
}