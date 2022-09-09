<?php

namespace Kiboko\Magento\V2_1\Model;

class V1ProductsAttributeSetsGroupsPostBody
{
    /**
     * Interface AttributeGroupInterface
     *
     * @var EavDataAttributeGroupInterface|null
     */
    protected $group;
    /**
     * Interface AttributeGroupInterface
     *
     * @return EavDataAttributeGroupInterface|null
     */
    public function getGroup(): ?EavDataAttributeGroupInterface
    {
        return $this->group;
    }
    /**
     * Interface AttributeGroupInterface
     *
     * @param EavDataAttributeGroupInterface|null $group
     *
     * @return self
     */
    public function setGroup(?EavDataAttributeGroupInterface $group): self
    {
        $this->group = $group;
        return $this;
    }
}
