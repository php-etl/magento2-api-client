<?php

namespace Kiboko\Magento\V2_2\Model;

class DownloadableDataLinkInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Downloadable\Api\Data\LinkInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Sample(or link) id
     *
     * @var int|null
     */
    protected $id;
    /**
     * Shareable status
     *
     * @var int|null
     */
    protected $isShareable;
    /**
     * relative file path
     *
     * @var string|null
     */
    protected $linkFile;
    /**
     *
     *
     * @var DownloadableDataFileContentInterface|null
     */
    protected $linkFileContent;
    /**
     *
     *
     * @var string|null
     */
    protected $linkType;
    /**
     * Link url or null when type is 'file'
     *
     * @var string|null
     */
    protected $linkUrl;
    /**
     * Of downloads per user
     *
     * @var int|null
     */
    protected $numberOfDownloads;
    /**
     * Price
     *
     * @var float|null
     */
    protected $price;
    /**
     * relative file path
     *
     * @var string|null
     */
    protected $sampleFile;
    /**
     *
     *
     * @var DownloadableDataFileContentInterface|null
     */
    protected $sampleFileContent;
    /**
     *
     *
     * @var string|null
     */
    protected $sampleType;
    /**
     * file URL
     *
     * @var string|null
     */
    protected $sampleUrl;
    /**
     *
     *
     * @var int|null
     */
    protected $sortOrder;
    /**
     *
     *
     * @var string|null
     */
    protected $title;
    /**
     * ExtensionInterface class for @see \Magento\Downloadable\Api\Data\LinkInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Downloadable\Api\Data\LinkInterface
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
     * Sample(or link) id
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Sample(or link) id
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Shareable status
     *
     * @return int|null
     */
    public function getIsShareable(): ?int
    {
        return $this->isShareable;
    }
    /**
     * Shareable status
     *
     * @param int|null $isShareable
     *
     * @return self
     */
    public function setIsShareable(?int $isShareable): self
    {
        $this->isShareable = $isShareable;
        return $this;
    }
    /**
     * relative file path
     *
     * @return string|null
     */
    public function getLinkFile(): ?string
    {
        return $this->linkFile;
    }
    /**
     * relative file path
     *
     * @param string|null $linkFile
     *
     * @return self
     */
    public function setLinkFile(?string $linkFile): self
    {
        $this->linkFile = $linkFile;
        return $this;
    }
    /**
     *
     *
     * @return DownloadableDataFileContentInterface|null
     */
    public function getLinkFileContent(): ?DownloadableDataFileContentInterface
    {
        return $this->linkFileContent;
    }
    /**
     *
     *
     * @param DownloadableDataFileContentInterface|null $linkFileContent
     *
     * @return self
     */
    public function setLinkFileContent(?DownloadableDataFileContentInterface $linkFileContent): self
    {
        $this->linkFileContent = $linkFileContent;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getLinkType(): ?string
    {
        return $this->linkType;
    }
    /**
     *
     *
     * @param string|null $linkType
     *
     * @return self
     */
    public function setLinkType(?string $linkType): self
    {
        $this->linkType = $linkType;
        return $this;
    }
    /**
     * Link url or null when type is 'file'
     *
     * @return string|null
     */
    public function getLinkUrl(): ?string
    {
        return $this->linkUrl;
    }
    /**
     * Link url or null when type is 'file'
     *
     * @param string|null $linkUrl
     *
     * @return self
     */
    public function setLinkUrl(?string $linkUrl): self
    {
        $this->linkUrl = $linkUrl;
        return $this;
    }
    /**
     * Of downloads per user
     *
     * @return int|null
     */
    public function getNumberOfDownloads(): ?int
    {
        return $this->numberOfDownloads;
    }
    /**
     * Of downloads per user
     *
     * @param int|null $numberOfDownloads
     *
     * @return self
     */
    public function setNumberOfDownloads(?int $numberOfDownloads): self
    {
        $this->numberOfDownloads = $numberOfDownloads;
        return $this;
    }
    /**
     * Price
     *
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Price
     *
     * @param float|null $price
     *
     * @return self
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;
        return $this;
    }
    /**
     * relative file path
     *
     * @return string|null
     */
    public function getSampleFile(): ?string
    {
        return $this->sampleFile;
    }
    /**
     * relative file path
     *
     * @param string|null $sampleFile
     *
     * @return self
     */
    public function setSampleFile(?string $sampleFile): self
    {
        $this->sampleFile = $sampleFile;
        return $this;
    }
    /**
     *
     *
     * @return DownloadableDataFileContentInterface|null
     */
    public function getSampleFileContent(): ?DownloadableDataFileContentInterface
    {
        return $this->sampleFileContent;
    }
    /**
     *
     *
     * @param DownloadableDataFileContentInterface|null $sampleFileContent
     *
     * @return self
     */
    public function setSampleFileContent(?DownloadableDataFileContentInterface $sampleFileContent): self
    {
        $this->sampleFileContent = $sampleFileContent;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getSampleType(): ?string
    {
        return $this->sampleType;
    }
    /**
     *
     *
     * @param string|null $sampleType
     *
     * @return self
     */
    public function setSampleType(?string $sampleType): self
    {
        $this->sampleType = $sampleType;
        return $this;
    }
    /**
     * file URL
     *
     * @return string|null
     */
    public function getSampleUrl(): ?string
    {
        return $this->sampleUrl;
    }
    /**
     * file URL
     *
     * @param string|null $sampleUrl
     *
     * @return self
     */
    public function setSampleUrl(?string $sampleUrl): self
    {
        $this->sampleUrl = $sampleUrl;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }
    /**
     *
     *
     * @param int|null $sortOrder
     *
     * @return self
     */
    public function setSortOrder(?int $sortOrder): self
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     *
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }
}
