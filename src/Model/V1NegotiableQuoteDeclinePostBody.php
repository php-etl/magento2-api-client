<?php

namespace Kiboko\Magento\V2\Model;

class V1NegotiableQuoteDeclinePostBody
{
    /**
     *
     *
     * @var int
     */
    protected $quoteId;
    /**
     *
     *
     * @var string
     */
    protected $reason;
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
    /**
     *
     *
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }
    /**
     *
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }
}
