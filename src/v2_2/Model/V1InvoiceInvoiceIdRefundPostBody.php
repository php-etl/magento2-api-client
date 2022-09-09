<?php

namespace Kiboko\Magento\V2_2\Model;

class V1InvoiceInvoiceIdRefundPostBody
{
    /**
     *
     *
     * @var bool|null
     */
    protected $appendComment;
    /**
     * Interface CreditmemoCreationArgumentsInterface
     *
     * @var SalesDataCreditmemoCreationArgumentsInterface|null
     */
    protected $arguments;
    /**
     * Interface CreditmemoCommentCreationInterface
     *
     * @var SalesDataCreditmemoCommentCreationInterface|null
     */
    protected $comment;
    /**
     *
     *
     * @var bool|null
     */
    protected $isOnline;
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
     * Interface CreditmemoCreationArgumentsInterface
     *
     * @return SalesDataCreditmemoCreationArgumentsInterface|null
     */
    public function getArguments(): ?SalesDataCreditmemoCreationArgumentsInterface
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
    public function setArguments(?SalesDataCreditmemoCreationArgumentsInterface $arguments): self
    {
        $this->arguments = $arguments;
        return $this;
    }
    /**
     * Interface CreditmemoCommentCreationInterface
     *
     * @return SalesDataCreditmemoCommentCreationInterface|null
     */
    public function getComment(): ?SalesDataCreditmemoCommentCreationInterface
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
    public function setComment(?SalesDataCreditmemoCommentCreationInterface $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIsOnline(): ?bool
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
    public function setIsOnline(?bool $isOnline): self
    {
        $this->isOnline = $isOnline;
        return $this;
    }
    /**
     *
     *
     * @return SalesDataCreditmemoItemCreationInterface[]|null
     */
    public function getItems(): ?array
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
