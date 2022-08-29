<?php

namespace Kiboko\Magento\v2_3\Model;

class InventoryApiDataStockExtensionInterface
{
    /**
     * 
     *
     * @var InventorySalesApiDataSalesChannelInterface[]
     */
    protected $salesChannels;
    /**
     * 
     *
     * @return InventorySalesApiDataSalesChannelInterface[]
     */
    public function getSalesChannels() : array
    {
        return $this->salesChannels;
    }
    /**
     * 
     *
     * @param InventorySalesApiDataSalesChannelInterface[] $salesChannels
     *
     * @return self
     */
    public function setSalesChannels(array $salesChannels) : self
    {
        $this->salesChannels = $salesChannels;
        return $this;
    }
}