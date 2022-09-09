<?php

namespace Kiboko\Magento\V2_2\Model;

class QuoteDataTotalsItemExtensionInterface
{
    /**
     * Extension attribute for quote item totals model.
     *
     * @var NegotiableQuoteDataNegotiableQuoteItemTotalsInterface|null
     */
    protected $negotiableQuoteItemTotals;
    /**
     * Extension attribute for quote item totals model.
     *
     * @return NegotiableQuoteDataNegotiableQuoteItemTotalsInterface|null
     */
    public function getNegotiableQuoteItemTotals(): ?NegotiableQuoteDataNegotiableQuoteItemTotalsInterface
    {
        return $this->negotiableQuoteItemTotals;
    }
    /**
     * Extension attribute for quote item totals model.
     *
     * @param NegotiableQuoteDataNegotiableQuoteItemTotalsInterface|null $negotiableQuoteItemTotals
     *
     * @return self
     */
    public function setNegotiableQuoteItemTotals(?NegotiableQuoteDataNegotiableQuoteItemTotalsInterface $negotiableQuoteItemTotals): self
    {
        $this->negotiableQuoteItemTotals = $negotiableQuoteItemTotals;
        return $this;
    }
}
