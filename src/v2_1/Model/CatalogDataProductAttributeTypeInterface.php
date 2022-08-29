<?php

namespace Kiboko\Magento\v2_1\Model;

class CatalogDataProductAttributeTypeInterface
{
    /**
     * Value
     *
     * @var string
     */
    protected $value;
    /**
     * Type label
     *
     * @var string
     */
    protected $label;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductAttributeTypeInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Value
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Value
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->value = $value;
        return $this;
    }
    /**
     * Type label
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
    /**
     * Type label
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->label = $label;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductAttributeTypeInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductAttributeTypeInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
