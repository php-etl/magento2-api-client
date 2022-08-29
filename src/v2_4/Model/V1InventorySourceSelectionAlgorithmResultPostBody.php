<?php

namespace Kiboko\Magento\v2_4\Model;

class V1InventorySourceSelectionAlgorithmResultPostBody
{
    /**
     * Request products in a given Qty and StockId
     *
     * @var InventorySourceSelectionApiDataInventoryRequestInterface
     */
    protected $inventoryRequest;
    /**
     *
     *
     * @var string
     */
    protected $algorithmCode;
    /**
     * Request products in a given Qty and StockId
     *
     * @return InventorySourceSelectionApiDataInventoryRequestInterface
     */
    public function getInventoryRequest(): InventorySourceSelectionApiDataInventoryRequestInterface
    {
        return $this->inventoryRequest;
    }
    /**
     * Request products in a given Qty and StockId
     *
     * @param InventorySourceSelectionApiDataInventoryRequestInterface $inventoryRequest
     *
     * @return self
     */
    public function setInventoryRequest(InventorySourceSelectionApiDataInventoryRequestInterface $inventoryRequest): self
    {
        $this->inventoryRequest = $inventoryRequest;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getAlgorithmCode(): string
    {
        return $this->algorithmCode;
    }
    /**
     *
     *
     * @param string $algorithmCode
     *
     * @return self
     */
    public function setAlgorithmCode(string $algorithmCode): self
    {
        $this->algorithmCode = $algorithmCode;
        return $this;
    }
}
