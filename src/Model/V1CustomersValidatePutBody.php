<?php

namespace Kiboko\Magento\Model;

class V1CustomersValidatePutBody
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
     * Customer interface.
     *
     * @var CustomerDataCustomerInterface|null
     */
    protected $customer;
    /**
     * Customer interface.
     *
     * @return CustomerDataCustomerInterface|null
     */
    public function getCustomer() : ?CustomerDataCustomerInterface
    {
        return $this->customer;
    }
    /**
     * Customer interface.
     *
     * @param CustomerDataCustomerInterface|null $customer
     *
     * @return self
     */
    public function setCustomer(?CustomerDataCustomerInterface $customer) : self
    {
        $this->initialized['customer'] = true;
        $this->customer = $customer;
        return $this;
    }
}