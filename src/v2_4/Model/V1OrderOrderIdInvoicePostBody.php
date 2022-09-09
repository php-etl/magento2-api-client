<?php

namespace Kiboko\Magento\V2_4\Model;

class V1OrderOrderIdInvoicePostBody
{
    /**
     *
     *
     * @var bool|null
     */
    protected $appendComment;
    /**
     * Interface for creation arguments for Invoice.
     *
     * @var SalesDataInvoiceCreationArgumentsInterface|null
     */
    protected $arguments;
    /**
     *
     *
     * @var bool|null
     */
    protected $capture;
    /**
     * Interface InvoiceCommentCreationInterface
     *
     * @var SalesDataInvoiceCommentCreationInterface|null
     */
    protected $comment;
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
     * Interface for creation arguments for Invoice.
     *
     * @return SalesDataInvoiceCreationArgumentsInterface|null
     */
    public function getArguments(): ?SalesDataInvoiceCreationArgumentsInterface
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
    public function setArguments(?SalesDataInvoiceCreationArgumentsInterface $arguments): self
    {
        $this->arguments = $arguments;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getCapture(): ?bool
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
    public function setCapture(?bool $capture): self
    {
        $this->capture = $capture;
        return $this;
    }
    /**
     * Interface InvoiceCommentCreationInterface
     *
     * @return SalesDataInvoiceCommentCreationInterface|null
     */
    public function getComment(): ?SalesDataInvoiceCommentCreationInterface
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
    public function setComment(?SalesDataInvoiceCommentCreationInterface $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     *
     *
     * @return SalesDataInvoiceItemCreationInterface[]|null
     */
    public function getItems(): ?array
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
}
