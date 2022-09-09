<?php

namespace Kiboko\Magento\V2_4\Model;

class CatalogDataProductAttributeMediaGalleryEntryExtensionInterface
{
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
    public function getVideoContent(): ?FrameworkDataVideoContentInterface
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
    public function setVideoContent(?FrameworkDataVideoContentInterface $videoContent): self
    {
        $this->videoContent = $videoContent;
        return $this;
    }
}
