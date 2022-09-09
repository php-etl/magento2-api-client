<?php

namespace Kiboko\Magento\V2_3\Model;

class RmaDataCommentInterface
{
    /**
     * Is_admin
     *
     * @var bool|null
     */
    protected $admin;
    /**
     * Comment
     *
     * @var string|null
     */
    protected $comment;
    /**
     * Created_at
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]|null
     */
    protected $customAttributes;
    /**
     * Is_customer_notified
     *
     * @var bool|null
     */
    protected $customerNotified;
    /**
     * Entity_id
     *
     * @var int|null
     */
    protected $entityId;
    /**
     * ExtensionInterface class for @see \Magento\Rma\Api\Data\CommentInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Rma Id
     *
     * @var int|null
     */
    protected $rmaEntityId;
    /**
     * Status
     *
     * @var string|null
     */
    protected $status;
    /**
     * Is_visible_on_front
     *
     * @var bool|null
     */
    protected $visibleOnFront;
    /**
     * Is_admin
     *
     * @return bool|null
     */
    public function getAdmin(): ?bool
    {
        return $this->admin;
    }
    /**
     * Is_admin
     *
     * @param bool|null $admin
     *
     * @return self
     */
    public function setAdmin(?bool $admin): self
    {
        $this->admin = $admin;
        return $this;
    }
    /**
     * Comment
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * Comment
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
     * Created_at
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }
    /**
     * Created_at
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
     * Is_customer_notified
     *
     * @return bool|null
     */
    public function getCustomerNotified(): ?bool
    {
        return $this->customerNotified;
    }
    /**
     * Is_customer_notified
     *
     * @param bool|null $customerNotified
     *
     * @return self
     */
    public function setCustomerNotified(?bool $customerNotified): self
    {
        $this->customerNotified = $customerNotified;
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
     * Rma Id
     *
     * @return int|null
     */
    public function getRmaEntityId(): ?int
    {
        return $this->rmaEntityId;
    }
    /**
     * Rma Id
     *
     * @param int|null $rmaEntityId
     *
     * @return self
     */
    public function setRmaEntityId(?int $rmaEntityId): self
    {
        $this->rmaEntityId = $rmaEntityId;
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
     * Is_visible_on_front
     *
     * @return bool|null
     */
    public function getVisibleOnFront(): ?bool
    {
        return $this->visibleOnFront;
    }
    /**
     * Is_visible_on_front
     *
     * @param bool|null $visibleOnFront
     *
     * @return self
     */
    public function setVisibleOnFront(?bool $visibleOnFront): self
    {
        $this->visibleOnFront = $visibleOnFront;
        return $this;
    }
}
