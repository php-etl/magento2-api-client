<?php

namespace Kiboko\Magento\v2_3\Model;

class CatalogDataProductRenderInterface
{
    /**
     * Button interface. This interface represents all manner of product buttons: add to cart, add to compare, etc... The buttons describes by this interface should have interaction with backend
     *
     * @var CatalogDataProductRenderButtonInterface
     */
    protected $addToCartButton;
    /**
     * Button interface. This interface represents all manner of product buttons: add to cart, add to compare, etc... The buttons describes by this interface should have interaction with backend
     *
     * @var CatalogDataProductRenderButtonInterface
     */
    protected $addToCompareButton;
    /**
     * Price interface.
     *
     * @var CatalogDataProductRenderPriceInfoInterface
     */
    protected $priceInfo;
    /**
     * Enough information, that needed to render image on front
     *
     * @var CatalogDataProductRenderImageInterface[]
     */
    protected $images;
    /**
     * Product url
     *
     * @var string
     */
    protected $url;
    /**
     * Product identifier
     *
     * @var int
     */
    protected $id;
    /**
     * Product name
     *
     * @var string
     */
    protected $name;
    /**
     * Product type. Such as bundle, grouped, simple, etc...
     *
     * @var string
     */
    protected $type;
    /**
     * Information about product saleability (In Stock)
     *
     * @var string
     */
    protected $isSalable;
    /**
     * Information about current store id or requested store id
     *
     * @var int
     */
    protected $storeId;
    /**
     * Current or desired currency code to product
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRenderInterface
     *
     * @var CatalogDataProductRenderExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Button interface. This interface represents all manner of product buttons: add to cart, add to compare, etc... The buttons describes by this interface should have interaction with backend
     *
     * @return CatalogDataProductRenderButtonInterface
     */
    public function getAddToCartButton() : CatalogDataProductRenderButtonInterface
    {
        return $this->addToCartButton;
    }
    /**
     * Button interface. This interface represents all manner of product buttons: add to cart, add to compare, etc... The buttons describes by this interface should have interaction with backend
     *
     * @param CatalogDataProductRenderButtonInterface $addToCartButton
     *
     * @return self
     */
    public function setAddToCartButton(CatalogDataProductRenderButtonInterface $addToCartButton) : self
    {
        $this->addToCartButton = $addToCartButton;
        return $this;
    }
    /**
     * Button interface. This interface represents all manner of product buttons: add to cart, add to compare, etc... The buttons describes by this interface should have interaction with backend
     *
     * @return CatalogDataProductRenderButtonInterface
     */
    public function getAddToCompareButton() : CatalogDataProductRenderButtonInterface
    {
        return $this->addToCompareButton;
    }
    /**
     * Button interface. This interface represents all manner of product buttons: add to cart, add to compare, etc... The buttons describes by this interface should have interaction with backend
     *
     * @param CatalogDataProductRenderButtonInterface $addToCompareButton
     *
     * @return self
     */
    public function setAddToCompareButton(CatalogDataProductRenderButtonInterface $addToCompareButton) : self
    {
        $this->addToCompareButton = $addToCompareButton;
        return $this;
    }
    /**
     * Price interface.
     *
     * @return CatalogDataProductRenderPriceInfoInterface
     */
    public function getPriceInfo() : CatalogDataProductRenderPriceInfoInterface
    {
        return $this->priceInfo;
    }
    /**
     * Price interface.
     *
     * @param CatalogDataProductRenderPriceInfoInterface $priceInfo
     *
     * @return self
     */
    public function setPriceInfo(CatalogDataProductRenderPriceInfoInterface $priceInfo) : self
    {
        $this->priceInfo = $priceInfo;
        return $this;
    }
    /**
     * Enough information, that needed to render image on front
     *
     * @return CatalogDataProductRenderImageInterface[]
     */
    public function getImages() : array
    {
        return $this->images;
    }
    /**
     * Enough information, that needed to render image on front
     *
     * @param CatalogDataProductRenderImageInterface[] $images
     *
     * @return self
     */
    public function setImages(array $images) : self
    {
        $this->images = $images;
        return $this;
    }
    /**
     * Product url
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * Product url
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * Product identifier
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Product identifier
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Product name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Product name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Product type. Such as bundle, grouped, simple, etc...
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Product type. Such as bundle, grouped, simple, etc...
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Information about product saleability (In Stock)
     *
     * @return string
     */
    public function getIsSalable() : string
    {
        return $this->isSalable;
    }
    /**
     * Information about product saleability (In Stock)
     *
     * @param string $isSalable
     *
     * @return self
     */
    public function setIsSalable(string $isSalable) : self
    {
        $this->isSalable = $isSalable;
        return $this;
    }
    /**
     * Information about current store id or requested store id
     *
     * @return int
     */
    public function getStoreId() : int
    {
        return $this->storeId;
    }
    /**
     * Information about current store id or requested store id
     *
     * @param int $storeId
     *
     * @return self
     */
    public function setStoreId(int $storeId) : self
    {
        $this->storeId = $storeId;
        return $this;
    }
    /**
     * Current or desired currency code to product
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * Current or desired currency code to product
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(string $currencyCode) : self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRenderInterface
     *
     * @return CatalogDataProductRenderExtensionInterface
     */
    public function getExtensionAttributes() : CatalogDataProductRenderExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRenderInterface
     *
     * @param CatalogDataProductRenderExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(CatalogDataProductRenderExtensionInterface $extensionAttributes) : self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}