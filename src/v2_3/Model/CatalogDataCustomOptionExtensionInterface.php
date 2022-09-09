<?php

namespace Kiboko\Magento\V2_3\Model;

class CatalogDataCustomOptionExtensionInterface
{
    /**
     * Image Content data interface
     *
     * @var FrameworkDataImageContentInterface|null
     */
    protected $fileInfo;
    /**
     * Image Content data interface
     *
     * @return FrameworkDataImageContentInterface|null
     */
    public function getFileInfo(): ?FrameworkDataImageContentInterface
    {
        return $this->fileInfo;
    }
    /**
     * Image Content data interface
     *
     * @param FrameworkDataImageContentInterface|null $fileInfo
     *
     * @return self
     */
    public function setFileInfo(?FrameworkDataImageContentInterface $fileInfo): self
    {
        $this->fileInfo = $fileInfo;
        return $this;
    }
}
