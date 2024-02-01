<?php

namespace Kiboko\Magento\Model;

class V1CustomersMePasswordPutBody
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
    public function getCurrentPassword() : ?string
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
    public function setCurrentPassword(?string $currentPassword) : self
    {
        $this->initialized['currentPassword'] = true;
        $this->currentPassword = $currentPassword;
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