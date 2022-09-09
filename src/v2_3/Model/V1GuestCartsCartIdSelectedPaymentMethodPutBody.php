<?php

namespace Kiboko\Magento\V2_3\Model;

class V1GuestCartsCartIdSelectedPaymentMethodPutBody
{
    /**
     * Interface PaymentInterface
     *
     * @var QuoteDataPaymentInterface|null
     */
    protected $method;
    /**
     * Interface PaymentInterface
     *
     * @return QuoteDataPaymentInterface|null
     */
    public function getMethod(): ?QuoteDataPaymentInterface
    {
        return $this->method;
    }
    /**
     * Interface PaymentInterface
     *
     * @param QuoteDataPaymentInterface|null $method
     *
     * @return self
     */
    public function setMethod(?QuoteDataPaymentInterface $method): self
    {
        $this->method = $method;
        return $this;
    }
}
