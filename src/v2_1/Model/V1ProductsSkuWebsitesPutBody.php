<?php

namespace Kiboko\Magento\v2_1\Model;

class V1ProductsSkuWebsitesPutBody
{
    /**
     *
     *
     * @var CatalogDataProductWebsiteLinkInterface
     */
    protected $productWebsiteLink;
    /**
     *
     *
     * @return CatalogDataProductWebsiteLinkInterface
     */
    public function getProductWebsiteLink(): CatalogDataProductWebsiteLinkInterface
    {
        return $this->productWebsiteLink;
    }
    /**
     *
     *
     * @param CatalogDataProductWebsiteLinkInterface $productWebsiteLink
     *
     * @return self
     */
    public function setProductWebsiteLink(CatalogDataProductWebsiteLinkInterface $productWebsiteLink): self
    {
        $this->productWebsiteLink = $productWebsiteLink;
        return $this;
    }
}
