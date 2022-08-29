<?php

namespace Kiboko\Magento\v2_2\Model;

class V1OrderOrderIdShipPostBody
{
    /**
     *
     *
     * @var bool
     */
    protected $appendComment;
    /**
     * Interface for creation arguments for Shipment.
     *
     * @var SalesDataShipmentCreationArgumentsInterface
     */
    protected $arguments;
    /**
     * Interface ShipmentCommentCreationInterface
     *
     * @var SalesDataShipmentCommentCreationInterface
     */
    protected $comment;
    /**
     *
     *
     * @var SalesDataShipmentItemCreationInterface[]
     */
    protected $items;
    /**
     *
     *
     * @var bool
     */
    protected $notify;
    /**
     *
     *
     * @var SalesDataShipmentPackageCreationInterface[]
     */
    protected $packages;
    /**
     *
     *
     * @var SalesDataShipmentTrackCreationInterface[]
     */
    protected $tracks;
    /**
     *
     *
     * @return bool
     */
    public function getAppendComment(): bool
    {
        return $this->appendComment;
    }
    /**
     *
     *
     * @param bool $appendComment
     *
     * @return self
     */
    public function setAppendComment(bool $appendComment): self
    {
        $this->appendComment = $appendComment;
        return $this;
    }
    /**
     * Interface for creation arguments for Shipment.
     *
     * @return SalesDataShipmentCreationArgumentsInterface
     */
    public function getArguments(): SalesDataShipmentCreationArgumentsInterface
    {
        return $this->arguments;
    }
    /**
     * Interface for creation arguments for Shipment.
     *
     * @param SalesDataShipmentCreationArgumentsInterface $arguments
     *
     * @return self
     */
    public function setArguments(SalesDataShipmentCreationArgumentsInterface $arguments): self
    {
        $this->arguments = $arguments;
        return $this;
    }
    /**
     * Interface ShipmentCommentCreationInterface
     *
     * @return SalesDataShipmentCommentCreationInterface
     */
    public function getComment(): SalesDataShipmentCommentCreationInterface
    {
        return $this->comment;
    }
    /**
     * Interface ShipmentCommentCreationInterface
     *
     * @param SalesDataShipmentCommentCreationInterface $comment
     *
     * @return self
     */
    public function setComment(SalesDataShipmentCommentCreationInterface $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     *
     *
     * @return SalesDataShipmentItemCreationInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     *
     *
     * @param SalesDataShipmentItemCreationInterface[] $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getNotify(): bool
    {
        return $this->notify;
    }
    /**
     *
     *
     * @param bool $notify
     *
     * @return self
     */
    public function setNotify(bool $notify): self
    {
        $this->notify = $notify;
        return $this;
    }
    /**
     *
     *
     * @return SalesDataShipmentPackageCreationInterface[]
     */
    public function getPackages(): array
    {
        return $this->packages;
    }
    /**
     *
     *
     * @param SalesDataShipmentPackageCreationInterface[] $packages
     *
     * @return self
     */
    public function setPackages(array $packages): self
    {
        $this->packages = $packages;
        return $this;
    }
    /**
     *
     *
     * @return SalesDataShipmentTrackCreationInterface[]
     */
    public function getTracks(): array
    {
        return $this->tracks;
    }
    /**
     *
     *
     * @param SalesDataShipmentTrackCreationInterface[] $tracks
     *
     * @return self
     */
    public function setTracks(array $tracks): self
    {
        $this->tracks = $tracks;
        return $this;
    }
}
