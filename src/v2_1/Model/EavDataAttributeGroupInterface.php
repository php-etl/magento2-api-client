<?php

namespace Kiboko\Magento\V2_1\Model;

class EavDataAttributeGroupInterface
{
    /**
     * Id
     *
     * @var string
     */
    protected $attributeGroupId;
    /**
     * Name
     *
     * @var string
     */
    protected $attributeGroupName;
    /**
     * Attribute set id
     *
     * @var int
     */
    protected $attributeSetId;
    /**
     * ExtensionInterface class for @see \Magento\Eav\Api\Data\AttributeGroupInterface
     *
     * @var EavDataAttributeGroupExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Id
     *
     * @return string
     */
    public function getAttributeGroupId(): string
    {
        return $this->attributeGroupId;
    }
    /**
     * Id
     *
     * @param string $attributeGroupId
     *
     * @return self
     */
    public function setAttributeGroupId(string $attributeGroupId): self
    {
        $this->attributeGroupId = $attributeGroupId;
        return $this;
    }
    /**
     * Name
     *
     * @return string
     */
    public function getAttributeGroupName(): string
    {
        return $this->attributeGroupName;
    }
    /**
     * Name
     *
     * @param string $attributeGroupName
     *
     * @return self
     */
    public function setAttributeGroupName(string $attributeGroupName): self
    {
        $this->attributeGroupName = $attributeGroupName;
        return $this;
    }
    /**
     * Attribute set id
     *
     * @return int
     */
    public function getAttributeSetId(): int
    {
        return $this->attributeSetId;
    }
    /**
     * Attribute set id
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
     * ExtensionInterface class for @see \Magento\Eav\Api\Data\AttributeGroupInterface
     *
     * @return EavDataAttributeGroupExtensionInterface
     */
    public function getExtensionAttributes(): EavDataAttributeGroupExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Eav\Api\Data\AttributeGroupInterface
     *
     * @param EavDataAttributeGroupExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(EavDataAttributeGroupExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
