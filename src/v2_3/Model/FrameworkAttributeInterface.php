<?php

namespace Kiboko\Magento\V2_3\Model;

class FrameworkAttributeInterface
{
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
    public function getAttributeCode(): ?string
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
    public function setAttributeCode(?string $attributeCode): self
    {
        $this->attributeCode = $attributeCode;
        return $this;
    }
    /**
     * Attribute value
     *
     * @return string|array|null
     */
    public function getValue(): string|array|null
    {
        return $this->value;
    }
    /**
     * Attribute value
     *
     * @param string|array|null  $value
     *
     * @return self
     */
    public function setValue(string|array|null  $value): self
    {
        $this->value = $value;
        return $this;
    }
}
