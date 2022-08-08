<?php

namespace Kiboko\Magento\V2\Model;

class V1CustomerGroupsPostBody
{
    /**
     * Customer group interface.
     *
     * @var CustomerDataGroupInterface
     */
    protected $group;
    /**
     * Customer group interface.
     *
     * @return CustomerDataGroupInterface
     */
    public function getGroup(): CustomerDataGroupInterface
    {
        return $this->group;
    }
    /**
     * Customer group interface.
     *
     * @param CustomerDataGroupInterface $group
     *
     * @return self
     */
    public function setGroup(CustomerDataGroupInterface $group): self
    {
        $this->group = $group;
        return $this;
    }
}
