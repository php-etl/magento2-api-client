<?php

namespace Kiboko\Magento\Model;

class TwoFactorAuthDataAuthyDeviceInterface
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
     * The country
     *
     * @var string|null
     */
    protected $country;
    /**
     * The phone number
     *
     * @var string|null
     */
    protected $phoneNumber;
    /**
     * The method to authenticate with
     *
     * @var string|null
     */
    protected $method;
    /**
     * ExtensionInterface class for @see \Magento\TwoFactorAuth\Api\Data\AuthyDeviceInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * The country
     *
     * @return string|null
     */
    public function getCountry() : ?string
    {
        return $this->country;
    }
    /**
     * The country
     *
     * @param string|null $country
     *
     * @return self
     */
    public function setCountry(?string $country) : self
    {
        $this->initialized['country'] = true;
        $this->country = $country;
        return $this;
    }
    /**
     * The phone number
     *
     * @return string|null
     */
    public function getPhoneNumber() : ?string
    {
        return $this->phoneNumber;
    }
    /**
     * The phone number
     *
     * @param string|null $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(?string $phoneNumber) : self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * The method to authenticate with
     *
     * @return string|null
     */
    public function getMethod() : ?string
    {
        return $this->method;
    }
    /**
     * The method to authenticate with
     *
     * @param string|null $method
     *
     * @return self
     */
    public function setMethod(?string $method) : self
    {
        $this->initialized['method'] = true;
        $this->method = $method;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\TwoFactorAuth\Api\Data\AuthyDeviceInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\TwoFactorAuth\Api\Data\AuthyDeviceInterface
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