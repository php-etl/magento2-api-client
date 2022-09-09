<?php

namespace Kiboko\Magento\V2_1\Model;

class V1GiftWrappingsPostBody
{
    /**
     * Interface WrappingInterface
     *
     * @var GiftWrappingDataWrappingInterface|null
     */
    protected $data;
    /**
     *
     *
     * @var int|null
     */
    protected $storeId;
    /**
     * Interface WrappingInterface
     *
     * @return GiftWrappingDataWrappingInterface|null
     */
    public function getData(): ?GiftWrappingDataWrappingInterface
    {
        return $this->data;
    }
    /**
     * Interface WrappingInterface
     *
     * @param GiftWrappingDataWrappingInterface|null $data
     *
     * @return self
     */
    public function setData(?GiftWrappingDataWrappingInterface $data): self
    {
        $this->data = $data;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }
    /**
     *
     *
     * @param int|null $storeId
     *
     * @return self
     */
    public function setStoreId(?int $storeId): self
    {
        $this->storeId = $storeId;
        return $this;
    }
}
