<?php

namespace Kiboko\Magento\Model;

class TwoFactorAuthEngineInterface
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
     * True if this provider has been enabled by admin
     *
     * @var bool|null
     */
    protected $enabled;
    /**
     * True if this provider has been enabled by admin
     *
     * @return bool|null
     */
    public function getEnabled() : ?bool
    {
        return $this->enabled;
    }
    /**
     * True if this provider has been enabled by admin
     *
     * @param bool|null $enabled
     *
     * @return self
     */
    public function setEnabled(?bool $enabled) : self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
}