<?php

namespace Kiboko\Magento\v2_3\Model;

class VaultDataPaymentTokenInterface
{
    /**
     * Entity ID.
     *
     * @var int
     */
    protected $entityId;
    /**
     * Customer ID.
     *
     * @var int
     */
    protected $customerId;
    /**
     * Public hash
     *
     * @var string
     */
    protected $publicHash;
    /**
     * Payment method code
     *
     * @var string
     */
    protected $paymentMethodCode;
    /**
     * Type
     *
     * @var string
     */
    protected $type;
    /**
     * Token creation timestamp
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Token expiration timestamp
     *
     * @var string
     */
    protected $expiresAt;
    /**
     * Gateway token ID
     *
     * @var string
     */
    protected $gatewayToken;
    /**
     * Token details
     *
     * @var string
     */
    protected $tokenDetails;
    /**
     * Is active.
     *
     * @var bool
     */
    protected $isActive;
    /**
     * Is visible.
     *
     * @var bool
     */
    protected $isVisible;
    /**
     * Entity ID.
     *
     * @return int
     */
    public function getEntityId() : int
    {
        return $this->entityId;
    }
    /**
     * Entity ID.
     *
     * @param int $entityId
     *
     * @return self
     */
    public function setEntityId(int $entityId) : self
    {
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * Customer ID.
     *
     * @return int
     */
    public function getCustomerId() : int
    {
        return $this->customerId;
    }
    /**
     * Customer ID.
     *
     * @param int $customerId
     *
     * @return self
     */
    public function setCustomerId(int $customerId) : self
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * Public hash
     *
     * @return string
     */
    public function getPublicHash() : string
    {
        return $this->publicHash;
    }
    /**
     * Public hash
     *
     * @param string $publicHash
     *
     * @return self
     */
    public function setPublicHash(string $publicHash) : self
    {
        $this->publicHash = $publicHash;
        return $this;
    }
    /**
     * Payment method code
     *
     * @return string
     */
    public function getPaymentMethodCode() : string
    {
        return $this->paymentMethodCode;
    }
    /**
     * Payment method code
     *
     * @param string $paymentMethodCode
     *
     * @return self
     */
    public function setPaymentMethodCode(string $paymentMethodCode) : self
    {
        $this->paymentMethodCode = $paymentMethodCode;
        return $this;
    }
    /**
     * Type
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Token creation timestamp
     *
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
     * Token creation timestamp
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Token expiration timestamp
     *
     * @return string
     */
    public function getExpiresAt() : string
    {
        return $this->expiresAt;
    }
    /**
     * Token expiration timestamp
     *
     * @param string $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(string $expiresAt) : self
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }
    /**
     * Gateway token ID
     *
     * @return string
     */
    public function getGatewayToken() : string
    {
        return $this->gatewayToken;
    }
    /**
     * Gateway token ID
     *
     * @param string $gatewayToken
     *
     * @return self
     */
    public function setGatewayToken(string $gatewayToken) : self
    {
        $this->gatewayToken = $gatewayToken;
        return $this;
    }
    /**
     * Token details
     *
     * @return string
     */
    public function getTokenDetails() : string
    {
        return $this->tokenDetails;
    }
    /**
     * Token details
     *
     * @param string $tokenDetails
     *
     * @return self
     */
    public function setTokenDetails(string $tokenDetails) : self
    {
        $this->tokenDetails = $tokenDetails;
        return $this;
    }
    /**
     * Is active.
     *
     * @return bool
     */
    public function getIsActive() : bool
    {
        return $this->isActive;
    }
    /**
     * Is active.
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive) : self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * Is visible.
     *
     * @return bool
     */
    public function getIsVisible() : bool
    {
        return $this->isVisible;
    }
    /**
     * Is visible.
     *
     * @param bool $isVisible
     *
     * @return self
     */
    public function setIsVisible(bool $isVisible) : self
    {
        $this->isVisible = $isVisible;
        return $this;
    }
}