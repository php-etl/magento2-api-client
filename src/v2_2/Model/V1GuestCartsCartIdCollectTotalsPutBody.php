<?php

namespace Kiboko\Magento\v2_2\Model;

class V1GuestCartsCartIdCollectTotalsPutBody
{
    /**
     * Interface PaymentInterface
     *
     * @var QuoteDataPaymentInterface
     */
    protected $paymentMethod;
    /**
     * The carrier code.
     *
     * @var string
     */
    protected $shippingCarrierCode;
    /**
     * The shipping method code.
     *
     * @var string
     */
    protected $shippingMethodCode;
    /**
     * Additional data for totals collection.
     *
     * @var QuoteDataTotalsAdditionalDataInterface
     */
    protected $additionalData;
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
     * The carrier code.
     *
     * @return string
     */
    public function getShippingCarrierCode(): string
    {
        return $this->shippingCarrierCode;
    }
    /**
     * The carrier code.
     *
     * @param string $shippingCarrierCode
     *
     * @return self
     */
    public function setShippingCarrierCode(string $shippingCarrierCode): self
    {
        $this->shippingCarrierCode = $shippingCarrierCode;
        return $this;
    }
    /**
     * The shipping method code.
     *
     * @return string
     */
    public function getShippingMethodCode(): string
    {
        return $this->shippingMethodCode;
    }
    /**
     * The shipping method code.
     *
     * @param string $shippingMethodCode
     *
     * @return self
     */
    public function setShippingMethodCode(string $shippingMethodCode): self
    {
        $this->shippingMethodCode = $shippingMethodCode;
        return $this;
    }
    /**
     * Additional data for totals collection.
     *
     * @return QuoteDataTotalsAdditionalDataInterface
     */
    public function getAdditionalData(): QuoteDataTotalsAdditionalDataInterface
    {
        return $this->additionalData;
    }
    /**
     * Additional data for totals collection.
     *
     * @param QuoteDataTotalsAdditionalDataInterface $additionalData
     *
     * @return self
     */
    public function setAdditionalData(QuoteDataTotalsAdditionalDataInterface $additionalData): self
    {
        $this->additionalData = $additionalData;
        return $this;
    }
}
