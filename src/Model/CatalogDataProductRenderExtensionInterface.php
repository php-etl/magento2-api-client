<?php

namespace Kiboko\Magento\Model;

class CatalogDataProductRenderExtensionInterface
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
     * @var string|null
     */
    protected $ddgBrand;
    /**
     * 
     *
     * @var string|null
     */
    protected $ddgDescription;
    /**
     * 
     *
     * @var string|null
     */
    protected $ddgSku;
    /**
     * 
     *
     * @var string|null
     */
    protected $ddgImage;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $ddgCategories;
    /**
     * 
     *
     * @return string|null
     */
    public function getReviewHtml() : ?string
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
    public function setReviewHtml(?string $reviewHtml) : self
    {
        $this->initialized['reviewHtml'] = true;
        $this->reviewHtml = $reviewHtml;
        return $this;
    }
    /**
     * Button interface. This interface represents all manner of product buttons: add to cart, add to compare, etc... The buttons describes by this interface should have interaction with backend
     *
     * @return CatalogDataProductRenderButtonInterface|null
     */
    public function getWishlistButton() : ?CatalogDataProductRenderButtonInterface
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
    public function setWishlistButton(?CatalogDataProductRenderButtonInterface $wishlistButton) : self
    {
        $this->initialized['wishlistButton'] = true;
        $this->wishlistButton = $wishlistButton;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDdgBrand() : ?string
    {
        return $this->ddgBrand;
    }
    /**
     * 
     *
     * @param string|null $ddgBrand
     *
     * @return self
     */
    public function setDdgBrand(?string $ddgBrand) : self
    {
        $this->initialized['ddgBrand'] = true;
        $this->ddgBrand = $ddgBrand;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDdgDescription() : ?string
    {
        return $this->ddgDescription;
    }
    /**
     * 
     *
     * @param string|null $ddgDescription
     *
     * @return self
     */
    public function setDdgDescription(?string $ddgDescription) : self
    {
        $this->initialized['ddgDescription'] = true;
        $this->ddgDescription = $ddgDescription;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDdgSku() : ?string
    {
        return $this->ddgSku;
    }
    /**
     * 
     *
     * @param string|null $ddgSku
     *
     * @return self
     */
    public function setDdgSku(?string $ddgSku) : self
    {
        $this->initialized['ddgSku'] = true;
        $this->ddgSku = $ddgSku;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDdgImage() : ?string
    {
        return $this->ddgImage;
    }
    /**
     * 
     *
     * @param string|null $ddgImage
     *
     * @return self
     */
    public function setDdgImage(?string $ddgImage) : self
    {
        $this->initialized['ddgImage'] = true;
        $this->ddgImage = $ddgImage;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getDdgCategories() : ?array
    {
        return $this->ddgCategories;
    }
    /**
     * 
     *
     * @param string[]|null $ddgCategories
     *
     * @return self
     */
    public function setDdgCategories(?array $ddgCategories) : self
    {
        $this->initialized['ddgCategories'] = true;
        $this->ddgCategories = $ddgCategories;
        return $this;
    }
}