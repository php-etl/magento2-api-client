<?php

namespace Kiboko\Magento\v2_4\Model;

class MSpTwoFactorAuthDataTrustedInterface
{
    /**
     * Value for msp_tfa_trusted_id
     *
     * @var int
     */
    protected $id;
    /**
     * Value for date_time
     *
     * @var string
     */
    protected $dateTime;
    /**
     * Value for user_id
     *
     * @var int
     */
    protected $userId;
    /**
     * Value for device_name
     *
     * @var string
     */
    protected $deviceName;
    /**
     * Value for last_ip
     *
     * @var string
     */
    protected $lastIp;
    /**
     * Value for user_agent
     *
     * @var string
     */
    protected $userAgent;
    /**
     * ExtensionInterface class for @see \MSP\TwoFactorAuth\Api\Data\TrustedInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Value for msp_tfa_trusted_id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Value for msp_tfa_trusted_id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Value for date_time
     *
     * @return string
     */
    public function getDateTime(): string
    {
        return $this->dateTime;
    }
    /**
     * Value for date_time
     *
     * @param string $dateTime
     *
     * @return self
     */
    public function setDateTime(string $dateTime): self
    {
        $this->dateTime = $dateTime;
        return $this;
    }
    /**
     * Value for user_id
     *
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }
    /**
     * Value for user_id
     *
     * @param int $userId
     *
     * @return self
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     * Value for device_name
     *
     * @return string
     */
    public function getDeviceName(): string
    {
        return $this->deviceName;
    }
    /**
     * Value for device_name
     *
     * @param string $deviceName
     *
     * @return self
     */
    public function setDeviceName(string $deviceName): self
    {
        $this->deviceName = $deviceName;
        return $this;
    }
    /**
     * Value for last_ip
     *
     * @return string
     */
    public function getLastIp(): string
    {
        return $this->lastIp;
    }
    /**
     * Value for last_ip
     *
     * @param string $lastIp
     *
     * @return self
     */
    public function setLastIp(string $lastIp): self
    {
        $this->lastIp = $lastIp;
        return $this;
    }
    /**
     * Value for user_agent
     *
     * @return string
     */
    public function getUserAgent(): string
    {
        return $this->userAgent;
    }
    /**
     * Value for user_agent
     *
     * @param string $userAgent
     *
     * @return self
     */
    public function setUserAgent(string $userAgent): self
    {
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
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
