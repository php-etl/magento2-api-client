<?php

namespace Kiboko\Magento\V2_4\Model;

class CheckoutDataPaymentDetailsInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Checkout\Api\Data\PaymentDetailsInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @var QuoteDataPaymentMethodInterface[]|null
     */
    protected $paymentMethods;
    /**
     * Interface TotalsInterface
     *
     * @var QuoteDataTotalsInterface|null
     */
    protected $totals;
    /**
     * ExtensionInterface class for @see \Magento\Checkout\Api\Data\PaymentDetailsInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Checkout\Api\Data\PaymentDetailsInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     *
     *
     * @return QuoteDataPaymentMethodInterface[]|null
     */
    public function getPaymentMethods(): ?array
    {
        return $this->paymentMethods;
    }
    /**
     *
     *
     * @param QuoteDataPaymentMethodInterface[]|null $paymentMethods
     *
     * @return self
     */
    public function setPaymentMethods(?array $paymentMethods): self
    {
        $this->paymentMethods = $paymentMethods;
        return $this;
    }
    /**
     * Interface TotalsInterface
     *
     * @return QuoteDataTotalsInterface|null
     */
    public function getTotals(): ?QuoteDataTotalsInterface
    {
        return $this->totals;
    }
    /**
     * Interface TotalsInterface
     *
     * @param QuoteDataTotalsInterface|null $totals
     *
     * @return self
     */
    public function setTotals(?QuoteDataTotalsInterface $totals): self
    {
        $this->totals = $totals;
        return $this;
    }
}
