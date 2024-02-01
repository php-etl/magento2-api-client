<?php

namespace Kiboko\Magento\Model;

class InventoryInStorePickupSalesApiDataResultInterface
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
     * Operation result successful.
     *
     * @var bool|null
     */
    protected $successful;
    /**
     * Error information for failed operations.
     *
     * @var string[]|null
     */
    protected $errors;
    /**
     * ExtensionInterface class for @see \Magento\InventoryInStorePickupSalesApi\Api\Data\ResultInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Operation result successful.
     *
     * @return bool|null
     */
    public function getSuccessful() : ?bool
    {
        return $this->successful;
    }
    /**
     * Operation result successful.
     *
     * @param bool|null $successful
     *
     * @return self
     */
    public function setSuccessful(?bool $successful) : self
    {
        $this->initialized['successful'] = true;
        $this->successful = $successful;
        return $this;
    }
    /**
     * Error information for failed operations.
     *
     * @return string[]|null
     */
    public function getErrors() : ?array
    {
        return $this->errors;
    }
    /**
     * Error information for failed operations.
     *
     * @param string[]|null $errors
     *
     * @return self
     */
    public function setErrors(?array $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventoryInStorePickupSalesApi\Api\Data\ResultInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventoryInStorePickupSalesApi\Api\Data\ResultInterface
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