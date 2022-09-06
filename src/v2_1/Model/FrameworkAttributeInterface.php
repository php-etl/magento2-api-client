<?php

namespace Kiboko\Magento\V2_1\Model;

class FrameworkAttributeInterface
{
    /**
     * Attribute code
     *
     * @var string
     */
    protected $attributeCode;
    /**
     * Attribute value
     *
     * @var string
     */
    protected $value;
    /**
     * Attribute code
     *
     * @return string
     */
    public function getAttributeCode(): string
    {
        return $this->attributeCode;
    }
    /**
     * Attribute code
     *
     * @param string $attributeCode
     *
     * @return self
     */
    public function setAttributeCode(string $attributeCode): self
    {
        $this->attributeCode = $attributeCode;
        return $this;
    }
    /**
     * Attribute value
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Attribute value
     *
     * @param string|array $value
     *
     * @return self
     */
    public function setValue(string|array $value): self
    {
        $this->value = $value;
        return $this;
    }
}
