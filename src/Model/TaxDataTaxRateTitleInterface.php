<?php

namespace Kiboko\Magento\Model;

class TaxDataTaxRateTitleInterface
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
     * Store id
     *
     * @var string|null
     */
    protected $storeId;
    /**
     * Title value
     *
     * @var string|null
     */
    protected $value;
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\TaxRateTitleInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Store id
     *
     * @return string|null
     */
    public function getStoreId() : ?string
    {
        return $this->storeId;
    }
    /**
     * Store id
     *
     * @param string|null $storeId
     *
     * @return self
     */
    public function setStoreId(?string $storeId) : self
    {
        $this->initialized['storeId'] = true;
        $this->storeId = $storeId;
        return $this;
    }
    /**
     * Title value
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * Title value
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\TaxRateTitleInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\TaxRateTitleInterface
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