<?php

namespace Kiboko\Magento\V2_2\Model;

class ConfigurableProductDataOptionInterface
{
    /**
     *
     *
     * @var string
     */
    protected $attributeId;
    /**
     * ExtensionInterface class for @see \Magento\ConfigurableProduct\Api\Data\OptionInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @var int
     */
    protected $id;
    /**
     *
     *
     * @var bool
     */
    protected $isUseDefault;
    /**
     *
     *
     * @var string
     */
    protected $label;
    /**
     *
     *
     * @var int
     */
    protected $position;
    /**
     *
     *
     * @var int
     */
    protected $productId;
    /**
     *
     *
     * @var ConfigurableProductDataOptionValueInterface[]
     */
    protected $values;
    /**
     *
     *
     * @return string
     */
    public function getAttributeId(): string
    {
        return $this->attributeId;
    }
    /**
     *
     *
     * @param string $attributeId
     *
     * @return self
     */
    public function setAttributeId(string $attributeId): self
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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     *
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getIsUseDefault(): bool
    {
        return $this->isUseDefault;
    }
    /**
     *
     *
     * @param bool $isUseDefault
     *
     * @return self
     */
    public function setIsUseDefault(bool $isUseDefault): self
    {
        $this->isUseDefault = $isUseDefault;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
    /**
     *
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
     *
     *
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
    /**
     *
     *
     * @param int $position
     *
     * @return self
     */
    public function setPosition(int $position): self
    {
        $this->position = $position;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getProductId(): int
    {
        return $this->productId;
    }
    /**
     *
     *
     * @param int $productId
     *
     * @return self
     */
    public function setProductId(int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }
    /**
     *
     *
     * @return ConfigurableProductDataOptionValueInterface[]
     */
    public function getValues(): array
    {
        return $this->values;
    }
    /**
     *
     *
     * @param ConfigurableProductDataOptionValueInterface[] $values
     *
     * @return self
     */
    public function setValues(array $values): self
    {
        $this->values = $values;
        return $this;
    }
}
