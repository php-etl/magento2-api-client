<?php

namespace Kiboko\Magento\v2_4\Model;

class V1InventorySourceItemsDeletePostBody
{
    /**
     *
     *
     * @var InventoryApiDataSourceItemInterface[]
     */
    protected $sourceItems;
    /**
     *
     *
     * @return InventoryApiDataSourceItemInterface[]
     */
    public function getSourceItems(): array
    {
        return $this->sourceItems;
    }
    /**
     *
     *
     * @param InventoryApiDataSourceItemInterface[] $sourceItems
     *
     * @return self
     */
    public function setSourceItems(array $sourceItems): self
    {
        $this->sourceItems = $sourceItems;
        return $this;
    }
}
