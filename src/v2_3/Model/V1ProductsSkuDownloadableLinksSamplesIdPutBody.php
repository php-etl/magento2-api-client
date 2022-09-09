<?php

namespace Kiboko\Magento\V2_3\Model;

class V1ProductsSkuDownloadableLinksSamplesIdPutBody
{
    /**
     *
     *
     * @var bool|null
     */
    protected $isGlobalScopeContent;
    /**
     *
     *
     * @var DownloadableDataSampleInterface|null
     */
    protected $sample;
    /**
     *
     *
     * @return bool|null
     */
    public function getIsGlobalScopeContent(): ?bool
    {
        return $this->isGlobalScopeContent;
    }
    /**
     *
     *
     * @param bool|null $isGlobalScopeContent
     *
     * @return self
     */
    public function setIsGlobalScopeContent(?bool $isGlobalScopeContent): self
    {
        $this->isGlobalScopeContent = $isGlobalScopeContent;
        return $this;
    }
    /**
     *
     *
     * @return DownloadableDataSampleInterface|null
     */
    public function getSample(): ?DownloadableDataSampleInterface
    {
        return $this->sample;
    }
    /**
     *
     *
     * @param DownloadableDataSampleInterface|null $sample
     *
     * @return self
     */
    public function setSample(?DownloadableDataSampleInterface $sample): self
    {
        $this->sample = $sample;
        return $this;
    }
}
