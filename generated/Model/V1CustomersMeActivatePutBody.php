<?php

namespace Kiboko\Magento\Model;

class V1CustomersMeActivatePutBody
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
    protected $confirmationKey;
    /**
     * 
     *
     * @return string|null
     */
    public function getConfirmationKey() : ?string
    {
        return $this->confirmationKey;
    }
    /**
     * 
     *
     * @param string|null $confirmationKey
     *
     * @return self
     */
    public function setConfirmationKey(?string $confirmationKey) : self
    {
        $this->initialized['confirmationKey'] = true;
        $this->confirmationKey = $confirmationKey;
        return $this;
    }
}