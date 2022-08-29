<?php

namespace Kiboko\Magento\v2_3\Model;

class MSpTwoFactorAuthEngineInterface
{
    /**
     * True if this provider has been enabled by admin
     *
     * @var bool
     */
    protected $enabled;
    /**
     * True if this provider allows trusted devices
     *
     * @var bool
     */
    protected $trustedDevicesAllowed;
    /**
     * True if this provider has been enabled by admin
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * True if this provider has been enabled by admin
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * True if this provider allows trusted devices
     *
     * @return bool
     */
    public function getTrustedDevicesAllowed(): bool
    {
        return $this->trustedDevicesAllowed;
    }
    /**
     * True if this provider allows trusted devices
     *
     * @param bool $trustedDevicesAllowed
     *
     * @return self
     */
    public function setTrustedDevicesAllowed(bool $trustedDevicesAllowed): self
    {
        $this->trustedDevicesAllowed = $trustedDevicesAllowed;
        return $this;
    }
}
