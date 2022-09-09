<?php

namespace Kiboko\Magento\V2_2\Model;

class V1BundleProductsSkuLinksIdPutBody
{
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
    public function getLinkedProduct(): ?BundleDataLinkInterface
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
    public function setLinkedProduct(?BundleDataLinkInterface $linkedProduct): self
    {
        $this->linkedProduct = $linkedProduct;
        return $this;
    }
}
