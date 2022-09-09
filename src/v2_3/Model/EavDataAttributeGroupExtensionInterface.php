<?php

namespace Kiboko\Magento\V2_3\Model;

class EavDataAttributeGroupExtensionInterface
{
    /**
     *
     *
     * @var string|null
     */
    protected $attributeGroupCode;
    /**
     *
     *
     * @var string|null
     */
    protected $sortOrder;
    /**
     *
     *
     * @return string|null
     */
    public function getAttributeGroupCode(): ?string
    {
        return $this->attributeGroupCode;
    }
    /**
     *
     *
     * @param string|null $attributeGroupCode
     *
     * @return self
     */
    public function setAttributeGroupCode(?string $attributeGroupCode): self
    {
        $this->attributeGroupCode = $attributeGroupCode;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getSortOrder(): ?string
    {
        return $this->sortOrder;
    }
    /**
     *
     *
     * @param string|null $sortOrder
     *
     * @return self
     */
    public function setSortOrder(?string $sortOrder): self
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }
}
