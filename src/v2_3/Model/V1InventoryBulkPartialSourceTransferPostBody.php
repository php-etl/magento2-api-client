<?php

namespace Kiboko\Magento\v2_3\Model;

class V1InventoryBulkPartialSourceTransferPostBody
{
    /**
     *
     *
     * @var string
     */
    protected $originSourceCode;
    /**
     *
     *
     * @var string
     */
    protected $destinationSourceCode;
    /**
     *
     *
     * @var InventoryCatalogApiDataPartialInventoryTransferItemInterface[]
     */
    protected $items;
    /**
     *
     *
     * @return string
     */
    public function getOriginSourceCode(): string
    {
        return $this->originSourceCode;
    }
    /**
     *
     *
     * @param string $originSourceCode
     *
     * @return self
     */
    public function setOriginSourceCode(string $originSourceCode): self
    {
        $this->originSourceCode = $originSourceCode;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getDestinationSourceCode(): string
    {
        return $this->destinationSourceCode;
    }
    /**
     *
     *
     * @param string $destinationSourceCode
     *
     * @return self
     */
    public function setDestinationSourceCode(string $destinationSourceCode): self
    {
        $this->destinationSourceCode = $destinationSourceCode;
        return $this;
    }
    /**
     *
     *
     * @return InventoryCatalogApiDataPartialInventoryTransferItemInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     *
     *
     * @param InventoryCatalogApiDataPartialInventoryTransferItemInterface[] $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }
}
