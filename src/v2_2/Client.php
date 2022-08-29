<?php

namespace Kiboko\Magento\v2_2;

class Client extends \Kiboko\Magento\v2_2\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAddressRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAddressRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAddressRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerAddressRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function amazonPaymentAddressManagementV1GetBillingAddressPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\AmazonPaymentAddressManagementV1GetBillingAddressPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function amazonPaymentAddressManagementV1GetShippingAddressPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\AmazonPaymentAddressManagementV1GetShippingAddressPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function amazonPaymentOrderInformationManagementV1RemoveOrderReferenceDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\AmazonPaymentOrderInformationManagementV1RemoveOrderReferenceDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\AnalyticsLinkProviderV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function analyticsLinkProviderV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\AnalyticsLinkProviderV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerMetadataV1GetAllAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerMetadataV1GetAllAttributesMetadataGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerMetadataV1GetAllAttributesMetadataGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerCustomerMetadataV1GetAllAttributesMetadataGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerMetadataV1GetAttributeMetadataGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerMetadataV1GetAttributeMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerMetadataV1GetAttributeMetadataGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerMetadataV1GetAttributeMetadataGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerCustomerMetadataV1GetAttributeMetadataGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerMetadataV1GetCustomAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerMetadataV1GetCustomAttributesMetadataGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerMetadataV1GetCustomAttributesMetadataGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerCustomerMetadataV1GetCustomAttributesMetadataGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerMetadataV1GetAttributesGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerMetadataV1GetAttributesGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerMetadataV1GetAttributesGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerCustomerMetadataV1GetAttributesGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAddressMetadataV1GetAllAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAddressMetadataV1GetAllAttributesMetadataGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressMetadataV1GetAllAttributesMetadataGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerAddressMetadataV1GetAllAttributesMetadataGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAddressMetadataV1GetAttributeMetadataGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAddressMetadataV1GetAttributeMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAddressMetadataV1GetAttributeMetadataGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressMetadataV1GetAttributeMetadataGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerAddressMetadataV1GetAttributeMetadataGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAddressMetadataV1GetCustomAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAddressMetadataV1GetCustomAttributesMetadataGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressMetadataV1GetCustomAttributesMetadataGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerAddressMetadataV1GetCustomAttributesMetadataGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAddressMetadataV1GetAttributesGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAddressMetadataV1GetAttributesGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressMetadataV1GetAttributesGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerAddressMetadataV1GetAttributesGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\AsynchronousOperationsBulkStatusV1GetBulkDetailedStatusGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\AsynchronousOperationsBulkStatusV1GetBulkDetailedStatusGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function asynchronousOperationsBulkStatusV1GetBulkDetailedStatusGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\AsynchronousOperationsBulkStatusV1GetBulkDetailedStatusGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\AsynchronousOperationsBulkStatusV1GetOperationsCountByBulkIdAndStatusGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function asynchronousOperationsBulkStatusV1GetOperationsCountByBulkIdAndStatusGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\AsynchronousOperationsBulkStatusV1GetOperationsCountByBulkIdAndStatusGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\AsynchronousOperationsBulkStatusV1GetBulkShortStatusGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\AsynchronousOperationsBulkStatusV1GetBulkShortStatusGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function asynchronousOperationsBulkStatusV1GetBulkShortStatusGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\AsynchronousOperationsBulkStatusV1GetBulkShortStatusGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductOptionManagementV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductOptionManagementV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionManagementV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\BundleProductOptionManagementV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductOptionTypeListV1GetItemsGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionTypeListV1GetItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\BundleProductOptionTypeListV1GetItemsGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductOptionManagementV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductOptionManagementV1SavePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionManagementV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\BundleProductOptionManagementV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductLinkManagementV1GetChildrenGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductLinkManagementV1GetChildrenGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductLinkManagementV1GetChildrenGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\BundleProductLinkManagementV1GetChildrenGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductLinkManagementV1SaveChildPutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductLinkManagementV1SaveChildPutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductLinkManagementV1SaveChildPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\BundleProductLinkManagementV1SaveChildPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductLinkManagementV1AddChildByProductSkuPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductLinkManagementV1AddChildByProductSkuPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductLinkManagementV1AddChildByProductSkuPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\BundleProductLinkManagementV1AddChildByProductSkuPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductOptionRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductOptionRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\BundleProductOptionRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductOptionRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductOptionRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\BundleProductOptionRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductOptionRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductOptionRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\BundleProductOptionRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductLinkManagementV1RemoveChildDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\BundleProductLinkManagementV1RemoveChildDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductLinkManagementV1RemoveChildDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\BundleProductLinkManagementV1RemoveChildDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartManagementV1CreateEmptyCartPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartManagementV1CreateEmptyCartPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1CreateEmptyCartPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteCartManagementV1CreateEmptyCartPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GiftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CheckoutAgreementsCheckoutAgreementsRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutAgreementsCheckoutAgreementsRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CheckoutAgreementsCheckoutAgreementsRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartManagementV1GetCartForCustomerGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartManagementV1GetCartForCustomerGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1GetCartForCustomerGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteCartManagementV1GetCartForCustomerGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartManagementV1CreateEmptyCartForCustomerPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartManagementV1CreateEmptyCartForCustomerPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1CreateEmptyCartForCustomerPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteCartManagementV1CreateEmptyCartForCustomerPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteCartRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerBalanceBalanceManagementFromQuoteV1ApplyPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerBalanceBalanceManagementFromQuoteV1ApplyPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerBalanceBalanceManagementFromQuoteV1ApplyPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerBalanceBalanceManagementFromQuoteV1UnapplyPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerBalanceBalanceManagementFromQuoteV1UnapplyPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerBalanceBalanceManagementFromQuoteV1UnapplyPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteBillingAddressManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteBillingAddressManagementV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteBillingAddressManagementV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteBillingAddressManagementV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteBillingAddressManagementV1AssignPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteBillingAddressManagementV1AssignPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteBillingAddressManagementV1AssignPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteBillingAddressManagementV1AssignPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GiftCardAccountGiftCardAccountManagementV1CheckGiftCardGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\GiftCardAccountGiftCardAccountManagementV1CheckGiftCardGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1CheckGiftCardGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftCardAccountGiftCardAccountManagementV1CheckGiftCardGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TemandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartTotalManagementV1CollectTotalsPutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartTotalManagementV1CollectTotalsPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteCartTotalManagementV1CollectTotalsPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1DeleteSearchRequestDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1DeleteSearchRequestDeleteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointCartCollectionPointManagementV1DeleteSearchRequestDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TemandoShippingCollectionPointCartCollectionPointManagementV1DeleteSearchRequestDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TemandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1GetCollectionPointsGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointCartCollectionPointManagementV1GetCollectionPointsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TemandoShippingCollectionPointCartCollectionPointManagementV1GetCollectionPointsGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TemandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCouponManagementV1RemoveDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCouponManagementV1RemoveDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1RemoveDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteCouponManagementV1RemoveDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCouponManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCouponManagementV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteCouponManagementV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCouponManagementV1SetPutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCouponManagementV1SetPutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1SetPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteCouponManagementV1SetPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingQuoteCartDeliveryOptionManagementV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingQuoteCartDeliveryOptionManagementV1SavePostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingQuoteCartDeliveryOptionManagementV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TemandoShippingQuoteCartDeliveryOptionManagementV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteShipmentEstimationV1EstimateByExtendedAddressPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShipmentEstimationV1EstimateByExtendedAddressPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteShipmentEstimationV1EstimateByExtendedAddressPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteShippingMethodManagementV1EstimateByAddressIdPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShippingMethodManagementV1EstimateByAddressIdPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteShippingMethodManagementV1EstimateByAddressIdPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GiftMessageCartRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageCartRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftMessageCartRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GiftMessageCartRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\GiftMessageCartRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageCartRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftMessageCartRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GiftMessageItemRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\GiftMessageItemRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageItemRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftMessageItemRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GiftMessageItemRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\GiftMessageItemRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageItemRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftMessageItemRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GiftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartItemRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartItemRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteCartItemRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartItemRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartItemRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteCartItemRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartItemRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartItemRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteCartItemRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartItemRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartItemRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteCartItemRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartManagementV1PlaceOrderPutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartManagementV1PlaceOrderPutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1PlaceOrderPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteCartManagementV1PlaceOrderPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CheckoutPaymentInformationManagementV1GetPaymentInformationGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutPaymentInformationManagementV1GetPaymentInformationGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CheckoutPaymentInformationManagementV1GetPaymentInformationGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuotePaymentMethodManagementV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\QuotePaymentMethodManagementV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuotePaymentMethodManagementV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuotePaymentMethodManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\QuotePaymentMethodManagementV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuotePaymentMethodManagementV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuotePaymentMethodManagementV1SetPutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\QuotePaymentMethodManagementV1SetPutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1SetPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuotePaymentMethodManagementV1SetPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutPaymentInformationManagementV1SavePaymentInformationPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CheckoutPaymentInformationManagementV1SavePaymentInformationPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CheckoutShippingInformationManagementV1SaveAddressInformationPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutShippingInformationManagementV1SaveAddressInformationPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CheckoutShippingInformationManagementV1SaveAddressInformationPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteShippingMethodManagementV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteShippingMethodManagementV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShippingMethodManagementV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteShippingMethodManagementV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartTotalRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartTotalRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartTotalRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteCartTotalRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CheckoutTotalsInformationManagementV1CalculatePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutTotalsInformationManagementV1CalculatePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CheckoutTotalsInformationManagementV1CalculatePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteCartRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteCartRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteCartManagementV1AssignCustomerPutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1AssignCustomerPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteCartManagementV1AssignCustomerPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CartsByCartIdBillingAddressBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CartsByCartIdBillingAddressUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsByCartIdBillingAddress(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GetV1CartsByCartIdBillingAddress(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\PostV1CartsByCartIdBillingAddressBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\PostV1CartsByCartIdBillingAddressUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsByCartIdBillingAddress(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\PostV1CartsByCartIdBillingAddress(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\DeleteV1CartsByCartIdCouponBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\DeleteV1CartsByCartIdCouponUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1CartsByCartIdCoupon(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\DeleteV1CartsByCartIdCoupon(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CartsByCartIdCouponBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CartsByCartIdCouponUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsByCartIdCoupon(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GetV1CartsByCartIdCoupon(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\PutV1CartsByCartIdCouponByCouponCodeBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\PutV1CartsByCartIdCouponByCouponCodeUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CartsByCartIdCouponByCouponCode(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\PutV1CartsByCartIdCouponByCouponCode(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\PostV1CartsByCartIdEstimateShippingMethodUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsByCartIdEstimateShippingMethod(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\PostV1CartsByCartIdEstimateShippingMethod(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\PostV1CartsByCartIdEstimateShippingMethodsByAddressIdUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsByCartIdEstimateShippingMethodsByAddressId(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\PostV1CartsByCartIdEstimateShippingMethodsByAddressId(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CartsByCartIdGiftMessageUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsByCartIdGiftMessage(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GetV1CartsByCartIdGiftMessage(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\PostV1CartsByCartIdGiftMessageBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\PostV1CartsByCartIdGiftMessageUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsByCartIdGiftMessage(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\PostV1CartsByCartIdGiftMessage(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CartsByCartIdGiftMessageByItemIdBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CartsByCartIdGiftMessageByItemIdUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsByCartIdGiftMessageByItemId(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GetV1CartsByCartIdGiftMessageByItemId(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\PostV1CartsByCartIdGiftMessageByItemIdBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\PostV1CartsByCartIdGiftMessageByItemIdUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsByCartIdGiftMessageByItemId(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\PostV1CartsByCartIdGiftMessageByItemId(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\DeleteV1CartsByCartIdGiftCardByGiftCardCodeUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1CartsByCartIdGiftCardByGiftCardCode(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\DeleteV1CartsByCartIdGiftCardByGiftCardCode(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CartsByCartIdItemBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CartsByCartIdItemUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsByCartIdItem(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GetV1CartsByCartIdItem(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\DeleteV1CartsByCartIdItemByItemIdBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\DeleteV1CartsByCartIdItemByItemIdUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1CartsByCartIdItemByItemId(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\DeleteV1CartsByCartIdItemByItemId(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\PutV1CartsByCartIdItemByItemIdBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\PutV1CartsByCartIdItemByItemIdUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CartsByCartIdItemByItemId(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\PutV1CartsByCartIdItemByItemId(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\PutV1CartsByCartIdOrderBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\PutV1CartsByCartIdOrderUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CartsByCartIdOrder(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\PutV1CartsByCartIdOrder(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CartsByCartIdPaymentMethodBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CartsByCartIdPaymentMethodUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsByCartIdPaymentMethod(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GetV1CartsByCartIdPaymentMethod(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CartsByCartIdSelectedPaymentMethodBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CartsByCartIdSelectedPaymentMethodUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsByCartIdSelectedPaymentMethod(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GetV1CartsByCartIdSelectedPaymentMethod(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\PutV1CartsByCartIdSelectedPaymentMethodBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\PutV1CartsByCartIdSelectedPaymentMethodUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CartsByCartIdSelectedPaymentMethod(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\PutV1CartsByCartIdSelectedPaymentMethod(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\PostV1CartsByCartIdShippingInformationUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsByCartIdShippingInformation(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\PostV1CartsByCartIdShippingInformation(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CartsByCartIdShippingMethodBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CartsByCartIdShippingMethodUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsByCartIdShippingMethod(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GetV1CartsByCartIdShippingMethod(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CartsByCartIdTotalBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CartsByCartIdTotalUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsByCartIdTotal(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GetV1CartsByCartIdTotal(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\PostV1CartsByCartIdTotalsInformationUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsByCartIdTotalsInformation(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\PostV1CartsByCartIdTotalsInformation(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GiftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\PostV1CartsByQuoteIdItemBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\PostV1CartsByQuoteIdItemUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsByQuoteIdItem(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\PostV1CartsByQuoteIdItem(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryManagementV1GetTreeGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryManagementV1GetTreeGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryManagementV1GetTreeGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogCategoryManagementV1GetTreeGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogCategoryRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryAttributeRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryAttributeRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogCategoryAttributeRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryAttributeRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryAttributeRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogCategoryAttributeRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryAttributeOptionManagementV1GetItemsGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryAttributeOptionManagementV1GetItemsGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryAttributeOptionManagementV1GetItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogCategoryAttributeOptionManagementV1GetItemsGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryListV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryListV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogCategoryListV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryRepositoryV1DeleteByIdentifierDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryRepositoryV1DeleteByIdentifierDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryRepositoryV1DeleteByIdentifierDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogCategoryRepositoryV1DeleteByIdentifierDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogCategoryRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryManagementV1MovePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryManagementV1MovePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryManagementV1MovePutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryManagementV1MovePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogCategoryManagementV1MovePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryLinkManagementV1GetAssignedProductsGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryLinkManagementV1GetAssignedProductsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogCategoryLinkManagementV1GetAssignedProductsGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryLinkRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryLinkRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryLinkRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogCategoryLinkRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryLinkRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryLinkRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryLinkRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogCategoryLinkRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryLinkRepositoryV1DeleteByIdsDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryLinkRepositoryV1DeleteByIdsDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryLinkRepositoryV1DeleteByIdsDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogCategoryLinkRepositoryV1DeleteByIdsDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCategoryRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogCategoryRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CmsBlockRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CmsBlockRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CmsBlockRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CmsBlockRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CmsBlockRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CmsBlockRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CmsBlockRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CmsBlockRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CmsBlockRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CmsBlockRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CmsBlockRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CmsBlockRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1GetByIdGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CmsBlockRepositoryV1GetByIdGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CmsBlockRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CmsBlockRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CmsBlockRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CmsPageRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CmsPageRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CmsPageRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CmsPageRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CmsPageRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CmsPageRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CmsPageRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CmsPageRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CmsPageRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CmsPageRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CmsPageRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CmsPageRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CmsPageRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CmsPageRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CmsPageRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1GetByIdGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CmsPageRepositoryV1GetByIdGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCompanyRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCompanyRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyCompanyRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyCompanyRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCompanyRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCompanyRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyCompanyRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyCompanyRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyAclV1AssignRolesPutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyAclV1AssignRolesPutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyAclV1AssignRolesPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyAclV1AssignRolesPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyRoleRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyRoleRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyRoleRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyRoleRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyRoleRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyRoleRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyRoleRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyRoleRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyRoleRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyRoleRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyRoleRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyRoleRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyRoleRepositoryV1DeleteDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyRoleRepositoryV1DeleteDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyRoleRepositoryV1DeleteDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyRoleRepositoryV1DeleteDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyRoleRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyRoleRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyRoleRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyRoleRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyAclV1GetUsersByRoleIdGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyAclV1GetUsersByRoleIdGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyAclV1GetUsersByRoleIdGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCompanyRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCompanyRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyCompanyRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyCompanyRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCompanyRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCompanyRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyCompanyRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyCompanyRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCompanyRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCompanyRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyCompanyRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyCompanyRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCreditCreditLimitRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCreditCreditLimitRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditLimitRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyCreditCreditLimitRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCreditCreditLimitManagementV1GetCreditByCompanyIdGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditLimitManagementV1GetCreditByCompanyIdGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyCreditCreditLimitManagementV1GetCreditByCompanyIdGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCreditCreditHistoryManagementV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCreditCreditHistoryManagementV1GetListGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditHistoryManagementV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyCreditCreditHistoryManagementV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCreditCreditHistoryManagementV1UpdatePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCreditCreditHistoryManagementV1UpdatePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditHistoryManagementV1UpdatePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyCreditCreditHistoryManagementV1UpdatePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCreditCreditLimitRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCreditCreditLimitRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditLimitRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyCreditCreditLimitRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCreditCreditBalanceManagementV1DecreasePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditBalanceManagementV1DecreasePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyCreditCreditBalanceManagementV1DecreasePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCreditCreditBalanceManagementV1IncreasePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditBalanceManagementV1IncreasePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyCreditCreditBalanceManagementV1IncreasePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCreditCreditLimitRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCreditCreditLimitRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCreditCreditLimitRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditLimitRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyCreditCreditLimitRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\ConfigurableProductConfigurableProductManagementV1GenerateVariationPutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductConfigurableProductManagementV1GenerateVariationPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\ConfigurableProductConfigurableProductManagementV1GenerateVariationPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\ConfigurableProductLinkManagementV1AddChildPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductLinkManagementV1AddChildPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\ConfigurableProductLinkManagementV1AddChildPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\ConfigurableProductLinkManagementV1GetChildrenGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductLinkManagementV1GetChildrenGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\ConfigurableProductLinkManagementV1GetChildrenGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\ConfigurableProductLinkManagementV1RemoveChildDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\ConfigurableProductLinkManagementV1RemoveChildDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductLinkManagementV1RemoveChildDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\ConfigurableProductLinkManagementV1RemoveChildDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\ConfigurableProductOptionRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\ConfigurableProductOptionRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\ConfigurableProductOptionRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\ConfigurableProductOptionRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\ConfigurableProductOptionRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\ConfigurableProductOptionRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\ConfigurableProductOptionRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\ConfigurableProductOptionRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\ConfigurableProductOptionRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\ConfigurableProductOptionRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\ConfigurableProductOptionRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\ConfigurableProductOptionRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\ConfigurableProductOptionRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\ConfigurableProductOptionRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\ConfigurableProductOptionRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\ConfigurableProductOptionRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\ConfigurableProductOptionRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesRuleCouponRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponManagementV1DeleteByCodesPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponManagementV1DeleteByCodesPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponManagementV1DeleteByCodesPostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponManagementV1DeleteByCodesPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesRuleCouponManagementV1DeleteByCodesPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponManagementV1DeleteByIdsPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponManagementV1DeleteByIdsPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponManagementV1DeleteByIdsPostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponManagementV1DeleteByIdsPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesRuleCouponManagementV1DeleteByIdsPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponManagementV1GeneratePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponManagementV1GeneratePostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponManagementV1GeneratePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesRuleCouponManagementV1GeneratePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesRuleCouponRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesRuleCouponRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1GetByIdGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesRuleCouponRepositoryV1GetByIdGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesRuleCouponRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesCreditmemoRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesCreditmemoRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesCreditmemoManagementV1RefundPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoManagementV1RefundPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesCreditmemoManagementV1RefundPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesCreditmemoRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesCreditmemoRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesCreditmemoManagementV1CancelPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesCreditmemoManagementV1CancelPutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoManagementV1CancelPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesCreditmemoManagementV1CancelPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesCreditmemoManagementV1GetCommentsListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoManagementV1GetCommentsListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesCreditmemoManagementV1GetCommentsListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesCreditmemoCommentRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesCreditmemoCommentRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoCommentRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesCreditmemoCommentRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesCreditmemoManagementV1NotifyPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoManagementV1NotifyPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesCreditmemoManagementV1NotifyPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesCreditmemoRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesCreditmemoRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerGroupRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupManagementV1GetDefaultGroupGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupManagementV1GetDefaultGroupGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupManagementV1GetDefaultGroupGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupManagementV1GetDefaultGroupGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerGroupManagementV1GetDefaultGroupGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerGroupConfigV1SetDefaultCustomerGroupPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CustomerGroupsDefaultByStoreIdBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CustomerGroupsDefaultByStoreIdUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CustomerGroupsDefaultByStoreIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomerGroupsDefaultByStoreId(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GetV1CustomerGroupsDefaultByStoreId(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerGroupRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerGroupRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1GetByIdGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerGroupRepositoryV1GetByIdGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerGroupRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupManagementV1IsReadonlyGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupManagementV1IsReadonlyGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerGroupManagementV1IsReadonlyGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupManagementV1IsReadonlyGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerGroupManagementV1IsReadonlyGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1CreateAccountPostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1CreateAccountPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerAccountManagementV1CreateAccountPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAddressRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAddressRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressRepositoryV1GetByIdGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerAddressRepositoryV1GetByIdGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1ResendConfirmationPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1ResendConfirmationPostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ResendConfirmationPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerAccountManagementV1ResendConfirmationPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1IsEmailAvailablePostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1IsEmailAvailablePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerAccountManagementV1IsEmailAvailablePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1GetByIdGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerCustomerRepositoryV1GetByIdGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerCustomerRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1ActivateByIdPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1ActivateByIdPutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ActivateByIdPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerAccountManagementV1ActivateByIdPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1GetDefaultBillingAddressGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerAccountManagementV1GetDefaultBillingAddressGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1ChangePasswordByIdPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1ChangePasswordByIdPutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ChangePasswordByIdPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerAccountManagementV1ChangePasswordByIdPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1GetDefaultShippingAddressGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerAccountManagementV1GetDefaultShippingAddressGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1InitiatePasswordResetPutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1InitiatePasswordResetPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerAccountManagementV1InitiatePasswordResetPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1ResetPasswordPostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ResetPasswordPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerAccountManagementV1ResetPasswordPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerCustomerRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1ValidatePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1ValidatePutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ValidatePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerAccountManagementV1ValidatePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerCustomerRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerCustomerRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CustomerByCustomerIdBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CustomerByCustomerIdUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CustomerByCustomerIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomerByCustomerId(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GetV1CustomerByCustomerId(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\PutV1CustomerByCustomerIdBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\PutV1CustomerByCustomerIdUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\PutV1CustomerByCustomerIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CustomerByCustomerId(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\PutV1CustomerByCustomerId(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CustomersByCustomerIdBillingAddressBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CustomersByCustomerIdBillingAddressUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CustomersByCustomerIdBillingAddressInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomersByCustomerIdBillingAddress(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GetV1CustomersByCustomerIdBillingAddress(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\PostV1CustomersByCustomerIdCartBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\PostV1CustomersByCustomerIdCartUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CustomersByCustomerIdCart(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\PostV1CustomersByCustomerIdCart(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1GetConfirmationStatusGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1GetConfirmationStatusGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1GetConfirmationStatusGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerAccountManagementV1GetConfirmationStatusGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1ValidateResetPasswordLinkTokenGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1ValidateResetPasswordLinkTokenGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ValidateResetPasswordLinkTokenGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerAccountManagementV1ValidateResetPasswordLinkTokenGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1IsReadonlyGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1IsReadonlyGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1IsReadonlyGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1IsReadonlyGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerAccountManagementV1IsReadonlyGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CustomersByCustomerIdShippingAddressBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CustomersByCustomerIdShippingAddressUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\GetV1CustomersByCustomerIdShippingAddressInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomersByCustomerIdShippingAddress(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GetV1CustomersByCustomerIdShippingAddress(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1ActivatePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CustomerAccountManagementV1ActivatePutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ActivatePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CustomerAccountManagementV1ActivatePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function directoryCountryInformationAcquirerV1GetCountriesInfoGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\DirectoryCountryInformationAcquirerV1GetCountriesInfoGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\DirectoryCountryInformationAcquirerV1GetCountryInfoGetBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function directoryCountryInformationAcquirerV1GetCountryInfoGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\DirectoryCountryInformationAcquirerV1GetCountryInfoGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function directoryCurrencyInformationAcquirerV1GetCurrencyInfoGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\DirectoryCurrencyInformationAcquirerV1GetCurrencyInfoGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\EavAttributeSetManagementV1CreatePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\EavAttributeSetManagementV1CreatePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetManagementV1CreatePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\EavAttributeSetManagementV1CreatePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\EavAttributeSetRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\EavAttributeSetRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\EavAttributeSetRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\EavAttributeSetRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\EavAttributeSetRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\EavAttributeSetRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\EavAttributeSetRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\EavAttributeSetRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\EavAttributeSetRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\EavAttributeSetRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\EavAttributeSetRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\EavAttributeSetRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GiftWrappingWrappingRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftWrappingWrappingRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftWrappingWrappingRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GiftWrappingWrappingRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\GiftWrappingWrappingRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftWrappingWrappingRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftWrappingWrappingRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GiftWrappingWrappingRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\GiftWrappingWrappingRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftWrappingWrappingRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftWrappingWrappingRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GiftWrappingWrappingRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftWrappingWrappingRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftWrappingWrappingRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GiftWrappingWrappingRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\GiftWrappingWrappingRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftWrappingWrappingRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftWrappingWrappingRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftRegistryShippingMethodManagementV1EstimateByRegistryIdPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteGuestCartManagementV1CreateEmptyCartPostBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartManagementV1CreateEmptyCartPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteGuestCartManagementV1CreateEmptyCartPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteGuestCartRepositoryV1GetGetBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteGuestCartRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteGuestCartManagementV1AssignCustomerPutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartManagementV1AssignCustomerPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteGuestCartManagementV1AssignCustomerPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteGuestBillingAddressManagementV1GetGetBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestBillingAddressManagementV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteGuestBillingAddressManagementV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteGuestBillingAddressManagementV1AssignPostBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestBillingAddressManagementV1AssignPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteGuestBillingAddressManagementV1AssignPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TemandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartTotalManagementV1CollectTotalsPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteGuestCartTotalManagementV1CollectTotalsPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1DeleteSearchRequestDeleteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointGuestCartCollectionPointManagementV1DeleteSearchRequestDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1DeleteSearchRequestDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1SaveSearchRequestPutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointGuestCartCollectionPointManagementV1SaveSearchRequestPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1SaveSearchRequestPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointGuestCartCollectionPointManagementV1GetCollectionPointsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1GetCollectionPointsGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1SelectCollectionPointPostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointGuestCartCollectionPointManagementV1SelectCollectionPointPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1SelectCollectionPointPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteGuestCouponManagementV1RemoveDeleteBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCouponManagementV1RemoveDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteGuestCouponManagementV1RemoveDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteGuestCouponManagementV1GetGetBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCouponManagementV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteGuestCouponManagementV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteGuestCouponManagementV1SetPutBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCouponManagementV1SetPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteGuestCouponManagementV1SetPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingQuoteGuestCartDeliveryOptionManagementV1SavePostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingQuoteGuestCartDeliveryOptionManagementV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TemandoShippingQuoteGuestCartDeliveryOptionManagementV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteGuestShipmentEstimationV1EstimateByExtendedAddressPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageGuestCartRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftMessageGuestCartRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GiftMessageGuestCartRepositoryV1SavePostBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageGuestCartRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftMessageGuestCartRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GiftMessageGuestItemRepositoryV1GetGetBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageGuestItemRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftMessageGuestItemRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GiftMessageGuestItemRepositoryV1SavePostBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageGuestItemRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftMessageGuestItemRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteGuestCartItemRepositoryV1GetListGetBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartItemRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteGuestCartItemRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteGuestCartItemRepositoryV1SavePostBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartItemRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteGuestCartItemRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteGuestCartItemRepositoryV1DeleteByIdDeleteBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartItemRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteGuestCartItemRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteGuestCartItemRepositoryV1SavePutBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartItemRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteGuestCartItemRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteGuestCartManagementV1PlaceOrderPutBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartManagementV1PlaceOrderPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteGuestCartManagementV1PlaceOrderPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CheckoutGuestPaymentInformationManagementV1GetPaymentInformationGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteGuestPaymentMethodManagementV1GetListGetBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestPaymentMethodManagementV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteGuestPaymentMethodManagementV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteGuestPaymentMethodManagementV1GetGetBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestPaymentMethodManagementV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteGuestPaymentMethodManagementV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteGuestPaymentMethodManagementV1SetPutBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestPaymentMethodManagementV1SetPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteGuestPaymentMethodManagementV1SetPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPostBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestShippingInformationManagementV1SaveAddressInformationPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CheckoutGuestShippingInformationManagementV1SaveAddressInformationPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteGuestShippingMethodManagementV1GetListGetBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestShippingMethodManagementV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteGuestShippingMethodManagementV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\QuoteGuestCartTotalRepositoryV1GetGetBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartTotalRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\QuoteGuestCartTotalRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestTotalsInformationManagementV1CalculatePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CheckoutGuestTotalsInformationManagementV1CalculatePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\GiftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\GiftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCompanyHierarchyV1MoveNodePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyCompanyHierarchyV1MoveNodePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyCompanyHierarchyV1MoveNodePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyCompanyHierarchyV1GetCompanyHierarchyGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyCompanyHierarchyV1GetCompanyHierarchyGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyCompanyHierarchyV1GetCompanyHierarchyGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function integrationAdminTokenServiceV1CreateAdminAccessTokenPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\IntegrationCustomerTokenServiceV1CreateCustomerAccessTokenPostBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function integrationCustomerTokenServiceV1CreateCustomerAccessTokenPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\IntegrationCustomerTokenServiceV1CreateCustomerAccessTokenPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRefundInvoiceV1ExecutePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesRefundInvoiceV1ExecutePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesRefundInvoiceV1ExecutePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesInvoiceRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesInvoiceRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesInvoiceRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesInvoiceRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesInvoiceCommentRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesInvoiceCommentRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceCommentRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesInvoiceCommentRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesInvoiceRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesInvoiceRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesInvoiceManagementV1SetCapturePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceManagementV1SetCapturePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesInvoiceManagementV1SetCapturePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesInvoiceManagementV1GetCommentsListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceManagementV1GetCommentsListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesInvoiceManagementV1GetCommentsListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesInvoiceManagementV1NotifyPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceManagementV1NotifyPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesInvoiceManagementV1NotifyPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesInvoiceManagementV1SetVoidPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceManagementV1SetVoidPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesInvoiceManagementV1SetVoidPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\BackendModuleServiceV1GetModulesGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function backendModuleServiceV1GetModulesGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\BackendModuleServiceV1GetModulesGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteBillingAddressManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteBillingAddressManagementV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteBillingAddressManagementV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\NegotiableQuoteBillingAddressManagementV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteBillingAddressManagementV1AssignPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteBillingAddressManagementV1AssignPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteBillingAddressManagementV1AssignPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\NegotiableQuoteBillingAddressManagementV1AssignPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteCouponManagementV1RemoveDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteCouponManagementV1RemoveDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteCouponManagementV1RemoveDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\NegotiableQuoteCouponManagementV1RemoveDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteCouponManagementV1SetPutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteCouponManagementV1SetPutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteCouponManagementV1SetPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\NegotiableQuoteCouponManagementV1SetPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\NegotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteShippingMethodManagementV1EstimateByAddressIdPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteShippingMethodManagementV1EstimateByAddressIdPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\NegotiableQuoteShippingMethodManagementV1EstimateByAddressIdPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\NegotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteGiftCardAccountManagementV1DeleteByQuoteIdDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteGiftCardAccountManagementV1DeleteByQuoteIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\NegotiableQuoteGiftCardAccountManagementV1DeleteByQuoteIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuotePaymentInformationManagementV1GetPaymentInformationGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuotePaymentInformationManagementV1GetPaymentInformationGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\NegotiableQuotePaymentInformationManagementV1GetPaymentInformationGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuotePaymentInformationManagementV1SavePaymentInformationPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteShippingInformationManagementV1SaveAddressInformationPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteShippingInformationManagementV1SaveAddressInformationPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\NegotiableQuoteShippingInformationManagementV1SaveAddressInformationPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteCartTotalRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteCartTotalRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteCartTotalRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\NegotiableQuoteCartTotalRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteAttachmentContentManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteAttachmentContentManagementV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteAttachmentContentManagementV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\NegotiableQuoteAttachmentContentManagementV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteNegotiableQuoteManagementV1DeclinePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteNegotiableQuoteManagementV1DeclinePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\NegotiableQuoteNegotiableQuoteManagementV1DeclinePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteNegotiableQuotePriceManagementV1PricesUpdatedPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteNegotiableQuotePriceManagementV1PricesUpdatedPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteNegotiableQuotePriceManagementV1PricesUpdatedPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\NegotiableQuoteNegotiableQuotePriceManagementV1PricesUpdatedPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteNegotiableQuoteManagementV1CreatePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteNegotiableQuoteManagementV1CreatePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\NegotiableQuoteNegotiableQuoteManagementV1CreatePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteNegotiableQuoteManagementV1AdminSendPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteNegotiableQuoteManagementV1AdminSendPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\NegotiableQuoteNegotiableQuoteManagementV1AdminSendPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteNegotiableCartRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteNegotiableCartRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\NegotiableQuoteNegotiableCartRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteCommentLocatorV1GetListForQuoteGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteCommentLocatorV1GetListForQuoteGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteCommentLocatorV1GetListForQuoteGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\NegotiableQuoteCommentLocatorV1GetListForQuoteGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\NegotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\NegotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesInvoiceOrderV1ExecutePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceOrderV1ExecutePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesInvoiceOrderV1ExecutePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRefundOrderV1ExecutePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesRefundOrderV1ExecutePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesRefundOrderV1ExecutePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesShipOrderV1ExecutePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipOrderV1ExecutePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesShipOrderV1ExecutePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesOrderRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesOrderRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesOrderRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesOrderRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesOrderRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesOrderRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesOrderItemRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderItemRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesOrderItemRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesOrderItemRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderItemRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesOrderItemRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesOrderRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesOrderRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesOrderManagementV1CancelPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1CancelPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesOrderManagementV1CancelPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesOrderManagementV1GetCommentsListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1GetCommentsListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesOrderManagementV1GetCommentsListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesOrderManagementV1AddCommentPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1AddCommentPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesOrderManagementV1AddCommentPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesOrderManagementV1NotifyPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1NotifyPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesOrderManagementV1NotifyPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesOrderManagementV1HoldPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1HoldPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesOrderManagementV1HoldPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesOrderManagementV1GetStatusGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1GetStatusGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesOrderManagementV1GetStatusGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesOrderManagementV1UnHoldPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1UnHoldPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesOrderManagementV1UnHoldPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesOrderAddressRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderAddressRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesOrderAddressRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRenderListV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductRenderListV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogAttributeSetManagementV1CreatePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogAttributeSetManagementV1CreatePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetManagementV1CreatePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogAttributeSetManagementV1CreatePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeManagementV1AssignPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeManagementV1AssignPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeManagementV1AssignPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductAttributeManagementV1AssignPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeGroupRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeGroupRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductAttributeGroupRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeGroupRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeGroupRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeGroupRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductAttributeGroupRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeGroupRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeGroupRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductAttributeGroupRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogAttributeSetRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogAttributeSetRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogAttributeSetRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogAttributeSetRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogAttributeSetRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogAttributeSetRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogAttributeSetRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogAttributeSetRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogAttributeSetRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogAttributeSetRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogAttributeSetRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogAttributeSetRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeManagementV1GetAttributesGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeManagementV1GetAttributesGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeManagementV1GetAttributesGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductAttributeManagementV1GetAttributesGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeManagementV1UnassignDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeManagementV1UnassignDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeManagementV1UnassignDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductAttributeManagementV1UnassignDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeGroupRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeGroupRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductAttributeGroupRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductAttributeRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductAttributeRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeTypesListV1GetItemsGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeTypesListV1GetItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductAttributeTypesListV1GetItemsGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductAttributeRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductAttributeRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductAttributeRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeOptionManagementV1GetItemsGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeOptionManagementV1GetItemsGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeOptionManagementV1GetItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductAttributeOptionManagementV1GetItemsGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeOptionManagementV1AddPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeOptionManagementV1AddPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeOptionManagementV1AddPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductAttributeOptionManagementV1AddPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeOptionManagementV1DeleteDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeOptionManagementV1DeleteDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeOptionManagementV1DeleteDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductAttributeOptionManagementV1DeleteDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogBasePriceStorageV1UpdatePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogBasePriceStorageV1UpdatePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogBasePriceStorageV1UpdatePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogBasePriceStorageV1UpdatePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogBasePriceStorageV1GetPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogBasePriceStorageV1GetPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogBasePriceStorageV1GetPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCostStorageV1UpdatePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCostStorageV1UpdatePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogCostStorageV1UpdatePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCostStorageV1DeletePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCostStorageV1DeletePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCostStorageV1DeletePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogCostStorageV1DeletePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCostStorageV1GetPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogCostStorageV1GetPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCostStorageV1GetPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogCostStorageV1GetPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\DownloadableSampleRepositoryV1DeleteDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableSampleRepositoryV1DeleteDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\DownloadableSampleRepositoryV1DeleteDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\DownloadableLinkRepositoryV1DeleteDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableLinkRepositoryV1DeleteDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\DownloadableLinkRepositoryV1DeleteDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductLinkTypeListV1GetItemsGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkTypeListV1GetItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductLinkTypeListV1GetItemsGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductLinkTypeListV1GetItemAttributesGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkTypeListV1GetItemAttributesGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductLinkTypeListV1GetItemAttributesGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductMediaAttributeManagementV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductMediaAttributeManagementV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductMediaAttributeManagementV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductCustomOptionRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductCustomOptionRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductCustomOptionTypeListV1GetItemsGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionTypeListV1GetItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductCustomOptionTypeListV1GetItemsGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductCustomOptionRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductCustomOptionRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogSpecialPriceStorageV1UpdatePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogSpecialPriceStorageV1UpdatePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogSpecialPriceStorageV1UpdatePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogSpecialPriceStorageV1UpdatePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogSpecialPriceStorageV1DeletePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogSpecialPriceStorageV1DeletePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogSpecialPriceStorageV1DeletePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogSpecialPriceStorageV1DeletePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogSpecialPriceStorageV1GetPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogSpecialPriceStorageV1GetPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogSpecialPriceStorageV1GetPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogSpecialPriceStorageV1GetPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogTierPriceStorageV1UpdatePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogTierPriceStorageV1UpdatePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogTierPriceStorageV1UpdatePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogTierPriceStorageV1ReplacePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogTierPriceStorageV1ReplacePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogTierPriceStorageV1ReplacePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogTierPriceStorageV1DeletePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogTierPriceStorageV1DeletePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogTierPriceStorageV1DeletePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogTierPriceStorageV1GetPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogTierPriceStorageV1GetPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogTierPriceStorageV1GetPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogTierPriceStorageV1GetPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductTypeListV1GetProductTypesGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductTypeListV1GetProductTypesGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductTypeListV1GetProductTypesGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogInventoryStockRegistryV1UpdateStockItemBySkuPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\DownloadableLinkRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableLinkRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\DownloadableLinkRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\DownloadableLinkRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableLinkRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\DownloadableLinkRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\DownloadableSampleRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableSampleRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\DownloadableSampleRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\DownloadableSampleRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableSampleRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\DownloadableSampleRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\DownloadableSampleRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableSampleRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\DownloadableSampleRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\DownloadableLinkRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableLinkRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\DownloadableLinkRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductTierPriceManagementV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductTierPriceManagementV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductTierPriceManagementV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductTierPriceManagementV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductTierPriceManagementV1RemoveDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductTierPriceManagementV1RemoveDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductTierPriceManagementV1RemoveDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductTierPriceManagementV1RemoveDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductTierPriceManagementV1AddPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductTierPriceManagementV1AddPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductTierPriceManagementV1AddPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductTierPriceManagementV1AddPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductLinkManagementV1SetProductLinksPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductLinkManagementV1SetProductLinksPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkManagementV1SetProductLinksPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductLinkManagementV1SetProductLinksPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductLinkRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductLinkRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductLinkRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductLinkManagementV1GetLinkedItemsByTypeGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkManagementV1GetLinkedItemsByTypeGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductLinkManagementV1GetLinkedItemsByTypeGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductLinkRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductLinkRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductLinkRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeMediaGalleryManagementV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductAttributeMediaGalleryManagementV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeMediaGalleryManagementV1CreatePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeMediaGalleryManagementV1CreatePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1CreatePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductAttributeMediaGalleryManagementV1CreatePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeMediaGalleryManagementV1RemoveDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeMediaGalleryManagementV1RemoveDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1RemoveDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductAttributeMediaGalleryManagementV1RemoveDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeMediaGalleryManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeMediaGalleryManagementV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductAttributeMediaGalleryManagementV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeMediaGalleryManagementV1UpdatePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeMediaGalleryManagementV1UpdatePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1UpdatePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductAttributeMediaGalleryManagementV1UpdatePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductCustomOptionRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductCustomOptionRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductCustomOptionRepositoryV1DeleteByIdentifierDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductCustomOptionRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductCustomOptionRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductWebsiteLinkRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductWebsiteLinkRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductWebsiteLinkRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductWebsiteLinkRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductWebsiteLinkRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductWebsiteLinkRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductWebsiteLinkRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductWebsiteLinkRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductWebsiteLinkRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductWebsiteLinkRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogProductWebsiteLinkRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\RequisitionListRequisitionListRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\RequisitionListRequisitionListRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function requisitionListRequisitionListRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\RequisitionListRequisitionListRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\RmaRmaManagementV1SearchGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaManagementV1SearchGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\RmaRmaManagementV1SearchGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\RmaRmaManagementV1SaveRmaPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaManagementV1SaveRmaPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\RmaRmaManagementV1SaveRmaPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\RmaRmaRepositoryV1DeleteDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\RmaRmaRepositoryV1DeleteDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaRepositoryV1DeleteDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\RmaRmaRepositoryV1DeleteDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\RmaRmaRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\RmaRmaRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\RmaRmaManagementV1SaveRmaPutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaManagementV1SaveRmaPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\RmaRmaManagementV1SaveRmaPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\RmaCommentManagementV1CommentsListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rmaCommentManagementV1CommentsListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\RmaCommentManagementV1CommentsListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\RmaCommentManagementV1AddCommentPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\RmaCommentManagementV1AddCommentPostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rmaCommentManagementV1AddCommentPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\RmaCommentManagementV1AddCommentPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\RmaTrackManagementV1GetShippingLabelPdfGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rmaTrackManagementV1GetShippingLabelPdfGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\RmaTrackManagementV1GetShippingLabelPdfGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\RmaTrackManagementV1GetTracksGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rmaTrackManagementV1GetTracksGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\RmaTrackManagementV1GetTracksGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\RmaTrackManagementV1AddTrackPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rmaTrackManagementV1AddTrackPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\RmaTrackManagementV1AddTrackPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\RmaTrackManagementV1RemoveTrackByIdDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rmaTrackManagementV1RemoveTrackByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\RmaTrackManagementV1RemoveTrackByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\RmaRmaAttributesManagementV1GetAllAttributesMetadataGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaAttributesManagementV1GetAllAttributesMetadataGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\RmaRmaAttributesManagementV1GetAllAttributesMetadataGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\RmaRmaAttributesManagementV1GetCustomAttributesMetadataGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaAttributesManagementV1GetCustomAttributesMetadataGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\RmaRmaAttributesManagementV1GetCustomAttributesMetadataGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\RmaRmaAttributesManagementV1GetAttributesGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaAttributesManagementV1GetAttributesGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\RmaRmaAttributesManagementV1GetAttributesGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\RmaRmaAttributesManagementV1GetAttributeMetadataGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaAttributesManagementV1GetAttributeMetadataGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\RmaRmaAttributesManagementV1GetAttributeMetadataGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\RewardRewardManagementV1SetPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function rewardRewardManagementV1SetPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\RewardRewardManagementV1SetPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleRuleRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleRuleRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleRuleRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesRuleRuleRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleRuleRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleRuleRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesRuleRuleRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleRuleRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleRuleRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleRuleRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesRuleRuleRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleRuleRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleRuleRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleRuleRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1GetByIdGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesRuleRuleRepositoryV1GetByIdGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleRuleRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleRuleRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleRuleRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesRuleRuleRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function searchV1SearchGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SearchV1SearchGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogSharedCatalogRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogSharedCatalogRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogSharedCatalogRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogSharedCatalogRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SharedCatalogSharedCatalogRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogSharedCatalogRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogSharedCatalogRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogSharedCatalogRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SharedCatalogSharedCatalogRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogSharedCatalogRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogSharedCatalogRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogSharedCatalogRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogSharedCatalogRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SharedCatalogSharedCatalogRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogCategoryManagementV1AssignCategoriesPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogCategoryManagementV1AssignCategoriesPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogCategoryManagementV1AssignCategoriesPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SharedCatalogCategoryManagementV1AssignCategoriesPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogProductManagementV1AssignProductsPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogProductManagementV1AssignProductsPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SharedCatalogProductManagementV1AssignProductsPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogCategoryManagementV1GetCategoriesGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogCategoryManagementV1GetCategoriesGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SharedCatalogCategoryManagementV1GetCategoriesGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogProductManagementV1GetProductsGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogProductManagementV1GetProductsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SharedCatalogProductManagementV1GetProductsGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogCategoryManagementV1UnassignCategoriesPostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogCategoryManagementV1UnassignCategoriesPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogCategoryManagementV1UnassignCategoriesPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SharedCatalogCategoryManagementV1UnassignCategoriesPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogProductManagementV1UnassignProductsPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogProductManagementV1UnassignProductsPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SharedCatalogProductManagementV1UnassignProductsPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogSharedCatalogRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogSharedCatalogRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogSharedCatalogRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogSharedCatalogRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SharedCatalogSharedCatalogRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogSharedCatalogRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogSharedCatalogRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogSharedCatalogRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SharedCatalogSharedCatalogRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogCompanyManagementV1AssignCompaniesPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogCompanyManagementV1AssignCompaniesPostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogCompanyManagementV1AssignCompaniesPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SharedCatalogCompanyManagementV1AssignCompaniesPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogCompanyManagementV1GetCompaniesGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogCompanyManagementV1GetCompaniesGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SharedCatalogCompanyManagementV1GetCompaniesGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogCompanyManagementV1UnassignCompaniesPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SharedCatalogCompanyManagementV1UnassignCompaniesPostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogCompanyManagementV1UnassignCompaniesPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SharedCatalogCompanyManagementV1UnassignCompaniesPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesShipmentRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesShipmentRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesShipmentTrackRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesShipmentTrackRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentTrackRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesShipmentTrackRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesShipmentTrackRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesShipmentTrackRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentTrackRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesShipmentTrackRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesShipmentRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesShipmentRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesShipmentManagementV1GetCommentsListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentManagementV1GetCommentsListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesShipmentManagementV1GetCommentsListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesShipmentCommentRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesShipmentCommentRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentCommentRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesShipmentCommentRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesShipmentManagementV1NotifyPostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentManagementV1NotifyPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesShipmentManagementV1NotifyPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesShipmentManagementV1GetLabelGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentManagementV1GetLabelGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesShipmentManagementV1GetLabelGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesShipmentRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesShipmentRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogInventoryStockRegistryV1GetLowStockItemsGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogInventoryStockRegistryV1GetLowStockItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogInventoryStockRegistryV1GetLowStockItemsGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogInventoryStockRegistryV1GetStockItemBySkuGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogInventoryStockRegistryV1GetStockItemBySkuGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogInventoryStockRegistryV1GetStockItemBySkuGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogInventoryStockRegistryV1GetStockItemBySkuGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogInventoryStockRegistryV1GetStockStatusBySkuGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogInventoryStockRegistryV1GetStockStatusBySkuGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function catalogInventoryStockRegistryV1GetStockStatusBySkuGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CatalogInventoryStockRegistryV1GetStockStatusBySkuGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\StoreStoreConfigManagerV1GetStoreConfigsGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function storeStoreConfigManagerV1GetStoreConfigsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\StoreStoreConfigManagerV1GetStoreConfigsGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\StoreGroupRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function storeGroupRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\StoreGroupRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\StoreStoreRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function storeStoreRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\StoreStoreRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\StoreWebsiteRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function storeWebsiteRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\StoreWebsiteRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxClassRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxClassRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxClassRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TaxTaxClassRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxClassRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxClassRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TaxTaxClassRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxClassRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxClassRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxClassRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TaxTaxClassRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxClassRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxClassRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TaxTaxClassRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxClassRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxClassRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TaxTaxClassRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRateRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRateRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRateRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TaxTaxRateRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRateRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRateRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRateRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TaxTaxRateRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRateRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRateRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TaxTaxRateRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRateRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRateRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRateRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TaxTaxRateRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRateRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRateRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TaxTaxRateRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRuleRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRuleRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRuleRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1SavePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TaxTaxRuleRepositoryV1SavePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRuleRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRuleRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRuleRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TaxTaxRuleRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRuleRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRuleRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TaxTaxRuleRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRuleRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRuleRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRuleRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TaxTaxRuleRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TaxTaxRuleRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TaxTaxRuleRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyTeamRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyTeamRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyTeamRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyTeamRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyTeamRepositoryV1CreatePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyTeamRepositoryV1CreatePostUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyTeamRepositoryV1CreatePost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyTeamRepositoryV1CreatePost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyTeamRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyTeamRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyTeamRepositoryV1DeleteByIdDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyTeamRepositoryV1DeleteByIdDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyTeamRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyTeamRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyTeamRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyTeamRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyTeamRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyTeamRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function companyTeamRepositoryV1SavePut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\CompanyTeamRepositoryV1SavePut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\TemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPut(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\TemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPut(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesTransactionRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesTransactionRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesTransactionRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\SalesTransactionRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function salesTransactionRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\SalesTransactionRepositoryV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_2\Exception\WorldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPostBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_2\Endpoint\WorldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost(), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Kiboko\Magento\v2_2\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
