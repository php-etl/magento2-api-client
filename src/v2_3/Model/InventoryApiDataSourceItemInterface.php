<?php

namespace Kiboko\Magento\v2_3\Model;

class InventoryApiDataSourceItemInterface
{
    /**
     * Source item sku
     *
     * @var string
     */
    protected $sku;
    /**
     * Source code
     *
     * @var string
     */
    protected $sourceCode;
    /**
     * Source item quantity
     *
     * @var float
     */
    protected $quantity;
    /**
     * Source item status (One of self::STATUS_*)
     *
     * @var int
     */
    protected $status;
    /**
     * ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\SourceItemInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Source item sku
     *
     * @return string
     */
    public function getSku() : string
    {
        return $this->sku;
    }
    /**
     * Source item sku
     *
     * @param string $sku
     *
     * @return self
     */
    public function setSku(string $sku) : self
    {
        $this->sku = $sku;
        return $this;
    }
    /**
     * Source code
     *
     * @return string
     */
    public function getSourceCode() : string
    {
        return $this->sourceCode;
    }
    /**
     * Source code
     *
     * @param string $sourceCode
     *
     * @return self
     */
    public function setSourceCode(string $sourceCode) : self
    {
        $this->sourceCode = $sourceCode;
        return $this;
    }
    /**
     * Source item quantity
     *
     * @return float
     */
    public function getQuantity() : float
    {
        return $this->quantity;
    }
    /**
     * Source item quantity
     *
     * @param float $quantity
     *
     * @return self
     */
    public function setQuantity(float $quantity) : self
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Source item status (One of self::STATUS_*)
     *
     * @return int
     */
    public function getStatus() : int
    {
        return $this->status;
    }
    /**
     * Source item status (One of self::STATUS_*)
     *
     * @param int $status
     *
     * @return self
     */
    public function setStatus(int $status) : self
    {
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
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}