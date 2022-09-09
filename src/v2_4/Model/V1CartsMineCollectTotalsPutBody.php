<?php

namespace Kiboko\Magento\V2_4\Model;

class V1CartsMineCollectTotalsPutBody
{
    /**
     * Additional data for totals collection.
     *
     * @var QuoteDataTotalsAdditionalDataInterface|null
     */
    protected $additionalData;
    /**
     * Interface PaymentInterface
     *
     * @var QuoteDataPaymentInterface|null
     */
    protected $paymentMethod;
    /**
     * The carrier code.
     *
     * @var string|null
     */
    protected $shippingCarrierCode;
    /**
     * The shipping method code.
     *
     * @var string|null
     */
    protected $shippingMethodCode;
    /**
     * Additional data for totals collection.
     *
     * @return QuoteDataTotalsAdditionalDataInterface|null
     */
    public function getAdditionalData(): ?QuoteDataTotalsAdditionalDataInterface
    {
        return $this->additionalData;
    }
    /**
     * Additional data for totals collection.
     *
     * @param QuoteDataTotalsAdditionalDataInterface|null $additionalData
     *
     * @return self
     */
    public function setAdditionalData(?QuoteDataTotalsAdditionalDataInterface $additionalData): self
    {
        $this->additionalData = $additionalData;
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
    /**
     * The carrier code.
     *
     * @return string|null
     */
    public function getShippingCarrierCode(): ?string
    {
        return $this->shippingCarrierCode;
    }
    /**
     * The carrier code.
     *
     * @param string|null $shippingCarrierCode
     *
     * @return self
     */
    public function setShippingCarrierCode(?string $shippingCarrierCode): self
    {
        $this->shippingCarrierCode = $shippingCarrierCode;
        return $this;
    }
    /**
     * The shipping method code.
     *
     * @return string|null
     */
    public function getShippingMethodCode(): ?string
    {
        return $this->shippingMethodCode;
    }
    /**
     * The shipping method code.
     *
     * @param string|null $shippingMethodCode
     *
     * @return self
     */
    public function setShippingMethodCode(?string $shippingMethodCode): self
    {
        $this->shippingMethodCode = $shippingMethodCode;
        return $this;
    }
}
