<?php

namespace Kiboko\Magento\v2_2\Model;

class V1CustomersMePutBody
{
    /**
     * Customer interface.
     *
     * @var CustomerDataCustomerInterface
     */
    protected $customer;
    /**
     *
     *
     * @var string
     */
    protected $passwordHash;
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
    /**
     *
     *
     * @return string
     */
    public function getPasswordHash(): string
    {
        return $this->passwordHash;
    }
    /**
     *
     *
     * @param string $passwordHash
     *
     * @return self
     */
    public function setPasswordHash(string $passwordHash): self
    {
        $this->passwordHash = $passwordHash;
        return $this;
    }
}
