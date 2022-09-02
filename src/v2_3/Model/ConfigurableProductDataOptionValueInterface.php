<?php

namespace Kiboko\Magento\V2_3\Model;

class ConfigurableProductDataOptionValueInterface
{
    /**
     * ExtensionInterface class for @see \Magento\ConfigurableProduct\Api\Data\OptionValueInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @var int
     */
    protected $valueIndex;
    /**
     * ExtensionInterface class for @see \Magento\ConfigurableProduct\Api\Data\OptionValueInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\ConfigurableProduct\Api\Data\OptionValueInterface
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
    public function getValueIndex(): int
    {
        return $this->valueIndex;
    }
    /**
     *
     *
     * @param int $valueIndex
     *
     * @return self
     */
    public function setValueIndex(int $valueIndex): self
    {
        $this->valueIndex = $valueIndex;
        return $this;
    }
}
