<?php

namespace Kiboko\Magento\Model;

class SalesDataShipmentInterface
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
     * Billing address ID.
     *
     * @var int|null
     */
    protected $billingAddressId;
    /**
     * Created-at timestamp.
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Customer ID.
     *
     * @var int|null
     */
    protected $customerId;
    /**
     * Email-sent flag value.
     *
     * @var int|null
     */
    protected $emailSent;
    /**
     * Shipment ID.
     *
     * @var int|null
     */
    protected $entityId;
    /**
     * Increment ID.
     *
     * @var string|null
     */
    protected $incrementId;
    /**
     * Order ID.
     *
     * @var int|null
     */
    protected $orderId;
    /**
     * Array of packages, if any. Otherwise, null.
     *
     * @var SalesDataShipmentPackageInterface[]|null
     */
    protected $packages;
    /**
     * Shipment status.
     *
     * @var int|null
     */
    protected $shipmentStatus;
    /**
     * Shipping address ID.
     *
     * @var int|null
     */
    protected $shippingAddressId;
    /**
     * Shipping label.
     *
     * @var string|null
     */
    protected $shippingLabel;
    /**
     * Store ID.
     *
     * @var int|null
     */
    protected $storeId;
    /**
     * Total quantity.
     *
     * @var float|null
     */
    protected $totalQty;
    /**
     * Total weight.
     *
     * @var float|null
     */
    protected $totalWeight;
    /**
     * Updated-at timestamp.
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * Array of items.
     *
     * @var SalesDataShipmentItemInterface[]|null
     */
    protected $items;
    /**
     * Array of tracks.
     *
     * @var SalesDataShipmentTrackInterface[]|null
     */
    protected $tracks;
    /**
     * Array of comments.
     *
     * @var SalesDataShipmentCommentInterface[]|null
     */
    protected $comments;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Billing address ID.
     *
     * @return int|null
     */
    public function getBillingAddressId() : ?int
    {
        return $this->billingAddressId;
    }
    /**
     * Billing address ID.
     *
     * @param int|null $billingAddressId
     *
     * @return self
     */
    public function setBillingAddressId(?int $billingAddressId) : self
    {
        $this->initialized['billingAddressId'] = true;
        $this->billingAddressId = $billingAddressId;
        return $this;
    }
    /**
     * Created-at timestamp.
     *
     * @return string|null
     */
    public function getCreatedAt() : ?string
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
    public function setCreatedAt(?string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Customer ID.
     *
     * @return int|null
     */
    public function getCustomerId() : ?int
    {
        return $this->customerId;
    }
    /**
     * Customer ID.
     *
     * @param int|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?int $customerId) : self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * Email-sent flag value.
     *
     * @return int|null
     */
    public function getEmailSent() : ?int
    {
        return $this->emailSent;
    }
    /**
     * Email-sent flag value.
     *
     * @param int|null $emailSent
     *
     * @return self
     */
    public function setEmailSent(?int $emailSent) : self
    {
        $this->initialized['emailSent'] = true;
        $this->emailSent = $emailSent;
        return $this;
    }
    /**
     * Shipment ID.
     *
     * @return int|null
     */
    public function getEntityId() : ?int
    {
        return $this->entityId;
    }
    /**
     * Shipment ID.
     *
     * @param int|null $entityId
     *
     * @return self
     */
    public function setEntityId(?int $entityId) : self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * Increment ID.
     *
     * @return string|null
     */
    public function getIncrementId() : ?string
    {
        return $this->incrementId;
    }
    /**
     * Increment ID.
     *
     * @param string|null $incrementId
     *
     * @return self
     */
    public function setIncrementId(?string $incrementId) : self
    {
        $this->initialized['incrementId'] = true;
        $this->incrementId = $incrementId;
        return $this;
    }
    /**
     * Order ID.
     *
     * @return int|null
     */
    public function getOrderId() : ?int
    {
        return $this->orderId;
    }
    /**
     * Order ID.
     *
     * @param int|null $orderId
     *
     * @return self
     */
    public function setOrderId(?int $orderId) : self
    {
        $this->initialized['orderId'] = true;
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Array of packages, if any. Otherwise, null.
     *
     * @return SalesDataShipmentPackageInterface[]|null
     */
    public function getPackages() : ?array
    {
        return $this->packages;
    }
    /**
     * Array of packages, if any. Otherwise, null.
     *
     * @param SalesDataShipmentPackageInterface[]|null $packages
     *
     * @return self
     */
    public function setPackages(?array $packages) : self
    {
        $this->initialized['packages'] = true;
        $this->packages = $packages;
        return $this;
    }
    /**
     * Shipment status.
     *
     * @return int|null
     */
    public function getShipmentStatus() : ?int
    {
        return $this->shipmentStatus;
    }
    /**
     * Shipment status.
     *
     * @param int|null $shipmentStatus
     *
     * @return self
     */
    public function setShipmentStatus(?int $shipmentStatus) : self
    {
        $this->initialized['shipmentStatus'] = true;
        $this->shipmentStatus = $shipmentStatus;
        return $this;
    }
    /**
     * Shipping address ID.
     *
     * @return int|null
     */
    public function getShippingAddressId() : ?int
    {
        return $this->shippingAddressId;
    }
    /**
     * Shipping address ID.
     *
     * @param int|null $shippingAddressId
     *
     * @return self
     */
    public function setShippingAddressId(?int $shippingAddressId) : self
    {
        $this->initialized['shippingAddressId'] = true;
        $this->shippingAddressId = $shippingAddressId;
        return $this;
    }
    /**
     * Shipping label.
     *
     * @return string|null
     */
    public function getShippingLabel() : ?string
    {
        return $this->shippingLabel;
    }
    /**
     * Shipping label.
     *
     * @param string|null $shippingLabel
     *
     * @return self
     */
    public function setShippingLabel(?string $shippingLabel) : self
    {
        $this->initialized['shippingLabel'] = true;
        $this->shippingLabel = $shippingLabel;
        return $this;
    }
    /**
     * Store ID.
     *
     * @return int|null
     */
    public function getStoreId() : ?int
    {
        return $this->storeId;
    }
    /**
     * Store ID.
     *
     * @param int|null $storeId
     *
     * @return self
     */
    public function setStoreId(?int $storeId) : self
    {
        $this->initialized['storeId'] = true;
        $this->storeId = $storeId;
        return $this;
    }
    /**
     * Total quantity.
     *
     * @return float|null
     */
    public function getTotalQty() : ?float
    {
        return $this->totalQty;
    }
    /**
     * Total quantity.
     *
     * @param float|null $totalQty
     *
     * @return self
     */
    public function setTotalQty(?float $totalQty) : self
    {
        $this->initialized['totalQty'] = true;
        $this->totalQty = $totalQty;
        return $this;
    }
    /**
     * Total weight.
     *
     * @return float|null
     */
    public function getTotalWeight() : ?float
    {
        return $this->totalWeight;
    }
    /**
     * Total weight.
     *
     * @param float|null $totalWeight
     *
     * @return self
     */
    public function setTotalWeight(?float $totalWeight) : self
    {
        $this->initialized['totalWeight'] = true;
        $this->totalWeight = $totalWeight;
        return $this;
    }
    /**
     * Updated-at timestamp.
     *
     * @return string|null
     */
    public function getUpdatedAt() : ?string
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
    public function setUpdatedAt(?string $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Array of items.
     *
     * @return SalesDataShipmentItemInterface[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Array of items.
     *
     * @param SalesDataShipmentItemInterface[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items) : self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * Array of tracks.
     *
     * @return SalesDataShipmentTrackInterface[]|null
     */
    public function getTracks() : ?array
    {
        return $this->tracks;
    }
    /**
     * Array of tracks.
     *
     * @param SalesDataShipmentTrackInterface[]|null $tracks
     *
     * @return self
     */
    public function setTracks(?array $tracks) : self
    {
        $this->initialized['tracks'] = true;
        $this->tracks = $tracks;
        return $this;
    }
    /**
     * Array of comments.
     *
     * @return SalesDataShipmentCommentInterface[]|null
     */
    public function getComments() : ?array
    {
        return $this->comments;
    }
    /**
     * Array of comments.
     *
     * @param SalesDataShipmentCommentInterface[]|null $comments
     *
     * @return self
     */
    public function setComments(?array $comments) : self
    {
        $this->initialized['comments'] = true;
        $this->comments = $comments;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}