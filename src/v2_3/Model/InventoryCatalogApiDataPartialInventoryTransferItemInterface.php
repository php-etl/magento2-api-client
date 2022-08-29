<?php

namespace Kiboko\Magento\v2_3\Model;

class InventoryCatalogApiDataPartialInventoryTransferItemInterface
{
    /**
     * 
     *
     * @var string
     */
    protected $sku;
    /**
     * 
     *
     * @var float
     */
    protected $qty;
    /**
     * 
     *
     * @return string
     */
    public function getSku() : string
    {
        return $this->sku;
    }
    /**
     * 
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
     * 
     *
     * @return float
     */
    public function getQty() : float
    {
        return $this->qty;
    }
    /**
     * 
     *
     * @param float $qty
     *
     * @return self
     */
    public function setQty(float $qty) : self
    {
        $this->qty = $qty;
        return $this;
    }
}