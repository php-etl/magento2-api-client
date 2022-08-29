<?php

namespace Kiboko\Magento\v2_3\Model;

class CatalogDataProductAttributeMediaGalleryEntryExtensionInterface
{
    /**
     * Video Content data interface
     *
     * @var FrameworkDataVideoContentInterface
     */
    protected $videoContent;
    /**
     * Video Content data interface
     *
     * @return FrameworkDataVideoContentInterface
     */
    public function getVideoContent(): FrameworkDataVideoContentInterface
    {
        return $this->videoContent;
    }
    /**
     * Video Content data interface
     *
     * @param FrameworkDataVideoContentInterface $videoContent
     *
     * @return self
     */
    public function setVideoContent(FrameworkDataVideoContentInterface $videoContent): self
    {
        $this->videoContent = $videoContent;
        return $this;
    }
}
