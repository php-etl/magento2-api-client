<?php

namespace Kiboko\Magento\V2_2\Model;

class DownloadableDataSampleInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Downloadable\Api\Data\SampleInterface
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
     * Order index for sample
     *
     * @var int
     */
    protected $sortOrder;
    /**
     * Title
     *
     * @var string
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
     * Order index for sample
     *
     * @return int
     */
    public function getSortOrder(): int
    {
        return $this->sortOrder;
    }
    /**
     * Order index for sample
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
     * Title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * Title
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
