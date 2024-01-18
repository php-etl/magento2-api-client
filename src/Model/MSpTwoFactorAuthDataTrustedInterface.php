<?php

namespace Kiboko\Magento\Model;

class MSpTwoFactorAuthDataTrustedInterface
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
     * Value for msp_tfa_trusted_id
     *
     * @var int|null
     */
    protected $id;
    /**
     * Value for date_time
     *
     * @var string|null
     */
    protected $dateTime;
    /**
     * Value for user_id
     *
     * @var int|null
     */
    protected $userId;
    /**
     * Value for device_name
     *
     * @var string|null
     */
    protected $deviceName;
    /**
     * Value for last_ip
     *
     * @var string|null
     */
    protected $lastIp;
    /**
     * Value for user_agent
     *
     * @var string|null
     */
    protected $userAgent;
    /**
     * ExtensionInterface class for @see \MSP\TwoFactorAuth\Api\Data\TrustedInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Value for msp_tfa_trusted_id
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Value for msp_tfa_trusted_id
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Value for date_time
     *
     * @return string|null
     */
    public function getDateTime() : ?string
    {
        return $this->dateTime;
    }
    /**
     * Value for date_time
     *
     * @param string|null $dateTime
     *
     * @return self
     */
    public function setDateTime(?string $dateTime) : self
    {
        $this->initialized['dateTime'] = true;
        $this->dateTime = $dateTime;
        return $this;
    }
    /**
     * Value for user_id
     *
     * @return int|null
     */
    public function getUserId() : ?int
    {
        return $this->userId;
    }
    /**
     * Value for user_id
     *
     * @param int|null $userId
     *
     * @return self
     */
    public function setUserId(?int $userId) : self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
    /**
     * Value for device_name
     *
     * @return string|null
     */
    public function getDeviceName() : ?string
    {
        return $this->deviceName;
    }
    /**
     * Value for device_name
     *
     * @param string|null $deviceName
     *
     * @return self
     */
    public function setDeviceName(?string $deviceName) : self
    {
        $this->initialized['deviceName'] = true;
        $this->deviceName = $deviceName;
        return $this;
    }
    /**
     * Value for last_ip
     *
     * @return string|null
     */
    public function getLastIp() : ?string
    {
        return $this->lastIp;
    }
    /**
     * Value for last_ip
     *
     * @param string|null $lastIp
     *
     * @return self
     */
    public function setLastIp(?string $lastIp) : self
    {
        $this->initialized['lastIp'] = true;
        $this->lastIp = $lastIp;
        return $this;
    }
    /**
     * Value for user_agent
     *
     * @return string|null
     */
    public function getUserAgent() : ?string
    {
        return $this->userAgent;
    }
    /**
     * Value for user_agent
     *
     * @param string|null $userAgent
     *
     * @return self
     */
    public function setUserAgent(?string $userAgent) : self
    {
        $this->initialized['userAgent'] = true;
        $this->userAgent = $userAgent;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \MSP\TwoFactorAuth\Api\Data\TrustedInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \MSP\TwoFactorAuth\Api\Data\TrustedInterface
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