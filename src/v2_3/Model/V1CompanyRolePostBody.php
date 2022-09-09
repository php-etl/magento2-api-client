<?php

namespace Kiboko\Magento\V2_3\Model;

class V1CompanyRolePostBody
{
    /**
     * Role data transfer object interface.
     *
     * @var CompanyDataRoleInterface|null
     */
    protected $role;
    /**
     * Role data transfer object interface.
     *
     * @return CompanyDataRoleInterface|null
     */
    public function getRole(): ?CompanyDataRoleInterface
    {
        return $this->role;
    }
    /**
     * Role data transfer object interface.
     *
     * @param CompanyDataRoleInterface|null $role
     *
     * @return self
     */
    public function setRole(?CompanyDataRoleInterface $role): self
    {
        $this->role = $role;
        return $this;
    }
}
