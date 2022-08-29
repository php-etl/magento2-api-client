<?php

namespace Kiboko\Magento\v2_4\Model;

class QuoteDataShippingInterface
{
    /**
     * Interface AddressInterface
     *
     * @var QuoteDataAddressInterface
     */
    protected $address;
    /**
     * Shipping method
     *
     * @var string
     */
    protected $method;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\ShippingInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
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
     * Shipping method
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }
    /**
     * Shipping method
     *
     * @param string $method
     *
     * @return self
     */
    public function setMethod(string $method): self
    {
        $this->method = $method;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\ShippingInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\ShippingInterface
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
}
