<?php

namespace Kiboko\Magento\Model;

class V1ProductsSkuMediaPostBody
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
     * @var CatalogDataProductAttributeMediaGalleryEntryInterface|null
     */
    protected $entry;
    /**
     * 
     *
     * @return CatalogDataProductAttributeMediaGalleryEntryInterface|null
     */
    public function getEntry() : ?CatalogDataProductAttributeMediaGalleryEntryInterface
    {
        return $this->entry;
    }
    /**
     * 
     *
     * @param CatalogDataProductAttributeMediaGalleryEntryInterface|null $entry
     *
     * @return self
     */
    public function setEntry(?CatalogDataProductAttributeMediaGalleryEntryInterface $entry) : self
    {
        $this->initialized['entry'] = true;
        $this->entry = $entry;
        return $this;
    }
}