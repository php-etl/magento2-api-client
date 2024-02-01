<?php

namespace Kiboko\Magento\Model;

class V1InvoiceInvoiceIdRefundPostBody
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
     * @var SalesDataCreditmemoItemCreationInterface[]|null
     */
    protected $items;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isOnline;
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
     * Interface CreditmemoCommentCreationInterface
     *
     * @var SalesDataCreditmemoCommentCreationInterface|null
     */
    protected $comment;
    /**
     * Interface CreditmemoCreationArgumentsInterface
     *
     * @var SalesDataCreditmemoCreationArgumentsInterface|null
     */
    protected $arguments;
    /**
     * 
     *
     * @return SalesDataCreditmemoItemCreationInterface[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param SalesDataCreditmemoItemCreationInterface[]|null $items
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
    public function getIsOnline() : ?bool
    {
        return $this->isOnline;
    }
    /**
     * 
     *
     * @param bool|null $isOnline
     *
     * @return self
     */
    public function setIsOnline(?bool $isOnline) : self
    {
        $this->initialized['isOnline'] = true;
        $this->isOnline = $isOnline;
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
     * Interface CreditmemoCommentCreationInterface
     *
     * @return SalesDataCreditmemoCommentCreationInterface|null
     */
    public function getComment() : ?SalesDataCreditmemoCommentCreationInterface
    {
        return $this->comment;
    }
    /**
     * Interface CreditmemoCommentCreationInterface
     *
     * @param SalesDataCreditmemoCommentCreationInterface|null $comment
     *
     * @return self
     */
    public function setComment(?SalesDataCreditmemoCommentCreationInterface $comment) : self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * Interface CreditmemoCreationArgumentsInterface
     *
     * @return SalesDataCreditmemoCreationArgumentsInterface|null
     */
    public function getArguments() : ?SalesDataCreditmemoCreationArgumentsInterface
    {
        return $this->arguments;
    }
    /**
     * Interface CreditmemoCreationArgumentsInterface
     *
     * @param SalesDataCreditmemoCreationArgumentsInterface|null $arguments
     *
     * @return self
     */
    public function setArguments(?SalesDataCreditmemoCreationArgumentsInterface $arguments) : self
    {
        $this->initialized['arguments'] = true;
        $this->arguments = $arguments;
        return $this;
    }
}