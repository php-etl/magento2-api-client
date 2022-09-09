<?php

namespace Kiboko\Magento\V2_2\Model;

class V1NegotiableQuotePricesUpdatedPostBody
{
    /**
     *
     *
     * @var int[]|null
     */
    protected $quoteIds;
    /**
     *
     *
     * @return int[]|null
     */
    public function getQuoteIds(): ?array
    {
        return $this->quoteIds;
    }
    /**
     *
     *
     * @param int[]|null $quoteIds
     *
     * @return self
     */
    public function setQuoteIds(?array $quoteIds): self
    {
        $this->quoteIds = $quoteIds;
        return $this;
    }
}
