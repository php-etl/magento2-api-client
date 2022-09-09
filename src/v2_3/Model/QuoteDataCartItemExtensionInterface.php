<?php

namespace Kiboko\Magento\V2_3\Model;

class QuoteDataCartItemExtensionInterface
{
    /**
     * Interface CompanyQuoteConfigInterface
     *
     * @var NegotiableQuoteDataNegotiableQuoteItemInterface|null
     */
    protected $negotiableQuoteItem;
    /**
     * Interface CompanyQuoteConfigInterface
     *
     * @return NegotiableQuoteDataNegotiableQuoteItemInterface|null
     */
    public function getNegotiableQuoteItem(): ?NegotiableQuoteDataNegotiableQuoteItemInterface
    {
        return $this->negotiableQuoteItem;
    }
    /**
     * Interface CompanyQuoteConfigInterface
     *
     * @param NegotiableQuoteDataNegotiableQuoteItemInterface|null $negotiableQuoteItem
     *
     * @return self
     */
    public function setNegotiableQuoteItem(?NegotiableQuoteDataNegotiableQuoteItemInterface $negotiableQuoteItem): self
    {
        $this->negotiableQuoteItem = $negotiableQuoteItem;
        return $this;
    }
}
