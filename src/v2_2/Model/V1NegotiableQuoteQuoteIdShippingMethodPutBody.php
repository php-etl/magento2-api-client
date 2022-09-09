<?php

namespace Kiboko\Magento\V2_2\Model;

class V1NegotiableQuoteQuoteIdShippingMethodPutBody
{
    /**
     * The shipping method code.
     *
     * @var string|null
     */
    protected $shippingMethod;
    /**
     * The shipping method code.
     *
     * @return string|null
     */
    public function getShippingMethod(): ?string
    {
        return $this->shippingMethod;
    }
    /**
     * The shipping method code.
     *
     * @param string|null $shippingMethod
     *
     * @return self
     */
    public function setShippingMethod(?string $shippingMethod): self
    {
        $this->shippingMethod = $shippingMethod;
        return $this;
    }
}
