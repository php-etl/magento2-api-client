<?php

namespace Kiboko\Magento\v2_3\Model;

class FrameworkMetadataObjectInterface
{
    /**
     * Code of the attribute.
     *
     * @var string
     */
    protected $attributeCode;
    /**
     * Code of the attribute.
     *
     * @return string
     */
    public function getAttributeCode() : string
    {
        return $this->attributeCode;
    }
    /**
     * Code of the attribute.
     *
     * @param string $attributeCode
     *
     * @return self
     */
    public function setAttributeCode(string $attributeCode) : self
    {
        $this->attributeCode = $attributeCode;
        return $this;
    }
}