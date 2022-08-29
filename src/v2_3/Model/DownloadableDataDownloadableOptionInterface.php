<?php

namespace Kiboko\Magento\v2_3\Model;

class DownloadableDataDownloadableOptionInterface
{
    /**
     * The list of downloadable links
     *
     * @var int[]
     */
    protected $downloadableLinks;
    /**
     * The list of downloadable links
     *
     * @return int[]
     */
    public function getDownloadableLinks(): array
    {
        return $this->downloadableLinks;
    }
    /**
     * The list of downloadable links
     *
     * @param int[] $downloadableLinks
     *
     * @return self
     */
    public function setDownloadableLinks(array $downloadableLinks): self
    {
        $this->downloadableLinks = $downloadableLinks;
        return $this;
    }
}
