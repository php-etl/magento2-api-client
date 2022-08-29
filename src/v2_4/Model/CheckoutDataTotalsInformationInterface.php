<?php

namespace Kiboko\Magento\v2_4\Model;

class CheckoutDataTotalsInformationInterface
{
    /**
     * Interface AddressInterface
     *
     * @var QuoteDataAddressInterface
     */
    protected $address;
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
     * ExtensionInterface class for @see \Magento\Checkout\Api\Data\TotalsInformationInterface
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
    public function getAddress(): QuoteDataAddressInterface
    {
        return $this->address;
    }
    /**
     * Interface AddressInterface
     *
     * @param QuoteDataAddressInterface $address
     *
     * @return self
     */
    public function setAddress(QuoteDataAddressInterface $address): self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Shipping method code
     *
     * @return string
     */
    public function getShippingMethodCode(): string
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
    public function setShippingMethodCode(string $shippingMethodCode): self
    {
        $this->shippingMethodCode = $shippingMethodCode;
        return $this;
    }
    /**
     * Carrier code
     *
     * @return string
     */
    public function getShippingCarrierCode(): string
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
    public function setShippingCarrierCode(string $shippingCarrierCode): self
    {
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
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Custom attributes values.
     *
     * @return FrameworkAttributeInterface[]
     */
    public function getCustomAttributes(): array
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
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }
}
