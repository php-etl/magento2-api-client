<?php

namespace Kiboko\Magento\Model;

class TwoFactorAuthDataDuoDataInterface
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
     * The signature
     *
     * @var string|null
     */
    protected $signature;
    /**
     * The api hostname
     *
     * @var string|null
     */
    protected $apiHostname;
    /**
     * ExtensionInterface class for @see \Magento\TwoFactorAuth\Api\Data\DuoDataInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * The signature
     *
     * @return string|null
     */
    public function getSignature() : ?string
    {
        return $this->signature;
    }
    /**
     * The signature
     *
     * @param string|null $signature
     *
     * @return self
     */
    public function setSignature(?string $signature) : self
    {
        $this->initialized['signature'] = true;
        $this->signature = $signature;
        return $this;
    }
    /**
     * The api hostname
     *
     * @return string|null
     */
    public function getApiHostname() : ?string
    {
        return $this->apiHostname;
    }
    /**
     * The api hostname
     *
     * @param string|null $apiHostname
     *
     * @return self
     */
    public function setApiHostname(?string $apiHostname) : self
    {
        $this->initialized['apiHostname'] = true;
        $this->apiHostname = $apiHostname;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\TwoFactorAuth\Api\Data\DuoDataInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\TwoFactorAuth\Api\Data\DuoDataInterface
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