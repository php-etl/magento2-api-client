<?php

namespace Kiboko\Magento\Model;

class V1TfaProviderU2fkeyActivatePostBody
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
    protected $tfaToken;
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
    public function getTfaToken() : ?string
    {
        return $this->tfaToken;
    }
    /**
     * 
     *
     * @param string|null $tfaToken
     *
     * @return self
     */
    public function setTfaToken(?string $tfaToken) : self
    {
        $this->initialized['tfaToken'] = true;
        $this->tfaToken = $tfaToken;
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