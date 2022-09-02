<?php

namespace Kiboko\Magento\V2_1\Model;

class V1ProductsAttributesPostBody
{
    /**
     *
     *
     * @var CatalogDataProductAttributeInterface
     */
    protected $attribute;
    /**
     *
     *
     * @return CatalogDataProductAttributeInterface
     */
    public function getAttribute(): CatalogDataProductAttributeInterface
    {
        return $this->attribute;
    }
    /**
     *
     *
     * @param CatalogDataProductAttributeInterface $attribute
     *
     * @return self
     */
    public function setAttribute(CatalogDataProductAttributeInterface $attribute): self
    {
        $this->attribute = $attribute;
        return $this;
    }
}
