<?php

namespace Kiboko\Magento\V2_3\Model;

class CatalogDataProductLinkAttributeInterface
{
    /**
     * Attribute code
     *
     * @var string|null
     */
    protected $code;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductLinkAttributeInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Attribute type
     *
     * @var string|null
     */
    protected $type;
    /**
     * Attribute code
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Attribute code
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductLinkAttributeInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductLinkAttributeInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Attribute type
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Attribute type
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }
}
