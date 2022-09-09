<?php

namespace Kiboko\Magento\V2_3\Model;

class SalesDataOrderAddressExtensionInterface
{
    /**
     *
     *
     * @var FrameworkAttributeInterface[]|null
     */
    protected $checkoutFields;
    /**
     *
     *
     * @return FrameworkAttributeInterface[]|null
     */
    public function getCheckoutFields(): ?array
    {
        return $this->checkoutFields;
    }
    /**
     *
     *
     * @param FrameworkAttributeInterface[]|null $checkoutFields
     *
     * @return self
     */
    public function setCheckoutFields(?array $checkoutFields): self
    {
        $this->checkoutFields = $checkoutFields;
        return $this;
    }
}
