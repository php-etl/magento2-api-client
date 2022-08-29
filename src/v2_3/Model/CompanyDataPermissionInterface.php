<?php

namespace Kiboko\Magento\v2_3\Model;

class CompanyDataPermissionInterface
{
    /**
     * Id.
     *
     * @var int
     */
    protected $id;
    /**
     * Role id.
     *
     * @var int
     */
    protected $roleId;
    /**
     * Resource id.
     *
     * @var string
     */
    protected $resourceId;
    /**
     * Permission.
     *
     * @var string
     */
    protected $permission;
    /**
     * Id.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Id.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Role id.
     *
     * @return int
     */
    public function getRoleId(): int
    {
        return $this->roleId;
    }
    /**
     * Role id.
     *
     * @param int $roleId
     *
     * @return self
     */
    public function setRoleId(int $roleId): self
    {
        $this->roleId = $roleId;
        return $this;
    }
    /**
     * Resource id.
     *
     * @return string
     */
    public function getResourceId(): string
    {
        return $this->resourceId;
    }
    /**
     * Resource id.
     *
     * @param string $resourceId
     *
     * @return self
     */
    public function setResourceId(string $resourceId): self
    {
        $this->resourceId = $resourceId;
        return $this;
    }
    /**
     * Permission.
     *
     * @return string
     */
    public function getPermission(): string
    {
        return $this->permission;
    }
    /**
     * Permission.
     *
     * @param string $permission
     *
     * @return self
     */
    public function setPermission(string $permission): self
    {
        $this->permission = $permission;
        return $this;
    }
}
