<?php

namespace Kiboko\Magento\v2_2\Model;

class V1CustomersPostBody
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
    protected $password;
    /**
     *
     *
     * @var string
     */
    protected $redirectUrl;
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
    public function getPassword(): string
    {
        return $this->password;
    }
    /**
     *
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }
    /**
     *
     *
     * @param string $redirectUrl
     *
     * @return self
     */
    public function setRedirectUrl(string $redirectUrl): self
    {
        $this->redirectUrl = $redirectUrl;
        return $this;
    }
}
