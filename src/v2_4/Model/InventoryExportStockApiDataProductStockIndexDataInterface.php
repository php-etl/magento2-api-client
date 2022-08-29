<?php

namespace Kiboko\Magento\v2_4\Model;

class InventoryExportStockApiDataProductStockIndexDataInterface
{
    /**
     * Product SKU
     *
     * @var string
     */
    protected $sku;
    /**
     * Product QTY
     *
     * @var float
     */
    protected $qty;
    /**
     * Product is salable flag
     *
     * @var bool
     */
    protected $isSalable;
    /**
     * Product SKU
     *
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }
    /**
     * Product SKU
     *
     * @param string $sku
     *
     * @return self
     */
    public function setSku(string $sku): self
    {
        $this->sku = $sku;
        return $this;
    }
    /**
     * Product QTY
     *
     * @return float
     */
    public function getQty(): float
    {
        return $this->qty;
    }
    /**
     * Product QTY
     *
     * @param float $qty
     *
     * @return self
     */
    public function setQty(float $qty): self
    {
        $this->qty = $qty;
        return $this;
    }
    /**
     * Product is salable flag
     *
     * @return bool
     */
    public function getIsSalable(): bool
    {
        return $this->isSalable;
    }
    /**
     * Product is salable flag
     *
     * @param bool $isSalable
     *
     * @return self
     */
    public function setIsSalable(bool $isSalable): self
    {
        $this->isSalable = $isSalable;
        return $this;
    }
}
