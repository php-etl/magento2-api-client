<?php

namespace Kiboko\Magento\v2_3\Model;

class NegotiableQuoteDataCommentInterface
{
    /**
     * Existing attachments.
     *
     * @var NegotiableQuoteDataCommentAttachmentInterface[]
     */
    protected $attachments;
    /**
     * Comment.
     *
     * @var string
     */
    protected $comment;
    /**
     * Comment created at.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Comment creator ID.
     *
     * @var int
     */
    protected $creatorId;
    /**
     * The comment creator type.
     *
     * @var int
     */
    protected $creatorType;
    /**
     * Comment ID.
     *
     * @var int
     */
    protected $entityId;
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\CommentInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Is quote was declined by seller.
     *
     * @var int
     */
    protected $isDecline;
    /**
     * Is quote draft flag.
     *
     * @var int
     */
    protected $isDraft;
    /**
     * Negotiable quote ID, that this comment belongs to.
     *
     * @var int
     */
    protected $parentId;
    /**
     * Existing attachments.
     *
     * @return NegotiableQuoteDataCommentAttachmentInterface[]
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }
    /**
     * Existing attachments.
     *
     * @param NegotiableQuoteDataCommentAttachmentInterface[] $attachments
     *
     * @return self
     */
    public function setAttachments(array $attachments): self
    {
        $this->attachments = $attachments;
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
     * Comment created at.
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * Comment created at.
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
     * Comment creator ID.
     *
     * @return int
     */
    public function getCreatorId(): int
    {
        return $this->creatorId;
    }
    /**
     * Comment creator ID.
     *
     * @param int $creatorId
     *
     * @return self
     */
    public function setCreatorId(int $creatorId): self
    {
        $this->creatorId = $creatorId;
        return $this;
    }
    /**
     * The comment creator type.
     *
     * @return int
     */
    public function getCreatorType(): int
    {
        return $this->creatorType;
    }
    /**
     * The comment creator type.
     *
     * @param int $creatorType
     *
     * @return self
     */
    public function setCreatorType(int $creatorType): self
    {
        $this->creatorType = $creatorType;
        return $this;
    }
    /**
     * Comment ID.
     *
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->entityId;
    }
    /**
     * Comment ID.
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
     * @return int
     */
    public function getIsDecline(): int
    {
        return $this->isDecline;
    }
    /**
     * Is quote was declined by seller.
     *
     * @param int $isDecline
     *
     * @return self
     */
    public function setIsDecline(int $isDecline): self
    {
        $this->isDecline = $isDecline;
        return $this;
    }
    /**
     * Is quote draft flag.
     *
     * @return int
     */
    public function getIsDraft(): int
    {
        return $this->isDraft;
    }
    /**
     * Is quote draft flag.
     *
     * @param int $isDraft
     *
     * @return self
     */
    public function setIsDraft(int $isDraft): self
    {
        $this->isDraft = $isDraft;
        return $this;
    }
    /**
     * Negotiable quote ID, that this comment belongs to.
     *
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parentId;
    }
    /**
     * Negotiable quote ID, that this comment belongs to.
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
}
