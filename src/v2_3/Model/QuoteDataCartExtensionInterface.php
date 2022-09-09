<?php

namespace Kiboko\Magento\V2_3\Model;

class QuoteDataCartExtensionInterface
{
    /**
     *
     *
     * @var string|null
     */
    protected $amazonOrderReferenceId;
    /**
     * Interface NegotiableQuoteInterface
     *
     * @var NegotiableQuoteDataNegotiableQuoteInterface|null
     */
    protected $negotiableQuote;
    /**
     *
     *
     * @var QuoteDataShippingAssignmentInterface[]|null
     */
    protected $shippingAssignments;
    /**
     *
     *
     * @return string|null
     */
    public function getAmazonOrderReferenceId(): ?string
    {
        return $this->amazonOrderReferenceId;
    }
    /**
     *
     *
     * @param string|null $amazonOrderReferenceId
     *
     * @return self
     */
    public function setAmazonOrderReferenceId(?string $amazonOrderReferenceId): self
    {
        $this->amazonOrderReferenceId = $amazonOrderReferenceId;
        return $this;
    }
    /**
     * Interface NegotiableQuoteInterface
     *
     * @return NegotiableQuoteDataNegotiableQuoteInterface|null
     */
    public function getNegotiableQuote(): ?NegotiableQuoteDataNegotiableQuoteInterface
    {
        return $this->negotiableQuote;
    }
    /**
     * Interface NegotiableQuoteInterface
     *
     * @param NegotiableQuoteDataNegotiableQuoteInterface|null $negotiableQuote
     *
     * @return self
     */
    public function setNegotiableQuote(?NegotiableQuoteDataNegotiableQuoteInterface $negotiableQuote): self
    {
        $this->negotiableQuote = $negotiableQuote;
        return $this;
    }
    /**
     *
     *
     * @return QuoteDataShippingAssignmentInterface[]|null
     */
    public function getShippingAssignments(): ?array
    {
        return $this->shippingAssignments;
    }
    /**
     *
     *
     * @param QuoteDataShippingAssignmentInterface[]|null $shippingAssignments
     *
     * @return self
     */
    public function setShippingAssignments(?array $shippingAssignments): self
    {
        $this->shippingAssignments = $shippingAssignments;
        return $this;
    }
}
