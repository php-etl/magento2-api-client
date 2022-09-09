<?php

namespace Kiboko\Magento\V2_1\Model;

class V1ProductsAttributeSetsPostBody
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
