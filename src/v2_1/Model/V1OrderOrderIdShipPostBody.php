<?php

namespace Kiboko\Magento\V2_1\Model;

class V1OrderOrderIdShipPostBody
{
    /**
     *
     *
     * @var bool|null
     */
    protected $appendComment;
    /**
     * Interface for creation arguments for Shipment.
     *
     * @var SalesDataShipmentCreationArgumentsInterface|null
     */
    protected $arguments;
    /**
     * Interface ShipmentCommentCreationInterface
     *
     * @var SalesDataShipmentCommentCreationInterface|null
     */
    protected $comment;
    /**
     *
     *
     * @var SalesDataShipmentItemCreationInterface[]|null
     */
    protected $items;
    /**
     *
     *
     * @var bool|null
     */
    protected $notify;
    /**
     *
     *
     * @var SalesDataShipmentPackageCreationInterface[]|null
     */
    protected $packages;
    /**
     *
     *
     * @var SalesDataShipmentTrackCreationInterface[]|null
     */
    protected $tracks;
    /**
     *
     *
     * @return bool|null
     */
    public function getAppendComment(): ?bool
    {
        return $this->appendComment;
    }
    /**
     *
     *
     * @param bool|null $appendComment
     *
     * @return self
     */
    public function setAppendComment(?bool $appendComment): self
    {
        $this->appendComment = $appendComment;
        return $this;
    }
    /**
     * Interface for creation arguments for Shipment.
     *
     * @return SalesDataShipmentCreationArgumentsInterface|null
     */
    public function getArguments(): ?SalesDataShipmentCreationArgumentsInterface
    {
        return $this->arguments;
    }
    /**
     * Interface for creation arguments for Shipment.
     *
     * @param SalesDataShipmentCreationArgumentsInterface|null $arguments
     *
     * @return self
     */
    public function setArguments(?SalesDataShipmentCreationArgumentsInterface $arguments): self
    {
        $this->arguments = $arguments;
        return $this;
    }
    /**
     * Interface ShipmentCommentCreationInterface
     *
     * @return SalesDataShipmentCommentCreationInterface|null
     */
    public function getComment(): ?SalesDataShipmentCommentCreationInterface
    {
        return $this->comment;
    }
    /**
     * Interface ShipmentCommentCreationInterface
     *
     * @param SalesDataShipmentCommentCreationInterface|null $comment
     *
     * @return self
     */
    public function setComment(?SalesDataShipmentCommentCreationInterface $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     *
     *
     * @return SalesDataShipmentItemCreationInterface[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     *
     *
     * @param SalesDataShipmentItemCreationInterface[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getNotify(): ?bool
    {
        return $this->notify;
    }
    /**
     *
     *
     * @param bool|null $notify
     *
     * @return self
     */
    public function setNotify(?bool $notify): self
    {
        $this->notify = $notify;
        return $this;
    }
    /**
     *
     *
     * @return SalesDataShipmentPackageCreationInterface[]|null
     */
    public function getPackages(): ?array
    {
        return $this->packages;
    }
    /**
     *
     *
     * @param SalesDataShipmentPackageCreationInterface[]|null $packages
     *
     * @return self
     */
    public function setPackages(?array $packages): self
    {
        $this->packages = $packages;
        return $this;
    }
    /**
     *
     *
     * @return SalesDataShipmentTrackCreationInterface[]|null
     */
    public function getTracks(): ?array
    {
        return $this->tracks;
    }
    /**
     *
     *
     * @param SalesDataShipmentTrackCreationInterface[]|null $tracks
     *
     * @return self
     */
    public function setTracks(?array $tracks): self
    {
        $this->tracks = $tracks;
        return $this;
    }
}
