<?php

namespace Kiboko\Magento\V2_3\Model;

class SalesDataShipmentTrackInterface
{
    /**
     * Carrier code.
     *
     * @var string|null
     */
    protected $carrierCode;
    /**
     * Created-at timestamp.
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Shipment package ID.
     *
     * @var int|null
     */
    protected $entityId;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentTrackInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * The order_id for the shipment package.
     *
     * @var int|null
     */
    protected $orderId;
    /**
     * Parent ID.
     *
     * @var int|null
     */
    protected $parentId;
    /**
     * Quantity.
     *
     * @var float|null
     */
    protected $qty;
    /**
     * Title.
     *
     * @var string|null
     */
    protected $title;
    /**
     * Track number.
     *
     * @var string|null
     */
    protected $trackNumber;
    /**
     * Updated-at timestamp.
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * Weight.
     *
     * @var float|null
     */
    protected $weight;
    /**
     * Carrier code.
     *
     * @return string|null
     */
    public function getCarrierCode(): ?string
    {
        return $this->carrierCode;
    }
    /**
     * Carrier code.
     *
     * @param string|null $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(?string $carrierCode): self
    {
        $this->carrierCode = $carrierCode;
        return $this;
    }
    /**
     * Created-at timestamp.
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }
    /**
     * Created-at timestamp.
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Description.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Shipment package ID.
     *
     * @return int|null
     */
    public function getEntityId(): ?int
    {
        return $this->entityId;
    }
    /**
     * Shipment package ID.
     *
     * @param int|null $entityId
     *
     * @return self
     */
    public function setEntityId(?int $entityId): self
    {
        $this->entityId = $entityId;
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
     * The order_id for the shipment package.
     *
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * The order_id for the shipment package.
     *
     * @param int|null $orderId
     *
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Parent ID.
     *
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }
    /**
     * Parent ID.
     *
     * @param int|null $parentId
     *
     * @return self
     */
    public function setParentId(?int $parentId): self
    {
        $this->parentId = $parentId;
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
    /**
     * Title.
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Title.
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Track number.
     *
     * @return string|null
     */
    public function getTrackNumber(): ?string
    {
        return $this->trackNumber;
    }
    /**
     * Track number.
     *
     * @param string|null $trackNumber
     *
     * @return self
     */
    public function setTrackNumber(?string $trackNumber): self
    {
        $this->trackNumber = $trackNumber;
        return $this;
    }
    /**
     * Updated-at timestamp.
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }
    /**
     * Updated-at timestamp.
     *
     * @param string|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Weight.
     *
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }
    /**
     * Weight.
     *
     * @param float|null $weight
     *
     * @return self
     */
    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;
        return $this;
    }
}
