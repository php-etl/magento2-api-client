<?php

namespace Kiboko\Magento\v2_3\Model;

class AnalyticsDataLinkInterface
{
    /**
     *
     *
     * @var string
     */
    protected $url;
    /**
     *
     *
     * @var string
     */
    protected $initializationVector;
    /**
     *
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     *
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getInitializationVector(): string
    {
        return $this->initializationVector;
    }
    /**
     *
     *
     * @param string $initializationVector
     *
     * @return self
     */
    public function setInitializationVector(string $initializationVector): self
    {
        $this->initializationVector = $initializationVector;
        return $this;
    }
}
