<?php

namespace Kiboko\Magento\v2_3\Model;

class QuoteDataTotalsItemExtensionInterface
{
    /**
     * Extension attribute for quote item totals model.
     *
     * @var NegotiableQuoteDataNegotiableQuoteItemTotalsInterface
     */
    protected $negotiableQuoteItemTotals;
    /**
     * Extension attribute for quote item totals model.
     *
     * @return NegotiableQuoteDataNegotiableQuoteItemTotalsInterface
     */
    public function getNegotiableQuoteItemTotals() : NegotiableQuoteDataNegotiableQuoteItemTotalsInterface
    {
        return $this->negotiableQuoteItemTotals;
    }
    /**
     * Extension attribute for quote item totals model.
     *
     * @param NegotiableQuoteDataNegotiableQuoteItemTotalsInterface $negotiableQuoteItemTotals
     *
     * @return self
     */
    public function setNegotiableQuoteItemTotals(NegotiableQuoteDataNegotiableQuoteItemTotalsInterface $negotiableQuoteItemTotals) : self
    {
        $this->negotiableQuoteItemTotals = $negotiableQuoteItemTotals;
        return $this;
    }
}