<?php

namespace Kiboko\Magento\v2_1;

class Client extends \Kiboko\Magento\v2_1\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\StoreStoreRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\StoreDataStoreInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function storeStoreRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\StoreStoreRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\StoreGroupRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\StoreDataGroupInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function storeGroupRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\StoreGroupRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\StoreWebsiteRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\StoreDataWebsiteInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function storeWebsiteRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\StoreWebsiteRepositoryV1GetListGet(), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $storeCodes 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\StoreStoreConfigManagerV1GetStoreConfigsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\StoreDataStoreConfigInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function storeStoreConfigManagerV1GetStoreConfigsGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\StoreStoreConfigManagerV1GetStoreConfigsGet($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_1\Model\DirectoryDataCurrencyInformationInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function directoryCurrencyInformationAcquirerV1GetCurrencyInfoGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\DirectoryCurrencyInformationAcquirerV1GetCurrencyInfoGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_1\Model\DirectoryDataCountryInformationInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function directoryCountryInformationAcquirerV1GetCountriesInfoGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\DirectoryCountryInformationAcquirerV1GetCountriesInfoGet(), $fetch);
    }
    /**
     * Get country and region information for the store.
     *
     * @param string $countryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\DirectoryCountryInformationAcquirerV1GetCountryInfoGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\DirectoryDataCountryInformationInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function directoryCountryInformationAcquirerV1GetCountryInfoGet(string $countryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\DirectoryCountryInformationAcquirerV1GetCountryInfoGet($countryId), $fetch);
    }
    /**
     * Retrieve list of Attribute Sets This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#AttributeSetRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\EavAttributeSetRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\EavDataAttributeSetSearchResultsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\EavAttributeSetRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Remove attribute set by given ID
     *
     * @param int $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\EavAttributeSetRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\EavAttributeSetRepositoryV1DeleteByIdDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetRepositoryV1DeleteByIdDelete(int $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\EavAttributeSetRepositoryV1DeleteByIdDelete($attributeSetId), $fetch);
    }
    /**
     * Retrieve attribute set information based on given ID
     *
     * @param int $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\EavAttributeSetRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\EavAttributeSetRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\EavDataAttributeSetInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetRepositoryV1GetGet(int $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\EavAttributeSetRepositoryV1GetGet($attributeSetId), $fetch);
    }
    /**
     * Save attribute set data
     *
     * @param string $attributeSetId 
     * @param \Kiboko\Magento\v2_1\Model\V1EavAttributeSetsAttributeSetIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\EavAttributeSetRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\EavAttributeSetRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\EavAttributeSetRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\EavDataAttributeSetInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetRepositoryV1SavePut(string $attributeSetId, \Kiboko\Magento\v2_1\Model\V1EavAttributeSetsAttributeSetIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\EavAttributeSetRepositoryV1SavePut($attributeSetId, $$body), $fetch);
    }
    /**
     * Create attribute set from data
     *
     * @param \Kiboko\Magento\v2_1\Model\V1EavAttributeSetsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\EavAttributeSetManagementV1CreatePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\EavAttributeSetManagementV1CreatePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\EavDataAttributeSetInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetManagementV1CreatePost(\Kiboko\Magento\v2_1\Model\V1EavAttributeSetsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\EavAttributeSetManagementV1CreatePost($$body), $fetch);
    }
    /**
     * Delete customer group by ID.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1DeleteByIdDelete(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerGroupRepositoryV1DeleteByIdDelete($id), $fetch);
    }
    /**
     * Get customer group by group ID.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataGroupInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1GetByIdGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerGroupRepositoryV1GetByIdGet($id), $fetch);
    }
    /**
     * Save customer group.
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_1\Model\V1CustomerGroupsIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataGroupInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1SavePut(string $id, \Kiboko\Magento\v2_1\Model\V1CustomerGroupsIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerGroupRepositoryV1SavePut($id, $$body), $fetch);
    }
    /**
     * Retrieve customer groups. The list of groups can be filtered to exclude the NOT_LOGGED_IN group using the first parameter and/or it can be filtered by tax class. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#GroupRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataGroupSearchResultsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerGroupRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save customer group.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CustomerGroupsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataGroupInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1SavePost(\Kiboko\Magento\v2_1\Model\V1CustomerGroupsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerGroupRepositoryV1SavePost($$body), $fetch);
    }
    /**
     * Get default customer group.
     *
     * @param int $storeId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupManagementV1GetDefaultGroupGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupManagementV1GetDefaultGroupGetBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupManagementV1GetDefaultGroupGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataGroupInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupManagementV1GetDefaultGroupGet(int $storeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerGroupManagementV1GetDefaultGroupGet($storeId), $fetch);
    }
    /**
     * Get default customer group.
     *
     * @param array $queryParameters {
     *     @var int $storeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupManagementV1GetDefaultGroupGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupManagementV1GetDefaultGroupGetBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupManagementV1GetDefaultGroupGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataGroupInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupManagementV1GetDefaultGroupGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerGroupManagementV1GetDefaultGroupGet($queryParameters), $fetch);
    }
    /**
     * Check if customer group can be deleted.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupManagementV1IsReadonlyGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupManagementV1IsReadonlyGetBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerGroupManagementV1IsReadonlyGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupManagementV1IsReadonlyGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerGroupManagementV1IsReadonlyGet($id), $fetch);
    }
    /**
     * Retrieve attribute metadata.
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerMetadataV1GetAttributeMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerMetadataV1GetAttributeMetadataGetBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerMetadataV1GetAttributeMetadataGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataAttributeMetadataInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerMetadataV1GetAttributeMetadataGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerCustomerMetadataV1GetAttributeMetadataGet($attributeCode), $fetch);
    }
    /**
     * Retrieve all attributes filtered by form code
     *
     * @param string $formCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerMetadataV1GetAttributesGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerMetadataV1GetAttributesGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerMetadataV1GetAttributesGet(string $formCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerCustomerMetadataV1GetAttributesGet($formCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerMetadataV1GetAllAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerMetadataV1GetAllAttributesMetadataGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerMetadataV1GetAllAttributesMetadataGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerCustomerMetadataV1GetAllAttributesMetadataGet(), $fetch);
    }
    /**
     * Get custom attributes metadata for the given data interface.
     *
     * @param array $queryParameters {
     *     @var string $dataInterfaceName 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerMetadataV1GetCustomAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerMetadataV1GetCustomAttributesMetadataGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerMetadataV1GetCustomAttributesMetadataGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerCustomerMetadataV1GetCustomAttributesMetadataGet($queryParameters), $fetch);
    }
    /**
     * Retrieve attribute metadata.
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAddressMetadataV1GetAttributeMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAddressMetadataV1GetAttributeMetadataGetBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAddressMetadataV1GetAttributeMetadataGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataAttributeMetadataInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressMetadataV1GetAttributeMetadataGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerAddressMetadataV1GetAttributeMetadataGet($attributeCode), $fetch);
    }
    /**
     * Retrieve all attributes filtered by form code
     *
     * @param string $formCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAddressMetadataV1GetAttributesGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAddressMetadataV1GetAttributesGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressMetadataV1GetAttributesGet(string $formCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerAddressMetadataV1GetAttributesGet($formCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAddressMetadataV1GetAllAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAddressMetadataV1GetAllAttributesMetadataGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressMetadataV1GetAllAttributesMetadataGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerAddressMetadataV1GetAllAttributesMetadataGet(), $fetch);
    }
    /**
     * Get custom attributes metadata for the given data interface.
     *
     * @param array $queryParameters {
     *     @var string $dataInterfaceName 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAddressMetadataV1GetCustomAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAddressMetadataV1GetCustomAttributesMetadataGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressMetadataV1GetCustomAttributesMetadataGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerAddressMetadataV1GetCustomAttributesMetadataGet($queryParameters), $fetch);
    }
    /**
     * Delete customer by ID.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1DeleteByIdDelete(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerCustomerRepositoryV1DeleteByIdDelete($customerId), $fetch);
    }
    /**
     * Get customer by customer ID.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataCustomerInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1GetByIdGet(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerCustomerRepositoryV1GetByIdGet($customerId), $fetch);
    }
    /**
     * Create or update a customer.
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_1\Model\V1CustomersIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataCustomerInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1SavePut(string $id, \Kiboko\Magento\v2_1\Model\V1CustomersIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerCustomerRepositoryV1SavePut($id, $$body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataCustomerInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1GetByIdGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerCustomerRepositoryV1GetByIdGet(), $fetch);
    }
    /**
     * Create or update a customer.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CustomersMePutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataCustomerInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1SavePut(\Kiboko\Magento\v2_1\Model\V1CustomersMePutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerCustomerRepositoryV1SavePut($$body), $fetch);
    }
    /**
     * Retrieve customers which match a specified criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#CustomerRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerCustomerRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataCustomerSearchResultsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerCustomerRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create customer account. Perform necessary business operations like sending email.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CustomersPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1CreateAccountPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataCustomerInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1CreateAccountPost(\Kiboko\Magento\v2_1\Model\V1CustomersPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerAccountManagementV1CreateAccountPost($$body), $fetch);
    }
    /**
     * Activate a customer account using a key that was sent in a confirmation email.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CustomersMeActivatePutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1ActivateByIdPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1ActivateByIdPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataCustomerInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ActivateByIdPut(\Kiboko\Magento\v2_1\Model\V1CustomersMeActivatePutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerAccountManagementV1ActivateByIdPut($$body), $fetch);
    }
    /**
     * Activate a customer account using a key that was sent in a confirmation email.
     *
     * @param string $email 
     * @param \Kiboko\Magento\v2_1\Model\V1CustomersEmailActivatePutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1ActivatePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1ActivatePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataCustomerInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ActivatePut(string $email, \Kiboko\Magento\v2_1\Model\V1CustomersEmailActivatePutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerAccountManagementV1ActivatePut($email, $$body), $fetch);
    }
    /**
     * Change customer password.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CustomersMePasswordPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1ChangePasswordByIdPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1ChangePasswordByIdPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ChangePasswordByIdPut(\Kiboko\Magento\v2_1\Model\V1CustomersMePasswordPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerAccountManagementV1ChangePasswordByIdPut($$body), $fetch);
    }
    /**
     * Check if password reset token is valid.
     *
     * @param int $customerId 
     * @param string $resetPasswordLinkToken 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1ValidateResetPasswordLinkTokenGetBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1ValidateResetPasswordLinkTokenGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ValidateResetPasswordLinkTokenGet(int $customerId, string $resetPasswordLinkToken, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerAccountManagementV1ValidateResetPasswordLinkTokenGet($customerId, $resetPasswordLinkToken), $fetch);
    }
    /**
     * Send an email to the customer with a password reset link.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CustomersPasswordPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1InitiatePasswordResetPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1InitiatePasswordResetPut(\Kiboko\Magento\v2_1\Model\V1CustomersPasswordPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerAccountManagementV1InitiatePasswordResetPut($$body), $fetch);
    }
    /**
     * Gets the account confirmation status.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1GetConfirmationStatusGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1GetConfirmationStatusGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1GetConfirmationStatusGet(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerAccountManagementV1GetConfirmationStatusGet($customerId), $fetch);
    }
    /**
     * Resend confirmation email.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CustomersConfirmPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1ResendConfirmationPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1ResendConfirmationPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ResendConfirmationPost(\Kiboko\Magento\v2_1\Model\V1CustomersConfirmPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerAccountManagementV1ResendConfirmationPost($$body), $fetch);
    }
    /**
     * Validate customer data.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CustomersValidatePutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1ValidatePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1ValidatePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataValidationResultsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ValidatePut(\Kiboko\Magento\v2_1\Model\V1CustomersValidatePutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerAccountManagementV1ValidatePut($$body), $fetch);
    }
    /**
     * Check if customer can be deleted.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1IsReadonlyGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1IsReadonlyGetBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1IsReadonlyGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1IsReadonlyGet(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerAccountManagementV1IsReadonlyGet($customerId), $fetch);
    }
    /**
     * Check if given email is associated with a customer account in given website.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CustomersIsEmailAvailablePostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1IsEmailAvailablePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1IsEmailAvailablePost(\Kiboko\Magento\v2_1\Model\V1CustomersIsEmailAvailablePostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerAccountManagementV1IsEmailAvailablePost($$body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataAddressInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1GetDefaultBillingAddressGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerAccountManagementV1GetDefaultBillingAddressGet(), $fetch);
    }
    /**
     * Retrieve default billing address for the given customerId.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataAddressInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1GetDefaultBillingAddressGet(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerAccountManagementV1GetDefaultBillingAddressGet($customerId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataAddressInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1GetDefaultShippingAddressGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerAccountManagementV1GetDefaultShippingAddressGet(), $fetch);
    }
    /**
     * Retrieve default shipping address for the given customerId.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataAddressInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1GetDefaultShippingAddressGet(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerAccountManagementV1GetDefaultShippingAddressGet($customerId), $fetch);
    }
    /**
     * Retrieve customer address.
     *
     * @param int $addressId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAddressRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAddressRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataAddressInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressRepositoryV1GetByIdGet(int $addressId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerAddressRepositoryV1GetByIdGet($addressId), $fetch);
    }
    /**
     * Delete customer address by ID.
     *
     * @param int $addressId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAddressRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAddressRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerAddressRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressRepositoryV1DeleteByIdDelete(int $addressId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerAddressRepositoryV1DeleteByIdDelete($addressId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\BackendModuleServiceV1GetModulesGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function backendModuleServiceV1GetModulesGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\BackendModuleServiceV1GetModulesGet(), $fetch);
    }
    /**
     * Delete page by ID.
     *
     * @param int $pageId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CmsPageRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CmsPageRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CmsPageRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1DeleteByIdDelete(int $pageId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CmsPageRepositoryV1DeleteByIdDelete($pageId), $fetch);
    }
    /**
     * Retrieve page.
     *
     * @param int $pageId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CmsPageRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CmsPageRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CmsDataPageInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1GetByIdGet(int $pageId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CmsPageRepositoryV1GetByIdGet($pageId), $fetch);
    }
    /**
     * Retrieve pages matching the specified criteria.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CmsPageRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CmsPageRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CmsDataPageSearchResultsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CmsPageRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save page.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CmsPagePostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CmsPageRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CmsPageRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CmsDataPageInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1SavePost(\Kiboko\Magento\v2_1\Model\V1CmsPagePostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CmsPageRepositoryV1SavePost($$body), $fetch);
    }
    /**
     * Save page.
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_1\Model\V1CmsPageIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CmsPageRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CmsPageRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CmsDataPageInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1SavePut(string $id, \Kiboko\Magento\v2_1\Model\V1CmsPageIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CmsPageRepositoryV1SavePut($id, $$body), $fetch);
    }
    /**
     * Delete block by ID.
     *
     * @param int $blockId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CmsBlockRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CmsBlockRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CmsBlockRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1DeleteByIdDelete(int $blockId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CmsBlockRepositoryV1DeleteByIdDelete($blockId), $fetch);
    }
    /**
     * Retrieve block.
     *
     * @param int $blockId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CmsBlockRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CmsBlockRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CmsDataBlockInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1GetByIdGet(int $blockId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CmsBlockRepositoryV1GetByIdGet($blockId), $fetch);
    }
    /**
     * Retrieve blocks matching the specified criteria.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CmsBlockRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CmsBlockRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CmsDataBlockSearchResultsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CmsBlockRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save block.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CmsBlockPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CmsBlockRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CmsBlockRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CmsDataBlockInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1SavePost(\Kiboko\Magento\v2_1\Model\V1CmsBlockPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CmsBlockRepositoryV1SavePost($$body), $fetch);
    }
    /**
     * Save block.
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_1\Model\V1CmsBlockIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CmsBlockRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CmsBlockRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CmsDataBlockInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1SavePut(string $id, \Kiboko\Magento\v2_1\Model\V1CmsBlockIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CmsBlockRepositoryV1SavePut($id, $$body), $fetch);
    }
    /**
     * Get product list
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductSearchResultsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create product
     *
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1SavePost(\Kiboko\Magento\v2_1\Model\V1ProductsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductRepositoryV1SavePost($$body), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductRepositoryV1DeleteByIdDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1DeleteByIdDelete(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductRepositoryV1DeleteByIdDelete($sku), $fetch);
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
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1GetGet(string $sku, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductRepositoryV1GetGet($sku, $queryParameters), $fetch);
    }
    /**
     * Create product
     *
     * @param string $sku 
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsSkuPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductRepositoryV1SavePutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1SavePut(string $sku, \Kiboko\Magento\v2_1\Model\V1ProductsSkuPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductRepositoryV1SavePut($sku, $$body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeTypesListV1GetItemsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductAttributeTypeInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeTypesListV1GetItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductAttributeTypesListV1GetItemsGet(), $fetch);
    }
    /**
     * Delete Attribute by id
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeRepositoryV1DeleteByIdDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1DeleteByIdDelete(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductAttributeRepositoryV1DeleteByIdDelete($attributeCode), $fetch);
    }
    /**
     * Retrieve specific attribute
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductAttributeInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1GetGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductAttributeRepositoryV1GetGet($attributeCode), $fetch);
    }
    /**
     * Save attribute data
     *
     * @param string $attributeCode 
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsAttributesAttributeCodePutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeRepositoryV1SavePutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductAttributeInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1SavePut(string $attributeCode, \Kiboko\Magento\v2_1\Model\V1ProductsAttributesAttributeCodePutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductAttributeRepositoryV1SavePut($attributeCode, $$body), $fetch);
    }
    /**
     * Retrieve all attributes for entity type
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductAttributeSearchResultsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductAttributeRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save attribute data
     *
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsAttributesPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductAttributeInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1SavePost(\Kiboko\Magento\v2_1\Model\V1ProductsAttributesPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductAttributeRepositoryV1SavePost($$body), $fetch);
    }
    /**
     * Retrieve specific attribute
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryAttributeRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataCategoryAttributeInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryAttributeRepositoryV1GetGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogCategoryAttributeRepositoryV1GetGet($attributeCode), $fetch);
    }
    /**
     * Retrieve all attributes for entity type
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryAttributeRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataCategoryAttributeSearchResultsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryAttributeRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogCategoryAttributeRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Retrieve list of attribute options
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryAttributeOptionManagementV1GetItemsGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryAttributeOptionManagementV1GetItemsGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\EavDataAttributeOptionInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryAttributeOptionManagementV1GetItemsGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogCategoryAttributeOptionManagementV1GetItemsGet($attributeCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductTypeListV1GetProductTypesGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductTypeInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductTypeListV1GetProductTypesGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductTypeListV1GetProductTypesGet(), $fetch);
    }
    /**
     * Retrieve list of Attribute Sets
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogAttributeSetRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\EavDataAttributeSetSearchResultsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogAttributeSetRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Remove attribute set by given ID
     *
     * @param int $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogAttributeSetRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogAttributeSetRepositoryV1DeleteByIdDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetRepositoryV1DeleteByIdDelete(int $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogAttributeSetRepositoryV1DeleteByIdDelete($attributeSetId), $fetch);
    }
    /**
     * Retrieve attribute set information based on given ID
     *
     * @param int $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogAttributeSetRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogAttributeSetRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\EavDataAttributeSetInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetRepositoryV1GetGet(int $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogAttributeSetRepositoryV1GetGet($attributeSetId), $fetch);
    }
    /**
     * Save attribute set data
     *
     * @param string $attributeSetId 
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsAttributeSetsAttributeSetIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogAttributeSetRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogAttributeSetRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogAttributeSetRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\EavDataAttributeSetInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetRepositoryV1SavePut(string $attributeSetId, \Kiboko\Magento\v2_1\Model\V1ProductsAttributeSetsAttributeSetIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogAttributeSetRepositoryV1SavePut($attributeSetId, $$body), $fetch);
    }
    /**
     * Create attribute set from data
     *
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsAttributeSetsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogAttributeSetManagementV1CreatePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogAttributeSetManagementV1CreatePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\EavDataAttributeSetInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetManagementV1CreatePost(\Kiboko\Magento\v2_1\Model\V1ProductsAttributeSetsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogAttributeSetManagementV1CreatePost($$body), $fetch);
    }
    /**
     * Retrieve related attributes based on given attribute set ID
     *
     * @param string $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeManagementV1GetAttributesGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeManagementV1GetAttributesGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductAttributeInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeManagementV1GetAttributesGet(string $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductAttributeManagementV1GetAttributesGet($attributeSetId), $fetch);
    }
    /**
     * Assign attribute to attribute set
     *
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsAttributeSetsAttributesPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeManagementV1AssignPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeManagementV1AssignPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeManagementV1AssignPost(\Kiboko\Magento\v2_1\Model\V1ProductsAttributeSetsAttributesPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductAttributeManagementV1AssignPost($$body), $fetch);
    }
    /**
     * Remove attribute from attribute set
     *
     * @param string $attributeSetId 
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeManagementV1UnassignDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeManagementV1UnassignDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeManagementV1UnassignDelete(string $attributeSetId, string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductAttributeManagementV1UnassignDelete($attributeSetId, $attributeCode), $fetch);
    }
    /**
     * Retrieve list of attribute groups
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeGroupRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeGroupRepositoryV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\EavDataAttributeGroupSearchResultsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeGroupRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductAttributeGroupRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save attribute group
     *
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsAttributeSetsGroupsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeGroupRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\EavDataAttributeGroupInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeGroupRepositoryV1SavePost(\Kiboko\Magento\v2_1\Model\V1ProductsAttributeSetsGroupsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductAttributeGroupRepositoryV1SavePost($$body), $fetch);
    }
    /**
     * Save attribute group
     *
     * @param string $attributeSetId 
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsAttributeSetsAttributeSetIdGroupsPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeGroupRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\EavDataAttributeGroupInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeGroupRepositoryV1SavePut(string $attributeSetId, \Kiboko\Magento\v2_1\Model\V1ProductsAttributeSetsAttributeSetIdGroupsPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductAttributeGroupRepositoryV1SavePut($attributeSetId, $$body), $fetch);
    }
    /**
     * Remove attribute group by id
     *
     * @param int $groupId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeGroupRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeGroupRepositoryV1DeleteByIdDelete(int $groupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductAttributeGroupRepositoryV1DeleteByIdDelete($groupId), $fetch);
    }
    /**
     * Retrieve list of attribute options
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeOptionManagementV1GetItemsGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeOptionManagementV1GetItemsGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\EavDataAttributeOptionInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeOptionManagementV1GetItemsGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductAttributeOptionManagementV1GetItemsGet($attributeCode), $fetch);
    }
    /**
     * Add option to attribute
     *
     * @param string $attributeCode 
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsAttributesAttributeCodeOptionsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeOptionManagementV1AddPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeOptionManagementV1AddPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeOptionManagementV1AddPost(string $attributeCode, \Kiboko\Magento\v2_1\Model\V1ProductsAttributesAttributeCodeOptionsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductAttributeOptionManagementV1AddPost($attributeCode, $$body), $fetch);
    }
    /**
     * Delete option from attribute
     *
     * @param string $attributeCode 
     * @param string $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeOptionManagementV1DeleteDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeOptionManagementV1DeleteDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeOptionManagementV1DeleteDelete(string $attributeCode, string $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductAttributeOptionManagementV1DeleteDelete($attributeCode, $optionId), $fetch);
    }
    /**
     * Retrieve the list of media attributes (fronted input type is media_image) assigned to the given attribute set.
     *
     * @param string $attributeSetName 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductMediaAttributeManagementV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductAttributeInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductMediaAttributeManagementV1GetListGet(string $attributeSetName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductMediaAttributeManagementV1GetListGet($attributeSetName), $fetch);
    }
    /**
     * Remove gallery entry
     *
     * @param string $sku 
     * @param int $entryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeMediaGalleryManagementV1RemoveDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeMediaGalleryManagementV1RemoveDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1RemoveDelete(string $sku, int $entryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductAttributeMediaGalleryManagementV1RemoveDelete($sku, $entryId), $fetch);
    }
    /**
     * Return information about gallery entry
     *
     * @param string $sku 
     * @param int $entryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeMediaGalleryManagementV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeMediaGalleryManagementV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductAttributeMediaGalleryEntryInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1GetGet(string $sku, int $entryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductAttributeMediaGalleryManagementV1GetGet($sku, $entryId), $fetch);
    }
    /**
     * Update gallery entry
     *
     * @param string $sku 
     * @param string $entryId 
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsSkuMediaEntryIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeMediaGalleryManagementV1UpdatePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeMediaGalleryManagementV1UpdatePutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1UpdatePut(string $sku, string $entryId, \Kiboko\Magento\v2_1\Model\V1ProductsSkuMediaEntryIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductAttributeMediaGalleryManagementV1UpdatePut($sku, $entryId, $$body), $fetch);
    }
    /**
     * Retrieve the list of gallery entries associated with given product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeMediaGalleryManagementV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductAttributeMediaGalleryEntryInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductAttributeMediaGalleryManagementV1GetListGet($sku), $fetch);
    }
    /**
     * Create new gallery entry
     *
     * @param string $sku 
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsSkuMediaPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeMediaGalleryManagementV1CreatePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductAttributeMediaGalleryManagementV1CreatePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1CreatePost(string $sku, \Kiboko\Magento\v2_1\Model\V1ProductsSkuMediaPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductAttributeMediaGalleryManagementV1CreatePost($sku, $$body), $fetch);
    }
    /**
     * Get tier price of product
     *
     * @param string $sku 
     * @param string $customerGroupId 'all' can be used to specify 'ALL GROUPS'
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductTierPriceManagementV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductTierPriceManagementV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductTierPriceInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductTierPriceManagementV1GetListGet(string $sku, string $customerGroupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductTierPriceManagementV1GetListGet($sku, $customerGroupId), $fetch);
    }
    /**
     * Create tier price for product
     *
     * @param string $sku 
     * @param string $customerGroupId 'all' can be used to specify 'ALL GROUPS'
     * @param float $price 
     * @param float $qty 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductTierPriceManagementV1AddPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductTierPriceManagementV1AddPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductTierPriceManagementV1AddPost(string $sku, string $customerGroupId, float $price, float $qty, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductTierPriceManagementV1AddPost($sku, $customerGroupId, $price, $qty), $fetch);
    }
    /**
     * Remove tier price from product
     *
     * @param string $sku 
     * @param string $customerGroupId 'all' can be used to specify 'ALL GROUPS'
     * @param float $qty 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductTierPriceManagementV1RemoveDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductTierPriceManagementV1RemoveDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductTierPriceManagementV1RemoveDelete(string $sku, string $customerGroupId, float $qty, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductTierPriceManagementV1RemoveDelete($sku, $customerGroupId, $qty), $fetch);
    }
    /**
     * Delete category by identifier
     *
     * @param int $categoryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryRepositoryV1DeleteByIdentifierDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryRepositoryV1DeleteByIdentifierDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryRepositoryV1DeleteByIdentifierDelete(int $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogCategoryRepositoryV1DeleteByIdentifierDelete($categoryId), $fetch);
    }
    /**
     * Get info about category by category id
     *
     * @param int $categoryId 
     * @param array $queryParameters {
     *     @var int $storeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataCategoryInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryRepositoryV1GetGet(int $categoryId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogCategoryRepositoryV1GetGet($categoryId, $queryParameters), $fetch);
    }
    /**
     * Retrieve list of categories
     *
     * @param array $queryParameters {
     *     @var int $rootCategoryId 
     *     @var int $depth 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryManagementV1GetTreeGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryManagementV1GetTreeGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataCategoryTreeInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryManagementV1GetTreeGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogCategoryManagementV1GetTreeGet($queryParameters), $fetch);
    }
    /**
     * Create category service
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CategoriesPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataCategoryInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryRepositoryV1SavePost(\Kiboko\Magento\v2_1\Model\V1CategoriesPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogCategoryRepositoryV1SavePost($$body), $fetch);
    }
    /**
     * Create category service
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_1\Model\V1CategoriesIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryRepositoryV1SavePutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataCategoryInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryRepositoryV1SavePut(string $id, \Kiboko\Magento\v2_1\Model\V1CategoriesIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogCategoryRepositoryV1SavePut($id, $$body), $fetch);
    }
    /**
     * Move category
     *
     * @param int $categoryId 
     * @param \Kiboko\Magento\v2_1\Model\V1CategoriesCategoryIdMovePutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryManagementV1MovePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryManagementV1MovePutInternalServerErrorException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryManagementV1MovePutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryManagementV1MovePut(int $categoryId, \Kiboko\Magento\v2_1\Model\V1CategoriesCategoryIdMovePutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogCategoryManagementV1MovePut($categoryId, $$body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductCustomOptionTypeListV1GetItemsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductCustomOptionTypeInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionTypeListV1GetItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductCustomOptionTypeListV1GetItemsGet(), $fetch);
    }
    /**
     * Get the list of custom options for a specific product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductCustomOptionRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductCustomOptionInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductCustomOptionRepositoryV1GetListGet($sku), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductCustomOptionRepositoryV1DeleteByIdentifierDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete(string $sku, int $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete($sku, $optionId), $fetch);
    }
    /**
     * Get custom option for a specific product
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductCustomOptionRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductCustomOptionInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1GetGet(string $sku, int $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductCustomOptionRepositoryV1GetGet($sku, $optionId), $fetch);
    }
    /**
     * Save Custom Option
     *
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsOptionsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductCustomOptionRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductCustomOptionInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1SavePost(\Kiboko\Magento\v2_1\Model\V1ProductsOptionsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductCustomOptionRepositoryV1SavePost($$body), $fetch);
    }
    /**
     * Save Custom Option
     *
     * @param string $optionId 
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsOptionsOptionIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductCustomOptionRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductCustomOptionInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1SavePut(string $optionId, \Kiboko\Magento\v2_1\Model\V1ProductsOptionsOptionIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductCustomOptionRepositoryV1SavePut($optionId, $$body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductLinkTypeListV1GetItemsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductLinkTypeInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkTypeListV1GetItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductLinkTypeListV1GetItemsGet(), $fetch);
    }
    /**
     * Provide a list of the product link type attributes
     *
     * @param string $type 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductLinkTypeListV1GetItemAttributesGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductLinkAttributeInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkTypeListV1GetItemAttributesGet(string $type, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductLinkTypeListV1GetItemAttributesGet($type), $fetch);
    }
    /**
     * Provide the list of links for a specific product
     *
     * @param string $sku 
     * @param string $type 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductLinkManagementV1GetLinkedItemsByTypeGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductLinkInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkManagementV1GetLinkedItemsByTypeGet(string $sku, string $type, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductLinkManagementV1GetLinkedItemsByTypeGet($sku, $type), $fetch);
    }
    /**
     * Assign a product link to another product
     *
     * @param string $sku 
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsSkuLinksPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductLinkManagementV1SetProductLinksPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductLinkManagementV1SetProductLinksPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkManagementV1SetProductLinksPost(string $sku, \Kiboko\Magento\v2_1\Model\V1ProductsSkuLinksPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductLinkManagementV1SetProductLinksPost($sku, $$body), $fetch);
    }
    /**
     * Save product link
     *
     * @param string $sku 
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsSkuLinksPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductLinkRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductLinkRepositoryV1SavePutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkRepositoryV1SavePut(string $sku, \Kiboko\Magento\v2_1\Model\V1ProductsSkuLinksPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductLinkRepositoryV1SavePut($sku, $$body), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param string $type 
     * @param string $linkedProductSku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductLinkRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductLinkRepositoryV1DeleteByIdDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkRepositoryV1DeleteByIdDelete(string $sku, string $type, string $linkedProductSku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductLinkRepositoryV1DeleteByIdDelete($sku, $type, $linkedProductSku), $fetch);
    }
    /**
     * Get products assigned to category
     *
     * @param int $categoryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryLinkManagementV1GetAssignedProductsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataCategoryProductLinkInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryLinkManagementV1GetAssignedProductsGet(int $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogCategoryLinkManagementV1GetAssignedProductsGet($categoryId), $fetch);
    }
    /**
     * Assign a product to the required category
     *
     * @param string $categoryId 
     * @param \Kiboko\Magento\v2_1\Model\V1CategoriesCategoryIdProductsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryLinkRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryLinkRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryLinkRepositoryV1SavePost(string $categoryId, \Kiboko\Magento\v2_1\Model\V1CategoriesCategoryIdProductsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogCategoryLinkRepositoryV1SavePost($categoryId, $$body), $fetch);
    }
    /**
     * Assign a product to the required category
     *
     * @param string $categoryId 
     * @param \Kiboko\Magento\v2_1\Model\V1CategoriesCategoryIdProductsPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryLinkRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryLinkRepositoryV1SavePutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryLinkRepositoryV1SavePut(string $categoryId, \Kiboko\Magento\v2_1\Model\V1CategoriesCategoryIdProductsPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogCategoryLinkRepositoryV1SavePut($categoryId, $$body), $fetch);
    }
    /**
     * Remove the product assignment from the category by category id and sku
     *
     * @param string $categoryId 
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryLinkRepositoryV1DeleteByIdsDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogCategoryLinkRepositoryV1DeleteByIdsDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryLinkRepositoryV1DeleteByIdsDelete(string $categoryId, string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogCategoryLinkRepositoryV1DeleteByIdsDelete($categoryId, $sku), $fetch);
    }
    /**
     * Assign a product to the website
     *
     * @param string $sku 
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsSkuWebsitesPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductWebsiteLinkRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductWebsiteLinkRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductWebsiteLinkRepositoryV1SavePost(string $sku, \Kiboko\Magento\v2_1\Model\V1ProductsSkuWebsitesPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductWebsiteLinkRepositoryV1SavePost($sku, $$body), $fetch);
    }
    /**
     * Assign a product to the website
     *
     * @param string $sku 
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsSkuWebsitesPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductWebsiteLinkRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductWebsiteLinkRepositoryV1SavePutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductWebsiteLinkRepositoryV1SavePut(string $sku, \Kiboko\Magento\v2_1\Model\V1ProductsSkuWebsitesPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductWebsiteLinkRepositoryV1SavePut($sku, $$body), $fetch);
    }
    /**
     * Remove the website assignment from the product by product sku
     *
     * @param string $sku 
     * @param int $websiteId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductWebsiteLinkRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductWebsiteLinkRepositoryV1DeleteByIdDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete(string $sku, int $websiteId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogProductWebsiteLinkRepositoryV1DeleteByIdDelete($sku, $websiteId), $fetch);
    }
    /**
     * 
     *
     * @param string $productSku 
     * @param array $queryParameters {
     *     @var int $scopeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogInventoryStockRegistryV1GetStockItemBySkuGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogInventoryStockRegistryV1GetStockItemBySkuGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogInventoryDataStockItemInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogInventoryStockRegistryV1GetStockItemBySkuGet(string $productSku, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogInventoryStockRegistryV1GetStockItemBySkuGet($productSku, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $productSku 
     * @param string $itemId 
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsProductSkuStockItemsItemIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogInventoryStockRegistryV1UpdateStockItemBySkuPut(string $productSku, string $itemId, \Kiboko\Magento\v2_1\Model\V1ProductsProductSkuStockItemsItemIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPut($productSku, $itemId, $$body), $fetch);
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
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogInventoryStockRegistryV1GetLowStockItemsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogInventoryDataStockStatusCollectionInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogInventoryStockRegistryV1GetLowStockItemsGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogInventoryStockRegistryV1GetLowStockItemsGet($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $productSku 
     * @param array $queryParameters {
     *     @var int $scopeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogInventoryStockRegistryV1GetStockStatusBySkuGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogInventoryStockRegistryV1GetStockStatusBySkuGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogInventoryDataStockStatusInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogInventoryStockRegistryV1GetStockStatusBySkuGet(string $productSku, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CatalogInventoryStockRegistryV1GetStockStatusBySkuGet($productSku, $queryParameters), $fetch);
    }
    /**
     * Add child product to specified Bundle option by product sku
     *
     * @param string $sku 
     * @param int $optionId 
     * @param \Kiboko\Magento\v2_1\Model\V1BundleProductsSkuLinksOptionIdPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductLinkManagementV1AddChildByProductSkuPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductLinkManagementV1AddChildByProductSkuPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductLinkManagementV1AddChildByProductSkuPost(string $sku, int $optionId, \Kiboko\Magento\v2_1\Model\V1BundleProductsSkuLinksOptionIdPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\BundleProductLinkManagementV1AddChildByProductSkuPost($sku, $optionId, $$body), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param string $id 
     * @param \Kiboko\Magento\v2_1\Model\V1BundleProductsSkuLinksIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductLinkManagementV1SaveChildPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductLinkManagementV1SaveChildPutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductLinkManagementV1SaveChildPut(string $sku, string $id, \Kiboko\Magento\v2_1\Model\V1BundleProductsSkuLinksIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\BundleProductLinkManagementV1SaveChildPut($sku, $id, $$body), $fetch);
    }
    /**
     * Get all children for Bundle product
     *
     * @param string $productSku 
     * @param array $queryParameters {
     *     @var int $optionId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductLinkManagementV1GetChildrenGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductLinkManagementV1GetChildrenGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\BundleDataLinkInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductLinkManagementV1GetChildrenGet(string $productSku, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\BundleProductLinkManagementV1GetChildrenGet($productSku, $queryParameters), $fetch);
    }
    /**
     * Remove product from Bundle product option
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $childSku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductLinkManagementV1RemoveChildDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductLinkManagementV1RemoveChildDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductLinkManagementV1RemoveChildDelete(string $sku, int $optionId, string $childSku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\BundleProductLinkManagementV1RemoveChildDelete($sku, $optionId, $childSku), $fetch);
    }
    /**
     * Get all options for bundle product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductOptionRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductOptionRepositoryV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\BundleDataOptionInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionRepositoryV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\BundleProductOptionRepositoryV1GetListGet($sku), $fetch);
    }
    /**
     * Remove bundle option
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductOptionRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductOptionRepositoryV1DeleteByIdDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionRepositoryV1DeleteByIdDelete(string $sku, int $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\BundleProductOptionRepositoryV1DeleteByIdDelete($sku, $optionId), $fetch);
    }
    /**
     * Get option for bundle product
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductOptionRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductOptionRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\BundleDataOptionInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionRepositoryV1GetGet(string $sku, int $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\BundleProductOptionRepositoryV1GetGet($sku, $optionId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductOptionTypeListV1GetItemsGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\BundleDataOptionTypeInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionTypeListV1GetItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\BundleProductOptionTypeListV1GetItemsGet(), $fetch);
    }
    /**
     * Add new option for bundle product
     *
     * @param \Kiboko\Magento\v2_1\Model\V1BundleProductsOptionsAddPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductOptionManagementV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductOptionManagementV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionManagementV1SavePost(\Kiboko\Magento\v2_1\Model\V1BundleProductsOptionsAddPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\BundleProductOptionManagementV1SavePost($$body), $fetch);
    }
    /**
     * Add new option for bundle product
     *
     * @param string $optionId 
     * @param \Kiboko\Magento\v2_1\Model\V1BundleProductsOptionsOptionIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductOptionManagementV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\BundleProductOptionManagementV1SavePutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionManagementV1SavePut(string $optionId, \Kiboko\Magento\v2_1\Model\V1BundleProductsOptionsOptionIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\BundleProductOptionManagementV1SavePut($optionId, $$body), $fetch);
    }
    /**
     * Make Full Text Search and return found Documents
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[requestName] 
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_1\Model\FrameworkSearchSearchResultInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function searchV1SearchGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SearchV1SearchGet($queryParameters), $fetch);
    }
    /**
     * Enables an administrative user to return information for a specified cart.
     *
     * @param int $cartId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataCartInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartRepositoryV1GetGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCartRepositoryV1GetGet($cartId), $fetch);
    }
    /**
     * Assigns a specified customer to a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\v2_1\Model\V1CartsCartIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartManagementV1AssignCustomerPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1AssignCustomerPut(int $cartId, \Kiboko\Magento\v2_1\Model\V1CartsCartIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCartManagementV1AssignCustomerPut($cartId, $$body), $fetch);
    }
    /**
     * Enables administrative users to list carts that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See http://devdocs.magento.com/codelinks/attributes.html#CartRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataCartSearchResultsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCartRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartManagementV1GetCartForCustomerGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartManagementV1GetCartForCustomerGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataCartInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1GetCartForCustomerGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCartManagementV1GetCartForCustomerGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartManagementV1CreateEmptyCartForCustomerPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartManagementV1CreateEmptyCartForCustomerPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1CreateEmptyCartForCustomerPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCartManagementV1CreateEmptyCartForCustomerPost(), $fetch);
    }
    /**
     * Save quote
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CartsMinePutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartRepositoryV1SavePut(\Kiboko\Magento\v2_1\Model\V1CartsMinePutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCartRepositoryV1SavePut($$body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartManagementV1CreateEmptyCartPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartManagementV1CreateEmptyCartPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1CreateEmptyCartPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCartManagementV1CreateEmptyCartPost(), $fetch);
    }
    /**
     * Creates an empty cart and quote for a specified customer.
     *
     * @param int $customerId The customer ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartManagementV1CreateEmptyCartForCustomerPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartManagementV1CreateEmptyCartForCustomerPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1CreateEmptyCartForCustomerPost(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCartManagementV1CreateEmptyCartForCustomerPost($customerId), $fetch);
    }
    /**
     * Places an order for a specified cart.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CartsMineOrderPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartManagementV1PlaceOrderPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartManagementV1PlaceOrderPutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1PlaceOrderPut(\Kiboko\Magento\v2_1\Model\V1CartsMineOrderPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCartManagementV1PlaceOrderPut($$body), $fetch);
    }
    /**
     * Places an order for a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\v2_1\Model\V1CartsCartIdOrderPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartManagementV1PlaceOrderPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartManagementV1PlaceOrderPutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1PlaceOrderPut(int $cartId, \Kiboko\Magento\v2_1\Model\V1CartsCartIdOrderPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCartManagementV1PlaceOrderPut($cartId, $$body), $fetch);
    }
    /**
     * Enable a guest user to return information for a specified cart.
     *
     * @param string $cartId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteGuestCartRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataCartInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartRepositoryV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteGuestCartRepositoryV1GetGet($cartId), $fetch);
    }
    /**
     * Assign a specified customer to a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteGuestCartManagementV1AssignCustomerPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartManagementV1AssignCustomerPut(string $cartId, \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteGuestCartManagementV1AssignCustomerPut($cartId, $$body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteGuestCartManagementV1CreateEmptyCartPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartManagementV1CreateEmptyCartPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteGuestCartManagementV1CreateEmptyCartPost(), $fetch);
    }
    /**
     * Place an order for a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdOrderPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteGuestCartManagementV1PlaceOrderPutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartManagementV1PlaceOrderPut(string $cartId, \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdOrderPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteGuestCartManagementV1PlaceOrderPut($cartId, $$body), $fetch);
    }
    /**
     * Lists applicable shipping methods for a specified quote.
     *
     * @param int $cartId The shopping cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteShippingMethodManagementV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteShippingMethodManagementV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShippingMethodManagementV1GetListGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteShippingMethodManagementV1GetListGet($cartId), $fetch);
    }
    /**
     * Estimate shipping
     *
     * @param int $cartId The shopping cart ID.
     * @param \Kiboko\Magento\v2_1\Model\V1CartsCartIdEstimateShippingMethodsByAddressIdPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteShippingMethodManagementV1EstimateByAddressIdPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShippingMethodManagementV1EstimateByAddressIdPost(int $cartId, \Kiboko\Magento\v2_1\Model\V1CartsCartIdEstimateShippingMethodsByAddressIdPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteShippingMethodManagementV1EstimateByAddressIdPost($cartId, $$body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteShippingMethodManagementV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteShippingMethodManagementV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShippingMethodManagementV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteShippingMethodManagementV1GetListGet(), $fetch);
    }
    /**
     * Estimate shipping
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CartsMineEstimateShippingMethodsByAddressIdPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteShippingMethodManagementV1EstimateByAddressIdPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShippingMethodManagementV1EstimateByAddressIdPost(\Kiboko\Magento\v2_1\Model\V1CartsMineEstimateShippingMethodsByAddressIdPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteShippingMethodManagementV1EstimateByAddressIdPost($$body), $fetch);
    }
    /**
     * Estimate shipping by address and return list of available shipping methods
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\v2_1\Model\V1CartsCartIdEstimateShippingMethodsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteShipmentEstimationV1EstimateByExtendedAddressPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShipmentEstimationV1EstimateByExtendedAddressPost(string $cartId, \Kiboko\Magento\v2_1\Model\V1CartsCartIdEstimateShippingMethodsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $$body), $fetch);
    }
    /**
     * Estimate shipping by address and return list of available shipping methods
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CartsMineEstimateShippingMethodsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteShipmentEstimationV1EstimateByExtendedAddressPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShipmentEstimationV1EstimateByExtendedAddressPost(\Kiboko\Magento\v2_1\Model\V1CartsMineEstimateShippingMethodsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteShipmentEstimationV1EstimateByExtendedAddressPost($$body), $fetch);
    }
    /**
     * List applicable shipping methods for a specified quote.
     *
     * @param string $cartId The shopping cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteGuestShippingMethodManagementV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestShippingMethodManagementV1GetListGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteGuestShippingMethodManagementV1GetListGet($cartId), $fetch);
    }
    /**
     * Estimate shipping by address and return list of available shipping methods
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdEstimateShippingMethodsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost(string $cartId, \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdEstimateShippingMethodsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteGuestShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $$body), $fetch);
    }
    /**
     * Lists items that are assigned to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartItemRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartItemRepositoryV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataCartItemInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1GetListGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCartItemRepositoryV1GetListGet($cartId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $quoteId 
     * @param \Kiboko\Magento\v2_1\Model\V1CartsQuoteIdItemsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartItemRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartItemRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataCartItemInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1SavePost(string $quoteId, \Kiboko\Magento\v2_1\Model\V1CartsQuoteIdItemsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCartItemRepositoryV1SavePost($quoteId, $$body), $fetch);
    }
    /**
     * Removes the specified item from the specified cart.
     *
     * @param int $cartId The cart ID.
     * @param int $itemId The item ID of the item to be removed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartItemRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartItemRepositoryV1DeleteByIdDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1DeleteByIdDelete(int $cartId, int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCartItemRepositoryV1DeleteByIdDelete($cartId, $itemId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $cartId 
     * @param string $itemId 
     * @param \Kiboko\Magento\v2_1\Model\V1CartsCartIdItemsItemIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartItemRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartItemRepositoryV1SavePutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataCartItemInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1SavePut(string $cartId, string $itemId, \Kiboko\Magento\v2_1\Model\V1CartsCartIdItemsItemIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCartItemRepositoryV1SavePut($cartId, $itemId, $$body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartItemRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartItemRepositoryV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataCartItemInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCartItemRepositoryV1GetListGet(), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CartsMineItemsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartItemRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartItemRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataCartItemInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1SavePost(\Kiboko\Magento\v2_1\Model\V1CartsMineItemsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCartItemRepositoryV1SavePost($$body), $fetch);
    }
    /**
     * Removes the specified item from the specified cart.
     *
     * @param int $itemId The item ID of the item to be removed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartItemRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartItemRepositoryV1DeleteByIdDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1DeleteByIdDelete(int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCartItemRepositoryV1DeleteByIdDelete($itemId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $itemId 
     * @param \Kiboko\Magento\v2_1\Model\V1CartsMineItemsItemIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartItemRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartItemRepositoryV1SavePutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataCartItemInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1SavePut(string $itemId, \Kiboko\Magento\v2_1\Model\V1CartsMineItemsItemIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCartItemRepositoryV1SavePut($itemId, $$body), $fetch);
    }
    /**
     * List items that are assigned to a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteGuestCartItemRepositoryV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataCartItemInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartItemRepositoryV1GetListGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteGuestCartItemRepositoryV1GetListGet($cartId), $fetch);
    }
    /**
     * Add the specified item to the specified cart.
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdItemsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteGuestCartItemRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataCartItemInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartItemRepositoryV1SavePost(string $cartId, \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdItemsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteGuestCartItemRepositoryV1SavePost($cartId, $$body), $fetch);
    }
    /**
     * Remove the specified item from the specified cart.
     *
     * @param string $cartId The cart ID.
     * @param int $itemId The item ID of the item to be removed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteGuestCartItemRepositoryV1DeleteByIdDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartItemRepositoryV1DeleteByIdDelete(string $cartId, int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteGuestCartItemRepositoryV1DeleteByIdDelete($cartId, $itemId), $fetch);
    }
    /**
     * Add the specified item to the specified cart.
     *
     * @param string $cartId 
     * @param string $itemId 
     * @param \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdItemsItemIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteGuestCartItemRepositoryV1SavePutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataCartItemInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartItemRepositoryV1SavePut(string $cartId, string $itemId, \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdItemsItemIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteGuestCartItemRepositoryV1SavePut($cartId, $itemId, $$body), $fetch);
    }
    /**
     * Returns the payment method for a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuotePaymentMethodManagementV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuotePaymentMethodManagementV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataPaymentInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1GetGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuotePaymentMethodManagementV1GetGet($cartId), $fetch);
    }
    /**
     * Adds a specified payment method to a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\v2_1\Model\V1CartsCartIdSelectedPaymentMethodPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuotePaymentMethodManagementV1SetPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuotePaymentMethodManagementV1SetPutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1SetPut(int $cartId, \Kiboko\Magento\v2_1\Model\V1CartsCartIdSelectedPaymentMethodPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuotePaymentMethodManagementV1SetPut($cartId, $$body), $fetch);
    }
    /**
     * Lists available payment methods for a specified shopping cart. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See http://devdocs.magento.com/codelinks/attributes.html#PaymentMethodManagementInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuotePaymentMethodManagementV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuotePaymentMethodManagementV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataPaymentMethodInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1GetListGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuotePaymentMethodManagementV1GetListGet($cartId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuotePaymentMethodManagementV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuotePaymentMethodManagementV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataPaymentInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuotePaymentMethodManagementV1GetGet(), $fetch);
    }
    /**
     * Adds a specified payment method to a specified shopping cart.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CartsMineSelectedPaymentMethodPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuotePaymentMethodManagementV1SetPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuotePaymentMethodManagementV1SetPutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1SetPut(\Kiboko\Magento\v2_1\Model\V1CartsMineSelectedPaymentMethodPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuotePaymentMethodManagementV1SetPut($$body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuotePaymentMethodManagementV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuotePaymentMethodManagementV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataPaymentMethodInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuotePaymentMethodManagementV1GetListGet(), $fetch);
    }
    /**
     * Return the payment method for a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteGuestPaymentMethodManagementV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataPaymentInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestPaymentMethodManagementV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteGuestPaymentMethodManagementV1GetGet($cartId), $fetch);
    }
    /**
     * Add a specified payment method to a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdSelectedPaymentMethodPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteGuestPaymentMethodManagementV1SetPutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestPaymentMethodManagementV1SetPut(string $cartId, \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdSelectedPaymentMethodPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteGuestPaymentMethodManagementV1SetPut($cartId, $$body), $fetch);
    }
    /**
     * List available payment methods for a specified shopping cart. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See http://devdocs.magento.com/codelinks/attributes.html#GuestPaymentMethodManagementInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteGuestPaymentMethodManagementV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataPaymentMethodInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestPaymentMethodManagementV1GetListGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteGuestPaymentMethodManagementV1GetListGet($cartId), $fetch);
    }
    /**
     * Returns the billing address for a specified quote.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteBillingAddressManagementV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteBillingAddressManagementV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataAddressInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteBillingAddressManagementV1GetGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteBillingAddressManagementV1GetGet($cartId), $fetch);
    }
    /**
     * Assigns a specified billing address to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\v2_1\Model\V1CartsCartIdBillingAddressPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteBillingAddressManagementV1AssignPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteBillingAddressManagementV1AssignPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteBillingAddressManagementV1AssignPost(int $cartId, \Kiboko\Magento\v2_1\Model\V1CartsCartIdBillingAddressPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteBillingAddressManagementV1AssignPost($cartId, $$body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteBillingAddressManagementV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteBillingAddressManagementV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataAddressInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteBillingAddressManagementV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteBillingAddressManagementV1GetGet(), $fetch);
    }
    /**
     * Assigns a specified billing address to a specified cart.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CartsMineBillingAddressPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteBillingAddressManagementV1AssignPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteBillingAddressManagementV1AssignPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteBillingAddressManagementV1AssignPost(\Kiboko\Magento\v2_1\Model\V1CartsMineBillingAddressPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteBillingAddressManagementV1AssignPost($$body), $fetch);
    }
    /**
     * Return the billing address for a specified quote.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteGuestBillingAddressManagementV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataAddressInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestBillingAddressManagementV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteGuestBillingAddressManagementV1GetGet($cartId), $fetch);
    }
    /**
     * Assign a specified billing address to a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdBillingAddressPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteGuestBillingAddressManagementV1AssignPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestBillingAddressManagementV1AssignPost(string $cartId, \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdBillingAddressPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteGuestBillingAddressManagementV1AssignPost($cartId, $$body), $fetch);
    }
    /**
     * Deletes a coupon from a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCouponManagementV1RemoveDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCouponManagementV1RemoveDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1RemoveDelete(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCouponManagementV1RemoveDelete($cartId), $fetch);
    }
    /**
     * Returns information for a coupon in a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCouponManagementV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCouponManagementV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1GetGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCouponManagementV1GetGet($cartId), $fetch);
    }
    /**
     * Adds a coupon by code to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $couponCode The coupon code data.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCouponManagementV1SetPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCouponManagementV1SetPutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1SetPut(int $cartId, string $couponCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCouponManagementV1SetPut($cartId, $couponCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCouponManagementV1RemoveDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCouponManagementV1RemoveDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1RemoveDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCouponManagementV1RemoveDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCouponManagementV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCouponManagementV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCouponManagementV1GetGet(), $fetch);
    }
    /**
     * Adds a coupon by code to a specified cart.
     *
     * @param string $couponCode The coupon code data.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCouponManagementV1SetPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCouponManagementV1SetPutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1SetPut(string $couponCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCouponManagementV1SetPut($couponCode), $fetch);
    }
    /**
     * Delete a coupon from a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteGuestCouponManagementV1RemoveDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCouponManagementV1RemoveDelete(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteGuestCouponManagementV1RemoveDelete($cartId), $fetch);
    }
    /**
     * Return information for a coupon in a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteGuestCouponManagementV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCouponManagementV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteGuestCouponManagementV1GetGet($cartId), $fetch);
    }
    /**
     * Add a coupon by code to a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $couponCode The coupon code data.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteGuestCouponManagementV1SetPutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCouponManagementV1SetPut(string $cartId, string $couponCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteGuestCouponManagementV1SetPut($cartId, $couponCode), $fetch);
    }
    /**
     * Returns quote totals data for a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartTotalRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartTotalRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataTotalsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartTotalRepositoryV1GetGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCartTotalRepositoryV1GetGet($cartId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartTotalRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartTotalRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataTotalsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartTotalRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCartTotalRepositoryV1GetGet(), $fetch);
    }
    /**
     * Set shipping/billing methods and additional data for cart and collect totals for guest.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdCollectTotalsPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataTotalsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartTotalManagementV1CollectTotalsPut(string $cartId, \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdCollectTotalsPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteGuestCartTotalManagementV1CollectTotalsPut($cartId, $$body), $fetch);
    }
    /**
     * Return quote totals data for a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteGuestCartTotalRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataTotalsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartTotalRepositoryV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteGuestCartTotalRepositoryV1GetGet($cartId), $fetch);
    }
    /**
     * Set shipping/billing methods and additional data for cart and collect totals.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CartsMineCollectTotalsPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\QuoteCartTotalManagementV1CollectTotalsPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataTotalsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartTotalManagementV1CollectTotalsPut(\Kiboko\Magento\v2_1\Model\V1CartsMineCollectTotalsPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\QuoteCartTotalManagementV1CollectTotalsPut($$body), $fetch);
    }
    /**
     * Loads a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesOrderRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataOrderInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesOrderRepositoryV1GetGet($id), $fetch);
    }
    /**
     * Lists orders that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#OrderRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesOrderRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataOrderSearchResultInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesOrderRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Performs persist operations for a specified order.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1OrdersCreatePutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesOrderRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataOrderInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderRepositoryV1SavePut(\Kiboko\Magento\v2_1\Model\V1OrdersCreatePutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesOrderRepositoryV1SavePut($$body), $fetch);
    }
    /**
     * Performs persist operations for a specified order.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1OrdersPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesOrderRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataOrderInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderRepositoryV1SavePost(\Kiboko\Magento\v2_1\Model\V1OrdersPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesOrderRepositoryV1SavePost($$body), $fetch);
    }
    /**
     * Gets the status for a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesOrderManagementV1GetStatusGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1GetStatusGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesOrderManagementV1GetStatusGet($id), $fetch);
    }
    /**
     * Cancels a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesOrderManagementV1CancelPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1CancelPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesOrderManagementV1CancelPost($id), $fetch);
    }
    /**
     * Emails a user a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesOrderManagementV1NotifyPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1NotifyPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesOrderManagementV1NotifyPost($id), $fetch);
    }
    /**
     * Holds a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesOrderManagementV1HoldPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1HoldPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesOrderManagementV1HoldPost($id), $fetch);
    }
    /**
     * Releases a specified order from hold status.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesOrderManagementV1UnHoldPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1UnHoldPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesOrderManagementV1UnHoldPost($id), $fetch);
    }
    /**
     * Lists comments for a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesOrderManagementV1GetCommentsListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataOrderStatusHistorySearchResultInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1GetCommentsListGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesOrderManagementV1GetCommentsListGet($id), $fetch);
    }
    /**
     * Adds a comment to a specified order.
     *
     * @param int $id The order ID.
     * @param \Kiboko\Magento\v2_1\Model\V1OrdersIdCommentsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesOrderManagementV1AddCommentPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1AddCommentPost(int $id, \Kiboko\Magento\v2_1\Model\V1OrdersIdCommentsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesOrderManagementV1AddCommentPost($id, $$body), $fetch);
    }
    /**
     * Performs persist operations for a specified order address.
     *
     * @param string $parentId 
     * @param \Kiboko\Magento\v2_1\Model\V1OrdersParentIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesOrderAddressRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataOrderAddressInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderAddressRepositoryV1SavePut(string $parentId, \Kiboko\Magento\v2_1\Model\V1OrdersParentIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesOrderAddressRepositoryV1SavePut($parentId, $$body), $fetch);
    }
    /**
     * Loads a specified order item.
     *
     * @param int $id The order item ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesOrderItemRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataOrderItemInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderItemRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesOrderItemRepositoryV1GetGet($id), $fetch);
    }
    /**
     * Lists order items that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#OrderItemRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesOrderItemRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataOrderItemSearchResultInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderItemRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesOrderItemRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Loads a specified invoice.
     *
     * @param int $id The invoice ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesInvoiceRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataInvoiceInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesInvoiceRepositoryV1GetGet($id), $fetch);
    }
    /**
     * Lists invoices that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#InvoiceRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesInvoiceRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataInvoiceSearchResultInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesInvoiceRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Performs persist operations for a specified invoice.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1InvoicesPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesInvoiceRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataInvoiceInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceRepositoryV1SavePost(\Kiboko\Magento\v2_1\Model\V1InvoicesPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesInvoiceRepositoryV1SavePost($$body), $fetch);
    }
    /**
     * Lists comments for a specified invoice.
     *
     * @param int $id The invoice ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesInvoiceManagementV1GetCommentsListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataInvoiceCommentSearchResultInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceManagementV1GetCommentsListGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesInvoiceManagementV1GetCommentsListGet($id), $fetch);
    }
    /**
     * Emails a user a specified invoice.
     *
     * @param int $id The invoice ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesInvoiceManagementV1NotifyPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceManagementV1NotifyPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesInvoiceManagementV1NotifyPost($id), $fetch);
    }
    /**
     * Voids a specified invoice.
     *
     * @param int $id The invoice ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesInvoiceManagementV1SetVoidPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceManagementV1SetVoidPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesInvoiceManagementV1SetVoidPost($id), $fetch);
    }
    /**
     * Sets invoice capture.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesInvoiceManagementV1SetCapturePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceManagementV1SetCapturePost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesInvoiceManagementV1SetCapturePost($id), $fetch);
    }
    /**
     * Performs persist operations for a specified invoice comment.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1InvoicesCommentsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesInvoiceCommentRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataInvoiceCommentInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceCommentRepositoryV1SavePost(\Kiboko\Magento\v2_1\Model\V1InvoicesCommentsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesInvoiceCommentRepositoryV1SavePost($$body), $fetch);
    }
    /**
     * Create refund for invoice
     *
     * @param int $invoiceId 
     * @param \Kiboko\Magento\v2_1\Model\V1InvoiceInvoiceIdRefundPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRefundInvoiceV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRefundInvoiceV1ExecutePost(int $invoiceId, \Kiboko\Magento\v2_1\Model\V1InvoiceInvoiceIdRefundPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesRefundInvoiceV1ExecutePost($invoiceId, $$body), $fetch);
    }
    /**
     * Lists comments for a specified credit memo.
     *
     * @param int $id The credit memo ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesCreditmemoManagementV1GetCommentsListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataCreditmemoCommentSearchResultInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoManagementV1GetCommentsListGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesCreditmemoManagementV1GetCommentsListGet($id), $fetch);
    }
    /**
     * Performs persist operations for a specified entity.
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_1\Model\V1CreditmemoIdCommentsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesCreditmemoCommentRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataCreditmemoCommentInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoCommentRepositoryV1SavePost(string $id, \Kiboko\Magento\v2_1\Model\V1CreditmemoIdCommentsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesCreditmemoCommentRepositoryV1SavePost($id, $$body), $fetch);
    }
    /**
     * Loads a specified credit memo.
     *
     * @param int $id The credit memo ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesCreditmemoRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataCreditmemoInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesCreditmemoRepositoryV1GetGet($id), $fetch);
    }
    /**
     * Cancels a specified credit memo.
     *
     * @param int $id The credit memo ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesCreditmemoManagementV1CancelPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesCreditmemoManagementV1CancelPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoManagementV1CancelPut(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesCreditmemoManagementV1CancelPut($id), $fetch);
    }
    /**
     * Emails a user a specified credit memo.
     *
     * @param int $id The credit memo ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesCreditmemoManagementV1NotifyPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoManagementV1NotifyPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesCreditmemoManagementV1NotifyPost($id), $fetch);
    }
    /**
     * Prepare creditmemo to refund and save it.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CreditmemoRefundPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesCreditmemoManagementV1RefundPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataCreditmemoInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoManagementV1RefundPost(\Kiboko\Magento\v2_1\Model\V1CreditmemoRefundPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesCreditmemoManagementV1RefundPost($$body), $fetch);
    }
    /**
     * Lists credit memos that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#CreditmemoRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesCreditmemoRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataCreditmemoSearchResultInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesCreditmemoRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Performs persist operations for a specified credit memo.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CreditmemoPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesCreditmemoRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataCreditmemoInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoRepositoryV1SavePost(\Kiboko\Magento\v2_1\Model\V1CreditmemoPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesCreditmemoRepositoryV1SavePost($$body), $fetch);
    }
    /**
     * Create offline refund for order
     *
     * @param int $orderId 
     * @param \Kiboko\Magento\v2_1\Model\V1OrderOrderIdRefundPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRefundOrderV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRefundOrderV1ExecutePost(int $orderId, \Kiboko\Magento\v2_1\Model\V1OrderOrderIdRefundPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesRefundOrderV1ExecutePost($orderId, $$body), $fetch);
    }
    /**
     * Loads a specified shipment.
     *
     * @param int $id The shipment ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesShipmentRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataShipmentInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesShipmentRepositoryV1GetGet($id), $fetch);
    }
    /**
     * Lists shipments that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#ShipmentRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesShipmentRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataShipmentSearchResultInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesShipmentRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Performs persist operations for a specified shipment.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1ShipmentPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesShipmentRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataShipmentInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentRepositoryV1SavePost(\Kiboko\Magento\v2_1\Model\V1ShipmentPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesShipmentRepositoryV1SavePost($$body), $fetch);
    }
    /**
     * Lists comments for a specified shipment.
     *
     * @param int $id The shipment ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesShipmentManagementV1GetCommentsListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataShipmentCommentSearchResultInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentManagementV1GetCommentsListGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesShipmentManagementV1GetCommentsListGet($id), $fetch);
    }
    /**
     * Performs persist operations for a specified shipment comment.
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_1\Model\V1ShipmentIdCommentsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesShipmentCommentRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataShipmentCommentInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentCommentRepositoryV1SavePost(string $id, \Kiboko\Magento\v2_1\Model\V1ShipmentIdCommentsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesShipmentCommentRepositoryV1SavePost($id, $$body), $fetch);
    }
    /**
     * Emails user a specified shipment.
     *
     * @param int $id The shipment ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesShipmentManagementV1NotifyPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentManagementV1NotifyPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesShipmentManagementV1NotifyPost($id), $fetch);
    }
    /**
     * Gets a specified shipment label.
     *
     * @param int $id The shipment label ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesShipmentManagementV1GetLabelGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentManagementV1GetLabelGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesShipmentManagementV1GetLabelGet($id), $fetch);
    }
    /**
     * Performs persist operations for a specified shipment track.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1ShipmentTrackPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesShipmentTrackRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataShipmentTrackInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentTrackRepositoryV1SavePost(\Kiboko\Magento\v2_1\Model\V1ShipmentTrackPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesShipmentTrackRepositoryV1SavePost($$body), $fetch);
    }
    /**
     * Deletes a specified shipment track by ID.
     *
     * @param int $id The shipment track ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesShipmentTrackRepositoryV1DeleteByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentTrackRepositoryV1DeleteByIdDelete(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesShipmentTrackRepositoryV1DeleteByIdDelete($id), $fetch);
    }
    /**
     * Creates new Shipment for given Order.
     *
     * @param int $orderId 
     * @param \Kiboko\Magento\v2_1\Model\V1OrderOrderIdShipPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesShipOrderV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipOrderV1ExecutePost(int $orderId, \Kiboko\Magento\v2_1\Model\V1OrderOrderIdShipPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesShipOrderV1ExecutePost($orderId, $$body), $fetch);
    }
    /**
     * Loads a specified transaction.
     *
     * @param int $id The transaction ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesTransactionRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataTransactionInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesTransactionRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesTransactionRepositoryV1GetGet($id), $fetch);
    }
    /**
     * Lists transactions that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#TransactionRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesTransactionRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesDataTransactionSearchResultInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesTransactionRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesTransactionRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $orderId 
     * @param \Kiboko\Magento\v2_1\Model\V1OrderOrderIdInvoicePostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesInvoiceOrderV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceOrderV1ExecutePost(int $orderId, \Kiboko\Magento\v2_1\Model\V1OrderOrderIdInvoicePostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesInvoiceOrderV1ExecutePost($orderId, $$body), $fetch);
    }
    /**
     * Delete rule by ID.
     *
     * @param int $ruleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleRuleRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleRuleRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleRuleRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1DeleteByIdDelete(int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesRuleRuleRepositoryV1DeleteByIdDelete($ruleId), $fetch);
    }
    /**
     * Get rule by ID.
     *
     * @param int $ruleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleRuleRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleRuleRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleRuleRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesRuleDataRuleInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1GetByIdGet(int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesRuleRuleRepositoryV1GetByIdGet($ruleId), $fetch);
    }
    /**
     * Save sales rule.
     *
     * @param string $ruleId 
     * @param \Kiboko\Magento\v2_1\Model\V1SalesRulesRuleIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleRuleRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleRuleRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleRuleRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesRuleDataRuleInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1SavePut(string $ruleId, \Kiboko\Magento\v2_1\Model\V1SalesRulesRuleIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesRuleRuleRepositoryV1SavePut($ruleId, $$body), $fetch);
    }
    /**
     * Retrieve sales rules that match te specified criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#RuleRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleRuleRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleRuleRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesRuleDataRuleSearchResultInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesRuleRuleRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save sales rule.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1SalesRulesPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleRuleRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleRuleRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleRuleRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesRuleDataRuleInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1SavePost(\Kiboko\Magento\v2_1\Model\V1SalesRulesPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesRuleRuleRepositoryV1SavePost($$body), $fetch);
    }
    /**
     * Delete coupon by coupon id.
     *
     * @param int $couponId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1DeleteByIdDelete(int $couponId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesRuleCouponRepositoryV1DeleteByIdDelete($couponId), $fetch);
    }
    /**
     * Get coupon by coupon id.
     *
     * @param int $couponId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesRuleDataCouponInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1GetByIdGet(int $couponId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesRuleCouponRepositoryV1GetByIdGet($couponId), $fetch);
    }
    /**
     * Save a coupon.
     *
     * @param string $couponId 
     * @param \Kiboko\Magento\v2_1\Model\V1CouponsCouponIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesRuleDataCouponInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1SavePut(string $couponId, \Kiboko\Magento\v2_1\Model\V1CouponsCouponIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesRuleCouponRepositoryV1SavePut($couponId, $$body), $fetch);
    }
    /**
     * Retrieve a coupon using the specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#CouponRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesRuleDataCouponSearchResultInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesRuleCouponRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save a coupon.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CouponsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesRuleDataCouponInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1SavePost(\Kiboko\Magento\v2_1\Model\V1CouponsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesRuleCouponRepositoryV1SavePost($$body), $fetch);
    }
    /**
     * Generate coupon for a rule
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CouponsGeneratePostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponManagementV1GeneratePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponManagementV1GeneratePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponManagementV1GeneratePost(\Kiboko\Magento\v2_1\Model\V1CouponsGeneratePostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesRuleCouponManagementV1GeneratePost($$body), $fetch);
    }
    /**
     * Delete coupon by coupon ids.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CouponsDeleteByIdsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponManagementV1DeleteByIdsPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponManagementV1DeleteByIdsPostBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponManagementV1DeleteByIdsPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesRuleDataCouponMassDeleteResultInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponManagementV1DeleteByIdsPost(\Kiboko\Magento\v2_1\Model\V1CouponsDeleteByIdsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesRuleCouponManagementV1DeleteByIdsPost($$body), $fetch);
    }
    /**
     * Delete coupon by coupon codes.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CouponsDeleteByCodesPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponManagementV1DeleteByCodesPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponManagementV1DeleteByCodesPostBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\SalesRuleCouponManagementV1DeleteByCodesPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\SalesRuleDataCouponMassDeleteResultInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponManagementV1DeleteByCodesPost(\Kiboko\Magento\v2_1\Model\V1CouponsDeleteByCodesPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\SalesRuleCouponManagementV1DeleteByCodesPost($$body), $fetch);
    }
    /**
     * 
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdShippingInformationPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestShippingInformationManagementV1SaveAddressInformationPost(string $cartId, \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdShippingInformationPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CheckoutGuestShippingInformationManagementV1SaveAddressInformationPost($cartId, $$body), $fetch);
    }
    /**
     * 
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CartsMineShippingInformationPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CheckoutShippingInformationManagementV1SaveAddressInformationPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutShippingInformationManagementV1SaveAddressInformationPost(\Kiboko\Magento\v2_1\Model\V1CartsMineShippingInformationPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CheckoutShippingInformationManagementV1SaveAddressInformationPost($$body), $fetch);
    }
    /**
     * 
     *
     * @param int $cartId 
     * @param \Kiboko\Magento\v2_1\Model\V1CartsCartIdShippingInformationPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CheckoutShippingInformationManagementV1SaveAddressInformationPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutShippingInformationManagementV1SaveAddressInformationPost(int $cartId, \Kiboko\Magento\v2_1\Model\V1CartsCartIdShippingInformationPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CheckoutShippingInformationManagementV1SaveAddressInformationPost($cartId, $$body), $fetch);
    }
    /**
     * Calculate quote totals based on address and shipping method.
     *
     * @param int $cartId 
     * @param \Kiboko\Magento\v2_1\Model\V1CartsCartIdTotalsInformationPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CheckoutTotalsInformationManagementV1CalculatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataTotalsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutTotalsInformationManagementV1CalculatePost(int $cartId, \Kiboko\Magento\v2_1\Model\V1CartsCartIdTotalsInformationPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CheckoutTotalsInformationManagementV1CalculatePost($cartId, $$body), $fetch);
    }
    /**
     * Calculate quote totals based on address and shipping method.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CartsMineTotalsInformationPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CheckoutTotalsInformationManagementV1CalculatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataTotalsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutTotalsInformationManagementV1CalculatePost(\Kiboko\Magento\v2_1\Model\V1CartsMineTotalsInformationPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CheckoutTotalsInformationManagementV1CalculatePost($$body), $fetch);
    }
    /**
     * Calculate quote totals based on address and shipping method.
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdTotalsInformationPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataTotalsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestTotalsInformationManagementV1CalculatePost(string $cartId, \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdTotalsInformationPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CheckoutGuestTotalsInformationManagementV1CalculatePost($cartId, $$body), $fetch);
    }
    /**
     * Get payment information
     *
     * @param string $cartId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CheckoutGuestPaymentInformationManagementV1GetPaymentInformationGet($cartId), $fetch);
    }
    /**
     * Set payment information and place order for a specified cart.
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdPaymentInformationPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost(string $cartId, \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdPaymentInformationPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($cartId, $$body), $fetch);
    }
    /**
     * Set payment information for a specified cart.
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdSetPaymentInformationPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost(string $cartId, \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdSetPaymentInformationPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPost($cartId, $$body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CheckoutPaymentInformationManagementV1GetPaymentInformationGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutPaymentInformationManagementV1GetPaymentInformationGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CheckoutPaymentInformationManagementV1GetPaymentInformationGet(), $fetch);
    }
    /**
     * Set payment information and place order for a specified cart.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CartsMinePaymentInformationPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost(\Kiboko\Magento\v2_1\Model\V1CartsMinePaymentInformationPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($$body), $fetch);
    }
    /**
     * Set payment information for a specified cart.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CartsMineSetPaymentInformationPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutPaymentInformationManagementV1SavePaymentInformationPost(\Kiboko\Magento\v2_1\Model\V1CartsMineSetPaymentInformationPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CheckoutPaymentInformationManagementV1SavePaymentInformationPost($$body), $fetch);
    }
    /**
     * List of links with associated samples
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\DownloadableLinkRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\DownloadableDataLinkInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableLinkRepositoryV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\DownloadableLinkRepositoryV1GetListGet($sku), $fetch);
    }
    /**
     * Update downloadable link of the given product (link type and its resources cannot be changed)
     *
     * @param string $sku 
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsSkuDownloadableLinksPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\DownloadableLinkRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableLinkRepositoryV1SavePost(string $sku, \Kiboko\Magento\v2_1\Model\V1ProductsSkuDownloadableLinksPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\DownloadableLinkRepositoryV1SavePost($sku, $$body), $fetch);
    }
    /**
     * Update downloadable link of the given product (link type and its resources cannot be changed)
     *
     * @param string $sku 
     * @param string $id 
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsSkuDownloadableLinksIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\DownloadableLinkRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableLinkRepositoryV1SavePut(string $sku, string $id, \Kiboko\Magento\v2_1\Model\V1ProductsSkuDownloadableLinksIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\DownloadableLinkRepositoryV1SavePut($sku, $id, $$body), $fetch);
    }
    /**
     * Delete downloadable link
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\DownloadableLinkRepositoryV1DeleteDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableLinkRepositoryV1DeleteDelete(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\DownloadableLinkRepositoryV1DeleteDelete($id), $fetch);
    }
    /**
     * List of samples for downloadable product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\DownloadableSampleRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\DownloadableDataSampleInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableSampleRepositoryV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\DownloadableSampleRepositoryV1GetListGet($sku), $fetch);
    }
    /**
     * Update downloadable sample of the given product
     *
     * @param string $sku 
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsSkuDownloadableLinksSamplesPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\DownloadableSampleRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableSampleRepositoryV1SavePost(string $sku, \Kiboko\Magento\v2_1\Model\V1ProductsSkuDownloadableLinksSamplesPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\DownloadableSampleRepositoryV1SavePost($sku, $$body), $fetch);
    }
    /**
     * Update downloadable sample of the given product
     *
     * @param string $sku 
     * @param string $id 
     * @param \Kiboko\Magento\v2_1\Model\V1ProductsSkuDownloadableLinksSamplesIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\DownloadableSampleRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableSampleRepositoryV1SavePut(string $sku, string $id, \Kiboko\Magento\v2_1\Model\V1ProductsSkuDownloadableLinksSamplesIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\DownloadableSampleRepositoryV1SavePut($sku, $id, $$body), $fetch);
    }
    /**
     * Delete downloadable sample
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\DownloadableSampleRepositoryV1DeleteDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableSampleRepositoryV1DeleteDelete(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\DownloadableSampleRepositoryV1DeleteDelete($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CheckoutAgreementsCheckoutAgreementsRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CheckoutAgreementsDataAgreementInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutAgreementsCheckoutAgreementsRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CheckoutAgreementsCheckoutAgreementsRepositoryV1GetListGet(), $fetch);
    }
    /**
     * Get all children for Configurable product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\ConfigurableProductLinkManagementV1GetChildrenGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductLinkManagementV1GetChildrenGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\ConfigurableProductLinkManagementV1GetChildrenGet($sku), $fetch);
    }
    /**
     * Remove configurable product option
     *
     * @param string $sku 
     * @param string $childSku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\ConfigurableProductLinkManagementV1RemoveChildDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\ConfigurableProductLinkManagementV1RemoveChildDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductLinkManagementV1RemoveChildDelete(string $sku, string $childSku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\ConfigurableProductLinkManagementV1RemoveChildDelete($sku, $childSku), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param \Kiboko\Magento\v2_1\Model\V1ConfigurableProductsSkuChildPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\ConfigurableProductLinkManagementV1AddChildPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductLinkManagementV1AddChildPost(string $sku, \Kiboko\Magento\v2_1\Model\V1ConfigurableProductsSkuChildPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\ConfigurableProductLinkManagementV1AddChildPost($sku, $$body), $fetch);
    }
    /**
     * Generate variation based on same product
     *
     * @param \Kiboko\Magento\v2_1\Model\V1ConfigurableProductsVariationPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\ConfigurableProductConfigurableProductManagementV1GenerateVariationPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CatalogDataProductInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductConfigurableProductManagementV1GenerateVariationPut(\Kiboko\Magento\v2_1\Model\V1ConfigurableProductsVariationPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\ConfigurableProductConfigurableProductManagementV1GenerateVariationPut($$body), $fetch);
    }
    /**
     * Remove option from configurable product
     *
     * @param string $sku 
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\ConfigurableProductOptionRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\ConfigurableProductOptionRepositoryV1DeleteByIdDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1DeleteByIdDelete(string $sku, int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\ConfigurableProductOptionRepositoryV1DeleteByIdDelete($sku, $id), $fetch);
    }
    /**
     * Get option for configurable product
     *
     * @param string $sku 
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\ConfigurableProductOptionRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\ConfigurableProductOptionRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ConfigurableProductDataOptionInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1GetGet(string $sku, int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\ConfigurableProductOptionRepositoryV1GetGet($sku, $id), $fetch);
    }
    /**
     * Save option
     *
     * @param string $sku 
     * @param string $id 
     * @param \Kiboko\Magento\v2_1\Model\V1ConfigurableProductsSkuOptionsIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\ConfigurableProductOptionRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\ConfigurableProductOptionRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\ConfigurableProductOptionRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1SavePut(string $sku, string $id, \Kiboko\Magento\v2_1\Model\V1ConfigurableProductsSkuOptionsIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\ConfigurableProductOptionRepositoryV1SavePut($sku, $id, $$body), $fetch);
    }
    /**
     * Get all options for configurable product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\ConfigurableProductOptionRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\ConfigurableProductOptionRepositoryV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ConfigurableProductDataOptionInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\ConfigurableProductOptionRepositoryV1GetListGet($sku), $fetch);
    }
    /**
     * Save option
     *
     * @param string $sku 
     * @param \Kiboko\Magento\v2_1\Model\V1ConfigurableProductsSkuOptionsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\ConfigurableProductOptionRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\ConfigurableProductOptionRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\ConfigurableProductOptionRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1SavePost(string $sku, \Kiboko\Magento\v2_1\Model\V1ConfigurableProductsSkuOptionsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\ConfigurableProductOptionRepositoryV1SavePost($sku, $$body), $fetch);
    }
    /**
     * Create or update tax rate
     *
     * @param \Kiboko\Magento\v2_1\Model\V1TaxRatesPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRateRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRateRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRateRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\TaxDataTaxRateInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1SavePost(\Kiboko\Magento\v2_1\Model\V1TaxRatesPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\TaxTaxRateRepositoryV1SavePost($$body), $fetch);
    }
    /**
     * Create or update tax rate
     *
     * @param \Kiboko\Magento\v2_1\Model\V1TaxRatesPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRateRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRateRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRateRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\TaxDataTaxRateInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1SavePut(\Kiboko\Magento\v2_1\Model\V1TaxRatesPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\TaxTaxRateRepositoryV1SavePut($$body), $fetch);
    }
    /**
     * Delete tax rate
     *
     * @param int $rateId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRateRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRateRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRateRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1DeleteByIdDelete(int $rateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\TaxTaxRateRepositoryV1DeleteByIdDelete($rateId), $fetch);
    }
    /**
     * Get tax rate
     *
     * @param int $rateId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRateRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRateRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\TaxDataTaxRateInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1GetGet(int $rateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\TaxTaxRateRepositoryV1GetGet($rateId), $fetch);
    }
    /**
     * Search TaxRates This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#TaxRateRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRateRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRateRepositoryV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\TaxDataTaxRateSearchResultsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\TaxTaxRateRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save TaxRule
     *
     * @param \Kiboko\Magento\v2_1\Model\V1TaxRulesPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRuleRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRuleRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRuleRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\TaxDataTaxRuleInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1SavePost(\Kiboko\Magento\v2_1\Model\V1TaxRulesPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\TaxTaxRuleRepositoryV1SavePost($$body), $fetch);
    }
    /**
     * Save TaxRule
     *
     * @param \Kiboko\Magento\v2_1\Model\V1TaxRulesPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRuleRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRuleRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRuleRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\TaxDataTaxRuleInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1SavePut(\Kiboko\Magento\v2_1\Model\V1TaxRulesPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\TaxTaxRuleRepositoryV1SavePut($$body), $fetch);
    }
    /**
     * Delete TaxRule
     *
     * @param int $ruleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRuleRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRuleRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRuleRepositoryV1DeleteByIdDeleteInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1DeleteByIdDelete(int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\TaxTaxRuleRepositoryV1DeleteByIdDelete($ruleId), $fetch);
    }
    /**
     * Get TaxRule
     *
     * @param int $ruleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRuleRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\TaxDataTaxRuleInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1GetGet(int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\TaxTaxRuleRepositoryV1GetGet($ruleId), $fetch);
    }
    /**
     * Search TaxRules This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#TaxRuleRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRuleRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxRuleRepositoryV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\TaxDataTaxRuleSearchResultsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\TaxTaxRuleRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create a Tax Class
     *
     * @param \Kiboko\Magento\v2_1\Model\V1TaxClassesPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxClassRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxClassRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxClassRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1SavePost(\Kiboko\Magento\v2_1\Model\V1TaxClassesPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\TaxTaxClassRepositoryV1SavePost($$body), $fetch);
    }
    /**
     * Delete a tax class with the given tax class id.
     *
     * @param int $taxClassId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxClassRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxClassRepositoryV1DeleteByIdDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1DeleteByIdDelete(int $taxClassId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\TaxTaxClassRepositoryV1DeleteByIdDelete($taxClassId), $fetch);
    }
    /**
     * Get a tax class with the given tax class id.
     *
     * @param int $taxClassId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxClassRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxClassRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\TaxDataTaxClassInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1GetGet(int $taxClassId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\TaxTaxClassRepositoryV1GetGet($taxClassId), $fetch);
    }
    /**
     * Create a Tax Class
     *
     * @param string $classId 
     * @param \Kiboko\Magento\v2_1\Model\V1TaxClassesClassIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxClassRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxClassRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxClassRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1SavePut(string $classId, \Kiboko\Magento\v2_1\Model\V1TaxClassesClassIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\TaxTaxClassRepositoryV1SavePut($classId, $$body), $fetch);
    }
    /**
     * Retrieve tax classes which match a specific criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#TaxClassRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxClassRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\TaxTaxClassRepositoryV1GetListGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\TaxDataTaxClassSearchResultsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\TaxTaxClassRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\CustomerBalanceBalanceManagementV1ApplyPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerBalanceBalanceManagementV1ApplyPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\CustomerBalanceBalanceManagementV1ApplyPost(), $fetch);
    }
    /**
     * Return GiftCard Account cards
     *
     * @param int $quoteId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\GiftCardAccountDataGiftCardAccountInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet(int $quoteId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet($quoteId), $fetch);
    }
    /**
     * 
     *
     * @param int $cartId 
     * @param \Kiboko\Magento\v2_1\Model\V1CartsCartIdGiftCardsPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut(int $cartId, \Kiboko\Magento\v2_1\Model\V1CartsCartIdGiftCardsPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut($cartId, $$body), $fetch);
    }
    /**
     * Remove GiftCard Account entity
     *
     * @param int $cartId 
     * @param string $giftCardCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete(int $cartId, string $giftCardCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete($cartId, $giftCardCode), $fetch);
    }
    /**
     * Remove GiftCard Account entity
     *
     * @param string $giftCardCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete(string $giftCardCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete($giftCardCode), $fetch);
    }
    /**
     * 
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CartsMineGiftCardsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost(\Kiboko\Magento\v2_1\Model\V1CartsMineGiftCardsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost($$body), $fetch);
    }
    /**
     * 
     *
     * @param string $giftCardCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftCardAccountGiftCardAccountManagementV1CheckGiftCardGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\GiftCardAccountGiftCardAccountManagementV1CheckGiftCardGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGiftCardAccountManagementV1CheckGiftCardGet(string $giftCardCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftCardAccountGiftCardAccountManagementV1CheckGiftCardGet($giftCardCode), $fetch);
    }
    /**
     * Remove GiftCard Account entity
     *
     * @param string $cartId 
     * @param string $giftCardCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete(string $cartId, string $giftCardCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete($cartId, $giftCardCode), $fetch);
    }
    /**
     * 
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\v2_1\Model\V1CartsGuestCartsCartIdGiftCardsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost(string $cartId, \Kiboko\Magento\v2_1\Model\V1CartsGuestCartsCartIdGiftCardsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost($cartId, $$body), $fetch);
    }
    /**
     * 
     *
     * @param string $cartId 
     * @param string $giftCardCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet(string $cartId, string $giftCardCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet($cartId, $giftCardCode), $fetch);
    }
    /**
     * Estimate shipping
     *
     * @param \Kiboko\Magento\v2_1\Model\V1GiftregistryMineEstimateShippingMethodsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftRegistryShippingMethodManagementV1EstimateByRegistryIdPost(\Kiboko\Magento\v2_1\Model\V1GiftregistryMineEstimateShippingMethodsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPost($$body), $fetch);
    }
    /**
     * Estimate shipping
     *
     * @param string $cartId The shopping cart ID.
     * @param \Kiboko\Magento\v2_1\Model\V1GuestGiftregistryCartIdEstimateShippingMethodsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost(string $cartId, \Kiboko\Magento\v2_1\Model\V1GuestGiftregistryCartIdEstimateShippingMethodsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost($cartId, $$body), $fetch);
    }
    /**
     * Return the gift message for a specified order.
     *
     * @param int $cartId The shopping cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftMessageCartRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageCartRepositoryV1GetGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftMessageCartRepositoryV1GetGet($cartId), $fetch);
    }
    /**
     * Set the gift message for an entire order.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\v2_1\Model\V1CartsCartIdGiftMessagePostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftMessageCartRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\GiftMessageCartRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageCartRepositoryV1SavePost(int $cartId, \Kiboko\Magento\v2_1\Model\V1CartsCartIdGiftMessagePostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftMessageCartRepositoryV1SavePost($cartId, $$body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftMessageCartRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageCartRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftMessageCartRepositoryV1GetGet(), $fetch);
    }
    /**
     * Set the gift message for an entire order.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1CartsMineGiftMessagePostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftMessageCartRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\GiftMessageCartRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageCartRepositoryV1SavePost(\Kiboko\Magento\v2_1\Model\V1CartsMineGiftMessagePostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftMessageCartRepositoryV1SavePost($$body), $fetch);
    }
    /**
     * Return the gift message for a specified item in a specified shopping cart.
     *
     * @param int $cartId The shopping cart ID.
     * @param int $itemId The item ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftMessageItemRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\GiftMessageItemRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageItemRepositoryV1GetGet(int $cartId, int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftMessageItemRepositoryV1GetGet($cartId, $itemId), $fetch);
    }
    /**
     * Set the gift message for a specified item in a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param int $itemId The item ID.
     * @param \Kiboko\Magento\v2_1\Model\V1CartsCartIdGiftMessageItemIdPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftMessageItemRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\GiftMessageItemRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageItemRepositoryV1SavePost(int $cartId, int $itemId, \Kiboko\Magento\v2_1\Model\V1CartsCartIdGiftMessageItemIdPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftMessageItemRepositoryV1SavePost($cartId, $itemId, $$body), $fetch);
    }
    /**
     * Return the gift message for a specified item in a specified shopping cart.
     *
     * @param int $itemId The item ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftMessageItemRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\GiftMessageItemRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageItemRepositoryV1GetGet(int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftMessageItemRepositoryV1GetGet($itemId), $fetch);
    }
    /**
     * Set the gift message for a specified item in a specified shopping cart.
     *
     * @param int $itemId The item ID.
     * @param \Kiboko\Magento\v2_1\Model\V1CartsMineGiftMessageItemIdPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftMessageItemRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\GiftMessageItemRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageItemRepositoryV1SavePost(int $itemId, \Kiboko\Magento\v2_1\Model\V1CartsMineGiftMessageItemIdPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftMessageItemRepositoryV1SavePost($itemId, $$body), $fetch);
    }
    /**
     * Return the gift message for a specified order.
     *
     * @param string $cartId The shopping cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Kiboko\Magento\v2_1\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageGuestCartRepositoryV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftMessageGuestCartRepositoryV1GetGet($cartId), $fetch);
    }
    /**
     * Set the gift message for an entire order.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdGiftMessagePostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftMessageGuestCartRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageGuestCartRepositoryV1SavePost(string $cartId, \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdGiftMessagePostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftMessageGuestCartRepositoryV1SavePost($cartId, $$body), $fetch);
    }
    /**
     * Return the gift message for a specified item in a specified shopping cart.
     *
     * @param string $cartId The shopping cart ID.
     * @param int $itemId The item ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftMessageGuestItemRepositoryV1GetGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageGuestItemRepositoryV1GetGet(string $cartId, int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftMessageGuestItemRepositoryV1GetGet($cartId, $itemId), $fetch);
    }
    /**
     * Set the gift message for a specified item in a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param int $itemId The item ID.
     * @param \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdGiftMessageItemIdPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftMessageGuestItemRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageGuestItemRepositoryV1SavePost(string $cartId, int $itemId, \Kiboko\Magento\v2_1\Model\V1GuestCartsCartIdGiftMessageItemIdPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftMessageGuestItemRepositoryV1SavePost($cartId, $itemId, $$body), $fetch);
    }
    /**
     * Delete gift wrapping
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftWrappingWrappingRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\GiftWrappingWrappingRepositoryV1DeleteByIdDeleteBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftWrappingWrappingRepositoryV1DeleteByIdDelete(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftWrappingWrappingRepositoryV1DeleteByIdDelete($id), $fetch);
    }
    /**
     * Return data object for specified wrapping ID and store.
     *
     * @param int $id 
     * @param array $queryParameters {
     *     @var int $storeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftWrappingWrappingRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\GiftWrappingDataWrappingInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftWrappingWrappingRepositoryV1GetGet(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftWrappingWrappingRepositoryV1GetGet($id, $queryParameters), $fetch);
    }
    /**
     * Return list of gift wrapping data objects based on search criteria
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftWrappingWrappingRepositoryV1GetListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\GiftWrappingDataWrappingSearchResultsInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftWrappingWrappingRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftWrappingWrappingRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create/Update new gift wrapping with data object values
     *
     * @param \Kiboko\Magento\v2_1\Model\V1GiftWrappingsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftWrappingWrappingRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\GiftWrappingWrappingRepositoryV1SavePostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\GiftWrappingDataWrappingInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftWrappingWrappingRepositoryV1SavePost(\Kiboko\Magento\v2_1\Model\V1GiftWrappingsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftWrappingWrappingRepositoryV1SavePost($$body), $fetch);
    }
    /**
     * Create/Update new gift wrapping with data object values
     *
     * @param string $wrappingId 
     * @param \Kiboko\Magento\v2_1\Model\V1GiftWrappingsWrappingIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\GiftWrappingWrappingRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\GiftWrappingWrappingRepositoryV1SavePutBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\GiftWrappingDataWrappingInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftWrappingWrappingRepositoryV1SavePut(string $wrappingId, \Kiboko\Magento\v2_1\Model\V1GiftWrappingsWrappingIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\GiftWrappingWrappingRepositoryV1SavePut($wrappingId, $$body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\RewardRewardManagementV1SetPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rewardRewardManagementV1SetPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\RewardRewardManagementV1SetPost(), $fetch);
    }
    /**
     * Get track list
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\RmaTrackManagementV1GetTracksGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\RmaDataTrackSearchResultInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaTrackManagementV1GetTracksGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\RmaTrackManagementV1GetTracksGet($id), $fetch);
    }
    /**
     * Add track
     *
     * @param int $id 
     * @param \Kiboko\Magento\v2_1\Model\V1ReturnsIdTrackingNumbersPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\RmaTrackManagementV1AddTrackPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaTrackManagementV1AddTrackPost(int $id, \Kiboko\Magento\v2_1\Model\V1ReturnsIdTrackingNumbersPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\RmaTrackManagementV1AddTrackPost($id, $$body), $fetch);
    }
    /**
     * Remove track by id
     *
     * @param int $id 
     * @param int $trackId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\RmaTrackManagementV1RemoveTrackByIdDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaTrackManagementV1RemoveTrackByIdDelete(int $id, int $trackId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\RmaTrackManagementV1RemoveTrackByIdDelete($id, $trackId), $fetch);
    }
    /**
     * Get shipping label int the PDF format
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\RmaTrackManagementV1GetShippingLabelPdfGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaTrackManagementV1GetShippingLabelPdfGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\RmaTrackManagementV1GetShippingLabelPdfGet($id), $fetch);
    }
    /**
     * Delete RMA
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_1\Model\V1ReturnsIdDeleteBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\RmaRmaRepositoryV1DeleteDeleteUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaRepositoryV1DeleteDelete(string $id, \Kiboko\Magento\v2_1\Model\V1ReturnsIdDeleteBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\RmaRmaRepositoryV1DeleteDelete($id, $$body), $fetch);
    }
    /**
     * Return data object for specified RMA id
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\RmaRmaRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\RmaDataRmaInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\RmaRmaRepositoryV1GetGet($id), $fetch);
    }
    /**
     * Save RMA
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_1\Model\V1ReturnsIdPutBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\RmaRmaManagementV1SaveRmaPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\RmaDataRmaInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaManagementV1SaveRmaPut(string $id, \Kiboko\Magento\v2_1\Model\V1ReturnsIdPutBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\RmaRmaManagementV1SaveRmaPut($id, $$body), $fetch);
    }
    /**
     * Comments list
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\RmaCommentManagementV1CommentsListGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\RmaDataCommentSearchResultInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaCommentManagementV1CommentsListGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\RmaCommentManagementV1CommentsListGet($id), $fetch);
    }
    /**
     * Add comment
     *
     * @param string $id 
     * @param \Kiboko\Magento\v2_1\Model\V1ReturnsIdCommentsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\RmaCommentManagementV1AddCommentPostUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\RmaCommentManagementV1AddCommentPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaCommentManagementV1AddCommentPost(string $id, \Kiboko\Magento\v2_1\Model\V1ReturnsIdCommentsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\RmaCommentManagementV1AddCommentPost($id, $$body), $fetch);
    }
    /**
     * Return list of rma data objects based on search criteria
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][][filters][][field] Field
     *     @var string $searchCriteria[filterGroups][][filters][][value] Value
     *     @var string $searchCriteria[filterGroups][][filters][][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\RmaRmaManagementV1SearchGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\RmaDataRmaSearchResultInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaManagementV1SearchGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\RmaRmaManagementV1SearchGet($queryParameters), $fetch);
    }
    /**
     * Save RMA
     *
     * @param \Kiboko\Magento\v2_1\Model\V1ReturnsPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\RmaRmaManagementV1SaveRmaPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\RmaDataRmaInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaManagementV1SaveRmaPost(\Kiboko\Magento\v2_1\Model\V1ReturnsPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\RmaRmaManagementV1SaveRmaPost($$body), $fetch);
    }
    /**
     * Retrieve attribute metadata.
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\RmaRmaAttributesManagementV1GetAttributeMetadataGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataAttributeMetadataInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaAttributesManagementV1GetAttributeMetadataGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\RmaRmaAttributesManagementV1GetAttributeMetadataGet($attributeCode), $fetch);
    }
    /**
     * Retrieve all attributes filtered by form code
     *
     * @param string $formCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\RmaRmaAttributesManagementV1GetAttributesGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaAttributesManagementV1GetAttributesGet(string $formCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\RmaRmaAttributesManagementV1GetAttributesGet($formCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\RmaRmaAttributesManagementV1GetAllAttributesMetadataGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaAttributesManagementV1GetAllAttributesMetadataGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\RmaRmaAttributesManagementV1GetAllAttributesMetadataGet(), $fetch);
    }
    /**
     * Get custom attribute metadata for the given Data object's attribute set
     *
     * @param array $queryParameters {
     *     @var string $dataObjectClassName Data object class name
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\RmaRmaAttributesManagementV1GetCustomAttributesMetadataGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\FrameworkMetadataObjectInterface[]|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function rmaRmaAttributesManagementV1GetCustomAttributesMetadataGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\RmaRmaAttributesManagementV1GetCustomAttributesMetadataGet($queryParameters), $fetch);
    }
    /**
     * Create access token for admin given the admin credentials.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1IntegrationAdminTokenPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function integrationAdminTokenServiceV1CreateAdminAccessTokenPost(\Kiboko\Magento\v2_1\Model\V1IntegrationAdminTokenPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPost($$body), $fetch);
    }
    /**
     * Create access token for admin given the customer credentials.
     *
     * @param \Kiboko\Magento\v2_1\Model\V1IntegrationCustomerTokenPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\IntegrationCustomerTokenServiceV1CreateCustomerAccessTokenPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function integrationCustomerTokenServiceV1CreateCustomerAccessTokenPost(\Kiboko\Magento\v2_1\Model\V1IntegrationCustomerTokenPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\IntegrationCustomerTokenServiceV1CreateCustomerAccessTokenPost($$body), $fetch);
    }
    /**
     * Proxy handler for guest place order
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\v2_1\Model\V1WorldpayGuestCartsCartIdPaymentInformationPostBody $$body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\v2_1\Exception\WorldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPostBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost(string $cartId, \Kiboko\Magento\v2_1\Model\V1WorldpayGuestCartsCartIdPaymentInformationPostBody $$body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\v2_1\Endpoint\WorldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost($cartId, $$body), $fetch);
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
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Kiboko\Magento\v2_1\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}