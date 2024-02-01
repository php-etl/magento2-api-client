<?php

namespace Kiboko\Magento\Model;

class ConfigurableProductDataOptionInterface
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
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $attributeId;
    /**
     * 
     *
     * @var string|null
     */
    protected $label;
    /**
     * 
     *
     * @var int|null
     */
    protected $position;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isUseDefault;
    /**
     * 
     *
     * @var ConfigurableProductDataOptionValueInterface[]|null
     */
    protected $values;
    /**
     * ExtensionInterface class for @see \Magento\ConfigurableProduct\Api\Data\OptionInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * 
     *
     * @var int|null
     */
    protected $productId;
    /**
     * 
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAttributeId() : ?string
    {
        return $this->attributeId;
    }
    /**
     * 
     *
     * @param string|null $attributeId
     *
     * @return self
     */
    public function setAttributeId(?string $attributeId) : self
    {
        $this->initialized['attributeId'] = true;
        $this->attributeId = $attributeId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLabel() : ?string
    {
        return $this->label;
    }
    /**
     * 
     *
     * @param string|null $label
     *
     * @return self
     */
    public function setLabel(?string $label) : self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPosition() : ?int
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param int|null $position
     *
     * @return self
     */
    public function setPosition(?int $position) : self
    {
        $this->initialized['position'] = true;
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsUseDefault() : ?bool
    {
        return $this->isUseDefault;
    }
    /**
     * 
     *
     * @param bool|null $isUseDefault
     *
     * @return self
     */
    public function setIsUseDefault(?bool $isUseDefault) : self
    {
        $this->initialized['isUseDefault'] = true;
        $this->isUseDefault = $isUseDefault;
        return $this;
    }
    /**
     * 
     *
     * @return ConfigurableProductDataOptionValueInterface[]|null
     */
    public function getValues() : ?array
    {
        return $this->values;
    }
    /**
     * 
     *
     * @param ConfigurableProductDataOptionValueInterface[]|null $values
     *
     * @return self
     */
    public function setValues(?array $values) : self
    {
        $this->initialized['values'] = true;
        $this->values = $values;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\ConfigurableProduct\Api\Data\OptionInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\ConfigurableProduct\Api\Data\OptionInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getProductId() : ?int
    {
        return $this->productId;
    }
    /**
     * 
     *
     * @param int|null $productId
     *
     * @return self
     */
    public function setProductId(?int $productId) : self
    {
        $this->initialized['productId'] = true;
        $this->productId = $productId;
        return $this;
    }
}