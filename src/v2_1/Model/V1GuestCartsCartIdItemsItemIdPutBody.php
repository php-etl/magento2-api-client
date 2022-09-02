<?php

namespace Kiboko\Magento\V2_1\Model;

class V1GuestCartsCartIdItemsItemIdPutBody
{
    /**
     * Interface CartItemInterface
     *
     * @var QuoteDataCartItemInterface
     */
    protected $cartItem;
    /**
     * Interface CartItemInterface
     *
     * @return QuoteDataCartItemInterface
     */
    public function getCartItem(): QuoteDataCartItemInterface
    {
        return $this->cartItem;
    }
    /**
     * Interface CartItemInterface
     *
     * @param QuoteDataCartItemInterface $cartItem
     *
     * @return self
     */
    public function setCartItem(QuoteDataCartItemInterface $cartItem): self
    {
        $this->cartItem = $cartItem;
        return $this;
    }
}
