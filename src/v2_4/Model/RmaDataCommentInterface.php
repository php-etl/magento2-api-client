<?php

namespace Kiboko\Magento\v2_4\Model;

class RmaDataCommentInterface
{
    /**
     * Comment
     *
     * @var string
     */
    protected $comment;
    /**
     * Rma Id
     *
     * @var int
     */
    protected $rmaEntityId;
    /**
     * Created_at
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Entity_id
     *
     * @var int
     */
    protected $entityId;
    /**
     * Is_customer_notified
     *
     * @var bool
     */
    protected $customerNotified;
    /**
     * Is_visible_on_front
     *
     * @var bool
     */
    protected $visibleOnFront;
    /**
     * Status
     *
     * @var string
     */
    protected $status;
    /**
     * Is_admin
     *
     * @var bool
     */
    protected $admin;
    /**
     * ExtensionInterface class for @see \Magento\Rma\Api\Data\CommentInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]
     */
    protected $customAttributes;
    /**
     * Comment
     *
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }
    /**
     * Comment
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * Rma Id
     *
     * @return int
     */
    public function getRmaEntityId(): int
    {
        return $this->rmaEntityId;
    }
    /**
     * Rma Id
     *
     * @param int $rmaEntityId
     *
     * @return self
     */
    public function setRmaEntityId(int $rmaEntityId): self
    {
        $this->rmaEntityId = $rmaEntityId;
        return $this;
    }
    /**
     * Created_at
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * Created_at
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
     * Is_customer_notified
     *
     * @return bool
     */
    public function getCustomerNotified(): bool
    {
        return $this->customerNotified;
    }
    /**
     * Is_customer_notified
     *
     * @param bool $customerNotified
     *
     * @return self
     */
    public function setCustomerNotified(bool $customerNotified): self
    {
        $this->customerNotified = $customerNotified;
        return $this;
    }
    /**
     * Is_visible_on_front
     *
     * @return bool
     */
    public function getVisibleOnFront(): bool
    {
        return $this->visibleOnFront;
    }
    /**
     * Is_visible_on_front
     *
     * @param bool $visibleOnFront
     *
     * @return self
     */
    public function setVisibleOnFront(bool $visibleOnFront): self
    {
        $this->visibleOnFront = $visibleOnFront;
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
     * Is_admin
     *
     * @return bool
     */
    public function getAdmin(): bool
    {
        return $this->admin;
    }
    /**
     * Is_admin
     *
     * @param bool $admin
     *
     * @return self
     */
    public function setAdmin(bool $admin): self
    {
        $this->admin = $admin;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Rma\Api\Data\CommentInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Rma\Api\Data\CommentInterface
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
}
