<?php

namespace Kiboko\Magento\Model;

class FrameworkAttributeInterface
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
     * Attribute code
     *
     * @var string|null
     */
    protected $attributeCode;
    /**
     * Attribute value
     *
     * @var string|null
     */
    protected $value;
    /**
     * Attribute code
     *
     * @return string|null
     */
    public function getAttributeCode() : ?string
    {
        return $this->attributeCode;
    }
    /**
     * Attribute code
     *
     * @param string|null $attributeCode
     *
     * @return self
     */
    public function setAttributeCode(?string $attributeCode) : self
    {
        $this->initialized['attributeCode'] = true;
        $this->attributeCode = $attributeCode;
        return $this;
    }
    /**
     * Attribute value
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * Attribute value
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