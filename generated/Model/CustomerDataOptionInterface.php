<?php

namespace Kiboko\Magento\Model;

class CustomerDataOptionInterface
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
     * Option label
     *
     * @var string|null
     */
    protected $label;
    /**
     * Option value
     *
     * @var string|null
     */
    protected $value;
    /**
     * Nested options
     *
     * @var CustomerDataOptionInterface[]|null
     */
    protected $options;
    /**
     * Option label
     *
     * @return string|null
     */
    public function getLabel() : ?string
    {
        return $this->label;
    }
    /**
     * Option label
     *
     * @param string|null $label
     *
     * @return self
     */
    public function setLabel(?string $label) : self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * Option value
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * Option value
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
     * Nested options
     *
     * @return CustomerDataOptionInterface[]|null
     */
    public function getOptions() : ?array
    {
        return $this->options;
    }
    /**
     * Nested options
     *
     * @param CustomerDataOptionInterface[]|null $options
     *
     * @return self
     */
    public function setOptions(?array $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}