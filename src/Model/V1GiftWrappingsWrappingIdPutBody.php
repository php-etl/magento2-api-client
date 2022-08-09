<?php

namespace Kiboko\Magento\V2\Model;

class V1GiftWrappingsWrappingIdPutBody
{
    /**
     * Interface WrappingInterface
     *
     * @var GiftWrappingDataWrappingInterface
     */
    protected $data;
    /**
     * 
     *
     * @var int
     */
    protected $storeId;
    /**
     * Interface WrappingInterface
     *
     * @return GiftWrappingDataWrappingInterface
     */
    public function getData() : GiftWrappingDataWrappingInterface
    {
        return $this->data;
    }
    /**
     * Interface WrappingInterface
     *
     * @param GiftWrappingDataWrappingInterface $data
     *
     * @return self
     */
    public function setData(GiftWrappingDataWrappingInterface $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStoreId() : int
    {
        return $this->storeId;
    }
    /**
     * 
     *
     * @param int $storeId
     *
     * @return self
     */
    public function setStoreId(int $storeId) : self
    {
        $this->storeId = $storeId;
        return $this;
    }
}