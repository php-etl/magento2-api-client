<?php

namespace Kiboko\Magento\Model;

class SalesDataShippingInterface
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
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @var SalesDataOrderAddressInterface|null
     */
    protected $address;
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
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShippingInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @return SalesDataOrderAddressInterface|null
     */
    public function getAddress() : ?SalesDataOrderAddressInterface
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
    public function setAddress(?SalesDataOrderAddressInterface $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Shipping method
     *
     * @return string|null
     */
    public function getMethod() : ?string
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
    public function setMethod(?string $method) : self
    {
        $this->initialized['method'] = true;
        $this->method = $method;
        return $this;
    }
    /**
     * Interface TotalInterface
     *
     * @return SalesDataTotalInterface|null
     */
    public function getTotal() : ?SalesDataTotalInterface
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
    public function setTotal(?SalesDataTotalInterface $total) : self
    {
        $this->initialized['total'] = true;
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
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}