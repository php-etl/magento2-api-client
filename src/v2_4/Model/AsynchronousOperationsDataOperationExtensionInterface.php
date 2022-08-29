<?php

namespace Kiboko\Magento\v2_4\Model;

class AsynchronousOperationsDataOperationExtensionInterface
{
    /**
     *
     *
     * @var string
     */
    protected $startTime;
    /**
     *
     *
     * @return string
     */
    public function getStartTime(): string
    {
        return $this->startTime;
    }
    /**
     *
     *
     * @param string $startTime
     *
     * @return self
     */
    public function setStartTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }
}
