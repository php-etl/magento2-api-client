<?php

namespace Kiboko\Magento\Model;

class TwoFactorAuthDataU2fWebAuthnRequestInterface
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
     * The needed data to initiate a WebAuthn registration ceremony
     *
     * @var string|null
     */
    protected $credentialRequestOptionsJson;
    /**
     * ExtensionInterface class for @see \Magento\TwoFactorAuth\Api\Data\U2fWebAuthnRequestInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * The needed data to initiate a WebAuthn registration ceremony
     *
     * @return string|null
     */
    public function getCredentialRequestOptionsJson() : ?string
    {
        return $this->credentialRequestOptionsJson;
    }
    /**
     * The needed data to initiate a WebAuthn registration ceremony
     *
     * @param string|null $credentialRequestOptionsJson
     *
     * @return self
     */
    public function setCredentialRequestOptionsJson(?string $credentialRequestOptionsJson) : self
    {
        $this->initialized['credentialRequestOptionsJson'] = true;
        $this->credentialRequestOptionsJson = $credentialRequestOptionsJson;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\TwoFactorAuth\Api\Data\U2fWebAuthnRequestInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\TwoFactorAuth\Api\Data\U2fWebAuthnRequestInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}