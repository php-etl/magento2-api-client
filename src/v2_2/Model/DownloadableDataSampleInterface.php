<?php

namespace Kiboko\Magento\V2_2\Model;

class DownloadableDataSampleInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Downloadable\Api\Data\SampleInterface
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
     * Order index for sample
     *
     * @var int|null
     */
    protected $sortOrder;
    /**
     * Title
     *
     * @var string|null
     */
    protected $title;
    /**
     * ExtensionInterface class for @see \Magento\Downloadable\Api\Data\SampleInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Downloadable\Api\Data\SampleInterface
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
     * Order index for sample
     *
     * @return int|null
     */
    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }
    /**
     * Order index for sample
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
     * Title
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Title
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
