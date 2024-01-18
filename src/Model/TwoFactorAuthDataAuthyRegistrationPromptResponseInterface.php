<?php

namespace Kiboko\Magento\Model;

class TwoFactorAuthDataAuthyRegistrationPromptResponseInterface
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
     * The message
     *
     * @var string|null
     */
    protected $message;
    /**
     * The seconds to expire
     *
     * @var string|null
     */
    protected $expirationSeconds;
    /**
     * ExtensionInterface class for @see \Magento\TwoFactorAuth\Api\Data\AuthyRegistrationPromptResponseInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * The message
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * The message
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * The seconds to expire
     *
     * @return string|null
     */
    public function getExpirationSeconds() : ?string
    {
        return $this->expirationSeconds;
    }
    /**
     * The seconds to expire
     *
     * @param string|null $expirationSeconds
     *
     * @return self
     */
    public function setExpirationSeconds(?string $expirationSeconds) : self
    {
        $this->initialized['expirationSeconds'] = true;
        $this->expirationSeconds = $expirationSeconds;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\TwoFactorAuth\Api\Data\AuthyRegistrationPromptResponseInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\TwoFactorAuth\Api\Data\AuthyRegistrationPromptResponseInterface
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