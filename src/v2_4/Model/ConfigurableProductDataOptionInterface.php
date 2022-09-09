<?php

namespace Kiboko\Magento\V2_4\Model;

class ConfigurableProductDataOptionInterface
{
    /**
     *
     *
     * @var string|null
     */
    protected $attributeId;
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
    protected $id;
    /**
     *
     *
     * @var bool|null
     */
    protected $isUseDefault;
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
     * @var int|null
     */
    protected $productId;
    /**
     *
     *
     * @var ConfigurableProductDataOptionValueInterface[]|null
     */
    protected $values;
    /**
     *
     *
     * @return string|null
     */
    public function getAttributeId(): ?string
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
    public function setAttributeId(?string $attributeId): self
    {
        $this->attributeId = $attributeId;
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
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getId(): ?int
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
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIsUseDefault(): ?bool
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
    public function setIsUseDefault(?bool $isUseDefault): self
    {
        $this->isUseDefault = $isUseDefault;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getLabel(): ?string
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
    public function setLabel(?string $label): self
    {
        $this->label = $label;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getPosition(): ?int
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
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getProductId(): ?int
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
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }
    /**
     *
     *
     * @return ConfigurableProductDataOptionValueInterface[]|null
     */
    public function getValues(): ?array
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
    public function setValues(?array $values): self
    {
        $this->values = $values;
        return $this;
    }
}
