<?php

namespace Kiboko\Magento\Model;

class V1ProductsSkuDownloadableLinksSamplesIdPutBody
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
     * 
     *
     * @var DownloadableDataSampleInterface|null
     */
    protected $sample;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isGlobalScopeContent;
    /**
     * 
     *
     * @return DownloadableDataSampleInterface|null
     */
    public function getSample() : ?DownloadableDataSampleInterface
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
    public function setSample(?DownloadableDataSampleInterface $sample) : self
    {
        $this->initialized['sample'] = true;
        $this->sample = $sample;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsGlobalScopeContent() : ?bool
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
    public function setIsGlobalScopeContent(?bool $isGlobalScopeContent) : self
    {
        $this->initialized['isGlobalScopeContent'] = true;
        $this->isGlobalScopeContent = $isGlobalScopeContent;
        return $this;
    }
}