<?php

namespace Kiboko\Magento\V2_1\Model;

class SalesDataShippingInterface
{
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @var SalesDataOrderAddressInterface|null
     */
    protected $address;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShippingInterface
     *
     * @var SalesDataShippingExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Shipping method
     *
     * @var string|null
     */
    protected $method;
    /**
     * Interface TotalInterface
     *
     * @var SalesDataTotalInterface|null
     */
    protected $total;
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @return SalesDataOrderAddressInterface|null
     */
    public function getAddress(): ?SalesDataOrderAddressInterface
    {
        return $this->address;
    }
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @param SalesDataOrderAddressInterface|null $address
     *
     * @return self
     */
    public function setAddress(?SalesDataOrderAddressInterface $address): self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShippingInterface
     *
     * @return SalesDataShippingExtensionInterface|null
     */
    public function getExtensionAttributes(): ?SalesDataShippingExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShippingInterface
     *
     * @param SalesDataShippingExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?SalesDataShippingExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Shipping method
     *
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }
    /**
     * Shipping method
     *
     * @param string|null $method
     *
     * @return self
     */
    public function setMethod(?string $method): self
    {
        $this->method = $method;
        return $this;
    }
    /**
     * Interface TotalInterface
     *
     * @return SalesDataTotalInterface|null
     */
    public function getTotal(): ?SalesDataTotalInterface
    {
        return $this->total;
    }
    /**
     * Interface TotalInterface
     *
     * @param SalesDataTotalInterface|null $total
     *
     * @return self
     */
    public function setTotal(?SalesDataTotalInterface $total): self
    {
        $this->total = $total;
        return $this;
    }
}
