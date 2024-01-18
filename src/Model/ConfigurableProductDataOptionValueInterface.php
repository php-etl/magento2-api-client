<?php

namespace Kiboko\Magento\Model;

class ConfigurableProductDataOptionValueInterface
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
    protected $valueIndex;
    /**
     * ExtensionInterface class for @see \Magento\ConfigurableProduct\Api\Data\OptionValueInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * 
     *
     * @return int|null
     */
    public function getValueIndex() : ?int
    {
        return $this->valueIndex;
    }
    /**
     * 
     *
     * @param int|null $valueIndex
     *
     * @return self
     */
    public function setValueIndex(?int $valueIndex) : self
    {
        $this->initialized['valueIndex'] = true;
        $this->valueIndex = $valueIndex;
        return $this;
    }
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
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}