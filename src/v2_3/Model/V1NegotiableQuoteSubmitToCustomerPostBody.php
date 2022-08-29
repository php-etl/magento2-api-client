<?php

namespace Kiboko\Magento\v2_3\Model;

class V1NegotiableQuoteSubmitToCustomerPostBody
{
    /**
     *
     *
     * @var string
     */
    protected $comment;
    /**
     *
     *
     * @var NegotiableQuoteDataAttachmentContentInterface[]
     */
    protected $files;
    /**
     *
     *
     * @var int
     */
    protected $quoteId;
    /**
     *
     *
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }
    /**
     *
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
     *
     *
     * @return NegotiableQuoteDataAttachmentContentInterface[]
     */
    public function getFiles(): array
    {
        return $this->files;
    }
    /**
     *
     *
     * @param NegotiableQuoteDataAttachmentContentInterface[] $files
     *
     * @return self
     */
    public function setFiles(array $files): self
    {
        $this->files = $files;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getQuoteId(): int
    {
        return $this->quoteId;
    }
    /**
     *
     *
     * @param int $quoteId
     *
     * @return self
     */
    public function setQuoteId(int $quoteId): self
    {
        $this->quoteId = $quoteId;
        return $this;
    }
}
