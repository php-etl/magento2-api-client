<?php

namespace Kiboko\Magento\v2_1\Model;

class DownloadableDataLinkInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Downloadable\Api\Data\LinkInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Sample(or link) id
     *
     * @var int
     */
    protected $id;
    /**
     * Shareable status
     *
     * @var int
     */
    protected $isShareable;
    /**
     * relative file path
     *
     * @var string
     */
    protected $linkFile;
    /**
     *
     *
     * @var DownloadableDataFileContentInterface
     */
    protected $linkFileContent;
    /**
     *
     *
     * @var string
     */
    protected $linkType;
    /**
     * Link url or null when type is 'file'
     *
     * @var string
     */
    protected $linkUrl;
    /**
     * Of downloads per user
     *
     * @var int
     */
    protected $numberOfDownloads;
    /**
     * Price
     *
     * @var float
     */
    protected $price;
    /**
     * relative file path
     *
     * @var string
     */
    protected $sampleFile;
    /**
     *
     *
     * @var DownloadableDataFileContentInterface
     */
    protected $sampleFileContent;
    /**
     *
     *
     * @var string
     */
    protected $sampleType;
    /**
     * file URL
     *
     * @var string
     */
    protected $sampleUrl;
    /**
     *
     *
     * @var int
     */
    protected $sortOrder;
    /**
     *
     *
     * @var string
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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Sample(or link) id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Shareable status
     *
     * @return int
     */
    public function getIsShareable(): int
    {
        return $this->isShareable;
    }
    /**
     * Shareable status
     *
     * @param int $isShareable
     *
     * @return self
     */
    public function setIsShareable(int $isShareable): self
    {
        $this->isShareable = $isShareable;
        return $this;
    }
    /**
     * relative file path
     *
     * @return string
     */
    public function getLinkFile(): string
    {
        return $this->linkFile;
    }
    /**
     * relative file path
     *
     * @param string $linkFile
     *
     * @return self
     */
    public function setLinkFile(string $linkFile): self
    {
        $this->linkFile = $linkFile;
        return $this;
    }
    /**
     *
     *
     * @return DownloadableDataFileContentInterface
     */
    public function getLinkFileContent(): DownloadableDataFileContentInterface
    {
        return $this->linkFileContent;
    }
    /**
     *
     *
     * @param DownloadableDataFileContentInterface $linkFileContent
     *
     * @return self
     */
    public function setLinkFileContent(DownloadableDataFileContentInterface $linkFileContent): self
    {
        $this->linkFileContent = $linkFileContent;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getLinkType(): string
    {
        return $this->linkType;
    }
    /**
     *
     *
     * @param string $linkType
     *
     * @return self
     */
    public function setLinkType(string $linkType): self
    {
        $this->linkType = $linkType;
        return $this;
    }
    /**
     * Link url or null when type is 'file'
     *
     * @return string
     */
    public function getLinkUrl(): string
    {
        return $this->linkUrl;
    }
    /**
     * Link url or null when type is 'file'
     *
     * @param string $linkUrl
     *
     * @return self
     */
    public function setLinkUrl(string $linkUrl): self
    {
        $this->linkUrl = $linkUrl;
        return $this;
    }
    /**
     * Of downloads per user
     *
     * @return int
     */
    public function getNumberOfDownloads(): int
    {
        return $this->numberOfDownloads;
    }
    /**
     * Of downloads per user
     *
     * @param int $numberOfDownloads
     *
     * @return self
     */
    public function setNumberOfDownloads(int $numberOfDownloads): self
    {
        $this->numberOfDownloads = $numberOfDownloads;
        return $this;
    }
    /**
     * Price
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
    /**
     * Price
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }
    /**
     * relative file path
     *
     * @return string
     */
    public function getSampleFile(): string
    {
        return $this->sampleFile;
    }
    /**
     * relative file path
     *
     * @param string $sampleFile
     *
     * @return self
     */
    public function setSampleFile(string $sampleFile): self
    {
        $this->sampleFile = $sampleFile;
        return $this;
    }
    /**
     *
     *
     * @return DownloadableDataFileContentInterface
     */
    public function getSampleFileContent(): DownloadableDataFileContentInterface
    {
        return $this->sampleFileContent;
    }
    /**
     *
     *
     * @param DownloadableDataFileContentInterface $sampleFileContent
     *
     * @return self
     */
    public function setSampleFileContent(DownloadableDataFileContentInterface $sampleFileContent): self
    {
        $this->sampleFileContent = $sampleFileContent;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getSampleType(): string
    {
        return $this->sampleType;
    }
    /**
     *
     *
     * @param string $sampleType
     *
     * @return self
     */
    public function setSampleType(string $sampleType): self
    {
        $this->sampleType = $sampleType;
        return $this;
    }
    /**
     * file URL
     *
     * @return string
     */
    public function getSampleUrl(): string
    {
        return $this->sampleUrl;
    }
    /**
     * file URL
     *
     * @param string $sampleUrl
     *
     * @return self
     */
    public function setSampleUrl(string $sampleUrl): self
    {
        $this->sampleUrl = $sampleUrl;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getSortOrder(): int
    {
        return $this->sortOrder;
    }
    /**
     *
     *
     * @param int $sortOrder
     *
     * @return self
     */
    public function setSortOrder(int $sortOrder): self
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     *
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }
}
