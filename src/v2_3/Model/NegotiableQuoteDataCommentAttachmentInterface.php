<?php

namespace Kiboko\Magento\v2_3\Model;

class NegotiableQuoteDataCommentAttachmentInterface
{
    /**
     * Attachment ID.
     *
     * @var int
     */
    protected $attachmentId;
    /**
     * Comment ID.
     *
     * @var int
     */
    protected $commentId;
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\CommentAttachmentInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * File name.
     *
     * @var string
     */
    protected $fileName;
    /**
     * File path.
     *
     * @var string
     */
    protected $filePath;
    /**
     * File type.
     *
     * @var string
     */
    protected $fileType;
    /**
     * Attachment ID.
     *
     * @return int
     */
    public function getAttachmentId(): int
    {
        return $this->attachmentId;
    }
    /**
     * Attachment ID.
     *
     * @param int $attachmentId
     *
     * @return self
     */
    public function setAttachmentId(int $attachmentId): self
    {
        $this->attachmentId = $attachmentId;
        return $this;
    }
    /**
     * Comment ID.
     *
     * @return int
     */
    public function getCommentId(): int
    {
        return $this->commentId;
    }
    /**
     * Comment ID.
     *
     * @param int $commentId
     *
     * @return self
     */
    public function setCommentId(int $commentId): self
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
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }
    /**
     * File name.
     *
     * @param string $fileName
     *
     * @return self
     */
    public function setFileName(string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * File path.
     *
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }
    /**
     * File path.
     *
     * @param string $filePath
     *
     * @return self
     */
    public function setFilePath(string $filePath): self
    {
        $this->filePath = $filePath;
        return $this;
    }
    /**
     * File type.
     *
     * @return string
     */
    public function getFileType(): string
    {
        return $this->fileType;
    }
    /**
     * File type.
     *
     * @param string $fileType
     *
     * @return self
     */
    public function setFileType(string $fileType): self
    {
        $this->fileType = $fileType;
        return $this;
    }
}
