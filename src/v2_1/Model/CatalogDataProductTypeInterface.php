<?php

namespace Kiboko\Magento\V2_1\Model;

class CatalogDataProductTypeInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductTypeInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Product type label
     *
     * @var string|null
     */
    protected $label;
    /**
     * Product type code
     *
     * @var string|null
     */
    protected $name;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductTypeInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductTypeInterface
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
     * Product type label
     *
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }
    /**
     * Product type label
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
     * Product type code
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Product type code
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
