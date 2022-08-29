<?php

namespace Kiboko\Magento\v2_2\Model;

class CatalogDataProductRenderExtensionInterface
{
    /**
     *
     *
     * @var string
     */
    protected $reviewHtml;
    /**
     * Button interface. This interface represents all manner of product buttons: add to cart, add to compare, etc... The buttons describes by this interface should have interaction with backend
     *
     * @var CatalogDataProductRenderButtonInterface
     */
    protected $wishlistButton;
    /**
     *
     *
     * @return string
     */
    public function getReviewHtml(): string
    {
        return $this->reviewHtml;
    }
    /**
     *
     *
     * @param string $reviewHtml
     *
     * @return self
     */
    public function setReviewHtml(string $reviewHtml): self
    {
        $this->reviewHtml = $reviewHtml;
        return $this;
    }
    /**
     * Button interface. This interface represents all manner of product buttons: add to cart, add to compare, etc... The buttons describes by this interface should have interaction with backend
     *
     * @return CatalogDataProductRenderButtonInterface
     */
    public function getWishlistButton(): CatalogDataProductRenderButtonInterface
    {
        return $this->wishlistButton;
    }
    /**
     * Button interface. This interface represents all manner of product buttons: add to cart, add to compare, etc... The buttons describes by this interface should have interaction with backend
     *
     * @param CatalogDataProductRenderButtonInterface $wishlistButton
     *
     * @return self
     */
    public function setWishlistButton(CatalogDataProductRenderButtonInterface $wishlistButton): self
    {
        $this->wishlistButton = $wishlistButton;
        return $this;
    }
}
