<?php

namespace Kiboko\Magento\Model;

class V1CartsCartIdSelectedPaymentMethodPutBody
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
    protected $method;
    /**
     * Interface PaymentInterface
     *
     * @return QuoteDataPaymentInterface|null
     */
    public function getMethod() : ?QuoteDataPaymentInterface
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
    public function setMethod(?QuoteDataPaymentInterface $method) : self
    {
        $this->initialized['method'] = true;
        $this->method = $method;
        return $this;
    }
}