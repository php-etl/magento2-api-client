<?php

namespace Kiboko\Magento\Model;

class DownloadableDataDownloadableOptionInterface
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
     * The list of downloadable links
     *
     * @var int[]|null
     */
    protected $downloadableLinks;
    /**
     * The list of downloadable links
     *
     * @return int[]|null
     */
    public function getDownloadableLinks() : ?array
    {
        return $this->downloadableLinks;
    }
    /**
     * The list of downloadable links
     *
     * @param int[]|null $downloadableLinks
     *
     * @return self
     */
    public function setDownloadableLinks(?array $downloadableLinks) : self
    {
        $this->initialized['downloadableLinks'] = true;
        $this->downloadableLinks = $downloadableLinks;
        return $this;
    }
}