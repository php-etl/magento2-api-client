<?php

namespace Kiboko\Magento\Model;

class InventoryApiDataStockExtensionInterface
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
     * @var InventorySalesApiDataSalesChannelInterface[]|null
     */
    protected $salesChannels;
    /**
     * 
     *
     * @return InventorySalesApiDataSalesChannelInterface[]|null
     */
    public function getSalesChannels() : ?array
    {
        return $this->salesChannels;
    }
    /**
     * 
     *
     * @param InventorySalesApiDataSalesChannelInterface[]|null $salesChannels
     *
     * @return self
     */
    public function setSalesChannels(?array $salesChannels) : self
    {
        $this->initialized['salesChannels'] = true;
        $this->salesChannels = $salesChannels;
        return $this;
    }
}