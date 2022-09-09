<?php

namespace Kiboko\Magento\V2_3\Model;

class SalesDataOrderPaymentExtensionInterface
{
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
    public function getVaultPaymentToken(): ?VaultDataPaymentTokenInterface
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
    public function setVaultPaymentToken(?VaultDataPaymentTokenInterface $vaultPaymentToken): self
    {
        $this->vaultPaymentToken = $vaultPaymentToken;
        return $this;
    }
}
