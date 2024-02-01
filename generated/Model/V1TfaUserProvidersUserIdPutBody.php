<?php

namespace Kiboko\Magento\Model;

class V1TfaUserProvidersUserIdPutBody
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
    protected $providersCodes;
    /**
     * 
     *
     * @return string|null
     */
    public function getProvidersCodes() : ?string
    {
        return $this->providersCodes;
    }
    /**
     * 
     *
     * @param string|null $providersCodes
     *
     * @return self
     */
    public function setProvidersCodes(?string $providersCodes) : self
    {
        $this->initialized['providersCodes'] = true;
        $this->providersCodes = $providersCodes;
        return $this;
    }
}