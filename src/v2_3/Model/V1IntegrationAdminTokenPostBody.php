<?php

namespace Kiboko\Magento\V2_3\Model;

class V1IntegrationAdminTokenPostBody
{
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
    protected $username;
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
    public function getUsername(): ?string
    {
        return $this->username;
    }
    /**
     *
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setUsername(?string $username): self
    {
        $this->username = $username;
        return $this;
    }
}
