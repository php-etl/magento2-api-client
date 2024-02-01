<?php

namespace Kiboko\Magento\Model;

class V1TfaProviderDuoSecurityActivatePostBody
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
    protected $signatureResponse;
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
    public function getSignatureResponse() : ?string
    {
        return $this->signatureResponse;
    }
    /**
     * 
     *
     * @param string|null $signatureResponse
     *
     * @return self
     */
    public function setSignatureResponse(?string $signatureResponse) : self
    {
        $this->initialized['signatureResponse'] = true;
        $this->signatureResponse = $signatureResponse;
        return $this;
    }
}