<?php

namespace Kiboko\Magento\V2\Model;

class EavDataAttributeValidationRuleInterface
{
    /**
     * Object key
     *
     * @var string
     */
    protected $key;
    /**
     * Object value
     *
     * @var string
     */
    protected $value;
    /**
     * Object key
     *
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     * Object key
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key) : self
    {
        $this->key = $key;
        return $this;
    }
    /**
     * Object value
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * Object value
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
}