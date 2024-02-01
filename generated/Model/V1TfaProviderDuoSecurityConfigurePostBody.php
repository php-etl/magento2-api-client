<?php

namespace Kiboko\Magento\Model;

class V1TfaProviderDuoSecurityConfigurePostBody
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
}