<?php

namespace Kiboko\Magento\Model;

class V1ProductsAttributeSetsAttributeSetIdGroupsPutBody
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
    public function getGroup() : ?EavDataAttributeGroupInterface
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
    public function setGroup(?EavDataAttributeGroupInterface $group) : self
    {
        $this->initialized['group'] = true;
        $this->group = $group;
        return $this;
    }
}