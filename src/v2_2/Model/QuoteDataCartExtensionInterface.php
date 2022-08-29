<?php

namespace Kiboko\Magento\v2_2\Model;

class QuoteDataCartExtensionInterface
{
    /**
     *
     *
     * @var string
     */
    protected $amazonOrderReferenceId;
    /**
     * Interface NegotiableQuoteInterface
     *
     * @var NegotiableQuoteDataNegotiableQuoteInterface
     */
    protected $negotiableQuote;
    /**
     *
     *
     * @var QuoteDataShippingAssignmentInterface[]
     */
    protected $shippingAssignments;
    /**
     *
     *
     * @return string
     */
    public function getAmazonOrderReferenceId(): string
    {
        return $this->amazonOrderReferenceId;
    }
    /**
     *
     *
     * @param string $amazonOrderReferenceId
     *
     * @return self
     */
    public function setAmazonOrderReferenceId(string $amazonOrderReferenceId): self
    {
        $this->amazonOrderReferenceId = $amazonOrderReferenceId;
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
}
