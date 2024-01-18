<?php

namespace Kiboko\Magento\Model;

class CheckoutDataPaymentDetailsInterface
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
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * 
     *
     * @return QuoteDataPaymentMethodInterface[]|null
     */
    public function getPaymentMethods() : ?array
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
    public function setPaymentMethods(?array $paymentMethods) : self
    {
        $this->initialized['paymentMethods'] = true;
        $this->paymentMethods = $paymentMethods;
        return $this;
    }
    /**
     * Interface TotalsInterface
     *
     * @return QuoteDataTotalsInterface|null
     */
    public function getTotals() : ?QuoteDataTotalsInterface
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
    public function setTotals(?QuoteDataTotalsInterface $totals) : self
    {
        $this->initialized['totals'] = true;
        $this->totals = $totals;
        return $this;
    }
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
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}