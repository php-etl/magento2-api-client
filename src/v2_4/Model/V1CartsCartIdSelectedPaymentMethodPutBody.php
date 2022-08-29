<?php

namespace Kiboko\Magento\v2_4\Model;

class V1CartsCartIdSelectedPaymentMethodPutBody
{
    /**
     * Interface PaymentInterface
     *
     * @var QuoteDataPaymentInterface
     */
    protected $method;
    /**
     * Interface PaymentInterface
     *
     * @return QuoteDataPaymentInterface
     */
    public function getMethod(): QuoteDataPaymentInterface
    {
        return $this->method;
    }
    /**
     * Interface PaymentInterface
     *
     * @param QuoteDataPaymentInterface $method
     *
     * @return self
     */
    public function setMethod(QuoteDataPaymentInterface $method): self
    {
        $this->method = $method;
        return $this;
    }
}
