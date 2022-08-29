<?php

namespace Kiboko\Magento\v2_1\Model;

class V1CustomersMePasswordPutBody
{
    /**
     *
     *
     * @var string
     */
    protected $currentPassword;
    /**
     *
     *
     * @var string
     */
    protected $newPassword;
    /**
     *
     *
     * @return string
     */
    public function getCurrentPassword(): string
    {
        return $this->currentPassword;
    }
    /**
     *
     *
     * @param string $currentPassword
     *
     * @return self
     */
    public function setCurrentPassword(string $currentPassword): self
    {
        $this->currentPassword = $currentPassword;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getNewPassword(): string
    {
        return $this->newPassword;
    }
    /**
     *
     *
     * @param string $newPassword
     *
     * @return self
     */
    public function setNewPassword(string $newPassword): self
    {
        $this->newPassword = $newPassword;
        return $this;
    }
}
