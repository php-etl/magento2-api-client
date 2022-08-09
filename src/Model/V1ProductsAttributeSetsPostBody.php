<?php

namespace Kiboko\Magento\V2\Model;

class V1ProductsAttributeSetsPostBody
{
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
     * Interface AttributeSetInterface
     *
     * @return EavDataAttributeSetInterface
     */
    public function getAttributeSet() : EavDataAttributeSetInterface
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
    public function setAttributeSet(EavDataAttributeSetInterface $attributeSet) : self
    {
        $this->attributeSet = $attributeSet;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSkeletonId() : int
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
    public function setSkeletonId(int $skeletonId) : self
    {
        $this->skeletonId = $skeletonId;
        return $this;
    }
}