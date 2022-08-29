<?php

namespace Kiboko\Magento\v2_4\Model;

class V1NegotiableQuotePricesUpdatedPostBody
{
    /**
     *
     *
     * @var int[]
     */
    protected $quoteIds;
    /**
     *
     *
     * @return int[]
     */
    public function getQuoteIds(): array
    {
        return $this->quoteIds;
    }
    /**
     *
     *
     * @param int[] $quoteIds
     *
     * @return self
     */
    public function setQuoteIds(array $quoteIds): self
    {
        $this->quoteIds = $quoteIds;
        return $this;
    }
}
