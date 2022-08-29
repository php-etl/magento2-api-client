<?php

namespace Kiboko\Magento\v2_1\Model;

class V1ProductsSkuDownloadableLinksSamplesPostBody
{
    /**
     *
     *
     * @var DownloadableDataSampleInterface
     */
    protected $sample;
    /**
     *
     *
     * @var bool
     */
    protected $isGlobalScopeContent;
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
}
