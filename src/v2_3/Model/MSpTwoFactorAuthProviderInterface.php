<?php

namespace Kiboko\Magento\v2_3\Model;

class MSpTwoFactorAuthProviderInterface
{
    /**
     * True if this provider has been enabled by admin
     *
     * @var bool
     */
    protected $enabled;
    /**
     *
     *
     * @var MSpTwoFactorAuthEngineInterface
     */
    protected $engine;
    /**
     * Provider code
     *
     * @var string
     */
    protected $code;
    /**
     * Provider name
     *
     * @var string
     */
    protected $name;
    /**
     * Icon
     *
     * @var string
     */
    protected $icon;
    /**
     * True if this provider configuration can be reset
     *
     * @var bool
     */
    protected $resetAllowed;
    /**
     * True if this provider allows trusted devices
     *
     * @var bool
     */
    protected $trustedDevicesAllowed;
    /**
     * Configure action
     *
     * @var string
     */
    protected $configureAction;
    /**
     * Auth action
     *
     * @var string
     */
    protected $authAction;
    /**
     * Allowed extra actions
     *
     * @var string[]
     */
    protected $extraActions;
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
     *
     *
     * @return MSpTwoFactorAuthEngineInterface
     */
    public function getEngine(): MSpTwoFactorAuthEngineInterface
    {
        return $this->engine;
    }
    /**
     *
     *
     * @param MSpTwoFactorAuthEngineInterface $engine
     *
     * @return self
     */
    public function setEngine(MSpTwoFactorAuthEngineInterface $engine): self
    {
        $this->engine = $engine;
        return $this;
    }
    /**
     * Provider code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Provider code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Provider name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Provider name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Icon
     *
     * @return string
     */
    public function getIcon(): string
    {
        return $this->icon;
    }
    /**
     * Icon
     *
     * @param string $icon
     *
     * @return self
     */
    public function setIcon(string $icon): self
    {
        $this->icon = $icon;
        return $this;
    }
    /**
     * True if this provider configuration can be reset
     *
     * @return bool
     */
    public function getResetAllowed(): bool
    {
        return $this->resetAllowed;
    }
    /**
     * True if this provider configuration can be reset
     *
     * @param bool $resetAllowed
     *
     * @return self
     */
    public function setResetAllowed(bool $resetAllowed): self
    {
        $this->resetAllowed = $resetAllowed;
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
    /**
     * Configure action
     *
     * @return string
     */
    public function getConfigureAction(): string
    {
        return $this->configureAction;
    }
    /**
     * Configure action
     *
     * @param string $configureAction
     *
     * @return self
     */
    public function setConfigureAction(string $configureAction): self
    {
        $this->configureAction = $configureAction;
        return $this;
    }
    /**
     * Auth action
     *
     * @return string
     */
    public function getAuthAction(): string
    {
        return $this->authAction;
    }
    /**
     * Auth action
     *
     * @param string $authAction
     *
     * @return self
     */
    public function setAuthAction(string $authAction): self
    {
        $this->authAction = $authAction;
        return $this;
    }
    /**
     * Allowed extra actions
     *
     * @return string[]
     */
    public function getExtraActions(): array
    {
        return $this->extraActions;
    }
    /**
     * Allowed extra actions
     *
     * @param string[] $extraActions
     *
     * @return self
     */
    public function setExtraActions(array $extraActions): self
    {
        $this->extraActions = $extraActions;
        return $this;
    }
}
