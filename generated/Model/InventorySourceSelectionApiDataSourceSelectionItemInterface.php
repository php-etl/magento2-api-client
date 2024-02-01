<?php

namespace Kiboko\Magento\Model;

class InventorySourceSelectionApiDataSourceSelectionItemInterface
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
     * Source code
     *
     * @var string|null
     */
    protected $sourceCode;
    /**
     * Item SKU
     *
     * @var string|null
     */
    protected $sku;
    /**
     * Quantity which will be deducted for this source
     *
     * @var float|null
     */
    protected $qtyToDeduct;
    /**
     * Available quantity for this source
     *
     * @var float|null
     */
    protected $qtyAvailable;
    /**
     * ExtensionInterface class for @see \Magento\InventorySourceSelectionApi\Api\Data\SourceSelectionItemInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
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
     * Item SKU
     *
     * @return string|null
     */
    public function getSku() : ?string
    {
        return $this->sku;
    }
    /**
     * Item SKU
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
     * Quantity which will be deducted for this source
     *
     * @return float|null
     */
    public function getQtyToDeduct() : ?float
    {
        return $this->qtyToDeduct;
    }
    /**
     * Quantity which will be deducted for this source
     *
     * @param float|null $qtyToDeduct
     *
     * @return self
     */
    public function setQtyToDeduct(?float $qtyToDeduct) : self
    {
        $this->initialized['qtyToDeduct'] = true;
        $this->qtyToDeduct = $qtyToDeduct;
        return $this;
    }
    /**
     * Available quantity for this source
     *
     * @return float|null
     */
    public function getQtyAvailable() : ?float
    {
        return $this->qtyAvailable;
    }
    /**
     * Available quantity for this source
     *
     * @param float|null $qtyAvailable
     *
     * @return self
     */
    public function setQtyAvailable(?float $qtyAvailable) : self
    {
        $this->initialized['qtyAvailable'] = true;
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
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}