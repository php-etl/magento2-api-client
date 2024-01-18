<?php

namespace Kiboko\Magento\Model;

class V1CustomersPostBody
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
    protected $password;
    /**
     * 
     *
     * @var string|null
     */
    protected $redirectUrl;
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
    public function getPassword() : ?string
    {
        return $this->password;
    }
    /**
     * 
     *
     * @param string|null $password
     *
     * @return self
     */
    public function setPassword(?string $password) : self
    {
        $this->initialized['password'] = true;
        $this->password = $password;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRedirectUrl() : ?string
    {
        return $this->redirectUrl;
    }
    /**
     * 
     *
     * @param string|null $redirectUrl
     *
     * @return self
     */
    public function setRedirectUrl(?string $redirectUrl) : self
    {
        $this->initialized['redirectUrl'] = true;
        $this->redirectUrl = $redirectUrl;
        return $this;
    }
}