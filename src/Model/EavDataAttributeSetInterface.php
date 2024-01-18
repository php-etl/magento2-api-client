<?php

namespace Kiboko\Magento\Model;

class EavDataAttributeSetInterface
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Attribute set ID
     *
     * @var int|null
     */
    protected $attributeSetId;
    /**
     * Attribute set name
     *
     * @var string|null
     */
    protected $attributeSetName;
    /**
     * Attribute set sort order index
     *
     * @var int|null
     */
    protected $sortOrder;
    /**
     * Attribute set entity type id
     *
     * @var int|null
     */
    protected $entityTypeId;
    /**
     * ExtensionInterface class for @see \Magento\Eav\Api\Data\AttributeSetInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Attribute set ID
     *
     * @return int|null
     */
    public function getAttributeSetId() : ?int
    {
        return $this->attributeSetId;
    }
    /**
     * Attribute set ID
     *
     * @param int|null $attributeSetId
     *
     * @return self
     */
    public function setAttributeSetId(?int $attributeSetId) : self
    {
        $this->initialized['attributeSetId'] = true;
        $this->attributeSetId = $attributeSetId;
        return $this;
    }
    /**
     * Attribute set name
     *
     * @return string|null
     */
    public function getAttributeSetName() : ?string
    {
        return $this->attributeSetName;
    }
    /**
     * Attribute set name
     *
     * @param string|null $attributeSetName
     *
     * @return self
     */
    public function setAttributeSetName(?string $attributeSetName) : self
    {
        $this->initialized['attributeSetName'] = true;
        $this->attributeSetName = $attributeSetName;
        return $this;
    }
    /**
     * Attribute set sort order index
     *
     * @return int|null
     */
    public function getSortOrder() : ?int
    {
        return $this->sortOrder;
    }
    /**
     * Attribute set sort order index
     *
     * @param int|null $sortOrder
     *
     * @return self
     */
    public function setSortOrder(?int $sortOrder) : self
    {
        $this->initialized['sortOrder'] = true;
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     * Attribute set entity type id
     *
     * @return int|null
     */
    public function getEntityTypeId() : ?int
    {
        return $this->entityTypeId;
    }
    /**
     * Attribute set entity type id
     *
     * @param int|null $entityTypeId
     *
     * @return self
     */
    public function setEntityTypeId(?int $entityTypeId) : self
    {
        $this->initialized['entityTypeId'] = true;
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
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}