<?php

namespace Kiboko\Magento\V2_3\Model;

class V1CompanyAssignRolesPutBody
{
    /**
     *
     *
     * @var CompanyDataRoleInterface[]|null
     */
    protected $roles;
    /**
     *
     *
     * @var int|null
     */
    protected $userId;
    /**
     *
     *
     * @return CompanyDataRoleInterface[]|null
     */
    public function getRoles(): ?array
    {
        return $this->roles;
    }
    /**
     *
     *
     * @param CompanyDataRoleInterface[]|null $roles
     *
     * @return self
     */
    public function setRoles(?array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     *
     *
     * @param int|null $userId
     *
     * @return self
     */
    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;
        return $this;
    }
}
