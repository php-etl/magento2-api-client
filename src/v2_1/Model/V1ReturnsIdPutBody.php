<?php

namespace Kiboko\Magento\v2_1\Model;

class V1ReturnsIdPutBody
{
    /**
     * Interface RmaInterface
     *
     * @var RmaDataRmaInterface
     */
    protected $rmaDataObject;
    /**
     * Interface RmaInterface
     *
     * @return RmaDataRmaInterface
     */
    public function getRmaDataObject(): RmaDataRmaInterface
    {
        return $this->rmaDataObject;
    }
    /**
     * Interface RmaInterface
     *
     * @param RmaDataRmaInterface $rmaDataObject
     *
     * @return self
     */
    public function setRmaDataObject(RmaDataRmaInterface $rmaDataObject): self
    {
        $this->rmaDataObject = $rmaDataObject;
        return $this;
    }
}
