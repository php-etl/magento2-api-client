<?php

namespace Kiboko\Magento\Model;

class V1OrderOrderIdInvoicePostBody
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
     * @var bool|null
     */
    protected $capture;
    /**
     * 
     *
     * @var SalesDataInvoiceItemCreationInterface[]|null
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
     * Interface InvoiceCommentCreationInterface
     *
     * @var SalesDataInvoiceCommentCreationInterface|null
     */
    protected $comment;
    /**
     * Interface for creation arguments for Invoice.
     *
     * @var SalesDataInvoiceCreationArgumentsInterface|null
     */
    protected $arguments;
    /**
     * 
     *
     * @return bool|null
     */
    public function getCapture() : ?bool
    {
        return $this->capture;
    }
    /**
     * 
     *
     * @param bool|null $capture
     *
     * @return self
     */
    public function setCapture(?bool $capture) : self
    {
        $this->initialized['capture'] = true;
        $this->capture = $capture;
        return $this;
    }
    /**
     * 
     *
     * @return SalesDataInvoiceItemCreationInterface[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param SalesDataInvoiceItemCreationInterface[]|null $items
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
     * Interface InvoiceCommentCreationInterface
     *
     * @return SalesDataInvoiceCommentCreationInterface|null
     */
    public function getComment() : ?SalesDataInvoiceCommentCreationInterface
    {
        return $this->comment;
    }
    /**
     * Interface InvoiceCommentCreationInterface
     *
     * @param SalesDataInvoiceCommentCreationInterface|null $comment
     *
     * @return self
     */
    public function setComment(?SalesDataInvoiceCommentCreationInterface $comment) : self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * Interface for creation arguments for Invoice.
     *
     * @return SalesDataInvoiceCreationArgumentsInterface|null
     */
    public function getArguments() : ?SalesDataInvoiceCreationArgumentsInterface
    {
        return $this->arguments;
    }
    /**
     * Interface for creation arguments for Invoice.
     *
     * @param SalesDataInvoiceCreationArgumentsInterface|null $arguments
     *
     * @return self
     */
    public function setArguments(?SalesDataInvoiceCreationArgumentsInterface $arguments) : self
    {
        $this->initialized['arguments'] = true;
        $this->arguments = $arguments;
        return $this;
    }
}