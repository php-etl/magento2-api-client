<?php

namespace Kiboko\Magento\Model;

class V1EavAttributeSetsPostBody
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
     * 
     *
     * @var string|null
     */
    protected $entityTypeCode;
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
     * 
     *
     * @return string|null
     */
    public function getEntityTypeCode() : ?string
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
    public function setEntityTypeCode(?string $entityTypeCode) : self
    {
        $this->initialized['entityTypeCode'] = true;
        $this->entityTypeCode = $entityTypeCode;
        return $this;
    }
    /**
     * Interface AttributeSetInterface
     *
     * @return EavDataAttributeSetInterface|null
     */
    public function getAttributeSet() : ?EavDataAttributeSetInterface
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
    public function setAttributeSet(?EavDataAttributeSetInterface $attributeSet) : self
    {
        $this->initialized['attributeSet'] = true;
        $this->attributeSet = $attributeSet;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSkeletonId() : ?int
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
    public function setSkeletonId(?int $skeletonId) : self
    {
        $this->initialized['skeletonId'] = true;
        $this->skeletonId = $skeletonId;
        return $this;
    }
}