<?php

namespace Kiboko\Magento\V2_2\Model;

class V1CustomersPostBody
{
    /**
     * Customer interface.
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
    /**
     *
     *
     * @return string|null
     */
    public function getPassword(): ?string
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
    public function setPassword(?string $password): self
    {
        $this->password = $password;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getRedirectUrl(): ?string
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
    public function setRedirectUrl(?string $redirectUrl): self
    {
        $this->redirectUrl = $redirectUrl;
        return $this;
    }
}
