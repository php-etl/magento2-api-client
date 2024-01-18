<?php

namespace Kiboko\Magento\Model;

class V1TfaProviderAuthyConfigurePostBody
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
     * Authy device data interface
     *
     * @var TwoFactorAuthDataAuthyDeviceInterface|null
     */
    protected $deviceData;
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
     * Authy device data interface
     *
     * @return TwoFactorAuthDataAuthyDeviceInterface|null
     */
    public function getDeviceData() : ?TwoFactorAuthDataAuthyDeviceInterface
    {
        return $this->deviceData;
    }
    /**
     * Authy device data interface
     *
     * @param TwoFactorAuthDataAuthyDeviceInterface|null $deviceData
     *
     * @return self
     */
    public function setDeviceData(?TwoFactorAuthDataAuthyDeviceInterface $deviceData) : self
    {
        $this->initialized['deviceData'] = true;
        $this->deviceData = $deviceData;
        return $this;
    }
}