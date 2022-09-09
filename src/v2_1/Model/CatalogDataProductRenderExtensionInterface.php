<?php

namespace Kiboko\Magento\V2_1\Model;

class CatalogDataProductRenderExtensionInterface
{
    /**
     *
     *
     * @var string|null
     */
    protected $reviewHtml;
    /**
     * Button interface. This interface represents all manner of product buttons: add to cart, add to compare, etc... The buttons describes by this interface should have interaction with backend
     *
     * @var CatalogDataProductRenderButtonInterface|null
     */
    protected $wishlistButton;
    /**
     *
     *
     * @return string|null
     */
    public function getReviewHtml(): ?string
    {
        return $this->reviewHtml;
    }
    /**
     *
     *
     * @param string|null $reviewHtml
     *
     * @return self
     */
    public function setReviewHtml(?string $reviewHtml): self
    {
        $this->reviewHtml = $reviewHtml;
        return $this;
    }
    /**
     * Button interface. This interface represents all manner of product buttons: add to cart, add to compare, etc... The buttons describes by this interface should have interaction with backend
     *
     * @return CatalogDataProductRenderButtonInterface|null
     */
    public function getWishlistButton(): ?CatalogDataProductRenderButtonInterface
    {
        return $this->wishlistButton;
    }
    /**
     * Button interface. This interface represents all manner of product buttons: add to cart, add to compare, etc... The buttons describes by this interface should have interaction with backend
     *
     * @param CatalogDataProductRenderButtonInterface|null $wishlistButton
     *
     * @return self
     */
    public function setWishlistButton(?CatalogDataProductRenderButtonInterface $wishlistButton): self
    {
        $this->wishlistButton = $wishlistButton;
        return $this;
    }
}
