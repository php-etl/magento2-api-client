<?php

namespace Kiboko\Magento\v2_3\Model;

class InventorySalesApiDataProductSalableResultInterface
{
    /**
     *
     *
     * @var bool
     */
    protected $salable;
    /**
     *
     *
     * @var InventorySalesApiDataProductSalabilityErrorInterface[]
     */
    protected $errors;
    /**
     * ExtensionInterface class for @see \Magento\InventorySalesApi\Api\Data\ProductSalableResultInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @return bool
     */
    public function getSalable(): bool
    {
        return $this->salable;
    }
    /**
     *
     *
     * @param bool $salable
     *
     * @return self
     */
    public function setSalable(bool $salable): self
    {
        $this->salable = $salable;
        return $this;
    }
    /**
     *
     *
     * @return InventorySalesApiDataProductSalabilityErrorInterface[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    /**
     *
     *
     * @param InventorySalesApiDataProductSalabilityErrorInterface[] $errors
     *
     * @return self
     */
    public function setErrors(array $errors): self
    {
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
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
