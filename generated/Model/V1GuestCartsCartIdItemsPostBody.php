<?php

namespace Kiboko\Magento\Model;

class V1GuestCartsCartIdItemsPostBody
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
     * Interface CartItemInterface
     *
     * @var QuoteDataCartItemInterface|null
     */
    protected $cartItem;
    /**
     * Interface CartItemInterface
     *
     * @return QuoteDataCartItemInterface|null
     */
    public function getCartItem() : ?QuoteDataCartItemInterface
    {
        return $this->cartItem;
    }
    /**
     * Interface CartItemInterface
     *
     * @param QuoteDataCartItemInterface|null $cartItem
     *
     * @return self
     */
    public function setCartItem(?QuoteDataCartItemInterface $cartItem) : self
    {
        $this->initialized['cartItem'] = true;
        $this->cartItem = $cartItem;
        return $this;
    }
}