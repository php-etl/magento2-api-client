<?php

namespace Kiboko\Magento\V2\Model;

class CompanyDataHierarchyInterface
{
    /**
     * Structure ID.
     *
     * @var int
     */
    protected $structureId;
    /**
     * Entity ID.
     *
     * @var int
     */
    protected $entityId;
    /**
     * Entity type.
     *
     * @var string
     */
    protected $entityType;
    /**
     * Structure parent ID.
     *
     * @var int
     */
    protected $structureParentId;
    /**
     * ExtensionInterface class for @see \Magento\Company\Api\Data\HierarchyInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Structure ID.
     *
     * @return int
     */
    public function getStructureId(): int
    {
        return $this->structureId;
    }
    /**
     * Structure ID.
     *
     * @param int $structureId
     *
     * @return self
     */
    public function setStructureId(int $structureId): self
    {
        $this->structureId = $structureId;
        return $this;
    }
    /**
     * Entity ID.
     *
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->entityId;
    }
    /**
     * Entity ID.
     *
     * @param int $entityId
     *
     * @return self
     */
    public function setEntityId(int $entityId): self
    {
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * Entity type.
     *
     * @return string
     */
    public function getEntityType(): string
    {
        return $this->entityType;
    }
    /**
     * Entity type.
     *
     * @param string $entityType
     *
     * @return self
     */
    public function setEntityType(string $entityType): self
    {
        $this->entityType = $entityType;
        return $this;
    }
    /**
     * Structure parent ID.
     *
     * @return int
     */
    public function getStructureParentId(): int
    {
        return $this->structureParentId;
    }
    /**
     * Structure parent ID.
     *
     * @param int $structureParentId
     *
     * @return self
     */
    public function setStructureParentId(int $structureParentId): self
    {
        $this->structureParentId = $structureParentId;
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
}
