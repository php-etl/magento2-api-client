<?php

namespace Kiboko\Magento\V2_4\Model;

class NegotiableQuoteDataCommentAttachmentInterface
{
    /**
     * Attachment ID.
     *
     * @var int|null
     */
    protected $attachmentId;
    /**
     * Comment ID.
     *
     * @var int|null
     */
    protected $commentId;
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\CommentAttachmentInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * File name.
     *
     * @var string|null
     */
    protected $fileName;
    /**
     * File path.
     *
     * @var string|null
     */
    protected $filePath;
    /**
     * File type.
     *
     * @var string|null
     */
    protected $fileType;
    /**
     * Attachment ID.
     *
     * @return int|null
     */
    public function getAttachmentId(): ?int
    {
        return $this->attachmentId;
    }
    /**
     * Attachment ID.
     *
     * @param int|null $attachmentId
     *
     * @return self
     */
    public function setAttachmentId(?int $attachmentId): self
    {
        $this->attachmentId = $attachmentId;
        return $this;
    }
    /**
     * Comment ID.
     *
     * @return int|null
     */
    public function getCommentId(): ?int
    {
        return $this->commentId;
    }
    /**
     * Comment ID.
     *
     * @param int|null $commentId
     *
     * @return self
     */
    public function setCommentId(?int $commentId): self
    {
        $this->commentId = $commentId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\CommentAttachmentInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\CommentAttachmentInterface
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
     * File name.
     *
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }
    /**
     * File name.
     *
     * @param string|null $fileName
     *
     * @return self
     */
    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * File path.
     *
     * @return string|null
     */
    public function getFilePath(): ?string
    {
        return $this->filePath;
    }
    /**
     * File path.
     *
     * @param string|null $filePath
     *
     * @return self
     */
    public function setFilePath(?string $filePath): self
    {
        $this->filePath = $filePath;
        return $this;
    }
    /**
     * File type.
     *
     * @return string|null
     */
    public function getFileType(): ?string
    {
        return $this->fileType;
    }
    /**
     * File type.
     *
     * @param string|null $fileType
     *
     * @return self
     */
    public function setFileType(?string $fileType): self
    {
        $this->fileType = $fileType;
        return $this;
    }
}
