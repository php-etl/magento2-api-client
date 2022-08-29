<?php

namespace Kiboko\Magento\v2_3\Model;

class V1ProductsSkuDownloadableLinksSamplesIdPutBody
{
    /**
     *
     *
     * @var bool
     */
    protected $isGlobalScopeContent;
    /**
     *
     *
     * @var DownloadableDataSampleInterface
     */
    protected $sample;
    /**
     *
     *
     * @return bool
     */
    public function getIsGlobalScopeContent(): bool
    {
        return $this->isGlobalScopeContent;
    }
    /**
     *
     *
     * @param bool $isGlobalScopeContent
     *
     * @return self
     */
    public function setIsGlobalScopeContent(bool $isGlobalScopeContent): self
    {
        $this->isGlobalScopeContent = $isGlobalScopeContent;
        return $this;
    }
    /**
     *
     *
     * @return DownloadableDataSampleInterface
     */
    public function getSample(): DownloadableDataSampleInterface
    {
        return $this->sample;
    }
    /**
     *
     *
     * @param DownloadableDataSampleInterface $sample
     *
     * @return self
     */
    public function setSample(DownloadableDataSampleInterface $sample): self
    {
        $this->sample = $sample;
        return $this;
    }
}
