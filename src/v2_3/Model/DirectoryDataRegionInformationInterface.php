<?php

namespace Kiboko\Magento\v2_3\Model;

class DirectoryDataRegionInformationInterface
{
    /**
     * Region id
     *
     * @var string
     */
    protected $id;
    /**
     * Region code
     *
     * @var string
     */
    protected $code;
    /**
     * Region name
     *
     * @var string
     */
    protected $name;
    /**
     * ExtensionInterface class for @see \Magento\Directory\Api\Data\RegionInformationInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Region id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Region id
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Region code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Region code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Region name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Region name
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
     * ExtensionInterface class for @see \Magento\Directory\Api\Data\RegionInformationInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Directory\Api\Data\RegionInformationInterface
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
