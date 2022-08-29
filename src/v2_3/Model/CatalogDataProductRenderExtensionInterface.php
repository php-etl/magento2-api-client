<?php

namespace Kiboko\Magento\v2_3\Model;

class CatalogDataProductRenderExtensionInterface
{
    /**
     * Button interface. This interface represents all manner of product buttons: add to cart, add to compare, etc... The buttons describes by this interface should have interaction with backend
     *
     * @var CatalogDataProductRenderButtonInterface
     */
    protected $wishlistButton;
    /**
     * 
     *
     * @var string
     */
    protected $reviewHtml;
    /**
     * 
     *
     * @var string
     */
    protected $ddgBrand;
    /**
     * 
     *
     * @var string
     */
    protected $ddgDescription;
    /**
     * 
     *
     * @var string
     */
    protected $ddgSku;
    /**
     * 
     *
     * @var string
     */
    protected $ddgImage;
    /**
     * 
     *
     * @var string[]
     */
    protected $ddgCategories;
    /**
     * Button interface. This interface represents all manner of product buttons: add to cart, add to compare, etc... The buttons describes by this interface should have interaction with backend
     *
     * @return CatalogDataProductRenderButtonInterface
     */
    public function getWishlistButton() : CatalogDataProductRenderButtonInterface
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
    public function setWishlistButton(CatalogDataProductRenderButtonInterface $wishlistButton) : self
    {
        $this->wishlistButton = $wishlistButton;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReviewHtml() : string
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
    public function setReviewHtml(string $reviewHtml) : self
    {
        $this->reviewHtml = $reviewHtml;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDdgBrand() : string
    {
        return $this->ddgBrand;
    }
    /**
     * 
     *
     * @param string $ddgBrand
     *
     * @return self
     */
    public function setDdgBrand(string $ddgBrand) : self
    {
        $this->ddgBrand = $ddgBrand;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDdgDescription() : string
    {
        return $this->ddgDescription;
    }
    /**
     * 
     *
     * @param string $ddgDescription
     *
     * @return self
     */
    public function setDdgDescription(string $ddgDescription) : self
    {
        $this->ddgDescription = $ddgDescription;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDdgSku() : string
    {
        return $this->ddgSku;
    }
    /**
     * 
     *
     * @param string $ddgSku
     *
     * @return self
     */
    public function setDdgSku(string $ddgSku) : self
    {
        $this->ddgSku = $ddgSku;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDdgImage() : string
    {
        return $this->ddgImage;
    }
    /**
     * 
     *
     * @param string $ddgImage
     *
     * @return self
     */
    public function setDdgImage(string $ddgImage) : self
    {
        $this->ddgImage = $ddgImage;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getDdgCategories() : array
    {
        return $this->ddgCategories;
    }
    /**
     * 
     *
     * @param string[] $ddgCategories
     *
     * @return self
     */
    public function setDdgCategories(array $ddgCategories) : self
    {
        $this->ddgCategories = $ddgCategories;
        return $this;
    }
}