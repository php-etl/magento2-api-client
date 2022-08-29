<?php

namespace Kiboko\Magento\v2_3\Model;

class SalesDataShippingInterface
{
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @var SalesDataOrderAddressInterface
     */
    protected $address;
    /**
     * Shipping method
     *
     * @var string
     */
    protected $method;
    /**
     * Interface TotalInterface
     *
     * @var SalesDataTotalInterface
     */
    protected $total;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShippingInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @return SalesDataOrderAddressInterface
     */
    public function getAddress(): SalesDataOrderAddressInterface
    {
        return $this->address;
    }
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @param SalesDataOrderAddressInterface $address
     *
     * @return self
     */
    public function setAddress(SalesDataOrderAddressInterface $address): self
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
     * Interface TotalInterface
     *
     * @return SalesDataTotalInterface
     */
    public function getTotal(): SalesDataTotalInterface
    {
        return $this->total;
    }
    /**
     * Interface TotalInterface
     *
     * @param SalesDataTotalInterface $total
     *
     * @return self
     */
    public function setTotal(SalesDataTotalInterface $total): self
    {
        $this->total = $total;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShippingInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShippingInterface
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
