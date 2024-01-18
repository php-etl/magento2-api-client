<?php

namespace Kiboko\Magento\Model;

class InventoryApiDataSourceItemInterface
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
     * Source item sku
     *
     * @var string|null
     */
    protected $sku;
    /**
     * Source code
     *
     * @var string|null
     */
    protected $sourceCode;
    /**
     * Source item quantity
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * Source item status (One of self::STATUS_*)
     *
     * @var int|null
     */
    protected $status;
    /**
     * ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\SourceItemInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Source item sku
     *
     * @return string|null
     */
    public function getSku() : ?string
    {
        return $this->sku;
    }
    /**
     * Source item sku
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
     * Source code
     *
     * @return string|null
     */
    public function getSourceCode() : ?string
    {
        return $this->sourceCode;
    }
    /**
     * Source code
     *
     * @param string|null $sourceCode
     *
     * @return self
     */
    public function setSourceCode(?string $sourceCode) : self
    {
        $this->initialized['sourceCode'] = true;
        $this->sourceCode = $sourceCode;
        return $this;
    }
    /**
     * Source item quantity
     *
     * @return float|null
     */
    public function getQuantity() : ?float
    {
        return $this->quantity;
    }
    /**
     * Source item quantity
     *
     * @param float|null $quantity
     *
     * @return self
     */
    public function setQuantity(?float $quantity) : self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Source item status (One of self::STATUS_*)
     *
     * @return int|null
     */
    public function getStatus() : ?int
    {
        return $this->status;
    }
    /**
     * Source item status (One of self::STATUS_*)
     *
     * @param int|null $status
     *
     * @return self
     */
    public function setStatus(?int $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\SourceItemInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\SourceItemInterface
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