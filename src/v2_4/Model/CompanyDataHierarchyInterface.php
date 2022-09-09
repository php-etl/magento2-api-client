<?php

namespace Kiboko\Magento\V2_4\Model;

class CompanyDataHierarchyInterface
{
    /**
     * Entity ID.
     *
     * @var int|null
     */
    protected $entityId;
    /**
     * Entity type.
     *
     * @var string|null
     */
    protected $entityType;
    /**
     * ExtensionInterface class for @see \Magento\Company\Api\Data\HierarchyInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Structure ID.
     *
     * @var int|null
     */
    protected $structureId;
    /**
     * Structure parent ID.
     *
     * @var int|null
     */
    protected $structureParentId;
    /**
     * Entity ID.
     *
     * @return int|null
     */
    public function getEntityId(): ?int
    {
        return $this->entityId;
    }
    /**
     * Entity ID.
     *
     * @param int|null $entityId
     *
     * @return self
     */
    public function setEntityId(?int $entityId): self
    {
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * Entity type.
     *
     * @return string|null
     */
    public function getEntityType(): ?string
    {
        return $this->entityType;
    }
    /**
     * Entity type.
     *
     * @param string|null $entityType
     *
     * @return self
     */
    public function setEntityType(?string $entityType): self
    {
        $this->entityType = $entityType;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Company\Api\Data\HierarchyInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Company\Api\Data\HierarchyInterface
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
     * Structure ID.
     *
     * @return int|null
     */
    public function getStructureId(): ?int
    {
        return $this->structureId;
    }
    /**
     * Structure ID.
     *
     * @param int|null $structureId
     *
     * @return self
     */
    public function setStructureId(?int $structureId): self
    {
        $this->structureId = $structureId;
        return $this;
    }
    /**
     * Structure parent ID.
     *
     * @return int|null
     */
    public function getStructureParentId(): ?int
    {
        return $this->structureParentId;
    }
    /**
     * Structure parent ID.
     *
     * @param int|null $structureParentId
     *
     * @return self
     */
    public function setStructureParentId(?int $structureParentId): self
    {
        $this->structureParentId = $structureParentId;
        return $this;
    }
}
