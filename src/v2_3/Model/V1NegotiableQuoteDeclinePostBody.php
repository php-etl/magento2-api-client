<?php

namespace Kiboko\Magento\V2_3\Model;

class V1NegotiableQuoteDeclinePostBody
{
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
    protected $reason;
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
    public function getReason(): ?string
    {
        return $this->reason;
    }
    /**
     *
     *
     * @param string|null $reason
     *
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }
}
