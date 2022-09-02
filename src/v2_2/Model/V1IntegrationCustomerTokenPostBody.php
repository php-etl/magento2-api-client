<?php

namespace Kiboko\Magento\V2_2\Model;

class V1IntegrationCustomerTokenPostBody
{
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
    protected $username;
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
    public function getUsername(): string
    {
        return $this->username;
    }
    /**
     *
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;
        return $this;
    }
}
