<?php

namespace Kiboko\Magento\V2_2\Model;

class V1CustomersMePutBody
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
    protected $passwordHash;
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
    public function getPasswordHash(): ?string
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
    public function setPasswordHash(?string $passwordHash): self
    {
        $this->passwordHash = $passwordHash;
        return $this;
    }
}
