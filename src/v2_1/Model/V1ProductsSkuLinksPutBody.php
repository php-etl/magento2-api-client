<?php

namespace Kiboko\Magento\v2_1\Model;

class V1ProductsSkuLinksPutBody
{
    /**
     *
     *
     * @var CatalogDataProductLinkInterface
     */
    protected $entity;
    /**
     *
     *
     * @return CatalogDataProductLinkInterface
     */
    public function getEntity(): CatalogDataProductLinkInterface
    {
        return $this->entity;
    }
    /**
     *
     *
     * @param CatalogDataProductLinkInterface $entity
     *
     * @return self
     */
    public function setEntity(CatalogDataProductLinkInterface $entity): self
    {
        $this->entity = $entity;
        return $this;
    }
}
