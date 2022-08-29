<?php

namespace Kiboko\Magento\v2_3\Model;

class CheckoutDataShippingInformationInterface
{
    /**
     * Interface AddressInterface
     *
     * @var QuoteDataAddressInterface
     */
    protected $shippingAddress;
    /**
     * Interface AddressInterface
     *
     * @var QuoteDataAddressInterface
     */
    protected $billingAddress;
    /**
     * Shipping method code
     *
     * @var string
     */
    protected $shippingMethodCode;
    /**
     * Carrier code
     *
     * @var string
     */
    protected $shippingCarrierCode;
    /**
     * ExtensionInterface class for @see \Magento\Checkout\Api\Data\ShippingInformationInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]
     */
    protected $customAttributes;
    /**
     * Interface AddressInterface
     *
     * @return QuoteDataAddressInterface
     */
    public function getShippingAddress() : QuoteDataAddressInterface
    {
        return $this->shippingAddress;
    }
    /**
     * Interface AddressInterface
     *
     * @param QuoteDataAddressInterface $shippingAddress
     *
     * @return self
     */
    public function setShippingAddress(QuoteDataAddressInterface $shippingAddress) : self
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }
    /**
     * Interface AddressInterface
     *
     * @return QuoteDataAddressInterface
     */
    public function getBillingAddress() : QuoteDataAddressInterface
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
    public function setBillingAddress(QuoteDataAddressInterface $billingAddress) : self
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }
    /**
     * Shipping method code
     *
     * @return string
     */
    public function getShippingMethodCode() : string
    {
        return $this->shippingMethodCode;
    }
    /**
     * Shipping method code
     *
     * @param string $shippingMethodCode
     *
     * @return self
     */
    public function setShippingMethodCode(string $shippingMethodCode) : self
    {
        $this->shippingMethodCode = $shippingMethodCode;
        return $this;
    }
    /**
     * Carrier code
     *
     * @return string
     */
    public function getShippingCarrierCode() : string
    {
        return $this->shippingCarrierCode;
    }
    /**
     * Carrier code
     *
     * @param string $shippingCarrierCode
     *
     * @return self
     */
    public function setShippingCarrierCode(string $shippingCarrierCode) : self
    {
        $this->shippingCarrierCode = $shippingCarrierCode;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Checkout\Api\Data\ShippingInformationInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Checkout\Api\Data\ShippingInformationInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Custom attributes values.
     *
     * @return FrameworkAttributeInterface[]
     */
    public function getCustomAttributes() : array
    {
        return $this->customAttributes;
    }
    /**
     * Custom attributes values.
     *
     * @param FrameworkAttributeInterface[] $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(array $customAttributes) : self
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }
}