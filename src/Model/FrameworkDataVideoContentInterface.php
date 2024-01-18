<?php

namespace Kiboko\Magento\Model;

class FrameworkDataVideoContentInterface
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
     * MIME type
     *
     * @var string|null
     */
    protected $mediaType;
    /**
     * Provider
     *
     * @var string|null
     */
    protected $videoProvider;
    /**
     * Video URL
     *
     * @var string|null
     */
    protected $videoUrl;
    /**
     * Title
     *
     * @var string|null
     */
    protected $videoTitle;
    /**
     * Video Description
     *
     * @var string|null
     */
    protected $videoDescription;
    /**
     * Metadata
     *
     * @var string|null
     */
    protected $videoMetadata;
    /**
     * MIME type
     *
     * @return string|null
     */
    public function getMediaType() : ?string
    {
        return $this->mediaType;
    }
    /**
     * MIME type
     *
     * @param string|null $mediaType
     *
     * @return self
     */
    public function setMediaType(?string $mediaType) : self
    {
        $this->initialized['mediaType'] = true;
        $this->mediaType = $mediaType;
        return $this;
    }
    /**
     * Provider
     *
     * @return string|null
     */
    public function getVideoProvider() : ?string
    {
        return $this->videoProvider;
    }
    /**
     * Provider
     *
     * @param string|null $videoProvider
     *
     * @return self
     */
    public function setVideoProvider(?string $videoProvider) : self
    {
        $this->initialized['videoProvider'] = true;
        $this->videoProvider = $videoProvider;
        return $this;
    }
    /**
     * Video URL
     *
     * @return string|null
     */
    public function getVideoUrl() : ?string
    {
        return $this->videoUrl;
    }
    /**
     * Video URL
     *
     * @param string|null $videoUrl
     *
     * @return self
     */
    public function setVideoUrl(?string $videoUrl) : self
    {
        $this->initialized['videoUrl'] = true;
        $this->videoUrl = $videoUrl;
        return $this;
    }
    /**
     * Title
     *
     * @return string|null
     */
    public function getVideoTitle() : ?string
    {
        return $this->videoTitle;
    }
    /**
     * Title
     *
     * @param string|null $videoTitle
     *
     * @return self
     */
    public function setVideoTitle(?string $videoTitle) : self
    {
        $this->initialized['videoTitle'] = true;
        $this->videoTitle = $videoTitle;
        return $this;
    }
    /**
     * Video Description
     *
     * @return string|null
     */
    public function getVideoDescription() : ?string
    {
        return $this->videoDescription;
    }
    /**
     * Video Description
     *
     * @param string|null $videoDescription
     *
     * @return self
     */
    public function setVideoDescription(?string $videoDescription) : self
    {
        $this->initialized['videoDescription'] = true;
        $this->videoDescription = $videoDescription;
        return $this;
    }
    /**
     * Metadata
     *
     * @return string|null
     */
    public function getVideoMetadata() : ?string
    {
        return $this->videoMetadata;
    }
    /**
     * Metadata
     *
     * @param string|null $videoMetadata
     *
     * @return self
     */
    public function setVideoMetadata(?string $videoMetadata) : self
    {
        $this->initialized['videoMetadata'] = true;
        $this->videoMetadata = $videoMetadata;
        return $this;
    }
}