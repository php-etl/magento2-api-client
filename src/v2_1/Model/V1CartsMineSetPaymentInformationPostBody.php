<?php

namespace Kiboko\Magento\v2_1\Model;

class V1CartsMineSetPaymentInformationPostBody
{
    /**
     * Interface PaymentInterface
     *
     * @var QuoteDataPaymentInterface
     */
    protected $paymentMethod;
    /**
     * Interface AddressInterface
     *
     * @var QuoteDataAddressInterface
     */
    protected $billingAddress;
    /**
     * Interface PaymentInterface
     *
     * @return QuoteDataPaymentInterface
     */
    public function getPaymentMethod(): QuoteDataPaymentInterface
    {
        return $this->paymentMethod;
    }
    /**
     * Interface PaymentInterface
     *
     * @param QuoteDataPaymentInterface $paymentMethod
     *
     * @return self
     */
    public function setPaymentMethod(QuoteDataPaymentInterface $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }
    /**
     * Interface AddressInterface
     *
     * @return QuoteDataAddressInterface
     */
    public function getBillingAddress(): QuoteDataAddressInterface
    {
        return $this->billingAddress;
    }
    /**
     * Interface AddressInterface
     *
     * @param QuoteDataAddressInterface $billingAddress
     *
     * @return self
     */
    public function setBillingAddress(QuoteDataAddressInterface $billingAddress): self
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }
}
