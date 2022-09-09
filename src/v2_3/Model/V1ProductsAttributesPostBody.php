<?php

namespace Kiboko\Magento\V2_3\Model;

class V1ProductsAttributesPostBody
{
    /**
     *
     *
     * @var CatalogDataProductAttributeInterface|null
     */
    protected $attribute;
    /**
     *
     *
     * @return CatalogDataProductAttributeInterface|null
     */
    public function getAttribute(): ?CatalogDataProductAttributeInterface
    {
        return $this->attribute;
    }
    /**
     *
     *
     * @param CatalogDataProductAttributeInterface|null $attribute
     *
     * @return self
     */
    public function setAttribute(?CatalogDataProductAttributeInterface $attribute): self
    {
        $this->attribute = $attribute;
        return $this;
    }
}
