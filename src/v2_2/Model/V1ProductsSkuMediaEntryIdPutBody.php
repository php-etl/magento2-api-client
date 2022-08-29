<?php

namespace Kiboko\Magento\v2_2\Model;

class V1ProductsSkuMediaEntryIdPutBody
{
    /**
     *
     *
     * @var CatalogDataProductAttributeMediaGalleryEntryInterface
     */
    protected $entry;
    /**
     *
     *
     * @return CatalogDataProductAttributeMediaGalleryEntryInterface
     */
    public function getEntry(): CatalogDataProductAttributeMediaGalleryEntryInterface
    {
        return $this->entry;
    }
    /**
     *
     *
     * @param CatalogDataProductAttributeMediaGalleryEntryInterface $entry
     *
     * @return self
     */
    public function setEntry(CatalogDataProductAttributeMediaGalleryEntryInterface $entry): self
    {
        $this->entry = $entry;
        return $this;
    }
}