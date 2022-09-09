<?php

namespace Kiboko\Magento\V2_2\Model;

class V1CustomersMePasswordPutBody
{
    /**
     *
     *
     * @var string|null
     */
    protected $currentPassword;
    /**
     *
     *
     * @var string|null
     */
    protected $newPassword;
    /**
     *
     *
     * @return string|null
     */
    public function getCurrentPassword(): ?string
    {
        return $this->currentPassword;
    }
    /**
     *
     *
     * @param string|null $currentPassword
     *
     * @return self
     */
    public function setCurrentPassword(?string $currentPassword): self
    {
        $this->currentPassword = $currentPassword;
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
}
