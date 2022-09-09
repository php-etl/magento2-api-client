<?php

namespace Kiboko\Magento\V2_2\Model;

class FrameworkMetadataObjectInterface
{
    /**
     * Code of the attribute.
     *
     * @var string|null
     */
    protected $attributeCode;
    /**
     * Code of the attribute.
     *
     * @return string|null
     */
    public function getAttributeCode(): ?string
    {
        return $this->attributeCode;
    }
    /**
     * Code of the attribute.
     *
     * @param string|null $attributeCode
     *
     * @return self
     */
    public function setAttributeCode(?string $attributeCode): self
    {
        $this->attributeCode = $attributeCode;
        return $this;
    }
}
