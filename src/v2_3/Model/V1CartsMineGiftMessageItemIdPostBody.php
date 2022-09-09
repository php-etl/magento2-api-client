<?php

namespace Kiboko\Magento\V2_3\Model;

class V1CartsMineGiftMessageItemIdPostBody
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
