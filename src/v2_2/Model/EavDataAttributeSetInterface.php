<?php

namespace Kiboko\Magento\V2_2\Model;

class EavDataAttributeSetInterface
{
    /**
     * Attribute set ID
     *
     * @var int
     */
    protected $attributeSetId;
    /**
     * Attribute set name
     *
     * @var string
     */
    protected $attributeSetName;
    /**
     * Attribute set entity type id
     *
     * @var int
     */
    protected $entityTypeId;
    /**
     * ExtensionInterface class for @see \Magento\Eav\Api\Data\AttributeSetInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Attribute set sort order index
     *
     * @var int
     */
    protected $sortOrder;
    /**
     * Attribute set ID
     *
     * @return int
     */
    public function getAttributeSetId(): int
    {
        return $this->attributeSetId;
    }
    /**
     * Attribute set ID
     *
     * @param int $attributeSetId
     *
     * @return self
     */
    public function setAttributeSetId(int $attributeSetId): self
    {
        $this->attributeSetId = $attributeSetId;
        return $this;
    }
    /**
     * Attribute set name
     *
     * @return string
     */
    public function getAttributeSetName(): string
    {
        return $this->attributeSetName;
    }
    /**
     * Attribute set name
     *
     * @param string $attributeSetName
     *
     * @return self
     */
    public function setAttributeSetName(string $attributeSetName): self
    {
        $this->attributeSetName = $attributeSetName;
        return $this;
    }
    /**
     * Attribute set entity type id
     *
     * @return int
     */
    public function getEntityTypeId(): int
    {
        return $this->entityTypeId;
    }
    /**
     * Attribute set entity type id
     *
     * @param int $entityTypeId
     *
     * @return self
     */
    public function setEntityTypeId(int $entityTypeId): self
    {
        $this->entityTypeId = $entityTypeId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Eav\Api\Data\AttributeSetInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Eav\Api\Data\AttributeSetInterface
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
     * Attribute set sort order index
     *
     * @return int
     */
    public function getSortOrder(): int
    {
        return $this->sortOrder;
    }
    /**
     * Attribute set sort order index
     *
     * @param int $sortOrder
     *
     * @return self
     */
    public function setSortOrder(int $sortOrder): self
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }
}
