<?php

namespace Kiboko\Magento\Model;

class MSpTwoFactorAuthProviderInterface
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
     * 
     *
     * @var MSpTwoFactorAuthEngineInterface|null
     */
    protected $engine;
    /**
     * Provider code
     *
     * @var string|null
     */
    protected $code;
    /**
     * Provider name
     *
     * @var string|null
     */
    protected $name;
    /**
     * Icon
     *
     * @var string|null
     */
    protected $icon;
    /**
     * True if this provider configuration can be reset
     *
     * @var bool|null
     */
    protected $resetAllowed;
    /**
     * True if this provider allows trusted devices
     *
     * @var bool|null
     */
    protected $trustedDevicesAllowed;
    /**
     * Configure action
     *
     * @var string|null
     */
    protected $configureAction;
    /**
     * Auth action
     *
     * @var string|null
     */
    protected $authAction;
    /**
     * Allowed extra actions
     *
     * @var string[]|null
     */
    protected $extraActions;
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
    /**
     * 
     *
     * @return MSpTwoFactorAuthEngineInterface|null
     */
    public function getEngine() : ?MSpTwoFactorAuthEngineInterface
    {
        return $this->engine;
    }
    /**
     * 
     *
     * @param MSpTwoFactorAuthEngineInterface|null $engine
     *
     * @return self
     */
    public function setEngine(?MSpTwoFactorAuthEngineInterface $engine) : self
    {
        $this->initialized['engine'] = true;
        $this->engine = $engine;
        return $this;
    }
    /**
     * Provider code
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Provider code
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Provider name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Provider name
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Icon
     *
     * @return string|null
     */
    public function getIcon() : ?string
    {
        return $this->icon;
    }
    /**
     * Icon
     *
     * @param string|null $icon
     *
     * @return self
     */
    public function setIcon(?string $icon) : self
    {
        $this->initialized['icon'] = true;
        $this->icon = $icon;
        return $this;
    }
    /**
     * True if this provider configuration can be reset
     *
     * @return bool|null
     */
    public function getResetAllowed() : ?bool
    {
        return $this->resetAllowed;
    }
    /**
     * True if this provider configuration can be reset
     *
     * @param bool|null $resetAllowed
     *
     * @return self
     */
    public function setResetAllowed(?bool $resetAllowed) : self
    {
        $this->initialized['resetAllowed'] = true;
        $this->resetAllowed = $resetAllowed;
        return $this;
    }
    /**
     * True if this provider allows trusted devices
     *
     * @return bool|null
     */
    public function getTrustedDevicesAllowed() : ?bool
    {
        return $this->trustedDevicesAllowed;
    }
    /**
     * True if this provider allows trusted devices
     *
     * @param bool|null $trustedDevicesAllowed
     *
     * @return self
     */
    public function setTrustedDevicesAllowed(?bool $trustedDevicesAllowed) : self
    {
        $this->initialized['trustedDevicesAllowed'] = true;
        $this->trustedDevicesAllowed = $trustedDevicesAllowed;
        return $this;
    }
    /**
     * Configure action
     *
     * @return string|null
     */
    public function getConfigureAction() : ?string
    {
        return $this->configureAction;
    }
    /**
     * Configure action
     *
     * @param string|null $configureAction
     *
     * @return self
     */
    public function setConfigureAction(?string $configureAction) : self
    {
        $this->initialized['configureAction'] = true;
        $this->configureAction = $configureAction;
        return $this;
    }
    /**
     * Auth action
     *
     * @return string|null
     */
    public function getAuthAction() : ?string
    {
        return $this->authAction;
    }
    /**
     * Auth action
     *
     * @param string|null $authAction
     *
     * @return self
     */
    public function setAuthAction(?string $authAction) : self
    {
        $this->initialized['authAction'] = true;
        $this->authAction = $authAction;
        return $this;
    }
    /**
     * Allowed extra actions
     *
     * @return string[]|null
     */
    public function getExtraActions() : ?array
    {
        return $this->extraActions;
    }
    /**
     * Allowed extra actions
     *
     * @param string[]|null $extraActions
     *
     * @return self
     */
    public function setExtraActions(?array $extraActions) : self
    {
        $this->initialized['extraActions'] = true;
        $this->extraActions = $extraActions;
        return $this;
    }
}