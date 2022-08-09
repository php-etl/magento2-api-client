<?php

namespace Kiboko\Magento\V2\Model;

class SalesDataShipmentItemCreationInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentItemCreationInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Order item ID.
     *
     * @var int
     */
    protected $orderItemId;
    /**
     * Quantity.
     *
     * @var float
     */
    protected $qty;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentItemCreationInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentItemCreationInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Order item ID.
     *
     * @return int
     */
    public function getOrderItemId() : int
    {
        return $this->orderItemId;
    }
    /**
     * Order item ID.
     *
     * @param int $orderItemId
     *
     * @return self
     */
    public function setOrderItemId(int $orderItemId) : self
    {
        $this->orderItemId = $orderItemId;
        return $this;
    }
    /**
     * Quantity.
     *
     * @return float
     */
    public function getQty() : float
    {
        return $this->qty;
    }
    /**
     * Quantity.
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