<?php

namespace Kiboko\Magento\V2_2\Model;

class V1RequisitionListsPostBody
{
    /**
     * Interface RequisitionListInterface
     *
     * @var RequisitionListDataRequisitionListInterface
     */
    protected $requisitionList;
    /**
     * Interface RequisitionListInterface
     *
     * @return RequisitionListDataRequisitionListInterface
     */
    public function getRequisitionList(): RequisitionListDataRequisitionListInterface
    {
        return $this->requisitionList;
    }
    /**
     * Interface RequisitionListInterface
     *
     * @param RequisitionListDataRequisitionListInterface $requisitionList
     *
     * @return self
     */
    public function setRequisitionList(RequisitionListDataRequisitionListInterface $requisitionList): self
    {
        $this->requisitionList = $requisitionList;
        return $this;
    }
}
