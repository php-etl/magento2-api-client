<?php

namespace Kiboko\Magento\v2_3\Model;

class DotdigitalgroupEmailDataCouponAttributeInterface
{
    /**
     *
     *
     * @var string
     */
    protected $email;
    /**
     *
     *
     * @var string
     */
    protected $expiresAt;
    /**
     *
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     *
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getExpiresAt(): string
    {
        return $this->expiresAt;
    }
    /**
     *
     *
     * @param string $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(string $expiresAt): self
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }
}
