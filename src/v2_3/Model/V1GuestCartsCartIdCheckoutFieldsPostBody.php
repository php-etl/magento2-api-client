<?php

namespace Kiboko\Magento\V2_3\Model;

class V1GuestCartsCartIdCheckoutFieldsPostBody
{
    /**
     *
     *
     * @var FrameworkAttributeInterface[]|null
     */
    protected $serviceSelection;
    /**
     *
     *
     * @return FrameworkAttributeInterface[]|null
     */
    public function getServiceSelection(): ?array
    {
        return $this->serviceSelection;
    }
    /**
     *
     *
     * @param FrameworkAttributeInterface[]|null $serviceSelection
     *
     * @return self
     */
    public function setServiceSelection(?array $serviceSelection): self
    {
        $this->serviceSelection = $serviceSelection;
        return $this;
    }
}
