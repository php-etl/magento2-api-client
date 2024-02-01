<?php

namespace Kiboko\Magento\Model;

class VaultDataPaymentTokenInterface
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
     * Entity ID.
     *
     * @var int|null
     */
    protected $entityId;
    /**
     * Customer ID.
     *
     * @var int|null
     */
    protected $customerId;
    /**
     * Public hash
     *
     * @var string|null
     */
    protected $publicHash;
    /**
     * Payment method code
     *
     * @var string|null
     */
    protected $paymentMethodCode;
    /**
     * Type
     *
     * @var string|null
     */
    protected $type;
    /**
     * Token creation timestamp
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Token expiration timestamp
     *
     * @var string|null
     */
    protected $expiresAt;
    /**
     * Gateway token ID
     *
     * @var string|null
     */
    protected $gatewayToken;
    /**
     * Token details
     *
     * @var string|null
     */
    protected $tokenDetails;
    /**
     * Is active.
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * Is visible.
     *
     * @var bool|null
     */
    protected $isVisible;
    /**
     * Entity ID.
     *
     * @return int|null
     */
    public function getEntityId() : ?int
    {
        return $this->entityId;
    }
    /**
     * Entity ID.
     *
     * @param int|null $entityId
     *
     * @return self
     */
    public function setEntityId(?int $entityId) : self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * Customer ID.
     *
     * @return int|null
     */
    public function getCustomerId() : ?int
    {
        return $this->customerId;
    }
    /**
     * Customer ID.
     *
     * @param int|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?int $customerId) : self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * Public hash
     *
     * @return string|null
     */
    public function getPublicHash() : ?string
    {
        return $this->publicHash;
    }
    /**
     * Public hash
     *
     * @param string|null $publicHash
     *
     * @return self
     */
    public function setPublicHash(?string $publicHash) : self
    {
        $this->initialized['publicHash'] = true;
        $this->publicHash = $publicHash;
        return $this;
    }
    /**
     * Payment method code
     *
     * @return string|null
     */
    public function getPaymentMethodCode() : ?string
    {
        return $this->paymentMethodCode;
    }
    /**
     * Payment method code
     *
     * @param string|null $paymentMethodCode
     *
     * @return self
     */
    public function setPaymentMethodCode(?string $paymentMethodCode) : self
    {
        $this->initialized['paymentMethodCode'] = true;
        $this->paymentMethodCode = $paymentMethodCode;
        return $this;
    }
    /**
     * Type
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * Type
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Token creation timestamp
     *
     * @return string|null
     */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * Token creation timestamp
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Token expiration timestamp
     *
     * @return string|null
     */
    public function getExpiresAt() : ?string
    {
        return $this->expiresAt;
    }
    /**
     * Token expiration timestamp
     *
     * @param string|null $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(?string $expiresAt) : self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;
        return $this;
    }
    /**
     * Gateway token ID
     *
     * @return string|null
     */
    public function getGatewayToken() : ?string
    {
        return $this->gatewayToken;
    }
    /**
     * Gateway token ID
     *
     * @param string|null $gatewayToken
     *
     * @return self
     */
    public function setGatewayToken(?string $gatewayToken) : self
    {
        $this->initialized['gatewayToken'] = true;
        $this->gatewayToken = $gatewayToken;
        return $this;
    }
    /**
     * Token details
     *
     * @return string|null
     */
    public function getTokenDetails() : ?string
    {
        return $this->tokenDetails;
    }
    /**
     * Token details
     *
     * @param string|null $tokenDetails
     *
     * @return self
     */
    public function setTokenDetails(?string $tokenDetails) : self
    {
        $this->initialized['tokenDetails'] = true;
        $this->tokenDetails = $tokenDetails;
        return $this;
    }
    /**
     * Is active.
     *
     * @return bool|null
     */
    public function getIsActive() : ?bool
    {
        return $this->isActive;
    }
    /**
     * Is active.
     *
     * @param bool|null $isActive
     *
     * @return self
     */
    public function setIsActive(?bool $isActive) : self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * Is visible.
     *
     * @return bool|null
     */
    public function getIsVisible() : ?bool
    {
        return $this->isVisible;
    }
    /**
     * Is visible.
     *
     * @param bool|null $isVisible
     *
     * @return self
     */
    public function setIsVisible(?bool $isVisible) : self
    {
        $this->initialized['isVisible'] = true;
        $this->isVisible = $isVisible;
        return $this;
    }
}