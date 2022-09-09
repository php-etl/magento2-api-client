<?php

namespace Kiboko\Magento\V2_2\Model;

class AnalyticsDataLinkInterface
{
    /**
     *
     *
     * @var string|null
     */
    protected $initializationVector;
    /**
     *
     *
     * @var string|null
     */
    protected $url;
    /**
     *
     *
     * @return string|null
     */
    public function getInitializationVector(): ?string
    {
        return $this->initializationVector;
    }
    /**
     *
     *
     * @param string|null $initializationVector
     *
     * @return self
     */
    public function setInitializationVector(?string $initializationVector): self
    {
        $this->initializationVector = $initializationVector;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     *
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }
}
