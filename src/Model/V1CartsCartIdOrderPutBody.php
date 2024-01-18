<?php

namespace Kiboko\Magento\Model;

class V1CartsCartIdOrderPutBody
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
    public function getPaymentMethod() : ?QuoteDataPaymentInterface
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
    public function setPaymentMethod(?QuoteDataPaymentInterface $paymentMethod) : self
    {
        $this->initialized['paymentMethod'] = true;
        $this->paymentMethod = $paymentMethod;
        return $this;
    }
}