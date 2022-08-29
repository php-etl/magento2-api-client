<?php

namespace Kiboko\Magento\v2_4\Model;

class V1EavAttributeSetsPostBody
{
    /**
     *
     *
     * @var string
     */
    protected $entityTypeCode;
    /**
     * Interface AttributeSetInterface
     *
     * @var EavDataAttributeSetInterface
     */
    protected $attributeSet;
    /**
     *
     *
     * @var int
     */
    protected $skeletonId;
    /**
     *
     *
     * @return string
     */
    public function getEntityTypeCode(): string
    {
        return $this->entityTypeCode;
    }
    /**
     *
     *
     * @param string $entityTypeCode
     *
     * @return self
     */
    public function setEntityTypeCode(string $entityTypeCode): self
    {
        $this->entityTypeCode = $entityTypeCode;
        return $this;
    }
    /**
     * Interface AttributeSetInterface
     *
     * @return EavDataAttributeSetInterface
     */
    public function getAttributeSet(): EavDataAttributeSetInterface
    {
        return $this->attributeSet;
    }
    /**
     * Interface AttributeSetInterface
     *
     * @param EavDataAttributeSetInterface $attributeSet
     *
     * @return self
     */
    public function setAttributeSet(EavDataAttributeSetInterface $attributeSet): self
    {
        $this->attributeSet = $attributeSet;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getSkeletonId(): int
    {
        return $this->skeletonId;
    }
    /**
     *
     *
     * @param int $skeletonId
     *
     * @return self
     */
    public function setSkeletonId(int $skeletonId): self
    {
        $this->skeletonId = $skeletonId;
        return $this;
    }
}
