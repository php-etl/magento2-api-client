<?php

namespace Kiboko\Magento\V2_1\Model;

class V1ReturnsIdTrackingNumbersPostBody
{
    /**
     * Interface TrackInterface
     *
     * @var RmaDataTrackInterface|null
     */
    protected $track;
    /**
     * Interface TrackInterface
     *
     * @return RmaDataTrackInterface|null
     */
    public function getTrack(): ?RmaDataTrackInterface
    {
        return $this->track;
    }
    /**
     * Interface TrackInterface
     *
     * @param RmaDataTrackInterface|null $track
     *
     * @return self
     */
    public function setTrack(?RmaDataTrackInterface $track): self
    {
        $this->track = $track;
        return $this;
    }
}
