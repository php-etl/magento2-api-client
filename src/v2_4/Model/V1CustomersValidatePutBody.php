<?php

namespace Kiboko\Magento\V2_4\Model;

class V1CustomersValidatePutBody
{
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
    public function getCustomer(): ?CustomerDataCustomerInterface
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
    public function setCustomer(?CustomerDataCustomerInterface $customer): self
    {
        $this->customer = $customer;
        return $this;
    }
}
