<?php

namespace Kiboko\Magento\V2_2\Model;

class TaxDataGrandTotalRatesInterface
{
    /**
     * Tax percentage value
     *
     * @var string
     */
    protected $percent;
    /**
     * Rate title
     *
     * @var string
     */
    protected $title;
    /**
     * Tax percentage value
     *
     * @return string
     */
    public function getPercent(): string
    {
        return $this->percent;
    }
    /**
     * Tax percentage value
     *
     * @param string $percent
     *
     * @return self
     */
    public function setPercent(string $percent): self
    {
        $this->percent = $percent;
        return $this;
    }
    /**
     * Rate title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * Rate title
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
