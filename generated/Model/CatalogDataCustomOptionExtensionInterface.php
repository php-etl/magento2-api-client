<?php

namespace Kiboko\Magento\Model;

class CatalogDataCustomOptionExtensionInterface
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
    public function getFileInfo() : ?FrameworkDataImageContentInterface
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
    public function setFileInfo(?FrameworkDataImageContentInterface $fileInfo) : self
    {
        $this->initialized['fileInfo'] = true;
        $this->fileInfo = $fileInfo;
        return $this;
    }
}