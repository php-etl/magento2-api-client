<?php

namespace Kiboko\Magento\Model;

class CatalogDataProductAttributeMediaGalleryEntryExtensionInterface
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
     * Video Content data interface
     *
     * @var FrameworkDataVideoContentInterface|null
     */
    protected $videoContent;
    /**
     * Video Content data interface
     *
     * @return FrameworkDataVideoContentInterface|null
     */
    public function getVideoContent() : ?FrameworkDataVideoContentInterface
    {
        return $this->videoContent;
    }
    /**
     * Video Content data interface
     *
     * @param FrameworkDataVideoContentInterface|null $videoContent
     *
     * @return self
     */
    public function setVideoContent(?FrameworkDataVideoContentInterface $videoContent) : self
    {
        $this->initialized['videoContent'] = true;
        $this->videoContent = $videoContent;
        return $this;
    }
}