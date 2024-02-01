<?php

namespace Kiboko\Magento\Model;

class V1OrderOrderIdShipPostBody
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
     * @var bool|null
     */
    protected $appendComment;
    /**
     * Interface ShipmentCommentCreationInterface
     *
     * @var SalesDataShipmentCommentCreationInterface|null
     */
    protected $comment;
    /**
     * 
     *
     * @var SalesDataShipmentTrackCreationInterface[]|null
     */
    protected $tracks;
    /**
     * 
     *
     * @var SalesDataShipmentPackageCreationInterface[]|null
     */
    protected $packages;
    /**
     * Interface for creation arguments for Shipment.
     *
     * @var SalesDataShipmentCreationArgumentsInterface|null
     */
    protected $arguments;
    /**
     * 
     *
     * @return SalesDataShipmentItemCreationInterface[]|null
     */
    public function getItems() : ?array
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
    public function setItems(?array $items) : self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getNotify() : ?bool
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
    public function setNotify(?bool $notify) : self
    {
        $this->initialized['notify'] = true;
        $this->notify = $notify;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getAppendComment() : ?bool
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
    public function setAppendComment(?bool $appendComment) : self
    {
        $this->initialized['appendComment'] = true;
        $this->appendComment = $appendComment;
        return $this;
    }
    /**
     * Interface ShipmentCommentCreationInterface
     *
     * @return SalesDataShipmentCommentCreationInterface|null
     */
    public function getComment() : ?SalesDataShipmentCommentCreationInterface
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
    public function setComment(?SalesDataShipmentCommentCreationInterface $comment) : self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return SalesDataShipmentTrackCreationInterface[]|null
     */
    public function getTracks() : ?array
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
    public function setTracks(?array $tracks) : self
    {
        $this->initialized['tracks'] = true;
        $this->tracks = $tracks;
        return $this;
    }
    /**
     * 
     *
     * @return SalesDataShipmentPackageCreationInterface[]|null
     */
    public function getPackages() : ?array
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
    public function setPackages(?array $packages) : self
    {
        $this->initialized['packages'] = true;
        $this->packages = $packages;
        return $this;
    }
    /**
     * Interface for creation arguments for Shipment.
     *
     * @return SalesDataShipmentCreationArgumentsInterface|null
     */
    public function getArguments() : ?SalesDataShipmentCreationArgumentsInterface
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
    public function setArguments(?SalesDataShipmentCreationArgumentsInterface $arguments) : self
    {
        $this->initialized['arguments'] = true;
        $this->arguments = $arguments;
        return $this;
    }
}