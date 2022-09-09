<?php

namespace Kiboko\Magento\V2_2\Model;

class CatalogDataProductRenderInterface
{
    /**
     * Button interface. This interface represents all manner of product buttons: add to cart, add to compare, etc... The buttons describes by this interface should have interaction with backend
     *
     * @var CatalogDataProductRenderButtonInterface|null
     */
    protected $addToCartButton;
    /**
     * Button interface. This interface represents all manner of product buttons: add to cart, add to compare, etc... The buttons describes by this interface should have interaction with backend
     *
     * @var CatalogDataProductRenderButtonInterface|null
     */
    protected $addToCompareButton;
    /**
     * Current or desired currency code to product
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRenderInterface
     *
     * @var CatalogDataProductRenderExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Product identifier
     *
     * @var int|null
     */
    protected $id;
    /**
     * Enough information, that needed to render image on front
     *
     * @var CatalogDataProductRenderImageInterface[]|null
     */
    protected $images;
    /**
     * Information about product saleability (In Stock)
     *
     * @var string|null
     */
    protected $isSalable;
    /**
     * Product name
     *
     * @var string|null
     */
    protected $name;
    /**
     * Price interface.
     *
     * @var CatalogDataProductRenderPriceInfoInterface|null
     */
    protected $priceInfo;
    /**
     * Information about current store id or requested store id
     *
     * @var int|null
     */
    protected $storeId;
    /**
     * Product type. Such as bundle, grouped, simple, etc...
     *
     * @var string|null
     */
    protected $type;
    /**
     * Product url
     *
     * @var string|null
     */
    protected $url;
    /**
     * Button interface. This interface represents all manner of product buttons: add to cart, add to compare, etc... The buttons describes by this interface should have interaction with backend
     *
     * @return CatalogDataProductRenderButtonInterface|null
     */
    public function getAddToCartButton(): ?CatalogDataProductRenderButtonInterface
    {
        return $this->addToCartButton;
    }
    /**
     * Button interface. This interface represents all manner of product buttons: add to cart, add to compare, etc... The buttons describes by this interface should have interaction with backend
     *
     * @param CatalogDataProductRenderButtonInterface|null $addToCartButton
     *
     * @return self
     */
    public function setAddToCartButton(?CatalogDataProductRenderButtonInterface $addToCartButton): self
    {
        $this->addToCartButton = $addToCartButton;
        return $this;
    }
    /**
     * Button interface. This interface represents all manner of product buttons: add to cart, add to compare, etc... The buttons describes by this interface should have interaction with backend
     *
     * @return CatalogDataProductRenderButtonInterface|null
     */
    public function getAddToCompareButton(): ?CatalogDataProductRenderButtonInterface
    {
        return $this->addToCompareButton;
    }
    /**
     * Button interface. This interface represents all manner of product buttons: add to cart, add to compare, etc... The buttons describes by this interface should have interaction with backend
     *
     * @param CatalogDataProductRenderButtonInterface|null $addToCompareButton
     *
     * @return self
     */
    public function setAddToCompareButton(?CatalogDataProductRenderButtonInterface $addToCompareButton): self
    {
        $this->addToCompareButton = $addToCompareButton;
        return $this;
    }
    /**
     * Current or desired currency code to product
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    /**
     * Current or desired currency code to product
     *
     * @param string|null $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRenderInterface
     *
     * @return CatalogDataProductRenderExtensionInterface|null
     */
    public function getExtensionAttributes(): ?CatalogDataProductRenderExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRenderInterface
     *
     * @param CatalogDataProductRenderExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?CatalogDataProductRenderExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Product identifier
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Product identifier
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Enough information, that needed to render image on front
     *
     * @return CatalogDataProductRenderImageInterface[]|null
     */
    public function getImages(): ?array
    {
        return $this->images;
    }
    /**
     * Enough information, that needed to render image on front
     *
     * @param CatalogDataProductRenderImageInterface[]|null $images
     *
     * @return self
     */
    public function setImages(?array $images): self
    {
        $this->images = $images;
        return $this;
    }
    /**
     * Information about product saleability (In Stock)
     *
     * @return string|null
     */
    public function getIsSalable(): ?string
    {
        return $this->isSalable;
    }
    /**
     * Information about product saleability (In Stock)
     *
     * @param string|null $isSalable
     *
     * @return self
     */
    public function setIsSalable(?string $isSalable): self
    {
        $this->isSalable = $isSalable;
        return $this;
    }
    /**
     * Product name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Product name
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Price interface.
     *
     * @return CatalogDataProductRenderPriceInfoInterface|null
     */
    public function getPriceInfo(): ?CatalogDataProductRenderPriceInfoInterface
    {
        return $this->priceInfo;
    }
    /**
     * Price interface.
     *
     * @param CatalogDataProductRenderPriceInfoInterface|null $priceInfo
     *
     * @return self
     */
    public function setPriceInfo(?CatalogDataProductRenderPriceInfoInterface $priceInfo): self
    {
        $this->priceInfo = $priceInfo;
        return $this;
    }
    /**
     * Information about current store id or requested store id
     *
     * @return int|null
     */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }
    /**
     * Information about current store id or requested store id
     *
     * @param int|null $storeId
     *
     * @return self
     */
    public function setStoreId(?int $storeId): self
    {
        $this->storeId = $storeId;
        return $this;
    }
    /**
     * Product type. Such as bundle, grouped, simple, etc...
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Product type. Such as bundle, grouped, simple, etc...
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Product url
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     * Product url
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }
}
