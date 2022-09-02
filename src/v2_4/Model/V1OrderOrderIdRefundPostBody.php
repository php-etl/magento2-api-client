<?php

namespace Kiboko\Magento\V2_4\Model;

class V1OrderOrderIdRefundPostBody
{
    /**
     *
     *
     * @var bool
     */
    protected $appendComment;
    /**
     * Interface CreditmemoCreationArgumentsInterface
     *
     * @var SalesDataCreditmemoCreationArgumentsInterface
     */
    protected $arguments;
    /**
     * Interface CreditmemoCommentCreationInterface
     *
     * @var SalesDataCreditmemoCommentCreationInterface
     */
    protected $comment;
    /**
     *
     *
     * @var SalesDataCreditmemoItemCreationInterface[]
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
     * Interface CreditmemoCreationArgumentsInterface
     *
     * @return SalesDataCreditmemoCreationArgumentsInterface
     */
    public function getArguments(): SalesDataCreditmemoCreationArgumentsInterface
    {
        return $this->arguments;
    }
    /**
     * Interface CreditmemoCreationArgumentsInterface
     *
     * @param SalesDataCreditmemoCreationArgumentsInterface $arguments
     *
     * @return self
     */
    public function setArguments(SalesDataCreditmemoCreationArgumentsInterface $arguments): self
    {
        $this->arguments = $arguments;
        return $this;
    }
    /**
     * Interface CreditmemoCommentCreationInterface
     *
     * @return SalesDataCreditmemoCommentCreationInterface
     */
    public function getComment(): SalesDataCreditmemoCommentCreationInterface
    {
        return $this->comment;
    }
    /**
     * Interface CreditmemoCommentCreationInterface
     *
     * @param SalesDataCreditmemoCommentCreationInterface $comment
     *
     * @return self
     */
    public function setComment(SalesDataCreditmemoCommentCreationInterface $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     *
     *
     * @return SalesDataCreditmemoItemCreationInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     *
     *
     * @param SalesDataCreditmemoItemCreationInterface[] $items
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
