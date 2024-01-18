<?php

namespace Kiboko\Magento\Model;

class V1ProductsSkuLinksPutBody
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
     * @var CatalogDataProductLinkInterface|null
     */
    protected $entity;
    /**
     * 
     *
     * @return CatalogDataProductLinkInterface|null
     */
    public function getEntity() : ?CatalogDataProductLinkInterface
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
    public function setEntity(?CatalogDataProductLinkInterface $entity) : self
    {
        $this->initialized['entity'] = true;
        $this->entity = $entity;
        return $this;
    }
}