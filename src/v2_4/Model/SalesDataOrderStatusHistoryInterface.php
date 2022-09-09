<?php

namespace Kiboko\Magento\V2_4\Model;

class SalesDataOrderStatusHistoryInterface
{
    /**
     * Comment.
     *
     * @var string|null
     */
    protected $comment;
    /**
     * Created-at timestamp.
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Order status history ID.
     *
     * @var int|null
     */
    protected $entityId;
    /**
     * Entity name.
     *
     * @var string|null
     */
    protected $entityName;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderStatusHistoryInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Is-customer-notified flag value.
     *
     * @var int|null
     */
    protected $isCustomerNotified;
    /**
     * Is-visible-on-storefront flag value.
     *
     * @var int|null
     */
    protected $isVisibleOnFront;
    /**
     * Parent ID.
     *
     * @var int|null
     */
    protected $parentId;
    /**
     * Status.
     *
     * @var string|null
     */
    protected $status;
    /**
     * Comment.
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * Comment.
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
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
     * Order status history ID.
     *
     * @return int|null
     */
    public function getEntityId(): ?int
    {
        return $this->entityId;
    }
    /**
     * Order status history ID.
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
     * Entity name.
     *
     * @return string|null
     */
    public function getEntityName(): ?string
    {
        return $this->entityName;
    }
    /**
     * Entity name.
     *
     * @param string|null $entityName
     *
     * @return self
     */
    public function setEntityName(?string $entityName): self
    {
        $this->entityName = $entityName;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderStatusHistoryInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderStatusHistoryInterface
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
     * Is-customer-notified flag value.
     *
     * @return int|null
     */
    public function getIsCustomerNotified(): ?int
    {
        return $this->isCustomerNotified;
    }
    /**
     * Is-customer-notified flag value.
     *
     * @param int|null $isCustomerNotified
     *
     * @return self
     */
    public function setIsCustomerNotified(?int $isCustomerNotified): self
    {
        $this->isCustomerNotified = $isCustomerNotified;
        return $this;
    }
    /**
     * Is-visible-on-storefront flag value.
     *
     * @return int|null
     */
    public function getIsVisibleOnFront(): ?int
    {
        return $this->isVisibleOnFront;
    }
    /**
     * Is-visible-on-storefront flag value.
     *
     * @param int|null $isVisibleOnFront
     *
     * @return self
     */
    public function setIsVisibleOnFront(?int $isVisibleOnFront): self
    {
        $this->isVisibleOnFront = $isVisibleOnFront;
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
     * Status.
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Status.
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
}
