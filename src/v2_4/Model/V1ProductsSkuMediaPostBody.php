<?php

namespace Kiboko\Magento\V2_4\Model;

class V1ProductsSkuMediaPostBody
{
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
    public function getEntry(): ?CatalogDataProductAttributeMediaGalleryEntryInterface
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
    public function setEntry(?CatalogDataProductAttributeMediaGalleryEntryInterface $entry): self
    {
        $this->entry = $entry;
        return $this;
    }
}
