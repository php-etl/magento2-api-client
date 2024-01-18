<?php

namespace Kiboko\Magento\Model;

class EavDataAttributeValidationRuleInterface
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
     * Object key
     *
     * @var string|null
     */
    protected $key;
    /**
     * Object value
     *
     * @var string|null
     */
    protected $value;
    /**
     * Object key
     *
     * @return string|null
     */
    public function getKey() : ?string
    {
        return $this->key;
    }
    /**
     * Object key
     *
     * @param string|null $key
     *
     * @return self
     */
    public function setKey(?string $key) : self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
    /**
     * Object value
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * Object value
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