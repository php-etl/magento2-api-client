<?php

namespace Kiboko\Magento\Model;

class V1InventoryStocksPostBody
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
     * Represents product aggregation among some different physical storages (in technical words, it is an index) Used fully qualified namespaces in annotations for proper work of WebApi request parser
     *
     * @var InventoryApiDataStockInterface|null
     */
    protected $stock;
    /**
     * Represents product aggregation among some different physical storages (in technical words, it is an index) Used fully qualified namespaces in annotations for proper work of WebApi request parser
     *
     * @return InventoryApiDataStockInterface|null
     */
    public function getStock() : ?InventoryApiDataStockInterface
    {
        return $this->stock;
    }
    /**
     * Represents product aggregation among some different physical storages (in technical words, it is an index) Used fully qualified namespaces in annotations for proper work of WebApi request parser
     *
     * @param InventoryApiDataStockInterface|null $stock
     *
     * @return self
     */
    public function setStock(?InventoryApiDataStockInterface $stock) : self
    {
        $this->initialized['stock'] = true;
        $this->stock = $stock;
        return $this;
    }
}