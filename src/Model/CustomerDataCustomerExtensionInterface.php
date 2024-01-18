<?php

namespace Kiboko\Magento\Model;

class CustomerDataCustomerExtensionInterface
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
     * @var int|null
     */
    protected $assistanceAllowed;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isSubscribed;
    /**
     * 
     *
     * @return int|null
     */
    public function getAssistanceAllowed() : ?int
    {
        return $this->assistanceAllowed;
    }
    /**
     * 
     *
     * @param int|null $assistanceAllowed
     *
     * @return self
     */
    public function setAssistanceAllowed(?int $assistanceAllowed) : self
    {
        $this->initialized['assistanceAllowed'] = true;
        $this->assistanceAllowed = $assistanceAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsSubscribed() : ?bool
    {
        return $this->isSubscribed;
    }
    /**
     * 
     *
     * @param bool|null $isSubscribed
     *
     * @return self
     */
    public function setIsSubscribed(?bool $isSubscribed) : self
    {
        $this->initialized['isSubscribed'] = true;
        $this->isSubscribed = $isSubscribed;
        return $this;
    }
}