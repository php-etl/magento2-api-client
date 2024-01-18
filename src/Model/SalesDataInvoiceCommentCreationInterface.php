<?php

namespace Kiboko\Magento\Model;

class SalesDataInvoiceCommentCreationInterface
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
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceCommentCreationInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Comment.
     *
     * @var string|null
     */
    protected $comment;
    /**
     * Is-visible-on-storefront flag value.
     *
     * @var int|null
     */
    protected $isVisibleOnFront;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceCommentCreationInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceCommentCreationInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Comment.
     *
     * @return string|null
     */
    public function getComment() : ?string
    {
        return $this->comment;
    }
    /**
     * Comment.
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment) : self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * Is-visible-on-storefront flag value.
     *
     * @return int|null
     */
    public function getIsVisibleOnFront() : ?int
    {
        return $this->isVisibleOnFront;
    }
    /**
     * Is-visible-on-storefront flag value.
     *
     * @param int|null $isVisibleOnFront
     *
     * @return self
     */
    public function setIsVisibleOnFront(?int $isVisibleOnFront) : self
    {
        $this->initialized['isVisibleOnFront'] = true;
        $this->isVisibleOnFront = $isVisibleOnFront;
        return $this;
    }
}