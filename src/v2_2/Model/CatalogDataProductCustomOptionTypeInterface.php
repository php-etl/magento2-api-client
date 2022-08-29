<?php

namespace Kiboko\Magento\v2_2\Model;

class CatalogDataProductCustomOptionTypeInterface
{
    /**
     * Option type label
     *
     * @var string
     */
    protected $label;
    /**
     * Option type code
     *
     * @var string
     */
    protected $code;
    /**
     * Option type group
     *
     * @var string
     */
    protected $group;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductCustomOptionTypeInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Option type label
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
    /**
     * Option type label
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
     * Option type code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Option type code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Option type group
     *
     * @return string
     */
    public function getGroup(): string
    {
        return $this->group;
    }
    /**
     * Option type group
     *
     * @param string $group
     *
     * @return self
     */
    public function setGroup(string $group): self
    {
        $this->group = $group;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductCustomOptionTypeInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductCustomOptionTypeInterface
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
