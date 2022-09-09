<?php

namespace Kiboko\Magento\V2_2\Model;

class CatalogDataProductLinkTypeInterface
{
    /**
     * Link type code
     *
     * @var int|null
     */
    protected $code;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductLinkTypeInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Link type name
     *
     * @var string|null
     */
    protected $name;
    /**
     * Link type code
     *
     * @return int|null
     */
    public function getCode(): ?int
    {
        return $this->code;
    }
    /**
     * Link type code
     *
     * @param int|null $code
     *
     * @return self
     */
    public function setCode(?int $code): self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductLinkTypeInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductLinkTypeInterface
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
     * Link type name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Link type name
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
