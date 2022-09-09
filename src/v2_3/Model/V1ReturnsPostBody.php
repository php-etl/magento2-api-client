<?php

namespace Kiboko\Magento\V2_3\Model;

class V1ReturnsPostBody
{
    /**
     * Interface RmaInterface
     *
     * @var RmaDataRmaInterface|null
     */
    protected $rmaDataObject;
    /**
     * Interface RmaInterface
     *
     * @return RmaDataRmaInterface|null
     */
    public function getRmaDataObject(): ?RmaDataRmaInterface
    {
        return $this->rmaDataObject;
    }
    /**
     * Interface RmaInterface
     *
     * @param RmaDataRmaInterface|null $rmaDataObject
     *
     * @return self
     */
    public function setRmaDataObject(?RmaDataRmaInterface $rmaDataObject): self
    {
        $this->rmaDataObject = $rmaDataObject;
        return $this;
    }
}
