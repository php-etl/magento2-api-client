<?php

namespace Kiboko\Magento\V2_2\Model;

class V1NegotiableQuoteSubmitToCustomerPostBody
{
    /**
     *
     *
     * @var string|null
     */
    protected $comment;
    /**
     *
     *
     * @var NegotiableQuoteDataAttachmentContentInterface[]|null
     */
    protected $files;
    /**
     *
     *
     * @var int|null
     */
    protected $quoteId;
    /**
     *
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     *
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
     *
     *
     * @return NegotiableQuoteDataAttachmentContentInterface[]|null
     */
    public function getFiles(): ?array
    {
        return $this->files;
    }
    /**
     *
     *
     * @param NegotiableQuoteDataAttachmentContentInterface[]|null $files
     *
     * @return self
     */
    public function setFiles(?array $files): self
    {
        $this->files = $files;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getQuoteId(): ?int
    {
        return $this->quoteId;
    }
    /**
     *
     *
     * @param int|null $quoteId
     *
     * @return self
     */
    public function setQuoteId(?int $quoteId): self
    {
        $this->quoteId = $quoteId;
        return $this;
    }
}
