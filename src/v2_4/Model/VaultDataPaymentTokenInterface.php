<?php

namespace Kiboko\Magento\V2_4\Model;

class VaultDataPaymentTokenInterface
{
    /**
     * Token creation timestamp
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Customer ID.
     *
     * @var int|null
     */
    protected $customerId;
    /**
     * Entity ID.
     *
     * @var int|null
     */
    protected $entityId;
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
     * Payment method code
     *
     * @var string|null
     */
    protected $paymentMethodCode;
    /**
     * Public hash
     *
     * @var string|null
     */
    protected $publicHash;
    /**
     * Token details
     *
     * @var string|null
     */
    protected $tokenDetails;
    /**
     * Type
     *
     * @var string|null
     */
    protected $type;
    /**
     * Token creation timestamp
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string
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
    public function setCreatedAt(?string $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Customer ID.
     *
     * @return int|null
     */
    public function getCustomerId(): ?int
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
    public function setCustomerId(?int $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * Entity ID.
     *
     * @return int|null
     */
    public function getEntityId(): ?int
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
    public function setEntityId(?int $entityId): self
    {
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * Token expiration timestamp
     *
     * @return string|null
     */
    public function getExpiresAt(): ?string
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
    public function setExpiresAt(?string $expiresAt): self
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }
    /**
     * Gateway token ID
     *
     * @return string|null
     */
    public function getGatewayToken(): ?string
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
    public function setGatewayToken(?string $gatewayToken): self
    {
        $this->gatewayToken = $gatewayToken;
        return $this;
    }
    /**
     * Is active.
     *
     * @return bool|null
     */
    public function getIsActive(): ?bool
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
    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * Is visible.
     *
     * @return bool|null
     */
    public function getIsVisible(): ?bool
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
    public function setIsVisible(?bool $isVisible): self
    {
        $this->isVisible = $isVisible;
        return $this;
    }
    /**
     * Payment method code
     *
     * @return string|null
     */
    public function getPaymentMethodCode(): ?string
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
    public function setPaymentMethodCode(?string $paymentMethodCode): self
    {
        $this->paymentMethodCode = $paymentMethodCode;
        return $this;
    }
    /**
     * Public hash
     *
     * @return string|null
     */
    public function getPublicHash(): ?string
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
    public function setPublicHash(?string $publicHash): self
    {
        $this->publicHash = $publicHash;
        return $this;
    }
    /**
     * Token details
     *
     * @return string|null
     */
    public function getTokenDetails(): ?string
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
    public function setTokenDetails(?string $tokenDetails): self
    {
        $this->tokenDetails = $tokenDetails;
        return $this;
    }
    /**
     * Type
     *
     * @return string|null
     */
    public function getType(): ?string
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
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }
}
