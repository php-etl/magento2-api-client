<?php

namespace Kiboko\Magento\Model;

class V1TfaProviderGoogleActivatePostBody
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
    protected $otp;
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
    public function getOtp() : ?string
    {
        return $this->otp;
    }
    /**
     * 
     *
     * @param string|null $otp
     *
     * @return self
     */
    public function setOtp(?string $otp) : self
    {
        $this->initialized['otp'] = true;
        $this->otp = $otp;
        return $this;
    }
}