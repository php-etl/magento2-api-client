<?php

namespace Kiboko\Magento\v2_3\Model;

class QuoteDataCartItemExtensionInterface
{
    /**
     *
     *
     * @var SalesRuleDataRuleDiscountInterface[]
     */
    protected $discounts;
    /**
     * Interface CompanyQuoteConfigInterface
     *
     * @var NegotiableQuoteDataNegotiableQuoteItemInterface
     */
    protected $negotiableQuoteItem;
    /**
     *
     *
     * @return SalesRuleDataRuleDiscountInterface[]
     */
    public function getDiscounts(): array
    {
        return $this->discounts;
    }
    /**
     *
     *
     * @param SalesRuleDataRuleDiscountInterface[] $discounts
     *
     * @return self
     */
    public function setDiscounts(array $discounts): self
    {
        $this->discounts = $discounts;
        return $this;
    }
    /**
     * Interface CompanyQuoteConfigInterface
     *
     * @return NegotiableQuoteDataNegotiableQuoteItemInterface
     */
    public function getNegotiableQuoteItem(): NegotiableQuoteDataNegotiableQuoteItemInterface
    {
        return $this->negotiableQuoteItem;
    }
    /**
     * Interface CompanyQuoteConfigInterface
     *
     * @param NegotiableQuoteDataNegotiableQuoteItemInterface $negotiableQuoteItem
     *
     * @return self
     */
    public function setNegotiableQuoteItem(NegotiableQuoteDataNegotiableQuoteItemInterface $negotiableQuoteItem): self
    {
        $this->negotiableQuoteItem = $negotiableQuoteItem;
        return $this;
    }
}
