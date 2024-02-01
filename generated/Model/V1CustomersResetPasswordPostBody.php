<?php

namespace Kiboko\Magento\Model;

class V1CustomersResetPasswordPostBody
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
    protected $resetToken;
    /**
     * 
     *
     * @var string|null
     */
    protected $newPassword;
    /**
     * If empty value given then the customer will be matched by the RP token.
     *
     * @return string|null
     */
    public function getEmail() : ?string
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
    public function setEmail(?string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getResetToken() : ?string
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
    public function setResetToken(?string $resetToken) : self
    {
        $this->initialized['resetToken'] = true;
        $this->resetToken = $resetToken;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNewPassword() : ?string
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
    public function setNewPassword(?string $newPassword) : self
    {
        $this->initialized['newPassword'] = true;
        $this->newPassword = $newPassword;
        return $this;
    }
}