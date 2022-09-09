<?php

namespace Kiboko\Magento\V2_4\Model;

class V1RequisitionListsPostBody
{
    /**
     * Interface RequisitionListInterface
     *
     * @var RequisitionListDataRequisitionListInterface|null
     */
    protected $requisitionList;
    /**
     * Interface RequisitionListInterface
     *
     * @return RequisitionListDataRequisitionListInterface|null
     */
    public function getRequisitionList(): ?RequisitionListDataRequisitionListInterface
    {
        return $this->requisitionList;
    }
    /**
     * Interface RequisitionListInterface
     *
     * @param RequisitionListDataRequisitionListInterface|null $requisitionList
     *
     * @return self
     */
    public function setRequisitionList(?RequisitionListDataRequisitionListInterface $requisitionList): self
    {
        $this->requisitionList = $requisitionList;
        return $this;
    }
}
