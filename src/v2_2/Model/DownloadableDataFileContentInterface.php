<?php

namespace Kiboko\Magento\V2_2\Model;

class DownloadableDataFileContentInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Downloadable\Api\Data\File\ContentInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
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
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Data (base64 encoded content)
     *
     * @return string|null
     */
    public function getFileData(): ?string
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
    public function setFileData(?string $fileData): self
    {
        $this->fileData = $fileData;
        return $this;
    }
    /**
     * File name
     *
     * @return string|null
     */
    public function getName(): ?string
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
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
