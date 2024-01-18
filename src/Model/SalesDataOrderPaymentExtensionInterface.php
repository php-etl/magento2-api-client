<?php

namespace Kiboko\Magento\Model;

class SalesDataOrderPaymentExtensionInterface
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
    protected $notificationMessage;
    /**
     * Gateway vault payment token interface.
     *
     * @var VaultDataPaymentTokenInterface|null
     */
    protected $vaultPaymentToken;
    /**
     * 
     *
     * @return string|null
     */
    public function getNotificationMessage() : ?string
    {
        return $this->notificationMessage;
    }
    /**
     * 
     *
     * @param string|null $notificationMessage
     *
     * @return self
     */
    public function setNotificationMessage(?string $notificationMessage) : self
    {
        $this->initialized['notificationMessage'] = true;
        $this->notificationMessage = $notificationMessage;
        return $this;
    }
    /**
     * Gateway vault payment token interface.
     *
     * @return VaultDataPaymentTokenInterface|null
     */
    public function getVaultPaymentToken() : ?VaultDataPaymentTokenInterface
    {
        return $this->vaultPaymentToken;
    }
    /**
     * Gateway vault payment token interface.
     *
     * @param VaultDataPaymentTokenInterface|null $vaultPaymentToken
     *
     * @return self
     */
    public function setVaultPaymentToken(?VaultDataPaymentTokenInterface $vaultPaymentToken) : self
    {
        $this->initialized['vaultPaymentToken'] = true;
        $this->vaultPaymentToken = $vaultPaymentToken;
        return $this;
    }
}