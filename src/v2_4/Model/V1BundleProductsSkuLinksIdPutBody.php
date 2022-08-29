<?php

namespace Kiboko\Magento\v2_4\Model;

class V1BundleProductsSkuLinksIdPutBody
{
    /**
     * Interface LinkInterface
     *
     * @var BundleDataLinkInterface
     */
    protected $linkedProduct;
    /**
     * Interface LinkInterface
     *
     * @return BundleDataLinkInterface
     */
    public function getLinkedProduct(): BundleDataLinkInterface
    {
        return $this->linkedProduct;
    }
    /**
     * Interface LinkInterface
     *
     * @param BundleDataLinkInterface $linkedProduct
     *
     * @return self
     */
    public function setLinkedProduct(BundleDataLinkInterface $linkedProduct): self
    {
        $this->linkedProduct = $linkedProduct;
        return $this;
    }
}
