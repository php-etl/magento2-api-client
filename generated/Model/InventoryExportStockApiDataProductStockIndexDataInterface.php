<?php

namespace Kiboko\Magento\Model;

class InventoryExportStockApiDataProductStockIndexDataInterface
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
     * Product SKU
     *
     * @var string|null
     */
    protected $sku;
    /**
     * Product QTY
     *
     * @var float|null
     */
    protected $qty;
    /**
     * Product is salable flag
     *
     * @var bool|null
     */
    protected $isSalable;
    /**
     * Product SKU
     *
     * @return string|null
     */
    public function getSku() : ?string
    {
        return $this->sku;
    }
    /**
     * Product SKU
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
     * Product QTY
     *
     * @return float|null
     */
    public function getQty() : ?float
    {
        return $this->qty;
    }
    /**
     * Product QTY
     *
     * @param float|null $qty
     *
     * @return self
     */
    public function setQty(?float $qty) : self
    {
        $this->initialized['qty'] = true;
        $this->qty = $qty;
        return $this;
    }
    /**
     * Product is salable flag
     *
     * @return bool|null
     */
    public function getIsSalable() : ?bool
    {
        return $this->isSalable;
    }
    /**
     * Product is salable flag
     *
     * @param bool|null $isSalable
     *
     * @return self
     */
    public function setIsSalable(?bool $isSalable) : self
    {
        $this->initialized['isSalable'] = true;
        $this->isSalable = $isSalable;
        return $this;
    }
}