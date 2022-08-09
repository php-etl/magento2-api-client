<?php

namespace Kiboko\Magento\V2\Model;

class CatalogDataCustomOptionExtensionInterface
{
    /**
     * Image Content data interface
     *
     * @var FrameworkDataImageContentInterface
     */
    protected $fileInfo;
    /**
     * Image Content data interface
     *
     * @return FrameworkDataImageContentInterface
     */
    public function getFileInfo() : FrameworkDataImageContentInterface
    {
        return $this->fileInfo;
    }
    /**
     * Image Content data interface
     *
     * @param FrameworkDataImageContentInterface $fileInfo
     *
     * @return self
     */
    public function setFileInfo(FrameworkDataImageContentInterface $fileInfo) : self
    {
        $this->fileInfo = $fileInfo;
        return $this;
    }
}