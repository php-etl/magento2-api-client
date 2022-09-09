<?php

namespace Kiboko\Magento\V2_1\Model;

class DownloadableDataDownloadableOptionInterface
{
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
    public function getDownloadableLinks(): ?array
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
    public function setDownloadableLinks(?array $downloadableLinks): self
    {
        $this->downloadableLinks = $downloadableLinks;
        return $this;
    }
}
