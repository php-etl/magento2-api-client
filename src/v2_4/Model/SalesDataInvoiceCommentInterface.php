<?php

namespace Kiboko\Magento\v2_4\Model;

class SalesDataInvoiceCommentInterface
{
    /**
     * Is-customer-notified flag value.
     *
     * @var int
     */
    protected $isCustomerNotified;
    /**
     * Parent ID.
     *
     * @var int
     */
    protected $parentId;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceCommentInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Comment.
     *
     * @var string
     */
    protected $comment;
    /**
     * Is-visible-on-storefront flag value.
     *
     * @var int
     */
    protected $isVisibleOnFront;
    /**
     * Created-at timestamp.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Invoice ID.
     *
     * @var int
     */
    protected $entityId;
    /**
     * Is-customer-notified flag value.
     *
     * @return int
     */
    public function getIsCustomerNotified(): int
    {
        return $this->isCustomerNotified;
    }
    /**
     * Is-customer-notified flag value.
     *
     * @param int $isCustomerNotified
     *
     * @return self
     */
    public function setIsCustomerNotified(int $isCustomerNotified): self
    {
        $this->isCustomerNotified = $isCustomerNotified;
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
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceCommentInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceCommentInterface
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
     * Comment.
     *
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }
    /**
     * Comment.
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
     * Is-visible-on-storefront flag value.
     *
     * @return int
     */
    public function getIsVisibleOnFront(): int
    {
        return $this->isVisibleOnFront;
    }
    /**
     * Is-visible-on-storefront flag value.
     *
     * @param int $isVisibleOnFront
     *
     * @return self
     */
    public function setIsVisibleOnFront(int $isVisibleOnFront): self
    {
        $this->isVisibleOnFront = $isVisibleOnFront;
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
     * Invoice ID.
     *
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->entityId;
    }
    /**
     * Invoice ID.
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
}
