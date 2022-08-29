<?php

namespace Kiboko\Magento\v2_3\Model;

class V1CompanyRoleIdPutBody
{
    /**
     * Role data transfer object interface.
     *
     * @var CompanyDataRoleInterface
     */
    protected $role;
    /**
     * Role data transfer object interface.
     *
     * @return CompanyDataRoleInterface
     */
    public function getRole() : CompanyDataRoleInterface
    {
        return $this->role;
    }
    /**
     * Role data transfer object interface.
     *
     * @param CompanyDataRoleInterface $role
     *
     * @return self
     */
    public function setRole(CompanyDataRoleInterface $role) : self
    {
        $this->role = $role;
        return $this;
    }
}