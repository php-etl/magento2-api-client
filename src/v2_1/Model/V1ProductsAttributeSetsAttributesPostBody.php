<?php

namespace Kiboko\Magento\v2_1\Model;

class V1ProductsAttributeSetsAttributesPostBody
{
    /**
     *
     *
     * @var string
     */
    protected $attributeCode;
    /**
     *
     *
     * @var int
     */
    protected $attributeGroupId;
    /**
     *
     *
     * @var int
     */
    protected $attributeSetId;
    /**
     *
     *
     * @var int
     */
    protected $sortOrder;
    /**
     *
     *
     * @return string
     */
    public function getAttributeCode(): string
    {
        return $this->attributeCode;
    }
    /**
     *
     *
     * @param string $attributeCode
     *
     * @return self
     */
    public function setAttributeCode(string $attributeCode): self
    {
        $this->attributeCode = $attributeCode;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getAttributeGroupId(): int
    {
        return $this->attributeGroupId;
    }
    /**
     *
     *
     * @param int $attributeGroupId
     *
     * @return self
     */
    public function setAttributeGroupId(int $attributeGroupId): self
    {
        $this->attributeGroupId = $attributeGroupId;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getAttributeSetId(): int
    {
        return $this->attributeSetId;
    }
    /**
     *
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
     *
     *
     * @return int
     */
    public function getSortOrder(): int
    {
        return $this->sortOrder;
    }
    /**
     *
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
