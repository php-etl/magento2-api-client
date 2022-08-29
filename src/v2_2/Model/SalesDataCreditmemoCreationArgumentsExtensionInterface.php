<?php

namespace Kiboko\Magento\v2_2\Model;

class SalesDataCreditmemoCreationArgumentsExtensionInterface
{
    /**
     *
     *
     * @var int[]
     */
    protected $returnToStockItems;
    /**
     *
     *
     * @return int[]
     */
    public function getReturnToStockItems(): array
    {
        return $this->returnToStockItems;
    }
    /**
     *
     *
     * @param int[] $returnToStockItems
     *
     * @return self
     */
    public function setReturnToStockItems(array $returnToStockItems): self
    {
        $this->returnToStockItems = $returnToStockItems;
        return $this;
    }
}
