<?php

namespace Kiboko\Magento\V2_3\Model;

class V1EavAttributeSetsPostBody
{
    /**
     * Interface AttributeSetInterface
     *
     * @var EavDataAttributeSetInterface|null
     */
    protected $attributeSet;
    /**
     *
     *
     * @var string|null
     */
    protected $entityTypeCode;
    /**
     *
     *
     * @var int|null
     */
    protected $skeletonId;
    /**
     * Interface AttributeSetInterface
     *
     * @return EavDataAttributeSetInterface|null
     */
    public function getAttributeSet(): ?EavDataAttributeSetInterface
    {
        return $this->attributeSet;
    }
    /**
     * Interface AttributeSetInterface
     *
     * @param EavDataAttributeSetInterface|null $attributeSet
     *
     * @return self
     */
    public function setAttributeSet(?EavDataAttributeSetInterface $attributeSet): self
    {
        $this->attributeSet = $attributeSet;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getEntityTypeCode(): ?string
    {
        return $this->entityTypeCode;
    }
    /**
     *
     *
     * @param string|null $entityTypeCode
     *
     * @return self
     */
    public function setEntityTypeCode(?string $entityTypeCode): self
    {
        $this->entityTypeCode = $entityTypeCode;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getSkeletonId(): ?int
    {
        return $this->skeletonId;
    }
    /**
     *
     *
     * @param int|null $skeletonId
     *
     * @return self
     */
    public function setSkeletonId(?int $skeletonId): self
    {
        $this->skeletonId = $skeletonId;
        return $this;
    }
}
