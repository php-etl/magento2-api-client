<?php

namespace Kiboko\Magento\V2;

class Client extends \Kiboko\Magento\V2\Runtime\Client\Client
{
    /**
     * Delete customer address by ID.
     *
     * @param int $addressId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerAddressRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CustomerAddressRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerAddressRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressRepositoryV1DeleteByIdDelete(int $addressId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerAddressRepositoryV1DeleteByIdDelete($addressId), $fetch);
    }
    /**
     * 
     *
     * @param string $amazonOrderReferenceId 
     * @param null|\Kiboko\Magento\V2\Model\V1AmazonBillingAddressAmazonOrderReferenceIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function amazonPaymentAddressManagementV1GetBillingAddressPut(string $amazonOrderReferenceId, ?\Kiboko\Magento\V2\Model\V1AmazonBillingAddressAmazonOrderReferenceIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\AmazonPaymentAddressManagementV1GetBillingAddressPut($amazonOrderReferenceId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $amazonOrderReferenceId 
     * @param null|\Kiboko\Magento\V2\Model\V1AmazonShippingAddressAmazonOrderReferenceIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function amazonPaymentAddressManagementV1GetShippingAddressPut(string $amazonOrderReferenceId, ?\Kiboko\Magento\V2\Model\V1AmazonShippingAddressAmazonOrderReferenceIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\AmazonPaymentAddressManagementV1GetShippingAddressPut($amazonOrderReferenceId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function amazonPaymentOrderInformationManagementV1RemoveOrderReferenceDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\AmazonPaymentOrderInformationManagementV1RemoveOrderReferenceDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\AnalyticsLinkProviderV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\AnalyticsDataLinkInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function analyticsLinkProviderV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\AnalyticsLinkProviderV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerMetadataV1GetAllAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerMetadataV1GetAllAttributesMetadataGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerMetadataV1GetAllAttributesMetadataGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerCustomerMetadataV1GetAllAttributesMetadataGet(), $fetch);
    }
    /**
     * Retrieve attribute metadata.
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerMetadataV1GetAttributeMetadataGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerMetadataV1GetAttributeMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerMetadataV1GetAttributeMetadataGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataAttributeMetadataInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerMetadataV1GetAttributeMetadataGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerCustomerMetadataV1GetAttributeMetadataGet($attributeCode), $fetch);
    }
    /**
     * Get custom attributes metadata for the given data interface.
     *
     * @param array $queryParameters {
     *     @var string $dataInterfaceName 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerMetadataV1GetCustomAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerMetadataV1GetCustomAttributesMetadataGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerMetadataV1GetCustomAttributesMetadataGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerCustomerMetadataV1GetCustomAttributesMetadataGet($queryParameters), $fetch);
    }
    /**
     * Retrieve all attributes filtered by form code
     *
     * @param string $formCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerMetadataV1GetAttributesGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerMetadataV1GetAttributesGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerMetadataV1GetAttributesGet(string $formCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerCustomerMetadataV1GetAttributesGet($formCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerAddressMetadataV1GetAllAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerAddressMetadataV1GetAllAttributesMetadataGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressMetadataV1GetAllAttributesMetadataGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerAddressMetadataV1GetAllAttributesMetadataGet(), $fetch);
    }
    /**
     * Retrieve attribute metadata.
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerAddressMetadataV1GetAttributeMetadataGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CustomerAddressMetadataV1GetAttributeMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerAddressMetadataV1GetAttributeMetadataGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataAttributeMetadataInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressMetadataV1GetAttributeMetadataGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerAddressMetadataV1GetAttributeMetadataGet($attributeCode), $fetch);
    }
    /**
     * Get custom attributes metadata for the given data interface.
     *
     * @param array $queryParameters {
     *     @var string $dataInterfaceName 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerAddressMetadataV1GetCustomAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerAddressMetadataV1GetCustomAttributesMetadataGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressMetadataV1GetCustomAttributesMetadataGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerAddressMetadataV1GetCustomAttributesMetadataGet($queryParameters), $fetch);
    }
    /**
     * Retrieve all attributes filtered by form code
     *
     * @param string $formCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerAddressMetadataV1GetAttributesGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerAddressMetadataV1GetAttributesGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressMetadataV1GetAttributesGet(string $formCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerAddressMetadataV1GetAttributesGet($formCode), $fetch);
    }
    /**
     * Get Bulk summary data with list of operations items full data.
     *
     * @param string $bulkUuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\AsynchronousOperationsBulkStatusV1GetBulkDetailedStatusGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\AsynchronousOperationsBulkStatusV1GetBulkDetailedStatusGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\AsynchronousOperationsDataDetailedBulkOperationsStatusInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function asynchronousOperationsBulkStatusV1GetBulkDetailedStatusGet(string $bulkUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\AsynchronousOperationsBulkStatusV1GetBulkDetailedStatusGet($bulkUuid), $fetch);
    }
    /**
     * Get operations count by bulk uuid and status.
     *
     * @param string $bulkUuid 
     * @param int $status 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\AsynchronousOperationsBulkStatusV1GetOperationsCountByBulkIdAndStatusGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function asynchronousOperationsBulkStatusV1GetOperationsCountByBulkIdAndStatusGet(string $bulkUuid, int $status, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\AsynchronousOperationsBulkStatusV1GetOperationsCountByBulkIdAndStatusGet($bulkUuid, $status), $fetch);
    }
    /**
     * Get Bulk summary data with list of operations items short data.
     *
     * @param string $bulkUuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\AsynchronousOperationsBulkStatusV1GetBulkShortStatusGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\AsynchronousOperationsBulkStatusV1GetBulkShortStatusGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\AsynchronousOperationsDataBulkOperationsStatusInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function asynchronousOperationsBulkStatusV1GetBulkShortStatusGet(string $bulkUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\AsynchronousOperationsBulkStatusV1GetBulkShortStatusGet($bulkUuid), $fetch);
    }
    /**
     * Add new option for bundle product
     *
     * @param null|\Kiboko\Magento\V2\Model\V1BundleProductsOptionsAddPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\BundleProductOptionManagementV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\BundleProductOptionManagementV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionManagementV1SavePost(?\Kiboko\Magento\V2\Model\V1BundleProductsOptionsAddPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\BundleProductOptionManagementV1SavePost($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\BundleProductOptionTypeListV1GetItemsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\BundleDataOptionTypeInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionTypeListV1GetItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\BundleProductOptionTypeListV1GetItemsGet(), $fetch);
    }
    /**
     * Add new option for bundle product
     *
     * @param string $optionId 
     * @param null|\Kiboko\Magento\V2\Model\V1BundleProductsOptionsOptionIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\BundleProductOptionManagementV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\BundleProductOptionManagementV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionManagementV1SavePut(string $optionId, ?\Kiboko\Magento\V2\Model\V1BundleProductsOptionsOptionIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\BundleProductOptionManagementV1SavePut($optionId, $requestBody), $fetch);
    }
    /**
     * Get all children for Bundle product
     *
     * @param string $productSku 
     * @param array $queryParameters {
     *     @var int $optionId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\BundleProductLinkManagementV1GetChildrenGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\BundleProductLinkManagementV1GetChildrenGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\BundleDataLinkInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductLinkManagementV1GetChildrenGet(string $productSku, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\BundleProductLinkManagementV1GetChildrenGet($productSku, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param string $id 
     * @param null|\Kiboko\Magento\V2\Model\V1BundleProductsSkuLinksIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\BundleProductLinkManagementV1SaveChildPutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\BundleProductLinkManagementV1SaveChildPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductLinkManagementV1SaveChildPut(string $sku, string $id, ?\Kiboko\Magento\V2\Model\V1BundleProductsSkuLinksIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\BundleProductLinkManagementV1SaveChildPut($sku, $id, $requestBody), $fetch);
    }
    /**
     * Add child product to specified Bundle option by product sku
     *
     * @param string $sku 
     * @param int $optionId 
     * @param null|\Kiboko\Magento\V2\Model\V1BundleProductsSkuLinksOptionIdPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\BundleProductLinkManagementV1AddChildByProductSkuPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\BundleProductLinkManagementV1AddChildByProductSkuPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductLinkManagementV1AddChildByProductSkuPost(string $sku, int $optionId, ?\Kiboko\Magento\V2\Model\V1BundleProductsSkuLinksOptionIdPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\BundleProductLinkManagementV1AddChildByProductSkuPost($sku, $optionId, $requestBody), $fetch);
    }
    /**
     * Get all options for bundle product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\BundleProductOptionRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\BundleProductOptionRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\BundleDataOptionInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionRepositoryV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\BundleProductOptionRepositoryV1GetListGet($sku), $fetch);
    }
    /**
     * Remove bundle option
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\BundleProductOptionRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\BundleProductOptionRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionRepositoryV1DeleteByIdDelete(string $sku, int $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\BundleProductOptionRepositoryV1DeleteByIdDelete($sku, $optionId), $fetch);
    }
    /**
     * Get option for bundle product
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\BundleProductOptionRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\BundleProductOptionRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\BundleDataOptionInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionRepositoryV1GetGet(string $sku, int $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\BundleProductOptionRepositoryV1GetGet($sku, $optionId), $fetch);
    }
    /**
     * Remove product from Bundle product option
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $childSku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\BundleProductLinkManagementV1RemoveChildDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\BundleProductLinkManagementV1RemoveChildDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductLinkManagementV1RemoveChildDelete(string $sku, int $optionId, string $childSku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\BundleProductLinkManagementV1RemoveChildDelete($sku, $optionId, $childSku), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartManagementV1CreateEmptyCartPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartManagementV1CreateEmptyCartPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1CreateEmptyCartPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteCartManagementV1CreateEmptyCartPost(), $fetch);
    }
    /**
     * 
     *
     * @param string $cartId 
     * @param string $giftCardCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GiftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet(string $cartId, string $giftCardCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet($cartId, $giftCardCode), $fetch);
    }
    /**
     * 
     *
     * @param string $cartId 
     * @param null|\Kiboko\Magento\V2\Model\V1CartsGuestCartsCartIdGiftCardsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost(string $cartId, ?\Kiboko\Magento\V2\Model\V1CartsGuestCartsCartIdGiftCardsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost($cartId, $requestBody), $fetch);
    }
    /**
     * Remove GiftCard Account entity
     *
     * @param string $cartId 
     * @param string $giftCardCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete(string $cartId, string $giftCardCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete($cartId, $giftCardCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CheckoutAgreementsCheckoutAgreementsRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CheckoutAgreementsDataAgreementInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutAgreementsCheckoutAgreementsRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CheckoutAgreementsCheckoutAgreementsRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartManagementV1GetCartForCustomerGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartManagementV1GetCartForCustomerGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataCartInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1GetCartForCustomerGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteCartManagementV1GetCartForCustomerGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartManagementV1CreateEmptyCartForCustomerPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartManagementV1CreateEmptyCartForCustomerPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1CreateEmptyCartForCustomerPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteCartManagementV1CreateEmptyCartForCustomerPost(), $fetch);
    }
    /**
     * Save quote
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CartsMinePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartRepositoryV1SavePut(?\Kiboko\Magento\V2\Model\V1CartsMinePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteCartRepositoryV1SavePut($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerBalanceBalanceManagementFromQuoteV1ApplyPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerBalanceBalanceManagementFromQuoteV1ApplyPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerBalanceBalanceManagementFromQuoteV1ApplyPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerBalanceBalanceManagementFromQuoteV1UnapplyPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerBalanceBalanceManagementFromQuoteV1UnapplyPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerBalanceBalanceManagementFromQuoteV1UnapplyPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteBillingAddressManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\QuoteBillingAddressManagementV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataAddressInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteBillingAddressManagementV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteBillingAddressManagementV1GetGet(), $fetch);
    }
    /**
     * Assigns a specified billing address to a specified cart.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CartsMineBillingAddressPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteBillingAddressManagementV1AssignPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\QuoteBillingAddressManagementV1AssignPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteBillingAddressManagementV1AssignPost(?\Kiboko\Magento\V2\Model\V1CartsMineBillingAddressPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteBillingAddressManagementV1AssignPost($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $giftCardCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GiftCardAccountGiftCardAccountManagementV1CheckGiftCardGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\GiftCardAccountGiftCardAccountManagementV1CheckGiftCardGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1CheckGiftCardGet(string $giftCardCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftCardAccountGiftCardAccountManagementV1CheckGiftCardGet($giftCardCode), $fetch);
    }
    /**
     * 
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CartsMineCheckoutFieldsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPost(?\Kiboko\Magento\V2\Model\V1CartsMineCheckoutFieldsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TemandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPost($requestBody), $fetch);
    }
    /**
     * Set shipping/billing methods and additional data for cart and collect totals.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CartsMineCollectTotalsPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartTotalManagementV1CollectTotalsPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataTotalsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartTotalManagementV1CollectTotalsPut(?\Kiboko\Magento\V2\Model\V1CartsMineCollectTotalsPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteCartTotalManagementV1CollectTotalsPut($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1DeleteSearchRequestDeleteUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1DeleteSearchRequestDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointCartCollectionPointManagementV1DeleteSearchRequestDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TemandoShippingCollectionPointCartCollectionPointManagementV1DeleteSearchRequestDelete(), $fetch);
    }
    /**
     * 
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CartsMineCollectionPointSearchRequestPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\TemandoShippingDataCollectionPointSearchRequestInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPut(?\Kiboko\Magento\V2\Model\V1CartsMineCollectionPointSearchRequestPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TemandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPut($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1GetCollectionPointsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\TemandoShippingDataCollectionPointQuoteCollectionPointInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointCartCollectionPointManagementV1GetCollectionPointsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TemandoShippingCollectionPointCartCollectionPointManagementV1GetCollectionPointsGet(), $fetch);
    }
    /**
     * 
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CartsMineCollectionPointSelectPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPostUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPost(?\Kiboko\Magento\V2\Model\V1CartsMineCollectionPointSelectPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TemandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPost($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteCouponManagementV1RemoveDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\QuoteCouponManagementV1RemoveDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1RemoveDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteCouponManagementV1RemoveDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteCouponManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\QuoteCouponManagementV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteCouponManagementV1GetGet(), $fetch);
    }
    /**
     * Adds a coupon by code to a specified cart.
     *
     * @param string $couponCode The coupon code data.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteCouponManagementV1SetPutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\QuoteCouponManagementV1SetPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1SetPut(string $couponCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteCouponManagementV1SetPut($couponCode), $fetch);
    }
    /**
     * Handle selected delivery option.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CartsMineDeliveryOptionPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingQuoteCartDeliveryOptionManagementV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingQuoteCartDeliveryOptionManagementV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingQuoteCartDeliveryOptionManagementV1SavePost(?\Kiboko\Magento\V2\Model\V1CartsMineDeliveryOptionPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TemandoShippingQuoteCartDeliveryOptionManagementV1SavePost($requestBody), $fetch);
    }
    /**
     * Estimate shipping by address and return list of available shipping methods
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CartsMineEstimateShippingMethodsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteShipmentEstimationV1EstimateByExtendedAddressPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShipmentEstimationV1EstimateByExtendedAddressPost(?\Kiboko\Magento\V2\Model\V1CartsMineEstimateShippingMethodsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteShipmentEstimationV1EstimateByExtendedAddressPost($requestBody), $fetch);
    }
    /**
     * Estimate shipping
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CartsMineEstimateShippingMethodsByAddressIdPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteShippingMethodManagementV1EstimateByAddressIdPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShippingMethodManagementV1EstimateByAddressIdPost(?\Kiboko\Magento\V2\Model\V1CartsMineEstimateShippingMethodsByAddressIdPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteShippingMethodManagementV1EstimateByAddressIdPost($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GiftMessageCartRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageCartRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftMessageCartRepositoryV1GetGet(), $fetch);
    }
    /**
     * Set the gift message for an entire order.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CartsMineGiftMessagePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GiftMessageCartRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\GiftMessageCartRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageCartRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1CartsMineGiftMessagePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftMessageCartRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Return the gift message for a specified item in a specified shopping cart.
     *
     * @param int $itemId The item ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GiftMessageItemRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\GiftMessageItemRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageItemRepositoryV1GetGet(int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftMessageItemRepositoryV1GetGet($itemId), $fetch);
    }
    /**
     * Set the gift message for a specified item in a specified shopping cart.
     *
     * @param int $itemId The item ID.
     * @param null|\Kiboko\Magento\V2\Model\V1CartsMineGiftMessageItemIdPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GiftMessageItemRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\GiftMessageItemRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageItemRepositoryV1SavePost(int $itemId, ?\Kiboko\Magento\V2\Model\V1CartsMineGiftMessageItemIdPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftMessageItemRepositoryV1SavePost($itemId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CartsMineGiftCardsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost(?\Kiboko\Magento\V2\Model\V1CartsMineGiftCardsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost($requestBody), $fetch);
    }
    /**
     * Remove GiftCard Account entity
     *
     * @param string $giftCardCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GiftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete(string $giftCardCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete($giftCardCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartItemRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartItemRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataCartItemInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteCartItemRepositoryV1GetListGet(), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CartsMineItemsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartItemRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartItemRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataCartItemInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1CartsMineItemsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteCartItemRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Removes the specified item from the specified cart.
     *
     * @param int $itemId The item ID of the item to be removed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartItemRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartItemRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1DeleteByIdDelete(int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteCartItemRepositoryV1DeleteByIdDelete($itemId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $itemId 
     * @param null|\Kiboko\Magento\V2\Model\V1CartsMineItemsItemIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartItemRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartItemRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataCartItemInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1SavePut(string $itemId, ?\Kiboko\Magento\V2\Model\V1CartsMineItemsItemIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteCartItemRepositoryV1SavePut($itemId, $requestBody), $fetch);
    }
    /**
     * Places an order for a specified cart.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CartsMineOrderPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartManagementV1PlaceOrderPutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartManagementV1PlaceOrderPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1PlaceOrderPut(?\Kiboko\Magento\V2\Model\V1CartsMineOrderPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteCartManagementV1PlaceOrderPut($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CheckoutPaymentInformationManagementV1GetPaymentInformationGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutPaymentInformationManagementV1GetPaymentInformationGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CheckoutPaymentInformationManagementV1GetPaymentInformationGet(), $fetch);
    }
    /**
     * Set payment information and place order for a specified cart.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CartsMinePaymentInformationPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost(?\Kiboko\Magento\V2\Model\V1CartsMinePaymentInformationPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuotePaymentMethodManagementV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\QuotePaymentMethodManagementV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataPaymentMethodInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuotePaymentMethodManagementV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuotePaymentMethodManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\QuotePaymentMethodManagementV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataPaymentInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuotePaymentMethodManagementV1GetGet(), $fetch);
    }
    /**
     * Adds a specified payment method to a specified shopping cart.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CartsMineSelectedPaymentMethodPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuotePaymentMethodManagementV1SetPutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\QuotePaymentMethodManagementV1SetPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1SetPut(?\Kiboko\Magento\V2\Model\V1CartsMineSelectedPaymentMethodPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuotePaymentMethodManagementV1SetPut($requestBody), $fetch);
    }
    /**
     * Set payment information for a specified cart.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CartsMineSetPaymentInformationPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutPaymentInformationManagementV1SavePaymentInformationPost(?\Kiboko\Magento\V2\Model\V1CartsMineSetPaymentInformationPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CheckoutPaymentInformationManagementV1SavePaymentInformationPost($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CartsMineShippingInformationPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CheckoutShippingInformationManagementV1SaveAddressInformationPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutShippingInformationManagementV1SaveAddressInformationPost(?\Kiboko\Magento\V2\Model\V1CartsMineShippingInformationPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CheckoutShippingInformationManagementV1SaveAddressInformationPost($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteShippingMethodManagementV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\QuoteShippingMethodManagementV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShippingMethodManagementV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteShippingMethodManagementV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartTotalRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartTotalRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataTotalsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartTotalRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteCartTotalRepositoryV1GetGet(), $fetch);
    }
    /**
     * Calculate quote totals based on address and shipping method.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CartsMineTotalsInformationPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CheckoutTotalsInformationManagementV1CalculatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataTotalsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutTotalsInformationManagementV1CalculatePost(?\Kiboko\Magento\V2\Model\V1CartsMineTotalsInformationPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CheckoutTotalsInformationManagementV1CalculatePost($requestBody), $fetch);
    }
    /**
     * Enables administrative users to list carts that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See http://devdocs.magento.com/codelinks/attributes.html#CartRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataCartSearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteCartRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Enables an administrative user to return information for a specified cart.
     *
     * @param int $cartId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataCartInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartRepositoryV1GetGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteCartRepositoryV1GetGet($cartId), $fetch);
    }
    /**
     * Assigns a specified customer to a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param null|\Kiboko\Magento\V2\Model\V1CartsCartIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteCartManagementV1AssignCustomerPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1AssignCustomerPut(int $cartId, ?\Kiboko\Magento\V2\Model\V1CartsCartIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteCartManagementV1AssignCustomerPut($cartId, $requestBody), $fetch);
    }
    /**
     * Returns the billing address for a specified quote.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GetV1CartsByCartIdBillingAddressBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\GetV1CartsByCartIdBillingAddressUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataAddressInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsByCartIdBillingAddress(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GetV1CartsByCartIdBillingAddress($cartId), $fetch);
    }
    /**
     * Assigns a specified billing address to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param null|\Kiboko\Magento\V2\Model\V1CartsCartIdBillingAddressPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\PostV1CartsByCartIdBillingAddressBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\PostV1CartsByCartIdBillingAddressUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsByCartIdBillingAddress(int $cartId, ?\Kiboko\Magento\V2\Model\V1CartsCartIdBillingAddressPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\PostV1CartsByCartIdBillingAddress($cartId, $requestBody), $fetch);
    }
    /**
     * Deletes a coupon from a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\DeleteV1CartsByCartIdCouponBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\DeleteV1CartsByCartIdCouponUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1CartsByCartIdCoupon(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\DeleteV1CartsByCartIdCoupon($cartId), $fetch);
    }
    /**
     * Returns information for a coupon in a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GetV1CartsByCartIdCouponBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\GetV1CartsByCartIdCouponUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsByCartIdCoupon(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GetV1CartsByCartIdCoupon($cartId), $fetch);
    }
    /**
     * Adds a coupon by code to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $couponCode The coupon code data.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\PutV1CartsByCartIdCouponByCouponCodeBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\PutV1CartsByCartIdCouponByCouponCodeUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CartsByCartIdCouponByCouponCode(int $cartId, string $couponCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\PutV1CartsByCartIdCouponByCouponCode($cartId, $couponCode), $fetch);
    }
    /**
     * Estimate shipping by address and return list of available shipping methods
     *
     * @param string $cartId 
     * @param null|\Kiboko\Magento\V2\Model\V1CartsCartIdEstimateShippingMethodsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\PostV1CartsByCartIdEstimateShippingMethodsUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsByCartIdEstimateShippingMethods(string $cartId, ?\Kiboko\Magento\V2\Model\V1CartsCartIdEstimateShippingMethodsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\PostV1CartsByCartIdEstimateShippingMethods($cartId, $requestBody), $fetch);
    }
    /**
     * Estimate shipping
     *
     * @param int $cartId The shopping cart ID.
     * @param null|\Kiboko\Magento\V2\Model\V1CartsCartIdEstimateShippingMethodsByAddressIdPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\PostV1CartsByCartIdEstimateShippingMethodsByAddressIdUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsByCartIdEstimateShippingMethodsByAddressId(int $cartId, ?\Kiboko\Magento\V2\Model\V1CartsCartIdEstimateShippingMethodsByAddressIdPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\PostV1CartsByCartIdEstimateShippingMethodsByAddressId($cartId, $requestBody), $fetch);
    }
    /**
     * Return the gift message for a specified order.
     *
     * @param int $cartId The shopping cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GetV1CartsByCartIdGiftMessageUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsByCartIdGiftMessage(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GetV1CartsByCartIdGiftMessage($cartId), $fetch);
    }
    /**
     * Set the gift message for an entire order.
     *
     * @param int $cartId The cart ID.
     * @param null|\Kiboko\Magento\V2\Model\V1CartsCartIdGiftMessagePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\PostV1CartsByCartIdGiftMessageBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\PostV1CartsByCartIdGiftMessageUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsByCartIdGiftMessage(int $cartId, ?\Kiboko\Magento\V2\Model\V1CartsCartIdGiftMessagePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\PostV1CartsByCartIdGiftMessage($cartId, $requestBody), $fetch);
    }
    /**
     * Return the gift message for a specified item in a specified shopping cart.
     *
     * @param int $cartId The shopping cart ID.
     * @param int $itemId The item ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GetV1CartsByCartIdGiftMessageByItemIdBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\GetV1CartsByCartIdGiftMessageByItemIdUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsByCartIdGiftMessageByItemId(int $cartId, int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GetV1CartsByCartIdGiftMessageByItemId($cartId, $itemId), $fetch);
    }
    /**
     * Set the gift message for a specified item in a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param int $itemId The item ID.
     * @param null|\Kiboko\Magento\V2\Model\V1CartsCartIdGiftMessageItemIdPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\PostV1CartsByCartIdGiftMessageByItemIdBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\PostV1CartsByCartIdGiftMessageByItemIdUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsByCartIdGiftMessageByItemId(int $cartId, int $itemId, ?\Kiboko\Magento\V2\Model\V1CartsCartIdGiftMessageItemIdPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\PostV1CartsByCartIdGiftMessageByItemId($cartId, $itemId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $cartId 
     * @param null|\Kiboko\Magento\V2\Model\V1CartsCartIdGiftCardsPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut(int $cartId, ?\Kiboko\Magento\V2\Model\V1CartsCartIdGiftCardsPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut($cartId, $requestBody), $fetch);
    }
    /**
     * Remove GiftCard Account entity
     *
     * @param int $cartId 
     * @param string $giftCardCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\DeleteV1CartsByCartIdGiftCardByGiftCardCodeUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1CartsByCartIdGiftCardByGiftCardCode(int $cartId, string $giftCardCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\DeleteV1CartsByCartIdGiftCardByGiftCardCode($cartId, $giftCardCode), $fetch);
    }
    /**
     * Lists items that are assigned to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GetV1CartsByCartIdItemsBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\GetV1CartsByCartIdItemsUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataCartItemInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsByCartIdItems(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GetV1CartsByCartIdItems($cartId), $fetch);
    }
    /**
     * Removes the specified item from the specified cart.
     *
     * @param int $cartId The cart ID.
     * @param int $itemId The item ID of the item to be removed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\DeleteV1CartsByCartIdItemByItemIdBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\DeleteV1CartsByCartIdItemByItemIdUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1CartsByCartIdItemByItemId(int $cartId, int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\DeleteV1CartsByCartIdItemByItemId($cartId, $itemId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $cartId 
     * @param string $itemId 
     * @param null|\Kiboko\Magento\V2\Model\V1CartsCartIdItemsItemIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\PutV1CartsByCartIdItemByItemIdBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\PutV1CartsByCartIdItemByItemIdUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataCartItemInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CartsByCartIdItemByItemId(string $cartId, string $itemId, ?\Kiboko\Magento\V2\Model\V1CartsCartIdItemsItemIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\PutV1CartsByCartIdItemByItemId($cartId, $itemId, $requestBody), $fetch);
    }
    /**
     * Places an order for a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param null|\Kiboko\Magento\V2\Model\V1CartsCartIdOrderPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\PutV1CartsByCartIdOrderBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\PutV1CartsByCartIdOrderUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CartsByCartIdOrder(int $cartId, ?\Kiboko\Magento\V2\Model\V1CartsCartIdOrderPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\PutV1CartsByCartIdOrder($cartId, $requestBody), $fetch);
    }
    /**
     * Lists available payment methods for a specified shopping cart. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See http://devdocs.magento.com/codelinks/attributes.html#PaymentMethodManagementInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GetV1CartsByCartIdPaymentMethodsBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\GetV1CartsByCartIdPaymentMethodsUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataPaymentMethodInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsByCartIdPaymentMethods(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GetV1CartsByCartIdPaymentMethods($cartId), $fetch);
    }
    /**
     * Returns the payment method for a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GetV1CartsByCartIdSelectedPaymentMethodBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\GetV1CartsByCartIdSelectedPaymentMethodUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataPaymentInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsByCartIdSelectedPaymentMethod(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GetV1CartsByCartIdSelectedPaymentMethod($cartId), $fetch);
    }
    /**
     * Adds a specified payment method to a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param null|\Kiboko\Magento\V2\Model\V1CartsCartIdSelectedPaymentMethodPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\PutV1CartsByCartIdSelectedPaymentMethodBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\PutV1CartsByCartIdSelectedPaymentMethodUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CartsByCartIdSelectedPaymentMethod(int $cartId, ?\Kiboko\Magento\V2\Model\V1CartsCartIdSelectedPaymentMethodPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\PutV1CartsByCartIdSelectedPaymentMethod($cartId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $cartId 
     * @param null|\Kiboko\Magento\V2\Model\V1CartsCartIdShippingInformationPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\PostV1CartsByCartIdShippingInformationUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsByCartIdShippingInformation(int $cartId, ?\Kiboko\Magento\V2\Model\V1CartsCartIdShippingInformationPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\PostV1CartsByCartIdShippingInformation($cartId, $requestBody), $fetch);
    }
    /**
     * Lists applicable shipping methods for a specified quote.
     *
     * @param int $cartId The shopping cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GetV1CartsByCartIdShippingMethodsBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\GetV1CartsByCartIdShippingMethodsUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsByCartIdShippingMethods(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GetV1CartsByCartIdShippingMethods($cartId), $fetch);
    }
    /**
     * Returns quote totals data for a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GetV1CartsByCartIdTotalBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\GetV1CartsByCartIdTotalUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataTotalsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsByCartIdTotal(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GetV1CartsByCartIdTotal($cartId), $fetch);
    }
    /**
     * Calculate quote totals based on address and shipping method.
     *
     * @param int $cartId 
     * @param null|\Kiboko\Magento\V2\Model\V1CartsCartIdTotalsInformationPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\PostV1CartsByCartIdTotalsInformationUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataTotalsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsByCartIdTotalsInformation(int $cartId, ?\Kiboko\Magento\V2\Model\V1CartsCartIdTotalsInformationPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\PostV1CartsByCartIdTotalsInformation($cartId, $requestBody), $fetch);
    }
    /**
     * Return GiftCard Account cards
     *
     * @param int $quoteId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GiftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\GiftCardAccountDataGiftCardAccountInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet(int $quoteId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet($quoteId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $quoteId 
     * @param null|\Kiboko\Magento\V2\Model\V1CartsQuoteIdItemsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\PostV1CartsByQuoteIdItemBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\PostV1CartsByQuoteIdItemUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataCartItemInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsByQuoteIdItem(string $quoteId, ?\Kiboko\Magento\V2\Model\V1CartsQuoteIdItemsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\PostV1CartsByQuoteIdItem($quoteId, $requestBody), $fetch);
    }
    /**
     * Retrieve list of categories
     *
     * @param array $queryParameters {
     *     @var int $rootCategoryId 
     *     @var int $depth 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryManagementV1GetTreeGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryManagementV1GetTreeGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataCategoryTreeInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryManagementV1GetTreeGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogCategoryManagementV1GetTreeGet($queryParameters), $fetch);
    }
    /**
     * Create category service
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CategoriesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataCategoryInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1CategoriesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogCategoryRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Retrieve all attributes for entity type
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryAttributeRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataCategoryAttributeSearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryAttributeRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogCategoryAttributeRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Retrieve specific attribute
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryAttributeRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataCategoryAttributeInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryAttributeRepositoryV1GetGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogCategoryAttributeRepositoryV1GetGet($attributeCode), $fetch);
    }
    /**
     * Retrieve list of attribute options
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryAttributeOptionManagementV1GetItemsGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryAttributeOptionManagementV1GetItemsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\EavDataAttributeOptionInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryAttributeOptionManagementV1GetItemsGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogCategoryAttributeOptionManagementV1GetItemsGet($attributeCode), $fetch);
    }
    /**
     * Get category list
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryListV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataCategorySearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryListV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogCategoryListV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Delete category by identifier
     *
     * @param int $categoryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryRepositoryV1DeleteByIdentifierDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryRepositoryV1DeleteByIdentifierDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryRepositoryV1DeleteByIdentifierDelete(int $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogCategoryRepositoryV1DeleteByIdentifierDelete($categoryId), $fetch);
    }
    /**
     * Get info about category by category id
     *
     * @param int $categoryId 
     * @param array $queryParameters {
     *     @var int $storeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataCategoryInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryRepositoryV1GetGet(int $categoryId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogCategoryRepositoryV1GetGet($categoryId, $queryParameters), $fetch);
    }
    /**
     * Move category
     *
     * @param int $categoryId 
     * @param null|\Kiboko\Magento\V2\Model\V1CategoriesCategoryIdMovePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryManagementV1MovePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryManagementV1MovePutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryManagementV1MovePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryManagementV1MovePut(int $categoryId, ?\Kiboko\Magento\V2\Model\V1CategoriesCategoryIdMovePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogCategoryManagementV1MovePut($categoryId, $requestBody), $fetch);
    }
    /**
     * Get products assigned to category
     *
     * @param int $categoryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryLinkManagementV1GetAssignedProductsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataCategoryProductLinkInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryLinkManagementV1GetAssignedProductsGet(int $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogCategoryLinkManagementV1GetAssignedProductsGet($categoryId), $fetch);
    }
    /**
     * Assign a product to the required category
     *
     * @param string $categoryId 
     * @param null|\Kiboko\Magento\V2\Model\V1CategoriesCategoryIdProductsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryLinkRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryLinkRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryLinkRepositoryV1SavePost(string $categoryId, ?\Kiboko\Magento\V2\Model\V1CategoriesCategoryIdProductsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogCategoryLinkRepositoryV1SavePost($categoryId, $requestBody), $fetch);
    }
    /**
     * Assign a product to the required category
     *
     * @param string $categoryId 
     * @param null|\Kiboko\Magento\V2\Model\V1CategoriesCategoryIdProductsPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryLinkRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryLinkRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryLinkRepositoryV1SavePut(string $categoryId, ?\Kiboko\Magento\V2\Model\V1CategoriesCategoryIdProductsPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogCategoryLinkRepositoryV1SavePut($categoryId, $requestBody), $fetch);
    }
    /**
     * Remove the product assignment from the category by category id and sku
     *
     * @param string $categoryId 
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryLinkRepositoryV1DeleteByIdsDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryLinkRepositoryV1DeleteByIdsDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryLinkRepositoryV1DeleteByIdsDelete(string $categoryId, string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogCategoryLinkRepositoryV1DeleteByIdsDelete($categoryId, $sku), $fetch);
    }
    /**
     * Create category service
     *
     * @param string $id 
     * @param null|\Kiboko\Magento\V2\Model\V1CategoriesIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogCategoryRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataCategoryInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryRepositoryV1SavePut(string $id, ?\Kiboko\Magento\V2\Model\V1CategoriesIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogCategoryRepositoryV1SavePut($id, $requestBody), $fetch);
    }
    /**
     * Save block.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CmsBlockPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CmsBlockRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CmsBlockRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CmsDataBlockInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1CmsBlockPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CmsBlockRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Retrieve blocks matching the specified criteria.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CmsBlockRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CmsBlockRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CmsDataBlockSearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CmsBlockRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Delete block by ID.
     *
     * @param int $blockId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CmsBlockRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CmsBlockRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CmsBlockRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1DeleteByIdDelete(int $blockId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CmsBlockRepositoryV1DeleteByIdDelete($blockId), $fetch);
    }
    /**
     * Retrieve block.
     *
     * @param int $blockId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CmsBlockRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CmsBlockRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CmsDataBlockInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1GetByIdGet(int $blockId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CmsBlockRepositoryV1GetByIdGet($blockId), $fetch);
    }
    /**
     * Save block.
     *
     * @param string $id 
     * @param null|\Kiboko\Magento\V2\Model\V1CmsBlockIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CmsBlockRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CmsBlockRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CmsDataBlockInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1SavePut(string $id, ?\Kiboko\Magento\V2\Model\V1CmsBlockIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CmsBlockRepositoryV1SavePut($id, $requestBody), $fetch);
    }
    /**
     * Save page.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CmsPagePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CmsPageRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CmsPageRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CmsDataPageInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1CmsPagePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CmsPageRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Retrieve pages matching the specified criteria.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CmsPageRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CmsPageRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CmsDataPageSearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CmsPageRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save page.
     *
     * @param string $id 
     * @param null|\Kiboko\Magento\V2\Model\V1CmsPageIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CmsPageRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CmsPageRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CmsDataPageInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1SavePut(string $id, ?\Kiboko\Magento\V2\Model\V1CmsPageIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CmsPageRepositoryV1SavePut($id, $requestBody), $fetch);
    }
    /**
     * Delete page by ID.
     *
     * @param int $pageId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CmsPageRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CmsPageRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CmsPageRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1DeleteByIdDelete(int $pageId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CmsPageRepositoryV1DeleteByIdDelete($pageId), $fetch);
    }
    /**
     * Retrieve page.
     *
     * @param int $pageId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CmsPageRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CmsPageRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CmsDataPageInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1GetByIdGet(int $pageId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CmsPageRepositoryV1GetByIdGet($pageId), $fetch);
    }
    /**
     * Returns the list of companies. The list is an array of objects, and detailed information about item attributes might not be included.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyCompanyRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CompanyCompanyRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CompanyDataCompanySearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCompanyRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyCompanyRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create or update a company account.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CompanyPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyCompanyRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CompanyCompanyRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CompanyDataCompanyInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCompanyRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1CompanyPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyCompanyRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Change a role for a company user.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CompanyAssignRolesPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyAclV1AssignRolesPutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CompanyAclV1AssignRolesPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyAclV1AssignRolesPut(?\Kiboko\Magento\V2\Model\V1CompanyAssignRolesPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyAclV1AssignRolesPut($requestBody), $fetch);
    }
    /**
     * Returns the list of roles and permissions for a specified company.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyRoleRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CompanyRoleRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CompanyDataRoleSearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyRoleRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyRoleRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create or update a role for a selected company.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CompanyRolePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyRoleRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CompanyRoleRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CompanyDataRoleInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyRoleRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1CompanyRolePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyRoleRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Create or update a role for a selected company.
     *
     * @param string $id 
     * @param null|\Kiboko\Magento\V2\Model\V1CompanyRoleIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyRoleRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CompanyRoleRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CompanyDataRoleInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyRoleRepositoryV1SavePut(string $id, ?\Kiboko\Magento\V2\Model\V1CompanyRoleIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyRoleRepositoryV1SavePut($id, $requestBody), $fetch);
    }
    /**
     * Delete a role.
     *
     * @param int $roleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyRoleRepositoryV1DeleteDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CompanyRoleRepositoryV1DeleteDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyRoleRepositoryV1DeleteDelete(int $roleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyRoleRepositoryV1DeleteDelete($roleId), $fetch);
    }
    /**
     * Returns the list of permissions for a specified role.
     *
     * @param int $roleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyRoleRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CompanyRoleRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CompanyDataRoleInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyRoleRepositoryV1GetGet(int $roleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyRoleRepositoryV1GetGet($roleId), $fetch);
    }
    /**
     * View the list of company users assigned to a specified role.
     *
     * @param int $roleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyAclV1GetUsersByRoleIdGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataCustomerInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyAclV1GetUsersByRoleIdGet(int $roleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyAclV1GetUsersByRoleIdGet($roleId), $fetch);
    }
    /**
     * Delete a company. Customers belonging to a company are not deleted with this request.
     *
     * @param int $companyId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyCompanyRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CompanyCompanyRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCompanyRepositoryV1DeleteByIdDelete(int $companyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyCompanyRepositoryV1DeleteByIdDelete($companyId), $fetch);
    }
    /**
     * Returns company details.
     *
     * @param int $companyId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyCompanyRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CompanyCompanyRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CompanyDataCompanyInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCompanyRepositoryV1GetGet(int $companyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyCompanyRepositoryV1GetGet($companyId), $fetch);
    }
    /**
     * Create or update a company account.
     *
     * @param string $companyId 
     * @param null|\Kiboko\Magento\V2\Model\V1CompanyCompanyIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyCompanyRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CompanyCompanyRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CompanyDataCompanyInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCompanyRepositoryV1SavePut(string $companyId, ?\Kiboko\Magento\V2\Model\V1CompanyCompanyIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyCompanyRepositoryV1SavePut($companyId, $requestBody), $fetch);
    }
    /**
     * Returns the list of credits for specified companies.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyCreditCreditLimitRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CompanyCreditCreditLimitRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CompanyCreditDataCreditLimitSearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditLimitRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyCreditCreditLimitRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Returns data on the credit limit for a specified company.
     *
     * @param int $companyId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyCreditCreditLimitManagementV1GetCreditByCompanyIdGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CompanyCreditDataCreditLimitInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditLimitManagementV1GetCreditByCompanyIdGet(int $companyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyCreditCreditLimitManagementV1GetCreditByCompanyIdGet($companyId), $fetch);
    }
    /**
     * Returns the credit history for one or more companies.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyCreditCreditHistoryManagementV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CompanyCreditCreditHistoryManagementV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CompanyCreditDataHistorySearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditHistoryManagementV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyCreditCreditHistoryManagementV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Update the PO Number and/or comment for a Reimburse transaction.
     *
     * @param int $historyId 
     * @param null|\Kiboko\Magento\V2\Model\V1CompanyCreditsHistoryHistoryIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyCreditCreditHistoryManagementV1UpdatePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CompanyCreditCreditHistoryManagementV1UpdatePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditHistoryManagementV1UpdatePut(int $historyId, ?\Kiboko\Magento\V2\Model\V1CompanyCreditsHistoryHistoryIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyCreditCreditHistoryManagementV1UpdatePut($historyId, $requestBody), $fetch);
    }
    /**
     * Returns data on the credit limit for a specified credit limit ID.
     *
     * @param int $creditId 
     * @param array $queryParameters {
     *     @var bool $reload [optional]
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyCreditCreditLimitRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CompanyCreditCreditLimitRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CompanyCreditDataCreditLimitInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditLimitRepositoryV1GetGet(int $creditId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyCreditCreditLimitRepositoryV1GetGet($creditId, $queryParameters), $fetch);
    }
    /**
     * Decreases the company credit with an Update, Reimburse, or Purchase transaction. This transaction increases company's outstanding balance and decreases company's available credit.
     *
     * @param int $creditId 
     * @param null|\Kiboko\Magento\V2\Model\V1CompanyCreditsCreditIdDecreaseBalancePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyCreditCreditBalanceManagementV1DecreasePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditBalanceManagementV1DecreasePost(int $creditId, ?\Kiboko\Magento\V2\Model\V1CompanyCreditsCreditIdDecreaseBalancePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyCreditCreditBalanceManagementV1DecreasePost($creditId, $requestBody), $fetch);
    }
    /**
     * Increases the company credit with an Allocate, Update, Refund, Revert, or Reimburse transaction. This transaction decreases company's outstanding balance and increases company's available credit.
     *
     * @param int $creditId 
     * @param null|\Kiboko\Magento\V2\Model\V1CompanyCreditsCreditIdIncreaseBalancePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyCreditCreditBalanceManagementV1IncreasePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditBalanceManagementV1IncreasePost(int $creditId, ?\Kiboko\Magento\V2\Model\V1CompanyCreditsCreditIdIncreaseBalancePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyCreditCreditBalanceManagementV1IncreasePost($creditId, $requestBody), $fetch);
    }
    /**
     * Update the following company credit attributes: credit currency, credit limit and setting to exceed credit.
     *
     * @param string $id 
     * @param null|\Kiboko\Magento\V2\Model\V1CompanyCreditsIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyCreditCreditLimitRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CompanyCreditCreditLimitRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CompanyCreditCreditLimitRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CompanyCreditDataCreditLimitInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditLimitRepositoryV1SavePut(string $id, ?\Kiboko\Magento\V2\Model\V1CompanyCreditsIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyCreditCreditLimitRepositoryV1SavePut($id, $requestBody), $fetch);
    }
    /**
     * Generate variation based on same product
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ConfigurableProductsVariationPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\ConfigurableProductConfigurableProductManagementV1GenerateVariationPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductConfigurableProductManagementV1GenerateVariationPut(?\Kiboko\Magento\V2\Model\V1ConfigurableProductsVariationPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\ConfigurableProductConfigurableProductManagementV1GenerateVariationPut($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param null|\Kiboko\Magento\V2\Model\V1ConfigurableProductsSkuChildPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\ConfigurableProductLinkManagementV1AddChildPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductLinkManagementV1AddChildPost(string $sku, ?\Kiboko\Magento\V2\Model\V1ConfigurableProductsSkuChildPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\ConfigurableProductLinkManagementV1AddChildPost($sku, $requestBody), $fetch);
    }
    /**
     * Get all children for Configurable product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\ConfigurableProductLinkManagementV1GetChildrenGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductLinkManagementV1GetChildrenGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\ConfigurableProductLinkManagementV1GetChildrenGet($sku), $fetch);
    }
    /**
     * Remove configurable product option
     *
     * @param string $sku 
     * @param string $childSku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\ConfigurableProductLinkManagementV1RemoveChildDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\ConfigurableProductLinkManagementV1RemoveChildDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductLinkManagementV1RemoveChildDelete(string $sku, string $childSku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\ConfigurableProductLinkManagementV1RemoveChildDelete($sku, $childSku), $fetch);
    }
    /**
     * Save option
     *
     * @param string $sku 
     * @param null|\Kiboko\Magento\V2\Model\V1ConfigurableProductsSkuOptionsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\ConfigurableProductOptionRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\ConfigurableProductOptionRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\ConfigurableProductOptionRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1SavePost(string $sku, ?\Kiboko\Magento\V2\Model\V1ConfigurableProductsSkuOptionsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\ConfigurableProductOptionRepositoryV1SavePost($sku, $requestBody), $fetch);
    }
    /**
     * Get all options for configurable product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\ConfigurableProductOptionRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\ConfigurableProductOptionRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ConfigurableProductDataOptionInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\ConfigurableProductOptionRepositoryV1GetListGet($sku), $fetch);
    }
    /**
     * Remove option from configurable product
     *
     * @param string $sku 
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\ConfigurableProductOptionRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\ConfigurableProductOptionRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1DeleteByIdDelete(string $sku, int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\ConfigurableProductOptionRepositoryV1DeleteByIdDelete($sku, $id), $fetch);
    }
    /**
     * Get option for configurable product
     *
     * @param string $sku 
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\ConfigurableProductOptionRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\ConfigurableProductOptionRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ConfigurableProductDataOptionInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1GetGet(string $sku, int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\ConfigurableProductOptionRepositoryV1GetGet($sku, $id), $fetch);
    }
    /**
     * Save option
     *
     * @param string $sku 
     * @param string $id 
     * @param null|\Kiboko\Magento\V2\Model\V1ConfigurableProductsSkuOptionsIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\ConfigurableProductOptionRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\ConfigurableProductOptionRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\ConfigurableProductOptionRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1SavePut(string $sku, string $id, ?\Kiboko\Magento\V2\Model\V1ConfigurableProductsSkuOptionsIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\ConfigurableProductOptionRepositoryV1SavePut($sku, $id, $requestBody), $fetch);
    }
    /**
     * Save a coupon.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CouponsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesRuleDataCouponInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1CouponsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesRuleCouponRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Delete coupon by coupon codes.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CouponsDeleteByCodesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponManagementV1DeleteByCodesPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponManagementV1DeleteByCodesPostUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponManagementV1DeleteByCodesPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesRuleDataCouponMassDeleteResultInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponManagementV1DeleteByCodesPost(?\Kiboko\Magento\V2\Model\V1CouponsDeleteByCodesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesRuleCouponManagementV1DeleteByCodesPost($requestBody), $fetch);
    }
    /**
     * Delete coupon by coupon ids.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CouponsDeleteByIdsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponManagementV1DeleteByIdsPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponManagementV1DeleteByIdsPostUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponManagementV1DeleteByIdsPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesRuleDataCouponMassDeleteResultInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponManagementV1DeleteByIdsPost(?\Kiboko\Magento\V2\Model\V1CouponsDeleteByIdsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesRuleCouponManagementV1DeleteByIdsPost($requestBody), $fetch);
    }
    /**
     * Generate coupon for a rule
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CouponsGeneratePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponManagementV1GeneratePostUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponManagementV1GeneratePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponManagementV1GeneratePost(?\Kiboko\Magento\V2\Model\V1CouponsGeneratePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesRuleCouponManagementV1GeneratePost($requestBody), $fetch);
    }
    /**
     * Retrieve a coupon using the specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#CouponRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesRuleDataCouponSearchResultInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesRuleCouponRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Delete coupon by coupon id.
     *
     * @param int $couponId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1DeleteByIdDelete(int $couponId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesRuleCouponRepositoryV1DeleteByIdDelete($couponId), $fetch);
    }
    /**
     * Get coupon by coupon id.
     *
     * @param int $couponId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesRuleDataCouponInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1GetByIdGet(int $couponId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesRuleCouponRepositoryV1GetByIdGet($couponId), $fetch);
    }
    /**
     * Save a coupon.
     *
     * @param string $couponId 
     * @param null|\Kiboko\Magento\V2\Model\V1CouponsCouponIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesRuleDataCouponInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1SavePut(string $couponId, ?\Kiboko\Magento\V2\Model\V1CouponsCouponIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesRuleCouponRepositoryV1SavePut($couponId, $requestBody), $fetch);
    }
    /**
     * Performs persist operations for a specified credit memo.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CreditmemoPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesCreditmemoRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataCreditmemoInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1CreditmemoPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesCreditmemoRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Prepare creditmemo to refund and save it.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CreditmemoRefundPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesCreditmemoManagementV1RefundPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataCreditmemoInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoManagementV1RefundPost(?\Kiboko\Magento\V2\Model\V1CreditmemoRefundPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesCreditmemoManagementV1RefundPost($requestBody), $fetch);
    }
    /**
     * Loads a specified credit memo.
     *
     * @param int $id The credit memo ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesCreditmemoRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataCreditmemoInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesCreditmemoRepositoryV1GetGet($id), $fetch);
    }
    /**
     * Cancels a specified credit memo.
     *
     * @param int $id The credit memo ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesCreditmemoManagementV1CancelPutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SalesCreditmemoManagementV1CancelPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoManagementV1CancelPut(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesCreditmemoManagementV1CancelPut($id), $fetch);
    }
    /**
     * Lists comments for a specified credit memo.
     *
     * @param int $id The credit memo ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesCreditmemoManagementV1GetCommentsListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataCreditmemoCommentSearchResultInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoManagementV1GetCommentsListGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesCreditmemoManagementV1GetCommentsListGet($id), $fetch);
    }
    /**
     * Performs persist operations for a specified entity.
     *
     * @param string $id 
     * @param null|\Kiboko\Magento\V2\Model\V1CreditmemoIdCommentsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesCreditmemoCommentRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SalesCreditmemoCommentRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataCreditmemoCommentInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoCommentRepositoryV1SavePost(string $id, ?\Kiboko\Magento\V2\Model\V1CreditmemoIdCommentsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesCreditmemoCommentRepositoryV1SavePost($id, $requestBody), $fetch);
    }
    /**
     * Emails a user a specified credit memo.
     *
     * @param int $id The credit memo ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesCreditmemoManagementV1NotifyPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoManagementV1NotifyPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesCreditmemoManagementV1NotifyPost($id), $fetch);
    }
    /**
     * Lists credit memos that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#CreditmemoRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesCreditmemoRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataCreditmemoSearchResultInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesCreditmemoRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save customer group.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CustomerGroupsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerGroupRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CustomerGroupRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerGroupRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataGroupInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1CustomerGroupsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerGroupRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Get default customer group.
     *
     * @param array $queryParameters {
     *     @var int $storeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerGroupManagementV1GetDefaultGroupGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CustomerGroupManagementV1GetDefaultGroupGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerGroupManagementV1GetDefaultGroupGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataGroupInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupManagementV1GetDefaultGroupGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerGroupManagementV1GetDefaultGroupGet($queryParameters), $fetch);
    }
    /**
     * Set system default customer group.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerGroupConfigV1SetDefaultCustomerGroupPut(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPut($id), $fetch);
    }
    /**
     * Get default customer group.
     *
     * @param int $storeId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GetV1CustomerGroupsDefaultByStoreIdBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\GetV1CustomerGroupsDefaultByStoreIdUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\GetV1CustomerGroupsDefaultByStoreIdInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataGroupInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomerGroupsDefaultByStoreId(int $storeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GetV1CustomerGroupsDefaultByStoreId($storeId), $fetch);
    }
    /**
     * Retrieve customer groups. The list of groups can be filtered to exclude the NOT_LOGGED_IN group using the first parameter and/or it can be filtered by tax class. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#GroupRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerGroupRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerGroupRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataGroupSearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerGroupRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Delete customer group by ID.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerGroupRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CustomerGroupRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerGroupRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1DeleteByIdDelete(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerGroupRepositoryV1DeleteByIdDelete($id), $fetch);
    }
    /**
     * Get customer group by group ID.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerGroupRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CustomerGroupRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerGroupRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataGroupInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1GetByIdGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerGroupRepositoryV1GetByIdGet($id), $fetch);
    }
    /**
     * Save customer group.
     *
     * @param string $id 
     * @param null|\Kiboko\Magento\V2\Model\V1CustomerGroupsIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerGroupRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CustomerGroupRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerGroupRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataGroupInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1SavePut(string $id, ?\Kiboko\Magento\V2\Model\V1CustomerGroupsIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerGroupRepositoryV1SavePut($id, $requestBody), $fetch);
    }
    /**
     * Check if customer group can be deleted.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerGroupManagementV1IsReadonlyGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CustomerGroupManagementV1IsReadonlyGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerGroupManagementV1IsReadonlyGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupManagementV1IsReadonlyGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerGroupManagementV1IsReadonlyGet($id), $fetch);
    }
    /**
     * Create customer account. Perform necessary business operations like sending email.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CustomersPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1CreateAccountPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataCustomerInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1CreateAccountPost(?\Kiboko\Magento\V2\Model\V1CustomersPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerAccountManagementV1CreateAccountPost($requestBody), $fetch);
    }
    /**
     * Retrieve customer address.
     *
     * @param int $addressId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerAddressRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerAddressRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataAddressInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressRepositoryV1GetByIdGet(int $addressId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerAddressRepositoryV1GetByIdGet($addressId), $fetch);
    }
    /**
     * Resend confirmation email.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CustomersConfirmPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1ResendConfirmationPostUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1ResendConfirmationPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ResendConfirmationPost(?\Kiboko\Magento\V2\Model\V1CustomersConfirmPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerAccountManagementV1ResendConfirmationPost($requestBody), $fetch);
    }
    /**
     * Check if given email is associated with a customer account in given website.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CustomersIsEmailAvailablePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1IsEmailAvailablePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1IsEmailAvailablePost(?\Kiboko\Magento\V2\Model\V1CustomersIsEmailAvailablePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerAccountManagementV1IsEmailAvailablePost($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataCustomerInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1GetByIdGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerCustomerRepositoryV1GetByIdGet(), $fetch);
    }
    /**
     * Create or update a customer.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CustomersMePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataCustomerInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1SavePut(?\Kiboko\Magento\V2\Model\V1CustomersMePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerCustomerRepositoryV1SavePut($requestBody), $fetch);
    }
    /**
     * Activate a customer account using a key that was sent in a confirmation email.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CustomersMeActivatePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1ActivateByIdPutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1ActivateByIdPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataCustomerInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ActivateByIdPut(?\Kiboko\Magento\V2\Model\V1CustomersMeActivatePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerAccountManagementV1ActivateByIdPut($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataAddressInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1GetDefaultBillingAddressGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerAccountManagementV1GetDefaultBillingAddressGet(), $fetch);
    }
    /**
     * Change customer password.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CustomersMePasswordPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1ChangePasswordByIdPutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1ChangePasswordByIdPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ChangePasswordByIdPut(?\Kiboko\Magento\V2\Model\V1CustomersMePasswordPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerAccountManagementV1ChangePasswordByIdPut($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataAddressInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1GetDefaultShippingAddressGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerAccountManagementV1GetDefaultShippingAddressGet(), $fetch);
    }
    /**
     * Send an email to the customer with a password reset link.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CustomersPasswordPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1InitiatePasswordResetPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1InitiatePasswordResetPut(?\Kiboko\Magento\V2\Model\V1CustomersPasswordPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerAccountManagementV1InitiatePasswordResetPut($requestBody), $fetch);
    }
    /**
     * Reset customer password.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CustomersResetPasswordPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1ResetPasswordPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ResetPasswordPost(?\Kiboko\Magento\V2\Model\V1CustomersResetPasswordPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerAccountManagementV1ResetPasswordPost($requestBody), $fetch);
    }
    /**
     * Retrieve customers which match a specified criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#CustomerRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataCustomerSearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerCustomerRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Validate customer data.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1CustomersValidatePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1ValidatePutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1ValidatePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataValidationResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ValidatePut(?\Kiboko\Magento\V2\Model\V1CustomersValidatePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerAccountManagementV1ValidatePut($requestBody), $fetch);
    }
    /**
     * Delete customer by Customer ID.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerCustomerRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1DeleteByIdDelete(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerCustomerRepositoryV1DeleteByIdDelete($customerId), $fetch);
    }
    /**
     * Get customer by Customer ID.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GetV1CustomerByCustomerIdBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\GetV1CustomerByCustomerIdUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\GetV1CustomerByCustomerIdInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataCustomerInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomerByCustomerId(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GetV1CustomerByCustomerId($customerId), $fetch);
    }
    /**
     * Create or update a customer.
     *
     * @param string $customerId 
     * @param null|\Kiboko\Magento\V2\Model\V1CustomersCustomerIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\PutV1CustomerByCustomerIdBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\PutV1CustomerByCustomerIdUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\PutV1CustomerByCustomerIdInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataCustomerInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CustomerByCustomerId(string $customerId, ?\Kiboko\Magento\V2\Model\V1CustomersCustomerIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\PutV1CustomerByCustomerId($customerId, $requestBody), $fetch);
    }
    /**
     * Retrieve default billing address for the given customerId.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GetV1CustomersByCustomerIdBillingAddressBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\GetV1CustomersByCustomerIdBillingAddressUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\GetV1CustomersByCustomerIdBillingAddressInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataAddressInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomersByCustomerIdBillingAddress(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GetV1CustomersByCustomerIdBillingAddress($customerId), $fetch);
    }
    /**
     * Creates an empty cart and quote for a specified customer if customer does not have a cart yet.
     *
     * @param int $customerId The customer ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\PostV1CustomersByCustomerIdCartBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\PostV1CustomersByCustomerIdCartUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CustomersByCustomerIdCart(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\PostV1CustomersByCustomerIdCart($customerId), $fetch);
    }
    /**
     * Gets the account confirmation status.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1GetConfirmationStatusGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1GetConfirmationStatusGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1GetConfirmationStatusGet(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerAccountManagementV1GetConfirmationStatusGet($customerId), $fetch);
    }
    /**
     * Check if password reset token is valid.
     *
     * @param int $customerId If 0 is given then a customer will be matched by the RP token.
     * @param string $resetPasswordLinkToken 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1ValidateResetPasswordLinkTokenGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1ValidateResetPasswordLinkTokenGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ValidateResetPasswordLinkTokenGet(int $customerId, string $resetPasswordLinkToken, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerAccountManagementV1ValidateResetPasswordLinkTokenGet($customerId, $resetPasswordLinkToken), $fetch);
    }
    /**
     * Check if customer can be deleted.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1IsReadonlyGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1IsReadonlyGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1IsReadonlyGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1IsReadonlyGet(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerAccountManagementV1IsReadonlyGet($customerId), $fetch);
    }
    /**
     * Retrieve default shipping address for the given customerId.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GetV1CustomersByCustomerIdShippingAddressBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\GetV1CustomersByCustomerIdShippingAddressUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\GetV1CustomersByCustomerIdShippingAddressInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataAddressInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomersByCustomerIdShippingAddress(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GetV1CustomersByCustomerIdShippingAddress($customerId), $fetch);
    }
    /**
     * Activate a customer account using a key that was sent in a confirmation email.
     *
     * @param string $email 
     * @param null|\Kiboko\Magento\V2\Model\V1CustomersEmailActivatePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1ActivatePutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CustomerAccountManagementV1ActivatePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataCustomerInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ActivatePut(string $email, ?\Kiboko\Magento\V2\Model\V1CustomersEmailActivatePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CustomerAccountManagementV1ActivatePut($email, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\V2\Model\DirectoryDataCountryInformationInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function directoryCountryInformationAcquirerV1GetCountriesInfoGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\DirectoryCountryInformationAcquirerV1GetCountriesInfoGet(), $fetch);
    }
    /**
     * Get country and region information for the store.
     *
     * @param string $countryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\DirectoryCountryInformationAcquirerV1GetCountryInfoGetBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\DirectoryDataCountryInformationInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function directoryCountryInformationAcquirerV1GetCountryInfoGet(string $countryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\DirectoryCountryInformationAcquirerV1GetCountryInfoGet($countryId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\V2\Model\DirectoryDataCurrencyInformationInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function directoryCurrencyInformationAcquirerV1GetCurrencyInfoGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\DirectoryCurrencyInformationAcquirerV1GetCurrencyInfoGet(), $fetch);
    }
    /**
     * Create attribute set from data
     *
     * @param null|\Kiboko\Magento\V2\Model\V1EavAttributeSetsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\EavAttributeSetManagementV1CreatePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\EavAttributeSetManagementV1CreatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\EavDataAttributeSetInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetManagementV1CreatePost(?\Kiboko\Magento\V2\Model\V1EavAttributeSetsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\EavAttributeSetManagementV1CreatePost($requestBody), $fetch);
    }
    /**
     * Retrieve list of Attribute Sets This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#AttributeSetRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\EavAttributeSetRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\EavDataAttributeSetSearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\EavAttributeSetRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Remove attribute set by given ID
     *
     * @param int $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\EavAttributeSetRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\EavAttributeSetRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetRepositoryV1DeleteByIdDelete(int $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\EavAttributeSetRepositoryV1DeleteByIdDelete($attributeSetId), $fetch);
    }
    /**
     * Retrieve attribute set information based on given ID
     *
     * @param int $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\EavAttributeSetRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\EavAttributeSetRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\EavDataAttributeSetInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetRepositoryV1GetGet(int $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\EavAttributeSetRepositoryV1GetGet($attributeSetId), $fetch);
    }
    /**
     * Save attribute set data
     *
     * @param string $attributeSetId 
     * @param null|\Kiboko\Magento\V2\Model\V1EavAttributeSetsAttributeSetIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\EavAttributeSetRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\EavAttributeSetRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\EavAttributeSetRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\EavDataAttributeSetInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetRepositoryV1SavePut(string $attributeSetId, ?\Kiboko\Magento\V2\Model\V1EavAttributeSetsAttributeSetIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\EavAttributeSetRepositoryV1SavePut($attributeSetId, $requestBody), $fetch);
    }
    /**
     * Return list of gift wrapping data objects based on search criteria
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GiftWrappingWrappingRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\GiftWrappingDataWrappingSearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftWrappingWrappingRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftWrappingWrappingRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create/Update new gift wrapping with data object values
     *
     * @param null|\Kiboko\Magento\V2\Model\V1GiftWrappingsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GiftWrappingWrappingRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\GiftWrappingWrappingRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\GiftWrappingDataWrappingInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftWrappingWrappingRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1GiftWrappingsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftWrappingWrappingRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Delete gift wrapping
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GiftWrappingWrappingRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\GiftWrappingWrappingRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftWrappingWrappingRepositoryV1DeleteByIdDelete(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftWrappingWrappingRepositoryV1DeleteByIdDelete($id), $fetch);
    }
    /**
     * Return data object for specified wrapping ID and store.
     *
     * @param int $id 
     * @param array $queryParameters {
     *     @var int $storeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GiftWrappingWrappingRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\GiftWrappingDataWrappingInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftWrappingWrappingRepositoryV1GetGet(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftWrappingWrappingRepositoryV1GetGet($id, $queryParameters), $fetch);
    }
    /**
     * Create/Update new gift wrapping with data object values
     *
     * @param string $wrappingId 
     * @param null|\Kiboko\Magento\V2\Model\V1GiftWrappingsWrappingIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GiftWrappingWrappingRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\GiftWrappingWrappingRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\GiftWrappingDataWrappingInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftWrappingWrappingRepositoryV1SavePut(string $wrappingId, ?\Kiboko\Magento\V2\Model\V1GiftWrappingsWrappingIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftWrappingWrappingRepositoryV1SavePut($wrappingId, $requestBody), $fetch);
    }
    /**
     * Estimate shipping
     *
     * @param null|\Kiboko\Magento\V2\Model\V1GiftregistryMineEstimateShippingMethodsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftRegistryShippingMethodManagementV1EstimateByRegistryIdPost(?\Kiboko\Magento\V2\Model\V1GiftregistryMineEstimateShippingMethodsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPost($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteGuestCartManagementV1CreateEmptyCartPostBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartManagementV1CreateEmptyCartPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteGuestCartManagementV1CreateEmptyCartPost(), $fetch);
    }
    /**
     * Enable a guest user to return information for a specified cart.
     *
     * @param string $cartId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteGuestCartRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataCartInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartRepositoryV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteGuestCartRepositoryV1GetGet($cartId), $fetch);
    }
    /**
     * Assign a specified customer to a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param null|\Kiboko\Magento\V2\Model\V1GuestCartsCartIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteGuestCartManagementV1AssignCustomerPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartManagementV1AssignCustomerPut(string $cartId, ?\Kiboko\Magento\V2\Model\V1GuestCartsCartIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteGuestCartManagementV1AssignCustomerPut($cartId, $requestBody), $fetch);
    }
    /**
     * Return the billing address for a specified quote.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteGuestBillingAddressManagementV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataAddressInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestBillingAddressManagementV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteGuestBillingAddressManagementV1GetGet($cartId), $fetch);
    }
    /**
     * Assign a specified billing address to a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param null|\Kiboko\Magento\V2\Model\V1GuestCartsCartIdBillingAddressPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteGuestBillingAddressManagementV1AssignPostBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestBillingAddressManagementV1AssignPost(string $cartId, ?\Kiboko\Magento\V2\Model\V1GuestCartsCartIdBillingAddressPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteGuestBillingAddressManagementV1AssignPost($cartId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $cartId 
     * @param null|\Kiboko\Magento\V2\Model\V1GuestCartsCartIdCheckoutFieldsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPost(string $cartId, ?\Kiboko\Magento\V2\Model\V1GuestCartsCartIdCheckoutFieldsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TemandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPost($cartId, $requestBody), $fetch);
    }
    /**
     * Set shipping/billing methods and additional data for cart and collect totals for guest.
     *
     * @param string $cartId The cart ID.
     * @param null|\Kiboko\Magento\V2\Model\V1GuestCartsCartIdCollectTotalsPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataTotalsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartTotalManagementV1CollectTotalsPut(string $cartId, ?\Kiboko\Magento\V2\Model\V1GuestCartsCartIdCollectTotalsPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteGuestCartTotalManagementV1CollectTotalsPut($cartId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $cartId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1DeleteSearchRequestDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointGuestCartCollectionPointManagementV1DeleteSearchRequestDelete(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1DeleteSearchRequestDelete($cartId), $fetch);
    }
    /**
     * 
     *
     * @param string $cartId 
     * @param null|\Kiboko\Magento\V2\Model\V1GuestCartsCartIdCollectionPointSearchRequestPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1SaveSearchRequestPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\TemandoShippingDataCollectionPointSearchRequestInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointGuestCartCollectionPointManagementV1SaveSearchRequestPut(string $cartId, ?\Kiboko\Magento\V2\Model\V1GuestCartsCartIdCollectionPointSearchRequestPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1SaveSearchRequestPut($cartId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $cartId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\V2\Model\TemandoShippingDataCollectionPointQuoteCollectionPointInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointGuestCartCollectionPointManagementV1GetCollectionPointsGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1GetCollectionPointsGet($cartId), $fetch);
    }
    /**
     * 
     *
     * @param string $cartId 
     * @param null|\Kiboko\Magento\V2\Model\V1GuestCartsCartIdCollectionPointSelectPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1SelectCollectionPointPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointGuestCartCollectionPointManagementV1SelectCollectionPointPost(string $cartId, ?\Kiboko\Magento\V2\Model\V1GuestCartsCartIdCollectionPointSelectPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1SelectCollectionPointPost($cartId, $requestBody), $fetch);
    }
    /**
     * Delete a coupon from a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteGuestCouponManagementV1RemoveDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCouponManagementV1RemoveDelete(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteGuestCouponManagementV1RemoveDelete($cartId), $fetch);
    }
    /**
     * Return information for a coupon in a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteGuestCouponManagementV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCouponManagementV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteGuestCouponManagementV1GetGet($cartId), $fetch);
    }
    /**
     * Add a coupon by code to a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $couponCode The coupon code data.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteGuestCouponManagementV1SetPutBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCouponManagementV1SetPut(string $cartId, string $couponCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteGuestCouponManagementV1SetPut($cartId, $couponCode), $fetch);
    }
    /**
     * Handle selected delivery option.
     *
     * @param string $cartId The shopping cart ID.
     * @param null|\Kiboko\Magento\V2\Model\V1GuestCartsCartIdDeliveryOptionPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingQuoteGuestCartDeliveryOptionManagementV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingQuoteGuestCartDeliveryOptionManagementV1SavePost(string $cartId, ?\Kiboko\Magento\V2\Model\V1GuestCartsCartIdDeliveryOptionPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TemandoShippingQuoteGuestCartDeliveryOptionManagementV1SavePost($cartId, $requestBody), $fetch);
    }
    /**
     * Estimate shipping by address and return list of available shipping methods
     *
     * @param string $cartId 
     * @param null|\Kiboko\Magento\V2\Model\V1GuestCartsCartIdEstimateShippingMethodsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost(string $cartId, ?\Kiboko\Magento\V2\Model\V1GuestCartsCartIdEstimateShippingMethodsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteGuestShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $requestBody), $fetch);
    }
    /**
     * Return the gift message for a specified order.
     *
     * @param string $cartId The shopping cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\V2\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageGuestCartRepositoryV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftMessageGuestCartRepositoryV1GetGet($cartId), $fetch);
    }
    /**
     * Set the gift message for an entire order.
     *
     * @param string $cartId The cart ID.
     * @param null|\Kiboko\Magento\V2\Model\V1GuestCartsCartIdGiftMessagePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GiftMessageGuestCartRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageGuestCartRepositoryV1SavePost(string $cartId, ?\Kiboko\Magento\V2\Model\V1GuestCartsCartIdGiftMessagePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftMessageGuestCartRepositoryV1SavePost($cartId, $requestBody), $fetch);
    }
    /**
     * Return the gift message for a specified item in a specified shopping cart.
     *
     * @param string $cartId The shopping cart ID.
     * @param int $itemId The item ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GiftMessageGuestItemRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageGuestItemRepositoryV1GetGet(string $cartId, int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftMessageGuestItemRepositoryV1GetGet($cartId, $itemId), $fetch);
    }
    /**
     * Set the gift message for a specified item in a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param int $itemId The item ID.
     * @param null|\Kiboko\Magento\V2\Model\V1GuestCartsCartIdGiftMessageItemIdPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GiftMessageGuestItemRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageGuestItemRepositoryV1SavePost(string $cartId, int $itemId, ?\Kiboko\Magento\V2\Model\V1GuestCartsCartIdGiftMessageItemIdPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftMessageGuestItemRepositoryV1SavePost($cartId, $itemId, $requestBody), $fetch);
    }
    /**
     * List items that are assigned to a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteGuestCartItemRepositoryV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataCartItemInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartItemRepositoryV1GetListGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteGuestCartItemRepositoryV1GetListGet($cartId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $cartId 
     * @param null|\Kiboko\Magento\V2\Model\V1GuestCartsCartIdItemsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteGuestCartItemRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataCartItemInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartItemRepositoryV1SavePost(string $cartId, ?\Kiboko\Magento\V2\Model\V1GuestCartsCartIdItemsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteGuestCartItemRepositoryV1SavePost($cartId, $requestBody), $fetch);
    }
    /**
     * Remove the specified item from the specified cart.
     *
     * @param string $cartId The cart ID.
     * @param int $itemId The item ID of the item to be removed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteGuestCartItemRepositoryV1DeleteByIdDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartItemRepositoryV1DeleteByIdDelete(string $cartId, int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteGuestCartItemRepositoryV1DeleteByIdDelete($cartId, $itemId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $cartId 
     * @param string $itemId 
     * @param null|\Kiboko\Magento\V2\Model\V1GuestCartsCartIdItemsItemIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteGuestCartItemRepositoryV1SavePutBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataCartItemInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartItemRepositoryV1SavePut(string $cartId, string $itemId, ?\Kiboko\Magento\V2\Model\V1GuestCartsCartIdItemsItemIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteGuestCartItemRepositoryV1SavePut($cartId, $itemId, $requestBody), $fetch);
    }
    /**
     * Place an order for a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param null|\Kiboko\Magento\V2\Model\V1GuestCartsCartIdOrderPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteGuestCartManagementV1PlaceOrderPutBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartManagementV1PlaceOrderPut(string $cartId, ?\Kiboko\Magento\V2\Model\V1GuestCartsCartIdOrderPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteGuestCartManagementV1PlaceOrderPut($cartId, $requestBody), $fetch);
    }
    /**
     * Get payment information
     *
     * @param string $cartId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\V2\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CheckoutGuestPaymentInformationManagementV1GetPaymentInformationGet($cartId), $fetch);
    }
    /**
     * Set payment information and place order for a specified cart.
     *
     * @param string $cartId 
     * @param null|\Kiboko\Magento\V2\Model\V1GuestCartsCartIdPaymentInformationPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost(string $cartId, ?\Kiboko\Magento\V2\Model\V1GuestCartsCartIdPaymentInformationPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($cartId, $requestBody), $fetch);
    }
    /**
     * List available payment methods for a specified shopping cart. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See http://devdocs.magento.com/codelinks/attributes.html#GuestPaymentMethodManagementInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteGuestPaymentMethodManagementV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataPaymentMethodInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestPaymentMethodManagementV1GetListGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteGuestPaymentMethodManagementV1GetListGet($cartId), $fetch);
    }
    /**
     * Return the payment method for a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteGuestPaymentMethodManagementV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataPaymentInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestPaymentMethodManagementV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteGuestPaymentMethodManagementV1GetGet($cartId), $fetch);
    }
    /**
     * Add a specified payment method to a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param null|\Kiboko\Magento\V2\Model\V1GuestCartsCartIdSelectedPaymentMethodPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteGuestPaymentMethodManagementV1SetPutBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestPaymentMethodManagementV1SetPut(string $cartId, ?\Kiboko\Magento\V2\Model\V1GuestCartsCartIdSelectedPaymentMethodPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteGuestPaymentMethodManagementV1SetPut($cartId, $requestBody), $fetch);
    }
    /**
     * Set payment information for a specified cart.
     *
     * @param string $cartId 
     * @param null|\Kiboko\Magento\V2\Model\V1GuestCartsCartIdSetPaymentInformationPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPostBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost(string $cartId, ?\Kiboko\Magento\V2\Model\V1GuestCartsCartIdSetPaymentInformationPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPost($cartId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $cartId 
     * @param null|\Kiboko\Magento\V2\Model\V1GuestCartsCartIdShippingInformationPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\V2\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestShippingInformationManagementV1SaveAddressInformationPost(string $cartId, ?\Kiboko\Magento\V2\Model\V1GuestCartsCartIdShippingInformationPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CheckoutGuestShippingInformationManagementV1SaveAddressInformationPost($cartId, $requestBody), $fetch);
    }
    /**
     * List applicable shipping methods for a specified quote.
     *
     * @param string $cartId The shopping cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteGuestShippingMethodManagementV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestShippingMethodManagementV1GetListGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteGuestShippingMethodManagementV1GetListGet($cartId), $fetch);
    }
    /**
     * Return quote totals data for a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\QuoteGuestCartTotalRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataTotalsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartTotalRepositoryV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\QuoteGuestCartTotalRepositoryV1GetGet($cartId), $fetch);
    }
    /**
     * Calculate quote totals based on address and shipping method.
     *
     * @param string $cartId 
     * @param null|\Kiboko\Magento\V2\Model\V1GuestCartsCartIdTotalsInformationPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataTotalsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestTotalsInformationManagementV1CalculatePost(string $cartId, ?\Kiboko\Magento\V2\Model\V1GuestCartsCartIdTotalsInformationPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CheckoutGuestTotalsInformationManagementV1CalculatePost($cartId, $requestBody), $fetch);
    }
    /**
     * Estimate shipping
     *
     * @param string $cartId The shopping cart ID.
     * @param null|\Kiboko\Magento\V2\Model\V1GuestGiftregistryCartIdEstimateShippingMethodsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\GiftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost(string $cartId, ?\Kiboko\Magento\V2\Model\V1GuestGiftregistryCartIdEstimateShippingMethodsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\GiftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost($cartId, $requestBody), $fetch);
    }
    /**
     * Moves teams and users within the company structure.
     *
     * @param int $id 
     * @param null|\Kiboko\Magento\V2\Model\V1HierarchyMoveIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyCompanyHierarchyV1MoveNodePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCompanyHierarchyV1MoveNodePut(int $id, ?\Kiboko\Magento\V2\Model\V1HierarchyMoveIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyCompanyHierarchyV1MoveNodePut($id, $requestBody), $fetch);
    }
    /**
     * Returns the list of teams and company users in the company structure.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyCompanyHierarchyV1GetCompanyHierarchyGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CompanyDataHierarchyInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCompanyHierarchyV1GetCompanyHierarchyGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyCompanyHierarchyV1GetCompanyHierarchyGet($id), $fetch);
    }
    /**
     * Create access token for admin given the admin credentials.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1IntegrationAdminTokenPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function integrationAdminTokenServiceV1CreateAdminAccessTokenPost(?\Kiboko\Magento\V2\Model\V1IntegrationAdminTokenPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPost($requestBody), $fetch);
    }
    /**
     * Create access token for admin given the customer credentials.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1IntegrationCustomerTokenPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\IntegrationCustomerTokenServiceV1CreateCustomerAccessTokenPostBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function integrationCustomerTokenServiceV1CreateCustomerAccessTokenPost(?\Kiboko\Magento\V2\Model\V1IntegrationCustomerTokenPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\IntegrationCustomerTokenServiceV1CreateCustomerAccessTokenPost($requestBody), $fetch);
    }
    /**
     * Create refund for invoice
     *
     * @param int $invoiceId 
     * @param null|\Kiboko\Magento\V2\Model\V1InvoiceInvoiceIdRefundPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesRefundInvoiceV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRefundInvoiceV1ExecutePost(int $invoiceId, ?\Kiboko\Magento\V2\Model\V1InvoiceInvoiceIdRefundPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesRefundInvoiceV1ExecutePost($invoiceId, $requestBody), $fetch);
    }
    /**
     * Lists invoices that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#InvoiceRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesInvoiceRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataInvoiceSearchResultInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesInvoiceRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Performs persist operations for a specified invoice.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1InvoicesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesInvoiceRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataInvoiceInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1InvoicesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesInvoiceRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Performs persist operations for a specified invoice comment.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1InvoicesCommentsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesInvoiceCommentRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SalesInvoiceCommentRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataInvoiceCommentInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceCommentRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1InvoicesCommentsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesInvoiceCommentRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Loads a specified invoice.
     *
     * @param int $id The invoice ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesInvoiceRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataInvoiceInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesInvoiceRepositoryV1GetGet($id), $fetch);
    }
    /**
     * Sets invoice capture.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesInvoiceManagementV1SetCapturePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceManagementV1SetCapturePost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesInvoiceManagementV1SetCapturePost($id), $fetch);
    }
    /**
     * Lists comments for a specified invoice.
     *
     * @param int $id The invoice ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesInvoiceManagementV1GetCommentsListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataInvoiceCommentSearchResultInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceManagementV1GetCommentsListGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesInvoiceManagementV1GetCommentsListGet($id), $fetch);
    }
    /**
     * Emails a user a specified invoice.
     *
     * @param int $id The invoice ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesInvoiceManagementV1NotifyPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceManagementV1NotifyPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesInvoiceManagementV1NotifyPost($id), $fetch);
    }
    /**
     * Voids a specified invoice.
     *
     * @param int $id The invoice ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesInvoiceManagementV1SetVoidPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceManagementV1SetVoidPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesInvoiceManagementV1SetVoidPost($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\BackendModuleServiceV1GetModulesGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function backendModuleServiceV1GetModulesGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\BackendModuleServiceV1GetModulesGet(), $fetch);
    }
    /**
     * Returns the billing address for a specified quote.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteBillingAddressManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteBillingAddressManagementV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataAddressInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteBillingAddressManagementV1GetGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\NegotiableQuoteBillingAddressManagementV1GetGet($cartId), $fetch);
    }
    /**
     * Assigns a specified billing address to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param null|\Kiboko\Magento\V2\Model\V1NegotiableCartsCartIdBillingAddressPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteBillingAddressManagementV1AssignPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteBillingAddressManagementV1AssignPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteBillingAddressManagementV1AssignPost(int $cartId, ?\Kiboko\Magento\V2\Model\V1NegotiableCartsCartIdBillingAddressPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\NegotiableQuoteBillingAddressManagementV1AssignPost($cartId, $requestBody), $fetch);
    }
    /**
     * Deletes a coupon from a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteCouponManagementV1RemoveDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteCouponManagementV1RemoveDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteCouponManagementV1RemoveDelete(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\NegotiableQuoteCouponManagementV1RemoveDelete($cartId), $fetch);
    }
    /**
     * Adds a coupon by code to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $couponCode The coupon code data.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteCouponManagementV1SetPutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteCouponManagementV1SetPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteCouponManagementV1SetPut(int $cartId, string $couponCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\NegotiableQuoteCouponManagementV1SetPut($cartId, $couponCode), $fetch);
    }
    /**
     * Estimate shipping by address and return list of available shipping methods
     *
     * @param string $cartId 
     * @param null|\Kiboko\Magento\V2\Model\V1NegotiableCartsCartIdEstimateShippingMethodsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPost(string $cartId, ?\Kiboko\Magento\V2\Model\V1NegotiableCartsCartIdEstimateShippingMethodsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\NegotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $requestBody), $fetch);
    }
    /**
     * Estimate shipping
     *
     * @param int $cartId The shopping cart ID.
     * @param null|\Kiboko\Magento\V2\Model\V1NegotiableCartsCartIdEstimateShippingMethodsByAddressIdPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteShippingMethodManagementV1EstimateByAddressIdPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteShippingMethodManagementV1EstimateByAddressIdPost(int $cartId, ?\Kiboko\Magento\V2\Model\V1NegotiableCartsCartIdEstimateShippingMethodsByAddressIdPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\NegotiableQuoteShippingMethodManagementV1EstimateByAddressIdPost($cartId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $cartId 
     * @param null|\Kiboko\Magento\V2\Model\V1NegotiableCartsCartIdGiftCardsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPost(int $cartId, ?\Kiboko\Magento\V2\Model\V1NegotiableCartsCartIdGiftCardsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\NegotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPost($cartId, $requestBody), $fetch);
    }
    /**
     * Remove GiftCard Account entity
     *
     * @param int $cartId 
     * @param string $giftCardCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteGiftCardAccountManagementV1DeleteByQuoteIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteGiftCardAccountManagementV1DeleteByQuoteIdDelete(int $cartId, string $giftCardCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\NegotiableQuoteGiftCardAccountManagementV1DeleteByQuoteIdDelete($cartId, $giftCardCode), $fetch);
    }
    /**
     * Get payment information
     *
     * @param int $cartId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuotePaymentInformationManagementV1GetPaymentInformationGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuotePaymentInformationManagementV1GetPaymentInformationGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\NegotiableQuotePaymentInformationManagementV1GetPaymentInformationGet($cartId), $fetch);
    }
    /**
     * Set payment information and place order for a specified cart.
     *
     * @param int $cartId 
     * @param null|\Kiboko\Magento\V2\Model\V1NegotiableCartsCartIdPaymentInformationPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost(int $cartId, ?\Kiboko\Magento\V2\Model\V1NegotiableCartsCartIdPaymentInformationPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($cartId, $requestBody), $fetch);
    }
    /**
     * Set payment information for a specified cart.
     *
     * @param int $cartId 
     * @param null|\Kiboko\Magento\V2\Model\V1NegotiableCartsCartIdSetPaymentInformationPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuotePaymentInformationManagementV1SavePaymentInformationPost(int $cartId, ?\Kiboko\Magento\V2\Model\V1NegotiableCartsCartIdSetPaymentInformationPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationPost($cartId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $cartId 
     * @param null|\Kiboko\Magento\V2\Model\V1NegotiableCartsCartIdShippingInformationPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteShippingInformationManagementV1SaveAddressInformationPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteShippingInformationManagementV1SaveAddressInformationPost(int $cartId, ?\Kiboko\Magento\V2\Model\V1NegotiableCartsCartIdShippingInformationPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\NegotiableQuoteShippingInformationManagementV1SaveAddressInformationPost($cartId, $requestBody), $fetch);
    }
    /**
     * Returns quote totals data for a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteCartTotalRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteCartTotalRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataTotalsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteCartTotalRepositoryV1GetGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\NegotiableQuoteCartTotalRepositoryV1GetGet($cartId), $fetch);
    }
    /**
     * Returns content for one or more files attached on the quote comment.
     *
     * @param array $queryParameters {
     *     @var array $attachmentIds 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteAttachmentContentManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteAttachmentContentManagementV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\NegotiableQuoteDataAttachmentContentInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteAttachmentContentManagementV1GetGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\NegotiableQuoteAttachmentContentManagementV1GetGet($queryParameters), $fetch);
    }
    /**
     * Decline the B2B quote. All custom pricing will be removed from this quote. The buyer will be able to place an order using their standard catalog prices and discounts.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1NegotiableQuoteDeclinePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteNegotiableQuoteManagementV1DeclinePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteNegotiableQuoteManagementV1DeclinePost(?\Kiboko\Magento\V2\Model\V1NegotiableQuoteDeclinePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\NegotiableQuoteNegotiableQuoteManagementV1DeclinePost($requestBody), $fetch);
    }
    /**
     * Refreshes item prices, taxes, discounts, cart rules in the negotiable quote as per the latest changes in the catalog / shared catalog and in the price rules. Depending on the negotiable quote state and totals, all or just some of quote numbers will be recalculated. 'Update Prices' parameter forces refresh on any quote that is not locked for admin user, including the quotes with a negotiated price. The request can be applied to one or more quotes at the same time.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1NegotiableQuotePricesUpdatedPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteNegotiableQuotePriceManagementV1PricesUpdatedPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteNegotiableQuotePriceManagementV1PricesUpdatedPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteNegotiableQuotePriceManagementV1PricesUpdatedPost(?\Kiboko\Magento\V2\Model\V1NegotiableQuotePricesUpdatedPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\NegotiableQuoteNegotiableQuotePriceManagementV1PricesUpdatedPost($requestBody), $fetch);
    }
    /**
     * Create a B2B quote based on a regular Magento quote. If the B2B quote requires a shipping address (for negotiation or tax calculations), add it to the regular quote before you create a B2B quote.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1NegotiableQuoteRequestPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteNegotiableQuoteManagementV1CreatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteNegotiableQuoteManagementV1CreatePost(?\Kiboko\Magento\V2\Model\V1NegotiableQuoteRequestPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\NegotiableQuoteNegotiableQuoteManagementV1CreatePost($requestBody), $fetch);
    }
    /**
     * Submit the B2B quote to the customer. The quote status for the customer will be changed to 'Updated', and the customer can work with the quote.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1NegotiableQuoteSubmitToCustomerPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteNegotiableQuoteManagementV1AdminSendPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteNegotiableQuoteManagementV1AdminSendPost(?\Kiboko\Magento\V2\Model\V1NegotiableQuoteSubmitToCustomerPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\NegotiableQuoteNegotiableQuoteManagementV1AdminSendPost($requestBody), $fetch);
    }
    /**
     * Save quote
     *
     * @param string $quoteId 
     * @param null|\Kiboko\Magento\V2\Model\V1NegotiableQuoteQuoteIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteNegotiableCartRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteNegotiableCartRepositoryV1SavePut(string $quoteId, ?\Kiboko\Magento\V2\Model\V1NegotiableQuoteQuoteIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\NegotiableQuoteNegotiableCartRepositoryV1SavePut($quoteId, $requestBody), $fetch);
    }
    /**
     * Returns comments for a specified negotiable quote.
     *
     * @param int $quoteId Negotiable Quote ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteCommentLocatorV1GetListForQuoteGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteCommentLocatorV1GetListForQuoteGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\NegotiableQuoteDataCommentInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteCommentLocatorV1GetListForQuoteGet(int $quoteId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\NegotiableQuoteCommentLocatorV1GetListForQuoteGet($quoteId), $fetch);
    }
    /**
     * Updates the shipping method on a negotiable quote.
     *
     * @param int $quoteId Negotiable Quote id
     * @param null|\Kiboko\Magento\V2\Model\V1NegotiableQuoteQuoteIdShippingMethodPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\NegotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPut(int $quoteId, ?\Kiboko\Magento\V2\Model\V1NegotiableQuoteQuoteIdShippingMethodPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\NegotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPut($quoteId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $orderId 
     * @param null|\Kiboko\Magento\V2\Model\V1OrderOrderIdInvoicePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesInvoiceOrderV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceOrderV1ExecutePost(int $orderId, ?\Kiboko\Magento\V2\Model\V1OrderOrderIdInvoicePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesInvoiceOrderV1ExecutePost($orderId, $requestBody), $fetch);
    }
    /**
     * Create offline refund for order
     *
     * @param int $orderId 
     * @param null|\Kiboko\Magento\V2\Model\V1OrderOrderIdRefundPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesRefundOrderV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRefundOrderV1ExecutePost(int $orderId, ?\Kiboko\Magento\V2\Model\V1OrderOrderIdRefundPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesRefundOrderV1ExecutePost($orderId, $requestBody), $fetch);
    }
    /**
     * Creates new Shipment for given Order.
     *
     * @param int $orderId 
     * @param null|\Kiboko\Magento\V2\Model\V1OrderOrderIdShipPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesShipOrderV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipOrderV1ExecutePost(int $orderId, ?\Kiboko\Magento\V2\Model\V1OrderOrderIdShipPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesShipOrderV1ExecutePost($orderId, $requestBody), $fetch);
    }
    /**
     * Lists orders that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#OrderRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesOrderRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataOrderSearchResultInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesOrderRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Performs persist operations for a specified order.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1OrdersPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesOrderRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataOrderInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1OrdersPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesOrderRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Performs persist operations for a specified order.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1OrdersCreatePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesOrderRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataOrderInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderRepositoryV1SavePut(?\Kiboko\Magento\V2\Model\V1OrdersCreatePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesOrderRepositoryV1SavePut($requestBody), $fetch);
    }
    /**
     * Lists order items that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#OrderItemRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesOrderItemRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataOrderItemSearchResultInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderItemRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesOrderItemRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Loads a specified order item.
     *
     * @param int $id The order item ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesOrderItemRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataOrderItemInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderItemRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesOrderItemRepositoryV1GetGet($id), $fetch);
    }
    /**
     * Loads a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesOrderRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataOrderInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesOrderRepositoryV1GetGet($id), $fetch);
    }
    /**
     * Cancels a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesOrderManagementV1CancelPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1CancelPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesOrderManagementV1CancelPost($id), $fetch);
    }
    /**
     * Lists comments for a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesOrderManagementV1GetCommentsListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataOrderStatusHistorySearchResultInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1GetCommentsListGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesOrderManagementV1GetCommentsListGet($id), $fetch);
    }
    /**
     * Adds a comment to a specified order.
     *
     * @param int $id The order ID.
     * @param null|\Kiboko\Magento\V2\Model\V1OrdersIdCommentsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesOrderManagementV1AddCommentPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1AddCommentPost(int $id, ?\Kiboko\Magento\V2\Model\V1OrdersIdCommentsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesOrderManagementV1AddCommentPost($id, $requestBody), $fetch);
    }
    /**
     * Emails a user a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesOrderManagementV1NotifyPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1NotifyPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesOrderManagementV1NotifyPost($id), $fetch);
    }
    /**
     * Holds a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesOrderManagementV1HoldPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1HoldPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesOrderManagementV1HoldPost($id), $fetch);
    }
    /**
     * Gets the status for a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesOrderManagementV1GetStatusGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1GetStatusGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesOrderManagementV1GetStatusGet($id), $fetch);
    }
    /**
     * Releases a specified order from hold status.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesOrderManagementV1UnHoldPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1UnHoldPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesOrderManagementV1UnHoldPost($id), $fetch);
    }
    /**
     * Performs persist operations for a specified order address.
     *
     * @param string $parentId 
     * @param null|\Kiboko\Magento\V2\Model\V1OrdersParentIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesOrderAddressRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataOrderAddressInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderAddressRepositoryV1SavePut(string $parentId, ?\Kiboko\Magento\V2\Model\V1OrdersParentIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesOrderAddressRepositoryV1SavePut($parentId, $requestBody), $fetch);
    }
    /**
     * Get product list
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductSearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create product
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1ProductsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Collect and retrieve the list of product render info This info contains raw prices and formated prices, product name, stock status, store_id, etc
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     *     @var int $storeId 
     *     @var string $currencyCode 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductRenderSearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRenderListV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductRenderListV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create attribute set from data
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsAttributeSetsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogAttributeSetManagementV1CreatePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogAttributeSetManagementV1CreatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\EavDataAttributeSetInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetManagementV1CreatePost(?\Kiboko\Magento\V2\Model\V1ProductsAttributeSetsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogAttributeSetManagementV1CreatePost($requestBody), $fetch);
    }
    /**
     * Assign attribute to attribute set
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsAttributeSetsAttributesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeManagementV1AssignPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeManagementV1AssignPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeManagementV1AssignPost(?\Kiboko\Magento\V2\Model\V1ProductsAttributeSetsAttributesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductAttributeManagementV1AssignPost($requestBody), $fetch);
    }
    /**
     * Save attribute group
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsAttributeSetsGroupsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeGroupRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\EavDataAttributeGroupInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeGroupRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1ProductsAttributeSetsGroupsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductAttributeGroupRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Retrieve list of attribute groups
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeGroupRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeGroupRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\EavDataAttributeGroupSearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeGroupRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductAttributeGroupRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Remove attribute group by id
     *
     * @param int $groupId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeGroupRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeGroupRepositoryV1DeleteByIdDelete(int $groupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductAttributeGroupRepositoryV1DeleteByIdDelete($groupId), $fetch);
    }
    /**
     * Retrieve list of Attribute Sets
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogAttributeSetRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\EavDataAttributeSetSearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogAttributeSetRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Remove attribute set by given ID
     *
     * @param int $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogAttributeSetRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogAttributeSetRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetRepositoryV1DeleteByIdDelete(int $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogAttributeSetRepositoryV1DeleteByIdDelete($attributeSetId), $fetch);
    }
    /**
     * Retrieve attribute set information based on given ID
     *
     * @param int $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogAttributeSetRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogAttributeSetRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\EavDataAttributeSetInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetRepositoryV1GetGet(int $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogAttributeSetRepositoryV1GetGet($attributeSetId), $fetch);
    }
    /**
     * Save attribute set data
     *
     * @param string $attributeSetId 
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsAttributeSetsAttributeSetIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogAttributeSetRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogAttributeSetRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CatalogAttributeSetRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\EavDataAttributeSetInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetRepositoryV1SavePut(string $attributeSetId, ?\Kiboko\Magento\V2\Model\V1ProductsAttributeSetsAttributeSetIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogAttributeSetRepositoryV1SavePut($attributeSetId, $requestBody), $fetch);
    }
    /**
     * Retrieve related attributes based on given attribute set ID
     *
     * @param string $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeManagementV1GetAttributesGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeManagementV1GetAttributesGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductAttributeInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeManagementV1GetAttributesGet(string $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductAttributeManagementV1GetAttributesGet($attributeSetId), $fetch);
    }
    /**
     * Remove attribute from attribute set
     *
     * @param string $attributeSetId 
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeManagementV1UnassignDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeManagementV1UnassignDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeManagementV1UnassignDelete(string $attributeSetId, string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductAttributeManagementV1UnassignDelete($attributeSetId, $attributeCode), $fetch);
    }
    /**
     * Save attribute group
     *
     * @param string $attributeSetId 
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsAttributeSetsAttributeSetIdGroupsPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeGroupRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\EavDataAttributeGroupInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeGroupRepositoryV1SavePut(string $attributeSetId, ?\Kiboko\Magento\V2\Model\V1ProductsAttributeSetsAttributeSetIdGroupsPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductAttributeGroupRepositoryV1SavePut($attributeSetId, $requestBody), $fetch);
    }
    /**
     * Retrieve all attributes for entity type
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductAttributeSearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductAttributeRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save attribute data
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsAttributesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductAttributeInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1ProductsAttributesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductAttributeRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeTypesListV1GetItemsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductAttributeTypeInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeTypesListV1GetItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductAttributeTypesListV1GetItemsGet(), $fetch);
    }
    /**
     * Delete Attribute by id
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1DeleteByIdDelete(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductAttributeRepositoryV1DeleteByIdDelete($attributeCode), $fetch);
    }
    /**
     * Retrieve specific attribute
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductAttributeInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1GetGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductAttributeRepositoryV1GetGet($attributeCode), $fetch);
    }
    /**
     * Save attribute data
     *
     * @param string $attributeCode 
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsAttributesAttributeCodePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductAttributeInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1SavePut(string $attributeCode, ?\Kiboko\Magento\V2\Model\V1ProductsAttributesAttributeCodePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductAttributeRepositoryV1SavePut($attributeCode, $requestBody), $fetch);
    }
    /**
     * Retrieve list of attribute options
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeOptionManagementV1GetItemsGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeOptionManagementV1GetItemsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\EavDataAttributeOptionInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeOptionManagementV1GetItemsGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductAttributeOptionManagementV1GetItemsGet($attributeCode), $fetch);
    }
    /**
     * Add option to attribute
     *
     * @param string $attributeCode 
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsAttributesAttributeCodeOptionsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeOptionManagementV1AddPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeOptionManagementV1AddPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeOptionManagementV1AddPost(string $attributeCode, ?\Kiboko\Magento\V2\Model\V1ProductsAttributesAttributeCodeOptionsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductAttributeOptionManagementV1AddPost($attributeCode, $requestBody), $fetch);
    }
    /**
     * Delete option from attribute
     *
     * @param string $attributeCode 
     * @param string $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeOptionManagementV1DeleteDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeOptionManagementV1DeleteDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeOptionManagementV1DeleteDelete(string $attributeCode, string $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductAttributeOptionManagementV1DeleteDelete($attributeCode, $optionId), $fetch);
    }
    /**
     * Add or update product prices. Input item should correspond \Magento\Catalog\Api\Data\CostInterface. If any items will have invalid price, store id or sku, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsBasePricesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogBasePriceStorageV1UpdatePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogBasePriceStorageV1UpdatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogBasePriceStorageV1UpdatePost(?\Kiboko\Magento\V2\Model\V1ProductsBasePricesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogBasePriceStorageV1UpdatePost($requestBody), $fetch);
    }
    /**
     * Return product prices. In case of at least one of skus is not found exception will be thrown.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsBasePricesInformationPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogBasePriceStorageV1GetPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataBasePriceInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogBasePriceStorageV1GetPost(?\Kiboko\Magento\V2\Model\V1ProductsBasePricesInformationPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogBasePriceStorageV1GetPost($requestBody), $fetch);
    }
    /**
     * Add or update product cost. Input item should correspond to \Magento\Catalog\Api\Data\CostInterface. If any items will have invalid cost, store id or sku, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsCostPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogCostStorageV1UpdatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCostStorageV1UpdatePost(?\Kiboko\Magento\V2\Model\V1ProductsCostPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogCostStorageV1UpdatePost($requestBody), $fetch);
    }
    /**
     * Delete product cost. In case of at least one of skus is not found exception will be thrown. If error occurred during the delete exception will be thrown.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsCostDeletePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogCostStorageV1DeletePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogCostStorageV1DeletePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCostStorageV1DeletePost(?\Kiboko\Magento\V2\Model\V1ProductsCostDeletePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogCostStorageV1DeletePost($requestBody), $fetch);
    }
    /**
     * Return product prices. In case of at least one of skus is not found exception will be thrown.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsCostInformationPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogCostStorageV1GetPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogCostStorageV1GetPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataCostInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCostStorageV1GetPost(?\Kiboko\Magento\V2\Model\V1ProductsCostInformationPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogCostStorageV1GetPost($requestBody), $fetch);
    }
    /**
     * Delete downloadable sample
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\DownloadableSampleRepositoryV1DeleteDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableSampleRepositoryV1DeleteDelete(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\DownloadableSampleRepositoryV1DeleteDelete($id), $fetch);
    }
    /**
     * Delete downloadable link
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\DownloadableLinkRepositoryV1DeleteDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableLinkRepositoryV1DeleteDelete(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\DownloadableLinkRepositoryV1DeleteDelete($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductLinkTypeListV1GetItemsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductLinkTypeInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkTypeListV1GetItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductLinkTypeListV1GetItemsGet(), $fetch);
    }
    /**
     * Provide a list of the product link type attributes
     *
     * @param string $type 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductLinkTypeListV1GetItemAttributesGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductLinkAttributeInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkTypeListV1GetItemAttributesGet(string $type, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductLinkTypeListV1GetItemAttributesGet($type), $fetch);
    }
    /**
     * Retrieve the list of media attributes (fronted input type is media_image) assigned to the given attribute set.
     *
     * @param string $attributeSetName 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductMediaAttributeManagementV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductAttributeInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductMediaAttributeManagementV1GetListGet(string $attributeSetName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductMediaAttributeManagementV1GetListGet($attributeSetName), $fetch);
    }
    /**
     * Save Custom Option
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsOptionsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductCustomOptionRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductCustomOptionInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1ProductsOptionsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductCustomOptionRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductCustomOptionTypeListV1GetItemsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductCustomOptionTypeInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionTypeListV1GetItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductCustomOptionTypeListV1GetItemsGet(), $fetch);
    }
    /**
     * Save Custom Option
     *
     * @param string $optionId 
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsOptionsOptionIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductCustomOptionRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductCustomOptionInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1SavePut(string $optionId, ?\Kiboko\Magento\V2\Model\V1ProductsOptionsOptionIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductCustomOptionRepositoryV1SavePut($optionId, $requestBody), $fetch);
    }
    /**
     * Add or update product's special price. If any items will have invalid price, store id, sku or dates, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsSpecialPricePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogSpecialPriceStorageV1UpdatePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogSpecialPriceStorageV1UpdatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogSpecialPriceStorageV1UpdatePost(?\Kiboko\Magento\V2\Model\V1ProductsSpecialPricePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogSpecialPriceStorageV1UpdatePost($requestBody), $fetch);
    }
    /**
     * Delete product's special price. If any items will have invalid price, store id, sku or dates, they will be marked as failed and excluded from delete list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the delete exception will be thrown.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsSpecialPriceDeletePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogSpecialPriceStorageV1DeletePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogSpecialPriceStorageV1DeletePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogSpecialPriceStorageV1DeletePost(?\Kiboko\Magento\V2\Model\V1ProductsSpecialPriceDeletePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogSpecialPriceStorageV1DeletePost($requestBody), $fetch);
    }
    /**
     * Return product's special price. In case of at least one of skus is not found exception will be thrown.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsSpecialPriceInformationPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogSpecialPriceStorageV1GetPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogSpecialPriceStorageV1GetPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataSpecialPriceInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogSpecialPriceStorageV1GetPost(?\Kiboko\Magento\V2\Model\V1ProductsSpecialPriceInformationPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogSpecialPriceStorageV1GetPost($requestBody), $fetch);
    }
    /**
     * Add or update product prices. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsTierPricesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogTierPriceStorageV1UpdatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogTierPriceStorageV1UpdatePost(?\Kiboko\Magento\V2\Model\V1ProductsTierPricesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogTierPriceStorageV1UpdatePost($requestBody), $fetch);
    }
    /**
     * Remove existing tier prices and replace them with the new ones. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from replace list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsTierPricesPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogTierPriceStorageV1ReplacePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogTierPriceStorageV1ReplacePut(?\Kiboko\Magento\V2\Model\V1ProductsTierPricesPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogTierPriceStorageV1ReplacePut($requestBody), $fetch);
    }
    /**
     * Delete product tier prices. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from delete list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsTierPricesDeletePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogTierPriceStorageV1DeletePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogTierPriceStorageV1DeletePost(?\Kiboko\Magento\V2\Model\V1ProductsTierPricesDeletePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogTierPriceStorageV1DeletePost($requestBody), $fetch);
    }
    /**
     * Return product prices. In case of at least one of skus is not found exception will be thrown.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsTierPricesInformationPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogTierPriceStorageV1GetPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogTierPriceStorageV1GetPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataTierPriceInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogTierPriceStorageV1GetPost(?\Kiboko\Magento\V2\Model\V1ProductsTierPricesInformationPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogTierPriceStorageV1GetPost($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductTypeListV1GetProductTypesGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductTypeInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductTypeListV1GetProductTypesGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductTypeListV1GetProductTypesGet(), $fetch);
    }
    /**
     * 
     *
     * @param string $productSku 
     * @param string $itemId 
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsProductSkuStockItemsItemIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogInventoryStockRegistryV1UpdateStockItemBySkuPut(string $productSku, string $itemId, ?\Kiboko\Magento\V2\Model\V1ProductsProductSkuStockItemsItemIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPut($productSku, $itemId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1DeleteByIdDelete(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductRepositoryV1DeleteByIdDelete($sku), $fetch);
    }
    /**
     * Get info about product by product SKU
     *
     * @param string $sku 
     * @param array $queryParameters {
     *     @var bool $editMode 
     *     @var int $storeId 
     *     @var bool $forceReload 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1GetGet(string $sku, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductRepositoryV1GetGet($sku, $queryParameters), $fetch);
    }
    /**
     * Create product
     *
     * @param string $sku 
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsSkuPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1SavePut(string $sku, ?\Kiboko\Magento\V2\Model\V1ProductsSkuPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductRepositoryV1SavePut($sku, $requestBody), $fetch);
    }
    /**
     * List of links with associated samples
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\DownloadableLinkRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\DownloadableDataLinkInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableLinkRepositoryV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\DownloadableLinkRepositoryV1GetListGet($sku), $fetch);
    }
    /**
     * Update downloadable link of the given product (link type and its resources cannot be changed)
     *
     * @param string $sku 
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsSkuDownloadableLinksPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\DownloadableLinkRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableLinkRepositoryV1SavePost(string $sku, ?\Kiboko\Magento\V2\Model\V1ProductsSkuDownloadableLinksPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\DownloadableLinkRepositoryV1SavePost($sku, $requestBody), $fetch);
    }
    /**
     * List of samples for downloadable product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\DownloadableSampleRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\DownloadableDataSampleInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableSampleRepositoryV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\DownloadableSampleRepositoryV1GetListGet($sku), $fetch);
    }
    /**
     * Update downloadable sample of the given product
     *
     * @param string $sku 
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsSkuDownloadableLinksSamplesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\DownloadableSampleRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableSampleRepositoryV1SavePost(string $sku, ?\Kiboko\Magento\V2\Model\V1ProductsSkuDownloadableLinksSamplesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\DownloadableSampleRepositoryV1SavePost($sku, $requestBody), $fetch);
    }
    /**
     * Update downloadable sample of the given product
     *
     * @param string $sku 
     * @param string $id 
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsSkuDownloadableLinksSamplesIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\DownloadableSampleRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableSampleRepositoryV1SavePut(string $sku, string $id, ?\Kiboko\Magento\V2\Model\V1ProductsSkuDownloadableLinksSamplesIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\DownloadableSampleRepositoryV1SavePut($sku, $id, $requestBody), $fetch);
    }
    /**
     * Update downloadable link of the given product (link type and its resources cannot be changed)
     *
     * @param string $sku 
     * @param string $id 
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsSkuDownloadableLinksIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\DownloadableLinkRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableLinkRepositoryV1SavePut(string $sku, string $id, ?\Kiboko\Magento\V2\Model\V1ProductsSkuDownloadableLinksIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\DownloadableLinkRepositoryV1SavePut($sku, $id, $requestBody), $fetch);
    }
    /**
     * Get tier price of product
     *
     * @param string $sku 
     * @param string $customerGroupId 'all' can be used to specify 'ALL GROUPS'
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductTierPriceManagementV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductTierPriceManagementV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductTierPriceInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductTierPriceManagementV1GetListGet(string $sku, string $customerGroupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductTierPriceManagementV1GetListGet($sku, $customerGroupId), $fetch);
    }
    /**
     * Remove tier price from product
     *
     * @param string $sku 
     * @param string $customerGroupId 'all' can be used to specify 'ALL GROUPS'
     * @param float $qty 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductTierPriceManagementV1RemoveDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductTierPriceManagementV1RemoveDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductTierPriceManagementV1RemoveDelete(string $sku, string $customerGroupId, float $qty, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductTierPriceManagementV1RemoveDelete($sku, $customerGroupId, $qty), $fetch);
    }
    /**
     * Create tier price for product
     *
     * @param string $sku 
     * @param string $customerGroupId 'all' can be used to specify 'ALL GROUPS'
     * @param float $price 
     * @param float $qty 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductTierPriceManagementV1AddPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductTierPriceManagementV1AddPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductTierPriceManagementV1AddPost(string $sku, string $customerGroupId, float $price, float $qty, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductTierPriceManagementV1AddPost($sku, $customerGroupId, $price, $qty), $fetch);
    }
    /**
     * Assign a product link to another product
     *
     * @param string $sku 
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsSkuLinksPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductLinkManagementV1SetProductLinksPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductLinkManagementV1SetProductLinksPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkManagementV1SetProductLinksPost(string $sku, ?\Kiboko\Magento\V2\Model\V1ProductsSkuLinksPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductLinkManagementV1SetProductLinksPost($sku, $requestBody), $fetch);
    }
    /**
     * Save product link
     *
     * @param string $sku 
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsSkuLinksPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductLinkRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductLinkRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkRepositoryV1SavePut(string $sku, ?\Kiboko\Magento\V2\Model\V1ProductsSkuLinksPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductLinkRepositoryV1SavePut($sku, $requestBody), $fetch);
    }
    /**
     * Provide the list of links for a specific product
     *
     * @param string $sku 
     * @param string $type 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductLinkManagementV1GetLinkedItemsByTypeGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductLinkInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkManagementV1GetLinkedItemsByTypeGet(string $sku, string $type, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductLinkManagementV1GetLinkedItemsByTypeGet($sku, $type), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param string $type 
     * @param string $linkedProductSku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductLinkRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductLinkRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkRepositoryV1DeleteByIdDelete(string $sku, string $type, string $linkedProductSku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductLinkRepositoryV1DeleteByIdDelete($sku, $type, $linkedProductSku), $fetch);
    }
    /**
     * Retrieve the list of gallery entries associated with given product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeMediaGalleryManagementV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductAttributeMediaGalleryEntryInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductAttributeMediaGalleryManagementV1GetListGet($sku), $fetch);
    }
    /**
     * Create new gallery entry
     *
     * @param string $sku 
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsSkuMediaPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeMediaGalleryManagementV1CreatePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeMediaGalleryManagementV1CreatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1CreatePost(string $sku, ?\Kiboko\Magento\V2\Model\V1ProductsSkuMediaPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductAttributeMediaGalleryManagementV1CreatePost($sku, $requestBody), $fetch);
    }
    /**
     * Remove gallery entry
     *
     * @param string $sku 
     * @param int $entryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeMediaGalleryManagementV1RemoveDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeMediaGalleryManagementV1RemoveDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1RemoveDelete(string $sku, int $entryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductAttributeMediaGalleryManagementV1RemoveDelete($sku, $entryId), $fetch);
    }
    /**
     * Return information about gallery entry
     *
     * @param string $sku 
     * @param int $entryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeMediaGalleryManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeMediaGalleryManagementV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductAttributeMediaGalleryEntryInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1GetGet(string $sku, int $entryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductAttributeMediaGalleryManagementV1GetGet($sku, $entryId), $fetch);
    }
    /**
     * Update gallery entry
     *
     * @param string $sku 
     * @param string $entryId 
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsSkuMediaEntryIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeMediaGalleryManagementV1UpdatePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductAttributeMediaGalleryManagementV1UpdatePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1UpdatePut(string $sku, string $entryId, ?\Kiboko\Magento\V2\Model\V1ProductsSkuMediaEntryIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductAttributeMediaGalleryManagementV1UpdatePut($sku, $entryId, $requestBody), $fetch);
    }
    /**
     * Get the list of custom options for a specific product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductCustomOptionRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductCustomOptionInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductCustomOptionRepositoryV1GetListGet($sku), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductCustomOptionRepositoryV1DeleteByIdentifierDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete(string $sku, int $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete($sku, $optionId), $fetch);
    }
    /**
     * Get custom option for a specific product
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductCustomOptionRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductCustomOptionInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1GetGet(string $sku, int $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductCustomOptionRepositoryV1GetGet($sku, $optionId), $fetch);
    }
    /**
     * Assign a product to the website
     *
     * @param string $sku 
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsSkuWebsitesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductWebsiteLinkRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductWebsiteLinkRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductWebsiteLinkRepositoryV1SavePost(string $sku, ?\Kiboko\Magento\V2\Model\V1ProductsSkuWebsitesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductWebsiteLinkRepositoryV1SavePost($sku, $requestBody), $fetch);
    }
    /**
     * Assign a product to the website
     *
     * @param string $sku 
     * @param null|\Kiboko\Magento\V2\Model\V1ProductsSkuWebsitesPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductWebsiteLinkRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductWebsiteLinkRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductWebsiteLinkRepositoryV1SavePut(string $sku, ?\Kiboko\Magento\V2\Model\V1ProductsSkuWebsitesPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductWebsiteLinkRepositoryV1SavePut($sku, $requestBody), $fetch);
    }
    /**
     * Remove the website assignment from the product by product sku
     *
     * @param string $sku 
     * @param int $websiteId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductWebsiteLinkRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductWebsiteLinkRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete(string $sku, int $websiteId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogProductWebsiteLinkRepositoryV1DeleteByIdDelete($sku, $websiteId), $fetch);
    }
    /**
     * Save Requisition List
     *
     * @param null|\Kiboko\Magento\V2\Model\V1RequisitionListsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\RequisitionListRequisitionListRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\RequisitionListRequisitionListRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\RequisitionListDataRequisitionListInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function requisitionListRequisitionListRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1RequisitionListsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\RequisitionListRequisitionListRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Return list of rma data objects based on search criteria
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\RmaRmaManagementV1SearchGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\RmaDataRmaSearchResultInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaManagementV1SearchGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\RmaRmaManagementV1SearchGet($queryParameters), $fetch);
    }
    /**
     * Save RMA
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ReturnsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\RmaRmaManagementV1SaveRmaPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\RmaDataRmaInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaManagementV1SaveRmaPost(?\Kiboko\Magento\V2\Model\V1ReturnsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\RmaRmaManagementV1SaveRmaPost($requestBody), $fetch);
    }
    /**
     * Delete RMA
     *
     * @param string $id 
     * @param null|\Kiboko\Magento\V2\Model\V1ReturnsIdDeleteBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\RmaRmaRepositoryV1DeleteDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\RmaRmaRepositoryV1DeleteDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaRepositoryV1DeleteDelete(string $id, ?\Kiboko\Magento\V2\Model\V1ReturnsIdDeleteBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\RmaRmaRepositoryV1DeleteDelete($id, $requestBody), $fetch);
    }
    /**
     * Return data object for specified RMA id
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\RmaRmaRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\RmaDataRmaInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\RmaRmaRepositoryV1GetGet($id), $fetch);
    }
    /**
     * Save RMA
     *
     * @param string $id 
     * @param null|\Kiboko\Magento\V2\Model\V1ReturnsIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\RmaRmaManagementV1SaveRmaPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\RmaDataRmaInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaManagementV1SaveRmaPut(string $id, ?\Kiboko\Magento\V2\Model\V1ReturnsIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\RmaRmaManagementV1SaveRmaPut($id, $requestBody), $fetch);
    }
    /**
     * Comments list
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\RmaCommentManagementV1CommentsListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\RmaDataCommentSearchResultInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaCommentManagementV1CommentsListGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\RmaCommentManagementV1CommentsListGet($id), $fetch);
    }
    /**
     * Add comment
     *
     * @param string $id 
     * @param null|\Kiboko\Magento\V2\Model\V1ReturnsIdCommentsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\RmaCommentManagementV1AddCommentPostUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\RmaCommentManagementV1AddCommentPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaCommentManagementV1AddCommentPost(string $id, ?\Kiboko\Magento\V2\Model\V1ReturnsIdCommentsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\RmaCommentManagementV1AddCommentPost($id, $requestBody), $fetch);
    }
    /**
     * Get shipping label int the PDF format
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\RmaTrackManagementV1GetShippingLabelPdfGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaTrackManagementV1GetShippingLabelPdfGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\RmaTrackManagementV1GetShippingLabelPdfGet($id), $fetch);
    }
    /**
     * Get track list
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\RmaTrackManagementV1GetTracksGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\RmaDataTrackSearchResultInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaTrackManagementV1GetTracksGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\RmaTrackManagementV1GetTracksGet($id), $fetch);
    }
    /**
     * Add track
     *
     * @param int $id 
     * @param null|\Kiboko\Magento\V2\Model\V1ReturnsIdTrackingNumbersPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\RmaTrackManagementV1AddTrackPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaTrackManagementV1AddTrackPost(int $id, ?\Kiboko\Magento\V2\Model\V1ReturnsIdTrackingNumbersPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\RmaTrackManagementV1AddTrackPost($id, $requestBody), $fetch);
    }
    /**
     * Remove track by id
     *
     * @param int $id 
     * @param int $trackId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\RmaTrackManagementV1RemoveTrackByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaTrackManagementV1RemoveTrackByIdDelete(int $id, int $trackId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\RmaTrackManagementV1RemoveTrackByIdDelete($id, $trackId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\RmaRmaAttributesManagementV1GetAllAttributesMetadataGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaAttributesManagementV1GetAllAttributesMetadataGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\RmaRmaAttributesManagementV1GetAllAttributesMetadataGet(), $fetch);
    }
    /**
     * Get custom attribute metadata for the given Data object's attribute set
     *
     * @param array $queryParameters {
     *     @var string $dataObjectClassName Data object class name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\RmaRmaAttributesManagementV1GetCustomAttributesMetadataGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\FrameworkMetadataObjectInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaAttributesManagementV1GetCustomAttributesMetadataGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\RmaRmaAttributesManagementV1GetCustomAttributesMetadataGet($queryParameters), $fetch);
    }
    /**
     * Retrieve all attributes filtered by form code
     *
     * @param string $formCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\RmaRmaAttributesManagementV1GetAttributesGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaAttributesManagementV1GetAttributesGet(string $formCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\RmaRmaAttributesManagementV1GetAttributesGet($formCode), $fetch);
    }
    /**
     * Retrieve attribute metadata.
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\RmaRmaAttributesManagementV1GetAttributeMetadataGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CustomerDataAttributeMetadataInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaAttributesManagementV1GetAttributeMetadataGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\RmaRmaAttributesManagementV1GetAttributeMetadataGet($attributeCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\RewardRewardManagementV1SetPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rewardRewardManagementV1SetPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\RewardRewardManagementV1SetPost(), $fetch);
    }
    /**
     * Save sales rule.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1SalesRulesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleRuleRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleRuleRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleRuleRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesRuleDataRuleInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1SalesRulesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesRuleRuleRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Retrieve sales rules that match te specified criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#RuleRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleRuleRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleRuleRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesRuleDataRuleSearchResultInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesRuleRuleRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Delete rule by ID.
     *
     * @param int $ruleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleRuleRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleRuleRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleRuleRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1DeleteByIdDelete(int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesRuleRuleRepositoryV1DeleteByIdDelete($ruleId), $fetch);
    }
    /**
     * Get rule by ID.
     *
     * @param int $ruleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleRuleRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleRuleRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleRuleRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesRuleDataRuleInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1GetByIdGet(int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesRuleRuleRepositoryV1GetByIdGet($ruleId), $fetch);
    }
    /**
     * Save sales rule.
     *
     * @param string $ruleId 
     * @param null|\Kiboko\Magento\V2\Model\V1SalesRulesRuleIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleRuleRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleRuleRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleRuleRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesRuleDataRuleInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1SavePut(string $ruleId, ?\Kiboko\Magento\V2\Model\V1SalesRulesRuleIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesRuleRuleRepositoryV1SavePut($ruleId, $requestBody), $fetch);
    }
    /**
     * Make Full Text Search and return found Documents
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[requestName] 
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\V2\Model\FrameworkSearchSearchResultInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function searchV1SearchGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SearchV1SearchGet($queryParameters), $fetch);
    }
    /**
     * Create or update Shared Catalog service.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1SharedCatalogPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogSharedCatalogRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogSharedCatalogRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogSharedCatalogRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogSharedCatalogRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1SharedCatalogPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SharedCatalogSharedCatalogRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Return the list of shared catalogs and basic properties for each catalog.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogSharedCatalogRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogSharedCatalogRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\SharedCatalogDataSearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogSharedCatalogRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SharedCatalogSharedCatalogRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create or update Shared Catalog service.
     *
     * @param string $id 
     * @param null|\Kiboko\Magento\V2\Model\V1SharedCatalogIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogSharedCatalogRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogSharedCatalogRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogSharedCatalogRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogSharedCatalogRepositoryV1SavePut(string $id, ?\Kiboko\Magento\V2\Model\V1SharedCatalogIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SharedCatalogSharedCatalogRepositoryV1SavePut($id, $requestBody), $fetch);
    }
    /**
     * Add categories into the shared catalog.
     *
     * @param int $id 
     * @param null|\Kiboko\Magento\V2\Model\V1SharedCatalogIdAssignCategoriesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogCategoryManagementV1AssignCategoriesPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogCategoryManagementV1AssignCategoriesPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogCategoryManagementV1AssignCategoriesPost(int $id, ?\Kiboko\Magento\V2\Model\V1SharedCatalogIdAssignCategoriesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SharedCatalogCategoryManagementV1AssignCategoriesPost($id, $requestBody), $fetch);
    }
    /**
     * Add products into the shared catalog.
     *
     * @param int $id 
     * @param null|\Kiboko\Magento\V2\Model\V1SharedCatalogIdAssignProductsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogProductManagementV1AssignProductsPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogProductManagementV1AssignProductsPost(int $id, ?\Kiboko\Magento\V2\Model\V1SharedCatalogIdAssignProductsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SharedCatalogProductManagementV1AssignProductsPost($id, $requestBody), $fetch);
    }
    /**
     * Return the list of categories in the selected shared catalog.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogCategoryManagementV1GetCategoriesGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogCategoryManagementV1GetCategoriesGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SharedCatalogCategoryManagementV1GetCategoriesGet($id), $fetch);
    }
    /**
     * Return the list of product SKUs in the selected shared catalog.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogProductManagementV1GetProductsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogProductManagementV1GetProductsGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SharedCatalogProductManagementV1GetProductsGet($id), $fetch);
    }
    /**
     * Remove the specified categories from the shared catalog.
     *
     * @param int $id 
     * @param null|\Kiboko\Magento\V2\Model\V1SharedCatalogIdUnassignCategoriesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogCategoryManagementV1UnassignCategoriesPostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogCategoryManagementV1UnassignCategoriesPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogCategoryManagementV1UnassignCategoriesPost(int $id, ?\Kiboko\Magento\V2\Model\V1SharedCatalogIdUnassignCategoriesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SharedCatalogCategoryManagementV1UnassignCategoriesPost($id, $requestBody), $fetch);
    }
    /**
     * Remove the specified products from the shared catalog.
     *
     * @param int $id 
     * @param null|\Kiboko\Magento\V2\Model\V1SharedCatalogIdUnassignProductsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogProductManagementV1UnassignProductsPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogProductManagementV1UnassignProductsPost(int $id, ?\Kiboko\Magento\V2\Model\V1SharedCatalogIdUnassignProductsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SharedCatalogProductManagementV1UnassignProductsPost($id, $requestBody), $fetch);
    }
    /**
     * Delete a shared catalog by ID.
     *
     * @param int $sharedCatalogId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogSharedCatalogRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogSharedCatalogRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogSharedCatalogRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogSharedCatalogRepositoryV1DeleteByIdDelete(int $sharedCatalogId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SharedCatalogSharedCatalogRepositoryV1DeleteByIdDelete($sharedCatalogId), $fetch);
    }
    /**
     * Return the following properties for the selected shared catalog: ID, Store Group ID, Name, Type, Description, Customer Group, Tax Class.
     *
     * @param int $sharedCatalogId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogSharedCatalogRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogSharedCatalogRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SharedCatalogDataSharedCatalogInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogSharedCatalogRepositoryV1GetGet(int $sharedCatalogId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SharedCatalogSharedCatalogRepositoryV1GetGet($sharedCatalogId), $fetch);
    }
    /**
     * Assign companies to a shared catalog.
     *
     * @param int $sharedCatalogId 
     * @param null|\Kiboko\Magento\V2\Model\V1SharedCatalogSharedCatalogIdAssignCompaniesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogCompanyManagementV1AssignCompaniesPostUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogCompanyManagementV1AssignCompaniesPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogCompanyManagementV1AssignCompaniesPost(int $sharedCatalogId, ?\Kiboko\Magento\V2\Model\V1SharedCatalogSharedCatalogIdAssignCompaniesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SharedCatalogCompanyManagementV1AssignCompaniesPost($sharedCatalogId, $requestBody), $fetch);
    }
    /**
     * Return the list of company IDs for the companies assigned to the selected catalog.
     *
     * @param int $sharedCatalogId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogCompanyManagementV1GetCompaniesGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogCompanyManagementV1GetCompaniesGet(int $sharedCatalogId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SharedCatalogCompanyManagementV1GetCompaniesGet($sharedCatalogId), $fetch);
    }
    /**
     * Unassign companies from a shared catalog.
     *
     * @param int $sharedCatalogId 
     * @param null|\Kiboko\Magento\V2\Model\V1SharedCatalogSharedCatalogIdUnassignCompaniesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogCompanyManagementV1UnassignCompaniesPostUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogCompanyManagementV1UnassignCompaniesPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogCompanyManagementV1UnassignCompaniesPost(int $sharedCatalogId, ?\Kiboko\Magento\V2\Model\V1SharedCatalogSharedCatalogIdUnassignCompaniesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SharedCatalogCompanyManagementV1UnassignCompaniesPost($sharedCatalogId, $requestBody), $fetch);
    }
    /**
     * Performs persist operations for a specified shipment.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ShipmentPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesShipmentRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataShipmentInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1ShipmentPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesShipmentRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Performs persist operations for a specified shipment track.
     *
     * @param null|\Kiboko\Magento\V2\Model\V1ShipmentTrackPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesShipmentTrackRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SalesShipmentTrackRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataShipmentTrackInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentTrackRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1ShipmentTrackPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesShipmentTrackRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Deletes a specified shipment track by ID.
     *
     * @param int $id The shipment track ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesShipmentTrackRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SalesShipmentTrackRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentTrackRepositoryV1DeleteByIdDelete(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesShipmentTrackRepositoryV1DeleteByIdDelete($id), $fetch);
    }
    /**
     * Loads a specified shipment.
     *
     * @param int $id The shipment ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesShipmentRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataShipmentInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesShipmentRepositoryV1GetGet($id), $fetch);
    }
    /**
     * Lists comments for a specified shipment.
     *
     * @param int $id The shipment ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesShipmentManagementV1GetCommentsListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataShipmentCommentSearchResultInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentManagementV1GetCommentsListGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesShipmentManagementV1GetCommentsListGet($id), $fetch);
    }
    /**
     * Performs persist operations for a specified shipment comment.
     *
     * @param string $id 
     * @param null|\Kiboko\Magento\V2\Model\V1ShipmentIdCommentsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesShipmentCommentRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SalesShipmentCommentRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataShipmentCommentInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentCommentRepositoryV1SavePost(string $id, ?\Kiboko\Magento\V2\Model\V1ShipmentIdCommentsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesShipmentCommentRepositoryV1SavePost($id, $requestBody), $fetch);
    }
    /**
     * Emails user a specified shipment.
     *
     * @param int $id The shipment ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesShipmentManagementV1NotifyPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentManagementV1NotifyPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesShipmentManagementV1NotifyPost($id), $fetch);
    }
    /**
     * Gets a specified shipment label.
     *
     * @param int $id The shipment label ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesShipmentManagementV1GetLabelGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentManagementV1GetLabelGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesShipmentManagementV1GetLabelGet($id), $fetch);
    }
    /**
     * Lists shipments that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#ShipmentRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesShipmentRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataShipmentSearchResultInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesShipmentRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Retrieves a list of SKU's with low inventory qty
     *
     * @param array $queryParameters {
     *     @var int $scopeId 
     *     @var float $qty 
     *     @var int $currentPage 
     *     @var int $pageSize 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogInventoryStockRegistryV1GetLowStockItemsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogInventoryDataStockItemCollectionInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogInventoryStockRegistryV1GetLowStockItemsGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogInventoryStockRegistryV1GetLowStockItemsGet($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $productSku 
     * @param array $queryParameters {
     *     @var int $scopeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogInventoryStockRegistryV1GetStockItemBySkuGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogInventoryStockRegistryV1GetStockItemBySkuGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogInventoryDataStockItemInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogInventoryStockRegistryV1GetStockItemBySkuGet(string $productSku, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogInventoryStockRegistryV1GetStockItemBySkuGet($productSku, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $productSku 
     * @param array $queryParameters {
     *     @var int $scopeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CatalogInventoryStockRegistryV1GetStockStatusBySkuGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogInventoryStockRegistryV1GetStockStatusBySkuGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogInventoryDataStockStatusInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogInventoryStockRegistryV1GetStockStatusBySkuGet(string $productSku, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CatalogInventoryStockRegistryV1GetStockStatusBySkuGet($productSku, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $storeCodes 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\StoreStoreConfigManagerV1GetStoreConfigsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\StoreDataStoreConfigInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function storeStoreConfigManagerV1GetStoreConfigsGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\StoreStoreConfigManagerV1GetStoreConfigsGet($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\StoreGroupRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\StoreDataGroupInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function storeGroupRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\StoreGroupRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\StoreStoreRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\StoreDataStoreInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function storeStoreRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\StoreStoreRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\StoreWebsiteRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\StoreDataWebsiteInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function storeWebsiteRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\StoreWebsiteRepositoryV1GetListGet(), $fetch);
    }
    /**
     * Create a Tax Class
     *
     * @param null|\Kiboko\Magento\V2\Model\V1TaxClassesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxClassRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxClassRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxClassRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1TaxClassesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TaxTaxClassRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Retrieve tax classes which match a specific criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#TaxClassRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxClassRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxClassRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\TaxDataTaxClassSearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TaxTaxClassRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create a Tax Class
     *
     * @param string $classId 
     * @param null|\Kiboko\Magento\V2\Model\V1TaxClassesClassIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxClassRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxClassRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxClassRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1SavePut(string $classId, ?\Kiboko\Magento\V2\Model\V1TaxClassesClassIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TaxTaxClassRepositoryV1SavePut($classId, $requestBody), $fetch);
    }
    /**
     * Delete a tax class with the given tax class id.
     *
     * @param int $taxClassId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxClassRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxClassRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1DeleteByIdDelete(int $taxClassId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TaxTaxClassRepositoryV1DeleteByIdDelete($taxClassId), $fetch);
    }
    /**
     * Get a tax class with the given tax class id.
     *
     * @param int $taxClassId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxClassRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxClassRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\TaxDataTaxClassInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1GetGet(int $taxClassId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TaxTaxClassRepositoryV1GetGet($taxClassId), $fetch);
    }
    /**
     * Create or update tax rate
     *
     * @param null|\Kiboko\Magento\V2\Model\V1TaxRatesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRateRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRateRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRateRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\TaxDataTaxRateInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1TaxRatesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TaxTaxRateRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Create or update tax rate
     *
     * @param null|\Kiboko\Magento\V2\Model\V1TaxRatesPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRateRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRateRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRateRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\TaxDataTaxRateInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1SavePut(?\Kiboko\Magento\V2\Model\V1TaxRatesPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TaxTaxRateRepositoryV1SavePut($requestBody), $fetch);
    }
    /**
     * Search TaxRates This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#TaxRateRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRateRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRateRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\TaxDataTaxRateSearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TaxTaxRateRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Delete tax rate
     *
     * @param int $rateId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRateRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRateRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRateRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1DeleteByIdDelete(int $rateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TaxTaxRateRepositoryV1DeleteByIdDelete($rateId), $fetch);
    }
    /**
     * Get tax rate
     *
     * @param int $rateId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRateRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRateRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\TaxDataTaxRateInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1GetGet(int $rateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TaxTaxRateRepositoryV1GetGet($rateId), $fetch);
    }
    /**
     * Save TaxRule
     *
     * @param null|\Kiboko\Magento\V2\Model\V1TaxRulesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRuleRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRuleRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRuleRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\TaxDataTaxRuleInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1SavePost(?\Kiboko\Magento\V2\Model\V1TaxRulesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TaxTaxRuleRepositoryV1SavePost($requestBody), $fetch);
    }
    /**
     * Save TaxRule
     *
     * @param null|\Kiboko\Magento\V2\Model\V1TaxRulesPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRuleRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRuleRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRuleRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\TaxDataTaxRuleInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1SavePut(?\Kiboko\Magento\V2\Model\V1TaxRulesPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TaxTaxRuleRepositoryV1SavePut($requestBody), $fetch);
    }
    /**
     * Search TaxRules This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#TaxRuleRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRuleRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRuleRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\TaxDataTaxRuleSearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TaxTaxRuleRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Delete TaxRule
     *
     * @param int $ruleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRuleRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRuleRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRuleRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1DeleteByIdDelete(int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TaxTaxRuleRepositoryV1DeleteByIdDelete($ruleId), $fetch);
    }
    /**
     * Get TaxRule
     *
     * @param int $ruleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TaxTaxRuleRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\TaxDataTaxRuleInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1GetGet(int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TaxTaxRuleRepositoryV1GetGet($ruleId), $fetch);
    }
    /**
     * Returns the list of teams for the specified search criteria (team name or description).
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyTeamRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\CompanyTeamRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\CompanyDataTeamSearchResultsInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyTeamRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyTeamRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create a team in the company structure.
     *
     * @param int $companyId 
     * @param null|\Kiboko\Magento\V2\Model\V1TeamCompanyIdPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyTeamRepositoryV1CreatePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CompanyTeamRepositoryV1CreatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyTeamRepositoryV1CreatePost(int $companyId, ?\Kiboko\Magento\V2\Model\V1TeamCompanyIdPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyTeamRepositoryV1CreatePost($companyId, $requestBody), $fetch);
    }
    /**
     * Delete a team from the company structure.
     *
     * @param int $teamId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyTeamRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CompanyTeamRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyTeamRepositoryV1DeleteByIdDelete(int $teamId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyTeamRepositoryV1DeleteByIdDelete($teamId), $fetch);
    }
    /**
     * Returns data for a team in the company, by entity id.
     *
     * @param int $teamId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyTeamRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CompanyTeamRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CompanyDataTeamInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyTeamRepositoryV1GetGet(int $teamId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyTeamRepositoryV1GetGet($teamId), $fetch);
    }
    /**
     * Update a team in the company structure.
     *
     * @param string $teamId 
     * @param null|\Kiboko\Magento\V2\Model\V1TeamTeamIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\CompanyTeamRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CompanyTeamRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyTeamRepositoryV1SavePut(string $teamId, ?\Kiboko\Magento\V2\Model\V1TeamTeamIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\CompanyTeamRepositoryV1SavePut($teamId, $requestBody), $fetch);
    }
    /**
     * Assign platform shipment IDs to a core RMA entity.
     *
     * @param int $rmaId 
     * @param null|\Kiboko\Magento\V2\Model\V1TemandoRmaRmaIdShipmentsPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\TemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPut(int $rmaId, ?\Kiboko\Magento\V2\Model\V1TemandoRmaRmaIdShipmentsPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\TemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPut($rmaId, $requestBody), $fetch);
    }
    /**
     * Lists transactions that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#TransactionRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesTransactionRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataTransactionSearchResultInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesTransactionRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesTransactionRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Loads a specified transaction.
     *
     * @param int $id The transaction ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\SalesTransactionRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataTransactionInterface|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesTransactionRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\SalesTransactionRepositoryV1GetGet($id), $fetch);
    }
    /**
     * Proxy handler for guest place order
     *
     * @param string $cartId 
     * @param null|\Kiboko\Magento\V2\Model\V1WorldpayGuestCartsCartIdPaymentInformationPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\V2\Exception\WorldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPostBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost(string $cartId, ?\Kiboko\Magento\V2\Model\V1WorldpayGuestCartsCartIdPaymentInformationPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\V2\Endpoint\WorldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost($cartId, $requestBody), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://quovadis1954.com/eshop/rest');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Kiboko\Magento\V2\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}