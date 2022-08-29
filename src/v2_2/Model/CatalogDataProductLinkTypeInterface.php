<?php

namespace Kiboko\Magento\v2_2\Model;

class CatalogDataProductLinkTypeInterface
{
    /**
     * Link type code
     *
     * @var int
     */
    protected $code;
    /**
     * Link type name
     *
     * @var string
     */
    protected $name;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductLinkTypeInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Link type code
     *
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }
    /**
     * Link type code
     *
     * @param int $code
     *
     * @return self
     */
    public function setCode(int $code): self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Link type name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Link type name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
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
}
