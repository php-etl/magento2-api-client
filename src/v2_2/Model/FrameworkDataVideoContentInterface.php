<?php

namespace Kiboko\Magento\v2_2\Model;

class FrameworkDataVideoContentInterface
{
    /**
     * MIME type
     *
     * @var string
     */
    protected $mediaType;
    /**
     * Video Description
     *
     * @var string
     */
    protected $videoDescription;
    /**
     * Metadata
     *
     * @var string
     */
    protected $videoMetadata;
    /**
     * Provider
     *
     * @var string
     */
    protected $videoProvider;
    /**
     * Title
     *
     * @var string
     */
    protected $videoTitle;
    /**
     * Video URL
     *
     * @var string
     */
    protected $videoUrl;
    /**
     * MIME type
     *
     * @return string
     */
    public function getMediaType(): string
    {
        return $this->mediaType;
    }
    /**
     * MIME type
     *
     * @param string $mediaType
     *
     * @return self
     */
    public function setMediaType(string $mediaType): self
    {
        $this->mediaType = $mediaType;
        return $this;
    }
    /**
     * Video Description
     *
     * @return string
     */
    public function getVideoDescription(): string
    {
        return $this->videoDescription;
    }
    /**
     * Video Description
     *
     * @param string $videoDescription
     *
     * @return self
     */
    public function setVideoDescription(string $videoDescription): self
    {
        $this->videoDescription = $videoDescription;
        return $this;
    }
    /**
     * Metadata
     *
     * @return string
     */
    public function getVideoMetadata(): string
    {
        return $this->videoMetadata;
    }
    /**
     * Metadata
     *
     * @param string $videoMetadata
     *
     * @return self
     */
    public function setVideoMetadata(string $videoMetadata): self
    {
        $this->videoMetadata = $videoMetadata;
        return $this;
    }
    /**
     * Provider
     *
     * @return string
     */
    public function getVideoProvider(): string
    {
        return $this->videoProvider;
    }
    /**
     * Provider
     *
     * @param string $videoProvider
     *
     * @return self
     */
    public function setVideoProvider(string $videoProvider): self
    {
        $this->videoProvider = $videoProvider;
        return $this;
    }
    /**
     * Title
     *
     * @return string
     */
    public function getVideoTitle(): string
    {
        return $this->videoTitle;
    }
    /**
     * Title
     *
     * @param string $videoTitle
     *
     * @return self
     */
    public function setVideoTitle(string $videoTitle): self
    {
        $this->videoTitle = $videoTitle;
        return $this;
    }
    /**
     * Video URL
     *
     * @return string
     */
    public function getVideoUrl(): string
    {
        return $this->videoUrl;
    }
    /**
     * Video URL
     *
     * @param string $videoUrl
     *
     * @return self
     */
    public function setVideoUrl(string $videoUrl): self
    {
        $this->videoUrl = $videoUrl;
        return $this;
    }
}
