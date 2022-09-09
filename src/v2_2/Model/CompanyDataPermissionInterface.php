<?php

namespace Kiboko\Magento\V2_2\Model;

class CompanyDataPermissionInterface
{
    /**
     * Id.
     *
     * @var int|null
     */
    protected $id;
    /**
     * Permission.
     *
     * @var string|null
     */
    protected $permission;
    /**
     * Resource id.
     *
     * @var string|null
     */
    protected $resourceId;
    /**
     * Role id.
     *
     * @var int|null
     */
    protected $roleId;
    /**
     * Id.
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Id.
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Permission.
     *
     * @return string|null
     */
    public function getPermission(): ?string
    {
        return $this->permission;
    }
    /**
     * Permission.
     *
     * @param string|null $permission
     *
     * @return self
     */
    public function setPermission(?string $permission): self
    {
        $this->permission = $permission;
        return $this;
    }
    /**
     * Resource id.
     *
     * @return string|null
     */
    public function getResourceId(): ?string
    {
        return $this->resourceId;
    }
    /**
     * Resource id.
     *
     * @param string|null $resourceId
     *
     * @return self
     */
    public function setResourceId(?string $resourceId): self
    {
        $this->resourceId = $resourceId;
        return $this;
    }
    /**
     * Role id.
     *
     * @return int|null
     */
    public function getRoleId(): ?int
    {
        return $this->roleId;
    }
    /**
     * Role id.
     *
     * @param int|null $roleId
     *
     * @return self
     */
    public function setRoleId(?int $roleId): self
    {
        $this->roleId = $roleId;
        return $this;
    }
}
