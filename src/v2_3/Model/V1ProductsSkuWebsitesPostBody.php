<?php

namespace Kiboko\Magento\v2_3\Model;

class V1ProductsSkuWebsitesPostBody
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
    public function getProductWebsiteLink() : CatalogDataProductWebsiteLinkInterface
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
    public function setProductWebsiteLink(CatalogDataProductWebsiteLinkInterface $productWebsiteLink) : self
    {
        $this->productWebsiteLink = $productWebsiteLink;
        return $this;
    }
}