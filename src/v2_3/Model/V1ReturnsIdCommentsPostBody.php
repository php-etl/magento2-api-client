<?php

namespace Kiboko\Magento\v2_3\Model;

class V1ReturnsIdCommentsPostBody
{
    /**
     * Interface CommentInterface
     *
     * @var RmaDataCommentInterface
     */
    protected $data;
    /**
     * Interface CommentInterface
     *
     * @return RmaDataCommentInterface
     */
    public function getData() : RmaDataCommentInterface
    {
        return $this->data;
    }
    /**
     * Interface CommentInterface
     *
     * @param RmaDataCommentInterface $data
     *
     * @return self
     */
    public function setData(RmaDataCommentInterface $data) : self
    {
        $this->data = $data;
        return $this;
    }
}