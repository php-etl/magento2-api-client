<?php

namespace Kiboko\Magento\V2_4\Model;

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
