<?php

namespace Kiboko\Magento\v2_1\Model;

class CatalogDataProductTypeInterface
{
    /**
     * Product type code
     *
     * @var string
     */
    protected $name;
    /**
     * Product type label
     *
     * @var string
     */
    protected $label;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductTypeInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Product type code
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Product type code
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Product type label
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
    /**
     * Product type label
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
}
