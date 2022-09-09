<?php

namespace Kiboko\Magento\V2_1\Model;

class GiftCardDataGiftCardOptionInterface
{
    /**
     * Gift card open amount value.
     *
     * @var float|null
     */
    protected $customGiftcardAmount;
    /**
     * ExtensionInterface class for @see \Magento\GiftCard\Api\Data\GiftCardOptionInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Gift card amount.
     *
     * @var string|null
     */
    protected $giftcardAmount;
    /**
     * Giftcard message.
     *
     * @var string|null
     */
    protected $giftcardMessage;
    /**
     * Gift card recipient email.
     *
     * @var string|null
     */
    protected $giftcardRecipientEmail;
    /**
     * Gift card recipient name.
     *
     * @var string|null
     */
    protected $giftcardRecipientName;
    /**
     * Gift card sender email.
     *
     * @var string|null
     */
    protected $giftcardSenderEmail;
    /**
     * Gift card sender name.
     *
     * @var string|null
     */
    protected $giftcardSenderName;
    /**
     * Gift card open amount value.
     *
     * @return float|null
     */
    public function getCustomGiftcardAmount(): ?float
    {
        return $this->customGiftcardAmount;
    }
    /**
     * Gift card open amount value.
     *
     * @param float|null $customGiftcardAmount
     *
     * @return self
     */
    public function setCustomGiftcardAmount(?float $customGiftcardAmount): self
    {
        $this->customGiftcardAmount = $customGiftcardAmount;
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
    /**
     * Gift card amount.
     *
     * @return string|null
     */
    public function getGiftcardAmount(): ?string
    {
        return $this->giftcardAmount;
    }
    /**
     * Gift card amount.
     *
     * @param string|null $giftcardAmount
     *
     * @return self
     */
    public function setGiftcardAmount(?string $giftcardAmount): self
    {
        $this->giftcardAmount = $giftcardAmount;
        return $this;
    }
    /**
     * Giftcard message.
     *
     * @return string|null
     */
    public function getGiftcardMessage(): ?string
    {
        return $this->giftcardMessage;
    }
    /**
     * Giftcard message.
     *
     * @param string|null $giftcardMessage
     *
     * @return self
     */
    public function setGiftcardMessage(?string $giftcardMessage): self
    {
        $this->giftcardMessage = $giftcardMessage;
        return $this;
    }
    /**
     * Gift card recipient email.
     *
     * @return string|null
     */
    public function getGiftcardRecipientEmail(): ?string
    {
        return $this->giftcardRecipientEmail;
    }
    /**
     * Gift card recipient email.
     *
     * @param string|null $giftcardRecipientEmail
     *
     * @return self
     */
    public function setGiftcardRecipientEmail(?string $giftcardRecipientEmail): self
    {
        $this->giftcardRecipientEmail = $giftcardRecipientEmail;
        return $this;
    }
    /**
     * Gift card recipient name.
     *
     * @return string|null
     */
    public function getGiftcardRecipientName(): ?string
    {
        return $this->giftcardRecipientName;
    }
    /**
     * Gift card recipient name.
     *
     * @param string|null $giftcardRecipientName
     *
     * @return self
     */
    public function setGiftcardRecipientName(?string $giftcardRecipientName): self
    {
        $this->giftcardRecipientName = $giftcardRecipientName;
        return $this;
    }
    /**
     * Gift card sender email.
     *
     * @return string|null
     */
    public function getGiftcardSenderEmail(): ?string
    {
        return $this->giftcardSenderEmail;
    }
    /**
     * Gift card sender email.
     *
     * @param string|null $giftcardSenderEmail
     *
     * @return self
     */
    public function setGiftcardSenderEmail(?string $giftcardSenderEmail): self
    {
        $this->giftcardSenderEmail = $giftcardSenderEmail;
        return $this;
    }
    /**
     * Gift card sender name.
     *
     * @return string|null
     */
    public function getGiftcardSenderName(): ?string
    {
        return $this->giftcardSenderName;
    }
    /**
     * Gift card sender name.
     *
     * @param string|null $giftcardSenderName
     *
     * @return self
     */
    public function setGiftcardSenderName(?string $giftcardSenderName): self
    {
        $this->giftcardSenderName = $giftcardSenderName;
        return $this;
    }
}
