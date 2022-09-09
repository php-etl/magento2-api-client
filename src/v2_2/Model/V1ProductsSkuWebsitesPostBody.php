<?php

namespace Kiboko\Magento\V2_2\Model;

class V1ProductsSkuWebsitesPostBody
{
    /**
     *
     *
     * @var CatalogDataProductWebsiteLinkInterface|null
     */
    protected $productWebsiteLink;
    /**
     *
     *
     * @return CatalogDataProductWebsiteLinkInterface|null
     */
    public function getProductWebsiteLink(): ?CatalogDataProductWebsiteLinkInterface
    {
        return $this->productWebsiteLink;
    }
    /**
     *
     *
     * @param CatalogDataProductWebsiteLinkInterface|null $productWebsiteLink
     *
     * @return self
     */
    public function setProductWebsiteLink(?CatalogDataProductWebsiteLinkInterface $productWebsiteLink): self
    {
        $this->productWebsiteLink = $productWebsiteLink;
        return $this;
    }
}
