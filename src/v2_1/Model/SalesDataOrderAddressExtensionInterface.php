<?php

namespace Kiboko\Magento\v2_1\Model;

class SalesDataOrderAddressExtensionInterface
{
    /**
     *
     *
     * @var FrameworkAttributeInterface[]
     */
    protected $checkoutFields;
    /**
     *
     *
     * @return FrameworkAttributeInterface[]
     */
    public function getCheckoutFields(): array
    {
        return $this->checkoutFields;
    }
    /**
     *
     *
     * @param FrameworkAttributeInterface[] $checkoutFields
     *
     * @return self
     */
    public function setCheckoutFields(array $checkoutFields): self
    {
        $this->checkoutFields = $checkoutFields;
        return $this;
    }
}
