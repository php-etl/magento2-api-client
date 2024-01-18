<?php

namespace Kiboko\Magento\Model;

class V1BundleProductsSkuLinksOptionIdPostBody
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
     * Interface LinkInterface
     *
     * @var BundleDataLinkInterface|null
     */
    protected $linkedProduct;
    /**
     * Interface LinkInterface
     *
     * @return BundleDataLinkInterface|null
     */
    public function getLinkedProduct() : ?BundleDataLinkInterface
    {
        return $this->linkedProduct;
    }
    /**
     * Interface LinkInterface
     *
     * @param BundleDataLinkInterface|null $linkedProduct
     *
     * @return self
     */
    public function setLinkedProduct(?BundleDataLinkInterface $linkedProduct) : self
    {
        $this->initialized['linkedProduct'] = true;
        $this->linkedProduct = $linkedProduct;
        return $this;
    }
}