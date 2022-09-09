<?php

namespace Kiboko\Magento\V2_1\Model;

class TaxDataGrandTotalRatesInterface
{
    /**
     * Tax percentage value
     *
     * @var string|null
     */
    protected $percent;
    /**
     * Rate title
     *
     * @var string|null
     */
    protected $title;
    /**
     * Tax percentage value
     *
     * @return string|null
     */
    public function getPercent(): ?string
    {
        return $this->percent;
    }
    /**
     * Tax percentage value
     *
     * @param string|null $percent
     *
     * @return self
     */
    public function setPercent(?string $percent): self
    {
        $this->percent = $percent;
        return $this;
    }
    /**
     * Rate title
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Rate title
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }
}
