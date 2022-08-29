<?php

namespace Kiboko\Magento\v2_3\Model;

class V1InventoryStocksStockIdPutBody
{
    /**
     * Represents product aggregation among some different physical storages (in technical words, it is an index) Used fully qualified namespaces in annotations for proper work of WebApi request parser
     *
     * @var InventoryApiDataStockInterface
     */
    protected $stock;
    /**
     * Represents product aggregation among some different physical storages (in technical words, it is an index) Used fully qualified namespaces in annotations for proper work of WebApi request parser
     *
     * @return InventoryApiDataStockInterface
     */
    public function getStock() : InventoryApiDataStockInterface
    {
        return $this->stock;
    }
    /**
     * Represents product aggregation among some different physical storages (in technical words, it is an index) Used fully qualified namespaces in annotations for proper work of WebApi request parser
     *
     * @param InventoryApiDataStockInterface $stock
     *
     * @return self
     */
    public function setStock(InventoryApiDataStockInterface $stock) : self
    {
        $this->stock = $stock;
        return $this;
    }
}