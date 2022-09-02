<?php

namespace Kiboko\Magento\V2_4\Model;

class V1EavAttributeSetsAttributeSetIdPutBody
{
    /**
     * Interface AttributeSetInterface
     *
     * @var EavDataAttributeSetInterface
     */
    protected $attributeSet;
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
}
