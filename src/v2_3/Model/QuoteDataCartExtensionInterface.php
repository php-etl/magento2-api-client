<?php

namespace Kiboko\Magento\v2_3\Model;

class QuoteDataCartExtensionInterface
{
    /**
     *
     *
     * @var QuoteDataShippingAssignmentInterface[]
     */
    protected $shippingAssignments;
    /**
     * Interface NegotiableQuoteInterface
     *
     * @var NegotiableQuoteDataNegotiableQuoteInterface
     */
    protected $negotiableQuote;
    /**
     *
     *
     * @var AmazonPaymentDataQuoteLinkInterface
     */
    protected $amazonOrderReferenceId;
    /**
     *
     *
     * @return QuoteDataShippingAssignmentInterface[]
     */
    public function getShippingAssignments(): array
    {
        return $this->shippingAssignments;
    }
    /**
     *
     *
     * @param QuoteDataShippingAssignmentInterface[] $shippingAssignments
     *
     * @return self
     */
    public function setShippingAssignments(array $shippingAssignments): self
    {
        $this->shippingAssignments = $shippingAssignments;
        return $this;
    }
    /**
     * Interface NegotiableQuoteInterface
     *
     * @return NegotiableQuoteDataNegotiableQuoteInterface
     */
    public function getNegotiableQuote(): NegotiableQuoteDataNegotiableQuoteInterface
    {
        return $this->negotiableQuote;
    }
    /**
     * Interface NegotiableQuoteInterface
     *
     * @param NegotiableQuoteDataNegotiableQuoteInterface $negotiableQuote
     *
     * @return self
     */
    public function setNegotiableQuote(NegotiableQuoteDataNegotiableQuoteInterface $negotiableQuote): self
    {
        $this->negotiableQuote = $negotiableQuote;
        return $this;
    }
    /**
     *
     *
     * @return AmazonPaymentDataQuoteLinkInterface
     */
    public function getAmazonOrderReferenceId(): AmazonPaymentDataQuoteLinkInterface
    {
        return $this->amazonOrderReferenceId;
    }
    /**
     *
     *
     * @param AmazonPaymentDataQuoteLinkInterface $amazonOrderReferenceId
     *
     * @return self
     */
    public function setAmazonOrderReferenceId(AmazonPaymentDataQuoteLinkInterface $amazonOrderReferenceId): self
    {
        $this->amazonOrderReferenceId = $amazonOrderReferenceId;
        return $this;
    }
}
