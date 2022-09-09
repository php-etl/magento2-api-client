<?php

namespace Kiboko\Magento\V2_1\Model;

class V1CartsMineGiftMessagePostBody
{
    /**
     * Interface MessageInterface
     *
     * @var GiftMessageDataMessageInterface|null
     */
    protected $giftMessage;
    /**
     * Interface MessageInterface
     *
     * @return GiftMessageDataMessageInterface|null
     */
    public function getGiftMessage(): ?GiftMessageDataMessageInterface
    {
        return $this->giftMessage;
    }
    /**
     * Interface MessageInterface
     *
     * @param GiftMessageDataMessageInterface|null $giftMessage
     *
     * @return self
     */
    public function setGiftMessage(?GiftMessageDataMessageInterface $giftMessage): self
    {
        $this->giftMessage = $giftMessage;
        return $this;
    }
}
