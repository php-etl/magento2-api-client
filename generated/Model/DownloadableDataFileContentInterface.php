<?php

namespace Kiboko\Magento\Model;

class DownloadableDataFileContentInterface
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
     * Data (base64 encoded content)
     *
     * @var string|null
     */
    protected $fileData;
    /**
     * File name
     *
     * @var string|null
     */
    protected $name;
    /**
     * ExtensionInterface class for @see \Magento\Downloadable\Api\Data\File\ContentInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Data (base64 encoded content)
     *
     * @return string|null
     */
    public function getFileData() : ?string
    {
        return $this->fileData;
    }
    /**
     * Data (base64 encoded content)
     *
     * @param string|null $fileData
     *
     * @return self
     */
    public function setFileData(?string $fileData) : self
    {
        $this->initialized['fileData'] = true;
        $this->fileData = $fileData;
        return $this;
    }
    /**
     * File name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * File name
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
     * ExtensionInterface class for @see \Magento\Downloadable\Api\Data\File\ContentInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Downloadable\Api\Data\File\ContentInterface
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