<?php

namespace Kiboko\Magento\v2_4\Model;

class GiftMessageDataMessageInterface
{
    /**
     * Gift message ID. Otherwise, null.
     *
     * @var int
     */
    protected $giftMessageId;
    /**
     * Customer ID. Otherwise, null.
     *
     * @var int
     */
    protected $customerId;
    /**
     * Sender name.
     *
     * @var string
     */
    protected $sender;
    /**
     * Recipient name.
     *
     * @var string
     */
    protected $recipient;
    /**
     * Message text.
     *
     * @var string
     */
    protected $message;
    /**
     * ExtensionInterface class for @see \Magento\GiftMessage\Api\Data\MessageInterface
     *
     * @var GiftMessageDataMessageExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Gift message ID. Otherwise, null.
     *
     * @return int
     */
    public function getGiftMessageId(): int
    {
        return $this->giftMessageId;
    }
    /**
     * Gift message ID. Otherwise, null.
     *
     * @param int $giftMessageId
     *
     * @return self
     */
    public function setGiftMessageId(int $giftMessageId): self
    {
        $this->giftMessageId = $giftMessageId;
        return $this;
    }
    /**
     * Customer ID. Otherwise, null.
     *
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }
    /**
     * Customer ID. Otherwise, null.
     *
     * @param int $customerId
     *
     * @return self
     */
    public function setCustomerId(int $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * Sender name.
     *
     * @return string
     */
    public function getSender(): string
    {
        return $this->sender;
    }
    /**
     * Sender name.
     *
     * @param string $sender
     *
     * @return self
     */
    public function setSender(string $sender): self
    {
        $this->sender = $sender;
        return $this;
    }
    /**
     * Recipient name.
     *
     * @return string
     */
    public function getRecipient(): string
    {
        return $this->recipient;
    }
    /**
     * Recipient name.
     *
     * @param string $recipient
     *
     * @return self
     */
    public function setRecipient(string $recipient): self
    {
        $this->recipient = $recipient;
        return $this;
    }
    /**
     * Message text.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Message text.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\GiftMessage\Api\Data\MessageInterface
     *
     * @return GiftMessageDataMessageExtensionInterface
     */
    public function getExtensionAttributes(): GiftMessageDataMessageExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\GiftMessage\Api\Data\MessageInterface
     *
     * @param GiftMessageDataMessageExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(GiftMessageDataMessageExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
