<?php

namespace Kiboko\Magento\V2_3\Model;

class SalesDataOrderPaymentExtensionInterface
{
    /**
     * Gateway vault payment token interface.
     *
     * @var VaultDataPaymentTokenInterface
     */
    protected $vaultPaymentToken;
    /**
     * Gateway vault payment token interface.
     *
     * @return VaultDataPaymentTokenInterface
     */
    public function getVaultPaymentToken(): VaultDataPaymentTokenInterface
    {
        return $this->vaultPaymentToken;
    }
    /**
     * Gateway vault payment token interface.
     *
     * @param VaultDataPaymentTokenInterface $vaultPaymentToken
     *
     * @return self
     */
    public function setVaultPaymentToken(VaultDataPaymentTokenInterface $vaultPaymentToken): self
    {
        $this->vaultPaymentToken = $vaultPaymentToken;
        return $this;
    }
}
