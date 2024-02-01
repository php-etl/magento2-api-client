<?php

namespace Kiboko\Magento\Model;

class InventorySalesApiDataProductSalableResultInterface
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
     * @var bool|null
     */
    protected $salable;
    /**
     * 
     *
     * @var InventorySalesApiDataProductSalabilityErrorInterface[]|null
     */
    protected $errors;
    /**
     * ExtensionInterface class for @see \Magento\InventorySalesApi\Api\Data\ProductSalableResultInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * 
     *
     * @return bool|null
     */
    public function getSalable() : ?bool
    {
        return $this->salable;
    }
    /**
     * 
     *
     * @param bool|null $salable
     *
     * @return self
     */
    public function setSalable(?bool $salable) : self
    {
        $this->initialized['salable'] = true;
        $this->salable = $salable;
        return $this;
    }
    /**
     * 
     *
     * @return InventorySalesApiDataProductSalabilityErrorInterface[]|null
     */
    public function getErrors() : ?array
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param InventorySalesApiDataProductSalabilityErrorInterface[]|null $errors
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
     * ExtensionInterface class for @see \Magento\InventorySalesApi\Api\Data\ProductSalableResultInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventorySalesApi\Api\Data\ProductSalableResultInterface
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