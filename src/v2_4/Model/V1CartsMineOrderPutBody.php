<?php

namespace Kiboko\Magento\V2_4\Model;

class V1CartsMineOrderPutBody
{
    /**
     * Interface PaymentInterface
     *
     * @var QuoteDataPaymentInterface|null
     */
    protected $paymentMethod;
    /**
     * Interface PaymentInterface
     *
     * @return QuoteDataPaymentInterface|null
     */
    public function getPaymentMethod(): ?QuoteDataPaymentInterface
    {
        return $this->paymentMethod;
    }
    /**
     * Interface PaymentInterface
     *
     * @param QuoteDataPaymentInterface|null $paymentMethod
     *
     * @return self
     */
    public function setPaymentMethod(?QuoteDataPaymentInterface $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }
}
