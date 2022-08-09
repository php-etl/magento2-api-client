<?php

namespace Kiboko\Magento\V2\Model;

class SalesDataShipmentCommentCreationInterface
{
    /**
     * Comment.
     *
     * @var string
     */
    protected $comment;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentCommentCreationInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Is-visible-on-storefront flag value.
     *
     * @var int
     */
    protected $isVisibleOnFront;
    /**
     * Comment.
     *
     * @return string
     */
    public function getComment() : string
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
    public function setComment(string $comment) : self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentCommentCreationInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentCommentCreationInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Is-visible-on-storefront flag value.
     *
     * @return int
     */
    public function getIsVisibleOnFront() : int
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
    public function setIsVisibleOnFront(int $isVisibleOnFront) : self
    {
        $this->isVisibleOnFront = $isVisibleOnFront;
        return $this;
    }
}