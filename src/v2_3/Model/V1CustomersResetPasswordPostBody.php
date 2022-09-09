<?php

namespace Kiboko\Magento\V2_3\Model;

class V1CustomersResetPasswordPostBody
{
    /**
     * If empty value given then the customer will be matched by the RP token.
     *
     * @var string|null
     */
    protected $email;
    /**
     *
     *
     * @var string|null
     */
    protected $newPassword;
    /**
     *
     *
     * @var string|null
     */
    protected $resetToken;
    /**
     * If empty value given then the customer will be matched by the RP token.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * If empty value given then the customer will be matched by the RP token.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getNewPassword(): ?string
    {
        return $this->newPassword;
    }
    /**
     *
     *
     * @param string|null $newPassword
     *
     * @return self
     */
    public function setNewPassword(?string $newPassword): self
    {
        $this->newPassword = $newPassword;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getResetToken(): ?string
    {
        return $this->resetToken;
    }
    /**
     *
     *
     * @param string|null $resetToken
     *
     * @return self
     */
    public function setResetToken(?string $resetToken): self
    {
        $this->resetToken = $resetToken;
        return $this;
    }
}
