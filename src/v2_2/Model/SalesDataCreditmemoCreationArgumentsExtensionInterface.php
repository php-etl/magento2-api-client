<?php

namespace Kiboko\Magento\V2_2\Model;

class SalesDataCreditmemoCreationArgumentsExtensionInterface
{
    /**
     *
     *
     * @var int[]|null
     */
    protected $returnToStockItems;
    /**
     *
     *
     * @return int[]|null
     */
    public function getReturnToStockItems(): ?array
    {
        return $this->returnToStockItems;
    }
    /**
     *
     *
     * @param int[]|null $returnToStockItems
     *
     * @return self
     */
    public function setReturnToStockItems(?array $returnToStockItems): self
    {
        $this->returnToStockItems = $returnToStockItems;
        return $this;
    }
}
