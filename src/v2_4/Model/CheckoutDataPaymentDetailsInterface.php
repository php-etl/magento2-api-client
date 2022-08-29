<?php

namespace Kiboko\Magento\v2_4\Model;

class CheckoutDataPaymentDetailsInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Checkout\Api\Data\PaymentDetailsInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @var QuoteDataPaymentMethodInterface[]
     */
    protected $paymentMethods;
    /**
     * Interface TotalsInterface
     *
     * @var QuoteDataTotalsInterface
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
     * @return QuoteDataPaymentMethodInterface[]
     */
    public function getPaymentMethods(): array
    {
        return $this->paymentMethods;
    }
    /**
     *
     *
     * @param QuoteDataPaymentMethodInterface[] $paymentMethods
     *
     * @return self
     */
    public function setPaymentMethods(array $paymentMethods): self
    {
        $this->paymentMethods = $paymentMethods;
        return $this;
    }
    /**
     * Interface TotalsInterface
     *
     * @return QuoteDataTotalsInterface
     */
    public function getTotals(): QuoteDataTotalsInterface
    {
        return $this->totals;
    }
    /**
     * Interface TotalsInterface
     *
     * @param QuoteDataTotalsInterface $totals
     *
     * @return self
     */
    public function setTotals(QuoteDataTotalsInterface $totals): self
    {
        $this->totals = $totals;
        return $this;
    }
}
