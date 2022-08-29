<?php

namespace Kiboko\Magento\v2_3\Model;

class InventorySourceSelectionApiDataSourceSelectionItemInterface
{
    /**
     * Source code
     *
     * @var string
     */
    protected $sourceCode;
    /**
     * Item SKU
     *
     * @var string
     */
    protected $sku;
    /**
     * Quantity which will be deducted for this source
     *
     * @var float
     */
    protected $qtyToDeduct;
    /**
     * Available quantity for this source
     *
     * @var float
     */
    protected $qtyAvailable;
    /**
     * ExtensionInterface class for @see \Magento\InventorySourceSelectionApi\Api\Data\SourceSelectionItemInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
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
     * Item SKU
     *
     * @return string
     */
    public function getSku() : string
    {
        return $this->sku;
    }
    /**
     * Item SKU
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
     * Quantity which will be deducted for this source
     *
     * @return float
     */
    public function getQtyToDeduct() : float
    {
        return $this->qtyToDeduct;
    }
    /**
     * Quantity which will be deducted for this source
     *
     * @param float $qtyToDeduct
     *
     * @return self
     */
    public function setQtyToDeduct(float $qtyToDeduct) : self
    {
        $this->qtyToDeduct = $qtyToDeduct;
        return $this;
    }
    /**
     * Available quantity for this source
     *
     * @return float
     */
    public function getQtyAvailable() : float
    {
        return $this->qtyAvailable;
    }
    /**
     * Available quantity for this source
     *
     * @param float $qtyAvailable
     *
     * @return self
     */
    public function setQtyAvailable(float $qtyAvailable) : self
    {
        $this->qtyAvailable = $qtyAvailable;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventorySourceSelectionApi\Api\Data\SourceSelectionItemInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventorySourceSelectionApi\Api\Data\SourceSelectionItemInterface
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