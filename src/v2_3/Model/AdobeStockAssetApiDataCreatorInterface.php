<?php

namespace Kiboko\Magento\v2_3\Model;

class AdobeStockAssetApiDataCreatorInterface
{
    /**
     * The id
     *
     * @var int
     */
    protected $id;
    /**
     * The creator name
     *
     * @var string
     */
    protected $name;
    /**
     * ExtensionInterface class for @see \Magento\AdobeStockAssetApi\Api\Data\CreatorInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * The id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * The id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The creator name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The creator name
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
     * ExtensionInterface class for @see \Magento\AdobeStockAssetApi\Api\Data\CreatorInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\AdobeStockAssetApi\Api\Data\CreatorInterface
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
