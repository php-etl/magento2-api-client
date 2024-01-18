<?php

namespace Kiboko\Magento\Model;

class V1TfaProviderU2fkeyVerifyPostBody
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
     * 
     *
     * @var string|null
     */
    protected $username;
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
    protected $publicKeyCredentialJson;
    /**
     * 
     *
     * @return string|null
     */
    public function getUsername() : ?string
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
    public function setUsername(?string $username) : self
    {
        $this->initialized['username'] = true;
        $this->username = $username;
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
    public function getPublicKeyCredentialJson() : ?string
    {
        return $this->publicKeyCredentialJson;
    }
    /**
     * 
     *
     * @param string|null $publicKeyCredentialJson
     *
     * @return self
     */
    public function setPublicKeyCredentialJson(?string $publicKeyCredentialJson) : self
    {
        $this->initialized['publicKeyCredentialJson'] = true;
        $this->publicKeyCredentialJson = $publicKeyCredentialJson;
        return $this;
    }
}