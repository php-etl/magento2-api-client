<?php

namespace Kiboko\Magento\v2_1\Model;

class GiftCardDataGiftCardOptionInterface
{
    /**
     * Gift card amount.
     *
     * @var string
     */
    protected $giftcardAmount;
    /**
     * Gift card open amount value.
     *
     * @var float
     */
    protected $customGiftcardAmount;
    /**
     * Gift card sender name.
     *
     * @var string
     */
    protected $giftcardSenderName;
    /**
     * Gift card recipient name.
     *
     * @var string
     */
    protected $giftcardRecipientName;
    /**
     * Gift card sender email.
     *
     * @var string
     */
    protected $giftcardSenderEmail;
    /**
     * Gift card recipient email.
     *
     * @var string
     */
    protected $giftcardRecipientEmail;
    /**
     * Giftcard message.
     *
     * @var string
     */
    protected $giftcardMessage;
    /**
     * ExtensionInterface class for @see \Magento\GiftCard\Api\Data\GiftCardOptionInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Gift card amount.
     *
     * @return string
     */
    public function getGiftcardAmount(): string
    {
        return $this->giftcardAmount;
    }
    /**
     * Gift card amount.
     *
     * @param string $giftcardAmount
     *
     * @return self
     */
    public function setGiftcardAmount(string $giftcardAmount): self
    {
        $this->giftcardAmount = $giftcardAmount;
        return $this;
    }
    /**
     * Gift card open amount value.
     *
     * @return float
     */
    public function getCustomGiftcardAmount(): float
    {
        return $this->customGiftcardAmount;
    }
    /**
     * Gift card open amount value.
     *
     * @param float $customGiftcardAmount
     *
     * @return self
     */
    public function setCustomGiftcardAmount(float $customGiftcardAmount): self
    {
        $this->customGiftcardAmount = $customGiftcardAmount;
        return $this;
    }
    /**
     * Gift card sender name.
     *
     * @return string
     */
    public function getGiftcardSenderName(): string
    {
        return $this->giftcardSenderName;
    }
    /**
     * Gift card sender name.
     *
     * @param string $giftcardSenderName
     *
     * @return self
     */
    public function setGiftcardSenderName(string $giftcardSenderName): self
    {
        $this->giftcardSenderName = $giftcardSenderName;
        return $this;
    }
    /**
     * Gift card recipient name.
     *
     * @return string
     */
    public function getGiftcardRecipientName(): string
    {
        return $this->giftcardRecipientName;
    }
    /**
     * Gift card recipient name.
     *
     * @param string $giftcardRecipientName
     *
     * @return self
     */
    public function setGiftcardRecipientName(string $giftcardRecipientName): self
    {
        $this->giftcardRecipientName = $giftcardRecipientName;
        return $this;
    }
    /**
     * Gift card sender email.
     *
     * @return string
     */
    public function getGiftcardSenderEmail(): string
    {
        return $this->giftcardSenderEmail;
    }
    /**
     * Gift card sender email.
     *
     * @param string $giftcardSenderEmail
     *
     * @return self
     */
    public function setGiftcardSenderEmail(string $giftcardSenderEmail): self
    {
        $this->giftcardSenderEmail = $giftcardSenderEmail;
        return $this;
    }
    /**
     * Gift card recipient email.
     *
     * @return string
     */
    public function getGiftcardRecipientEmail(): string
    {
        return $this->giftcardRecipientEmail;
    }
    /**
     * Gift card recipient email.
     *
     * @param string $giftcardRecipientEmail
     *
     * @return self
     */
    public function setGiftcardRecipientEmail(string $giftcardRecipientEmail): self
    {
        $this->giftcardRecipientEmail = $giftcardRecipientEmail;
        return $this;
    }
    /**
     * Giftcard message.
     *
     * @return string
     */
    public function getGiftcardMessage(): string
    {
        return $this->giftcardMessage;
    }
    /**
     * Giftcard message.
     *
     * @param string $giftcardMessage
     *
     * @return self
     */
    public function setGiftcardMessage(string $giftcardMessage): self
    {
        $this->giftcardMessage = $giftcardMessage;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\GiftCard\Api\Data\GiftCardOptionInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\GiftCard\Api\Data\GiftCardOptionInterface
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
}
