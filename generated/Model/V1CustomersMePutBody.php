<?php

namespace Kiboko\Magento\Model;

class V1CustomersMePutBody
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
     * Customer entity interface for API handling.
     *
     * @var CustomerDataCustomerInterface|null
     */
    protected $customer;
    /**
     * 
     *
     * @var string|null
     */
    protected $passwordHash;
    /**
     * Customer entity interface for API handling.
     *
     * @return CustomerDataCustomerInterface|null
     */
    public function getCustomer() : ?CustomerDataCustomerInterface
    {
        return $this->customer;
    }
    /**
     * Customer entity interface for API handling.
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
    /**
     * 
     *
     * @return string|null
     */
    public function getPasswordHash() : ?string
    {
        return $this->passwordHash;
    }
    /**
     * 
     *
     * @param string|null $passwordHash
     *
     * @return self
     */
    public function setPasswordHash(?string $passwordHash) : self
    {
        $this->initialized['passwordHash'] = true;
        $this->passwordHash = $passwordHash;
        return $this;
    }
}