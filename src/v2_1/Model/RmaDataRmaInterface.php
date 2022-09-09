<?php

namespace Kiboko\Magento\V2_1\Model;

class RmaDataRmaInterface
{
    /**
     * Comments list
     *
     * @var RmaDataCommentInterface[]|null
     */
    protected $comments;
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]|null
     */
    protected $customAttributes;
    /**
     * Customer_custom_email
     *
     * @var string|null
     */
    protected $customerCustomEmail;
    /**
     * Customer_id
     *
     * @var int|null
     */
    protected $customerId;
    /**
     * Date_requested
     *
     * @var string|null
     */
    protected $dateRequested;
    /**
     * Entity_id
     *
     * @var int|null
     */
    protected $entityId;
    /**
     * ExtensionInterface class for @see \Magento\Rma\Api\Data\RmaInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Entity_id
     *
     * @var string|null
     */
    protected $incrementId;
    /**
     * Items
     *
     * @var RmaDataItemInterface[]|null
     */
    protected $items;
    /**
     * Order_id
     *
     * @var int|null
     */
    protected $orderId;
    /**
     * Order_increment_id
     *
     * @var string|null
     */
    protected $orderIncrementId;
    /**
     * Status
     *
     * @var string|null
     */
    protected $status;
    /**
     * Store_id
     *
     * @var int|null
     */
    protected $storeId;
    /**
     * Tracks list
     *
     * @var RmaDataTrackInterface[]|null
     */
    protected $tracks;
    /**
     * Comments list
     *
     * @return RmaDataCommentInterface[]|null
     */
    public function getComments(): ?array
    {
        return $this->comments;
    }
    /**
     * Comments list
     *
     * @param RmaDataCommentInterface[]|null $comments
     *
     * @return self
     */
    public function setComments(?array $comments): self
    {
        $this->comments = $comments;
        return $this;
    }
    /**
     * Custom attributes values.
     *
     * @return FrameworkAttributeInterface[]|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }
    /**
     * Custom attributes values.
     *
     * @param FrameworkAttributeInterface[]|null $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }
    /**
     * Customer_custom_email
     *
     * @return string|null
     */
    public function getCustomerCustomEmail(): ?string
    {
        return $this->customerCustomEmail;
    }
    /**
     * Customer_custom_email
     *
     * @param string|null $customerCustomEmail
     *
     * @return self
     */
    public function setCustomerCustomEmail(?string $customerCustomEmail): self
    {
        $this->customerCustomEmail = $customerCustomEmail;
        return $this;
    }
    /**
     * Customer_id
     *
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Customer_id
     *
     * @param int|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?int $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * Date_requested
     *
     * @return string|null
     */
    public function getDateRequested(): ?string
    {
        return $this->dateRequested;
    }
    /**
     * Date_requested
     *
     * @param string|null $dateRequested
     *
     * @return self
     */
    public function setDateRequested(?string $dateRequested): self
    {
        $this->dateRequested = $dateRequested;
        return $this;
    }
    /**
     * Entity_id
     *
     * @return int|null
     */
    public function getEntityId(): ?int
    {
        return $this->entityId;
    }
    /**
     * Entity_id
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
     * ExtensionInterface class for @see \Magento\Rma\Api\Data\RmaInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Rma\Api\Data\RmaInterface
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
     * Entity_id
     *
     * @return string|null
     */
    public function getIncrementId(): ?string
    {
        return $this->incrementId;
    }
    /**
     * Entity_id
     *
     * @param string|null $incrementId
     *
     * @return self
     */
    public function setIncrementId(?string $incrementId): self
    {
        $this->incrementId = $incrementId;
        return $this;
    }
    /**
     * Items
     *
     * @return RmaDataItemInterface[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * Items
     *
     * @param RmaDataItemInterface[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Order_id
     *
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Order_id
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
     * Order_increment_id
     *
     * @return string|null
     */
    public function getOrderIncrementId(): ?string
    {
        return $this->orderIncrementId;
    }
    /**
     * Order_increment_id
     *
     * @param string|null $orderIncrementId
     *
     * @return self
     */
    public function setOrderIncrementId(?string $orderIncrementId): self
    {
        $this->orderIncrementId = $orderIncrementId;
        return $this;
    }
    /**
     * Status
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Status
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Store_id
     *
     * @return int|null
     */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }
    /**
     * Store_id
     *
     * @param int|null $storeId
     *
     * @return self
     */
    public function setStoreId(?int $storeId): self
    {
        $this->storeId = $storeId;
        return $this;
    }
    /**
     * Tracks list
     *
     * @return RmaDataTrackInterface[]|null
     */
    public function getTracks(): ?array
    {
        return $this->tracks;
    }
    /**
     * Tracks list
     *
     * @param RmaDataTrackInterface[]|null $tracks
     *
     * @return self
     */
    public function setTracks(?array $tracks): self
    {
        $this->tracks = $tracks;
        return $this;
    }
}
