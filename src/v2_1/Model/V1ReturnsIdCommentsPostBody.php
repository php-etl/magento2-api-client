<?php

namespace Kiboko\Magento\V2_1\Model;

class V1ReturnsIdCommentsPostBody
{
    /**
     * Interface CommentInterface
     *
     * @var RmaDataCommentInterface|null
     */
    protected $data;
    /**
     * Interface CommentInterface
     *
     * @return RmaDataCommentInterface|null
     */
    public function getData(): ?RmaDataCommentInterface
    {
        return $this->data;
    }
    /**
     * Interface CommentInterface
     *
     * @param RmaDataCommentInterface|null $data
     *
     * @return self
     */
    public function setData(?RmaDataCommentInterface $data): self
    {
        $this->data = $data;
        return $this;
    }
}
