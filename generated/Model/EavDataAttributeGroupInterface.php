<?php

namespace Kiboko\Magento\Model;

class EavDataAttributeGroupInterface
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
     * Id
     *
     * @var string|null
     */
    protected $attributeGroupId;
    /**
     * Name
     *
     * @var string|null
     */
    protected $attributeGroupName;
    /**
     * Attribute set id
     *
     * @var int|null
     */
    protected $attributeSetId;
    /**
     * ExtensionInterface class for @see \Magento\Eav\Api\Data\AttributeGroupInterface
     *
     * @var EavDataAttributeGroupExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Id
     *
     * @return string|null
     */
    public function getAttributeGroupId() : ?string
    {
        return $this->attributeGroupId;
    }
    /**
     * Id
     *
     * @param string|null $attributeGroupId
     *
     * @return self
     */
    public function setAttributeGroupId(?string $attributeGroupId) : self
    {
        $this->initialized['attributeGroupId'] = true;
        $this->attributeGroupId = $attributeGroupId;
        return $this;
    }
    /**
     * Name
     *
     * @return string|null
     */
    public function getAttributeGroupName() : ?string
    {
        return $this->attributeGroupName;
    }
    /**
     * Name
     *
     * @param string|null $attributeGroupName
     *
     * @return self
     */
    public function setAttributeGroupName(?string $attributeGroupName) : self
    {
        $this->initialized['attributeGroupName'] = true;
        $this->attributeGroupName = $attributeGroupName;
        return $this;
    }
    /**
     * Attribute set id
     *
     * @return int|null
     */
    public function getAttributeSetId() : ?int
    {
        return $this->attributeSetId;
    }
    /**
     * Attribute set id
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
     * ExtensionInterface class for @see \Magento\Eav\Api\Data\AttributeGroupInterface
     *
     * @return EavDataAttributeGroupExtensionInterface|null
     */
    public function getExtensionAttributes() : ?EavDataAttributeGroupExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Eav\Api\Data\AttributeGroupInterface
     *
     * @param EavDataAttributeGroupExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?EavDataAttributeGroupExtensionInterface $extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}