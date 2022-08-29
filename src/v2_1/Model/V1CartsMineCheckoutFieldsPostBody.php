<?php

namespace Kiboko\Magento\v2_1\Model;

class V1CartsMineCheckoutFieldsPostBody
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
