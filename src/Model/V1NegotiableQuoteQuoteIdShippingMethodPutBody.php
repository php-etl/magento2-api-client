<?php

namespace Kiboko\Magento\V2\Model;

class V1NegotiableQuoteQuoteIdShippingMethodPutBody
{
    /**
     * The shipping method code.
     *
     * @var string
     */
    protected $shippingMethod;
    /**
     * The shipping method code.
     *
     * @return string
     */
    public function getShippingMethod() : string
    {
        return $this->shippingMethod;
    }
    /**
     * The shipping method code.
     *
     * @param string $shippingMethod
     *
     * @return self
     */
    public function setShippingMethod(string $shippingMethod) : self
    {
        $this->shippingMethod = $shippingMethod;
        return $this;
    }
}