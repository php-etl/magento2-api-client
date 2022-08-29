<?php

namespace Kiboko\Magento\v2_4\Model;

class GiftCardDataGiftCardOptionExtensionInterface
{
    /**
     *
     *
     * @var string[]
     */
    protected $giftcardCreatedCodes;
    /**
     *
     *
     * @return string[]
     */
    public function getGiftcardCreatedCodes(): array
    {
        return $this->giftcardCreatedCodes;
    }
    /**
     *
     *
     * @param string[] $giftcardCreatedCodes
     *
     * @return self
     */
    public function setGiftcardCreatedCodes(array $giftcardCreatedCodes): self
    {
        $this->giftcardCreatedCodes = $giftcardCreatedCodes;
        return $this;
    }
}
