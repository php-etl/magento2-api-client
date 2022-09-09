<?php

namespace Kiboko\Magento\V2_2\Model;

class V1ProductsSkuLinksPutBody
{
    /**
     *
     *
     * @var CatalogDataProductLinkInterface|null
     */
    protected $entity;
    /**
     *
     *
     * @return CatalogDataProductLinkInterface|null
     */
    public function getEntity(): ?CatalogDataProductLinkInterface
    {
        return $this->entity;
    }
    /**
     *
     *
     * @param CatalogDataProductLinkInterface|null $entity
     *
     * @return self
     */
    public function setEntity(?CatalogDataProductLinkInterface $entity): self
    {
        $this->entity = $entity;
        return $this;
    }
}
