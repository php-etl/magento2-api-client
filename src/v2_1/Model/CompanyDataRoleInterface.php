<?php

namespace Kiboko\Magento\V2_1\Model;

class CompanyDataRoleInterface
{
    /**
     * Company id.
     *
     * @var int|null
     */
    protected $companyId;
    /**
     * ExtensionInterface class for @see \Magento\Company\Api\Data\RoleInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Role id.
     *
     * @var int|null
     */
    protected $id;
    /**
     * Permissions.
     *
     * @var CompanyDataPermissionInterface[]|null
     */
    protected $permissions;
    /**
     * Role name.
     *
     * @var string|null
     */
    protected $roleName;
    /**
     * Company id.
     *
     * @return int|null
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }
    /**
     * Company id.
     *
     * @param int|null $companyId
     *
     * @return self
     */
    public function setCompanyId(?int $companyId): self
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
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Role id.
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
     * Permissions.
     *
     * @return CompanyDataPermissionInterface[]|null
     */
    public function getPermissions(): ?array
    {
        return $this->permissions;
    }
    /**
     * Permissions.
     *
     * @param CompanyDataPermissionInterface[]|null $permissions
     *
     * @return self
     */
    public function setPermissions(?array $permissions): self
    {
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * Role name.
     *
     * @return string|null
     */
    public function getRoleName(): ?string
    {
        return $this->roleName;
    }
    /**
     * Role name.
     *
     * @param string|null $roleName
     *
     * @return self
     */
    public function setRoleName(?string $roleName): self
    {
        $this->roleName = $roleName;
        return $this;
    }
}
