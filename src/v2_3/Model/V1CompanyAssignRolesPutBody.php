<?php

namespace Kiboko\Magento\v2_3\Model;

class V1CompanyAssignRolesPutBody
{
    /**
     * 
     *
     * @var int
     */
    protected $userId;
    /**
     * 
     *
     * @var CompanyDataRoleInterface[]
     */
    protected $roles;
    /**
     * 
     *
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param int $userId
     *
     * @return self
     */
    public function setUserId(int $userId) : self
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     * 
     *
     * @return CompanyDataRoleInterface[]
     */
    public function getRoles() : array
    {
        return $this->roles;
    }
    /**
     * 
     *
     * @param CompanyDataRoleInterface[] $roles
     *
     * @return self
     */
    public function setRoles(array $roles) : self
    {
        $this->roles = $roles;
        return $this;
    }
}