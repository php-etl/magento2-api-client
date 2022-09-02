<?php

namespace Kiboko\Magento\V2_3\Model;

class V1ReturnsIdTrackingNumbersPostBody
{
    /**
     * Interface TrackInterface
     *
     * @var RmaDataTrackInterface
     */
    protected $track;
    /**
     * Interface TrackInterface
     *
     * @return RmaDataTrackInterface
     */
    public function getTrack(): RmaDataTrackInterface
    {
        return $this->track;
    }
    /**
     * Interface TrackInterface
     *
     * @param RmaDataTrackInterface $track
     *
     * @return self
     */
    public function setTrack(RmaDataTrackInterface $track): self
    {
        $this->track = $track;
        return $this;
    }
}
