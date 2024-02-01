<?php

namespace Kiboko\Magento\Model;

class V1CustomerGroupsPostBody
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
     * Customer group interface.
     *
     * @var CustomerDataGroupInterface|null
     */
    protected $group;
    /**
     * Customer group interface.
     *
     * @return CustomerDataGroupInterface|null
     */
    public function getGroup() : ?CustomerDataGroupInterface
    {
        return $this->group;
    }
    /**
     * Customer group interface.
     *
     * @param CustomerDataGroupInterface|null $group
     *
     * @return self
     */
    public function setGroup(?CustomerDataGroupInterface $group) : self
    {
        $this->initialized['group'] = true;
        $this->group = $group;
        return $this;
    }
}