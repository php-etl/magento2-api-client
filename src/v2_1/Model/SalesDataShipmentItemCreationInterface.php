<?php

namespace Kiboko\Magento\V2_1\Model;

class SalesDataShipmentItemCreationInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentItemCreationInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Order item ID.
     *
     * @var int|null
     */
    protected $orderItemId;
    /**
     * Quantity.
     *
     * @var float|null
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
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Order item ID.
     *
     * @return int|null
     */
    public function getOrderItemId(): ?int
    {
        return $this->orderItemId;
    }
    /**
     * Order item ID.
     *
     * @param int|null $orderItemId
     *
     * @return self
     */
    public function setOrderItemId(?int $orderItemId): self
    {
        $this->orderItemId = $orderItemId;
        return $this;
    }
    /**
     * Quantity.
     *
     * @return float|null
     */
    public function getQty(): ?float
    {
        return $this->qty;
    }
    /**
     * Quantity.
     *
     * @param float|null $qty
     *
     * @return self
     */
    public function setQty(?float $qty): self
    {
        $this->qty = $qty;
        return $this;
    }
}
