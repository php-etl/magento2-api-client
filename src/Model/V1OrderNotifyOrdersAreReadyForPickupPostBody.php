<?php

namespace Kiboko\Magento\Model;

class V1OrderNotifyOrdersAreReadyForPickupPostBody
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
     * @var int[]|null
     */
    protected $orderIds;
    /**
     * 
     *
     * @return int[]|null
     */
    public function getOrderIds() : ?array
    {
        return $this->orderIds;
    }
    /**
     * 
     *
     * @param int[]|null $orderIds
     *
     * @return self
     */
    public function setOrderIds(?array $orderIds) : self
    {
        $this->initialized['orderIds'] = true;
        $this->orderIds = $orderIds;
        return $this;
    }
}