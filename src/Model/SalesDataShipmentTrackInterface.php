<?php

namespace Kiboko\Magento\V2\Model;

class SalesDataShipmentTrackInterface
{
    /**
     * The order_id for the shipment package.
     *
     * @var int
     */
    protected $orderId;
    /**
     * Created-at timestamp.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Shipment package ID.
     *
     * @var int
     */
    protected $entityId;
    /**
     * Parent ID.
     *
     * @var int
     */
    protected $parentId;
    /**
     * Updated-at timestamp.
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * Weight.
     *
     * @var float
     */
    protected $weight;
    /**
     * Quantity.
     *
     * @var float
     */
    protected $qty;
    /**
     * Description.
     *
     * @var string
     */
    protected $description;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentTrackInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Track number.
     *
     * @var string
     */
    protected $trackNumber;
    /**
     * Title.
     *
     * @var string
     */
    protected $title;
    /**
     * Carrier code.
     *
     * @var string
     */
    protected $carrierCode;
    /**
     * The order_id for the shipment package.
     *
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }
    /**
     * The order_id for the shipment package.
     *
     * @param int $orderId
     *
     * @return self
     */
    public function setOrderId(int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Created-at timestamp.
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * Created-at timestamp.
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Shipment package ID.
     *
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->entityId;
    }
    /**
     * Shipment package ID.
     *
     * @param int $entityId
     *
     * @return self
     */
    public function setEntityId(int $entityId): self
    {
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * Parent ID.
     *
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parentId;
    }
    /**
     * Parent ID.
     *
     * @param int $parentId
     *
     * @return self
     */
    public function setParentId(int $parentId): self
    {
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * Updated-at timestamp.
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
    /**
     * Updated-at timestamp.
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Weight.
     *
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }
    /**
     * Weight.
     *
     * @param float $weight
     *
     * @return self
     */
    public function setWeight(float $weight): self
    {
        $this->weight = $weight;
        return $this;
    }
    /**
     * Quantity.
     *
     * @return float
     */
    public function getQty(): float
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
    public function setQty(float $qty): self
    {
        $this->qty = $qty;
        return $this;
    }
    /**
     * Description.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentTrackInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentTrackInterface
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
     * Track number.
     *
     * @return string
     */
    public function getTrackNumber(): string
    {
        return $this->trackNumber;
    }
    /**
     * Track number.
     *
     * @param string $trackNumber
     *
     * @return self
     */
    public function setTrackNumber(string $trackNumber): self
    {
        $this->trackNumber = $trackNumber;
        return $this;
    }
    /**
     * Title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * Title.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Carrier code.
     *
     * @return string
     */
    public function getCarrierCode(): string
    {
        return $this->carrierCode;
    }
    /**
     * Carrier code.
     *
     * @param string $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(string $carrierCode): self
    {
        $this->carrierCode = $carrierCode;
        return $this;
    }
}
