<?php

namespace Kiboko\Magento\v2_3\Model;

class RmaDataRmaInterface
{
    /**
     * Comments list
     *
     * @var RmaDataCommentInterface[]
     */
    protected $comments;
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]
     */
    protected $customAttributes;
    /**
     * Customer_custom_email
     *
     * @var string
     */
    protected $customerCustomEmail;
    /**
     * Customer_id
     *
     * @var int
     */
    protected $customerId;
    /**
     * Date_requested
     *
     * @var string
     */
    protected $dateRequested;
    /**
     * Entity_id
     *
     * @var int
     */
    protected $entityId;
    /**
     * ExtensionInterface class for @see \Magento\Rma\Api\Data\RmaInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Entity_id
     *
     * @var string
     */
    protected $incrementId;
    /**
     * Items
     *
     * @var RmaDataItemInterface[]
     */
    protected $items;
    /**
     * Order_id
     *
     * @var int
     */
    protected $orderId;
    /**
     * Order_increment_id
     *
     * @var string
     */
    protected $orderIncrementId;
    /**
     * Status
     *
     * @var string
     */
    protected $status;
    /**
     * Store_id
     *
     * @var int
     */
    protected $storeId;
    /**
     * Tracks list
     *
     * @var RmaDataTrackInterface[]
     */
    protected $tracks;
    /**
     * Comments list
     *
     * @return RmaDataCommentInterface[]
     */
    public function getComments(): array
    {
        return $this->comments;
    }
    /**
     * Comments list
     *
     * @param RmaDataCommentInterface[] $comments
     *
     * @return self
     */
    public function setComments(array $comments): self
    {
        $this->comments = $comments;
        return $this;
    }
    /**
     * Custom attributes values.
     *
     * @return FrameworkAttributeInterface[]
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }
    /**
     * Custom attributes values.
     *
     * @param FrameworkAttributeInterface[] $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }
    /**
     * Customer_custom_email
     *
     * @return string
     */
    public function getCustomerCustomEmail(): string
    {
        return $this->customerCustomEmail;
    }
    /**
     * Customer_custom_email
     *
     * @param string $customerCustomEmail
     *
     * @return self
     */
    public function setCustomerCustomEmail(string $customerCustomEmail): self
    {
        $this->customerCustomEmail = $customerCustomEmail;
        return $this;
    }
    /**
     * Customer_id
     *
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }
    /**
     * Customer_id
     *
     * @param int $customerId
     *
     * @return self
     */
    public function setCustomerId(int $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * Date_requested
     *
     * @return string
     */
    public function getDateRequested(): string
    {
        return $this->dateRequested;
    }
    /**
     * Date_requested
     *
     * @param string $dateRequested
     *
     * @return self
     */
    public function setDateRequested(string $dateRequested): self
    {
        $this->dateRequested = $dateRequested;
        return $this;
    }
    /**
     * Entity_id
     *
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->entityId;
    }
    /**
     * Entity_id
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
     * @return string
     */
    public function getIncrementId(): string
    {
        return $this->incrementId;
    }
    /**
     * Entity_id
     *
     * @param string $incrementId
     *
     * @return self
     */
    public function setIncrementId(string $incrementId): self
    {
        $this->incrementId = $incrementId;
        return $this;
    }
    /**
     * Items
     *
     * @return RmaDataItemInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * Items
     *
     * @param RmaDataItemInterface[] $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Order_id
     *
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }
    /**
     * Order_id
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
     * Order_increment_id
     *
     * @return string
     */
    public function getOrderIncrementId(): string
    {
        return $this->orderIncrementId;
    }
    /**
     * Order_increment_id
     *
     * @param string $orderIncrementId
     *
     * @return self
     */
    public function setOrderIncrementId(string $orderIncrementId): self
    {
        $this->orderIncrementId = $orderIncrementId;
        return $this;
    }
    /**
     * Status
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Status
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Store_id
     *
     * @return int
     */
    public function getStoreId(): int
    {
        return $this->storeId;
    }
    /**
     * Store_id
     *
     * @param int $storeId
     *
     * @return self
     */
    public function setStoreId(int $storeId): self
    {
        $this->storeId = $storeId;
        return $this;
    }
    /**
     * Tracks list
     *
     * @return RmaDataTrackInterface[]
     */
    public function getTracks(): array
    {
        return $this->tracks;
    }
    /**
     * Tracks list
     *
     * @param RmaDataTrackInterface[] $tracks
     *
     * @return self
     */
    public function setTracks(array $tracks): self
    {
        $this->tracks = $tracks;
        return $this;
    }
}
