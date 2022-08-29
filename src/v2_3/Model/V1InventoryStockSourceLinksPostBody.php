<?php

namespace Kiboko\Magento\v2_3\Model;

class V1InventoryStockSourceLinksPostBody
{
    /**
     *
     *
     * @var InventoryApiDataStockSourceLinkInterface[]
     */
    protected $links;
    /**
     *
     *
     * @return InventoryApiDataStockSourceLinkInterface[]
     */
    public function getLinks(): array
    {
        return $this->links;
    }
    /**
     *
     *
     * @param InventoryApiDataStockSourceLinkInterface[] $links
     *
     * @return self
     */
    public function setLinks(array $links): self
    {
        $this->links = $links;
        return $this;
    }
}
