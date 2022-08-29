<?php

namespace Kiboko\Magento\v2_3\Model;

class V1CompanyAssignRolesPutBody
{
    /**
     *
     *
     * @var CompanyDataRoleInterface[]
     */
    protected $roles;
    /**
     *
     *
     * @var int
     */
    protected $userId;
    /**
     *
     *
     * @return CompanyDataRoleInterface[]
     */
    public function getRoles(): array
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
    public function setRoles(array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getUserId(): int
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
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;
        return $this;
    }
}
