<?php

namespace Kiboko\Magento\V2_1\Model;

class V1OrderOrderIdInvoicePostBody
{
    /**
     *
     *
     * @var bool
     */
    protected $appendComment;
    /**
     * Interface for creation arguments for Invoice.
     *
     * @var SalesDataInvoiceCreationArgumentsInterface
     */
    protected $arguments;
    /**
     *
     *
     * @var bool
     */
    protected $capture;
    /**
     * Interface InvoiceCommentCreationInterface
     *
     * @var SalesDataInvoiceCommentCreationInterface
     */
    protected $comment;
    /**
     *
     *
     * @var SalesDataInvoiceItemCreationInterface[]
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
     * Interface for creation arguments for Invoice.
     *
     * @return SalesDataInvoiceCreationArgumentsInterface
     */
    public function getArguments(): SalesDataInvoiceCreationArgumentsInterface
    {
        return $this->arguments;
    }
    /**
     * Interface for creation arguments for Invoice.
     *
     * @param SalesDataInvoiceCreationArgumentsInterface $arguments
     *
     * @return self
     */
    public function setArguments(SalesDataInvoiceCreationArgumentsInterface $arguments): self
    {
        $this->arguments = $arguments;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getCapture(): bool
    {
        return $this->capture;
    }
    /**
     *
     *
     * @param bool $capture
     *
     * @return self
     */
    public function setCapture(bool $capture): self
    {
        $this->capture = $capture;
        return $this;
    }
    /**
     * Interface InvoiceCommentCreationInterface
     *
     * @return SalesDataInvoiceCommentCreationInterface
     */
    public function getComment(): SalesDataInvoiceCommentCreationInterface
    {
        return $this->comment;
    }
    /**
     * Interface InvoiceCommentCreationInterface
     *
     * @param SalesDataInvoiceCommentCreationInterface $comment
     *
     * @return self
     */
    public function setComment(SalesDataInvoiceCommentCreationInterface $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     *
     *
     * @return SalesDataInvoiceItemCreationInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     *
     *
     * @param SalesDataInvoiceItemCreationInterface[] $items
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
}
