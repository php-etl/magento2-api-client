<?php

namespace Kiboko\Magento\Model;

class InventoryInStorePickupApiDataSearchRequestExtensionInterface
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
     * 
     *
     * @var InventoryInStorePickupApiDataSearchRequestProductInfoInterface[]|null
     */
    protected $productsInfo;
    /**
     * 
     *
     * @return InventoryInStorePickupApiDataSearchRequestProductInfoInterface[]|null
     */
    public function getProductsInfo() : ?array
    {
        return $this->productsInfo;
    }
    /**
     * 
     *
     * @param InventoryInStorePickupApiDataSearchRequestProductInfoInterface[]|null $productsInfo
     *
     * @return self
     */
    public function setProductsInfo(?array $productsInfo) : self
    {
        $this->initialized['productsInfo'] = true;
        $this->productsInfo = $productsInfo;
        return $this;
    }
}