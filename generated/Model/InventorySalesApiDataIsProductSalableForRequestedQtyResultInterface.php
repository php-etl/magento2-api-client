<?php

namespace Kiboko\Magento\Model;

class InventorySalesApiDataIsProductSalableForRequestedQtyResultInterface
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
     * Product sku from result.
     *
     * @var string|null
     */
    protected $sku;
    /**
     * Stock id from result.
     *
     * @var int|null
     */
    protected $stockId;
    /**
     * Is salable result.
     *
     * @var bool|null
     */
    protected $salable;
    /**
     * Errors from result.
     *
     * @var InventorySalesApiDataProductSalabilityErrorInterface[]|null
     */
    protected $errors;
    /**
     * ExtensionInterface class for @see \Magento\InventorySalesApi\Api\Data\IsProductSalableForRequestedQtyResultInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Product sku from result.
     *
     * @return string|null
     */
    public function getSku() : ?string
    {
        return $this->sku;
    }
    /**
     * Product sku from result.
     *
     * @param string|null $sku
     *
     * @return self
     */
    public function setSku(?string $sku) : self
    {
        $this->initialized['sku'] = true;
        $this->sku = $sku;
        return $this;
    }
    /**
     * Stock id from result.
     *
     * @return int|null
     */
    public function getStockId() : ?int
    {
        return $this->stockId;
    }
    /**
     * Stock id from result.
     *
     * @param int|null $stockId
     *
     * @return self
     */
    public function setStockId(?int $stockId) : self
    {
        $this->initialized['stockId'] = true;
        $this->stockId = $stockId;
        return $this;
    }
    /**
     * Is salable result.
     *
     * @return bool|null
     */
    public function getSalable() : ?bool
    {
        return $this->salable;
    }
    /**
     * Is salable result.
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
     * Errors from result.
     *
     * @return InventorySalesApiDataProductSalabilityErrorInterface[]|null
     */
    public function getErrors() : ?array
    {
        return $this->errors;
    }
    /**
     * Errors from result.
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
     * ExtensionInterface class for @see \Magento\InventorySalesApi\Api\Data\IsProductSalableForRequestedQtyResultInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventorySalesApi\Api\Data\IsProductSalableForRequestedQtyResultInterface
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