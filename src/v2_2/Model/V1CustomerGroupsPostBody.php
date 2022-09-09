<?php

namespace Kiboko\Magento\V2_2\Model;

class V1CustomerGroupsPostBody
{
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
    public function getGroup(): ?CustomerDataGroupInterface
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
    public function setGroup(?CustomerDataGroupInterface $group): self
    {
        $this->group = $group;
        return $this;
    }
}
