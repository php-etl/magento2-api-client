<?php

namespace Kiboko\Magento\V2_1\Model;

class V1NegotiableQuoteRequestPostBody
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
     * @var string|null
     */
    protected $quoteName;
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
    /**
     *
     *
     * @return string|null
     */
    public function getQuoteName(): ?string
    {
        return $this->quoteName;
    }
    /**
     *
     *
     * @param string|null $quoteName
     *
     * @return self
     */
    public function setQuoteName(?string $quoteName): self
    {
        $this->quoteName = $quoteName;
        return $this;
    }
}
