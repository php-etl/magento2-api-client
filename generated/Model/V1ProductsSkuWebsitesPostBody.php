<?php

namespace Kiboko\Magento\Model;

class V1ProductsSkuWebsitesPostBody
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
    public function getProductWebsiteLink() : ?CatalogDataProductWebsiteLinkInterface
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
    public function setProductWebsiteLink(?CatalogDataProductWebsiteLinkInterface $productWebsiteLink) : self
    {
        $this->initialized['productWebsiteLink'] = true;
        $this->productWebsiteLink = $productWebsiteLink;
        return $this;
    }
}