<?php

namespace Kiboko\Magento\v2_2\Model;

class V1ProductsAttributesAttributeCodePutBody
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