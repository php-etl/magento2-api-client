<?php

namespace Kiboko\Magento\V2_3\Model;

class ConfigurableProductDataConfigurableItemOptionValueInterface
{
    /**
     * ExtensionInterface class for @see \Magento\ConfigurableProduct\Api\Data\ConfigurableItemOptionValueInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Option SKU
     *
     * @var string
     */
    protected $optionId;
    /**
     * Item id
     *
     * @var int
     */
    protected $optionValue;
    /**
     * ExtensionInterface class for @see \Magento\ConfigurableProduct\Api\Data\ConfigurableItemOptionValueInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\ConfigurableProduct\Api\Data\ConfigurableItemOptionValueInterface
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
     * Option SKU
     *
     * @return string
     */
    public function getOptionId(): string
    {
        return $this->optionId;
    }
    /**
     * Option SKU
     *
     * @param string $optionId
     *
     * @return self
     */
    public function setOptionId(string $optionId): self
    {
        $this->optionId = $optionId;
        return $this;
    }
    /**
     * Item id
     *
     * @return int
     */
    public function getOptionValue(): int
    {
        return $this->optionValue;
    }
    /**
     * Item id
     *
     * @param int $optionValue
     *
     * @return self
     */
    public function setOptionValue(int $optionValue): self
    {
        $this->optionValue = $optionValue;
        return $this;
    }
}
