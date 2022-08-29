<?php

namespace Kiboko\Magento\v2_1\Model;

class CompanyDataRoleInterface
{
    /**
     * Company id.
     *
     * @var int
     */
    protected $companyId;
    /**
     * ExtensionInterface class for @see \Magento\Company\Api\Data\RoleInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Role id.
     *
     * @var int
     */
    protected $id;
    /**
     * Permissions.
     *
     * @var CompanyDataPermissionInterface[]
     */
    protected $permissions;
    /**
     * Role name.
     *
     * @var string
     */
    protected $roleName;
    /**
     * Company id.
     *
     * @return int
     */
    public function getCompanyId(): int
    {
        return $this->companyId;
    }
    /**
     * Company id.
     *
     * @param int $companyId
     *
     * @return self
     */
    public function setCompanyId(int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Company\Api\Data\RoleInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Company\Api\Data\RoleInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Role id.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Role id.
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
     * Permissions.
     *
     * @return CompanyDataPermissionInterface[]
     */
    public function getPermissions(): array
    {
        return $this->permissions;
    }
    /**
     * Permissions.
     *
     * @param CompanyDataPermissionInterface[] $permissions
     *
     * @return self
     */
    public function setPermissions(array $permissions): self
    {
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * Role name.
     *
     * @return string
     */
    public function getRoleName(): string
    {
        return $this->roleName;
    }
    /**
     * Role name.
     *
     * @param string $roleName
     *
     * @return self
     */
    public function setRoleName(string $roleName): self
    {
        $this->roleName = $roleName;
        return $this;
    }
}
