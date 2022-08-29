<?php

namespace Kiboko\Magento\v2_3;

class Client extends \Kiboko\Magento\v2_3\Runtime\Client\Client
{
    /**
     * Delete customer address by ID.
     *
     * @param int $addressId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAddressRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAddressRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAddressRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressRepositoryV1DeleteByIdDelete(int $addressId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerAddressRepositoryV1DeleteByIdDelete($addressId), $fetch);
    }
    /**
     * Search for images based on search criteria
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
     * @throws \Kiboko\Magento\v2_3\Exception\AdobeStockAssetApiGetAssetListV1ExecuteGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\AdobeStockAssetApiGetAssetListV1ExecuteGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\FrameworkSearchSearchResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function adobeStockAssetApiGetAssetListV1ExecuteGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\AdobeStockAssetApiGetAssetListV1ExecuteGet($queryParameters), $fetch);
    }
    /**
     * Get a list of assets
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
     * @throws \Kiboko\Magento\v2_3\Exception\AdobeStockAssetApiAssetRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\AdobeStockAssetApiDataAssetSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function adobeStockAssetApiAssetRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\AdobeStockAssetApiAssetRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Delete asset
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\AdobeStockAssetApiAssetRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\AdobeStockAssetApiAssetRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function adobeStockAssetApiAssetRepositoryV1DeleteByIdDelete(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\AdobeStockAssetApiAssetRepositoryV1DeleteByIdDelete($id), $fetch);
    }
    /**
     * Get asset by id
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\AdobeStockAssetApiAssetRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\AdobeStockAssetApiAssetRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\AdobeStockAssetApiDataAssetInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function adobeStockAssetApiAssetRepositoryV1GetByIdGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\AdobeStockAssetApiAssetRepositoryV1GetByIdGet($id), $fetch);
    }
    /**
     * Search for images based on search criteria
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
     * @throws \Kiboko\Magento\v2_3\Exception\AdobeStockImageApiGetImageListV1ExecuteGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\AdobeStockImageApiGetImageListV1ExecuteGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\FrameworkSearchSearchResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function adobeStockImageApiGetImageListV1ExecuteGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\AdobeStockImageApiGetImageListV1ExecuteGet($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $amazonOrderReferenceId 
     * @param \Kiboko\Magento\v2_3\Model\V1AmazonBillingAddressAmazonOrderReferenceIdPutBody $amazonPaymentAddressManagementV1GetBillingAddressPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function amazonPaymentAddressManagementV1GetBillingAddressPut(string $amazonOrderReferenceId, \Kiboko\Magento\v2_3\Model\V1AmazonBillingAddressAmazonOrderReferenceIdPutBody $amazonPaymentAddressManagementV1GetBillingAddressPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\AmazonPaymentAddressManagementV1GetBillingAddressPut($amazonOrderReferenceId, $amazonPaymentAddressManagementV1GetBillingAddressPutBody), $fetch);
    }
    /**
     * 
     *
     * @param string $amazonOrderReferenceId 
     * @param \Kiboko\Magento\v2_3\Model\V1AmazonShippingAddressAmazonOrderReferenceIdPutBody $amazonPaymentAddressManagementV1GetShippingAddressPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function amazonPaymentAddressManagementV1GetShippingAddressPut(string $amazonOrderReferenceId, \Kiboko\Magento\v2_3\Model\V1AmazonShippingAddressAmazonOrderReferenceIdPutBody $amazonPaymentAddressManagementV1GetShippingAddressPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\AmazonPaymentAddressManagementV1GetShippingAddressPut($amazonOrderReferenceId, $amazonPaymentAddressManagementV1GetShippingAddressPutBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function amazonPaymentOrderInformationManagementV1RemoveOrderReferenceDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\AmazonPaymentOrderInformationManagementV1RemoveOrderReferenceDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\AnalyticsLinkProviderV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\AnalyticsDataLinkInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function analyticsLinkProviderV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\AnalyticsLinkProviderV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerMetadataV1GetAllAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerMetadataV1GetAllAttributesMetadataGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerMetadataV1GetAllAttributesMetadataGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerCustomerMetadataV1GetAllAttributesMetadataGet(), $fetch);
    }
    /**
     * Retrieve attribute metadata.
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerMetadataV1GetAttributeMetadataGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerMetadataV1GetAttributeMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerMetadataV1GetAttributeMetadataGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataAttributeMetadataInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerMetadataV1GetAttributeMetadataGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerCustomerMetadataV1GetAttributeMetadataGet($attributeCode), $fetch);
    }
    /**
     * Get custom attributes metadata for the given data interface.
     *
     * @param array $queryParameters {
     *     @var string $dataInterfaceName 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerMetadataV1GetCustomAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerMetadataV1GetCustomAttributesMetadataGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerMetadataV1GetCustomAttributesMetadataGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerCustomerMetadataV1GetCustomAttributesMetadataGet($queryParameters), $fetch);
    }
    /**
     * Retrieve all attributes filtered by form code
     *
     * @param string $formCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerMetadataV1GetAttributesGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerMetadataV1GetAttributesGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerMetadataV1GetAttributesGet(string $formCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerCustomerMetadataV1GetAttributesGet($formCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAddressMetadataV1GetAllAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAddressMetadataV1GetAllAttributesMetadataGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressMetadataV1GetAllAttributesMetadataGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerAddressMetadataV1GetAllAttributesMetadataGet(), $fetch);
    }
    /**
     * Retrieve attribute metadata.
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAddressMetadataV1GetAttributeMetadataGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAddressMetadataV1GetAttributeMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAddressMetadataV1GetAttributeMetadataGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataAttributeMetadataInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressMetadataV1GetAttributeMetadataGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerAddressMetadataV1GetAttributeMetadataGet($attributeCode), $fetch);
    }
    /**
     * Get custom attributes metadata for the given data interface.
     *
     * @param array $queryParameters {
     *     @var string $dataInterfaceName 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAddressMetadataV1GetCustomAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAddressMetadataV1GetCustomAttributesMetadataGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressMetadataV1GetCustomAttributesMetadataGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerAddressMetadataV1GetCustomAttributesMetadataGet($queryParameters), $fetch);
    }
    /**
     * Retrieve all attributes filtered by form code
     *
     * @param string $formCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAddressMetadataV1GetAttributesGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAddressMetadataV1GetAttributesGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressMetadataV1GetAttributesGet(string $formCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerAddressMetadataV1GetAttributesGet($formCode), $fetch);
    }
    /**
     * Lists the bulk operation items that match specified search criteria.
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
     * @throws \Kiboko\Magento\v2_3\Exception\AsynchronousOperationsOperationRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\AsynchronousOperationsDataOperationSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function asynchronousOperationsOperationRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\AsynchronousOperationsOperationRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Get Bulk summary data with list of operations items full data.
     *
     * @param string $bulkUuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\AsynchronousOperationsBulkStatusV1GetBulkDetailedStatusGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\AsynchronousOperationsBulkStatusV1GetBulkDetailedStatusGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\AsynchronousOperationsDataDetailedBulkOperationsStatusInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function asynchronousOperationsBulkStatusV1GetBulkDetailedStatusGet(string $bulkUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\AsynchronousOperationsBulkStatusV1GetBulkDetailedStatusGet($bulkUuid), $fetch);
    }
    /**
     * Get operations count by bulk uuid and status.
     *
     * @param string $bulkUuid 
     * @param int $status 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\AsynchronousOperationsBulkStatusV1GetOperationsCountByBulkIdAndStatusGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function asynchronousOperationsBulkStatusV1GetOperationsCountByBulkIdAndStatusGet(string $bulkUuid, int $status, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\AsynchronousOperationsBulkStatusV1GetOperationsCountByBulkIdAndStatusGet($bulkUuid, $status), $fetch);
    }
    /**
     * Get Bulk summary data with list of operations items short data.
     *
     * @param string $bulkUuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\AsynchronousOperationsBulkStatusV1GetBulkShortStatusGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\AsynchronousOperationsBulkStatusV1GetBulkShortStatusGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\AsynchronousOperationsDataBulkOperationsStatusInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function asynchronousOperationsBulkStatusV1GetBulkShortStatusGet(string $bulkUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\AsynchronousOperationsBulkStatusV1GetBulkShortStatusGet($bulkUuid), $fetch);
    }
    /**
     * Add new option for bundle product
     *
     * @param \Kiboko\Magento\v2_3\Model\V1BundleProductsOptionsAddPostBody $bundleProductOptionManagementV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductOptionManagementV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductOptionManagementV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionManagementV1SavePost(\Kiboko\Magento\v2_3\Model\V1BundleProductsOptionsAddPostBody $bundleProductOptionManagementV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\BundleProductOptionManagementV1SavePost($bundleProductOptionManagementV1SavePostBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductOptionTypeListV1GetItemsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\BundleDataOptionTypeInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionTypeListV1GetItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\BundleProductOptionTypeListV1GetItemsGet(), $fetch);
    }
    /**
     * Add new option for bundle product
     *
     * @param string $optionId 
     * @param \Kiboko\Magento\v2_3\Model\V1BundleProductsOptionsOptionIdPutBody $bundleProductOptionManagementV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductOptionManagementV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductOptionManagementV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionManagementV1SavePut(string $optionId, \Kiboko\Magento\v2_3\Model\V1BundleProductsOptionsOptionIdPutBody $bundleProductOptionManagementV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\BundleProductOptionManagementV1SavePut($optionId, $bundleProductOptionManagementV1SavePutBody), $fetch);
    }
    /**
     * Get all children for Bundle product
     *
     * @param string $productSku 
     * @param array $queryParameters {
     *     @var int $optionId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductLinkManagementV1GetChildrenGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductLinkManagementV1GetChildrenGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\BundleDataLinkInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductLinkManagementV1GetChildrenGet(string $productSku, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\BundleProductLinkManagementV1GetChildrenGet($productSku, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param string $id 
     * @param \Kiboko\Magento\v2_3\Model\V1BundleProductsSkuLinksIdPutBody $bundleProductLinkManagementV1SaveChildPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductLinkManagementV1SaveChildPutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductLinkManagementV1SaveChildPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductLinkManagementV1SaveChildPut(string $sku, string $id, \Kiboko\Magento\v2_3\Model\V1BundleProductsSkuLinksIdPutBody $bundleProductLinkManagementV1SaveChildPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\BundleProductLinkManagementV1SaveChildPut($sku, $id, $bundleProductLinkManagementV1SaveChildPutBody), $fetch);
    }
    /**
     * Add child product to specified Bundle option by product sku
     *
     * @param string $sku 
     * @param int $optionId 
     * @param \Kiboko\Magento\v2_3\Model\V1BundleProductsSkuLinksOptionIdPostBody $bundleProductLinkManagementV1AddChildByProductSkuPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductLinkManagementV1AddChildByProductSkuPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductLinkManagementV1AddChildByProductSkuPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductLinkManagementV1AddChildByProductSkuPost(string $sku, int $optionId, \Kiboko\Magento\v2_3\Model\V1BundleProductsSkuLinksOptionIdPostBody $bundleProductLinkManagementV1AddChildByProductSkuPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\BundleProductLinkManagementV1AddChildByProductSkuPost($sku, $optionId, $bundleProductLinkManagementV1AddChildByProductSkuPostBody), $fetch);
    }
    /**
     * Get all options for bundle product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductOptionRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductOptionRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\BundleDataOptionInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionRepositoryV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\BundleProductOptionRepositoryV1GetListGet($sku), $fetch);
    }
    /**
     * Remove bundle option
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductOptionRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductOptionRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionRepositoryV1DeleteByIdDelete(string $sku, int $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\BundleProductOptionRepositoryV1DeleteByIdDelete($sku, $optionId), $fetch);
    }
    /**
     * Get option for bundle product
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductOptionRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductOptionRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\BundleDataOptionInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionRepositoryV1GetGet(string $sku, int $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\BundleProductOptionRepositoryV1GetGet($sku, $optionId), $fetch);
    }
    /**
     * Remove product from Bundle product option
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $childSku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductLinkManagementV1RemoveChildDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\BundleProductLinkManagementV1RemoveChildDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductLinkManagementV1RemoveChildDelete(string $sku, int $optionId, string $childSku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\BundleProductLinkManagementV1RemoveChildDelete($sku, $optionId, $childSku), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartManagementV1CreateEmptyCartPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartManagementV1CreateEmptyCartPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1CreateEmptyCartPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCartManagementV1CreateEmptyCartPost(), $fetch);
    }
    /**
     * Check gift card balance if added to the cart.
     *
     * @param string $cartId 
     * @param string $giftCardCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\GiftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet(string $cartId, string $giftCardCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet($cartId, $giftCardCode), $fetch);
    }
    /**
     * Add gift card to the cart.
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\v2_3\Model\V1CartsGuestCartsCartIdGiftCardsPostBody $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost(string $cartId, \Kiboko\Magento\v2_3\Model\V1CartsGuestCartsCartIdGiftCardsPostBody $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost($cartId, $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody), $fetch);
    }
    /**
     * Remove GiftCard Account entity.
     *
     * @param string $cartId 
     * @param string $giftCardCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete(string $cartId, string $giftCardCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete($cartId, $giftCardCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CheckoutAgreementsCheckoutAgreementsRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CheckoutAgreementsDataAgreementInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutAgreementsCheckoutAgreementsRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CheckoutAgreementsCheckoutAgreementsRepositoryV1GetListGet(), $fetch);
    }
    /**
     * List of checkout agreements.
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
     * @throws \Kiboko\Magento\v2_3\Exception\CheckoutAgreementsCheckoutAgreementsListV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CheckoutAgreementsDataAgreementInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutAgreementsCheckoutAgreementsListV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CheckoutAgreementsCheckoutAgreementsListV1GetListGet($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartManagementV1GetCartForCustomerGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartManagementV1GetCartForCustomerGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataCartInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1GetCartForCustomerGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCartManagementV1GetCartForCustomerGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartManagementV1CreateEmptyCartForCustomerPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartManagementV1CreateEmptyCartForCustomerPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1CreateEmptyCartForCustomerPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCartManagementV1CreateEmptyCartForCustomerPost(), $fetch);
    }
    /**
     * Save quote
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CartsMinePutBody $quoteCartRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartRepositoryV1SavePut(\Kiboko\Magento\v2_3\Model\V1CartsMinePutBody $quoteCartRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCartRepositoryV1SavePut($quoteCartRepositoryV1SavePutBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerBalanceBalanceManagementV1ApplyPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerBalanceBalanceManagementV1ApplyPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerBalanceBalanceManagementV1ApplyPost(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteBillingAddressManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteBillingAddressManagementV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataAddressInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteBillingAddressManagementV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteBillingAddressManagementV1GetGet(), $fetch);
    }
    /**
     * Assigns a specified billing address to a specified cart.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CartsMineBillingAddressPostBody $quoteBillingAddressManagementV1AssignPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteBillingAddressManagementV1AssignPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteBillingAddressManagementV1AssignPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteBillingAddressManagementV1AssignPost(\Kiboko\Magento\v2_3\Model\V1CartsMineBillingAddressPostBody $quoteBillingAddressManagementV1AssignPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteBillingAddressManagementV1AssignPost($quoteBillingAddressManagementV1AssignPostBody), $fetch);
    }
    /**
     * Check gift card balance if applied to given cart.
     *
     * @param string $giftCardCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftCardAccountGiftCardAccountManagementV1CheckGiftCardGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\GiftCardAccountGiftCardAccountManagementV1CheckGiftCardGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1CheckGiftCardGet(string $giftCardCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftCardAccountGiftCardAccountManagementV1CheckGiftCardGet($giftCardCode), $fetch);
    }
    /**
     * Set shipping/billing methods and additional data for cart and collect totals.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CartsMineCollectTotalsPutBody $quoteCartTotalManagementV1CollectTotalsPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartTotalManagementV1CollectTotalsPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataTotalsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartTotalManagementV1CollectTotalsPut(\Kiboko\Magento\v2_3\Model\V1CartsMineCollectTotalsPutBody $quoteCartTotalManagementV1CollectTotalsPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCartTotalManagementV1CollectTotalsPut($quoteCartTotalManagementV1CollectTotalsPutBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCouponManagementV1RemoveDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCouponManagementV1RemoveDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1RemoveDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCouponManagementV1RemoveDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCouponManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCouponManagementV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCouponManagementV1GetGet(), $fetch);
    }
    /**
     * Adds a coupon by code to a specified cart.
     *
     * @param string $couponCode The coupon code data.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCouponManagementV1SetPutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCouponManagementV1SetPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1SetPut(string $couponCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCouponManagementV1SetPut($couponCode), $fetch);
    }
    /**
     * Estimate shipping by address and return list of available shipping methods
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CartsMineEstimateShippingMethodsPostBody $quoteShipmentEstimationV1EstimateByExtendedAddressPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteShipmentEstimationV1EstimateByExtendedAddressPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShipmentEstimationV1EstimateByExtendedAddressPost(\Kiboko\Magento\v2_3\Model\V1CartsMineEstimateShippingMethodsPostBody $quoteShipmentEstimationV1EstimateByExtendedAddressPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteShipmentEstimationV1EstimateByExtendedAddressPost($quoteShipmentEstimationV1EstimateByExtendedAddressPostBody), $fetch);
    }
    /**
     * Estimate shipping
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CartsMineEstimateShippingMethodsByAddressIdPostBody $quoteShippingMethodManagementV1EstimateByAddressIdPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteShippingMethodManagementV1EstimateByAddressIdPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShippingMethodManagementV1EstimateByAddressIdPost(\Kiboko\Magento\v2_3\Model\V1CartsMineEstimateShippingMethodsByAddressIdPostBody $quoteShippingMethodManagementV1EstimateByAddressIdPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteShippingMethodManagementV1EstimateByAddressIdPost($quoteShippingMethodManagementV1EstimateByAddressIdPostBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftMessageCartRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageCartRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftMessageCartRepositoryV1GetGet(), $fetch);
    }
    /**
     * Set the gift message for an entire order.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CartsMineGiftMessagePostBody $giftMessageCartRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftMessageCartRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\GiftMessageCartRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageCartRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1CartsMineGiftMessagePostBody $giftMessageCartRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftMessageCartRepositoryV1SavePost($giftMessageCartRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Return the gift message for a specified item in a specified shopping cart.
     *
     * @param int $itemId The item ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftMessageItemRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\GiftMessageItemRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageItemRepositoryV1GetGet(int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftMessageItemRepositoryV1GetGet($itemId), $fetch);
    }
    /**
     * Set the gift message for a specified item in a specified shopping cart.
     *
     * @param int $itemId The item ID.
     * @param \Kiboko\Magento\v2_3\Model\V1CartsMineGiftMessageItemIdPostBody $giftMessageItemRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftMessageItemRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\GiftMessageItemRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageItemRepositoryV1SavePost(int $itemId, \Kiboko\Magento\v2_3\Model\V1CartsMineGiftMessageItemIdPostBody $giftMessageItemRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftMessageItemRepositoryV1SavePost($itemId, $giftMessageItemRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Add gift card to the cart.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CartsMineGiftCardsPostBody $giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost(\Kiboko\Magento\v2_3\Model\V1CartsMineGiftCardsPostBody $giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost($giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPostBody), $fetch);
    }
    /**
     * Remove GiftCard Account entity
     *
     * @param string $giftCardCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\GiftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete(string $giftCardCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete($giftCardCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartItemRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartItemRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataCartItemInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCartItemRepositoryV1GetListGet(), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CartsMineItemsPostBody $quoteCartItemRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartItemRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartItemRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataCartItemInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1CartsMineItemsPostBody $quoteCartItemRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCartItemRepositoryV1SavePost($quoteCartItemRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Removes the specified item from the specified cart.
     *
     * @param int $itemId The item ID of the item to be removed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartItemRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartItemRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1DeleteByIdDelete(int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCartItemRepositoryV1DeleteByIdDelete($itemId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $itemId 
     * @param \Kiboko\Magento\v2_3\Model\V1CartsMineItemsItemIdPutBody $quoteCartItemRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartItemRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartItemRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataCartItemInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1SavePut(string $itemId, \Kiboko\Magento\v2_3\Model\V1CartsMineItemsItemIdPutBody $quoteCartItemRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCartItemRepositoryV1SavePut($itemId, $quoteCartItemRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Places an order for a specified cart.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CartsMineOrderPutBody $quoteCartManagementV1PlaceOrderPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartManagementV1PlaceOrderPutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartManagementV1PlaceOrderPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1PlaceOrderPut(\Kiboko\Magento\v2_3\Model\V1CartsMineOrderPutBody $quoteCartManagementV1PlaceOrderPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCartManagementV1PlaceOrderPut($quoteCartManagementV1PlaceOrderPutBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CheckoutPaymentInformationManagementV1GetPaymentInformationGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutPaymentInformationManagementV1GetPaymentInformationGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CheckoutPaymentInformationManagementV1GetPaymentInformationGet(), $fetch);
    }
    /**
     * Set payment information and place order for a specified cart.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CartsMinePaymentInformationPostBody $checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost(\Kiboko\Magento\v2_3\Model\V1CartsMinePaymentInformationPostBody $checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuotePaymentMethodManagementV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuotePaymentMethodManagementV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataPaymentMethodInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuotePaymentMethodManagementV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuotePaymentMethodManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuotePaymentMethodManagementV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataPaymentInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuotePaymentMethodManagementV1GetGet(), $fetch);
    }
    /**
     * Adds a specified payment method to a specified shopping cart.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CartsMineSelectedPaymentMethodPutBody $quotePaymentMethodManagementV1SetPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuotePaymentMethodManagementV1SetPutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuotePaymentMethodManagementV1SetPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1SetPut(\Kiboko\Magento\v2_3\Model\V1CartsMineSelectedPaymentMethodPutBody $quotePaymentMethodManagementV1SetPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuotePaymentMethodManagementV1SetPut($quotePaymentMethodManagementV1SetPutBody), $fetch);
    }
    /**
     * Set payment information for a specified cart.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CartsMineSetPaymentInformationPostBody $checkoutPaymentInformationManagementV1SavePaymentInformationPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutPaymentInformationManagementV1SavePaymentInformationPost(\Kiboko\Magento\v2_3\Model\V1CartsMineSetPaymentInformationPostBody $checkoutPaymentInformationManagementV1SavePaymentInformationPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CheckoutPaymentInformationManagementV1SavePaymentInformationPost($checkoutPaymentInformationManagementV1SavePaymentInformationPostBody), $fetch);
    }
    /**
     * 
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CartsMineShippingInformationPostBody $checkoutShippingInformationManagementV1SaveAddressInformationPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CheckoutShippingInformationManagementV1SaveAddressInformationPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutShippingInformationManagementV1SaveAddressInformationPost(\Kiboko\Magento\v2_3\Model\V1CartsMineShippingInformationPostBody $checkoutShippingInformationManagementV1SaveAddressInformationPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CheckoutShippingInformationManagementV1SaveAddressInformationPost($checkoutShippingInformationManagementV1SaveAddressInformationPostBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteShippingMethodManagementV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteShippingMethodManagementV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShippingMethodManagementV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteShippingMethodManagementV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartTotalRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartTotalRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataTotalsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartTotalRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCartTotalRepositoryV1GetGet(), $fetch);
    }
    /**
     * Calculate quote totals based on address and shipping method.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CartsMineTotalsInformationPostBody $checkoutTotalsInformationManagementV1CalculatePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CheckoutTotalsInformationManagementV1CalculatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataTotalsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutTotalsInformationManagementV1CalculatePost(\Kiboko\Magento\v2_3\Model\V1CartsMineTotalsInformationPostBody $checkoutTotalsInformationManagementV1CalculatePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CheckoutTotalsInformationManagementV1CalculatePost($checkoutTotalsInformationManagementV1CalculatePostBody), $fetch);
    }
    /**
     * Enables administrative users to list carts that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See https://devdocs.magento.com/codelinks/attributes.html#CartRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
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
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataCartSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCartRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Enables an administrative user to return information for a specified cart.
     *
     * @param int $cartId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataCartInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartRepositoryV1GetGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCartRepositoryV1GetGet($cartId), $fetch);
    }
    /**
     * Assigns a specified customer to a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\v2_3\Model\V1CartsCartIdPutBody $quoteCartManagementV1AssignCustomerPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartManagementV1AssignCustomerPutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartManagementV1AssignCustomerPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartManagementV1AssignCustomerPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1AssignCustomerPut(int $cartId, \Kiboko\Magento\v2_3\Model\V1CartsCartIdPutBody $quoteCartManagementV1AssignCustomerPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCartManagementV1AssignCustomerPut($cartId, $quoteCartManagementV1AssignCustomerPutBody), $fetch);
    }
    /**
     * Returns the billing address for a specified quote.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteBillingAddressManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteBillingAddressManagementV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataAddressInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteBillingAddressManagementV1GetGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteBillingAddressManagementV1GetGet($cartId), $fetch);
    }
    /**
     * Assigns a specified billing address to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\v2_3\Model\V1CartsCartIdBillingAddressPostBody $quoteBillingAddressManagementV1AssignPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteBillingAddressManagementV1AssignPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteBillingAddressManagementV1AssignPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteBillingAddressManagementV1AssignPost(int $cartId, \Kiboko\Magento\v2_3\Model\V1CartsCartIdBillingAddressPostBody $quoteBillingAddressManagementV1AssignPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteBillingAddressManagementV1AssignPost($cartId, $quoteBillingAddressManagementV1AssignPostBody), $fetch);
    }
    /**
     * Deletes a coupon from a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCouponManagementV1RemoveDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCouponManagementV1RemoveDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1RemoveDelete(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCouponManagementV1RemoveDelete($cartId), $fetch);
    }
    /**
     * Returns information for a coupon in a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCouponManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCouponManagementV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1GetGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCouponManagementV1GetGet($cartId), $fetch);
    }
    /**
     * Adds a coupon by code to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $couponCode The coupon code data.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCouponManagementV1SetPutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCouponManagementV1SetPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1SetPut(int $cartId, string $couponCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCouponManagementV1SetPut($cartId, $couponCode), $fetch);
    }
    /**
     * Estimate shipping by address and return list of available shipping methods
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\v2_3\Model\V1CartsCartIdEstimateShippingMethodsPostBody $quoteShipmentEstimationV1EstimateByExtendedAddressPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteShipmentEstimationV1EstimateByExtendedAddressPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShipmentEstimationV1EstimateByExtendedAddressPost(string $cartId, \Kiboko\Magento\v2_3\Model\V1CartsCartIdEstimateShippingMethodsPostBody $quoteShipmentEstimationV1EstimateByExtendedAddressPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $quoteShipmentEstimationV1EstimateByExtendedAddressPostBody), $fetch);
    }
    /**
     * Estimate shipping
     *
     * @param int $cartId The shopping cart ID.
     * @param \Kiboko\Magento\v2_3\Model\V1CartsCartIdEstimateShippingMethodsByAddressIdPostBody $quoteShippingMethodManagementV1EstimateByAddressIdPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteShippingMethodManagementV1EstimateByAddressIdPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShippingMethodManagementV1EstimateByAddressIdPost(int $cartId, \Kiboko\Magento\v2_3\Model\V1CartsCartIdEstimateShippingMethodsByAddressIdPostBody $quoteShippingMethodManagementV1EstimateByAddressIdPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteShippingMethodManagementV1EstimateByAddressIdPost($cartId, $quoteShippingMethodManagementV1EstimateByAddressIdPostBody), $fetch);
    }
    /**
     * Return the gift message for a specified order.
     *
     * @param int $cartId The shopping cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftMessageCartRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageCartRepositoryV1GetGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftMessageCartRepositoryV1GetGet($cartId), $fetch);
    }
    /**
     * Set the gift message for an entire order.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\v2_3\Model\V1CartsCartIdGiftMessagePostBody $giftMessageCartRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftMessageCartRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\GiftMessageCartRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageCartRepositoryV1SavePost(int $cartId, \Kiboko\Magento\v2_3\Model\V1CartsCartIdGiftMessagePostBody $giftMessageCartRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftMessageCartRepositoryV1SavePost($cartId, $giftMessageCartRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Return the gift message for a specified item in a specified shopping cart.
     *
     * @param int $cartId The shopping cart ID.
     * @param int $itemId The item ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftMessageItemRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\GiftMessageItemRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageItemRepositoryV1GetGet(int $cartId, int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftMessageItemRepositoryV1GetGet($cartId, $itemId), $fetch);
    }
    /**
     * Set the gift message for a specified item in a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param int $itemId The item ID.
     * @param \Kiboko\Magento\v2_3\Model\V1CartsCartIdGiftMessageItemIdPostBody $giftMessageItemRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftMessageItemRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\GiftMessageItemRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageItemRepositoryV1SavePost(int $cartId, int $itemId, \Kiboko\Magento\v2_3\Model\V1CartsCartIdGiftMessageItemIdPostBody $giftMessageItemRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftMessageItemRepositoryV1SavePost($cartId, $itemId, $giftMessageItemRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Add gift card to the cart.
     *
     * @param int $cartId 
     * @param \Kiboko\Magento\v2_3\Model\V1CartsCartIdGiftCardsPutBody $giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut(int $cartId, \Kiboko\Magento\v2_3\Model\V1CartsCartIdGiftCardsPutBody $giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut($cartId, $giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutBody), $fetch);
    }
    /**
     * Remove GiftCard Account entity
     *
     * @param int $cartId 
     * @param string $giftCardCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\GiftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete(int $cartId, string $giftCardCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete($cartId, $giftCardCode), $fetch);
    }
    /**
     * Lists items that are assigned to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartItemRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartItemRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataCartItemInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1GetListGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCartItemRepositoryV1GetListGet($cartId), $fetch);
    }
    /**
     * Removes the specified item from the specified cart.
     *
     * @param int $cartId The cart ID.
     * @param int $itemId The item ID of the item to be removed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartItemRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartItemRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1DeleteByIdDelete(int $cartId, int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCartItemRepositoryV1DeleteByIdDelete($cartId, $itemId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $cartId 
     * @param string $itemId 
     * @param \Kiboko\Magento\v2_3\Model\V1CartsCartIdItemsItemIdPutBody $quoteCartItemRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartItemRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartItemRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataCartItemInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1SavePut(string $cartId, string $itemId, \Kiboko\Magento\v2_3\Model\V1CartsCartIdItemsItemIdPutBody $quoteCartItemRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCartItemRepositoryV1SavePut($cartId, $itemId, $quoteCartItemRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Places an order for a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\v2_3\Model\V1CartsCartIdOrderPutBody $quoteCartManagementV1PlaceOrderPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartManagementV1PlaceOrderPutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartManagementV1PlaceOrderPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1PlaceOrderPut(int $cartId, \Kiboko\Magento\v2_3\Model\V1CartsCartIdOrderPutBody $quoteCartManagementV1PlaceOrderPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCartManagementV1PlaceOrderPut($cartId, $quoteCartManagementV1PlaceOrderPutBody), $fetch);
    }
    /**
     * Lists available payment methods for a specified shopping cart. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See https://devdocs.magento.com/codelinks/attributes.html#PaymentMethodManagementInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuotePaymentMethodManagementV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuotePaymentMethodManagementV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataPaymentMethodInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1GetListGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuotePaymentMethodManagementV1GetListGet($cartId), $fetch);
    }
    /**
     * Returns the payment method for a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuotePaymentMethodManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuotePaymentMethodManagementV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataPaymentInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1GetGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuotePaymentMethodManagementV1GetGet($cartId), $fetch);
    }
    /**
     * Adds a specified payment method to a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\v2_3\Model\V1CartsCartIdSelectedPaymentMethodPutBody $quotePaymentMethodManagementV1SetPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuotePaymentMethodManagementV1SetPutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuotePaymentMethodManagementV1SetPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1SetPut(int $cartId, \Kiboko\Magento\v2_3\Model\V1CartsCartIdSelectedPaymentMethodPutBody $quotePaymentMethodManagementV1SetPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuotePaymentMethodManagementV1SetPut($cartId, $quotePaymentMethodManagementV1SetPutBody), $fetch);
    }
    /**
     * 
     *
     * @param int $cartId 
     * @param \Kiboko\Magento\v2_3\Model\V1CartsCartIdShippingInformationPostBody $checkoutShippingInformationManagementV1SaveAddressInformationPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CheckoutShippingInformationManagementV1SaveAddressInformationPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutShippingInformationManagementV1SaveAddressInformationPost(int $cartId, \Kiboko\Magento\v2_3\Model\V1CartsCartIdShippingInformationPostBody $checkoutShippingInformationManagementV1SaveAddressInformationPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CheckoutShippingInformationManagementV1SaveAddressInformationPost($cartId, $checkoutShippingInformationManagementV1SaveAddressInformationPostBody), $fetch);
    }
    /**
     * Lists applicable shipping methods for a specified quote.
     *
     * @param int $cartId The shopping cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteShippingMethodManagementV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteShippingMethodManagementV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShippingMethodManagementV1GetListGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteShippingMethodManagementV1GetListGet($cartId), $fetch);
    }
    /**
     * Returns quote totals data for a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartTotalRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartTotalRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataTotalsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartTotalRepositoryV1GetGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCartTotalRepositoryV1GetGet($cartId), $fetch);
    }
    /**
     * Calculate quote totals based on address and shipping method.
     *
     * @param int $cartId 
     * @param \Kiboko\Magento\v2_3\Model\V1CartsCartIdTotalsInformationPostBody $checkoutTotalsInformationManagementV1CalculatePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CheckoutTotalsInformationManagementV1CalculatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataTotalsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutTotalsInformationManagementV1CalculatePost(int $cartId, \Kiboko\Magento\v2_3\Model\V1CartsCartIdTotalsInformationPostBody $checkoutTotalsInformationManagementV1CalculatePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CheckoutTotalsInformationManagementV1CalculatePost($cartId, $checkoutTotalsInformationManagementV1CalculatePostBody), $fetch);
    }
    /**
     * Return GiftCard Account cards.
     *
     * @param int $quoteId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\GiftCardAccountDataGiftCardAccountInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet(int $quoteId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet($quoteId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $quoteId 
     * @param \Kiboko\Magento\v2_3\Model\V1CartsQuoteIdItemsPostBody $quoteCartItemRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartItemRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartItemRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataCartItemInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1SavePost(string $quoteId, \Kiboko\Magento\v2_3\Model\V1CartsQuoteIdItemsPostBody $quoteCartItemRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCartItemRepositoryV1SavePost($quoteId, $quoteCartItemRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Retrieve list of categories
     *
     * @param array $queryParameters {
     *     @var int $rootCategoryId 
     *     @var int $depth 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryManagementV1GetTreeGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryManagementV1GetTreeGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataCategoryTreeInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryManagementV1GetTreeGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogCategoryManagementV1GetTreeGet($queryParameters), $fetch);
    }
    /**
     * Create category service
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CategoriesPostBody $catalogCategoryRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataCategoryInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1CategoriesPostBody $catalogCategoryRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogCategoryRepositoryV1SavePost($catalogCategoryRepositoryV1SavePostBody), $fetch);
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
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryAttributeRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataCategoryAttributeSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryAttributeRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogCategoryAttributeRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Retrieve specific attribute
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryAttributeRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataCategoryAttributeInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryAttributeRepositoryV1GetGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogCategoryAttributeRepositoryV1GetGet($attributeCode), $fetch);
    }
    /**
     * Retrieve list of attribute options
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryAttributeOptionManagementV1GetItemsGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryAttributeOptionManagementV1GetItemsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\EavDataAttributeOptionInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryAttributeOptionManagementV1GetItemsGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogCategoryAttributeOptionManagementV1GetItemsGet($attributeCode), $fetch);
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
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryListV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataCategorySearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryListV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogCategoryListV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Delete category by identifier
     *
     * @param int $categoryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryRepositoryV1DeleteByIdentifierDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryRepositoryV1DeleteByIdentifierDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryRepositoryV1DeleteByIdentifierDelete(int $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogCategoryRepositoryV1DeleteByIdentifierDelete($categoryId), $fetch);
    }
    /**
     * Get info about category by category id
     *
     * @param int $categoryId 
     * @param array $queryParameters {
     *     @var int $storeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataCategoryInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryRepositoryV1GetGet(int $categoryId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogCategoryRepositoryV1GetGet($categoryId, $queryParameters), $fetch);
    }
    /**
     * Move category
     *
     * @param int $categoryId 
     * @param \Kiboko\Magento\v2_3\Model\V1CategoriesCategoryIdMovePutBody $catalogCategoryManagementV1MovePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryManagementV1MovePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryManagementV1MovePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryManagementV1MovePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryManagementV1MovePut(int $categoryId, \Kiboko\Magento\v2_3\Model\V1CategoriesCategoryIdMovePutBody $catalogCategoryManagementV1MovePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogCategoryManagementV1MovePut($categoryId, $catalogCategoryManagementV1MovePutBody), $fetch);
    }
    /**
     * Get products assigned to category
     *
     * @param int $categoryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryLinkManagementV1GetAssignedProductsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataCategoryProductLinkInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryLinkManagementV1GetAssignedProductsGet(int $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogCategoryLinkManagementV1GetAssignedProductsGet($categoryId), $fetch);
    }
    /**
     * Assign a product to the required category
     *
     * @param string $categoryId 
     * @param \Kiboko\Magento\v2_3\Model\V1CategoriesCategoryIdProductsPostBody $catalogCategoryLinkRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryLinkRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryLinkRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryLinkRepositoryV1SavePost(string $categoryId, \Kiboko\Magento\v2_3\Model\V1CategoriesCategoryIdProductsPostBody $catalogCategoryLinkRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogCategoryLinkRepositoryV1SavePost($categoryId, $catalogCategoryLinkRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Assign a product to the required category
     *
     * @param string $categoryId 
     * @param \Kiboko\Magento\v2_3\Model\V1CategoriesCategoryIdProductsPutBody $catalogCategoryLinkRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryLinkRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryLinkRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryLinkRepositoryV1SavePut(string $categoryId, \Kiboko\Magento\v2_3\Model\V1CategoriesCategoryIdProductsPutBody $catalogCategoryLinkRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogCategoryLinkRepositoryV1SavePut($categoryId, $catalogCategoryLinkRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Remove the product assignment from the category by category id and sku
     *
     * @param int $categoryId 
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryLinkRepositoryV1DeleteByIdsDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryLinkRepositoryV1DeleteByIdsDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryLinkRepositoryV1DeleteByIdsDelete(int $categoryId, string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogCategoryLinkRepositoryV1DeleteByIdsDelete($categoryId, $sku), $fetch);
    }
    /**
     * Create category service
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_3\Model\V1CategoriesIdPutBody $catalogCategoryRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCategoryRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataCategoryInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryRepositoryV1SavePut(string $id, \Kiboko\Magento\v2_3\Model\V1CategoriesIdPutBody $catalogCategoryRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogCategoryRepositoryV1SavePut($id, $catalogCategoryRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Save block.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CmsBlockPostBody $cmsBlockRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CmsBlockRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CmsBlockRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CmsDataBlockInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1CmsBlockPostBody $cmsBlockRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CmsBlockRepositoryV1SavePost($cmsBlockRepositoryV1SavePostBody), $fetch);
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
     * @throws \Kiboko\Magento\v2_3\Exception\CmsBlockRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CmsBlockRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CmsDataBlockSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CmsBlockRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Delete block by ID.
     *
     * @param int $blockId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CmsBlockRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CmsBlockRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CmsBlockRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1DeleteByIdDelete(int $blockId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CmsBlockRepositoryV1DeleteByIdDelete($blockId), $fetch);
    }
    /**
     * Retrieve block.
     *
     * @param int $blockId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CmsBlockRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CmsBlockRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CmsDataBlockInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1GetByIdGet(int $blockId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CmsBlockRepositoryV1GetByIdGet($blockId), $fetch);
    }
    /**
     * Save block.
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_3\Model\V1CmsBlockIdPutBody $cmsBlockRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CmsBlockRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CmsBlockRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CmsDataBlockInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1SavePut(string $id, \Kiboko\Magento\v2_3\Model\V1CmsBlockIdPutBody $cmsBlockRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CmsBlockRepositoryV1SavePut($id, $cmsBlockRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Save page.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CmsPagePostBody $cmsPageRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CmsPageRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CmsPageRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CmsDataPageInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1CmsPagePostBody $cmsPageRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CmsPageRepositoryV1SavePost($cmsPageRepositoryV1SavePostBody), $fetch);
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
     * @throws \Kiboko\Magento\v2_3\Exception\CmsPageRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CmsPageRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CmsDataPageSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CmsPageRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save page.
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_3\Model\V1CmsPageIdPutBody $cmsPageRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CmsPageRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CmsPageRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CmsDataPageInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1SavePut(string $id, \Kiboko\Magento\v2_3\Model\V1CmsPageIdPutBody $cmsPageRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CmsPageRepositoryV1SavePut($id, $cmsPageRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Delete page by ID.
     *
     * @param int $pageId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CmsPageRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CmsPageRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CmsPageRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1DeleteByIdDelete(int $pageId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CmsPageRepositoryV1DeleteByIdDelete($pageId), $fetch);
    }
    /**
     * Retrieve page.
     *
     * @param int $pageId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CmsPageRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CmsPageRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CmsDataPageInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1GetByIdGet(int $pageId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CmsPageRepositoryV1GetByIdGet($pageId), $fetch);
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
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCompanyRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCompanyRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CompanyDataCompanySearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCompanyRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyCompanyRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create or update a company account.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CompanyPostBody $companyCompanyRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCompanyRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCompanyRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CompanyDataCompanyInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCompanyRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1CompanyPostBody $companyCompanyRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyCompanyRepositoryV1SavePost($companyCompanyRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Change a role for a company user.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CompanyAssignRolesPutBody $companyAclV1AssignRolesPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyAclV1AssignRolesPutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyAclV1AssignRolesPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyAclV1AssignRolesPut(\Kiboko\Magento\v2_3\Model\V1CompanyAssignRolesPutBody $companyAclV1AssignRolesPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyAclV1AssignRolesPut($companyAclV1AssignRolesPutBody), $fetch);
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
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyRoleRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyRoleRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CompanyDataRoleSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyRoleRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyRoleRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create or update a role for a selected company.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CompanyRolePostBody $companyRoleRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyRoleRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyRoleRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CompanyDataRoleInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyRoleRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1CompanyRolePostBody $companyRoleRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyRoleRepositoryV1SavePost($companyRoleRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Create or update a role for a selected company.
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_3\Model\V1CompanyRoleIdPutBody $companyRoleRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyRoleRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyRoleRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CompanyDataRoleInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyRoleRepositoryV1SavePut(string $id, \Kiboko\Magento\v2_3\Model\V1CompanyRoleIdPutBody $companyRoleRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyRoleRepositoryV1SavePut($id, $companyRoleRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Delete a role.
     *
     * @param int $roleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyRoleRepositoryV1DeleteDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyRoleRepositoryV1DeleteDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyRoleRepositoryV1DeleteDelete(int $roleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyRoleRepositoryV1DeleteDelete($roleId), $fetch);
    }
    /**
     * Returns the list of permissions for a specified role.
     *
     * @param int $roleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyRoleRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyRoleRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CompanyDataRoleInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyRoleRepositoryV1GetGet(int $roleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyRoleRepositoryV1GetGet($roleId), $fetch);
    }
    /**
     * View the list of company users assigned to a specified role.
     *
     * @param int $roleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyAclV1GetUsersByRoleIdGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataCustomerInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyAclV1GetUsersByRoleIdGet(int $roleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyAclV1GetUsersByRoleIdGet($roleId), $fetch);
    }
    /**
     * Delete a company. Customers belonging to a company are not deleted with this request.
     *
     * @param int $companyId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCompanyRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCompanyRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCompanyRepositoryV1DeleteByIdDelete(int $companyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyCompanyRepositoryV1DeleteByIdDelete($companyId), $fetch);
    }
    /**
     * Returns company details.
     *
     * @param int $companyId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCompanyRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCompanyRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CompanyDataCompanyInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCompanyRepositoryV1GetGet(int $companyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyCompanyRepositoryV1GetGet($companyId), $fetch);
    }
    /**
     * Create or update a company account.
     *
     * @param string $companyId 
     * @param \Kiboko\Magento\v2_3\Model\V1CompanyCompanyIdPutBody $companyCompanyRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCompanyRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCompanyRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CompanyDataCompanyInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCompanyRepositoryV1SavePut(string $companyId, \Kiboko\Magento\v2_3\Model\V1CompanyCompanyIdPutBody $companyCompanyRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyCompanyRepositoryV1SavePut($companyId, $companyCompanyRepositoryV1SavePutBody), $fetch);
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
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditLimitRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditLimitRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CompanyCreditDataCreditLimitSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditLimitRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyCreditCreditLimitRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Returns data on the credit limit for a specified company.
     *
     * @param int $companyId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditLimitManagementV1GetCreditByCompanyIdGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CompanyCreditDataCreditLimitInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditLimitManagementV1GetCreditByCompanyIdGet(int $companyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyCreditCreditLimitManagementV1GetCreditByCompanyIdGet($companyId), $fetch);
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
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditHistoryManagementV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditHistoryManagementV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CompanyCreditDataHistorySearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditHistoryManagementV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyCreditCreditHistoryManagementV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Update the PO Number and/or comment for a Reimburse transaction.
     *
     * @param int $historyId 
     * @param \Kiboko\Magento\v2_3\Model\V1CompanyCreditsHistoryHistoryIdPutBody $companyCreditCreditHistoryManagementV1UpdatePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditHistoryManagementV1UpdatePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditHistoryManagementV1UpdatePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditHistoryManagementV1UpdatePut(int $historyId, \Kiboko\Magento\v2_3\Model\V1CompanyCreditsHistoryHistoryIdPutBody $companyCreditCreditHistoryManagementV1UpdatePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyCreditCreditHistoryManagementV1UpdatePut($historyId, $companyCreditCreditHistoryManagementV1UpdatePutBody), $fetch);
    }
    /**
     * Returns data on the credit limit for a specified credit limit ID.
     *
     * @param int $creditId 
     * @param array $queryParameters {
     *     @var bool $reload [optional]
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditLimitRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditLimitRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CompanyCreditDataCreditLimitInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditLimitRepositoryV1GetGet(int $creditId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyCreditCreditLimitRepositoryV1GetGet($creditId, $queryParameters), $fetch);
    }
    /**
     * Decreases the company credit with an Update, Reimburse, or Purchase transaction. This transaction increases company's outstanding balance and decreases company's available credit.
     *
     * @param int $creditId 
     * @param \Kiboko\Magento\v2_3\Model\V1CompanyCreditsCreditIdDecreaseBalancePostBody $companyCreditCreditBalanceManagementV1DecreasePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditBalanceManagementV1DecreasePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditBalanceManagementV1DecreasePost(int $creditId, \Kiboko\Magento\v2_3\Model\V1CompanyCreditsCreditIdDecreaseBalancePostBody $companyCreditCreditBalanceManagementV1DecreasePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyCreditCreditBalanceManagementV1DecreasePost($creditId, $companyCreditCreditBalanceManagementV1DecreasePostBody), $fetch);
    }
    /**
     * Increases the company credit with an Allocate, Update, Refund, Revert, or Reimburse transaction. This transaction decreases company's outstanding balance and increases company's available credit.
     *
     * @param int $creditId 
     * @param \Kiboko\Magento\v2_3\Model\V1CompanyCreditsCreditIdIncreaseBalancePostBody $companyCreditCreditBalanceManagementV1IncreasePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditBalanceManagementV1IncreasePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditBalanceManagementV1IncreasePost(int $creditId, \Kiboko\Magento\v2_3\Model\V1CompanyCreditsCreditIdIncreaseBalancePostBody $companyCreditCreditBalanceManagementV1IncreasePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyCreditCreditBalanceManagementV1IncreasePost($creditId, $companyCreditCreditBalanceManagementV1IncreasePostBody), $fetch);
    }
    /**
     * Update the following company credit attributes: credit currency, credit limit and setting to exceed credit.
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_3\Model\V1CompanyCreditsIdPutBody $companyCreditCreditLimitRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditLimitRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditLimitRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditLimitRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CompanyCreditDataCreditLimitInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCreditCreditLimitRepositoryV1SavePut(string $id, \Kiboko\Magento\v2_3\Model\V1CompanyCreditsIdPutBody $companyCreditCreditLimitRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyCreditCreditLimitRepositoryV1SavePut($id, $companyCreditCreditLimitRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Generate variation based on same product
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ConfigurableProductsVariationPutBody $configurableProductConfigurableProductManagementV1GenerateVariationPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\ConfigurableProductConfigurableProductManagementV1GenerateVariationPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductConfigurableProductManagementV1GenerateVariationPut(\Kiboko\Magento\v2_3\Model\V1ConfigurableProductsVariationPutBody $configurableProductConfigurableProductManagementV1GenerateVariationPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\ConfigurableProductConfigurableProductManagementV1GenerateVariationPut($configurableProductConfigurableProductManagementV1GenerateVariationPutBody), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param \Kiboko\Magento\v2_3\Model\V1ConfigurableProductsSkuChildPostBody $configurableProductLinkManagementV1AddChildPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\ConfigurableProductLinkManagementV1AddChildPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductLinkManagementV1AddChildPost(string $sku, \Kiboko\Magento\v2_3\Model\V1ConfigurableProductsSkuChildPostBody $configurableProductLinkManagementV1AddChildPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\ConfigurableProductLinkManagementV1AddChildPost($sku, $configurableProductLinkManagementV1AddChildPostBody), $fetch);
    }
    /**
     * Get all children for Configurable product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\ConfigurableProductLinkManagementV1GetChildrenGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductLinkManagementV1GetChildrenGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\ConfigurableProductLinkManagementV1GetChildrenGet($sku), $fetch);
    }
    /**
     * Remove configurable product option
     *
     * @param string $sku 
     * @param string $childSku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\ConfigurableProductLinkManagementV1RemoveChildDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\ConfigurableProductLinkManagementV1RemoveChildDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductLinkManagementV1RemoveChildDelete(string $sku, string $childSku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\ConfigurableProductLinkManagementV1RemoveChildDelete($sku, $childSku), $fetch);
    }
    /**
     * Save option
     *
     * @param string $sku 
     * @param \Kiboko\Magento\v2_3\Model\V1ConfigurableProductsSkuOptionsPostBody $configurableProductOptionRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\ConfigurableProductOptionRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\ConfigurableProductOptionRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\ConfigurableProductOptionRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1SavePost(string $sku, \Kiboko\Magento\v2_3\Model\V1ConfigurableProductsSkuOptionsPostBody $configurableProductOptionRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\ConfigurableProductOptionRepositoryV1SavePost($sku, $configurableProductOptionRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Get all options for configurable product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\ConfigurableProductOptionRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\ConfigurableProductOptionRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ConfigurableProductDataOptionInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\ConfigurableProductOptionRepositoryV1GetListGet($sku), $fetch);
    }
    /**
     * Remove option from configurable product
     *
     * @param string $sku 
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\ConfigurableProductOptionRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\ConfigurableProductOptionRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1DeleteByIdDelete(string $sku, int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\ConfigurableProductOptionRepositoryV1DeleteByIdDelete($sku, $id), $fetch);
    }
    /**
     * Get option for configurable product
     *
     * @param string $sku 
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\ConfigurableProductOptionRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\ConfigurableProductOptionRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ConfigurableProductDataOptionInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1GetGet(string $sku, int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\ConfigurableProductOptionRepositoryV1GetGet($sku, $id), $fetch);
    }
    /**
     * Save option
     *
     * @param string $sku 
     * @param string $id 
     * @param \Kiboko\Magento\v2_3\Model\V1ConfigurableProductsSkuOptionsIdPutBody $configurableProductOptionRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\ConfigurableProductOptionRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\ConfigurableProductOptionRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\ConfigurableProductOptionRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1SavePut(string $sku, string $id, \Kiboko\Magento\v2_3\Model\V1ConfigurableProductsSkuOptionsIdPutBody $configurableProductOptionRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\ConfigurableProductOptionRepositoryV1SavePut($sku, $id, $configurableProductOptionRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Save a coupon.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CouponsPostBody $salesRuleCouponRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesRuleDataCouponInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1CouponsPostBody $salesRuleCouponRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesRuleCouponRepositoryV1SavePost($salesRuleCouponRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Delete coupon by coupon codes.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CouponsDeleteByCodesPostBody $salesRuleCouponManagementV1DeleteByCodesPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponManagementV1DeleteByCodesPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponManagementV1DeleteByCodesPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponManagementV1DeleteByCodesPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesRuleDataCouponMassDeleteResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponManagementV1DeleteByCodesPost(\Kiboko\Magento\v2_3\Model\V1CouponsDeleteByCodesPostBody $salesRuleCouponManagementV1DeleteByCodesPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesRuleCouponManagementV1DeleteByCodesPost($salesRuleCouponManagementV1DeleteByCodesPostBody), $fetch);
    }
    /**
     * Delete coupon by coupon ids.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CouponsDeleteByIdsPostBody $salesRuleCouponManagementV1DeleteByIdsPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponManagementV1DeleteByIdsPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponManagementV1DeleteByIdsPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponManagementV1DeleteByIdsPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesRuleDataCouponMassDeleteResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponManagementV1DeleteByIdsPost(\Kiboko\Magento\v2_3\Model\V1CouponsDeleteByIdsPostBody $salesRuleCouponManagementV1DeleteByIdsPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesRuleCouponManagementV1DeleteByIdsPost($salesRuleCouponManagementV1DeleteByIdsPostBody), $fetch);
    }
    /**
     * Generate coupon for a rule
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CouponsGeneratePostBody $salesRuleCouponManagementV1GeneratePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponManagementV1GeneratePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponManagementV1GeneratePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponManagementV1GeneratePost(\Kiboko\Magento\v2_3\Model\V1CouponsGeneratePostBody $salesRuleCouponManagementV1GeneratePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesRuleCouponManagementV1GeneratePost($salesRuleCouponManagementV1GeneratePostBody), $fetch);
    }
    /**
     * Retrieve a coupon using the specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See https://devdocs.magento.com/codelinks/attributes.html#CouponRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
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
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesRuleDataCouponSearchResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesRuleCouponRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Delete coupon by coupon id.
     *
     * @param int $couponId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1DeleteByIdDelete(int $couponId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesRuleCouponRepositoryV1DeleteByIdDelete($couponId), $fetch);
    }
    /**
     * Get coupon by coupon id.
     *
     * @param int $couponId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesRuleDataCouponInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1GetByIdGet(int $couponId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesRuleCouponRepositoryV1GetByIdGet($couponId), $fetch);
    }
    /**
     * Save a coupon.
     *
     * @param string $couponId 
     * @param \Kiboko\Magento\v2_3\Model\V1CouponsCouponIdPutBody $salesRuleCouponRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleCouponRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesRuleDataCouponInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1SavePut(string $couponId, \Kiboko\Magento\v2_3\Model\V1CouponsCouponIdPutBody $salesRuleCouponRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesRuleCouponRepositoryV1SavePut($couponId, $salesRuleCouponRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Performs persist operations for a specified credit memo.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CreditmemoPostBody $salesCreditmemoRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesCreditmemoRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataCreditmemoInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1CreditmemoPostBody $salesCreditmemoRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesCreditmemoRepositoryV1SavePost($salesCreditmemoRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Prepare creditmemo to refund and save it.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CreditmemoRefundPostBody $salesCreditmemoManagementV1RefundPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesCreditmemoManagementV1RefundPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataCreditmemoInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoManagementV1RefundPost(\Kiboko\Magento\v2_3\Model\V1CreditmemoRefundPostBody $salesCreditmemoManagementV1RefundPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesCreditmemoManagementV1RefundPost($salesCreditmemoManagementV1RefundPostBody), $fetch);
    }
    /**
     * Loads a specified credit memo.
     *
     * @param int $id The credit memo ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesCreditmemoRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataCreditmemoInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesCreditmemoRepositoryV1GetGet($id), $fetch);
    }
    /**
     * Cancels a specified credit memo.
     *
     * @param int $id The credit memo ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesCreditmemoManagementV1CancelPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesCreditmemoManagementV1CancelPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoManagementV1CancelPut(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesCreditmemoManagementV1CancelPut($id), $fetch);
    }
    /**
     * Lists comments for a specified credit memo.
     *
     * @param int $id The credit memo ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesCreditmemoManagementV1GetCommentsListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataCreditmemoCommentSearchResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoManagementV1GetCommentsListGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesCreditmemoManagementV1GetCommentsListGet($id), $fetch);
    }
    /**
     * Performs persist operations for a specified entity.
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_3\Model\V1CreditmemoIdCommentsPostBody $salesCreditmemoCommentRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesCreditmemoCommentRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesCreditmemoCommentRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataCreditmemoCommentInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoCommentRepositoryV1SavePost(string $id, \Kiboko\Magento\v2_3\Model\V1CreditmemoIdCommentsPostBody $salesCreditmemoCommentRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesCreditmemoCommentRepositoryV1SavePost($id, $salesCreditmemoCommentRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Emails a user a specified credit memo.
     *
     * @param int $id The credit memo ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesCreditmemoManagementV1NotifyPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoManagementV1NotifyPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesCreditmemoManagementV1NotifyPost($id), $fetch);
    }
    /**
     * Lists credit memos that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See https://devdocs.magento.com/codelinks/attributes.html#CreditmemoRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
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
     * @throws \Kiboko\Magento\v2_3\Exception\SalesCreditmemoRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataCreditmemoSearchResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesCreditmemoRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save customer group.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CustomerGroupsPostBody $customerGroupRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataGroupInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1CustomerGroupsPostBody $customerGroupRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerGroupRepositoryV1SavePost($customerGroupRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Get default customer group.
     *
     * @param array $queryParameters {
     *     @var int $storeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupManagementV1GetDefaultGroupGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupManagementV1GetDefaultGroupGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupManagementV1GetDefaultGroupGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataGroupInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupManagementV1GetDefaultGroupGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerGroupManagementV1GetDefaultGroupGet($queryParameters), $fetch);
    }
    /**
     * Set system default customer group.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerGroupConfigV1SetDefaultCustomerGroupPut(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPut($id), $fetch);
    }
    /**
     * Get default customer group.
     *
     * @param int $storeId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupManagementV1GetDefaultGroupGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupManagementV1GetDefaultGroupGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupManagementV1GetDefaultGroupGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataGroupInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupManagementV1GetDefaultGroupGet(int $storeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerGroupManagementV1GetDefaultGroupGet($storeId), $fetch);
    }
    /**
     * Retrieve customer groups. The list of groups can be filtered to exclude the NOT_LOGGED_IN group using the first parameter and/or it can be filtered by tax class. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See https://devdocs.magento.com/codelinks/attributes.html#GroupRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
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
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataGroupSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerGroupRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Delete customer group by ID.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1DeleteByIdDelete(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerGroupRepositoryV1DeleteByIdDelete($id), $fetch);
    }
    /**
     * Get customer group by group ID.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataGroupInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1GetByIdGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerGroupRepositoryV1GetByIdGet($id), $fetch);
    }
    /**
     * Save customer group.
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_3\Model\V1CustomerGroupsIdPutBody $customerGroupRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataGroupInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1SavePut(string $id, \Kiboko\Magento\v2_3\Model\V1CustomerGroupsIdPutBody $customerGroupRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerGroupRepositoryV1SavePut($id, $customerGroupRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Check if customer group can be deleted.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupManagementV1IsReadonlyGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupManagementV1IsReadonlyGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerGroupManagementV1IsReadonlyGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupManagementV1IsReadonlyGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerGroupManagementV1IsReadonlyGet($id), $fetch);
    }
    /**
     * Create customer account. Perform necessary business operations like sending email.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CustomersPostBody $customerAccountManagementV1CreateAccountPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1CreateAccountPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataCustomerInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1CreateAccountPost(\Kiboko\Magento\v2_3\Model\V1CustomersPostBody $customerAccountManagementV1CreateAccountPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerAccountManagementV1CreateAccountPost($customerAccountManagementV1CreateAccountPostBody), $fetch);
    }
    /**
     * Retrieve customer address.
     *
     * @param int $addressId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAddressRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAddressRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataAddressInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressRepositoryV1GetByIdGet(int $addressId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerAddressRepositoryV1GetByIdGet($addressId), $fetch);
    }
    /**
     * Resend confirmation email.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CustomersConfirmPostBody $customerAccountManagementV1ResendConfirmationPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1ResendConfirmationPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1ResendConfirmationPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ResendConfirmationPost(\Kiboko\Magento\v2_3\Model\V1CustomersConfirmPostBody $customerAccountManagementV1ResendConfirmationPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerAccountManagementV1ResendConfirmationPost($customerAccountManagementV1ResendConfirmationPostBody), $fetch);
    }
    /**
     * Check if given email is associated with a customer account in given website.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CustomersIsEmailAvailablePostBody $customerAccountManagementV1IsEmailAvailablePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1IsEmailAvailablePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1IsEmailAvailablePost(\Kiboko\Magento\v2_3\Model\V1CustomersIsEmailAvailablePostBody $customerAccountManagementV1IsEmailAvailablePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerAccountManagementV1IsEmailAvailablePost($customerAccountManagementV1IsEmailAvailablePostBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataCustomerInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1GetByIdGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerCustomerRepositoryV1GetByIdGet(), $fetch);
    }
    /**
     * Create or update a customer.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CustomersMePutBody $customerCustomerRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataCustomerInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1SavePut(\Kiboko\Magento\v2_3\Model\V1CustomersMePutBody $customerCustomerRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerCustomerRepositoryV1SavePut($customerCustomerRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Activate a customer account using a key that was sent in a confirmation email.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CustomersMeActivatePutBody $customerAccountManagementV1ActivateByIdPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1ActivateByIdPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1ActivateByIdPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataCustomerInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ActivateByIdPut(\Kiboko\Magento\v2_3\Model\V1CustomersMeActivatePutBody $customerAccountManagementV1ActivateByIdPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerAccountManagementV1ActivateByIdPut($customerAccountManagementV1ActivateByIdPutBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataAddressInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1GetDefaultBillingAddressGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerAccountManagementV1GetDefaultBillingAddressGet(), $fetch);
    }
    /**
     * Change customer password.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CustomersMePasswordPutBody $customerAccountManagementV1ChangePasswordByIdPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1ChangePasswordByIdPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1ChangePasswordByIdPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ChangePasswordByIdPut(\Kiboko\Magento\v2_3\Model\V1CustomersMePasswordPutBody $customerAccountManagementV1ChangePasswordByIdPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerAccountManagementV1ChangePasswordByIdPut($customerAccountManagementV1ChangePasswordByIdPutBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataAddressInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1GetDefaultShippingAddressGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerAccountManagementV1GetDefaultShippingAddressGet(), $fetch);
    }
    /**
     * Send an email to the customer with a password reset link.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CustomersPasswordPutBody $customerAccountManagementV1InitiatePasswordResetPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1InitiatePasswordResetPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1InitiatePasswordResetPut(\Kiboko\Magento\v2_3\Model\V1CustomersPasswordPutBody $customerAccountManagementV1InitiatePasswordResetPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerAccountManagementV1InitiatePasswordResetPut($customerAccountManagementV1InitiatePasswordResetPutBody), $fetch);
    }
    /**
     * Reset customer password.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CustomersResetPasswordPostBody $customerAccountManagementV1ResetPasswordPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1ResetPasswordPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ResetPasswordPost(\Kiboko\Magento\v2_3\Model\V1CustomersResetPasswordPostBody $customerAccountManagementV1ResetPasswordPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerAccountManagementV1ResetPasswordPost($customerAccountManagementV1ResetPasswordPostBody), $fetch);
    }
    /**
     * Retrieve customers which match a specified criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See https://devdocs.magento.com/codelinks/attributes.html#CustomerRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
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
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataCustomerSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerCustomerRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Validate customer data.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1CustomersValidatePutBody $customerAccountManagementV1ValidatePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1ValidatePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1ValidatePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataValidationResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ValidatePut(\Kiboko\Magento\v2_3\Model\V1CustomersValidatePutBody $customerAccountManagementV1ValidatePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerAccountManagementV1ValidatePut($customerAccountManagementV1ValidatePutBody), $fetch);
    }
    /**
     * Delete customer by Customer ID.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1DeleteByIdDelete(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerCustomerRepositoryV1DeleteByIdDelete($customerId), $fetch);
    }
    /**
     * Get customer by Customer ID.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataCustomerInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1GetByIdGet(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerCustomerRepositoryV1GetByIdGet($customerId), $fetch);
    }
    /**
     * Create or update a customer.
     *
     * @param string $customerId 
     * @param \Kiboko\Magento\v2_3\Model\V1CustomersCustomerIdPutBody $customerCustomerRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerCustomerRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataCustomerInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1SavePut(string $customerId, \Kiboko\Magento\v2_3\Model\V1CustomersCustomerIdPutBody $customerCustomerRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerCustomerRepositoryV1SavePut($customerId, $customerCustomerRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Retrieve default billing address for the given customerId.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataAddressInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1GetDefaultBillingAddressGet(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerAccountManagementV1GetDefaultBillingAddressGet($customerId), $fetch);
    }
    /**
     * Creates an empty cart and quote for a specified customer if customer does not have a cart yet.
     *
     * @param int $customerId The customer ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartManagementV1CreateEmptyCartForCustomerPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartManagementV1CreateEmptyCartForCustomerPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1CreateEmptyCartForCustomerPost(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteCartManagementV1CreateEmptyCartForCustomerPost($customerId), $fetch);
    }
    /**
     * Gets the account confirmation status.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1GetConfirmationStatusGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1GetConfirmationStatusGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1GetConfirmationStatusGet(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerAccountManagementV1GetConfirmationStatusGet($customerId), $fetch);
    }
    /**
     * Check if password reset token is valid.
     *
     * @param int $customerId If null is given then a customer will be matched by the RP token.
     * @param string $resetPasswordLinkToken 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1ValidateResetPasswordLinkTokenGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1ValidateResetPasswordLinkTokenGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ValidateResetPasswordLinkTokenGet(int $customerId, string $resetPasswordLinkToken, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerAccountManagementV1ValidateResetPasswordLinkTokenGet($customerId, $resetPasswordLinkToken), $fetch);
    }
    /**
     * Check if customer can be deleted.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1IsReadonlyGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1IsReadonlyGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1IsReadonlyGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1IsReadonlyGet(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerAccountManagementV1IsReadonlyGet($customerId), $fetch);
    }
    /**
     * Retrieve default shipping address for the given customerId.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataAddressInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1GetDefaultShippingAddressGet(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerAccountManagementV1GetDefaultShippingAddressGet($customerId), $fetch);
    }
    /**
     * Activate a customer account using a key that was sent in a confirmation email.
     *
     * @param string $email 
     * @param \Kiboko\Magento\v2_3\Model\V1CustomersEmailActivatePutBody $customerAccountManagementV1ActivatePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1ActivatePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAccountManagementV1ActivatePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataCustomerInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ActivatePut(string $email, \Kiboko\Magento\v2_3\Model\V1CustomersEmailActivatePutBody $customerAccountManagementV1ActivatePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CustomerAccountManagementV1ActivatePut($email, $customerAccountManagementV1ActivatePutBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_3\Model\DirectoryDataCountryInformationInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function directoryCountryInformationAcquirerV1GetCountriesInfoGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\DirectoryCountryInformationAcquirerV1GetCountriesInfoGet(), $fetch);
    }
    /**
     * Get country and region information for the store.
     *
     * @param string $countryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\DirectoryCountryInformationAcquirerV1GetCountryInfoGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\DirectoryDataCountryInformationInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function directoryCountryInformationAcquirerV1GetCountryInfoGet(string $countryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\DirectoryCountryInformationAcquirerV1GetCountryInfoGet($countryId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_3\Model\DirectoryDataCurrencyInformationInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function directoryCurrencyInformationAcquirerV1GetCurrencyInfoGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\DirectoryCurrencyInformationAcquirerV1GetCurrencyInfoGet(), $fetch);
    }
    /**
     * Create attribute set from data
     *
     * @param \Kiboko\Magento\v2_3\Model\V1EavAttributeSetsPostBody $eavAttributeSetManagementV1CreatePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\EavAttributeSetManagementV1CreatePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\EavAttributeSetManagementV1CreatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\EavDataAttributeSetInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetManagementV1CreatePost(\Kiboko\Magento\v2_3\Model\V1EavAttributeSetsPostBody $eavAttributeSetManagementV1CreatePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\EavAttributeSetManagementV1CreatePost($eavAttributeSetManagementV1CreatePostBody), $fetch);
    }
    /**
     * Retrieve list of Attribute Sets This call returns an array of objects, but detailed information about each object’s attributes might not be included. See https://devdocs.magento.com/codelinks/attributes.html#AttributeSetRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
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
     * @throws \Kiboko\Magento\v2_3\Exception\EavAttributeSetRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\EavDataAttributeSetSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\EavAttributeSetRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Remove attribute set by given ID
     *
     * @param int $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\EavAttributeSetRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\EavAttributeSetRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetRepositoryV1DeleteByIdDelete(int $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\EavAttributeSetRepositoryV1DeleteByIdDelete($attributeSetId), $fetch);
    }
    /**
     * Retrieve attribute set information based on given ID
     *
     * @param int $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\EavAttributeSetRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\EavAttributeSetRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\EavDataAttributeSetInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetRepositoryV1GetGet(int $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\EavAttributeSetRepositoryV1GetGet($attributeSetId), $fetch);
    }
    /**
     * Save attribute set data
     *
     * @param string $attributeSetId 
     * @param \Kiboko\Magento\v2_3\Model\V1EavAttributeSetsAttributeSetIdPutBody $eavAttributeSetRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\EavAttributeSetRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\EavAttributeSetRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\EavAttributeSetRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\EavDataAttributeSetInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetRepositoryV1SavePut(string $attributeSetId, \Kiboko\Magento\v2_3\Model\V1EavAttributeSetsAttributeSetIdPutBody $eavAttributeSetRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\EavAttributeSetRepositoryV1SavePut($attributeSetId, $eavAttributeSetRepositoryV1SavePutBody), $fetch);
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
     * @throws \Kiboko\Magento\v2_3\Exception\GiftWrappingWrappingRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\GiftWrappingDataWrappingSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftWrappingWrappingRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftWrappingWrappingRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create/Update new gift wrapping with data object values
     *
     * @param \Kiboko\Magento\v2_3\Model\V1GiftWrappingsPostBody $giftWrappingWrappingRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftWrappingWrappingRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\GiftWrappingWrappingRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\GiftWrappingDataWrappingInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftWrappingWrappingRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1GiftWrappingsPostBody $giftWrappingWrappingRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftWrappingWrappingRepositoryV1SavePost($giftWrappingWrappingRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Delete gift wrapping
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftWrappingWrappingRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\GiftWrappingWrappingRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftWrappingWrappingRepositoryV1DeleteByIdDelete(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftWrappingWrappingRepositoryV1DeleteByIdDelete($id), $fetch);
    }
    /**
     * Return data object for specified wrapping ID and store.
     *
     * @param int $id 
     * @param array $queryParameters {
     *     @var int $storeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftWrappingWrappingRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\GiftWrappingDataWrappingInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftWrappingWrappingRepositoryV1GetGet(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftWrappingWrappingRepositoryV1GetGet($id, $queryParameters), $fetch);
    }
    /**
     * Create/Update new gift wrapping with data object values
     *
     * @param string $wrappingId 
     * @param \Kiboko\Magento\v2_3\Model\V1GiftWrappingsWrappingIdPutBody $giftWrappingWrappingRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftWrappingWrappingRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\GiftWrappingWrappingRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\GiftWrappingDataWrappingInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftWrappingWrappingRepositoryV1SavePut(string $wrappingId, \Kiboko\Magento\v2_3\Model\V1GiftWrappingsWrappingIdPutBody $giftWrappingWrappingRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftWrappingWrappingRepositoryV1SavePut($wrappingId, $giftWrappingWrappingRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Estimate shipping
     *
     * @param \Kiboko\Magento\v2_3\Model\V1GiftregistryMineEstimateShippingMethodsPostBody $giftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftRegistryShippingMethodManagementV1EstimateByRegistryIdPost(\Kiboko\Magento\v2_3\Model\V1GiftregistryMineEstimateShippingMethodsPostBody $giftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPost($giftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteGuestCartManagementV1CreateEmptyCartPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartManagementV1CreateEmptyCartPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteGuestCartManagementV1CreateEmptyCartPost(), $fetch);
    }
    /**
     * Enable a guest user to return information for a specified cart.
     *
     * @param string $cartId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteGuestCartRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataCartInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartRepositoryV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteGuestCartRepositoryV1GetGet($cartId), $fetch);
    }
    /**
     * Assign a specified customer to a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdPutBody $quoteGuestCartManagementV1AssignCustomerPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteGuestCartManagementV1AssignCustomerPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartManagementV1AssignCustomerPut(string $cartId, \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdPutBody $quoteGuestCartManagementV1AssignCustomerPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteGuestCartManagementV1AssignCustomerPut($cartId, $quoteGuestCartManagementV1AssignCustomerPutBody), $fetch);
    }
    /**
     * Return the billing address for a specified quote.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteGuestBillingAddressManagementV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataAddressInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestBillingAddressManagementV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteGuestBillingAddressManagementV1GetGet($cartId), $fetch);
    }
    /**
     * Assign a specified billing address to a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdBillingAddressPostBody $quoteGuestBillingAddressManagementV1AssignPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteGuestBillingAddressManagementV1AssignPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestBillingAddressManagementV1AssignPost(string $cartId, \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdBillingAddressPostBody $quoteGuestBillingAddressManagementV1AssignPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteGuestBillingAddressManagementV1AssignPost($cartId, $quoteGuestBillingAddressManagementV1AssignPostBody), $fetch);
    }
    /**
     * Set shipping/billing methods and additional data for cart and collect totals for guest.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdCollectTotalsPutBody $quoteGuestCartTotalManagementV1CollectTotalsPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataTotalsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartTotalManagementV1CollectTotalsPut(string $cartId, \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdCollectTotalsPutBody $quoteGuestCartTotalManagementV1CollectTotalsPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteGuestCartTotalManagementV1CollectTotalsPut($cartId, $quoteGuestCartTotalManagementV1CollectTotalsPutBody), $fetch);
    }
    /**
     * Delete a coupon from a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteGuestCouponManagementV1RemoveDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCouponManagementV1RemoveDelete(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteGuestCouponManagementV1RemoveDelete($cartId), $fetch);
    }
    /**
     * Return information for a coupon in a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteGuestCouponManagementV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCouponManagementV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteGuestCouponManagementV1GetGet($cartId), $fetch);
    }
    /**
     * Add a coupon by code to a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $couponCode The coupon code data.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteGuestCouponManagementV1SetPutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCouponManagementV1SetPut(string $cartId, string $couponCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteGuestCouponManagementV1SetPut($cartId, $couponCode), $fetch);
    }
    /**
     * Estimate shipping by address and return list of available shipping methods
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdEstimateShippingMethodsPostBody $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost(string $cartId, \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdEstimateShippingMethodsPostBody $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteGuestShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody), $fetch);
    }
    /**
     * Return the gift message for a specified order.
     *
     * @param string $cartId The shopping cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_3\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageGuestCartRepositoryV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftMessageGuestCartRepositoryV1GetGet($cartId), $fetch);
    }
    /**
     * Set the gift message for an entire order.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdGiftMessagePostBody $giftMessageGuestCartRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftMessageGuestCartRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageGuestCartRepositoryV1SavePost(string $cartId, \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdGiftMessagePostBody $giftMessageGuestCartRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftMessageGuestCartRepositoryV1SavePost($cartId, $giftMessageGuestCartRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Return the gift message for a specified item in a specified shopping cart.
     *
     * @param string $cartId The shopping cart ID.
     * @param int $itemId The item ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftMessageGuestItemRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageGuestItemRepositoryV1GetGet(string $cartId, int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftMessageGuestItemRepositoryV1GetGet($cartId, $itemId), $fetch);
    }
    /**
     * Set the gift message for a specified item in a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param int $itemId The item ID.
     * @param \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdGiftMessageItemIdPostBody $giftMessageGuestItemRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftMessageGuestItemRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageGuestItemRepositoryV1SavePost(string $cartId, int $itemId, \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdGiftMessageItemIdPostBody $giftMessageGuestItemRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftMessageGuestItemRepositoryV1SavePost($cartId, $itemId, $giftMessageGuestItemRepositoryV1SavePostBody), $fetch);
    }
    /**
     * List items that are assigned to a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteGuestCartItemRepositoryV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataCartItemInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartItemRepositoryV1GetListGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteGuestCartItemRepositoryV1GetListGet($cartId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdItemsPostBody $quoteGuestCartItemRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteGuestCartItemRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataCartItemInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartItemRepositoryV1SavePost(string $cartId, \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdItemsPostBody $quoteGuestCartItemRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteGuestCartItemRepositoryV1SavePost($cartId, $quoteGuestCartItemRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Remove the specified item from the specified cart.
     *
     * @param string $cartId The cart ID.
     * @param int $itemId The item ID of the item to be removed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteGuestCartItemRepositoryV1DeleteByIdDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartItemRepositoryV1DeleteByIdDelete(string $cartId, int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteGuestCartItemRepositoryV1DeleteByIdDelete($cartId, $itemId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $cartId 
     * @param string $itemId 
     * @param \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdItemsItemIdPutBody $quoteGuestCartItemRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteGuestCartItemRepositoryV1SavePutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataCartItemInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartItemRepositoryV1SavePut(string $cartId, string $itemId, \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdItemsItemIdPutBody $quoteGuestCartItemRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteGuestCartItemRepositoryV1SavePut($cartId, $itemId, $quoteGuestCartItemRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Place an order for a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdOrderPutBody $quoteGuestCartManagementV1PlaceOrderPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteGuestCartManagementV1PlaceOrderPutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartManagementV1PlaceOrderPut(string $cartId, \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdOrderPutBody $quoteGuestCartManagementV1PlaceOrderPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteGuestCartManagementV1PlaceOrderPut($cartId, $quoteGuestCartManagementV1PlaceOrderPutBody), $fetch);
    }
    /**
     * Get payment information
     *
     * @param string $cartId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CheckoutGuestPaymentInformationManagementV1GetPaymentInformationGet($cartId), $fetch);
    }
    /**
     * Set payment information and place order for a specified cart.
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdPaymentInformationPostBody $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost(string $cartId, \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdPaymentInformationPostBody $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody), $fetch);
    }
    /**
     * List available payment methods for a specified shopping cart. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See https://devdocs.magento.com/codelinks/attributes.html#GuestPaymentMethodManagementInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteGuestPaymentMethodManagementV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataPaymentMethodInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestPaymentMethodManagementV1GetListGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteGuestPaymentMethodManagementV1GetListGet($cartId), $fetch);
    }
    /**
     * Return the payment method for a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteGuestPaymentMethodManagementV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataPaymentInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestPaymentMethodManagementV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteGuestPaymentMethodManagementV1GetGet($cartId), $fetch);
    }
    /**
     * Add a specified payment method to a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdSelectedPaymentMethodPutBody $quoteGuestPaymentMethodManagementV1SetPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteGuestPaymentMethodManagementV1SetPutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestPaymentMethodManagementV1SetPut(string $cartId, \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdSelectedPaymentMethodPutBody $quoteGuestPaymentMethodManagementV1SetPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteGuestPaymentMethodManagementV1SetPut($cartId, $quoteGuestPaymentMethodManagementV1SetPutBody), $fetch);
    }
    /**
     * Set payment information for a specified cart.
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdSetPaymentInformationPostBody $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost(string $cartId, \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdSetPaymentInformationPostBody $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPost($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody), $fetch);
    }
    /**
     * 
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdShippingInformationPostBody $checkoutGuestShippingInformationManagementV1SaveAddressInformationPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestShippingInformationManagementV1SaveAddressInformationPost(string $cartId, \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdShippingInformationPostBody $checkoutGuestShippingInformationManagementV1SaveAddressInformationPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CheckoutGuestShippingInformationManagementV1SaveAddressInformationPost($cartId, $checkoutGuestShippingInformationManagementV1SaveAddressInformationPostBody), $fetch);
    }
    /**
     * List applicable shipping methods for a specified quote.
     *
     * @param string $cartId The shopping cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteGuestShippingMethodManagementV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestShippingMethodManagementV1GetListGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteGuestShippingMethodManagementV1GetListGet($cartId), $fetch);
    }
    /**
     * Return quote totals data for a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteGuestCartTotalRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataTotalsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartTotalRepositoryV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\QuoteGuestCartTotalRepositoryV1GetGet($cartId), $fetch);
    }
    /**
     * Calculate quote totals based on address and shipping method.
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdTotalsInformationPostBody $checkoutGuestTotalsInformationManagementV1CalculatePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataTotalsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestTotalsInformationManagementV1CalculatePost(string $cartId, \Kiboko\Magento\v2_3\Model\V1GuestCartsCartIdTotalsInformationPostBody $checkoutGuestTotalsInformationManagementV1CalculatePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CheckoutGuestTotalsInformationManagementV1CalculatePost($cartId, $checkoutGuestTotalsInformationManagementV1CalculatePostBody), $fetch);
    }
    /**
     * Estimate shipping
     *
     * @param string $cartId The shopping cart ID.
     * @param \Kiboko\Magento\v2_3\Model\V1GuestGiftregistryCartIdEstimateShippingMethodsPostBody $giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\GiftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost(string $cartId, \Kiboko\Magento\v2_3\Model\V1GuestGiftregistryCartIdEstimateShippingMethodsPostBody $giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\GiftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost($cartId, $giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBody), $fetch);
    }
    /**
     * Moves teams and users within the company structure.
     *
     * @param int $id 
     * @param \Kiboko\Magento\v2_3\Model\V1HierarchyMoveIdPutBody $companyCompanyHierarchyV1MoveNodePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCompanyHierarchyV1MoveNodePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCompanyHierarchyV1MoveNodePut(int $id, \Kiboko\Magento\v2_3\Model\V1HierarchyMoveIdPutBody $companyCompanyHierarchyV1MoveNodePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyCompanyHierarchyV1MoveNodePut($id, $companyCompanyHierarchyV1MoveNodePutBody), $fetch);
    }
    /**
     * Returns the list of teams and company users in the company structure.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCompanyHierarchyV1GetCompanyHierarchyGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CompanyDataHierarchyInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyCompanyHierarchyV1GetCompanyHierarchyGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyCompanyHierarchyV1GetCompanyHierarchyGet($id), $fetch);
    }
    /**
     * Create access token for admin given the admin credentials.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1IntegrationAdminTokenPostBody $integrationAdminTokenServiceV1CreateAdminAccessTokenPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function integrationAdminTokenServiceV1CreateAdminAccessTokenPost(\Kiboko\Magento\v2_3\Model\V1IntegrationAdminTokenPostBody $integrationAdminTokenServiceV1CreateAdminAccessTokenPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPost($integrationAdminTokenServiceV1CreateAdminAccessTokenPostBody), $fetch);
    }
    /**
     * Create access token for admin given the customer credentials.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1IntegrationCustomerTokenPostBody $integrationCustomerTokenServiceV1CreateCustomerAccessTokenPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\IntegrationCustomerTokenServiceV1CreateCustomerAccessTokenPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function integrationCustomerTokenServiceV1CreateCustomerAccessTokenPost(\Kiboko\Magento\v2_3\Model\V1IntegrationCustomerTokenPostBody $integrationCustomerTokenServiceV1CreateCustomerAccessTokenPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\IntegrationCustomerTokenServiceV1CreateCustomerAccessTokenPost($integrationCustomerTokenServiceV1CreateCustomerAccessTokenPostBody), $fetch);
    }
    /**
     * Run bulk partial inventory transfer for specified items.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1InventoryBulkPartialSourceTransferPostBody $inventoryCatalogApiBulkPartialInventoryTransferV1ExecutePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryCatalogApiBulkPartialInventoryTransferV1ExecutePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryCatalogApiBulkPartialInventoryTransferV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryCatalogApiBulkPartialInventoryTransferV1ExecutePost(\Kiboko\Magento\v2_3\Model\V1InventoryBulkPartialSourceTransferPostBody $inventoryCatalogApiBulkPartialInventoryTransferV1ExecutePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryCatalogApiBulkPartialInventoryTransferV1ExecutePost($inventoryCatalogApiBulkPartialInventoryTransferV1ExecutePostBody), $fetch);
    }
    /**
     * Run mass product to source assignment
     *
     * @param \Kiboko\Magento\v2_3\Model\V1InventoryBulkProductSourceAssignPostBody $inventoryCatalogApiBulkSourceAssignV1ExecutePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryCatalogApiBulkSourceAssignV1ExecutePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryCatalogApiBulkSourceAssignV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryCatalogApiBulkSourceAssignV1ExecutePost(\Kiboko\Magento\v2_3\Model\V1InventoryBulkProductSourceAssignPostBody $inventoryCatalogApiBulkSourceAssignV1ExecutePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryCatalogApiBulkSourceAssignV1ExecutePost($inventoryCatalogApiBulkSourceAssignV1ExecutePostBody), $fetch);
    }
    /**
     * Run bulk inventory transfer
     *
     * @param \Kiboko\Magento\v2_3\Model\V1InventoryBulkProductSourceTransferPostBody $inventoryCatalogApiBulkInventoryTransferV1ExecutePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryCatalogApiBulkInventoryTransferV1ExecutePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryCatalogApiBulkInventoryTransferV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryCatalogApiBulkInventoryTransferV1ExecutePost(\Kiboko\Magento\v2_3\Model\V1InventoryBulkProductSourceTransferPostBody $inventoryCatalogApiBulkInventoryTransferV1ExecutePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryCatalogApiBulkInventoryTransferV1ExecutePost($inventoryCatalogApiBulkInventoryTransferV1ExecutePostBody), $fetch);
    }
    /**
     * Run mass product to source un-assignment
     *
     * @param \Kiboko\Magento\v2_3\Model\V1InventoryBulkProductSourceUnassignPostBody $inventoryCatalogApiBulkSourceUnassignV1ExecutePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryCatalogApiBulkSourceUnassignV1ExecutePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryCatalogApiBulkSourceUnassignV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryCatalogApiBulkSourceUnassignV1ExecutePost(\Kiboko\Magento\v2_3\Model\V1InventoryBulkProductSourceUnassignPostBody $inventoryCatalogApiBulkSourceUnassignV1ExecutePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryCatalogApiBulkSourceUnassignV1ExecutePost($inventoryCatalogApiBulkSourceUnassignV1ExecutePostBody), $fetch);
    }
    /**
     * Provides stock index export from inventory_stock_% table
     *
     * @param string $salesChannelType 
     * @param string $salesChannelCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryExportStockApiExportStockIndexDataV1ExecuteGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\InventoryExportStockApiDataProductStockIndexDataInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryExportStockApiExportStockIndexDataV1ExecuteGet(string $salesChannelType, string $salesChannelCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryExportStockApiExportStockIndexDataV1ExecuteGet($salesChannelType, $salesChannelCode), $fetch);
    }
    /**
     * Export product stock data filtered by search criteria.
     *
     * @param string $salesChannelType 
     * @param string $salesChannelCode 
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
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryExportStockApiExportStockSalableQtyV1ExecuteGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\InventoryExportStockApiDataExportStockSalableQtySearchResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryExportStockApiExportStockSalableQtyV1ExecuteGet(string $salesChannelType, string $salesChannelCode, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryExportStockApiExportStockSalableQtyV1ExecuteGet($salesChannelType, $salesChannelCode, $queryParameters), $fetch);
    }
    /**
     * Get distance between two points
     *
     * @param array $queryParameters {
     *     @var float $source[lat] Latitude
     *     @var float $source[lng] Longitude
     *     @var float $destination[lat] Latitude
     *     @var float $destination[lng] Longitude
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryDistanceBasedSourceSelectionApiGetDistanceV1ExecuteGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryDistanceBasedSourceSelectionApiGetDistanceV1ExecuteGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryDistanceBasedSourceSelectionApiGetDistanceV1ExecuteGet($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryDistanceBasedSourceSelectionApiGetDistanceProviderCodeV1ExecuteGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryDistanceBasedSourceSelectionApiGetDistanceProviderCodeV1ExecuteGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryDistanceBasedSourceSelectionApiGetDistanceProviderCodeV1ExecuteGet(), $fetch);
    }
    /**
     * Get latitude and longitude object from address
     *
     * @param array $queryParameters {
     *     @var string $address[country] Shipping country
     *     @var string $address[postcode] Shipping postcode
     *     @var string $address[street] Shipping street address
     *     @var string $address[region] Shipping region
     *     @var string $address[city] Shipping city
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryDistanceBasedSourceSelectionApiGetLatLngFromAddressV1ExecuteGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\InventoryDistanceBasedSourceSelectionApiDataLatLngInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryDistanceBasedSourceSelectionApiGetLatLngFromAddressV1ExecuteGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryDistanceBasedSourceSelectionApiGetLatLngFromAddressV1ExecuteGet($queryParameters), $fetch);
    }
    /**
     * Get Product Quantity for given SKU and Stock
     *
     * @param string $sku 
     * @param int $stockId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventorySalesApiGetProductSalableQtyV1ExecuteGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\InventorySalesApiGetProductSalableQtyV1ExecuteGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\InventorySalesApiGetProductSalableQtyV1ExecuteGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventorySalesApiGetProductSalableQtyV1ExecuteGet(string $sku, int $stockId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventorySalesApiGetProductSalableQtyV1ExecuteGet($sku, $stockId), $fetch);
    }
    /**
     * Get Sources assigned to Stock ordered by priority If Stock with given id doesn't exist then return an empty array
     *
     * @param int $stockId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiGetSourcesAssignedToStockOrderedByPriorityV1ExecuteGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiGetSourcesAssignedToStockOrderedByPriorityV1ExecuteGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiGetSourcesAssignedToStockOrderedByPriorityV1ExecuteGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\InventoryApiDataSourceInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryApiGetSourcesAssignedToStockOrderedByPriorityV1ExecuteGet(int $stockId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryApiGetSourcesAssignedToStockOrderedByPriorityV1ExecuteGet($stockId), $fetch);
    }
    /**
     * Get is product salable for given SKU in a given Stock for a certain Qty
     *
     * @param string $sku 
     * @param int $stockId 
     * @param float $requestedQty 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventorySalesApiIsProductSalableForRequestedQtyV1ExecuteGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\InventorySalesApiIsProductSalableForRequestedQtyV1ExecuteGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\InventorySalesApiDataProductSalableResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventorySalesApiIsProductSalableForRequestedQtyV1ExecuteGet(string $sku, int $stockId, float $requestedQty, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventorySalesApiIsProductSalableForRequestedQtyV1ExecuteGet($sku, $stockId, $requestedQty), $fetch);
    }
    /**
     * Get is product in salable for given SKU in a given Stock
     *
     * @param string $sku 
     * @param int $stockId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventorySalesApiIsProductSalableV1ExecuteGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventorySalesApiIsProductSalableV1ExecuteGet(string $sku, int $stockId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventorySalesApiIsProductSalableV1ExecuteGet($sku, $stockId), $fetch);
    }
    /**
     * 
     *
     * @param \Kiboko\Magento\v2_3\Model\V1InventoryLowQuantityNotificationPostBody $inventoryLowQuantityNotificationApiSourceItemConfigurationsSaveV1ExecutePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryLowQuantityNotificationApiSourceItemConfigurationsSaveV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryLowQuantityNotificationApiSourceItemConfigurationsSaveV1ExecutePost(\Kiboko\Magento\v2_3\Model\V1InventoryLowQuantityNotificationPostBody $inventoryLowQuantityNotificationApiSourceItemConfigurationsSaveV1ExecutePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryLowQuantityNotificationApiSourceItemConfigurationsSaveV1ExecutePost($inventoryLowQuantityNotificationApiSourceItemConfigurationsSaveV1ExecutePostBody), $fetch);
    }
    /**
     * Get the source item configuration
     *
     * @param string $sourceCode 
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryLowQuantityNotificationApiGetSourceItemConfigurationV1ExecuteGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryLowQuantityNotificationApiGetSourceItemConfigurationV1ExecuteGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\InventoryLowQuantityNotificationApiDataSourceItemConfigurationInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryLowQuantityNotificationApiGetSourceItemConfigurationV1ExecuteGet(string $sourceCode, string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryLowQuantityNotificationApiGetSourceItemConfigurationV1ExecuteGet($sourceCode, $sku), $fetch);
    }
    /**
     * Delete multiple source items configuration for low quantity
     *
     * @param \Kiboko\Magento\v2_3\Model\V1InventoryLowQuantityNotificationsDeletePostBody $inventoryLowQuantityNotificationApiDeleteSourceItemsConfigurationV1ExecutePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryLowQuantityNotificationApiDeleteSourceItemsConfigurationV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryLowQuantityNotificationApiDeleteSourceItemsConfigurationV1ExecutePost(\Kiboko\Magento\v2_3\Model\V1InventoryLowQuantityNotificationsDeletePostBody $inventoryLowQuantityNotificationApiDeleteSourceItemsConfigurationV1ExecutePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryLowQuantityNotificationApiDeleteSourceItemsConfigurationV1ExecutePost($inventoryLowQuantityNotificationApiDeleteSourceItemsConfigurationV1ExecutePostBody), $fetch);
    }
    /**
     * Find SourceItems by SearchCriteria We need to have this method for direct work with SourceItems because this object contains additional data like as qty, status (for example can be searchable by additional field)
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
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiSourceItemRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\InventoryApiDataSourceItemSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryApiSourceItemRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryApiSourceItemRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save Multiple Source item data
     *
     * @param \Kiboko\Magento\v2_3\Model\V1InventorySourceItemsPostBody $inventoryApiSourceItemsSaveV1ExecutePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiSourceItemsSaveV1ExecutePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiSourceItemsSaveV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryApiSourceItemsSaveV1ExecutePost(\Kiboko\Magento\v2_3\Model\V1InventorySourceItemsPostBody $inventoryApiSourceItemsSaveV1ExecutePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryApiSourceItemsSaveV1ExecutePost($inventoryApiSourceItemsSaveV1ExecutePostBody), $fetch);
    }
    /**
     * Delete Multiple Source item data
     *
     * @param \Kiboko\Magento\v2_3\Model\V1InventorySourceItemsDeletePostBody $inventoryApiSourceItemsDeleteV1ExecutePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiSourceItemsDeleteV1ExecutePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiSourceItemsDeleteV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryApiSourceItemsDeleteV1ExecutePost(\Kiboko\Magento\v2_3\Model\V1InventorySourceItemsDeletePostBody $inventoryApiSourceItemsDeleteV1ExecutePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryApiSourceItemsDeleteV1ExecutePost($inventoryApiSourceItemsDeleteV1ExecutePostBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventorySourceSelectionApiGetSourceSelectionAlgorithmListV1ExecuteGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\InventorySourceSelectionApiDataSourceSelectionAlgorithmInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventorySourceSelectionApiGetSourceSelectionAlgorithmListV1ExecuteGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventorySourceSelectionApiGetSourceSelectionAlgorithmListV1ExecuteGet(), $fetch);
    }
    /**
     * 
     *
     * @param \Kiboko\Magento\v2_3\Model\V1InventorySourceSelectionAlgorithmResultPostBody $inventorySourceSelectionApiSourceSelectionServiceV1ExecutePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventorySourceSelectionApiSourceSelectionServiceV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\InventorySourceSelectionApiDataSourceSelectionResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventorySourceSelectionApiSourceSelectionServiceV1ExecutePost(\Kiboko\Magento\v2_3\Model\V1InventorySourceSelectionAlgorithmResultPostBody $inventorySourceSelectionApiSourceSelectionServiceV1ExecutePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventorySourceSelectionApiSourceSelectionServiceV1ExecutePost($inventorySourceSelectionApiSourceSelectionServiceV1ExecutePostBody), $fetch);
    }
    /**
     * Find Sources by SearchCriteria SearchCriteria is not required because load all stocks is useful case
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
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiSourceRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\InventoryApiDataSourceSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryApiSourceRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryApiSourceRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save Source data
     *
     * @param \Kiboko\Magento\v2_3\Model\V1InventorySourcesPostBody $inventoryApiSourceRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiSourceRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiSourceRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryApiSourceRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1InventorySourcesPostBody $inventoryApiSourceRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryApiSourceRepositoryV1SavePost($inventoryApiSourceRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Get Source data by given code. If you want to create plugin on get method, also you need to create separate plugin on getList method, because entity loading way is different for these methods
     *
     * @param string $sourceCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiSourceRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiSourceRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\InventoryApiDataSourceInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryApiSourceRepositoryV1GetGet(string $sourceCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryApiSourceRepositoryV1GetGet($sourceCode), $fetch);
    }
    /**
     * Save Source data
     *
     * @param string $sourceCode 
     * @param \Kiboko\Magento\v2_3\Model\V1InventorySourcesSourceCodePutBody $inventoryApiSourceRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiSourceRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiSourceRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryApiSourceRepositoryV1SavePut(string $sourceCode, \Kiboko\Magento\v2_3\Model\V1InventorySourcesSourceCodePutBody $inventoryApiSourceRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryApiSourceRepositoryV1SavePut($sourceCode, $inventoryApiSourceRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Resolve Stock by Sales Channel type and code
     *
     * @param string $type 
     * @param string $code 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventorySalesApiStockResolverV1ExecuteGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\InventorySalesApiStockResolverV1ExecuteGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\InventoryApiDataStockInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventorySalesApiStockResolverV1ExecuteGet(string $type, string $code, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventorySalesApiStockResolverV1ExecuteGet($type, $code), $fetch);
    }
    /**
     * Find StockSourceLink list by given SearchCriteria
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
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiGetStockSourceLinksV1ExecuteGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\InventoryApiDataStockSourceLinkSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryApiGetStockSourceLinksV1ExecuteGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryApiGetStockSourceLinksV1ExecuteGet($queryParameters), $fetch);
    }
    /**
     * Save StockSourceLink list data
     *
     * @param \Kiboko\Magento\v2_3\Model\V1InventoryStockSourceLinksPostBody $inventoryApiStockSourceLinksSaveV1ExecutePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiStockSourceLinksSaveV1ExecutePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiStockSourceLinksSaveV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryApiStockSourceLinksSaveV1ExecutePost(\Kiboko\Magento\v2_3\Model\V1InventoryStockSourceLinksPostBody $inventoryApiStockSourceLinksSaveV1ExecutePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryApiStockSourceLinksSaveV1ExecutePost($inventoryApiStockSourceLinksSaveV1ExecutePostBody), $fetch);
    }
    /**
     * Remove StockSourceLink list list
     *
     * @param \Kiboko\Magento\v2_3\Model\V1InventoryStockSourceLinksDeletePostBody $inventoryApiStockSourceLinksDeleteV1ExecutePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiStockSourceLinksDeleteV1ExecutePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiStockSourceLinksDeleteV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryApiStockSourceLinksDeleteV1ExecutePost(\Kiboko\Magento\v2_3\Model\V1InventoryStockSourceLinksDeletePostBody $inventoryApiStockSourceLinksDeleteV1ExecutePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryApiStockSourceLinksDeleteV1ExecutePost($inventoryApiStockSourceLinksDeleteV1ExecutePostBody), $fetch);
    }
    /**
     * Find Stocks by given SearchCriteria SearchCriteria is not required because load all stocks is useful case
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
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiStockRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\InventoryApiDataStockSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryApiStockRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryApiStockRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save Stock data
     *
     * @param \Kiboko\Magento\v2_3\Model\V1InventoryStocksPostBody $inventoryApiStockRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiStockRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiStockRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryApiStockRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1InventoryStocksPostBody $inventoryApiStockRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryApiStockRepositoryV1SavePost($inventoryApiStockRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Delete the Stock data by stockId. If stock is not found do nothing
     *
     * @param int $stockId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiStockRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiStockRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryApiStockRepositoryV1DeleteByIdDelete(int $stockId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryApiStockRepositoryV1DeleteByIdDelete($stockId), $fetch);
    }
    /**
     * Get Stock data by given stockId. If you want to create plugin on get method, also you need to create separate plugin on getList method, because entity loading way is different for these methods
     *
     * @param int $stockId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiStockRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiStockRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\InventoryApiDataStockInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryApiStockRepositoryV1GetGet(int $stockId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryApiStockRepositoryV1GetGet($stockId), $fetch);
    }
    /**
     * Save Stock data
     *
     * @param string $stockId 
     * @param \Kiboko\Magento\v2_3\Model\V1InventoryStocksStockIdPutBody $inventoryApiStockRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiStockRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiStockRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inventoryApiStockRepositoryV1SavePut(string $stockId, \Kiboko\Magento\v2_3\Model\V1InventoryStocksStockIdPutBody $inventoryApiStockRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\InventoryApiStockRepositoryV1SavePut($stockId, $inventoryApiStockRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Create refund for invoice
     *
     * @param int $invoiceId 
     * @param \Kiboko\Magento\v2_3\Model\V1InvoiceInvoiceIdRefundPostBody $salesRefundInvoiceV1ExecutePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRefundInvoiceV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRefundInvoiceV1ExecutePost(int $invoiceId, \Kiboko\Magento\v2_3\Model\V1InvoiceInvoiceIdRefundPostBody $salesRefundInvoiceV1ExecutePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesRefundInvoiceV1ExecutePost($invoiceId, $salesRefundInvoiceV1ExecutePostBody), $fetch);
    }
    /**
     * Lists invoices that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See https://devdocs.magento.com/codelinks/attributes.html#InvoiceRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
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
     * @throws \Kiboko\Magento\v2_3\Exception\SalesInvoiceRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataInvoiceSearchResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesInvoiceRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Performs persist operations for a specified invoice.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1InvoicesPostBody $salesInvoiceRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesInvoiceRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataInvoiceInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1InvoicesPostBody $salesInvoiceRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesInvoiceRepositoryV1SavePost($salesInvoiceRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Performs persist operations for a specified invoice comment.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1InvoicesCommentsPostBody $salesInvoiceCommentRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesInvoiceCommentRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesInvoiceCommentRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataInvoiceCommentInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceCommentRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1InvoicesCommentsPostBody $salesInvoiceCommentRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesInvoiceCommentRepositoryV1SavePost($salesInvoiceCommentRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Loads a specified invoice.
     *
     * @param int $id The invoice ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesInvoiceRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataInvoiceInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesInvoiceRepositoryV1GetGet($id), $fetch);
    }
    /**
     * Sets invoice capture.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesInvoiceManagementV1SetCapturePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceManagementV1SetCapturePost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesInvoiceManagementV1SetCapturePost($id), $fetch);
    }
    /**
     * Lists comments for a specified invoice.
     *
     * @param int $id The invoice ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesInvoiceManagementV1GetCommentsListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataInvoiceCommentSearchResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceManagementV1GetCommentsListGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesInvoiceManagementV1GetCommentsListGet($id), $fetch);
    }
    /**
     * Emails a user a specified invoice.
     *
     * @param int $id The invoice ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesInvoiceManagementV1NotifyPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceManagementV1NotifyPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesInvoiceManagementV1NotifyPost($id), $fetch);
    }
    /**
     * Voids a specified invoice.
     *
     * @param int $id The invoice ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesInvoiceManagementV1SetVoidPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceManagementV1SetVoidPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesInvoiceManagementV1SetVoidPost($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\BackendModuleServiceV1GetModulesGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function backendModuleServiceV1GetModulesGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\BackendModuleServiceV1GetModulesGet(), $fetch);
    }
    /**
     * get default provider
     *
     * @param int $userId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\MSPTwoFactorAuthUserConfigManagerV1GetDefaultProviderGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function mSPTwoFactorAuthUserConfigManagerV1GetDefaultProviderGet(int $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\MSPTwoFactorAuthUserConfigManagerV1GetDefaultProviderGet($userId), $fetch);
    }
    /**
     * Set default provider code
     *
     * @param int $userId 
     * @param \Kiboko\Magento\v2_3\Model\V1Msp2faDefaultProviderCodeUserIdPutBody $mSPTwoFactorAuthTfaV1SetDefaultProviderCodePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\MSPTwoFactorAuthTfaV1SetDefaultProviderCodePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function mSPTwoFactorAuthTfaV1SetDefaultProviderCodePut(int $userId, \Kiboko\Magento\v2_3\Model\V1Msp2faDefaultProviderCodeUserIdPutBody $mSPTwoFactorAuthTfaV1SetDefaultProviderCodePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\MSPTwoFactorAuthTfaV1SetDefaultProviderCodePut($userId, $mSPTwoFactorAuthTfaV1SetDefaultProviderCodePutBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\MSPTwoFactorAuthTfaV1GetForcedProvidersGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\MSpTwoFactorAuthProviderInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function mSPTwoFactorAuthTfaV1GetForcedProvidersGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\MSPTwoFactorAuthTfaV1GetForcedProvidersGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\MSPTwoFactorAuthTfaV1GetAllProvidersGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\MSpTwoFactorAuthProviderInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function mSPTwoFactorAuthTfaV1GetAllProvidersGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\MSPTwoFactorAuthTfaV1GetAllProvidersGet(), $fetch);
    }
    /**
     * Returns a list of providers to configure/enroll
     *
     * @param int $userId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\MSPTwoFactorAuthTfaV1GetProvidersToActivateGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\MSpTwoFactorAuthProviderInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function mSPTwoFactorAuthTfaV1GetProvidersToActivateGet(int $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\MSPTwoFactorAuthTfaV1GetProvidersToActivateGet($userId), $fetch);
    }
    /**
     * Reset default provider code
     *
     * @param int $userId 
     * @param string $providerCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\MSPTwoFactorAuthTfaV1ResetProviderConfigPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function mSPTwoFactorAuthTfaV1ResetProviderConfigPost(int $userId, string $providerCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\MSPTwoFactorAuthTfaV1ResetProviderConfigPost($userId, $providerCode), $fetch);
    }
    /**
     * Revoke trusted device
     *
     * @param int $tokenId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\MSPTwoFactorAuthTrustedManagerV1RevokeTrustedDeviceDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\MSPTwoFactorAuthTrustedManagerV1RevokeTrustedDeviceDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function mSPTwoFactorAuthTrustedManagerV1RevokeTrustedDeviceDelete(int $tokenId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\MSPTwoFactorAuthTrustedManagerV1RevokeTrustedDeviceDelete($tokenId), $fetch);
    }
    /**
     * Return a list of trusted devices for given user id
     *
     * @param int $userId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\MSPTwoFactorAuthTfaV1GetTrustedDevicesGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\MSpTwoFactorAuthDataTrustedInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function mSPTwoFactorAuthTfaV1GetTrustedDevicesGet(int $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\MSPTwoFactorAuthTfaV1GetTrustedDevicesGet($userId), $fetch);
    }
    /**
     * Get a user provider
     *
     * @param int $userId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\MSPTwoFactorAuthTfaV1GetUserProvidersGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\MSpTwoFactorAuthProviderInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function mSPTwoFactorAuthTfaV1GetUserProvidersGet(int $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\MSPTwoFactorAuthTfaV1GetUserProvidersGet($userId), $fetch);
    }
    /**
     * Set providers
     *
     * @param int $userId 
     * @param \Kiboko\Magento\v2_3\Model\V1Msp2faUserProvidersUserIdPutBody $mSPTwoFactorAuthTfaV1SetProvidersCodesPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\MSPTwoFactorAuthTfaV1SetProvidersCodesPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function mSPTwoFactorAuthTfaV1SetProvidersCodesPut(int $userId, \Kiboko\Magento\v2_3\Model\V1Msp2faUserProvidersUserIdPutBody $mSPTwoFactorAuthTfaV1SetProvidersCodesPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\MSPTwoFactorAuthTfaV1SetProvidersCodesPut($userId, $mSPTwoFactorAuthTfaV1SetProvidersCodesPutBody), $fetch);
    }
    /**
     * Returns the billing address for a specified quote.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteBillingAddressManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteBillingAddressManagementV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataAddressInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteBillingAddressManagementV1GetGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\NegotiableQuoteBillingAddressManagementV1GetGet($cartId), $fetch);
    }
    /**
     * Assigns a specified billing address to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\v2_3\Model\V1NegotiableCartsCartIdBillingAddressPostBody $negotiableQuoteBillingAddressManagementV1AssignPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteBillingAddressManagementV1AssignPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteBillingAddressManagementV1AssignPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteBillingAddressManagementV1AssignPost(int $cartId, \Kiboko\Magento\v2_3\Model\V1NegotiableCartsCartIdBillingAddressPostBody $negotiableQuoteBillingAddressManagementV1AssignPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\NegotiableQuoteBillingAddressManagementV1AssignPost($cartId, $negotiableQuoteBillingAddressManagementV1AssignPostBody), $fetch);
    }
    /**
     * Deletes a coupon from a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteCouponManagementV1RemoveDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteCouponManagementV1RemoveDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteCouponManagementV1RemoveDelete(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\NegotiableQuoteCouponManagementV1RemoveDelete($cartId), $fetch);
    }
    /**
     * Adds a coupon by code to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $couponCode The coupon code data.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteCouponManagementV1SetPutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteCouponManagementV1SetPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteCouponManagementV1SetPut(int $cartId, string $couponCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\NegotiableQuoteCouponManagementV1SetPut($cartId, $couponCode), $fetch);
    }
    /**
     * Estimate shipping by address and return list of available shipping methods
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\v2_3\Model\V1NegotiableCartsCartIdEstimateShippingMethodsPostBody $negotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPost(string $cartId, \Kiboko\Magento\v2_3\Model\V1NegotiableCartsCartIdEstimateShippingMethodsPostBody $negotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\NegotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $negotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPostBody), $fetch);
    }
    /**
     * Estimate shipping
     *
     * @param int $cartId The shopping cart ID.
     * @param \Kiboko\Magento\v2_3\Model\V1NegotiableCartsCartIdEstimateShippingMethodsByAddressIdPostBody $negotiableQuoteShippingMethodManagementV1EstimateByAddressIdPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteShippingMethodManagementV1EstimateByAddressIdPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteShippingMethodManagementV1EstimateByAddressIdPost(int $cartId, \Kiboko\Magento\v2_3\Model\V1NegotiableCartsCartIdEstimateShippingMethodsByAddressIdPostBody $negotiableQuoteShippingMethodManagementV1EstimateByAddressIdPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\NegotiableQuoteShippingMethodManagementV1EstimateByAddressIdPost($cartId, $negotiableQuoteShippingMethodManagementV1EstimateByAddressIdPostBody), $fetch);
    }
    /**
     * 
     *
     * @param int $cartId 
     * @param \Kiboko\Magento\v2_3\Model\V1NegotiableCartsCartIdGiftCardsPostBody $negotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPost(int $cartId, \Kiboko\Magento\v2_3\Model\V1NegotiableCartsCartIdGiftCardsPostBody $negotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\NegotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPost($cartId, $negotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPostBody), $fetch);
    }
    /**
     * Remove GiftCard Account entity
     *
     * @param int $cartId 
     * @param string $giftCardCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteGiftCardAccountManagementV1DeleteByQuoteIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteGiftCardAccountManagementV1DeleteByQuoteIdDelete(int $cartId, string $giftCardCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\NegotiableQuoteGiftCardAccountManagementV1DeleteByQuoteIdDelete($cartId, $giftCardCode), $fetch);
    }
    /**
     * Get payment information
     *
     * @param int $cartId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuotePaymentInformationManagementV1GetPaymentInformationGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuotePaymentInformationManagementV1GetPaymentInformationGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\NegotiableQuotePaymentInformationManagementV1GetPaymentInformationGet($cartId), $fetch);
    }
    /**
     * Set payment information and place order for a specified cart.
     *
     * @param int $cartId 
     * @param \Kiboko\Magento\v2_3\Model\V1NegotiableCartsCartIdPaymentInformationPostBody $negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost(int $cartId, \Kiboko\Magento\v2_3\Model\V1NegotiableCartsCartIdPaymentInformationPostBody $negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($cartId, $negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody), $fetch);
    }
    /**
     * Set payment information for a specified cart.
     *
     * @param int $cartId 
     * @param \Kiboko\Magento\v2_3\Model\V1NegotiableCartsCartIdSetPaymentInformationPostBody $negotiableQuotePaymentInformationManagementV1SavePaymentInformationPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuotePaymentInformationManagementV1SavePaymentInformationPost(int $cartId, \Kiboko\Magento\v2_3\Model\V1NegotiableCartsCartIdSetPaymentInformationPostBody $negotiableQuotePaymentInformationManagementV1SavePaymentInformationPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\NegotiableQuotePaymentInformationManagementV1SavePaymentInformationPost($cartId, $negotiableQuotePaymentInformationManagementV1SavePaymentInformationPostBody), $fetch);
    }
    /**
     * 
     *
     * @param int $cartId 
     * @param \Kiboko\Magento\v2_3\Model\V1NegotiableCartsCartIdShippingInformationPostBody $negotiableQuoteShippingInformationManagementV1SaveAddressInformationPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteShippingInformationManagementV1SaveAddressInformationPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteShippingInformationManagementV1SaveAddressInformationPost(int $cartId, \Kiboko\Magento\v2_3\Model\V1NegotiableCartsCartIdShippingInformationPostBody $negotiableQuoteShippingInformationManagementV1SaveAddressInformationPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\NegotiableQuoteShippingInformationManagementV1SaveAddressInformationPost($cartId, $negotiableQuoteShippingInformationManagementV1SaveAddressInformationPostBody), $fetch);
    }
    /**
     * Returns quote totals data for a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteCartTotalRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteCartTotalRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataTotalsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteCartTotalRepositoryV1GetGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\NegotiableQuoteCartTotalRepositoryV1GetGet($cartId), $fetch);
    }
    /**
     * Returns content for one or more files attached on the quote comment.
     *
     * @param array $queryParameters {
     *     @var array $attachmentIds 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteAttachmentContentManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteAttachmentContentManagementV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\NegotiableQuoteDataAttachmentContentInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteAttachmentContentManagementV1GetGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\NegotiableQuoteAttachmentContentManagementV1GetGet($queryParameters), $fetch);
    }
    /**
     * Decline the B2B quote. All custom pricing will be removed from this quote. The buyer will be able to place an order using their standard catalog prices and discounts.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1NegotiableQuoteDeclinePostBody $negotiableQuoteNegotiableQuoteManagementV1DeclinePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteNegotiableQuoteManagementV1DeclinePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteNegotiableQuoteManagementV1DeclinePost(\Kiboko\Magento\v2_3\Model\V1NegotiableQuoteDeclinePostBody $negotiableQuoteNegotiableQuoteManagementV1DeclinePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\NegotiableQuoteNegotiableQuoteManagementV1DeclinePost($negotiableQuoteNegotiableQuoteManagementV1DeclinePostBody), $fetch);
    }
    /**
     * Refreshes item prices, taxes, discounts, cart rules in the negotiable quote as per the latest changes in the catalog / shared catalog and in the price rules. Depending on the negotiable quote state and totals, all or just some of quote numbers will be recalculated. 'Update Prices' parameter forces refresh on any quote that is not locked for admin user, including the quotes with a negotiated price. The request can be applied to one or more quotes at the same time.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1NegotiableQuotePricesUpdatedPostBody $negotiableQuoteNegotiableQuotePriceManagementV1PricesUpdatedPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteNegotiableQuotePriceManagementV1PricesUpdatedPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteNegotiableQuotePriceManagementV1PricesUpdatedPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteNegotiableQuotePriceManagementV1PricesUpdatedPost(\Kiboko\Magento\v2_3\Model\V1NegotiableQuotePricesUpdatedPostBody $negotiableQuoteNegotiableQuotePriceManagementV1PricesUpdatedPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\NegotiableQuoteNegotiableQuotePriceManagementV1PricesUpdatedPost($negotiableQuoteNegotiableQuotePriceManagementV1PricesUpdatedPostBody), $fetch);
    }
    /**
     * Create a B2B quote based on a regular Magento quote. If the B2B quote requires a shipping address (for negotiation or tax calculations), add it to the regular quote before you create a B2B quote.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1NegotiableQuoteRequestPostBody $negotiableQuoteNegotiableQuoteManagementV1CreatePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteNegotiableQuoteManagementV1CreatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteNegotiableQuoteManagementV1CreatePost(\Kiboko\Magento\v2_3\Model\V1NegotiableQuoteRequestPostBody $negotiableQuoteNegotiableQuoteManagementV1CreatePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\NegotiableQuoteNegotiableQuoteManagementV1CreatePost($negotiableQuoteNegotiableQuoteManagementV1CreatePostBody), $fetch);
    }
    /**
     * Submit the B2B quote to the customer. The quote status for the customer will be changed to 'Updated', and the customer can work with the quote.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1NegotiableQuoteSubmitToCustomerPostBody $negotiableQuoteNegotiableQuoteManagementV1AdminSendPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteNegotiableQuoteManagementV1AdminSendPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteNegotiableQuoteManagementV1AdminSendPost(\Kiboko\Magento\v2_3\Model\V1NegotiableQuoteSubmitToCustomerPostBody $negotiableQuoteNegotiableQuoteManagementV1AdminSendPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\NegotiableQuoteNegotiableQuoteManagementV1AdminSendPost($negotiableQuoteNegotiableQuoteManagementV1AdminSendPostBody), $fetch);
    }
    /**
     * Save quote
     *
     * @param string $quoteId 
     * @param \Kiboko\Magento\v2_3\Model\V1NegotiableQuoteQuoteIdPutBody $negotiableQuoteNegotiableCartRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteNegotiableCartRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteNegotiableCartRepositoryV1SavePut(string $quoteId, \Kiboko\Magento\v2_3\Model\V1NegotiableQuoteQuoteIdPutBody $negotiableQuoteNegotiableCartRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\NegotiableQuoteNegotiableCartRepositoryV1SavePut($quoteId, $negotiableQuoteNegotiableCartRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Returns comments for a specified negotiable quote.
     *
     * @param int $quoteId Negotiable Quote ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteCommentLocatorV1GetListForQuoteGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteCommentLocatorV1GetListForQuoteGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\NegotiableQuoteDataCommentInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteCommentLocatorV1GetListForQuoteGet(int $quoteId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\NegotiableQuoteCommentLocatorV1GetListForQuoteGet($quoteId), $fetch);
    }
    /**
     * Updates the shipping method on a negotiable quote.
     *
     * @param int $quoteId Negotiable Quote id
     * @param \Kiboko\Magento\v2_3\Model\V1NegotiableQuoteQuoteIdShippingMethodPutBody $negotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\NegotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function negotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPut(int $quoteId, \Kiboko\Magento\v2_3\Model\V1NegotiableQuoteQuoteIdShippingMethodPutBody $negotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\NegotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPut($quoteId, $negotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPutBody), $fetch);
    }
    /**
     * 
     *
     * @param int $orderId 
     * @param \Kiboko\Magento\v2_3\Model\V1OrderOrderIdInvoicePostBody $salesInvoiceOrderV1ExecutePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesInvoiceOrderV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceOrderV1ExecutePost(int $orderId, \Kiboko\Magento\v2_3\Model\V1OrderOrderIdInvoicePostBody $salesInvoiceOrderV1ExecutePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesInvoiceOrderV1ExecutePost($orderId, $salesInvoiceOrderV1ExecutePostBody), $fetch);
    }
    /**
     * Create offline refund for order
     *
     * @param int $orderId 
     * @param \Kiboko\Magento\v2_3\Model\V1OrderOrderIdRefundPostBody $salesRefundOrderV1ExecutePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRefundOrderV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRefundOrderV1ExecutePost(int $orderId, \Kiboko\Magento\v2_3\Model\V1OrderOrderIdRefundPostBody $salesRefundOrderV1ExecutePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesRefundOrderV1ExecutePost($orderId, $salesRefundOrderV1ExecutePostBody), $fetch);
    }
    /**
     * Creates new Shipment for given Order.
     *
     * @param int $orderId 
     * @param \Kiboko\Magento\v2_3\Model\V1OrderOrderIdShipPostBody $salesShipOrderV1ExecutePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesShipOrderV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipOrderV1ExecutePost(int $orderId, \Kiboko\Magento\v2_3\Model\V1OrderOrderIdShipPostBody $salesShipOrderV1ExecutePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesShipOrderV1ExecutePost($orderId, $salesShipOrderV1ExecutePostBody), $fetch);
    }
    /**
     * Lists orders that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See https://devdocs.magento.com/codelinks/attributes.html#OrderRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
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
     * @throws \Kiboko\Magento\v2_3\Exception\SalesOrderRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataOrderSearchResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesOrderRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Performs persist operations for a specified order.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1OrdersPostBody $salesOrderRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesOrderRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataOrderInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1OrdersPostBody $salesOrderRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesOrderRepositoryV1SavePost($salesOrderRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Performs persist operations for a specified order.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1OrdersCreatePutBody $salesOrderRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesOrderRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataOrderInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderRepositoryV1SavePut(\Kiboko\Magento\v2_3\Model\V1OrdersCreatePutBody $salesOrderRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesOrderRepositoryV1SavePut($salesOrderRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Lists order items that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See https://devdocs.magento.com/codelinks/attributes.html#OrderItemRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
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
     * @throws \Kiboko\Magento\v2_3\Exception\SalesOrderItemRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataOrderItemSearchResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderItemRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesOrderItemRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Loads a specified order item.
     *
     * @param int $id The order item ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesOrderItemRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataOrderItemInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderItemRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesOrderItemRepositoryV1GetGet($id), $fetch);
    }
    /**
     * Loads a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesOrderRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataOrderInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesOrderRepositoryV1GetGet($id), $fetch);
    }
    /**
     * Cancels a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesOrderManagementV1CancelPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1CancelPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesOrderManagementV1CancelPost($id), $fetch);
    }
    /**
     * Lists comments for a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesOrderManagementV1GetCommentsListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataOrderStatusHistorySearchResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1GetCommentsListGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesOrderManagementV1GetCommentsListGet($id), $fetch);
    }
    /**
     * Adds a comment to a specified order.
     *
     * @param int $id The order ID.
     * @param \Kiboko\Magento\v2_3\Model\V1OrdersIdCommentsPostBody $salesOrderManagementV1AddCommentPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesOrderManagementV1AddCommentPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1AddCommentPost(int $id, \Kiboko\Magento\v2_3\Model\V1OrdersIdCommentsPostBody $salesOrderManagementV1AddCommentPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesOrderManagementV1AddCommentPost($id, $salesOrderManagementV1AddCommentPostBody), $fetch);
    }
    /**
     * Emails a user a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesOrderManagementV1NotifyPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1NotifyPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesOrderManagementV1NotifyPost($id), $fetch);
    }
    /**
     * Holds a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesOrderManagementV1HoldPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1HoldPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesOrderManagementV1HoldPost($id), $fetch);
    }
    /**
     * Gets the status for a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesOrderManagementV1GetStatusGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1GetStatusGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesOrderManagementV1GetStatusGet($id), $fetch);
    }
    /**
     * Releases a specified order from hold status.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesOrderManagementV1UnHoldPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1UnHoldPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesOrderManagementV1UnHoldPost($id), $fetch);
    }
    /**
     * Performs persist operations for a specified order address.
     *
     * @param string $parentId 
     * @param \Kiboko\Magento\v2_3\Model\V1OrdersParentIdPutBody $salesOrderAddressRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesOrderAddressRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataOrderAddressInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderAddressRepositoryV1SavePut(string $parentId, \Kiboko\Magento\v2_3\Model\V1OrdersParentIdPutBody $salesOrderAddressRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesOrderAddressRepositoryV1SavePut($parentId, $salesOrderAddressRepositoryV1SavePutBody), $fetch);
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
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create product
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsPostBody $catalogProductRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1ProductsPostBody $catalogProductRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductRepositoryV1SavePost($catalogProductRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Collect and retrieve the list of product render info. This info contains raw prices and formatted prices, product name, stock status, store_id, etc.
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
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductRenderSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRenderListV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductRenderListV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create attribute set from data
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsAttributeSetsPostBody $catalogAttributeSetManagementV1CreatePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogAttributeSetManagementV1CreatePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogAttributeSetManagementV1CreatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\EavDataAttributeSetInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetManagementV1CreatePost(\Kiboko\Magento\v2_3\Model\V1ProductsAttributeSetsPostBody $catalogAttributeSetManagementV1CreatePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogAttributeSetManagementV1CreatePost($catalogAttributeSetManagementV1CreatePostBody), $fetch);
    }
    /**
     * Assign attribute to attribute set
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsAttributeSetsAttributesPostBody $catalogProductAttributeManagementV1AssignPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeManagementV1AssignPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeManagementV1AssignPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeManagementV1AssignPost(\Kiboko\Magento\v2_3\Model\V1ProductsAttributeSetsAttributesPostBody $catalogProductAttributeManagementV1AssignPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductAttributeManagementV1AssignPost($catalogProductAttributeManagementV1AssignPostBody), $fetch);
    }
    /**
     * Save attribute group
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsAttributeSetsGroupsPostBody $catalogProductAttributeGroupRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeGroupRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\EavDataAttributeGroupInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeGroupRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1ProductsAttributeSetsGroupsPostBody $catalogProductAttributeGroupRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductAttributeGroupRepositoryV1SavePost($catalogProductAttributeGroupRepositoryV1SavePostBody), $fetch);
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
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeGroupRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeGroupRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\EavDataAttributeGroupSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeGroupRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductAttributeGroupRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Remove attribute group by id
     *
     * @param int $groupId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeGroupRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeGroupRepositoryV1DeleteByIdDelete(int $groupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductAttributeGroupRepositoryV1DeleteByIdDelete($groupId), $fetch);
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
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogAttributeSetRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\EavDataAttributeSetSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogAttributeSetRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Remove attribute set by given ID
     *
     * @param int $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogAttributeSetRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogAttributeSetRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetRepositoryV1DeleteByIdDelete(int $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogAttributeSetRepositoryV1DeleteByIdDelete($attributeSetId), $fetch);
    }
    /**
     * Retrieve attribute set information based on given ID
     *
     * @param int $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogAttributeSetRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogAttributeSetRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\EavDataAttributeSetInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetRepositoryV1GetGet(int $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogAttributeSetRepositoryV1GetGet($attributeSetId), $fetch);
    }
    /**
     * Save attribute set data
     *
     * @param string $attributeSetId 
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsAttributeSetsAttributeSetIdPutBody $catalogAttributeSetRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogAttributeSetRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogAttributeSetRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogAttributeSetRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\EavDataAttributeSetInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetRepositoryV1SavePut(string $attributeSetId, \Kiboko\Magento\v2_3\Model\V1ProductsAttributeSetsAttributeSetIdPutBody $catalogAttributeSetRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogAttributeSetRepositoryV1SavePut($attributeSetId, $catalogAttributeSetRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Retrieve related attributes based on given attribute set ID
     *
     * @param string $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeManagementV1GetAttributesGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeManagementV1GetAttributesGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductAttributeInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeManagementV1GetAttributesGet(string $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductAttributeManagementV1GetAttributesGet($attributeSetId), $fetch);
    }
    /**
     * Remove attribute from attribute set
     *
     * @param string $attributeSetId 
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeManagementV1UnassignDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeManagementV1UnassignDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeManagementV1UnassignDelete(string $attributeSetId, string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductAttributeManagementV1UnassignDelete($attributeSetId, $attributeCode), $fetch);
    }
    /**
     * Save attribute group
     *
     * @param string $attributeSetId 
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsAttributeSetsAttributeSetIdGroupsPutBody $catalogProductAttributeGroupRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeGroupRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\EavDataAttributeGroupInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeGroupRepositoryV1SavePut(string $attributeSetId, \Kiboko\Magento\v2_3\Model\V1ProductsAttributeSetsAttributeSetIdGroupsPutBody $catalogProductAttributeGroupRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductAttributeGroupRepositoryV1SavePut($attributeSetId, $catalogProductAttributeGroupRepositoryV1SavePutBody), $fetch);
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
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductAttributeSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductAttributeRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save attribute data
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsAttributesPostBody $catalogProductAttributeRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductAttributeInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1ProductsAttributesPostBody $catalogProductAttributeRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductAttributeRepositoryV1SavePost($catalogProductAttributeRepositoryV1SavePostBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeTypesListV1GetItemsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductAttributeTypeInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeTypesListV1GetItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductAttributeTypesListV1GetItemsGet(), $fetch);
    }
    /**
     * Delete Attribute by id
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1DeleteByIdDelete(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductAttributeRepositoryV1DeleteByIdDelete($attributeCode), $fetch);
    }
    /**
     * Retrieve specific attribute
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductAttributeInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1GetGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductAttributeRepositoryV1GetGet($attributeCode), $fetch);
    }
    /**
     * Save attribute data
     *
     * @param string $attributeCode 
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsAttributesAttributeCodePutBody $catalogProductAttributeRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductAttributeInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1SavePut(string $attributeCode, \Kiboko\Magento\v2_3\Model\V1ProductsAttributesAttributeCodePutBody $catalogProductAttributeRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductAttributeRepositoryV1SavePut($attributeCode, $catalogProductAttributeRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Retrieve list of attribute options
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeOptionManagementV1GetItemsGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeOptionManagementV1GetItemsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\EavDataAttributeOptionInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeOptionManagementV1GetItemsGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductAttributeOptionManagementV1GetItemsGet($attributeCode), $fetch);
    }
    /**
     * Add option to attribute
     *
     * @param string $attributeCode 
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsAttributesAttributeCodeOptionsPostBody $catalogProductAttributeOptionManagementV1AddPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeOptionManagementV1AddPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeOptionManagementV1AddPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeOptionManagementV1AddPost(string $attributeCode, \Kiboko\Magento\v2_3\Model\V1ProductsAttributesAttributeCodeOptionsPostBody $catalogProductAttributeOptionManagementV1AddPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductAttributeOptionManagementV1AddPost($attributeCode, $catalogProductAttributeOptionManagementV1AddPostBody), $fetch);
    }
    /**
     * Delete option from attribute
     *
     * @param string $attributeCode 
     * @param string $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeOptionManagementV1DeleteDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeOptionManagementV1DeleteDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeOptionManagementV1DeleteDelete(string $attributeCode, string $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductAttributeOptionManagementV1DeleteDelete($attributeCode, $optionId), $fetch);
    }
    /**
     * Add or update product prices. Input item should correspond \Magento\Catalog\Api\Data\CostInterface. If any items will have invalid price, store id or sku, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsBasePricesPostBody $catalogBasePriceStorageV1UpdatePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogBasePriceStorageV1UpdatePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogBasePriceStorageV1UpdatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogBasePriceStorageV1UpdatePost(\Kiboko\Magento\v2_3\Model\V1ProductsBasePricesPostBody $catalogBasePriceStorageV1UpdatePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogBasePriceStorageV1UpdatePost($catalogBasePriceStorageV1UpdatePostBody), $fetch);
    }
    /**
     * Return product prices. In case of at least one of skus is not found exception will be thrown.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsBasePricesInformationPostBody $catalogBasePriceStorageV1GetPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogBasePriceStorageV1GetPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataBasePriceInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogBasePriceStorageV1GetPost(\Kiboko\Magento\v2_3\Model\V1ProductsBasePricesInformationPostBody $catalogBasePriceStorageV1GetPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogBasePriceStorageV1GetPost($catalogBasePriceStorageV1GetPostBody), $fetch);
    }
    /**
     * Add or update product cost. Input item should correspond to \Magento\Catalog\Api\Data\CostInterface. If any items will have invalid cost, store id or sku, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsCostPostBody $catalogCostStorageV1UpdatePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCostStorageV1UpdatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCostStorageV1UpdatePost(\Kiboko\Magento\v2_3\Model\V1ProductsCostPostBody $catalogCostStorageV1UpdatePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogCostStorageV1UpdatePost($catalogCostStorageV1UpdatePostBody), $fetch);
    }
    /**
     * Delete product cost. In case of at least one of skus is not found exception will be thrown. If error occurred during the delete exception will be thrown.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsCostDeletePostBody $catalogCostStorageV1DeletePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCostStorageV1DeletePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCostStorageV1DeletePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCostStorageV1DeletePost(\Kiboko\Magento\v2_3\Model\V1ProductsCostDeletePostBody $catalogCostStorageV1DeletePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogCostStorageV1DeletePost($catalogCostStorageV1DeletePostBody), $fetch);
    }
    /**
     * Return product prices. In case of at least one of skus is not found exception will be thrown.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsCostInformationPostBody $catalogCostStorageV1GetPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCostStorageV1GetPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogCostStorageV1GetPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataCostInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCostStorageV1GetPost(\Kiboko\Magento\v2_3\Model\V1ProductsCostInformationPostBody $catalogCostStorageV1GetPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogCostStorageV1GetPost($catalogCostStorageV1GetPostBody), $fetch);
    }
    /**
     * Delete downloadable sample
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\DownloadableSampleRepositoryV1DeleteDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableSampleRepositoryV1DeleteDelete(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\DownloadableSampleRepositoryV1DeleteDelete($id), $fetch);
    }
    /**
     * Delete downloadable link
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\DownloadableLinkRepositoryV1DeleteDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableLinkRepositoryV1DeleteDelete(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\DownloadableLinkRepositoryV1DeleteDelete($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductLinkTypeListV1GetItemsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductLinkTypeInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkTypeListV1GetItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductLinkTypeListV1GetItemsGet(), $fetch);
    }
    /**
     * Provide a list of the product link type attributes
     *
     * @param string $type 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductLinkTypeListV1GetItemAttributesGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductLinkAttributeInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkTypeListV1GetItemAttributesGet(string $type, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductLinkTypeListV1GetItemAttributesGet($type), $fetch);
    }
    /**
     * Retrieve the list of media attributes (fronted input type is media_image) assigned to the given attribute set.
     *
     * @param string $attributeSetName 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductMediaAttributeManagementV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductAttributeInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductMediaAttributeManagementV1GetListGet(string $attributeSetName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductMediaAttributeManagementV1GetListGet($attributeSetName), $fetch);
    }
    /**
     * Save Custom Option
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsOptionsPostBody $catalogProductCustomOptionRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductCustomOptionRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductCustomOptionInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1ProductsOptionsPostBody $catalogProductCustomOptionRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductCustomOptionRepositoryV1SavePost($catalogProductCustomOptionRepositoryV1SavePostBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductCustomOptionTypeListV1GetItemsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductCustomOptionTypeInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionTypeListV1GetItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductCustomOptionTypeListV1GetItemsGet(), $fetch);
    }
    /**
     * Save Custom Option
     *
     * @param string $optionId 
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsOptionsOptionIdPutBody $catalogProductCustomOptionRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductCustomOptionRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductCustomOptionInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1SavePut(string $optionId, \Kiboko\Magento\v2_3\Model\V1ProductsOptionsOptionIdPutBody $catalogProductCustomOptionRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductCustomOptionRepositoryV1SavePut($optionId, $catalogProductCustomOptionRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Add or update product's special price. If any items will have invalid price, store id, sku or dates, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsSpecialPricePostBody $catalogSpecialPriceStorageV1UpdatePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogSpecialPriceStorageV1UpdatePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogSpecialPriceStorageV1UpdatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogSpecialPriceStorageV1UpdatePost(\Kiboko\Magento\v2_3\Model\V1ProductsSpecialPricePostBody $catalogSpecialPriceStorageV1UpdatePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogSpecialPriceStorageV1UpdatePost($catalogSpecialPriceStorageV1UpdatePostBody), $fetch);
    }
    /**
     * Delete product's special price. If any items will have invalid price, store id, sku or dates, they will be marked as failed and excluded from delete list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the delete exception will be thrown.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsSpecialPriceDeletePostBody $catalogSpecialPriceStorageV1DeletePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogSpecialPriceStorageV1DeletePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogSpecialPriceStorageV1DeletePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogSpecialPriceStorageV1DeletePost(\Kiboko\Magento\v2_3\Model\V1ProductsSpecialPriceDeletePostBody $catalogSpecialPriceStorageV1DeletePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogSpecialPriceStorageV1DeletePost($catalogSpecialPriceStorageV1DeletePostBody), $fetch);
    }
    /**
     * Return product's special price. In case of at least one of skus is not found exception will be thrown.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsSpecialPriceInformationPostBody $catalogSpecialPriceStorageV1GetPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogSpecialPriceStorageV1GetPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogSpecialPriceStorageV1GetPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataSpecialPriceInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogSpecialPriceStorageV1GetPost(\Kiboko\Magento\v2_3\Model\V1ProductsSpecialPriceInformationPostBody $catalogSpecialPriceStorageV1GetPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogSpecialPriceStorageV1GetPost($catalogSpecialPriceStorageV1GetPostBody), $fetch);
    }
    /**
     * Add or update product prices. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsTierPricesPostBody $catalogTierPriceStorageV1UpdatePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogTierPriceStorageV1UpdatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogTierPriceStorageV1UpdatePost(\Kiboko\Magento\v2_3\Model\V1ProductsTierPricesPostBody $catalogTierPriceStorageV1UpdatePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogTierPriceStorageV1UpdatePost($catalogTierPriceStorageV1UpdatePostBody), $fetch);
    }
    /**
     * Remove existing tier prices and replace them with the new ones. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from replace list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsTierPricesPutBody $catalogTierPriceStorageV1ReplacePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogTierPriceStorageV1ReplacePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogTierPriceStorageV1ReplacePut(\Kiboko\Magento\v2_3\Model\V1ProductsTierPricesPutBody $catalogTierPriceStorageV1ReplacePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogTierPriceStorageV1ReplacePut($catalogTierPriceStorageV1ReplacePutBody), $fetch);
    }
    /**
     * Delete product tier prices. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from delete list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsTierPricesDeletePostBody $catalogTierPriceStorageV1DeletePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogTierPriceStorageV1DeletePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogTierPriceStorageV1DeletePost(\Kiboko\Magento\v2_3\Model\V1ProductsTierPricesDeletePostBody $catalogTierPriceStorageV1DeletePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogTierPriceStorageV1DeletePost($catalogTierPriceStorageV1DeletePostBody), $fetch);
    }
    /**
     * Return product prices. In case of at least one of skus is not found exception will be thrown.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsTierPricesInformationPostBody $catalogTierPriceStorageV1GetPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogTierPriceStorageV1GetPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogTierPriceStorageV1GetPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataTierPriceInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogTierPriceStorageV1GetPost(\Kiboko\Magento\v2_3\Model\V1ProductsTierPricesInformationPostBody $catalogTierPriceStorageV1GetPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogTierPriceStorageV1GetPost($catalogTierPriceStorageV1GetPostBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductTypeListV1GetProductTypesGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductTypeInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductTypeListV1GetProductTypesGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductTypeListV1GetProductTypesGet(), $fetch);
    }
    /**
     * 
     *
     * @param string $productSku 
     * @param string $itemId 
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsProductSkuStockItemsItemIdPutBody $catalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogInventoryStockRegistryV1UpdateStockItemBySkuPut(string $productSku, string $itemId, \Kiboko\Magento\v2_3\Model\V1ProductsProductSkuStockItemsItemIdPutBody $catalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPut($productSku, $itemId, $catalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1DeleteByIdDelete(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductRepositoryV1DeleteByIdDelete($sku), $fetch);
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
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1GetGet(string $sku, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductRepositoryV1GetGet($sku, $queryParameters), $fetch);
    }
    /**
     * Create product
     *
     * @param string $sku 
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsSkuPutBody $catalogProductRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1SavePut(string $sku, \Kiboko\Magento\v2_3\Model\V1ProductsSkuPutBody $catalogProductRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductRepositoryV1SavePut($sku, $catalogProductRepositoryV1SavePutBody), $fetch);
    }
    /**
     * List of links with associated samples
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\DownloadableLinkRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\DownloadableDataLinkInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableLinkRepositoryV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\DownloadableLinkRepositoryV1GetListGet($sku), $fetch);
    }
    /**
     * Update downloadable link of the given product (link type and its resources cannot be changed)
     *
     * @param string $sku 
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsSkuDownloadableLinksPostBody $downloadableLinkRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\DownloadableLinkRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableLinkRepositoryV1SavePost(string $sku, \Kiboko\Magento\v2_3\Model\V1ProductsSkuDownloadableLinksPostBody $downloadableLinkRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\DownloadableLinkRepositoryV1SavePost($sku, $downloadableLinkRepositoryV1SavePostBody), $fetch);
    }
    /**
     * List of samples for downloadable product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\DownloadableSampleRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\DownloadableDataSampleInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableSampleRepositoryV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\DownloadableSampleRepositoryV1GetListGet($sku), $fetch);
    }
    /**
     * Update downloadable sample of the given product
     *
     * @param string $sku 
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsSkuDownloadableLinksSamplesPostBody $downloadableSampleRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\DownloadableSampleRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableSampleRepositoryV1SavePost(string $sku, \Kiboko\Magento\v2_3\Model\V1ProductsSkuDownloadableLinksSamplesPostBody $downloadableSampleRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\DownloadableSampleRepositoryV1SavePost($sku, $downloadableSampleRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Update downloadable sample of the given product
     *
     * @param string $sku 
     * @param string $id 
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsSkuDownloadableLinksSamplesIdPutBody $downloadableSampleRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\DownloadableSampleRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableSampleRepositoryV1SavePut(string $sku, string $id, \Kiboko\Magento\v2_3\Model\V1ProductsSkuDownloadableLinksSamplesIdPutBody $downloadableSampleRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\DownloadableSampleRepositoryV1SavePut($sku, $id, $downloadableSampleRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Update downloadable link of the given product (link type and its resources cannot be changed)
     *
     * @param string $sku 
     * @param string $id 
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsSkuDownloadableLinksIdPutBody $downloadableLinkRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\DownloadableLinkRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableLinkRepositoryV1SavePut(string $sku, string $id, \Kiboko\Magento\v2_3\Model\V1ProductsSkuDownloadableLinksIdPutBody $downloadableLinkRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\DownloadableLinkRepositoryV1SavePut($sku, $id, $downloadableLinkRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Get tier price of product
     *
     * @param string $sku 
     * @param string $customerGroupId 'all' can be used to specify 'ALL GROUPS'
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductTierPriceManagementV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductTierPriceManagementV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductTierPriceInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductTierPriceManagementV1GetListGet(string $sku, string $customerGroupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductTierPriceManagementV1GetListGet($sku, $customerGroupId), $fetch);
    }
    /**
     * Remove tier price from product
     *
     * @param string $sku 
     * @param string $customerGroupId 'all' can be used to specify 'ALL GROUPS'
     * @param float $qty 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductTierPriceManagementV1RemoveDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductTierPriceManagementV1RemoveDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductTierPriceManagementV1RemoveDelete(string $sku, string $customerGroupId, float $qty, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductTierPriceManagementV1RemoveDelete($sku, $customerGroupId, $qty), $fetch);
    }
    /**
     * Create tier price for product
     *
     * @param string $sku 
     * @param string $customerGroupId 'all' can be used to specify 'ALL GROUPS'
     * @param float $price 
     * @param float $qty 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductTierPriceManagementV1AddPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductTierPriceManagementV1AddPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductTierPriceManagementV1AddPost(string $sku, string $customerGroupId, float $price, float $qty, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductTierPriceManagementV1AddPost($sku, $customerGroupId, $price, $qty), $fetch);
    }
    /**
     * Assign a product link to another product
     *
     * @param string $sku 
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsSkuLinksPostBody $catalogProductLinkManagementV1SetProductLinksPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductLinkManagementV1SetProductLinksPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductLinkManagementV1SetProductLinksPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkManagementV1SetProductLinksPost(string $sku, \Kiboko\Magento\v2_3\Model\V1ProductsSkuLinksPostBody $catalogProductLinkManagementV1SetProductLinksPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductLinkManagementV1SetProductLinksPost($sku, $catalogProductLinkManagementV1SetProductLinksPostBody), $fetch);
    }
    /**
     * Save product link
     *
     * @param string $sku 
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsSkuLinksPutBody $catalogProductLinkRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductLinkRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductLinkRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkRepositoryV1SavePut(string $sku, \Kiboko\Magento\v2_3\Model\V1ProductsSkuLinksPutBody $catalogProductLinkRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductLinkRepositoryV1SavePut($sku, $catalogProductLinkRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Provide the list of links for a specific product
     *
     * @param string $sku 
     * @param string $type 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductLinkManagementV1GetLinkedItemsByTypeGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductLinkInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkManagementV1GetLinkedItemsByTypeGet(string $sku, string $type, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductLinkManagementV1GetLinkedItemsByTypeGet($sku, $type), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param string $type 
     * @param string $linkedProductSku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductLinkRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductLinkRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkRepositoryV1DeleteByIdDelete(string $sku, string $type, string $linkedProductSku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductLinkRepositoryV1DeleteByIdDelete($sku, $type, $linkedProductSku), $fetch);
    }
    /**
     * Retrieve the list of gallery entries associated with given product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeMediaGalleryManagementV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductAttributeMediaGalleryEntryInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductAttributeMediaGalleryManagementV1GetListGet($sku), $fetch);
    }
    /**
     * Create new gallery entry
     *
     * @param string $sku 
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsSkuMediaPostBody $catalogProductAttributeMediaGalleryManagementV1CreatePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeMediaGalleryManagementV1CreatePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeMediaGalleryManagementV1CreatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1CreatePost(string $sku, \Kiboko\Magento\v2_3\Model\V1ProductsSkuMediaPostBody $catalogProductAttributeMediaGalleryManagementV1CreatePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductAttributeMediaGalleryManagementV1CreatePost($sku, $catalogProductAttributeMediaGalleryManagementV1CreatePostBody), $fetch);
    }
    /**
     * Remove gallery entry
     *
     * @param string $sku 
     * @param int $entryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeMediaGalleryManagementV1RemoveDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeMediaGalleryManagementV1RemoveDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1RemoveDelete(string $sku, int $entryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductAttributeMediaGalleryManagementV1RemoveDelete($sku, $entryId), $fetch);
    }
    /**
     * Return information about gallery entry
     *
     * @param string $sku 
     * @param int $entryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeMediaGalleryManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeMediaGalleryManagementV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductAttributeMediaGalleryEntryInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1GetGet(string $sku, int $entryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductAttributeMediaGalleryManagementV1GetGet($sku, $entryId), $fetch);
    }
    /**
     * Update gallery entry
     *
     * @param string $sku 
     * @param string $entryId 
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsSkuMediaEntryIdPutBody $catalogProductAttributeMediaGalleryManagementV1UpdatePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeMediaGalleryManagementV1UpdatePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductAttributeMediaGalleryManagementV1UpdatePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1UpdatePut(string $sku, string $entryId, \Kiboko\Magento\v2_3\Model\V1ProductsSkuMediaEntryIdPutBody $catalogProductAttributeMediaGalleryManagementV1UpdatePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductAttributeMediaGalleryManagementV1UpdatePut($sku, $entryId, $catalogProductAttributeMediaGalleryManagementV1UpdatePutBody), $fetch);
    }
    /**
     * Get the list of custom options for a specific product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductCustomOptionRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductCustomOptionInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductCustomOptionRepositoryV1GetListGet($sku), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductCustomOptionRepositoryV1DeleteByIdentifierDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete(string $sku, int $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete($sku, $optionId), $fetch);
    }
    /**
     * Get custom option for a specific product
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductCustomOptionRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogDataProductCustomOptionInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1GetGet(string $sku, int $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductCustomOptionRepositoryV1GetGet($sku, $optionId), $fetch);
    }
    /**
     * Assign a product to the website
     *
     * @param string $sku 
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsSkuWebsitesPostBody $catalogProductWebsiteLinkRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductWebsiteLinkRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductWebsiteLinkRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductWebsiteLinkRepositoryV1SavePost(string $sku, \Kiboko\Magento\v2_3\Model\V1ProductsSkuWebsitesPostBody $catalogProductWebsiteLinkRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductWebsiteLinkRepositoryV1SavePost($sku, $catalogProductWebsiteLinkRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Assign a product to the website
     *
     * @param string $sku 
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsSkuWebsitesPutBody $catalogProductWebsiteLinkRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductWebsiteLinkRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductWebsiteLinkRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductWebsiteLinkRepositoryV1SavePut(string $sku, \Kiboko\Magento\v2_3\Model\V1ProductsSkuWebsitesPutBody $catalogProductWebsiteLinkRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductWebsiteLinkRepositoryV1SavePut($sku, $catalogProductWebsiteLinkRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Remove the website assignment from the product by product sku
     *
     * @param string $sku 
     * @param int $websiteId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductWebsiteLinkRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductWebsiteLinkRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete(string $sku, int $websiteId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogProductWebsiteLinkRepositoryV1DeleteByIdDelete($sku, $websiteId), $fetch);
    }
    /**
     * Save Requisition List
     *
     * @param \Kiboko\Magento\v2_3\Model\V1RequisitionListsPostBody $requisitionListRequisitionListRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\RequisitionListRequisitionListRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\RequisitionListRequisitionListRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\RequisitionListDataRequisitionListInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function requisitionListRequisitionListRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1RequisitionListsPostBody $requisitionListRequisitionListRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\RequisitionListRequisitionListRepositoryV1SavePost($requisitionListRequisitionListRepositoryV1SavePostBody), $fetch);
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
     * @throws \Kiboko\Magento\v2_3\Exception\RmaRmaManagementV1SearchGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\RmaDataRmaSearchResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaManagementV1SearchGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\RmaRmaManagementV1SearchGet($queryParameters), $fetch);
    }
    /**
     * Save RMA
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ReturnsPostBody $rmaRmaManagementV1SaveRmaPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\RmaRmaManagementV1SaveRmaPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\RmaDataRmaInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaManagementV1SaveRmaPost(\Kiboko\Magento\v2_3\Model\V1ReturnsPostBody $rmaRmaManagementV1SaveRmaPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\RmaRmaManagementV1SaveRmaPost($rmaRmaManagementV1SaveRmaPostBody), $fetch);
    }
    /**
     * Delete RMA
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_3\Model\V1ReturnsIdDeleteBody $rmaRmaRepositoryV1DeleteDeleteBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\RmaRmaRepositoryV1DeleteDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\RmaRmaRepositoryV1DeleteDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaRepositoryV1DeleteDelete(string $id, \Kiboko\Magento\v2_3\Model\V1ReturnsIdDeleteBody $rmaRmaRepositoryV1DeleteDeleteBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\RmaRmaRepositoryV1DeleteDelete($id, $rmaRmaRepositoryV1DeleteDeleteBody), $fetch);
    }
    /**
     * Return data object for specified RMA id
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\RmaRmaRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\RmaDataRmaInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\RmaRmaRepositoryV1GetGet($id), $fetch);
    }
    /**
     * Save RMA
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_3\Model\V1ReturnsIdPutBody $rmaRmaManagementV1SaveRmaPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\RmaRmaManagementV1SaveRmaPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\RmaDataRmaInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaManagementV1SaveRmaPut(string $id, \Kiboko\Magento\v2_3\Model\V1ReturnsIdPutBody $rmaRmaManagementV1SaveRmaPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\RmaRmaManagementV1SaveRmaPut($id, $rmaRmaManagementV1SaveRmaPutBody), $fetch);
    }
    /**
     * Comments list
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\RmaCommentManagementV1CommentsListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\RmaDataCommentSearchResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaCommentManagementV1CommentsListGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\RmaCommentManagementV1CommentsListGet($id), $fetch);
    }
    /**
     * Add comment
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_3\Model\V1ReturnsIdCommentsPostBody $rmaCommentManagementV1AddCommentPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\RmaCommentManagementV1AddCommentPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\RmaCommentManagementV1AddCommentPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaCommentManagementV1AddCommentPost(string $id, \Kiboko\Magento\v2_3\Model\V1ReturnsIdCommentsPostBody $rmaCommentManagementV1AddCommentPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\RmaCommentManagementV1AddCommentPost($id, $rmaCommentManagementV1AddCommentPostBody), $fetch);
    }
    /**
     * Get shipping label int the PDF format
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\RmaTrackManagementV1GetShippingLabelPdfGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaTrackManagementV1GetShippingLabelPdfGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\RmaTrackManagementV1GetShippingLabelPdfGet($id), $fetch);
    }
    /**
     * Get track list
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\RmaTrackManagementV1GetTracksGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\RmaDataTrackSearchResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaTrackManagementV1GetTracksGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\RmaTrackManagementV1GetTracksGet($id), $fetch);
    }
    /**
     * Add track
     *
     * @param int $id 
     * @param \Kiboko\Magento\v2_3\Model\V1ReturnsIdTrackingNumbersPostBody $rmaTrackManagementV1AddTrackPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\RmaTrackManagementV1AddTrackPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaTrackManagementV1AddTrackPost(int $id, \Kiboko\Magento\v2_3\Model\V1ReturnsIdTrackingNumbersPostBody $rmaTrackManagementV1AddTrackPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\RmaTrackManagementV1AddTrackPost($id, $rmaTrackManagementV1AddTrackPostBody), $fetch);
    }
    /**
     * Remove track by id
     *
     * @param int $id 
     * @param int $trackId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\RmaTrackManagementV1RemoveTrackByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaTrackManagementV1RemoveTrackByIdDelete(int $id, int $trackId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\RmaTrackManagementV1RemoveTrackByIdDelete($id, $trackId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\RmaRmaAttributesManagementV1GetAllAttributesMetadataGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaAttributesManagementV1GetAllAttributesMetadataGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\RmaRmaAttributesManagementV1GetAllAttributesMetadataGet(), $fetch);
    }
    /**
     * Get custom attribute metadata for the given Data object's attribute set
     *
     * @param array $queryParameters {
     *     @var string $dataObjectClassName Data object class name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\RmaRmaAttributesManagementV1GetCustomAttributesMetadataGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\FrameworkMetadataObjectInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaAttributesManagementV1GetCustomAttributesMetadataGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\RmaRmaAttributesManagementV1GetCustomAttributesMetadataGet($queryParameters), $fetch);
    }
    /**
     * Retrieve all attributes filtered by form code
     *
     * @param string $formCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\RmaRmaAttributesManagementV1GetAttributesGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaAttributesManagementV1GetAttributesGet(string $formCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\RmaRmaAttributesManagementV1GetAttributesGet($formCode), $fetch);
    }
    /**
     * Retrieve attribute metadata.
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\RmaRmaAttributesManagementV1GetAttributeMetadataGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CustomerDataAttributeMetadataInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaAttributesManagementV1GetAttributeMetadataGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\RmaRmaAttributesManagementV1GetAttributeMetadataGet($attributeCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\RewardRewardManagementV1SetPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rewardRewardManagementV1SetPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\RewardRewardManagementV1SetPost(), $fetch);
    }
    /**
     * Save sales rule.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1SalesRulesPostBody $salesRuleRuleRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleRuleRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleRuleRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleRuleRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesRuleDataRuleInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1SalesRulesPostBody $salesRuleRuleRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesRuleRuleRepositoryV1SavePost($salesRuleRuleRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Retrieve sales rules that match te specified criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See https://devdocs.magento.com/codelinks/attributes.html#RuleRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
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
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleRuleRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleRuleRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesRuleDataRuleSearchResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesRuleRuleRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Delete rule by ID.
     *
     * @param int $ruleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleRuleRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleRuleRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleRuleRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1DeleteByIdDelete(int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesRuleRuleRepositoryV1DeleteByIdDelete($ruleId), $fetch);
    }
    /**
     * Get rule by ID.
     *
     * @param int $ruleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleRuleRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleRuleRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleRuleRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesRuleDataRuleInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1GetByIdGet(int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesRuleRuleRepositoryV1GetByIdGet($ruleId), $fetch);
    }
    /**
     * Save sales rule.
     *
     * @param string $ruleId 
     * @param \Kiboko\Magento\v2_3\Model\V1SalesRulesRuleIdPutBody $salesRuleRuleRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleRuleRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleRuleRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesRuleRuleRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesRuleDataRuleInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1SavePut(string $ruleId, \Kiboko\Magento\v2_3\Model\V1SalesRulesRuleIdPutBody $salesRuleRuleRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesRuleRuleRepositoryV1SavePut($ruleId, $salesRuleRuleRepositoryV1SavePutBody), $fetch);
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
     * @return null|\Kiboko\Magento\v2_3\Model\FrameworkSearchSearchResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function searchV1SearchGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SearchV1SearchGet($queryParameters), $fetch);
    }
    /**
     * Create or update Shared Catalog service.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1SharedCatalogPostBody $sharedCatalogSharedCatalogRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogSharedCatalogRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogSharedCatalogRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogSharedCatalogRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogSharedCatalogRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1SharedCatalogPostBody $sharedCatalogSharedCatalogRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SharedCatalogSharedCatalogRepositoryV1SavePost($sharedCatalogSharedCatalogRepositoryV1SavePostBody), $fetch);
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
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogSharedCatalogRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogSharedCatalogRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SharedCatalogDataSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogSharedCatalogRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SharedCatalogSharedCatalogRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create or update Shared Catalog service.
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_3\Model\V1SharedCatalogIdPutBody $sharedCatalogSharedCatalogRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogSharedCatalogRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogSharedCatalogRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogSharedCatalogRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogSharedCatalogRepositoryV1SavePut(string $id, \Kiboko\Magento\v2_3\Model\V1SharedCatalogIdPutBody $sharedCatalogSharedCatalogRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SharedCatalogSharedCatalogRepositoryV1SavePut($id, $sharedCatalogSharedCatalogRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Add categories into the shared catalog.
     *
     * @param int $id 
     * @param \Kiboko\Magento\v2_3\Model\V1SharedCatalogIdAssignCategoriesPostBody $sharedCatalogCategoryManagementV1AssignCategoriesPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogCategoryManagementV1AssignCategoriesPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogCategoryManagementV1AssignCategoriesPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogCategoryManagementV1AssignCategoriesPost(int $id, \Kiboko\Magento\v2_3\Model\V1SharedCatalogIdAssignCategoriesPostBody $sharedCatalogCategoryManagementV1AssignCategoriesPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SharedCatalogCategoryManagementV1AssignCategoriesPost($id, $sharedCatalogCategoryManagementV1AssignCategoriesPostBody), $fetch);
    }
    /**
     * Add products into the shared catalog.
     *
     * @param int $id 
     * @param \Kiboko\Magento\v2_3\Model\V1SharedCatalogIdAssignProductsPostBody $sharedCatalogProductManagementV1AssignProductsPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogProductManagementV1AssignProductsPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogProductManagementV1AssignProductsPost(int $id, \Kiboko\Magento\v2_3\Model\V1SharedCatalogIdAssignProductsPostBody $sharedCatalogProductManagementV1AssignProductsPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SharedCatalogProductManagementV1AssignProductsPost($id, $sharedCatalogProductManagementV1AssignProductsPostBody), $fetch);
    }
    /**
     * Return the list of categories in the selected shared catalog.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogCategoryManagementV1GetCategoriesGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogCategoryManagementV1GetCategoriesGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SharedCatalogCategoryManagementV1GetCategoriesGet($id), $fetch);
    }
    /**
     * Return the list of product SKUs in the selected shared catalog.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogProductManagementV1GetProductsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogProductManagementV1GetProductsGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SharedCatalogProductManagementV1GetProductsGet($id), $fetch);
    }
    /**
     * Remove the specified categories from the shared catalog.
     *
     * @param int $id 
     * @param \Kiboko\Magento\v2_3\Model\V1SharedCatalogIdUnassignCategoriesPostBody $sharedCatalogCategoryManagementV1UnassignCategoriesPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogCategoryManagementV1UnassignCategoriesPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogCategoryManagementV1UnassignCategoriesPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogCategoryManagementV1UnassignCategoriesPost(int $id, \Kiboko\Magento\v2_3\Model\V1SharedCatalogIdUnassignCategoriesPostBody $sharedCatalogCategoryManagementV1UnassignCategoriesPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SharedCatalogCategoryManagementV1UnassignCategoriesPost($id, $sharedCatalogCategoryManagementV1UnassignCategoriesPostBody), $fetch);
    }
    /**
     * Remove the specified products from the shared catalog.
     *
     * @param int $id 
     * @param \Kiboko\Magento\v2_3\Model\V1SharedCatalogIdUnassignProductsPostBody $sharedCatalogProductManagementV1UnassignProductsPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogProductManagementV1UnassignProductsPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogProductManagementV1UnassignProductsPost(int $id, \Kiboko\Magento\v2_3\Model\V1SharedCatalogIdUnassignProductsPostBody $sharedCatalogProductManagementV1UnassignProductsPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SharedCatalogProductManagementV1UnassignProductsPost($id, $sharedCatalogProductManagementV1UnassignProductsPostBody), $fetch);
    }
    /**
     * Delete a shared catalog by ID.
     *
     * @param int $sharedCatalogId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogSharedCatalogRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogSharedCatalogRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogSharedCatalogRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogSharedCatalogRepositoryV1DeleteByIdDelete(int $sharedCatalogId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SharedCatalogSharedCatalogRepositoryV1DeleteByIdDelete($sharedCatalogId), $fetch);
    }
    /**
     * Return the following properties for the selected shared catalog: ID, Store Group ID, Name, Type, Description, Customer Group, Tax Class.
     *
     * @param int $sharedCatalogId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogSharedCatalogRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogSharedCatalogRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SharedCatalogDataSharedCatalogInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogSharedCatalogRepositoryV1GetGet(int $sharedCatalogId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SharedCatalogSharedCatalogRepositoryV1GetGet($sharedCatalogId), $fetch);
    }
    /**
     * Assign companies to a shared catalog.
     *
     * @param int $sharedCatalogId 
     * @param \Kiboko\Magento\v2_3\Model\V1SharedCatalogSharedCatalogIdAssignCompaniesPostBody $sharedCatalogCompanyManagementV1AssignCompaniesPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogCompanyManagementV1AssignCompaniesPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogCompanyManagementV1AssignCompaniesPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogCompanyManagementV1AssignCompaniesPost(int $sharedCatalogId, \Kiboko\Magento\v2_3\Model\V1SharedCatalogSharedCatalogIdAssignCompaniesPostBody $sharedCatalogCompanyManagementV1AssignCompaniesPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SharedCatalogCompanyManagementV1AssignCompaniesPost($sharedCatalogId, $sharedCatalogCompanyManagementV1AssignCompaniesPostBody), $fetch);
    }
    /**
     * Return the list of company IDs for the companies assigned to the selected catalog.
     *
     * @param int $sharedCatalogId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogCompanyManagementV1GetCompaniesGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogCompanyManagementV1GetCompaniesGet(int $sharedCatalogId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SharedCatalogCompanyManagementV1GetCompaniesGet($sharedCatalogId), $fetch);
    }
    /**
     * Unassign companies from a shared catalog.
     *
     * @param int $sharedCatalogId 
     * @param \Kiboko\Magento\v2_3\Model\V1SharedCatalogSharedCatalogIdUnassignCompaniesPostBody $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogCompanyManagementV1UnassignCompaniesPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogCompanyManagementV1UnassignCompaniesPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function sharedCatalogCompanyManagementV1UnassignCompaniesPost(int $sharedCatalogId, \Kiboko\Magento\v2_3\Model\V1SharedCatalogSharedCatalogIdUnassignCompaniesPostBody $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SharedCatalogCompanyManagementV1UnassignCompaniesPost($sharedCatalogId, $sharedCatalogCompanyManagementV1UnassignCompaniesPostBody), $fetch);
    }
    /**
     * Performs persist operations for a specified shipment.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ShipmentPostBody $salesShipmentRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesShipmentRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataShipmentInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1ShipmentPostBody $salesShipmentRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesShipmentRepositoryV1SavePost($salesShipmentRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Performs persist operations for a specified shipment track.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1ShipmentTrackPostBody $salesShipmentTrackRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesShipmentTrackRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesShipmentTrackRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataShipmentTrackInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentTrackRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1ShipmentTrackPostBody $salesShipmentTrackRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesShipmentTrackRepositoryV1SavePost($salesShipmentTrackRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Deletes a specified shipment track by ID.
     *
     * @param int $id The shipment track ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesShipmentTrackRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesShipmentTrackRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentTrackRepositoryV1DeleteByIdDelete(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesShipmentTrackRepositoryV1DeleteByIdDelete($id), $fetch);
    }
    /**
     * Loads a specified shipment.
     *
     * @param int $id The shipment ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesShipmentRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataShipmentInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesShipmentRepositoryV1GetGet($id), $fetch);
    }
    /**
     * Lists comments for a specified shipment.
     *
     * @param int $id The shipment ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesShipmentManagementV1GetCommentsListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataShipmentCommentSearchResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentManagementV1GetCommentsListGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesShipmentManagementV1GetCommentsListGet($id), $fetch);
    }
    /**
     * Performs persist operations for a specified shipment comment.
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_3\Model\V1ShipmentIdCommentsPostBody $salesShipmentCommentRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesShipmentCommentRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SalesShipmentCommentRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataShipmentCommentInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentCommentRepositoryV1SavePost(string $id, \Kiboko\Magento\v2_3\Model\V1ShipmentIdCommentsPostBody $salesShipmentCommentRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesShipmentCommentRepositoryV1SavePost($id, $salesShipmentCommentRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Emails user a specified shipment.
     *
     * @param int $id The shipment ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesShipmentManagementV1NotifyPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentManagementV1NotifyPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesShipmentManagementV1NotifyPost($id), $fetch);
    }
    /**
     * Gets a specified shipment label.
     *
     * @param int $id The shipment label ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesShipmentManagementV1GetLabelGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentManagementV1GetLabelGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesShipmentManagementV1GetLabelGet($id), $fetch);
    }
    /**
     * Lists shipments that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See https://devdocs.magento.com/codelinks/attributes.html#ShipmentRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
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
     * @throws \Kiboko\Magento\v2_3\Exception\SalesShipmentRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataShipmentSearchResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesShipmentRepositoryV1GetListGet($queryParameters), $fetch);
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
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogInventoryStockRegistryV1GetLowStockItemsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogInventoryDataStockItemCollectionInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogInventoryStockRegistryV1GetLowStockItemsGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogInventoryStockRegistryV1GetLowStockItemsGet($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $productSku 
     * @param array $queryParameters {
     *     @var int $scopeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogInventoryStockRegistryV1GetStockItemBySkuGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogInventoryStockRegistryV1GetStockItemBySkuGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogInventoryDataStockItemInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogInventoryStockRegistryV1GetStockItemBySkuGet(string $productSku, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogInventoryStockRegistryV1GetStockItemBySkuGet($productSku, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $productSku 
     * @param array $queryParameters {
     *     @var int $scopeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogInventoryStockRegistryV1GetStockStatusBySkuGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogInventoryStockRegistryV1GetStockStatusBySkuGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CatalogInventoryDataStockStatusInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogInventoryStockRegistryV1GetStockStatusBySkuGet(string $productSku, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CatalogInventoryStockRegistryV1GetStockStatusBySkuGet($productSku, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $storeCodes 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\StoreStoreConfigManagerV1GetStoreConfigsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\StoreDataStoreConfigInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function storeStoreConfigManagerV1GetStoreConfigsGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\StoreStoreConfigManagerV1GetStoreConfigsGet($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\StoreGroupRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\StoreDataGroupInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function storeGroupRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\StoreGroupRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\StoreStoreRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\StoreDataStoreInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function storeStoreRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\StoreStoreRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\StoreWebsiteRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\StoreDataWebsiteInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function storeWebsiteRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\StoreWebsiteRepositoryV1GetListGet(), $fetch);
    }
    /**
     * Create a Tax Class
     *
     * @param \Kiboko\Magento\v2_3\Model\V1TaxClassesPostBody $taxTaxClassRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxClassRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxClassRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxClassRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1TaxClassesPostBody $taxTaxClassRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\TaxTaxClassRepositoryV1SavePost($taxTaxClassRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Retrieve tax classes which match a specific criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See https://devdocs.magento.com/codelinks/attributes.html#TaxClassRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
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
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxClassRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxClassRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\TaxDataTaxClassSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\TaxTaxClassRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create a Tax Class
     *
     * @param string $classId 
     * @param \Kiboko\Magento\v2_3\Model\V1TaxClassesClassIdPutBody $taxTaxClassRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxClassRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxClassRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxClassRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1SavePut(string $classId, \Kiboko\Magento\v2_3\Model\V1TaxClassesClassIdPutBody $taxTaxClassRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\TaxTaxClassRepositoryV1SavePut($classId, $taxTaxClassRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Delete a tax class with the given tax class id.
     *
     * @param int $taxClassId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxClassRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxClassRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1DeleteByIdDelete(int $taxClassId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\TaxTaxClassRepositoryV1DeleteByIdDelete($taxClassId), $fetch);
    }
    /**
     * Get a tax class with the given tax class id.
     *
     * @param int $taxClassId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxClassRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxClassRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\TaxDataTaxClassInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1GetGet(int $taxClassId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\TaxTaxClassRepositoryV1GetGet($taxClassId), $fetch);
    }
    /**
     * Create or update tax rate
     *
     * @param \Kiboko\Magento\v2_3\Model\V1TaxRatesPostBody $taxTaxRateRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRateRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRateRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRateRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\TaxDataTaxRateInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1TaxRatesPostBody $taxTaxRateRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\TaxTaxRateRepositoryV1SavePost($taxTaxRateRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Create or update tax rate
     *
     * @param \Kiboko\Magento\v2_3\Model\V1TaxRatesPutBody $taxTaxRateRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRateRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRateRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRateRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\TaxDataTaxRateInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1SavePut(\Kiboko\Magento\v2_3\Model\V1TaxRatesPutBody $taxTaxRateRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\TaxTaxRateRepositoryV1SavePut($taxTaxRateRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Search TaxRates This call returns an array of objects, but detailed information about each object’s attributes might not be included. See https://devdocs.magento.com/codelinks/attributes.html#TaxRateRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
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
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRateRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRateRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\TaxDataTaxRateSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\TaxTaxRateRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Delete tax rate
     *
     * @param int $rateId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRateRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRateRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRateRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1DeleteByIdDelete(int $rateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\TaxTaxRateRepositoryV1DeleteByIdDelete($rateId), $fetch);
    }
    /**
     * Get tax rate
     *
     * @param int $rateId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRateRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRateRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\TaxDataTaxRateInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1GetGet(int $rateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\TaxTaxRateRepositoryV1GetGet($rateId), $fetch);
    }
    /**
     * Save TaxRule
     *
     * @param \Kiboko\Magento\v2_3\Model\V1TaxRulesPostBody $taxTaxRuleRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRuleRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRuleRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRuleRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\TaxDataTaxRuleInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1SavePost(\Kiboko\Magento\v2_3\Model\V1TaxRulesPostBody $taxTaxRuleRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\TaxTaxRuleRepositoryV1SavePost($taxTaxRuleRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Save TaxRule
     *
     * @param \Kiboko\Magento\v2_3\Model\V1TaxRulesPutBody $taxTaxRuleRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRuleRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRuleRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRuleRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\TaxDataTaxRuleInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1SavePut(\Kiboko\Magento\v2_3\Model\V1TaxRulesPutBody $taxTaxRuleRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\TaxTaxRuleRepositoryV1SavePut($taxTaxRuleRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Search TaxRules This call returns an array of objects, but detailed information about each object’s attributes might not be included. See https://devdocs.magento.com/codelinks/attributes.html#TaxRuleRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
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
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRuleRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRuleRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\TaxDataTaxRuleSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\TaxTaxRuleRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Delete TaxRule
     *
     * @param int $ruleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRuleRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRuleRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRuleRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1DeleteByIdDelete(int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\TaxTaxRuleRepositoryV1DeleteByIdDelete($ruleId), $fetch);
    }
    /**
     * Get TaxRule
     *
     * @param int $ruleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\TaxTaxRuleRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\TaxDataTaxRuleInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1GetGet(int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\TaxTaxRuleRepositoryV1GetGet($ruleId), $fetch);
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
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyTeamRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyTeamRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CompanyDataTeamSearchResultsInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyTeamRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyTeamRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create a team in the company structure.
     *
     * @param int $companyId 
     * @param \Kiboko\Magento\v2_3\Model\V1TeamCompanyIdPostBody $companyTeamRepositoryV1CreatePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyTeamRepositoryV1CreatePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyTeamRepositoryV1CreatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyTeamRepositoryV1CreatePost(int $companyId, \Kiboko\Magento\v2_3\Model\V1TeamCompanyIdPostBody $companyTeamRepositoryV1CreatePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyTeamRepositoryV1CreatePost($companyId, $companyTeamRepositoryV1CreatePostBody), $fetch);
    }
    /**
     * Delete a team from the company structure.
     *
     * @param int $teamId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyTeamRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyTeamRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyTeamRepositoryV1DeleteByIdDelete(int $teamId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyTeamRepositoryV1DeleteByIdDelete($teamId), $fetch);
    }
    /**
     * Returns data for a team in the company, by entity id.
     *
     * @param int $teamId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyTeamRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyTeamRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\CompanyDataTeamInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyTeamRepositoryV1GetGet(int $teamId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyTeamRepositoryV1GetGet($teamId), $fetch);
    }
    /**
     * Update a team in the company structure.
     *
     * @param string $teamId 
     * @param \Kiboko\Magento\v2_3\Model\V1TeamTeamIdPutBody $companyTeamRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyTeamRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyTeamRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function companyTeamRepositoryV1SavePut(string $teamId, \Kiboko\Magento\v2_3\Model\V1TeamTeamIdPutBody $companyTeamRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\CompanyTeamRepositoryV1SavePut($teamId, $companyTeamRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Lists transactions that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See https://devdocs.magento.com/codelinks/attributes.html#TransactionRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
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
     * @throws \Kiboko\Magento\v2_3\Exception\SalesTransactionRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataTransactionSearchResultInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesTransactionRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesTransactionRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Loads a specified transaction.
     *
     * @param int $id The transaction ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\SalesTransactionRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\SalesDataTransactionInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesTransactionRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\SalesTransactionRepositoryV1GetGet($id), $fetch);
    }
    /**
     * 
     *
     * @param \Kiboko\Magento\v2_3\Model\V1VertexAddressValidationVertexAddressPostBody $vertexAddressValidationAddressManagementV1GetValidAddressPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataAddressInterface|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function vertexAddressValidationAddressManagementV1GetValidAddressPost(\Kiboko\Magento\v2_3\Model\V1VertexAddressValidationVertexAddressPostBody $vertexAddressValidationAddressManagementV1GetValidAddressPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\VertexAddressValidationAddressManagementV1GetValidAddressPost($vertexAddressValidationAddressManagementV1GetValidAddressPostBody), $fetch);
    }
    /**
     * Proxy handler for guest place order
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\v2_3\Model\V1WorldpayGuestCartsCartIdPaymentInformationPostBody $worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_3\Exception\WorldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost(string $cartId, \Kiboko\Magento\v2_3\Model\V1WorldpayGuestCartsCartIdPaymentInformationPostBody $worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_3\Endpoint\WorldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost($cartId, $worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPostBody), $fetch);
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
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Kiboko\Magento\v2_3\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}