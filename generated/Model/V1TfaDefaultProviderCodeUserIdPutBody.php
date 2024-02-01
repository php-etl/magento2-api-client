<?php

namespace Kiboko\Magento\Model;

class V1TfaDefaultProviderCodeUserIdPutBody
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
    protected $providerCode;
    /**
     * 
     *
     * @return string|null
     */
    public function getProviderCode() : ?string
    {
        return $this->providerCode;
    }
    /**
     * 
     *
     * @param string|null $providerCode
     *
     * @return self
     */
    public function setProviderCode(?string $providerCode) : self
    {
        $this->initialized['providerCode'] = true;
        $this->providerCode = $providerCode;
        return $this;
    }
}