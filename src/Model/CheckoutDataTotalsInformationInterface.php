<?php

namespace Kiboko\Magento\Model;

class CheckoutDataTotalsInformationInterface
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
     * Interface AddressInterface
     *
     * @var QuoteDataAddressInterface|null
     */
    protected $address;
    /**
     * Shipping method code
     *
     * @var string|null
     */
    protected $shippingMethodCode;
    /**
     * Carrier code
     *
     * @var string|null
     */
    protected $shippingCarrierCode;
    /**
     * ExtensionInterface class for @see \Magento\Checkout\Api\Data\TotalsInformationInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]|null
     */
    protected $customAttributes;
    /**
     * Interface AddressInterface
     *
     * @return QuoteDataAddressInterface|null
     */
    public function getAddress() : ?QuoteDataAddressInterface
    {
        return $this->address;
    }
    /**
     * Interface AddressInterface
     *
     * @param QuoteDataAddressInterface|null $address
     *
     * @return self
     */
    public function setAddress(?QuoteDataAddressInterface $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Shipping method code
     *
     * @return string|null
     */
    public function getShippingMethodCode() : ?string
    {
        return $this->shippingMethodCode;
    }
    /**
     * Shipping method code
     *
     * @param string|null $shippingMethodCode
     *
     * @return self
     */
    public function setShippingMethodCode(?string $shippingMethodCode) : self
    {
        $this->initialized['shippingMethodCode'] = true;
        $this->shippingMethodCode = $shippingMethodCode;
        return $this;
    }
    /**
     * Carrier code
     *
     * @return string|null
     */
    public function getShippingCarrierCode() : ?string
    {
        return $this->shippingCarrierCode;
    }
    /**
     * Carrier code
     *
     * @param string|null $shippingCarrierCode
     *
     * @return self
     */
    public function setShippingCarrierCode(?string $shippingCarrierCode) : self
    {
        $this->initialized['shippingCarrierCode'] = true;
        $this->shippingCarrierCode = $shippingCarrierCode;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Checkout\Api\Data\TotalsInformationInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Checkout\Api\Data\TotalsInformationInterface
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
    /**
     * Custom attributes values.
     *
     * @return FrameworkAttributeInterface[]|null
     */
    public function getCustomAttributes() : ?array
    {
        return $this->customAttributes;
    }
    /**
     * Custom attributes values.
     *
     * @param FrameworkAttributeInterface[]|null $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(?array $customAttributes) : self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
        return $this;
    }
}