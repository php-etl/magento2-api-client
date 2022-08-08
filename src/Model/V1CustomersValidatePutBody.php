<?php

namespace Kiboko\Magento\V2\Model;

class V1CustomersValidatePutBody
{
    /**
     * Customer interface.
     *
     * @var CustomerDataCustomerInterface
     */
    protected $customer;
    /**
     * Customer interface.
     *
     * @return CustomerDataCustomerInterface
     */
    public function getCustomer(): CustomerDataCustomerInterface
    {
        return $this->customer;
    }
    /**
     * Customer interface.
     *
     * @param CustomerDataCustomerInterface $customer
     *
     * @return self
     */
    public function setCustomer(CustomerDataCustomerInterface $customer): self
    {
        $this->customer = $customer;
        return $this;
    }
}
