<?php

namespace Kiboko\Magento\Model;

class TwoFactorAuthDataGoogleConfigureInterface
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
     * Value for QR code base 64
     *
     * @var string|null
     */
    protected $qrCodeBase64;
    /**
     * Value for secret code
     *
     * @var string|null
     */
    protected $secretCode;
    /**
     * ExtensionInterface class for @see \Magento\TwoFactorAuth\Api\Data\GoogleConfigureInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Value for QR code base 64
     *
     * @return string|null
     */
    public function getQrCodeBase64() : ?string
    {
        return $this->qrCodeBase64;
    }
    /**
     * Value for QR code base 64
     *
     * @param string|null $qrCodeBase64
     *
     * @return self
     */
    public function setQrCodeBase64(?string $qrCodeBase64) : self
    {
        $this->initialized['qrCodeBase64'] = true;
        $this->qrCodeBase64 = $qrCodeBase64;
        return $this;
    }
    /**
     * Value for secret code
     *
     * @return string|null
     */
    public function getSecretCode() : ?string
    {
        return $this->secretCode;
    }
    /**
     * Value for secret code
     *
     * @param string|null $secretCode
     *
     * @return self
     */
    public function setSecretCode(?string $secretCode) : self
    {
        $this->initialized['secretCode'] = true;
        $this->secretCode = $secretCode;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\TwoFactorAuth\Api\Data\GoogleConfigureInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\TwoFactorAuth\Api\Data\GoogleConfigureInterface
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