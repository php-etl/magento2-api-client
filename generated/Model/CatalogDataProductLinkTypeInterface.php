<?php

namespace Kiboko\Magento\Model;

class CatalogDataProductLinkTypeInterface
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Link type code
     *
     * @var int|null
     */
    protected $code;
    /**
     * Link type name
     *
     * @var string|null
     */
    protected $name;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductLinkTypeInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Link type code
     *
     * @return int|null
     */
    public function getCode() : ?int
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
    public function setCode(?int $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Link type name
     *
     * @return string|null
     */
    public function getName() : ?string
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
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
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
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}