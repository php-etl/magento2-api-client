<?php

namespace Kiboko\Magento\Model;

class V1InventorySourceSelectionAlgorithmResultPostBody
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
     * Request products in a given Qty and StockId
     *
     * @var InventorySourceSelectionApiDataInventoryRequestInterface|null
     */
    protected $inventoryRequest;
    /**
     * 
     *
     * @var string|null
     */
    protected $algorithmCode;
    /**
     * Request products in a given Qty and StockId
     *
     * @return InventorySourceSelectionApiDataInventoryRequestInterface|null
     */
    public function getInventoryRequest() : ?InventorySourceSelectionApiDataInventoryRequestInterface
    {
        return $this->inventoryRequest;
    }
    /**
     * Request products in a given Qty and StockId
     *
     * @param InventorySourceSelectionApiDataInventoryRequestInterface|null $inventoryRequest
     *
     * @return self
     */
    public function setInventoryRequest(?InventorySourceSelectionApiDataInventoryRequestInterface $inventoryRequest) : self
    {
        $this->initialized['inventoryRequest'] = true;
        $this->inventoryRequest = $inventoryRequest;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAlgorithmCode() : ?string
    {
        return $this->algorithmCode;
    }
    /**
     * 
     *
     * @param string|null $algorithmCode
     *
     * @return self
     */
    public function setAlgorithmCode(?string $algorithmCode) : self
    {
        $this->initialized['algorithmCode'] = true;
        $this->algorithmCode = $algorithmCode;
        return $this;
    }
}