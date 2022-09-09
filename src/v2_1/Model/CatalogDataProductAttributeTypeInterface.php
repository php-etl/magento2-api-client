<?php

namespace Kiboko\Magento\V2_1\Model;

class CatalogDataProductAttributeTypeInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductAttributeTypeInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Type label
     *
     * @var string|null
     */
    protected $label;
    /**
     * Value
     *
     * @var string|null
     */
    protected $value;
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
    /**
     * Type label
     *
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }
    /**
     * Type label
     *
     * @param string|null $label
     *
     * @return self
     */
    public function setLabel(?string $label): self
    {
        $this->label = $label;
        return $this;
    }
    /**
     * Value
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Value
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }
}
