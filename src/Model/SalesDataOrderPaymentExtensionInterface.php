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
     * Gateway vault payment token interface.
     *
     * @var VaultDataPaymentTokenInterface|null
     */
    protected $vaultPaymentToken;
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