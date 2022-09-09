<?php

namespace Kiboko\Magento\V2_3\Model;

class NegotiableQuoteDataCommentInterface
{
    /**
     * Existing attachments.
     *
     * @var NegotiableQuoteDataCommentAttachmentInterface[]|null
     */
    protected $attachments;
    /**
     * Comment.
     *
     * @var string|null
     */
    protected $comment;
    /**
     * Comment created at.
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Comment creator ID.
     *
     * @var int|null
     */
    protected $creatorId;
    /**
     * The comment creator type.
     *
     * @var int|null
     */
    protected $creatorType;
    /**
     * Comment ID.
     *
     * @var int|null
     */
    protected $entityId;
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\CommentInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Is quote was declined by seller.
     *
     * @var int|null
     */
    protected $isDecline;
    /**
     * Is quote draft flag.
     *
     * @var int|null
     */
    protected $isDraft;
    /**
     * Negotiable quote ID, that this comment belongs to.
     *
     * @var int|null
     */
    protected $parentId;
    /**
     * Existing attachments.
     *
     * @return NegotiableQuoteDataCommentAttachmentInterface[]|null
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }
    /**
     * Existing attachments.
     *
     * @param NegotiableQuoteDataCommentAttachmentInterface[]|null $attachments
     *
     * @return self
     */
    public function setAttachments(?array $attachments): self
    {
        $this->attachments = $attachments;
        return $this;
    }
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
     * Comment created at.
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }
    /**
     * Comment created at.
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
     * Comment creator ID.
     *
     * @return int|null
     */
    public function getCreatorId(): ?int
    {
        return $this->creatorId;
    }
    /**
     * Comment creator ID.
     *
     * @param int|null $creatorId
     *
     * @return self
     */
    public function setCreatorId(?int $creatorId): self
    {
        $this->creatorId = $creatorId;
        return $this;
    }
    /**
     * The comment creator type.
     *
     * @return int|null
     */
    public function getCreatorType(): ?int
    {
        return $this->creatorType;
    }
    /**
     * The comment creator type.
     *
     * @param int|null $creatorType
     *
     * @return self
     */
    public function setCreatorType(?int $creatorType): self
    {
        $this->creatorType = $creatorType;
        return $this;
    }
    /**
     * Comment ID.
     *
     * @return int|null
     */
    public function getEntityId(): ?int
    {
        return $this->entityId;
    }
    /**
     * Comment ID.
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
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\CommentInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\CommentInterface
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
     * Is quote was declined by seller.
     *
     * @return int|null
     */
    public function getIsDecline(): ?int
    {
        return $this->isDecline;
    }
    /**
     * Is quote was declined by seller.
     *
     * @param int|null $isDecline
     *
     * @return self
     */
    public function setIsDecline(?int $isDecline): self
    {
        $this->isDecline = $isDecline;
        return $this;
    }
    /**
     * Is quote draft flag.
     *
     * @return int|null
     */
    public function getIsDraft(): ?int
    {
        return $this->isDraft;
    }
    /**
     * Is quote draft flag.
     *
     * @param int|null $isDraft
     *
     * @return self
     */
    public function setIsDraft(?int $isDraft): self
    {
        $this->isDraft = $isDraft;
        return $this;
    }
    /**
     * Negotiable quote ID, that this comment belongs to.
     *
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }
    /**
     * Negotiable quote ID, that this comment belongs to.
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
}
