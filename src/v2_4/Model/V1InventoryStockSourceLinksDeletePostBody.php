<?php

namespace Kiboko\Magento\v2_4\Model;

class V1InventoryStockSourceLinksDeletePostBody
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
