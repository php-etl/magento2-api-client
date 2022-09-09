<?php

namespace Kiboko\Magento\V2_1\Model;

class CheckoutDataShippingInformationInterface
{
    /**
     * Interface AddressInterface
     *
     * @var QuoteDataAddressInterface|null
     */
    protected $billingAddress;
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]|null
     */
    protected $customAttributes;
    /**
     * ExtensionInterface class for @see \Magento\Checkout\Api\Data\ShippingInformationInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Interface AddressInterface
     *
     * @var QuoteDataAddressInterface|null
     */
    protected $shippingAddress;
    /**
     * Carrier code
     *
     * @var string|null
     */
    protected $shippingCarrierCode;
    /**
     * Shipping method code
     *
     * @var string|null
     */
    protected $shippingMethodCode;
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
     * Custom attributes values.
     *
     * @return FrameworkAttributeInterface[]|null
     */
    public function getCustomAttributes(): ?array
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
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->customAttributes = $customAttributes;
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
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Interface AddressInterface
     *
     * @return QuoteDataAddressInterface|null
     */
    public function getShippingAddress(): ?QuoteDataAddressInterface
    {
        return $this->shippingAddress;
    }
    /**
     * Interface AddressInterface
     *
     * @param QuoteDataAddressInterface|null $shippingAddress
     *
     * @return self
     */
    public function setShippingAddress(?QuoteDataAddressInterface $shippingAddress): self
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }
    /**
     * Carrier code
     *
     * @return string|null
     */
    public function getShippingCarrierCode(): ?string
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
    public function setShippingCarrierCode(?string $shippingCarrierCode): self
    {
        $this->shippingCarrierCode = $shippingCarrierCode;
        return $this;
    }
    /**
     * Shipping method code
     *
     * @return string|null
     */
    public function getShippingMethodCode(): ?string
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
    public function setShippingMethodCode(?string $shippingMethodCode): self
    {
        $this->shippingMethodCode = $shippingMethodCode;
        return $this;
    }
}
