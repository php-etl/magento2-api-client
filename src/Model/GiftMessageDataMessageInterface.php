<?php

namespace Kiboko\Magento\Model;

class GiftMessageDataMessageInterface
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
     * Gift message ID. Otherwise, null.
     *
     * @var int|null
     */
    protected $giftMessageId;
    /**
     * Customer ID. Otherwise, null.
     *
     * @var int|null
     */
    protected $customerId;
    /**
     * Sender name.
     *
     * @var string|null
     */
    protected $sender;
    /**
     * Recipient name.
     *
     * @var string|null
     */
    protected $recipient;
    /**
     * Message text.
     *
     * @var string|null
     */
    protected $message;
    /**
     * ExtensionInterface class for @see \Magento\GiftMessage\Api\Data\MessageInterface
     *
     * @var GiftMessageDataMessageExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Gift message ID. Otherwise, null.
     *
     * @return int|null
     */
    public function getGiftMessageId() : ?int
    {
        return $this->giftMessageId;
    }
    /**
     * Gift message ID. Otherwise, null.
     *
     * @param int|null $giftMessageId
     *
     * @return self
     */
    public function setGiftMessageId(?int $giftMessageId) : self
    {
        $this->initialized['giftMessageId'] = true;
        $this->giftMessageId = $giftMessageId;
        return $this;
    }
    /**
     * Customer ID. Otherwise, null.
     *
     * @return int|null
     */
    public function getCustomerId() : ?int
    {
        return $this->customerId;
    }
    /**
     * Customer ID. Otherwise, null.
     *
     * @param int|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?int $customerId) : self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * Sender name.
     *
     * @return string|null
     */
    public function getSender() : ?string
    {
        return $this->sender;
    }
    /**
     * Sender name.
     *
     * @param string|null $sender
     *
     * @return self
     */
    public function setSender(?string $sender) : self
    {
        $this->initialized['sender'] = true;
        $this->sender = $sender;
        return $this;
    }
    /**
     * Recipient name.
     *
     * @return string|null
     */
    public function getRecipient() : ?string
    {
        return $this->recipient;
    }
    /**
     * Recipient name.
     *
     * @param string|null $recipient
     *
     * @return self
     */
    public function setRecipient(?string $recipient) : self
    {
        $this->initialized['recipient'] = true;
        $this->recipient = $recipient;
        return $this;
    }
    /**
     * Message text.
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * Message text.
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\GiftMessage\Api\Data\MessageInterface
     *
     * @return GiftMessageDataMessageExtensionInterface|null
     */
    public function getExtensionAttributes() : ?GiftMessageDataMessageExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\GiftMessage\Api\Data\MessageInterface
     *
     * @param GiftMessageDataMessageExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?GiftMessageDataMessageExtensionInterface $extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}