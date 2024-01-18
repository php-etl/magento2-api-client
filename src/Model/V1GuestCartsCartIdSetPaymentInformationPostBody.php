<?php

namespace Kiboko\Magento\Model;

class V1GuestCartsCartIdSetPaymentInformationPostBody
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
     * @var string|null
     */
    protected $email;
    /**
     * Interface PaymentInterface
     *
     * @var QuoteDataPaymentInterface|null
     */
    protected $paymentMethod;
    /**
     * Interface AddressInterface
     *
     * @var QuoteDataAddressInterface|null
     */
    protected $billingAddress;
    /**
     * 
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * Interface PaymentInterface
     *
     * @return QuoteDataPaymentInterface|null
     */
    public function getPaymentMethod() : ?QuoteDataPaymentInterface
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
    public function setPaymentMethod(?QuoteDataPaymentInterface $paymentMethod) : self
    {
        $this->initialized['paymentMethod'] = true;
        $this->paymentMethod = $paymentMethod;
        return $this;
    }
    /**
     * Interface AddressInterface
     *
     * @return QuoteDataAddressInterface|null
     */
    public function getBillingAddress() : ?QuoteDataAddressInterface
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
    public function setBillingAddress(?QuoteDataAddressInterface $billingAddress) : self
    {
        $this->initialized['billingAddress'] = true;
        $this->billingAddress = $billingAddress;
        return $this;
    }
}