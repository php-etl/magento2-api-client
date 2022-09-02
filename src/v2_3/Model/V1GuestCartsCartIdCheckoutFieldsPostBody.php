<?php

namespace Kiboko\Magento\V2_3\Model;

class V1GuestCartsCartIdCheckoutFieldsPostBody
{
    /**
     *
     *
     * @var FrameworkAttributeInterface[]
     */
    protected $serviceSelection;
    /**
     *
     *
     * @return FrameworkAttributeInterface[]
     */
    public function getServiceSelection(): array
    {
        return $this->serviceSelection;
    }
    /**
     *
     *
     * @param FrameworkAttributeInterface[] $serviceSelection
     *
     * @return self
     */
    public function setServiceSelection(array $serviceSelection): self
    {
        $this->serviceSelection = $serviceSelection;
        return $this;
    }
}
