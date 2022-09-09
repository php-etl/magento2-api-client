<?php

namespace Kiboko\Magento\V2_3\Model;

class V1CartsMinePaymentInformationPostBody
{
    /**
     * Interface AddressInterface
     *
     * @var QuoteDataAddressInterface|null
     */
    protected $billingAddress;
    /**
     * Interface PaymentInterface
     *
     * @var QuoteDataPaymentInterface|null
     */
    protected $paymentMethod;
    /**
     * Interface AddressInterface
     *
     * @return QuoteDataAddressInterface|null
     */
    public function getBillingAddress(): ?QuoteDataAddressInterface
    {
        return $this->billingAddress;
    }
    /**
     * Interface AddressInterface
     *
     * @param QuoteDataAddressInterface|null $billingAddress
     *
     * @return self
     */
    public function setBillingAddress(?QuoteDataAddressInterface $billingAddress): self
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }
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
