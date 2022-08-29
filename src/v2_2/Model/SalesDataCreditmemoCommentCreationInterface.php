<?php

namespace Kiboko\Magento\v2_2\Model;

class SalesDataCreditmemoCommentCreationInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\CreditmemoCommentCreationInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Comment.
     *
     * @var string
     */
    protected $comment;
    /**
     * Is-visible-on-storefront flag value.
     *
     * @var int
     */
    protected $isVisibleOnFront;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\CreditmemoCommentCreationInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\CreditmemoCommentCreationInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Comment.
     *
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }
    /**
     * Comment.
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * Is-visible-on-storefront flag value.
     *
     * @return int
     */
    public function getIsVisibleOnFront(): int
    {
        return $this->isVisibleOnFront;
    }
    /**
     * Is-visible-on-storefront flag value.
     *
     * @param int $isVisibleOnFront
     *
     * @return self
     */
    public function setIsVisibleOnFront(int $isVisibleOnFront): self
    {
        $this->isVisibleOnFront = $isVisibleOnFront;
        return $this;
    }
}
