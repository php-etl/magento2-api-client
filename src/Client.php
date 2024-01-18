<?php

namespace Kiboko\Magento;

class Client extends \Kiboko\Magento\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\StoreDataStoreInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1StoreStoreViews(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1StoreStoreViews(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\StoreDataGroupInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1StoreStoreGroups(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1StoreStoreGroups(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\StoreDataWebsiteInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1StoreWebsites(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1StoreWebsites(), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $storeCodes 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\StoreDataStoreConfigInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1StoreStoreConfigs(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1StoreStoreConfigs($queryParameters), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1AdobestockSearchUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1AdobestockSearchInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\FrameworkSearchSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1AdobestockSearch(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1AdobestockSearch($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\DirectoryDataCurrencyInformationInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1DirectoryCurrency(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1DirectoryCurrency(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\DirectoryDataCountryInformationInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1DirectoryCountries(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1DirectoryCountries(), $fetch);
    }
    /**
     * Get country and region information for the store.
     *
     * @param string $countryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1DirectoryCountriesCountryIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\DirectoryDataCountryInformationInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1DirectoryCountriesCountryId(string $countryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1DirectoryCountriesCountryId($countryId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1ModulesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1Modules(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1Modules(), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1EavAttributesetsListUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeSetSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1EavAttributesetsList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1EavAttributesetsList($queryParameters), $fetch);
    }
    /**
     * Remove attribute set by given ID
     *
     * @param int $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1EavAttributesetsAttributeSetIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1EavAttributesetsAttributeSetIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1EavAttributesetsAttributeSetId(int $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1EavAttributesetsAttributeSetId($attributeSetId), $fetch);
    }
    /**
     * Retrieve attribute set information based on given ID
     *
     * @param int $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1EavAttributesetsAttributeSetIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1EavAttributesetsAttributeSetIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeSetInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1EavAttributesetsAttributeSetId(int $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1EavAttributesetsAttributeSetId($attributeSetId), $fetch);
    }
    /**
     * Save attribute set data
     *
     * @param string $attributeSetId 
     * @param \Kiboko\Magento\Model\V1EavAttributeSetsAttributeSetIdPutBody $putV1EavAttributesetsAttributeSetIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1EavAttributesetsAttributeSetIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1EavAttributesetsAttributeSetIdBadRequestException
     * @throws \Kiboko\Magento\Exception\PutV1EavAttributesetsAttributeSetIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeSetInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1EavAttributesetsAttributeSetId(string $attributeSetId, \Kiboko\Magento\Model\V1EavAttributeSetsAttributeSetIdPutBody $putV1EavAttributesetsAttributeSetIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1EavAttributesetsAttributeSetId($attributeSetId, $putV1EavAttributesetsAttributeSetIdBody), $fetch);
    }
    /**
     * Create attribute set from data
     *
     * @param \Kiboko\Magento\Model\V1EavAttributeSetsPostBody $postV1EavAttributesetsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1EavAttributesetsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1EavAttributesetsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeSetInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1EavAttributesets(\Kiboko\Magento\Model\V1EavAttributeSetsPostBody $postV1EavAttributesetsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1EavAttributesets($postV1EavAttributesetsBody), $fetch);
    }
    /**
     * Delete customer group by ID.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1CustomerGroupsIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1CustomerGroupsIdBadRequestException
     * @throws \Kiboko\Magento\Exception\DeleteV1CustomerGroupsIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1CustomerGroupsId(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1CustomerGroupsId($id), $fetch);
    }
    /**
     * Get customer group by group ID.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CustomerGroupsIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CustomerGroupsIdBadRequestException
     * @throws \Kiboko\Magento\Exception\GetV1CustomerGroupsIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataGroupInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomerGroupsId(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CustomerGroupsId($id), $fetch);
    }
    /**
     * Save customer group.
     *
     * @param string $id 
     * @param \Kiboko\Magento\Model\V1CustomerGroupsIdPutBody $putV1CustomerGroupsIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CustomerGroupsIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CustomerGroupsIdBadRequestException
     * @throws \Kiboko\Magento\Exception\PutV1CustomerGroupsIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataGroupInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CustomerGroupsId(string $id, \Kiboko\Magento\Model\V1CustomerGroupsIdPutBody $putV1CustomerGroupsIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CustomerGroupsId($id, $putV1CustomerGroupsIdBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1CustomerGroupsSearchUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CustomerGroupsSearchInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataGroupSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomerGroupsSearch(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CustomerGroupsSearch($queryParameters), $fetch);
    }
    /**
     * Save customer group.
     *
     * @param \Kiboko\Magento\Model\V1CustomerGroupsPostBody $postV1CustomerGroupsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CustomerGroupsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CustomerGroupsBadRequestException
     * @throws \Kiboko\Magento\Exception\PostV1CustomerGroupsInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataGroupInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CustomerGroups(\Kiboko\Magento\Model\V1CustomerGroupsPostBody $postV1CustomerGroupsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CustomerGroups($postV1CustomerGroupsBody), $fetch);
    }
    /**
     * Get default customer group.
     *
     * @param int $storeId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CustomerGroupsDefaultStoreIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CustomerGroupsDefaultStoreIdBadRequestException
     * @throws \Kiboko\Magento\Exception\GetV1CustomerGroupsDefaultStoreIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataGroupInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomerGroupsDefaultStoreId(int $storeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CustomerGroupsDefaultStoreId($storeId), $fetch);
    }
    /**
     * Get default customer group.
     *
     * @param array $queryParameters {
     *     @var int $storeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CustomerGroupsDefaultUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CustomerGroupsDefaultBadRequestException
     * @throws \Kiboko\Magento\Exception\GetV1CustomerGroupsDefaultInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataGroupInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomerGroupsDefault(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CustomerGroupsDefault($queryParameters), $fetch);
    }
    /**
     * Check if customer group can be deleted.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CustomerGroupsIdPermissionsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CustomerGroupsIdPermissionsBadRequestException
     * @throws \Kiboko\Magento\Exception\GetV1CustomerGroupsIdPermissionsInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomerGroupsIdPermissions(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CustomerGroupsIdPermissions($id), $fetch);
    }
    /**
     * Set system default customer group.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CustomerGroupsDefaultIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CustomerGroupsDefaultIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\PutV1CustomerGroupsDefaultIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CustomerGroupsDefaultId(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CustomerGroupsDefaultId($id), $fetch);
    }
    /**
     * Retrieve attribute metadata.
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1AttributeMetadataCustomerAttributeAttributeCodeUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1AttributeMetadataCustomerAttributeAttributeCodeBadRequestException
     * @throws \Kiboko\Magento\Exception\GetV1AttributeMetadataCustomerAttributeAttributeCodeInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAttributeMetadataInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1AttributeMetadataCustomerAttributeAttributeCode(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1AttributeMetadataCustomerAttributeAttributeCode($attributeCode), $fetch);
    }
    /**
     * Retrieve all attributes filtered by form code
     *
     * @param string $formCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1AttributeMetadataCustomerFormFormCodeUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1AttributeMetadataCustomerFormFormCodeInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1AttributeMetadataCustomerFormFormCode(string $formCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1AttributeMetadataCustomerFormFormCode($formCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1AttributeMetadataCustomerUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1AttributeMetadataCustomerInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1AttributeMetadataCustomer(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1AttributeMetadataCustomer(), $fetch);
    }
    /**
     * Get custom attributes metadata for the given data interface.
     *
     * @param array $queryParameters {
     *     @var string $dataInterfaceName 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1AttributeMetadataCustomerCustomUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1AttributeMetadataCustomerCustomInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1AttributeMetadataCustomerCustom(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1AttributeMetadataCustomerCustom($queryParameters), $fetch);
    }
    /**
     * Retrieve attribute metadata.
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1AttributeMetadataCustomerAddressAttributeAttributeCodeUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1AttributeMetadataCustomerAddressAttributeAttributeCodeBadRequestException
     * @throws \Kiboko\Magento\Exception\GetV1AttributeMetadataCustomerAddressAttributeAttributeCodeInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAttributeMetadataInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1AttributeMetadataCustomerAddressAttributeAttributeCode(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1AttributeMetadataCustomerAddressAttributeAttributeCode($attributeCode), $fetch);
    }
    /**
     * Retrieve all attributes filtered by form code
     *
     * @param string $formCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1AttributeMetadataCustomerAddressFormFormCodeUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1AttributeMetadataCustomerAddressFormFormCodeInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1AttributeMetadataCustomerAddressFormFormCode(string $formCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1AttributeMetadataCustomerAddressFormFormCode($formCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1AttributeMetadataCustomerAddressUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1AttributeMetadataCustomerAddressInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1AttributeMetadataCustomerAddress(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1AttributeMetadataCustomerAddress(), $fetch);
    }
    /**
     * Get custom attributes metadata for the given data interface.
     *
     * @param array $queryParameters {
     *     @var string $dataInterfaceName 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1AttributeMetadataCustomerAddressCustomUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1AttributeMetadataCustomerAddressCustomInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1AttributeMetadataCustomerAddressCustom(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1AttributeMetadataCustomerAddressCustom($queryParameters), $fetch);
    }
    /**
     * Delete customer by Customer ID.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1CustomersCustomerIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1CustomersCustomerIdBadRequestException
     * @throws \Kiboko\Magento\Exception\DeleteV1CustomersCustomerIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1CustomersCustomerId(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1CustomersCustomerId($customerId), $fetch);
    }
    /**
     * Get customer by Customer ID.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CustomersCustomerIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CustomersCustomerIdBadRequestException
     * @throws \Kiboko\Magento\Exception\GetV1CustomersCustomerIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataCustomerInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomersCustomerId(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CustomersCustomerId($customerId), $fetch);
    }
    /**
     * Create or update a customer.
     *
     * @param string $customerId 
     * @param \Kiboko\Magento\Model\V1CustomersCustomerIdPutBody $putV1CustomersCustomerIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CustomersCustomerIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CustomersCustomerIdBadRequestException
     * @throws \Kiboko\Magento\Exception\PutV1CustomersCustomerIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataCustomerInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CustomersCustomerId(string $customerId, \Kiboko\Magento\Model\V1CustomersCustomerIdPutBody $putV1CustomersCustomerIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CustomersCustomerId($customerId, $putV1CustomersCustomerIdBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CustomersMeUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CustomersMeBadRequestException
     * @throws \Kiboko\Magento\Exception\GetV1CustomersMeInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataCustomerInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomersMe(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CustomersMe(), $fetch);
    }
    /**
     * Create or update a customer.
     *
     * @param \Kiboko\Magento\Model\V1CustomersMePutBody $putV1CustomersMeBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CustomersMeUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CustomersMeBadRequestException
     * @throws \Kiboko\Magento\Exception\PutV1CustomersMeInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataCustomerInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CustomersMe(\Kiboko\Magento\Model\V1CustomersMePutBody $putV1CustomersMeBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CustomersMe($putV1CustomersMeBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1CustomersSearchUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CustomersSearchInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataCustomerSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomersSearch(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CustomersSearch($queryParameters), $fetch);
    }
    /**
     * Create customer account. Perform necessary business operations like sending email.
     *
     * @param \Kiboko\Magento\Model\V1CustomersPostBody $postV1CustomersBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CustomersInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataCustomerInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1Customers(\Kiboko\Magento\Model\V1CustomersPostBody $postV1CustomersBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1Customers($postV1CustomersBody), $fetch);
    }
    /**
     * Activate a customer account using a key that was sent in a confirmation email.
     *
     * @param \Kiboko\Magento\Model\V1CustomersMeActivatePutBody $putV1CustomersMeActivateBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CustomersMeActivateUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CustomersMeActivateInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataCustomerInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CustomersMeActivate(\Kiboko\Magento\Model\V1CustomersMeActivatePutBody $putV1CustomersMeActivateBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CustomersMeActivate($putV1CustomersMeActivateBody), $fetch);
    }
    /**
     * Activate a customer account using a key that was sent in a confirmation email.
     *
     * @param string $email 
     * @param \Kiboko\Magento\Model\V1CustomersEmailActivatePutBody $putV1CustomersEmailActivateBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CustomersEmailActivateUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CustomersEmailActivateInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataCustomerInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CustomersEmailActivate(string $email, \Kiboko\Magento\Model\V1CustomersEmailActivatePutBody $putV1CustomersEmailActivateBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CustomersEmailActivate($email, $putV1CustomersEmailActivateBody), $fetch);
    }
    /**
     * Change customer password.
     *
     * @param \Kiboko\Magento\Model\V1CustomersMePasswordPutBody $putV1CustomersMePasswordBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CustomersMePasswordUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CustomersMePasswordInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CustomersMePassword(\Kiboko\Magento\Model\V1CustomersMePasswordPutBody $putV1CustomersMePasswordBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CustomersMePassword($putV1CustomersMePasswordBody), $fetch);
    }
    /**
     * Check if password reset token is valid.
     *
     * @param int $customerId If null is given then a customer will be matched by the RP token.
     * @param string $resetPasswordLinkToken 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CustomersCustomerIdPasswordResetLinkTokenResetPasswordLinkTokenBadRequestException
     * @throws \Kiboko\Magento\Exception\GetV1CustomersCustomerIdPasswordResetLinkTokenResetPasswordLinkTokenInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomersCustomerIdPasswordResetLinkTokenResetPasswordLinkToken(int $customerId, string $resetPasswordLinkToken, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CustomersCustomerIdPasswordResetLinkTokenResetPasswordLinkToken($customerId, $resetPasswordLinkToken), $fetch);
    }
    /**
     * Send an email to the customer with a password reset link.
     *
     * @param \Kiboko\Magento\Model\V1CustomersPasswordPutBody $putV1CustomersPasswordBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CustomersPasswordInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CustomersPassword(\Kiboko\Magento\Model\V1CustomersPasswordPutBody $putV1CustomersPasswordBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CustomersPassword($putV1CustomersPasswordBody), $fetch);
    }
    /**
     * Reset customer password.
     *
     * @param \Kiboko\Magento\Model\V1CustomersResetPasswordPostBody $postV1CustomersResetPasswordBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CustomersResetPasswordInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CustomersResetPassword(\Kiboko\Magento\Model\V1CustomersResetPasswordPostBody $postV1CustomersResetPasswordBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CustomersResetPassword($postV1CustomersResetPasswordBody), $fetch);
    }
    /**
     * Gets the account confirmation status.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CustomersCustomerIdConfirmUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CustomersCustomerIdConfirmInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomersCustomerIdConfirm(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CustomersCustomerIdConfirm($customerId), $fetch);
    }
    /**
     * Resend confirmation email.
     *
     * @param \Kiboko\Magento\Model\V1CustomersConfirmPostBody $postV1CustomersConfirmBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CustomersConfirmUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CustomersConfirmInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CustomersConfirm(\Kiboko\Magento\Model\V1CustomersConfirmPostBody $postV1CustomersConfirmBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CustomersConfirm($postV1CustomersConfirmBody), $fetch);
    }
    /**
     * Validate customer data.
     *
     * @param \Kiboko\Magento\Model\V1CustomersValidatePutBody $putV1CustomersValidateBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CustomersValidateUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CustomersValidateInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataValidationResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CustomersValidate(\Kiboko\Magento\Model\V1CustomersValidatePutBody $putV1CustomersValidateBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CustomersValidate($putV1CustomersValidateBody), $fetch);
    }
    /**
     * Check if customer can be deleted.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CustomersCustomerIdPermissionsReadonlyUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CustomersCustomerIdPermissionsReadonlyBadRequestException
     * @throws \Kiboko\Magento\Exception\GetV1CustomersCustomerIdPermissionsReadonlyInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomersCustomerIdPermissionsReadonly(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CustomersCustomerIdPermissionsReadonly($customerId), $fetch);
    }
    /**
     * Check if given email is associated with a customer account in given website.
     *
     * @param \Kiboko\Magento\Model\V1CustomersIsEmailAvailablePostBody $postV1CustomersIsEmailAvailableBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CustomersIsEmailAvailableInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CustomersIsEmailAvailable(\Kiboko\Magento\Model\V1CustomersIsEmailAvailablePostBody $postV1CustomersIsEmailAvailableBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CustomersIsEmailAvailable($postV1CustomersIsEmailAvailableBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CustomersMeBillingAddressUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CustomersMeBillingAddressBadRequestException
     * @throws \Kiboko\Magento\Exception\GetV1CustomersMeBillingAddressInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAddressInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomersMeBillingAddress(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CustomersMeBillingAddress(), $fetch);
    }
    /**
     * Retrieve default billing address for the given customerId.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CustomersCustomerIdBillingAddressUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CustomersCustomerIdBillingAddressBadRequestException
     * @throws \Kiboko\Magento\Exception\GetV1CustomersCustomerIdBillingAddressInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAddressInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomersCustomerIdBillingAddress(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CustomersCustomerIdBillingAddress($customerId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CustomersMeShippingAddressUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CustomersMeShippingAddressBadRequestException
     * @throws \Kiboko\Magento\Exception\GetV1CustomersMeShippingAddressInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAddressInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomersMeShippingAddress(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CustomersMeShippingAddress(), $fetch);
    }
    /**
     * Retrieve default shipping address for the given customerId.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CustomersCustomerIdShippingAddressUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CustomersCustomerIdShippingAddressBadRequestException
     * @throws \Kiboko\Magento\Exception\GetV1CustomersCustomerIdShippingAddressInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAddressInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomersCustomerIdShippingAddress(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CustomersCustomerIdShippingAddress($customerId), $fetch);
    }
    /**
     * Retrieve customer address.
     *
     * @param int $addressId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CustomersAddressesAddressIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CustomersAddressesAddressIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAddressInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CustomersAddressesAddressId(int $addressId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CustomersAddressesAddressId($addressId), $fetch);
    }
    /**
     * Delete customer address by ID.
     *
     * @param int $addressId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1AddressesAddressIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1AddressesAddressIdBadRequestException
     * @throws \Kiboko\Magento\Exception\DeleteV1AddressesAddressIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1AddressesAddressId(int $addressId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1AddressesAddressId($addressId), $fetch);
    }
    /**
     * Delete page by ID.
     *
     * @param int $pageId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1CmsPagePageIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1CmsPagePageIdBadRequestException
     * @throws \Kiboko\Magento\Exception\DeleteV1CmsPagePageIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1CmsPagePageId(int $pageId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1CmsPagePageId($pageId), $fetch);
    }
    /**
     * Retrieve page.
     *
     * @param int $pageId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CmsPagePageIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CmsDataPageInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CmsPagePageId(int $pageId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CmsPagePageId($pageId), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1CmsPageSearchUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CmsPageSearchInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CmsDataPageSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CmsPageSearch(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CmsPageSearch($queryParameters), $fetch);
    }
    /**
     * Save page.
     *
     * @param \Kiboko\Magento\Model\V1CmsPagePostBody $postV1CmsPageBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CmsPageUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CmsPageInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CmsDataPageInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CmsPage(\Kiboko\Magento\Model\V1CmsPagePostBody $postV1CmsPageBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CmsPage($postV1CmsPageBody), $fetch);
    }
    /**
     * Save page.
     *
     * @param string $id 
     * @param \Kiboko\Magento\Model\V1CmsPageIdPutBody $putV1CmsPageIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CmsPageIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CmsPageIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CmsDataPageInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CmsPageId(string $id, \Kiboko\Magento\Model\V1CmsPageIdPutBody $putV1CmsPageIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CmsPageId($id, $putV1CmsPageIdBody), $fetch);
    }
    /**
     * Delete block by ID.
     *
     * @param string $blockId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1CmsBlockBlockIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1CmsBlockBlockIdBadRequestException
     * @throws \Kiboko\Magento\Exception\DeleteV1CmsBlockBlockIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1CmsBlockBlockId(string $blockId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1CmsBlockBlockId($blockId), $fetch);
    }
    /**
     * Retrieve block.
     *
     * @param string $blockId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CmsBlockBlockIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CmsDataBlockInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CmsBlockBlockId(string $blockId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CmsBlockBlockId($blockId), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1CmsBlockSearchUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CmsBlockSearchInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CmsDataBlockSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CmsBlockSearch(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CmsBlockSearch($queryParameters), $fetch);
    }
    /**
     * Save block.
     *
     * @param \Kiboko\Magento\Model\V1CmsBlockPostBody $postV1CmsBlockBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CmsBlockUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CmsBlockInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CmsDataBlockInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CmsBlock(\Kiboko\Magento\Model\V1CmsBlockPostBody $postV1CmsBlockBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CmsBlock($postV1CmsBlockBody), $fetch);
    }
    /**
     * Save block.
     *
     * @param string $id 
     * @param \Kiboko\Magento\Model\V1CmsBlockIdPutBody $putV1CmsBlockIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CmsBlockIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CmsBlockIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CmsDataBlockInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CmsBlockId(string $id, \Kiboko\Magento\Model\V1CmsBlockIdPutBody $putV1CmsBlockIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CmsBlockId($id, $putV1CmsBlockIdBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\FrameworkSearchSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1Search(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1Search($queryParameters), $fetch);
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
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1Products(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1Products($queryParameters), $fetch);
    }
    /**
     * Create product
     *
     * @param \Kiboko\Magento\Model\V1ProductsPostBody $postV1ProductsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1ProductsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1Products(\Kiboko\Magento\Model\V1ProductsPostBody $postV1ProductsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1Products($postV1ProductsBody), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsSkuUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsSkuBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1ProductsSku(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1ProductsSku($sku), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1ProductsSkuBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ProductsSku(string $sku, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ProductsSku($sku, $queryParameters), $fetch);
    }
    /**
     * Create product
     *
     * @param string $sku 
     * @param \Kiboko\Magento\Model\V1ProductsSkuPutBody $putV1ProductsSkuBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1ProductsSkuUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1ProductsSkuBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1ProductsSku(string $sku, \Kiboko\Magento\Model\V1ProductsSkuPutBody $putV1ProductsSkuBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1ProductsSku($sku, $putV1ProductsSkuBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1ProductsAttributesTypesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductAttributeTypeInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ProductsAttributesTypes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ProductsAttributesTypes(), $fetch);
    }
    /**
     * Delete Attribute by id
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsAttributesAttributeCodeUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsAttributesAttributeCodeBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1ProductsAttributesAttributeCode(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1ProductsAttributesAttributeCode($attributeCode), $fetch);
    }
    /**
     * Retrieve specific attribute
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1ProductsAttributesAttributeCodeBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductAttributeInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ProductsAttributesAttributeCode(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ProductsAttributesAttributeCode($attributeCode), $fetch);
    }
    /**
     * Save attribute data
     *
     * @param string $attributeCode 
     * @param \Kiboko\Magento\Model\V1ProductsAttributesAttributeCodePutBody $putV1ProductsAttributesAttributeCodeBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1ProductsAttributesAttributeCodeUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1ProductsAttributesAttributeCodeBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductAttributeInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1ProductsAttributesAttributeCode(string $attributeCode, \Kiboko\Magento\Model\V1ProductsAttributesAttributeCodePutBody $putV1ProductsAttributesAttributeCodeBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1ProductsAttributesAttributeCode($attributeCode, $putV1ProductsAttributesAttributeCodeBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1ProductsAttributesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductAttributeSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ProductsAttributes(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ProductsAttributes($queryParameters), $fetch);
    }
    /**
     * Save attribute data
     *
     * @param \Kiboko\Magento\Model\V1ProductsAttributesPostBody $postV1ProductsAttributesBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsAttributesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1ProductsAttributesBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductAttributeInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsAttributes(\Kiboko\Magento\Model\V1ProductsAttributesPostBody $postV1ProductsAttributesBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsAttributes($postV1ProductsAttributesBody), $fetch);
    }
    /**
     * Retrieve specific attribute
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CategoriesAttributesAttributeCodeUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataCategoryAttributeInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CategoriesAttributesAttributeCode(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CategoriesAttributesAttributeCode($attributeCode), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1CategoriesAttributesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataCategoryAttributeSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CategoriesAttributes(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CategoriesAttributes($queryParameters), $fetch);
    }
    /**
     * Retrieve list of attribute options
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CategoriesAttributesAttributeCodeOptionsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CategoriesAttributesAttributeCodeOptionsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeOptionInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CategoriesAttributesAttributeCodeOptions(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CategoriesAttributesAttributeCodeOptions($attributeCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductTypeInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ProductsTypes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ProductsTypes(), $fetch);
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
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeSetSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ProductsAttributesetsSetsList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ProductsAttributesetsSetsList($queryParameters), $fetch);
    }
    /**
     * Remove attribute set by given ID
     *
     * @param int $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsAttributesetsAttributeSetIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsAttributesetsAttributeSetIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1ProductsAttributesetsAttributeSetId(int $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1ProductsAttributesetsAttributeSetId($attributeSetId), $fetch);
    }
    /**
     * Retrieve attribute set information based on given ID
     *
     * @param int $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1ProductsAttributesetsAttributeSetIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeSetInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ProductsAttributesetsAttributeSetId(int $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ProductsAttributesetsAttributeSetId($attributeSetId), $fetch);
    }
    /**
     * Save attribute set data
     *
     * @param string $attributeSetId 
     * @param \Kiboko\Magento\Model\V1ProductsAttributeSetsAttributeSetIdPutBody $putV1ProductsAttributesetsAttributeSetIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1ProductsAttributesetsAttributeSetIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1ProductsAttributesetsAttributeSetIdBadRequestException
     * @throws \Kiboko\Magento\Exception\PutV1ProductsAttributesetsAttributeSetIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeSetInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1ProductsAttributesetsAttributeSetId(string $attributeSetId, \Kiboko\Magento\Model\V1ProductsAttributeSetsAttributeSetIdPutBody $putV1ProductsAttributesetsAttributeSetIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1ProductsAttributesetsAttributeSetId($attributeSetId, $putV1ProductsAttributesetsAttributeSetIdBody), $fetch);
    }
    /**
     * Create attribute set from data
     *
     * @param \Kiboko\Magento\Model\V1ProductsAttributeSetsPostBody $postV1ProductsAttributesetsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsAttributesetsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1ProductsAttributesetsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeSetInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsAttributesets(\Kiboko\Magento\Model\V1ProductsAttributeSetsPostBody $postV1ProductsAttributesetsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsAttributesets($postV1ProductsAttributesetsBody), $fetch);
    }
    /**
     * Retrieve related attributes based on given attribute set ID
     *
     * @param string $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1ProductsAttributesetsAttributeSetIdAttributesBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductAttributeInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ProductsAttributesetsAttributeSetIdAttributes(string $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ProductsAttributesetsAttributeSetIdAttributes($attributeSetId), $fetch);
    }
    /**
     * Assign attribute to attribute set
     *
     * @param \Kiboko\Magento\Model\V1ProductsAttributeSetsAttributesPostBody $postV1ProductsAttributesetsAttributesBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsAttributesetsAttributesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1ProductsAttributesetsAttributesBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsAttributesetsAttributes(\Kiboko\Magento\Model\V1ProductsAttributeSetsAttributesPostBody $postV1ProductsAttributesetsAttributesBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsAttributesetsAttributes($postV1ProductsAttributesetsAttributesBody), $fetch);
    }
    /**
     * Remove attribute from attribute set
     *
     * @param string $attributeSetId 
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsAttributesetsAttributeSetIdAttributesAttributeCodeUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsAttributesetsAttributeSetIdAttributesAttributeCodeBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1ProductsAttributesetsAttributeSetIdAttributesAttributeCode(string $attributeSetId, string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1ProductsAttributesetsAttributeSetIdAttributesAttributeCode($attributeSetId, $attributeCode), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1ProductsAttributesetsGroupsListBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeGroupSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ProductsAttributesetsGroupsList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ProductsAttributesetsGroupsList($queryParameters), $fetch);
    }
    /**
     * Save attribute group
     *
     * @param \Kiboko\Magento\Model\V1ProductsAttributeSetsGroupsPostBody $postV1ProductsAttributesetsGroupsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsAttributesetsGroupsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeGroupInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsAttributesetsGroups(\Kiboko\Magento\Model\V1ProductsAttributeSetsGroupsPostBody $postV1ProductsAttributesetsGroupsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsAttributesetsGroups($postV1ProductsAttributesetsGroupsBody), $fetch);
    }
    /**
     * Save attribute group
     *
     * @param string $attributeSetId 
     * @param \Kiboko\Magento\Model\V1ProductsAttributeSetsAttributeSetIdGroupsPutBody $putV1ProductsAttributesetsAttributeSetIdGroupsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1ProductsAttributesetsAttributeSetIdGroupsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeGroupInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1ProductsAttributesetsAttributeSetIdGroups(string $attributeSetId, \Kiboko\Magento\Model\V1ProductsAttributeSetsAttributeSetIdGroupsPutBody $putV1ProductsAttributesetsAttributeSetIdGroupsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1ProductsAttributesetsAttributeSetIdGroups($attributeSetId, $putV1ProductsAttributesetsAttributeSetIdGroupsBody), $fetch);
    }
    /**
     * Remove attribute group by id
     *
     * @param int $groupId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsAttributesetsGroupsGroupIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1ProductsAttributesetsGroupsGroupId(int $groupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1ProductsAttributesetsGroupsGroupId($groupId), $fetch);
    }
    /**
     * Retrieve list of attribute options
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1ProductsAttributesAttributeCodeOptionsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeOptionInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ProductsAttributesAttributeCodeOptions(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ProductsAttributesAttributeCodeOptions($attributeCode), $fetch);
    }
    /**
     * Add option to attribute
     *
     * @param string $attributeCode 
     * @param \Kiboko\Magento\Model\V1ProductsAttributesAttributeCodeOptionsPostBody $postV1ProductsAttributesAttributeCodeOptionsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsAttributesAttributeCodeOptionsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1ProductsAttributesAttributeCodeOptionsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsAttributesAttributeCodeOptions(string $attributeCode, \Kiboko\Magento\Model\V1ProductsAttributesAttributeCodeOptionsPostBody $postV1ProductsAttributesAttributeCodeOptionsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsAttributesAttributeCodeOptions($attributeCode, $postV1ProductsAttributesAttributeCodeOptionsBody), $fetch);
    }
    /**
     * Delete option from attribute
     *
     * @param string $attributeCode 
     * @param string $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsAttributesAttributeCodeOptionsOptionIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsAttributesAttributeCodeOptionsOptionIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1ProductsAttributesAttributeCodeOptionsOptionId(string $attributeCode, string $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1ProductsAttributesAttributeCodeOptionsOptionId($attributeCode, $optionId), $fetch);
    }
    /**
     * Update attribute option
     *
     * @param string $attributeCode 
     * @param int $optionId 
     * @param \Kiboko\Magento\Model\V1ProductsAttributesAttributeCodeOptionsOptionIdPutBody $putV1ProductsAttributesAttributeCodeOptionsOptionIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1ProductsAttributesAttributeCodeOptionsOptionIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1ProductsAttributesAttributeCodeOptionsOptionIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1ProductsAttributesAttributeCodeOptionsOptionId(string $attributeCode, int $optionId, \Kiboko\Magento\Model\V1ProductsAttributesAttributeCodeOptionsOptionIdPutBody $putV1ProductsAttributesAttributeCodeOptionsOptionIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1ProductsAttributesAttributeCodeOptionsOptionId($attributeCode, $optionId, $putV1ProductsAttributesAttributeCodeOptionsOptionIdBody), $fetch);
    }
    /**
     * Retrieve the list of media attributes (fronted input type is media_image) assigned to the given attribute set.
     *
     * @param string $attributeSetName 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductAttributeInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ProductsMediaTypesAttributeSetName(string $attributeSetName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ProductsMediaTypesAttributeSetName($attributeSetName), $fetch);
    }
    /**
     * Remove gallery entry
     *
     * @param string $sku 
     * @param int $entryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsSkuMediaEntryIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsSkuMediaEntryIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1ProductsSkuMediaEntryId(string $sku, int $entryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1ProductsSkuMediaEntryId($sku, $entryId), $fetch);
    }
    /**
     * Return information about gallery entry
     *
     * @param string $sku 
     * @param int $entryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1ProductsSkuMediaEntryIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductAttributeMediaGalleryEntryInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ProductsSkuMediaEntryId(string $sku, int $entryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ProductsSkuMediaEntryId($sku, $entryId), $fetch);
    }
    /**
     * Update gallery entry
     *
     * @param string $sku 
     * @param string $entryId 
     * @param \Kiboko\Magento\Model\V1ProductsSkuMediaEntryIdPutBody $putV1ProductsSkuMediaEntryIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1ProductsSkuMediaEntryIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1ProductsSkuMediaEntryIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1ProductsSkuMediaEntryId(string $sku, string $entryId, \Kiboko\Magento\Model\V1ProductsSkuMediaEntryIdPutBody $putV1ProductsSkuMediaEntryIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1ProductsSkuMediaEntryId($sku, $entryId, $putV1ProductsSkuMediaEntryIdBody), $fetch);
    }
    /**
     * Retrieve the list of gallery entries associated with given product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductAttributeMediaGalleryEntryInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ProductsSkuMedia(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ProductsSkuMedia($sku), $fetch);
    }
    /**
     * Create new gallery entry
     *
     * @param string $sku 
     * @param \Kiboko\Magento\Model\V1ProductsSkuMediaPostBody $postV1ProductsSkuMediaBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsSkuMediaUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1ProductsSkuMediaBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsSkuMedia(string $sku, \Kiboko\Magento\Model\V1ProductsSkuMediaPostBody $postV1ProductsSkuMediaBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsSkuMedia($sku, $postV1ProductsSkuMediaBody), $fetch);
    }
    /**
     * Get tier price of product
     *
     * @param string $sku 
     * @param string $customerGroupId 'all' can be used to specify 'ALL GROUPS'
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1ProductsSkuGrouppricesCustomerGroupIdTiersBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductTierPriceInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ProductsSkuGrouppricesCustomerGroupIdTiers(string $sku, string $customerGroupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ProductsSkuGrouppricesCustomerGroupIdTiers($sku, $customerGroupId), $fetch);
    }
    /**
     * Create tier price for product
     *
     * @param string $sku 
     * @param string $customerGroupId 'all' can be used to specify 'ALL GROUPS'
     * @param float $price 
     * @param float $qty 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsSkuGrouppricesCustomerGroupIdTiersQtyPricePriceUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1ProductsSkuGrouppricesCustomerGroupIdTiersQtyPricePriceBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsSkuGrouppricesCustomerGroupIdTiersQtyPricePrice(string $sku, string $customerGroupId, float $price, float $qty, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsSkuGrouppricesCustomerGroupIdTiersQtyPricePrice($sku, $customerGroupId, $price, $qty), $fetch);
    }
    /**
     * Remove tier price from product
     *
     * @param string $sku 
     * @param string $customerGroupId 'all' can be used to specify 'ALL GROUPS'
     * @param float $qty 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsSkuGrouppricesCustomerGroupIdTiersQtyUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsSkuGrouppricesCustomerGroupIdTiersQtyBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1ProductsSkuGrouppricesCustomerGroupIdTiersQty(string $sku, string $customerGroupId, float $qty, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1ProductsSkuGrouppricesCustomerGroupIdTiersQty($sku, $customerGroupId, $qty), $fetch);
    }
    /**
     * Return product prices. In case of at least one of skus is not found exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsTierPricesInformationPostBody $postV1ProductsTierpricesinformationBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsTierpricesinformationUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1ProductsTierpricesinformationBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataTierPriceInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsTierpricesinformation(\Kiboko\Magento\Model\V1ProductsTierPricesInformationPostBody $postV1ProductsTierpricesinformationBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsTierpricesinformation($postV1ProductsTierpricesinformationBody), $fetch);
    }
    /**
     * Add or update product prices. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsTierPricesPostBody $postV1ProductsTierpricesBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsTierpricesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsTierprices(\Kiboko\Magento\Model\V1ProductsTierPricesPostBody $postV1ProductsTierpricesBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsTierprices($postV1ProductsTierpricesBody), $fetch);
    }
    /**
     * Remove existing tier prices and replace them with the new ones. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from replace list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsTierPricesPutBody $putV1ProductsTierpricesBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1ProductsTierpricesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1ProductsTierprices(\Kiboko\Magento\Model\V1ProductsTierPricesPutBody $putV1ProductsTierpricesBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1ProductsTierprices($putV1ProductsTierpricesBody), $fetch);
    }
    /**
     * Delete product tier prices. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from delete list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsTierPricesDeletePostBody $postV1ProductsTierpricesdeleteBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsTierpricesdeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsTierpricesdelete(\Kiboko\Magento\Model\V1ProductsTierPricesDeletePostBody $postV1ProductsTierpricesdeleteBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsTierpricesdelete($postV1ProductsTierpricesdeleteBody), $fetch);
    }
    /**
     * Return product prices. In case of at least one of skus is not found exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsBasePricesInformationPostBody $postV1ProductsBasepricesinformationBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsBasepricesinformationUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataBasePriceInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsBasepricesinformation(\Kiboko\Magento\Model\V1ProductsBasePricesInformationPostBody $postV1ProductsBasepricesinformationBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsBasepricesinformation($postV1ProductsBasepricesinformationBody), $fetch);
    }
    /**
     * Add or update product prices. Input item should correspond \Magento\Catalog\Api\Data\CostInterface. If any items will have invalid price, store id or sku, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsBasePricesPostBody $postV1ProductsBasepricesBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsBasepricesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1ProductsBasepricesBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsBaseprices(\Kiboko\Magento\Model\V1ProductsBasePricesPostBody $postV1ProductsBasepricesBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsBaseprices($postV1ProductsBasepricesBody), $fetch);
    }
    /**
     * Return product prices. In case of at least one of skus is not found exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsCostInformationPostBody $postV1ProductsCostinformationBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsCostinformationUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1ProductsCostinformationBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataCostInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsCostinformation(\Kiboko\Magento\Model\V1ProductsCostInformationPostBody $postV1ProductsCostinformationBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsCostinformation($postV1ProductsCostinformationBody), $fetch);
    }
    /**
     * Add or update product cost. Input item should correspond to \Magento\Catalog\Api\Data\CostInterface. If any items will have invalid cost, store id or sku, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsCostPostBody $postV1ProductsCostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsCostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsCost(\Kiboko\Magento\Model\V1ProductsCostPostBody $postV1ProductsCostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsCost($postV1ProductsCostBody), $fetch);
    }
    /**
     * Delete product cost. In case of at least one of skus is not found exception will be thrown. If error occurred during the delete exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsCostDeletePostBody $postV1ProductsCostdeleteBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsCostdeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1ProductsCostdeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsCostdelete(\Kiboko\Magento\Model\V1ProductsCostDeletePostBody $postV1ProductsCostdeleteBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsCostdelete($postV1ProductsCostdeleteBody), $fetch);
    }
    /**
     * Return product's special price. In case of at least one of skus is not found exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsSpecialPriceInformationPostBody $postV1ProductsSpecialpriceinformationBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsSpecialpriceinformationUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1ProductsSpecialpriceinformationBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataSpecialPriceInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsSpecialpriceinformation(\Kiboko\Magento\Model\V1ProductsSpecialPriceInformationPostBody $postV1ProductsSpecialpriceinformationBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsSpecialpriceinformation($postV1ProductsSpecialpriceinformationBody), $fetch);
    }
    /**
     * Add or update product's special price. If any items will have invalid price, store id, sku or dates, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsSpecialPricePostBody $postV1ProductsSpecialpriceBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsSpecialpriceUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1ProductsSpecialpriceBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsSpecialprice(\Kiboko\Magento\Model\V1ProductsSpecialPricePostBody $postV1ProductsSpecialpriceBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsSpecialprice($postV1ProductsSpecialpriceBody), $fetch);
    }
    /**
     * Delete product's special price. If any items will have invalid price, store id, sku or dates, they will be marked as failed and excluded from delete list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the delete exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsSpecialPriceDeletePostBody $postV1ProductsSpecialpricedeleteBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsSpecialpricedeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1ProductsSpecialpricedeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsSpecialpricedelete(\Kiboko\Magento\Model\V1ProductsSpecialPriceDeletePostBody $postV1ProductsSpecialpricedeleteBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsSpecialpricedelete($postV1ProductsSpecialpricedeleteBody), $fetch);
    }
    /**
     * Delete category by identifier
     *
     * @param int $categoryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1CategoriesCategoryIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1CategoriesCategoryIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1CategoriesCategoryId(int $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1CategoriesCategoryId($categoryId), $fetch);
    }
    /**
     * Get info about category by category id
     *
     * @param int $categoryId 
     * @param array $queryParameters {
     *     @var int $storeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CategoriesCategoryIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataCategoryInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CategoriesCategoryId(int $categoryId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CategoriesCategoryId($categoryId, $queryParameters), $fetch);
    }
    /**
     * Retrieve list of categories
     *
     * @param array $queryParameters {
     *     @var int $rootCategoryId 
     *     @var int $depth 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CategoriesBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataCategoryTreeInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1Categories(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1Categories($queryParameters), $fetch);
    }
    /**
     * Create category service
     *
     * @param \Kiboko\Magento\Model\V1CategoriesPostBody $postV1CategoriesBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CategoriesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CategoriesBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataCategoryInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1Categories(\Kiboko\Magento\Model\V1CategoriesPostBody $postV1CategoriesBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1Categories($postV1CategoriesBody), $fetch);
    }
    /**
     * Create category service
     *
     * @param string $id 
     * @param \Kiboko\Magento\Model\V1CategoriesIdPutBody $putV1CategoriesIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CategoriesIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CategoriesIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataCategoryInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CategoriesId(string $id, \Kiboko\Magento\Model\V1CategoriesIdPutBody $putV1CategoriesIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CategoriesId($id, $putV1CategoriesIdBody), $fetch);
    }
    /**
     * Move category
     *
     * @param int $categoryId 
     * @param \Kiboko\Magento\Model\V1CategoriesCategoryIdMovePutBody $putV1CategoriesCategoryIdMoveBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CategoriesCategoryIdMoveUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CategoriesCategoryIdMoveInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\PutV1CategoriesCategoryIdMoveBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CategoriesCategoryIdMove(int $categoryId, \Kiboko\Magento\Model\V1CategoriesCategoryIdMovePutBody $putV1CategoriesCategoryIdMoveBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CategoriesCategoryIdMove($categoryId, $putV1CategoriesCategoryIdMoveBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1CategoriesListUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataCategorySearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CategoriesList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CategoriesList($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1ProductsOptionsTypesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductCustomOptionTypeInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ProductsOptionsTypes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ProductsOptionsTypes(), $fetch);
    }
    /**
     * Get the list of custom options for a specific product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductCustomOptionInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ProductsSkuOptions(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ProductsSkuOptions($sku), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsSkuOptionsOptionIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1ProductsSkuOptionsOptionId(string $sku, int $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1ProductsSkuOptionsOptionId($sku, $optionId), $fetch);
    }
    /**
     * Get custom option for a specific product
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductCustomOptionInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ProductsSkuOptionsOptionId(string $sku, int $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ProductsSkuOptionsOptionId($sku, $optionId), $fetch);
    }
    /**
     * Save Custom Option
     *
     * @param \Kiboko\Magento\Model\V1ProductsOptionsPostBody $postV1ProductsOptionsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsOptionsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductCustomOptionInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsOptions(\Kiboko\Magento\Model\V1ProductsOptionsPostBody $postV1ProductsOptionsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsOptions($postV1ProductsOptionsBody), $fetch);
    }
    /**
     * Save Custom Option
     *
     * @param string $optionId 
     * @param \Kiboko\Magento\Model\V1ProductsOptionsOptionIdPutBody $putV1ProductsOptionsOptionIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1ProductsOptionsOptionIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductCustomOptionInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1ProductsOptionsOptionId(string $optionId, \Kiboko\Magento\Model\V1ProductsOptionsOptionIdPutBody $putV1ProductsOptionsOptionIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1ProductsOptionsOptionId($optionId, $putV1ProductsOptionsOptionIdBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductLinkTypeInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ProductsLinksTypes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ProductsLinksTypes(), $fetch);
    }
    /**
     * Provide a list of the product link type attributes
     *
     * @param string $type 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductLinkAttributeInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ProductsLinksTypeAttributes(string $type, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ProductsLinksTypeAttributes($type), $fetch);
    }
    /**
     * Provide the list of links for a specific product
     *
     * @param string $sku 
     * @param string $type 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1ProductsSkuLinksTypeBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductLinkInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ProductsSkuLinksType(string $sku, string $type, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ProductsSkuLinksType($sku, $type), $fetch);
    }
    /**
     * Assign a product link to another product
     *
     * @param string $sku 
     * @param \Kiboko\Magento\Model\V1ProductsSkuLinksPostBody $postV1ProductsSkuLinksBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsSkuLinksUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1ProductsSkuLinksBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsSkuLinks(string $sku, \Kiboko\Magento\Model\V1ProductsSkuLinksPostBody $postV1ProductsSkuLinksBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsSkuLinks($sku, $postV1ProductsSkuLinksBody), $fetch);
    }
    /**
     * Save product link
     *
     * @param string $sku 
     * @param \Kiboko\Magento\Model\V1ProductsSkuLinksPutBody $putV1ProductsSkuLinksBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1ProductsSkuLinksUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1ProductsSkuLinksBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1ProductsSkuLinks(string $sku, \Kiboko\Magento\Model\V1ProductsSkuLinksPutBody $putV1ProductsSkuLinksBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1ProductsSkuLinks($sku, $putV1ProductsSkuLinksBody), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param string $type 
     * @param string $linkedProductSku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsSkuLinksTypeLinkedProductSkuUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsSkuLinksTypeLinkedProductSkuBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1ProductsSkuLinksTypeLinkedProductSku(string $sku, string $type, string $linkedProductSku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1ProductsSkuLinksTypeLinkedProductSku($sku, $type, $linkedProductSku), $fetch);
    }
    /**
     * Get products assigned to category
     *
     * @param int $categoryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataCategoryProductLinkInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CategoriesCategoryIdProducts(int $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CategoriesCategoryIdProducts($categoryId), $fetch);
    }
    /**
     * Assign a product to the required category
     *
     * @param string $categoryId 
     * @param \Kiboko\Magento\Model\V1CategoriesCategoryIdProductsPostBody $postV1CategoriesCategoryIdProductsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CategoriesCategoryIdProductsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CategoriesCategoryIdProductsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CategoriesCategoryIdProducts(string $categoryId, \Kiboko\Magento\Model\V1CategoriesCategoryIdProductsPostBody $postV1CategoriesCategoryIdProductsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CategoriesCategoryIdProducts($categoryId, $postV1CategoriesCategoryIdProductsBody), $fetch);
    }
    /**
     * Assign a product to the required category
     *
     * @param string $categoryId 
     * @param \Kiboko\Magento\Model\V1CategoriesCategoryIdProductsPutBody $putV1CategoriesCategoryIdProductsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CategoriesCategoryIdProductsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CategoriesCategoryIdProductsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CategoriesCategoryIdProducts(string $categoryId, \Kiboko\Magento\Model\V1CategoriesCategoryIdProductsPutBody $putV1CategoriesCategoryIdProductsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CategoriesCategoryIdProducts($categoryId, $putV1CategoriesCategoryIdProductsBody), $fetch);
    }
    /**
     * Remove the product assignment from the category by category id and sku
     *
     * @param int $categoryId 
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1CategoriesCategoryIdProductsSkuUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1CategoriesCategoryIdProductsSkuBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1CategoriesCategoryIdProductsSku(int $categoryId, string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1CategoriesCategoryIdProductsSku($categoryId, $sku), $fetch);
    }
    /**
     * Assign a product to the website
     *
     * @param string $sku 
     * @param \Kiboko\Magento\Model\V1ProductsSkuWebsitesPostBody $postV1ProductsSkuWebsitesBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsSkuWebsitesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1ProductsSkuWebsitesBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsSkuWebsites(string $sku, \Kiboko\Magento\Model\V1ProductsSkuWebsitesPostBody $postV1ProductsSkuWebsitesBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsSkuWebsites($sku, $postV1ProductsSkuWebsitesBody), $fetch);
    }
    /**
     * Assign a product to the website
     *
     * @param string $sku 
     * @param \Kiboko\Magento\Model\V1ProductsSkuWebsitesPutBody $putV1ProductsSkuWebsitesBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1ProductsSkuWebsitesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1ProductsSkuWebsitesBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1ProductsSkuWebsites(string $sku, \Kiboko\Magento\Model\V1ProductsSkuWebsitesPutBody $putV1ProductsSkuWebsitesBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1ProductsSkuWebsites($sku, $putV1ProductsSkuWebsitesBody), $fetch);
    }
    /**
     * Remove the website assignment from the product by product sku
     *
     * @param string $sku 
     * @param int $websiteId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsSkuWebsitesWebsiteIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsSkuWebsitesWebsiteIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1ProductsSkuWebsitesWebsiteId(string $sku, int $websiteId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1ProductsSkuWebsitesWebsiteId($sku, $websiteId), $fetch);
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
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductRenderSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1Productsrenderinfo(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1Productsrenderinfo($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $productSku 
     * @param array $queryParameters {
     *     @var int $scopeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1StockItemsProductSkuUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1StockItemsProductSkuBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogInventoryDataStockItemInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1StockItemsProductSku(string $productSku, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1StockItemsProductSku($productSku, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $productSku 
     * @param string $itemId 
     * @param \Kiboko\Magento\Model\V1ProductsProductSkuStockItemsItemIdPutBody $putV1ProductsProductSkuStockItemsItemIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1ProductsProductSkuStockItemsItemIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1ProductsProductSkuStockItemsItemIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1ProductsProductSkuStockItemsItemId(string $productSku, string $itemId, \Kiboko\Magento\Model\V1ProductsProductSkuStockItemsItemIdPutBody $putV1ProductsProductSkuStockItemsItemIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1ProductsProductSkuStockItemsItemId($productSku, $itemId, $putV1ProductsProductSkuStockItemsItemIdBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1StockItemsLowStockUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogInventoryDataStockItemCollectionInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1StockItemsLowStock(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1StockItemsLowStock($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $productSku 
     * @param array $queryParameters {
     *     @var int $scopeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1StockStatusesProductSkuBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogInventoryDataStockStatusInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1StockStatusesProductSku(string $productSku, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1StockStatusesProductSku($productSku, $queryParameters), $fetch);
    }
    /**
     * Enables an administrative user to return information for a specified cart.
     *
     * @param int $cartId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CartsCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CartsCartIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsCartId(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsCartId($cartId), $fetch);
    }
    /**
     * Assigns a specified customer to a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1CartsCartIdPutBody $putV1CartsCartIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CartsCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CartsCartIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\PutV1CartsCartIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CartsCartId(int $cartId, \Kiboko\Magento\Model\V1CartsCartIdPutBody $putV1CartsCartIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CartsCartId($cartId, $putV1CartsCartIdBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1CartsSearchUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsSearch(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsSearch($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CartsMineUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CartsMineBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsMine(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsMine(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CartsMineUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CartsMineBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsMine(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CartsMine(), $fetch);
    }
    /**
     * Save quote
     *
     * @param \Kiboko\Magento\Model\V1CartsMinePutBody $putV1CartsMineBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CartsMineUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CartsMine(\Kiboko\Magento\Model\V1CartsMinePutBody $putV1CartsMineBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CartsMine($putV1CartsMineBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CartsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CartsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1Carts(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1Carts(), $fetch);
    }
    /**
     * Creates an empty cart and quote for a specified customer if customer does not have a cart yet.
     *
     * @param int $customerId The customer ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CustomersCustomerIdCartsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CustomersCustomerIdCartsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CustomersCustomerIdCarts(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CustomersCustomerIdCarts($customerId), $fetch);
    }
    /**
     * Places an order for a specified cart.
     *
     * @param \Kiboko\Magento\Model\V1CartsMineOrderPutBody $putV1CartsMineOrderBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CartsMineOrderUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CartsMineOrderBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CartsMineOrder(\Kiboko\Magento\Model\V1CartsMineOrderPutBody $putV1CartsMineOrderBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CartsMineOrder($putV1CartsMineOrderBody), $fetch);
    }
    /**
     * Places an order for a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1CartsCartIdOrderPutBody $putV1CartsCartIdOrderBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CartsCartIdOrderUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CartsCartIdOrderBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CartsCartIdOrder(int $cartId, \Kiboko\Magento\Model\V1CartsCartIdOrderPutBody $putV1CartsCartIdOrderBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CartsCartIdOrder($cartId, $putV1CartsCartIdOrderBody), $fetch);
    }
    /**
     * Enable a guest user to return information for a specified cart.
     *
     * @param string $cartId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1GuestcartsCartIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1GuestcartsCartId(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1GuestcartsCartId($cartId), $fetch);
    }
    /**
     * Assign a specified customer to a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdPutBody $putV1GuestcartsCartIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1GuestcartsCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1GuestcartsCartId(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdPutBody $putV1GuestcartsCartIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1GuestcartsCartId($cartId, $putV1GuestcartsCartIdBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1GuestcartsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1Guestcarts(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1Guestcarts(), $fetch);
    }
    /**
     * Place an order for a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdOrderPutBody $putV1GuestcartsCartIdOrderBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1GuestcartsCartIdOrderBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1GuestcartsCartIdOrder(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdOrderPutBody $putV1GuestcartsCartIdOrderBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1GuestcartsCartIdOrder($cartId, $putV1GuestcartsCartIdOrderBody), $fetch);
    }
    /**
     * Lists applicable shipping methods for a specified quote.
     *
     * @param int $cartId The shopping cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CartsCartIdShippingmethodsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CartsCartIdShippingmethodsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsCartIdShippingmethods(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsCartIdShippingmethods($cartId), $fetch);
    }
    /**
     * Estimate shipping
     *
     * @param int $cartId The shopping cart ID.
     * @param \Kiboko\Magento\Model\V1CartsCartIdEstimateShippingMethodsByAddressIdPostBody $postV1CartsCartIdEstimateshippingmethodsbyaddressidBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CartsCartIdEstimateshippingmethodsbyaddressidUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsCartIdEstimateshippingmethodsbyaddressid(int $cartId, \Kiboko\Magento\Model\V1CartsCartIdEstimateShippingMethodsByAddressIdPostBody $postV1CartsCartIdEstimateshippingmethodsbyaddressidBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CartsCartIdEstimateshippingmethodsbyaddressid($cartId, $postV1CartsCartIdEstimateshippingmethodsbyaddressidBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CartsMineShippingmethodsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CartsMineShippingmethodsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsMineShippingmethods(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsMineShippingmethods(), $fetch);
    }
    /**
     * Estimate shipping
     *
     * @param \Kiboko\Magento\Model\V1CartsMineEstimateShippingMethodsByAddressIdPostBody $postV1CartsMineEstimateshippingmethodsbyaddressidBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CartsMineEstimateshippingmethodsbyaddressidUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsMineEstimateshippingmethodsbyaddressid(\Kiboko\Magento\Model\V1CartsMineEstimateShippingMethodsByAddressIdPostBody $postV1CartsMineEstimateshippingmethodsbyaddressidBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CartsMineEstimateshippingmethodsbyaddressid($postV1CartsMineEstimateshippingmethodsbyaddressidBody), $fetch);
    }
    /**
     * Estimate shipping by address and return list of available shipping methods
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\Model\V1CartsCartIdEstimateShippingMethodsPostBody $postV1CartsCartIdEstimateshippingmethodsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CartsCartIdEstimateshippingmethodsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsCartIdEstimateshippingmethods(string $cartId, \Kiboko\Magento\Model\V1CartsCartIdEstimateShippingMethodsPostBody $postV1CartsCartIdEstimateshippingmethodsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CartsCartIdEstimateshippingmethods($cartId, $postV1CartsCartIdEstimateshippingmethodsBody), $fetch);
    }
    /**
     * Estimate shipping by address and return list of available shipping methods
     *
     * @param \Kiboko\Magento\Model\V1CartsMineEstimateShippingMethodsPostBody $postV1CartsMineEstimateshippingmethodsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CartsMineEstimateshippingmethodsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsMineEstimateshippingmethods(\Kiboko\Magento\Model\V1CartsMineEstimateShippingMethodsPostBody $postV1CartsMineEstimateshippingmethodsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CartsMineEstimateshippingmethods($postV1CartsMineEstimateshippingmethodsBody), $fetch);
    }
    /**
     * List applicable shipping methods for a specified quote.
     *
     * @param string $cartId The shopping cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1GuestcartsCartIdShippingmethodsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1GuestcartsCartIdShippingmethods(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1GuestcartsCartIdShippingmethods($cartId), $fetch);
    }
    /**
     * Estimate shipping by address and return list of available shipping methods
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdEstimateShippingMethodsPostBody $postV1GuestcartsCartIdEstimateshippingmethodsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1GuestcartsCartIdEstimateshippingmethods(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdEstimateShippingMethodsPostBody $postV1GuestcartsCartIdEstimateshippingmethodsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1GuestcartsCartIdEstimateshippingmethods($cartId, $postV1GuestcartsCartIdEstimateshippingmethodsBody), $fetch);
    }
    /**
     * Lists items that are assigned to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CartsCartIdItemsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CartsCartIdItemsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartItemInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsCartIdItems(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsCartIdItems($cartId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $quoteId 
     * @param \Kiboko\Magento\Model\V1CartsQuoteIdItemsPostBody $postV1CartsQuoteIdItemsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CartsQuoteIdItemsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CartsQuoteIdItemsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartItemInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsQuoteIdItems(string $quoteId, \Kiboko\Magento\Model\V1CartsQuoteIdItemsPostBody $postV1CartsQuoteIdItemsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CartsQuoteIdItems($quoteId, $postV1CartsQuoteIdItemsBody), $fetch);
    }
    /**
     * Removes the specified item from the specified cart.
     *
     * @param int $cartId The cart ID.
     * @param int $itemId The item ID of the item to be removed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1CartsCartIdItemsItemIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1CartsCartIdItemsItemIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1CartsCartIdItemsItemId(int $cartId, int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1CartsCartIdItemsItemId($cartId, $itemId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $cartId 
     * @param string $itemId 
     * @param \Kiboko\Magento\Model\V1CartsCartIdItemsItemIdPutBody $putV1CartsCartIdItemsItemIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CartsCartIdItemsItemIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CartsCartIdItemsItemIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartItemInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CartsCartIdItemsItemId(string $cartId, string $itemId, \Kiboko\Magento\Model\V1CartsCartIdItemsItemIdPutBody $putV1CartsCartIdItemsItemIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CartsCartIdItemsItemId($cartId, $itemId, $putV1CartsCartIdItemsItemIdBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CartsMineItemsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CartsMineItemsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartItemInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsMineItems(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsMineItems(), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param \Kiboko\Magento\Model\V1CartsMineItemsPostBody $postV1CartsMineItemsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CartsMineItemsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CartsMineItemsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartItemInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsMineItems(\Kiboko\Magento\Model\V1CartsMineItemsPostBody $postV1CartsMineItemsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CartsMineItems($postV1CartsMineItemsBody), $fetch);
    }
    /**
     * Removes the specified item from the specified cart.
     *
     * @param int $itemId The item ID of the item to be removed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1CartsMineItemsItemIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1CartsMineItemsItemIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1CartsMineItemsItemId(int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1CartsMineItemsItemId($itemId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $itemId 
     * @param \Kiboko\Magento\Model\V1CartsMineItemsItemIdPutBody $putV1CartsMineItemsItemIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CartsMineItemsItemIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CartsMineItemsItemIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartItemInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CartsMineItemsItemId(string $itemId, \Kiboko\Magento\Model\V1CartsMineItemsItemIdPutBody $putV1CartsMineItemsItemIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CartsMineItemsItemId($itemId, $putV1CartsMineItemsItemIdBody), $fetch);
    }
    /**
     * List items that are assigned to a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1GuestcartsCartIdItemsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartItemInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1GuestcartsCartIdItems(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1GuestcartsCartIdItems($cartId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdItemsPostBody $postV1GuestcartsCartIdItemsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1GuestcartsCartIdItemsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartItemInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1GuestcartsCartIdItems(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdItemsPostBody $postV1GuestcartsCartIdItemsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1GuestcartsCartIdItems($cartId, $postV1GuestcartsCartIdItemsBody), $fetch);
    }
    /**
     * Remove the specified item from the specified cart.
     *
     * @param string $cartId The cart ID.
     * @param int $itemId The item ID of the item to be removed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1GuestcartsCartIdItemsItemIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1GuestcartsCartIdItemsItemId(string $cartId, int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1GuestcartsCartIdItemsItemId($cartId, $itemId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $cartId 
     * @param string $itemId 
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdItemsItemIdPutBody $putV1GuestcartsCartIdItemsItemIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1GuestcartsCartIdItemsItemIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartItemInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1GuestcartsCartIdItemsItemId(string $cartId, string $itemId, \Kiboko\Magento\Model\V1GuestCartsCartIdItemsItemIdPutBody $putV1GuestcartsCartIdItemsItemIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1GuestcartsCartIdItemsItemId($cartId, $itemId, $putV1GuestcartsCartIdItemsItemIdBody), $fetch);
    }
    /**
     * Returns the payment method for a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CartsCartIdSelectedpaymentmethodUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CartsCartIdSelectedpaymentmethodBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataPaymentInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsCartIdSelectedpaymentmethod(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsCartIdSelectedpaymentmethod($cartId), $fetch);
    }
    /**
     * Adds a specified payment method to a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1CartsCartIdSelectedPaymentMethodPutBody $putV1CartsCartIdSelectedpaymentmethodBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CartsCartIdSelectedpaymentmethodUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CartsCartIdSelectedpaymentmethodBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CartsCartIdSelectedpaymentmethod(int $cartId, \Kiboko\Magento\Model\V1CartsCartIdSelectedPaymentMethodPutBody $putV1CartsCartIdSelectedpaymentmethodBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CartsCartIdSelectedpaymentmethod($cartId, $putV1CartsCartIdSelectedpaymentmethodBody), $fetch);
    }
    /**
     * Lists available payment methods for a specified shopping cart. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See https://devdocs.magento.com/codelinks/attributes.html#PaymentMethodManagementInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CartsCartIdPaymentmethodsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CartsCartIdPaymentmethodsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataPaymentMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsCartIdPaymentmethods(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsCartIdPaymentmethods($cartId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CartsMineSelectedpaymentmethodUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CartsMineSelectedpaymentmethodBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataPaymentInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsMineSelectedpaymentmethod(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsMineSelectedpaymentmethod(), $fetch);
    }
    /**
     * Adds a specified payment method to a specified shopping cart.
     *
     * @param \Kiboko\Magento\Model\V1CartsMineSelectedPaymentMethodPutBody $putV1CartsMineSelectedpaymentmethodBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CartsMineSelectedpaymentmethodUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CartsMineSelectedpaymentmethodBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CartsMineSelectedpaymentmethod(\Kiboko\Magento\Model\V1CartsMineSelectedPaymentMethodPutBody $putV1CartsMineSelectedpaymentmethodBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CartsMineSelectedpaymentmethod($putV1CartsMineSelectedpaymentmethodBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CartsMinePaymentmethodsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CartsMinePaymentmethodsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataPaymentMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsMinePaymentmethods(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsMinePaymentmethods(), $fetch);
    }
    /**
     * Return the payment method for a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1GuestcartsCartIdSelectedpaymentmethodBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataPaymentInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1GuestcartsCartIdSelectedpaymentmethod(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1GuestcartsCartIdSelectedpaymentmethod($cartId), $fetch);
    }
    /**
     * Add a specified payment method to a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdSelectedPaymentMethodPutBody $putV1GuestcartsCartIdSelectedpaymentmethodBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1GuestcartsCartIdSelectedpaymentmethodBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1GuestcartsCartIdSelectedpaymentmethod(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdSelectedPaymentMethodPutBody $putV1GuestcartsCartIdSelectedpaymentmethodBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1GuestcartsCartIdSelectedpaymentmethod($cartId, $putV1GuestcartsCartIdSelectedpaymentmethodBody), $fetch);
    }
    /**
     * List available payment methods for a specified shopping cart. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See https://devdocs.magento.com/codelinks/attributes.html#GuestPaymentMethodManagementInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1GuestcartsCartIdPaymentmethodsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataPaymentMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1GuestcartsCartIdPaymentmethods(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1GuestcartsCartIdPaymentmethods($cartId), $fetch);
    }
    /**
     * Returns the billing address for a specified quote.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CartsCartIdBillingaddressUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CartsCartIdBillingaddressBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataAddressInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsCartIdBillingaddress(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsCartIdBillingaddress($cartId), $fetch);
    }
    /**
     * Assigns a specified billing address to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1CartsCartIdBillingAddressPostBody $postV1CartsCartIdBillingaddressBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CartsCartIdBillingaddressUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CartsCartIdBillingaddressBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsCartIdBillingaddress(int $cartId, \Kiboko\Magento\Model\V1CartsCartIdBillingAddressPostBody $postV1CartsCartIdBillingaddressBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CartsCartIdBillingaddress($cartId, $postV1CartsCartIdBillingaddressBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CartsMineBillingaddressUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CartsMineBillingaddressBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataAddressInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsMineBillingaddress(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsMineBillingaddress(), $fetch);
    }
    /**
     * Assigns a specified billing address to a specified cart.
     *
     * @param \Kiboko\Magento\Model\V1CartsMineBillingAddressPostBody $postV1CartsMineBillingaddressBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CartsMineBillingaddressUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CartsMineBillingaddressBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsMineBillingaddress(\Kiboko\Magento\Model\V1CartsMineBillingAddressPostBody $postV1CartsMineBillingaddressBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CartsMineBillingaddress($postV1CartsMineBillingaddressBody), $fetch);
    }
    /**
     * Return the billing address for a specified quote.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1GuestcartsCartIdBillingaddressBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataAddressInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1GuestcartsCartIdBillingaddress(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1GuestcartsCartIdBillingaddress($cartId), $fetch);
    }
    /**
     * Assign a specified billing address to a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdBillingAddressPostBody $postV1GuestcartsCartIdBillingaddressBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1GuestcartsCartIdBillingaddressBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1GuestcartsCartIdBillingaddress(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdBillingAddressPostBody $postV1GuestcartsCartIdBillingaddressBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1GuestcartsCartIdBillingaddress($cartId, $postV1GuestcartsCartIdBillingaddressBody), $fetch);
    }
    /**
     * Deletes a coupon from a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1CartsCartIdCouponsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1CartsCartIdCouponsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1CartsCartIdCoupons(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1CartsCartIdCoupons($cartId), $fetch);
    }
    /**
     * Returns information for a coupon in a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CartsCartIdCouponsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CartsCartIdCouponsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsCartIdCoupons(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsCartIdCoupons($cartId), $fetch);
    }
    /**
     * Adds a coupon by code to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $couponCode The coupon code data.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CartsCartIdCouponsCouponCodeUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CartsCartIdCouponsCouponCodeBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CartsCartIdCouponsCouponCode(int $cartId, string $couponCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CartsCartIdCouponsCouponCode($cartId, $couponCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1CartsMineCouponsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1CartsMineCouponsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1CartsMineCoupons(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1CartsMineCoupons(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CartsMineCouponsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CartsMineCouponsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsMineCoupons(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsMineCoupons(), $fetch);
    }
    /**
     * Adds a coupon by code to a specified cart.
     *
     * @param string $couponCode The coupon code data.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CartsMineCouponsCouponCodeUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CartsMineCouponsCouponCodeBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CartsMineCouponsCouponCode(string $couponCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CartsMineCouponsCouponCode($couponCode), $fetch);
    }
    /**
     * Delete a coupon from a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1GuestcartsCartIdCouponsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1GuestcartsCartIdCoupons(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1GuestcartsCartIdCoupons($cartId), $fetch);
    }
    /**
     * Return information for a coupon in a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1GuestcartsCartIdCouponsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1GuestcartsCartIdCoupons(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1GuestcartsCartIdCoupons($cartId), $fetch);
    }
    /**
     * Add a coupon by code to a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $couponCode The coupon code data.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1GuestcartsCartIdCouponsCouponCodeBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1GuestcartsCartIdCouponsCouponCode(string $cartId, string $couponCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1GuestcartsCartIdCouponsCouponCode($cartId, $couponCode), $fetch);
    }
    /**
     * Returns quote totals data for a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CartsCartIdTotalsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CartsCartIdTotalsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataTotalsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsCartIdTotals(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsCartIdTotals($cartId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CartsMineTotalsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CartsMineTotalsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataTotalsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsMineTotals(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsMineTotals(), $fetch);
    }
    /**
     * Set shipping/billing methods and additional data for cart and collect totals for guest.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdCollectTotalsPutBody $putV1GuestcartsCartIdCollecttotalsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataTotalsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1GuestcartsCartIdCollecttotals(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdCollectTotalsPutBody $putV1GuestcartsCartIdCollecttotalsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1GuestcartsCartIdCollecttotals($cartId, $putV1GuestcartsCartIdCollecttotalsBody), $fetch);
    }
    /**
     * Return quote totals data for a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1GuestcartsCartIdTotalsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataTotalsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1GuestcartsCartIdTotals(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1GuestcartsCartIdTotals($cartId), $fetch);
    }
    /**
     * Set shipping/billing methods and additional data for cart and collect totals.
     *
     * @param \Kiboko\Magento\Model\V1CartsMineCollectTotalsPutBody $putV1CartsMineCollecttotalsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CartsMineCollecttotalsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataTotalsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CartsMineCollecttotals(\Kiboko\Magento\Model\V1CartsMineCollectTotalsPutBody $putV1CartsMineCollecttotalsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CartsMineCollecttotals($putV1CartsMineCollecttotalsBody), $fetch);
    }
    /**
     * Create access token for admin given the admin credentials.
     *
     * @param \Kiboko\Magento\Model\V1IntegrationAdminTokenPostBody $postV1IntegrationAdminTokenBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1IntegrationAdminTokenBadRequestException
     * @throws \Kiboko\Magento\Exception\PostV1IntegrationAdminTokenInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1IntegrationAdminToken(\Kiboko\Magento\Model\V1IntegrationAdminTokenPostBody $postV1IntegrationAdminTokenBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1IntegrationAdminToken($postV1IntegrationAdminTokenBody), $fetch);
    }
    /**
     * Create access token for admin given the customer credentials.
     *
     * @param \Kiboko\Magento\Model\V1IntegrationCustomerTokenPostBody $postV1IntegrationCustomerTokenBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1IntegrationCustomerTokenBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1IntegrationCustomerToken(\Kiboko\Magento\Model\V1IntegrationCustomerTokenPostBody $postV1IntegrationCustomerTokenBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1IntegrationCustomerToken($postV1IntegrationCustomerTokenBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1IntegrationCustomerRevokecustomertokenUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1IntegrationCustomerRevokecustomertokenInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1IntegrationCustomerRevokecustomertoken(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1IntegrationCustomerRevokecustomertoken(), $fetch);
    }
    /**
     * Loads a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1OrdersIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataOrderInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1OrdersId(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1OrdersId($id), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1OrdersUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataOrderSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1Orders(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1Orders($queryParameters), $fetch);
    }
    /**
     * Performs persist operations for a specified order.
     *
     * @param \Kiboko\Magento\Model\V1OrdersPostBody $postV1OrdersBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1OrdersUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataOrderInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1Orders(\Kiboko\Magento\Model\V1OrdersPostBody $postV1OrdersBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1Orders($postV1OrdersBody), $fetch);
    }
    /**
     * Performs persist operations for a specified order.
     *
     * @param \Kiboko\Magento\Model\V1OrdersCreatePutBody $putV1OrdersCreateBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1OrdersCreateUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataOrderInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1OrdersCreate(\Kiboko\Magento\Model\V1OrdersCreatePutBody $putV1OrdersCreateBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1OrdersCreate($putV1OrdersCreateBody), $fetch);
    }
    /**
     * Gets the status for a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1OrdersIdStatusesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1OrdersIdStatuses(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1OrdersIdStatuses($id), $fetch);
    }
    /**
     * Cancels a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1OrdersIdCancelUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1OrdersIdCancel(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1OrdersIdCancel($id), $fetch);
    }
    /**
     * Emails a user a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1OrdersIdEmailsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1OrdersIdEmails(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1OrdersIdEmails($id), $fetch);
    }
    /**
     * Holds a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1OrdersIdHoldUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1OrdersIdHold(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1OrdersIdHold($id), $fetch);
    }
    /**
     * Releases a specified order from hold status.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1OrdersIdUnholdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1OrdersIdUnhold(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1OrdersIdUnhold($id), $fetch);
    }
    /**
     * Lists comments for a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1OrdersIdCommentsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataOrderStatusHistorySearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1OrdersIdComments(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1OrdersIdComments($id), $fetch);
    }
    /**
     * Adds a comment to a specified order.
     *
     * @param int $id The order ID.
     * @param \Kiboko\Magento\Model\V1OrdersIdCommentsPostBody $postV1OrdersIdCommentsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1OrdersIdCommentsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1OrdersIdComments(int $id, \Kiboko\Magento\Model\V1OrdersIdCommentsPostBody $postV1OrdersIdCommentsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1OrdersIdComments($id, $postV1OrdersIdCommentsBody), $fetch);
    }
    /**
     * Performs persist operations for a specified order address.
     *
     * @param string $parentId 
     * @param \Kiboko\Magento\Model\V1OrdersParentIdPutBody $putV1OrdersParentIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1OrdersParentIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataOrderAddressInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1OrdersParentId(string $parentId, \Kiboko\Magento\Model\V1OrdersParentIdPutBody $putV1OrdersParentIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1OrdersParentId($parentId, $putV1OrdersParentIdBody), $fetch);
    }
    /**
     * Loads a specified order item.
     *
     * @param int $id The order item ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1OrdersItemsIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataOrderItemInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1OrdersItemsId(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1OrdersItemsId($id), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1OrdersItemsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataOrderItemSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1OrdersItems(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1OrdersItems($queryParameters), $fetch);
    }
    /**
     * Loads a specified invoice.
     *
     * @param int $id The invoice ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1InvoicesIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataInvoiceInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InvoicesId(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InvoicesId($id), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1InvoicesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataInvoiceSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1Invoices(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1Invoices($queryParameters), $fetch);
    }
    /**
     * Performs persist operations for a specified invoice.
     *
     * @param \Kiboko\Magento\Model\V1InvoicesPostBody $postV1InvoicesBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1InvoicesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataInvoiceInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1Invoices(\Kiboko\Magento\Model\V1InvoicesPostBody $postV1InvoicesBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1Invoices($postV1InvoicesBody), $fetch);
    }
    /**
     * Lists comments for a specified invoice.
     *
     * @param int $id The invoice ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1InvoicesIdCommentsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataInvoiceCommentSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InvoicesIdComments(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InvoicesIdComments($id), $fetch);
    }
    /**
     * Emails a user a specified invoice.
     *
     * @param int $id The invoice ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1InvoicesIdEmailsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1InvoicesIdEmails(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1InvoicesIdEmails($id), $fetch);
    }
    /**
     * Voids a specified invoice.
     *
     * @param int $id The invoice ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1InvoicesIdVoidUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1InvoicesIdVoid(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1InvoicesIdVoid($id), $fetch);
    }
    /**
     * Sets invoice capture.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1InvoicesIdCaptureUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1InvoicesIdCapture(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1InvoicesIdCapture($id), $fetch);
    }
    /**
     * Performs persist operations for a specified invoice comment.
     *
     * @param \Kiboko\Magento\Model\V1InvoicesCommentsPostBody $postV1InvoicesCommentsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1InvoicesCommentsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1InvoicesCommentsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataInvoiceCommentInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1InvoicesComments(\Kiboko\Magento\Model\V1InvoicesCommentsPostBody $postV1InvoicesCommentsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1InvoicesComments($postV1InvoicesCommentsBody), $fetch);
    }
    /**
     * Create refund for invoice
     *
     * @param int $invoiceId 
     * @param \Kiboko\Magento\Model\V1InvoiceInvoiceIdRefundPostBody $postV1InvoiceInvoiceIdRefundBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1InvoiceInvoiceIdRefundUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1InvoiceInvoiceIdRefund(int $invoiceId, \Kiboko\Magento\Model\V1InvoiceInvoiceIdRefundPostBody $postV1InvoiceInvoiceIdRefundBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1InvoiceInvoiceIdRefund($invoiceId, $postV1InvoiceInvoiceIdRefundBody), $fetch);
    }
    /**
     * Lists comments for a specified credit memo.
     *
     * @param int $id The credit memo ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CreditmemoIdCommentsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataCreditmemoCommentSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CreditmemoIdComments(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CreditmemoIdComments($id), $fetch);
    }
    /**
     * Performs persist operations for a specified entity.
     *
     * @param string $id 
     * @param \Kiboko\Magento\Model\V1CreditmemoIdCommentsPostBody $postV1CreditmemoIdCommentsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CreditmemoIdCommentsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CreditmemoIdCommentsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataCreditmemoCommentInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CreditmemoIdComments(string $id, \Kiboko\Magento\Model\V1CreditmemoIdCommentsPostBody $postV1CreditmemoIdCommentsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CreditmemoIdComments($id, $postV1CreditmemoIdCommentsBody), $fetch);
    }
    /**
     * Loads a specified credit memo.
     *
     * @param int $id The credit memo ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CreditmemoIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataCreditmemoInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CreditmemoId(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CreditmemoId($id), $fetch);
    }
    /**
     * Cancels a specified credit memo.
     *
     * @param int $id The credit memo ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CreditmemoIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CreditmemoIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CreditmemoId(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CreditmemoId($id), $fetch);
    }
    /**
     * Emails a user a specified credit memo.
     *
     * @param int $id The credit memo ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CreditmemoIdEmailsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CreditmemoIdEmails(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CreditmemoIdEmails($id), $fetch);
    }
    /**
     * Prepare creditmemo to refund and save it.
     *
     * @param \Kiboko\Magento\Model\V1CreditmemoRefundPostBody $postV1CreditmemoRefundBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CreditmemoRefundUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataCreditmemoInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CreditmemoRefund(\Kiboko\Magento\Model\V1CreditmemoRefundPostBody $postV1CreditmemoRefundBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CreditmemoRefund($postV1CreditmemoRefundBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1CreditmemosUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataCreditmemoSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1Creditmemos(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1Creditmemos($queryParameters), $fetch);
    }
    /**
     * Performs persist operations for a specified credit memo.
     *
     * @param \Kiboko\Magento\Model\V1CreditmemoPostBody $postV1CreditmemoBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CreditmemoUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataCreditmemoInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1Creditmemo(\Kiboko\Magento\Model\V1CreditmemoPostBody $postV1CreditmemoBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1Creditmemo($postV1CreditmemoBody), $fetch);
    }
    /**
     * Create offline refund for order
     *
     * @param int $orderId 
     * @param \Kiboko\Magento\Model\V1OrderOrderIdRefundPostBody $postV1OrderOrderIdRefundBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1OrderOrderIdRefundUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1OrderOrderIdRefund(int $orderId, \Kiboko\Magento\Model\V1OrderOrderIdRefundPostBody $postV1OrderOrderIdRefundBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1OrderOrderIdRefund($orderId, $postV1OrderOrderIdRefundBody), $fetch);
    }
    /**
     * Loads a specified shipment.
     *
     * @param int $id The shipment ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1ShipmentIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataShipmentInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ShipmentId(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ShipmentId($id), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1ShipmentsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataShipmentSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1Shipments(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1Shipments($queryParameters), $fetch);
    }
    /**
     * Performs persist operations for a specified shipment.
     *
     * @param \Kiboko\Magento\Model\V1ShipmentPostBody $postV1ShipmentBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ShipmentUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataShipmentInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1Shipment(\Kiboko\Magento\Model\V1ShipmentPostBody $postV1ShipmentBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1Shipment($postV1ShipmentBody), $fetch);
    }
    /**
     * Lists comments for a specified shipment.
     *
     * @param int $id The shipment ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1ShipmentIdCommentsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataShipmentCommentSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ShipmentIdComments(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ShipmentIdComments($id), $fetch);
    }
    /**
     * Performs persist operations for a specified shipment comment.
     *
     * @param string $id 
     * @param \Kiboko\Magento\Model\V1ShipmentIdCommentsPostBody $postV1ShipmentIdCommentsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ShipmentIdCommentsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1ShipmentIdCommentsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataShipmentCommentInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ShipmentIdComments(string $id, \Kiboko\Magento\Model\V1ShipmentIdCommentsPostBody $postV1ShipmentIdCommentsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ShipmentIdComments($id, $postV1ShipmentIdCommentsBody), $fetch);
    }
    /**
     * Emails user a specified shipment.
     *
     * @param int $id The shipment ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ShipmentIdEmailsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ShipmentIdEmails(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ShipmentIdEmails($id), $fetch);
    }
    /**
     * Gets a specified shipment label.
     *
     * @param int $id The shipment label ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1ShipmentIdLabelUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ShipmentIdLabel(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ShipmentIdLabel($id), $fetch);
    }
    /**
     * Performs persist operations for a specified shipment track.
     *
     * @param \Kiboko\Magento\Model\V1ShipmentTrackPostBody $postV1ShipmentTrackBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ShipmentTrackUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1ShipmentTrackBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataShipmentTrackInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ShipmentTrack(\Kiboko\Magento\Model\V1ShipmentTrackPostBody $postV1ShipmentTrackBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ShipmentTrack($postV1ShipmentTrackBody), $fetch);
    }
    /**
     * Deletes a specified shipment track by ID.
     *
     * @param int $id The shipment track ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1ShipmentTrackIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1ShipmentTrackIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1ShipmentTrackId(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1ShipmentTrackId($id), $fetch);
    }
    /**
     * Creates new Shipment for given Order.
     *
     * @param int $orderId 
     * @param \Kiboko\Magento\Model\V1OrderOrderIdShipPostBody $postV1OrderOrderIdShipBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1OrderOrderIdShipUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1OrderOrderIdShip(int $orderId, \Kiboko\Magento\Model\V1OrderOrderIdShipPostBody $postV1OrderOrderIdShipBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1OrderOrderIdShip($orderId, $postV1OrderOrderIdShipBody), $fetch);
    }
    /**
     * Loads a specified transaction.
     *
     * @param int $id The transaction ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1TransactionsIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataTransactionInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1TransactionsId(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1TransactionsId($id), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1TransactionsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataTransactionSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1Transactions(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1Transactions($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $orderId 
     * @param \Kiboko\Magento\Model\V1OrderOrderIdInvoicePostBody $postV1OrderOrderIdInvoiceBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1OrderOrderIdInvoiceUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1OrderOrderIdInvoice(int $orderId, \Kiboko\Magento\Model\V1OrderOrderIdInvoicePostBody $postV1OrderOrderIdInvoiceBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1OrderOrderIdInvoice($orderId, $postV1OrderOrderIdInvoiceBody), $fetch);
    }
    /**
     * 
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdShippingInformationPostBody $postV1GuestcartsCartIdShippinginformationBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1GuestcartsCartIdShippinginformation(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdShippingInformationPostBody $postV1GuestcartsCartIdShippinginformationBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1GuestcartsCartIdShippinginformation($cartId, $postV1GuestcartsCartIdShippinginformationBody), $fetch);
    }
    /**
     * 
     *
     * @param \Kiboko\Magento\Model\V1CartsMineShippingInformationPostBody $postV1CartsMineShippinginformationBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CartsMineShippinginformationUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsMineShippinginformation(\Kiboko\Magento\Model\V1CartsMineShippingInformationPostBody $postV1CartsMineShippinginformationBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CartsMineShippinginformation($postV1CartsMineShippinginformationBody), $fetch);
    }
    /**
     * 
     *
     * @param int $cartId 
     * @param \Kiboko\Magento\Model\V1CartsCartIdShippingInformationPostBody $postV1CartsCartIdShippinginformationBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CartsCartIdShippinginformationUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsCartIdShippinginformation(int $cartId, \Kiboko\Magento\Model\V1CartsCartIdShippingInformationPostBody $postV1CartsCartIdShippinginformationBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CartsCartIdShippinginformation($cartId, $postV1CartsCartIdShippinginformationBody), $fetch);
    }
    /**
     * Calculate quote totals based on address and shipping method.
     *
     * @param int $cartId 
     * @param \Kiboko\Magento\Model\V1CartsCartIdTotalsInformationPostBody $postV1CartsCartIdTotalsinformationBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CartsCartIdTotalsinformationUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataTotalsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsCartIdTotalsinformation(int $cartId, \Kiboko\Magento\Model\V1CartsCartIdTotalsInformationPostBody $postV1CartsCartIdTotalsinformationBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CartsCartIdTotalsinformation($cartId, $postV1CartsCartIdTotalsinformationBody), $fetch);
    }
    /**
     * Calculate quote totals based on address and shipping method.
     *
     * @param \Kiboko\Magento\Model\V1CartsMineTotalsInformationPostBody $postV1CartsMineTotalsinformationBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CartsMineTotalsinformationUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataTotalsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsMineTotalsinformation(\Kiboko\Magento\Model\V1CartsMineTotalsInformationPostBody $postV1CartsMineTotalsinformationBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CartsMineTotalsinformation($postV1CartsMineTotalsinformationBody), $fetch);
    }
    /**
     * Calculate quote totals based on address and shipping method.
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdTotalsInformationPostBody $postV1GuestcartsCartIdTotalsinformationBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataTotalsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1GuestcartsCartIdTotalsinformation(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdTotalsInformationPostBody $postV1GuestcartsCartIdTotalsinformationBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1GuestcartsCartIdTotalsinformation($cartId, $postV1GuestcartsCartIdTotalsinformationBody), $fetch);
    }
    /**
     * Get payment information
     *
     * @param string $cartId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1GuestcartsCartIdPaymentinformation(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1GuestcartsCartIdPaymentinformation($cartId), $fetch);
    }
    /**
     * Set payment information and place order for a specified cart.
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdPaymentInformationPostBody $postV1GuestcartsCartIdPaymentinformationBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1GuestcartsCartIdPaymentinformationBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1GuestcartsCartIdPaymentinformation(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdPaymentInformationPostBody $postV1GuestcartsCartIdPaymentinformationBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1GuestcartsCartIdPaymentinformation($cartId, $postV1GuestcartsCartIdPaymentinformationBody), $fetch);
    }
    /**
     * Set payment information for a specified cart.
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdSetPaymentInformationPostBody $postV1GuestcartsCartIdSetpaymentinformationBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1GuestcartsCartIdSetpaymentinformationBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1GuestcartsCartIdSetpaymentinformation(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdSetPaymentInformationPostBody $postV1GuestcartsCartIdSetpaymentinformationBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1GuestcartsCartIdSetpaymentinformation($cartId, $postV1GuestcartsCartIdSetpaymentinformationBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CartsMinePaymentinformationUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsMinePaymentinformation(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsMinePaymentinformation(), $fetch);
    }
    /**
     * Set payment information and place order for a specified cart.
     *
     * @param \Kiboko\Magento\Model\V1CartsMinePaymentInformationPostBody $postV1CartsMinePaymentinformationBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CartsMinePaymentinformationUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CartsMinePaymentinformationBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsMinePaymentinformation(\Kiboko\Magento\Model\V1CartsMinePaymentInformationPostBody $postV1CartsMinePaymentinformationBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CartsMinePaymentinformation($postV1CartsMinePaymentinformationBody), $fetch);
    }
    /**
     * Set payment information for a specified cart.
     *
     * @param \Kiboko\Magento\Model\V1CartsMineSetPaymentInformationPostBody $postV1CartsMineSetpaymentinformationBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CartsMineSetpaymentinformationUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CartsMineSetpaymentinformationBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsMineSetpaymentinformation(\Kiboko\Magento\Model\V1CartsMineSetPaymentInformationPostBody $postV1CartsMineSetpaymentinformationBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CartsMineSetpaymentinformation($postV1CartsMineSetpaymentinformationBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1AnalyticsLinkUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\AnalyticsDataLinkInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1AnalyticsLink(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1AnalyticsLink(), $fetch);
    }
    /**
     * List of links with associated samples
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1ProductsSkuDownloadablelinksUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\DownloadableDataLinkInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ProductsSkuDownloadablelinks(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ProductsSkuDownloadablelinks($sku), $fetch);
    }
    /**
     * Update downloadable link of the given product (link type and its resources cannot be changed)
     *
     * @param string $sku 
     * @param \Kiboko\Magento\Model\V1ProductsSkuDownloadableLinksPostBody $postV1ProductsSkuDownloadablelinksBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsSkuDownloadablelinksUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsSkuDownloadablelinks(string $sku, \Kiboko\Magento\Model\V1ProductsSkuDownloadableLinksPostBody $postV1ProductsSkuDownloadablelinksBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsSkuDownloadablelinks($sku, $postV1ProductsSkuDownloadablelinksBody), $fetch);
    }
    /**
     * Update downloadable link of the given product (link type and its resources cannot be changed)
     *
     * @param string $sku 
     * @param string $id 
     * @param \Kiboko\Magento\Model\V1ProductsSkuDownloadableLinksIdPutBody $putV1ProductsSkuDownloadablelinksIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1ProductsSkuDownloadablelinksIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1ProductsSkuDownloadablelinksId(string $sku, string $id, \Kiboko\Magento\Model\V1ProductsSkuDownloadableLinksIdPutBody $putV1ProductsSkuDownloadablelinksIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1ProductsSkuDownloadablelinksId($sku, $id, $putV1ProductsSkuDownloadablelinksIdBody), $fetch);
    }
    /**
     * Delete downloadable link
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsDownloadablelinksIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1ProductsDownloadablelinksId(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1ProductsDownloadablelinksId($id), $fetch);
    }
    /**
     * List of samples for downloadable product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1ProductsSkuDownloadablelinksSamplesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\DownloadableDataSampleInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ProductsSkuDownloadablelinksSamples(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ProductsSkuDownloadablelinksSamples($sku), $fetch);
    }
    /**
     * Update downloadable sample of the given product
     *
     * @param string $sku 
     * @param \Kiboko\Magento\Model\V1ProductsSkuDownloadableLinksSamplesPostBody $postV1ProductsSkuDownloadablelinksSamplesBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ProductsSkuDownloadablelinksSamplesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ProductsSkuDownloadablelinksSamples(string $sku, \Kiboko\Magento\Model\V1ProductsSkuDownloadableLinksSamplesPostBody $postV1ProductsSkuDownloadablelinksSamplesBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ProductsSkuDownloadablelinksSamples($sku, $postV1ProductsSkuDownloadablelinksSamplesBody), $fetch);
    }
    /**
     * Update downloadable sample of the given product
     *
     * @param string $sku 
     * @param string $id 
     * @param \Kiboko\Magento\Model\V1ProductsSkuDownloadableLinksSamplesIdPutBody $putV1ProductsSkuDownloadablelinksSamplesIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1ProductsSkuDownloadablelinksSamplesIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1ProductsSkuDownloadablelinksSamplesId(string $sku, string $id, \Kiboko\Magento\Model\V1ProductsSkuDownloadableLinksSamplesIdPutBody $putV1ProductsSkuDownloadablelinksSamplesIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1ProductsSkuDownloadablelinksSamplesId($sku, $id, $putV1ProductsSkuDownloadablelinksSamplesIdBody), $fetch);
    }
    /**
     * Delete downloadable sample
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1ProductsDownloadablelinksSamplesIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1ProductsDownloadablelinksSamplesId(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1ProductsDownloadablelinksSamplesId($id), $fetch);
    }
    /**
     * Add child product to specified Bundle option by product sku
     *
     * @param string $sku 
     * @param int $optionId 
     * @param \Kiboko\Magento\Model\V1BundleProductsSkuLinksOptionIdPostBody $postV1BundleproductsSkuLinksOptionIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1BundleproductsSkuLinksOptionIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1BundleproductsSkuLinksOptionIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1BundleproductsSkuLinksOptionId(string $sku, int $optionId, \Kiboko\Magento\Model\V1BundleProductsSkuLinksOptionIdPostBody $postV1BundleproductsSkuLinksOptionIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1BundleproductsSkuLinksOptionId($sku, $optionId, $postV1BundleproductsSkuLinksOptionIdBody), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param string $id 
     * @param \Kiboko\Magento\Model\V1BundleProductsSkuLinksIdPutBody $putV1BundleproductsSkuLinksIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1BundleproductsSkuLinksIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1BundleproductsSkuLinksIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1BundleproductsSkuLinksId(string $sku, string $id, \Kiboko\Magento\Model\V1BundleProductsSkuLinksIdPutBody $putV1BundleproductsSkuLinksIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1BundleproductsSkuLinksId($sku, $id, $putV1BundleproductsSkuLinksIdBody), $fetch);
    }
    /**
     * Get all children for Bundle product
     *
     * @param string $productSku 
     * @param array $queryParameters {
     *     @var int $optionId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1BundleproductsProductSkuChildrenUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1BundleproductsProductSkuChildrenBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\BundleDataLinkInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1BundleproductsProductSkuChildren(string $productSku, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1BundleproductsProductSkuChildren($productSku, $queryParameters), $fetch);
    }
    /**
     * Remove product from Bundle product option
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $childSku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1BundleproductsSkuOptionsOptionIdChildrenChildSkuUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1BundleproductsSkuOptionsOptionIdChildrenChildSkuBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1BundleproductsSkuOptionsOptionIdChildrenChildSku(string $sku, int $optionId, string $childSku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1BundleproductsSkuOptionsOptionIdChildrenChildSku($sku, $optionId, $childSku), $fetch);
    }
    /**
     * Get all options for bundle product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1BundleproductsSkuOptionsAllUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1BundleproductsSkuOptionsAllBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\BundleDataOptionInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1BundleproductsSkuOptionsAll(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1BundleproductsSkuOptionsAll($sku), $fetch);
    }
    /**
     * Remove bundle option
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1BundleproductsSkuOptionsOptionIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1BundleproductsSkuOptionsOptionIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1BundleproductsSkuOptionsOptionId(string $sku, int $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1BundleproductsSkuOptionsOptionId($sku, $optionId), $fetch);
    }
    /**
     * Get option for bundle product
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1BundleproductsSkuOptionsOptionIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1BundleproductsSkuOptionsOptionIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\BundleDataOptionInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1BundleproductsSkuOptionsOptionId(string $sku, int $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1BundleproductsSkuOptionsOptionId($sku, $optionId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1BundleproductsOptionsTypesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\BundleDataOptionTypeInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1BundleproductsOptionsTypes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1BundleproductsOptionsTypes(), $fetch);
    }
    /**
     * Add new option for bundle product
     *
     * @param \Kiboko\Magento\Model\V1BundleProductsOptionsAddPostBody $postV1BundleproductsOptionsAddBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1BundleproductsOptionsAddUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1BundleproductsOptionsAddBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1BundleproductsOptionsAdd(\Kiboko\Magento\Model\V1BundleProductsOptionsAddPostBody $postV1BundleproductsOptionsAddBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1BundleproductsOptionsAdd($postV1BundleproductsOptionsAddBody), $fetch);
    }
    /**
     * Add new option for bundle product
     *
     * @param string $optionId 
     * @param \Kiboko\Magento\Model\V1BundleProductsOptionsOptionIdPutBody $putV1BundleproductsOptionsOptionIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1BundleproductsOptionsOptionIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1BundleproductsOptionsOptionIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1BundleproductsOptionsOptionId(string $optionId, \Kiboko\Magento\Model\V1BundleProductsOptionsOptionIdPutBody $putV1BundleproductsOptionsOptionIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1BundleproductsOptionsOptionId($optionId, $putV1BundleproductsOptionsOptionIdBody), $fetch);
    }
    /**
     * Return the gift message for a specified order.
     *
     * @param int $cartId The shopping cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CartsCartIdGiftmessageUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsCartIdGiftmessage(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsCartIdGiftmessage($cartId), $fetch);
    }
    /**
     * Set the gift message for an entire order.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1CartsCartIdGiftMessagePostBody $postV1CartsCartIdGiftmessageBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CartsCartIdGiftmessageUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CartsCartIdGiftmessageBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsCartIdGiftmessage(int $cartId, \Kiboko\Magento\Model\V1CartsCartIdGiftMessagePostBody $postV1CartsCartIdGiftmessageBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CartsCartIdGiftmessage($cartId, $postV1CartsCartIdGiftmessageBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CartsMineGiftmessageUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsMineGiftmessage(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsMineGiftmessage(), $fetch);
    }
    /**
     * Set the gift message for an entire order.
     *
     * @param \Kiboko\Magento\Model\V1CartsMineGiftMessagePostBody $postV1CartsMineGiftmessageBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CartsMineGiftmessageUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CartsMineGiftmessageBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsMineGiftmessage(\Kiboko\Magento\Model\V1CartsMineGiftMessagePostBody $postV1CartsMineGiftmessageBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CartsMineGiftmessage($postV1CartsMineGiftmessageBody), $fetch);
    }
    /**
     * Return the gift message for a specified item in a specified shopping cart.
     *
     * @param int $cartId The shopping cart ID.
     * @param int $itemId The item ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CartsCartIdGiftmessageItemIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CartsCartIdGiftmessageItemIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsCartIdGiftmessageItemId(int $cartId, int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsCartIdGiftmessageItemId($cartId, $itemId), $fetch);
    }
    /**
     * Set the gift message for a specified item in a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param int $itemId The item ID.
     * @param \Kiboko\Magento\Model\V1CartsCartIdGiftMessageItemIdPostBody $postV1CartsCartIdGiftmessageItemIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CartsCartIdGiftmessageItemIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CartsCartIdGiftmessageItemIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsCartIdGiftmessageItemId(int $cartId, int $itemId, \Kiboko\Magento\Model\V1CartsCartIdGiftMessageItemIdPostBody $postV1CartsCartIdGiftmessageItemIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CartsCartIdGiftmessageItemId($cartId, $itemId, $postV1CartsCartIdGiftmessageItemIdBody), $fetch);
    }
    /**
     * Return the gift message for a specified item in a specified shopping cart.
     *
     * @param int $itemId The item ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CartsMineGiftmessageItemIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CartsMineGiftmessageItemIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsMineGiftmessageItemId(int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsMineGiftmessageItemId($itemId), $fetch);
    }
    /**
     * Set the gift message for a specified item in a specified shopping cart.
     *
     * @param int $itemId The item ID.
     * @param \Kiboko\Magento\Model\V1CartsMineGiftMessageItemIdPostBody $postV1CartsMineGiftmessageItemIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CartsMineGiftmessageItemIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CartsMineGiftmessageItemIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CartsMineGiftmessageItemId(int $itemId, \Kiboko\Magento\Model\V1CartsMineGiftMessageItemIdPostBody $postV1CartsMineGiftmessageItemIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CartsMineGiftmessageItemId($itemId, $postV1CartsMineGiftmessageItemIdBody), $fetch);
    }
    /**
     * Return the gift message for a specified order.
     *
     * @param string $cartId The shopping cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1GuestcartsCartIdGiftmessage(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1GuestcartsCartIdGiftmessage($cartId), $fetch);
    }
    /**
     * Set the gift message for an entire order.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdGiftMessagePostBody $postV1GuestcartsCartIdGiftmessageBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1GuestcartsCartIdGiftmessageBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1GuestcartsCartIdGiftmessage(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdGiftMessagePostBody $postV1GuestcartsCartIdGiftmessageBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1GuestcartsCartIdGiftmessage($cartId, $postV1GuestcartsCartIdGiftmessageBody), $fetch);
    }
    /**
     * Return the gift message for a specified item in a specified shopping cart.
     *
     * @param string $cartId The shopping cart ID.
     * @param int $itemId The item ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1GuestcartsCartIdGiftmessageItemIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1GuestcartsCartIdGiftmessageItemId(string $cartId, int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1GuestcartsCartIdGiftmessageItemId($cartId, $itemId), $fetch);
    }
    /**
     * Set the gift message for a specified item in a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param int $itemId The item ID.
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdGiftMessageItemIdPostBody $postV1GuestcartsCartIdGiftmessageItemIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1GuestcartsCartIdGiftmessageItemIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1GuestcartsCartIdGiftmessageItemId(string $cartId, int $itemId, \Kiboko\Magento\Model\V1GuestCartsCartIdGiftMessageItemIdPostBody $postV1GuestcartsCartIdGiftmessageItemIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1GuestcartsCartIdGiftmessageItemId($cartId, $itemId, $postV1GuestcartsCartIdGiftmessageItemIdBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1InventorySourcesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryApiDataSourceSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InventorySources(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InventorySources($queryParameters), $fetch);
    }
    /**
     * Save Source data
     *
     * @param \Kiboko\Magento\Model\V1InventorySourcesPostBody $postV1InventorySourcesBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1InventorySourcesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1InventorySourcesBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1InventorySources(\Kiboko\Magento\Model\V1InventorySourcesPostBody $postV1InventorySourcesBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1InventorySources($postV1InventorySourcesBody), $fetch);
    }
    /**
     * Get Source data by given code. If you want to create plugin on get method, also you need to create separate plugin on getList method, because entity loading way is different for these methods
     *
     * @param string $sourceCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1InventorySourcesSourceCodeUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1InventorySourcesSourceCodeBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryApiDataSourceInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InventorySourcesSourceCode(string $sourceCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InventorySourcesSourceCode($sourceCode), $fetch);
    }
    /**
     * Save Source data
     *
     * @param string $sourceCode 
     * @param \Kiboko\Magento\Model\V1InventorySourcesSourceCodePutBody $putV1InventorySourcesSourceCodeBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1InventorySourcesSourceCodeUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1InventorySourcesSourceCodeBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1InventorySourcesSourceCode(string $sourceCode, \Kiboko\Magento\Model\V1InventorySourcesSourceCodePutBody $putV1InventorySourcesSourceCodeBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1InventorySourcesSourceCode($sourceCode, $putV1InventorySourcesSourceCodeBody), $fetch);
    }
    /**
     * Get Sources assigned to Stock ordered by priority If Stock with given id doesn't exist then return an empty array
     *
     * @param int $stockId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1InventoryGetsourcesassignedtostockorderedbypriorityStockIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1InventoryGetsourcesassignedtostockorderedbypriorityStockIdBadRequestException
     * @throws \Kiboko\Magento\Exception\GetV1InventoryGetsourcesassignedtostockorderedbypriorityStockIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryApiDataSourceInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InventoryGetsourcesassignedtostockorderedbypriorityStockId(int $stockId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InventoryGetsourcesassignedtostockorderedbypriorityStockId($stockId), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1InventoryStocksUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryApiDataStockSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InventoryStocks(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InventoryStocks($queryParameters), $fetch);
    }
    /**
     * Save Stock data
     *
     * @param \Kiboko\Magento\Model\V1InventoryStocksPostBody $postV1InventoryStocksBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1InventoryStocksUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1InventoryStocksBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1InventoryStocks(\Kiboko\Magento\Model\V1InventoryStocksPostBody $postV1InventoryStocksBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1InventoryStocks($postV1InventoryStocksBody), $fetch);
    }
    /**
     * Delete the Stock data by stockId. If stock is not found do nothing
     *
     * @param int $stockId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1InventoryStocksStockIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1InventoryStocksStockIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1InventoryStocksStockId(int $stockId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1InventoryStocksStockId($stockId), $fetch);
    }
    /**
     * Get Stock data by given stockId. If you want to create plugin on get method, also you need to create separate plugin on getList method, because entity loading way is different for these methods
     *
     * @param int $stockId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1InventoryStocksStockIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1InventoryStocksStockIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryApiDataStockInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InventoryStocksStockId(int $stockId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InventoryStocksStockId($stockId), $fetch);
    }
    /**
     * Save Stock data
     *
     * @param string $stockId 
     * @param \Kiboko\Magento\Model\V1InventoryStocksStockIdPutBody $putV1InventoryStocksStockIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1InventoryStocksStockIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1InventoryStocksStockIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1InventoryStocksStockId(string $stockId, \Kiboko\Magento\Model\V1InventoryStocksStockIdPutBody $putV1InventoryStocksStockIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1InventoryStocksStockId($stockId, $putV1InventoryStocksStockIdBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1InventoryStocksourcelinksUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryApiDataStockSourceLinkSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InventoryStocksourcelinks(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InventoryStocksourcelinks($queryParameters), $fetch);
    }
    /**
     * Save StockSourceLink list data
     *
     * @param \Kiboko\Magento\Model\V1InventoryStockSourceLinksPostBody $postV1InventoryStocksourcelinksBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1InventoryStocksourcelinksUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1InventoryStocksourcelinksBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1InventoryStocksourcelinks(\Kiboko\Magento\Model\V1InventoryStockSourceLinksPostBody $postV1InventoryStocksourcelinksBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1InventoryStocksourcelinks($postV1InventoryStocksourcelinksBody), $fetch);
    }
    /**
     * Remove StockSourceLink list list
     *
     * @param \Kiboko\Magento\Model\V1InventoryStockSourceLinksDeletePostBody $postV1InventoryStocksourcelinksdeleteBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1InventoryStocksourcelinksdeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1InventoryStocksourcelinksdeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1InventoryStocksourcelinksdelete(\Kiboko\Magento\Model\V1InventoryStockSourceLinksDeletePostBody $postV1InventoryStocksourcelinksdeleteBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1InventoryStocksourcelinksdelete($postV1InventoryStocksourcelinksdeleteBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1InventorySourceitemsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryApiDataSourceItemSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InventorySourceitems(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InventorySourceitems($queryParameters), $fetch);
    }
    /**
     * Save Multiple Source item data
     *
     * @param \Kiboko\Magento\Model\V1InventorySourceItemsPostBody $postV1InventorySourceitemsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1InventorySourceitemsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1InventorySourceitemsBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1InventorySourceitems(\Kiboko\Magento\Model\V1InventorySourceItemsPostBody $postV1InventorySourceitemsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1InventorySourceitems($postV1InventorySourceitemsBody), $fetch);
    }
    /**
     * Delete Multiple Source item data
     *
     * @param \Kiboko\Magento\Model\V1InventorySourceItemsDeletePostBody $postV1InventorySourceitemsdeleteBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1InventorySourceitemsdeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1InventorySourceitemsdeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1InventorySourceitemsdelete(\Kiboko\Magento\Model\V1InventorySourceItemsDeletePostBody $postV1InventorySourceitemsdeleteBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1InventorySourceitemsdelete($postV1InventorySourceitemsdeleteBody), $fetch);
    }
    /**
     * Run mass product to source assignment
     *
     * @param \Kiboko\Magento\Model\V1InventoryBulkProductSourceAssignPostBody $postV1InventoryBulkproductsourceassignBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1InventoryBulkproductsourceassignUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1InventoryBulkproductsourceassignBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1InventoryBulkproductsourceassign(\Kiboko\Magento\Model\V1InventoryBulkProductSourceAssignPostBody $postV1InventoryBulkproductsourceassignBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1InventoryBulkproductsourceassign($postV1InventoryBulkproductsourceassignBody), $fetch);
    }
    /**
     * Run mass product to source un-assignment
     *
     * @param \Kiboko\Magento\Model\V1InventoryBulkProductSourceUnassignPostBody $postV1InventoryBulkproductsourceunassignBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1InventoryBulkproductsourceunassignUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1InventoryBulkproductsourceunassignBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1InventoryBulkproductsourceunassign(\Kiboko\Magento\Model\V1InventoryBulkProductSourceUnassignPostBody $postV1InventoryBulkproductsourceunassignBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1InventoryBulkproductsourceunassign($postV1InventoryBulkproductsourceunassignBody), $fetch);
    }
    /**
     * Run bulk inventory transfer
     *
     * @param \Kiboko\Magento\Model\V1InventoryBulkProductSourceTransferPostBody $postV1InventoryBulkproductsourcetransferBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1InventoryBulkproductsourcetransferUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1InventoryBulkproductsourcetransferBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1InventoryBulkproductsourcetransfer(\Kiboko\Magento\Model\V1InventoryBulkProductSourceTransferPostBody $postV1InventoryBulkproductsourcetransferBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1InventoryBulkproductsourcetransfer($postV1InventoryBulkproductsourcetransferBody), $fetch);
    }
    /**
     * Run bulk partial inventory transfer for specified items.
     *
     * @param \Kiboko\Magento\Model\V1InventoryBulkPartialSourceTransferPostBody $postV1InventoryBulkpartialsourcetransferBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1InventoryBulkpartialsourcetransferUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1InventoryBulkpartialsourcetransferBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1InventoryBulkpartialsourcetransfer(\Kiboko\Magento\Model\V1InventoryBulkPartialSourceTransferPostBody $postV1InventoryBulkpartialsourcetransferBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1InventoryBulkpartialsourcetransfer($postV1InventoryBulkpartialsourcetransferBody), $fetch);
    }
    /**
     * Get all children for Configurable product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ConfigurableproductsSkuChildren(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ConfigurableproductsSkuChildren($sku), $fetch);
    }
    /**
     * Remove configurable product option
     *
     * @param string $sku 
     * @param string $childSku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1ConfigurableproductsSkuChildrenChildSkuUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1ConfigurableproductsSkuChildrenChildSkuBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1ConfigurableproductsSkuChildrenChildSku(string $sku, string $childSku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1ConfigurableproductsSkuChildrenChildSku($sku, $childSku), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param \Kiboko\Magento\Model\V1ConfigurableProductsSkuChildPostBody $postV1ConfigurableproductsSkuChildBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ConfigurableproductsSkuChildUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ConfigurableproductsSkuChild(string $sku, \Kiboko\Magento\Model\V1ConfigurableProductsSkuChildPostBody $postV1ConfigurableproductsSkuChildBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ConfigurableproductsSkuChild($sku, $postV1ConfigurableproductsSkuChildBody), $fetch);
    }
    /**
     * Generate variation based on same product
     *
     * @param \Kiboko\Magento\Model\V1ConfigurableProductsVariationPutBody $putV1ConfigurableproductsVariationBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1ConfigurableproductsVariationUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1ConfigurableproductsVariation(\Kiboko\Magento\Model\V1ConfigurableProductsVariationPutBody $putV1ConfigurableproductsVariationBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1ConfigurableproductsVariation($putV1ConfigurableproductsVariationBody), $fetch);
    }
    /**
     * Remove option from configurable product
     *
     * @param string $sku 
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1ConfigurableproductsSkuOptionsIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1ConfigurableproductsSkuOptionsIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1ConfigurableproductsSkuOptionsId(string $sku, int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1ConfigurableproductsSkuOptionsId($sku, $id), $fetch);
    }
    /**
     * Get option for configurable product
     *
     * @param string $sku 
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1ConfigurableproductsSkuOptionsIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ConfigurableProductDataOptionInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ConfigurableproductsSkuOptionsId(string $sku, int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ConfigurableproductsSkuOptionsId($sku, $id), $fetch);
    }
    /**
     * Save option
     *
     * @param string $sku 
     * @param string $id 
     * @param \Kiboko\Magento\Model\V1ConfigurableProductsSkuOptionsIdPutBody $putV1ConfigurableproductsSkuOptionsIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1ConfigurableproductsSkuOptionsIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1ConfigurableproductsSkuOptionsIdBadRequestException
     * @throws \Kiboko\Magento\Exception\PutV1ConfigurableproductsSkuOptionsIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1ConfigurableproductsSkuOptionsId(string $sku, string $id, \Kiboko\Magento\Model\V1ConfigurableProductsSkuOptionsIdPutBody $putV1ConfigurableproductsSkuOptionsIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1ConfigurableproductsSkuOptionsId($sku, $id, $putV1ConfigurableproductsSkuOptionsIdBody), $fetch);
    }
    /**
     * Get all options for configurable product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1ConfigurableproductsSkuOptionsAllBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ConfigurableProductDataOptionInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ConfigurableproductsSkuOptionsAll(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ConfigurableproductsSkuOptionsAll($sku), $fetch);
    }
    /**
     * Save option
     *
     * @param string $sku 
     * @param \Kiboko\Magento\Model\V1ConfigurableProductsSkuOptionsPostBody $postV1ConfigurableproductsSkuOptionsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1ConfigurableproductsSkuOptionsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1ConfigurableproductsSkuOptionsBadRequestException
     * @throws \Kiboko\Magento\Exception\PostV1ConfigurableproductsSkuOptionsInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1ConfigurableproductsSkuOptions(string $sku, \Kiboko\Magento\Model\V1ConfigurableProductsSkuOptionsPostBody $postV1ConfigurableproductsSkuOptionsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1ConfigurableproductsSkuOptions($sku, $postV1ConfigurableproductsSkuOptionsBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1InventoryGetdistanceprovidercodeUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InventoryGetdistanceprovidercode(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InventoryGetdistanceprovidercode(), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1InventoryGetdistanceUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InventoryGetdistance(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InventoryGetdistance($queryParameters), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1InventoryGetlatlngfromaddressUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryDistanceBasedSourceSelectionApiDataLatLngInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InventoryGetlatlngfromaddress(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InventoryGetlatlngfromaddress($queryParameters), $fetch);
    }
    /**
     * Get all available latitude and longitude objects from address.
     *
     * @param array $queryParameters {
     *     @var string $address[country] Shipping country
     *     @var string $address[postcode] Shipping postcode
     *     @var string $address[street] Shipping street address
     *     @var string $address[region] Shipping region
     *     @var string $address[city] Shipping city
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1InventoryGetlatslngsfromaddressUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1InventoryGetlatslngsfromaddressBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryDistanceBasedSourceSelectionApiDataLatLngInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InventoryGetlatslngsfromaddress(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InventoryGetlatslngsfromaddress($queryParameters), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1InventoryExportstocksalableqtySalesChannelTypeSalesChannelCodeUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryExportStockApiDataExportStockSalableQtySearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InventoryExportstocksalableqtySalesChannelTypeSalesChannelCode(string $salesChannelType, string $salesChannelCode, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InventoryExportstocksalableqtySalesChannelTypeSalesChannelCode($salesChannelType, $salesChannelCode, $queryParameters), $fetch);
    }
    /**
     * Provides stock index export from inventory_stock_% table
     *
     * @param string $salesChannelType 
     * @param string $salesChannelCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1InventoryDumpstockindexdataSalesChannelTypeSalesChannelCodeUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryExportStockApiDataProductStockIndexDataInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InventoryDumpstockindexdataSalesChannelTypeSalesChannelCode(string $salesChannelType, string $salesChannelCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InventoryDumpstockindexdataSalesChannelTypeSalesChannelCode($salesChannelType, $salesChannelCode), $fetch);
    }
    /**
     * Get Product Quantity for given SKU and Stock
     *
     * @param string $sku 
     * @param int $stockId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1InventoryGetproductsalablequantitySkuStockIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1InventoryGetproductsalablequantitySkuStockIdBadRequestException
     * @throws \Kiboko\Magento\Exception\GetV1InventoryGetproductsalablequantitySkuStockIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InventoryGetproductsalablequantitySkuStockId(string $sku, int $stockId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InventoryGetproductsalablequantitySkuStockId($sku, $stockId), $fetch);
    }
    /**
     * Get is product in salable for given SKU in a given Stock
     *
     * @param string $sku 
     * @param int $stockId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1InventoryIsproductsalableSkuStockIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InventoryIsproductsalableSkuStockId(string $sku, int $stockId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InventoryIsproductsalableSkuStockId($sku, $stockId), $fetch);
    }
    /**
     * Get products salable status for given SKUs and given Stock.
     *
     * @param array $queryParameters {
     *     @var array $skus 
     *     @var int $stockId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1InventoryAreproductssalableUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventorySalesApiDataIsProductSalableResultInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InventoryAreproductssalable(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InventoryAreproductssalable($queryParameters), $fetch);
    }
    /**
     * Get is product salable for given SKU in a given Stock for a certain Qty
     *
     * @param string $sku 
     * @param int $stockId 
     * @param float $requestedQty 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1InventoryIsproductsalableforrequestedqtySkuStockIdRequestedQtyUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1InventoryIsproductsalableforrequestedqtySkuStockIdRequestedQtyInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventorySalesApiDataProductSalableResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InventoryIsproductsalableforrequestedqtySkuStockIdRequestedQty(string $sku, int $stockId, float $requestedQty, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InventoryIsproductsalableforrequestedqtySkuStockIdRequestedQty($sku, $stockId, $requestedQty), $fetch);
    }
    /**
     * Get whether products are salable in requested Qty for given set of SKUs in specified stock.
     *
     * @param array $queryParameters {
     *     @var string $skuRequests[0][sku] Product sku.
     *     @var float $skuRequests[0][qty] Product quantity.
     *     @var int $stockId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1InventoryAreproductsalableforrequestedqtyUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1InventoryAreproductsalableforrequestedqtyInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventorySalesApiDataIsProductSalableForRequestedQtyResultInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InventoryAreproductsalableforrequestedqty(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InventoryAreproductsalableforrequestedqty($queryParameters), $fetch);
    }
    /**
     * Resolve Stock by Sales Channel type and code
     *
     * @param string $type 
     * @param string $code 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1InventoryStockresolverTypeCodeUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1InventoryStockresolverTypeCodeBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryApiDataStockInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InventoryStockresolverTypeCode(string $type, string $code, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InventoryStockresolverTypeCode($type, $code), $fetch);
    }
    /**
     * Get Pickup Locations according to the results of filtration by Search Request.
     *
     * @param array $queryParameters {
     *     @var int $searchRequest[area][radius] Search radius in KM.
     *     @var string $searchRequest[area][searchTerm] Search term string.
     *     @var string $searchRequest[filters][country][value] Value.
     *     @var string $searchRequest[filters][country][conditionType] Condition Type.
     *     @var string $searchRequest[filters][postcode][value] Value.
     *     @var string $searchRequest[filters][postcode][conditionType] Condition Type.
     *     @var string $searchRequest[filters][region][value] Value.
     *     @var string $searchRequest[filters][region][conditionType] Condition Type.
     *     @var string $searchRequest[filters][regionId][value] Value.
     *     @var string $searchRequest[filters][regionId][conditionType] Condition Type.
     *     @var string $searchRequest[filters][city][value] Value.
     *     @var string $searchRequest[filters][city][conditionType] Condition Type.
     *     @var string $searchRequest[filters][street][value] Value.
     *     @var string $searchRequest[filters][street][conditionType] Condition Type.
     *     @var string $searchRequest[filters][name][value] Value.
     *     @var string $searchRequest[filters][name][conditionType] Condition Type.
     *     @var string $searchRequest[filters][pickupLocationCode][value] Value.
     *     @var string $searchRequest[filters][pickupLocationCode][conditionType] Condition Type.
     *     @var int $searchRequest[pageSize] Page size.
     *     @var int $searchRequest[currentPage] Current page.
     *     @var string $searchRequest[scopeType] Sales Channel Type.
     *     @var string $searchRequest[scopeCode] Sales Channel code.
     *     @var string $searchRequest[sort][0][field] Sorting field.
     *     @var string $searchRequest[sort][0][direction] Sorting direction.
     *     @var string $searchRequest[extensionAttributes][productsInfo][0][sku] Product SKU.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryInStorePickupApiDataSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InventoryInstorepickupPickuplocations(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InventoryInstorepickupPickuplocations($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1InventorySourceselectionalgorithmlistUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventorySourceSelectionApiDataSourceSelectionAlgorithmInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InventorySourceselectionalgorithmlist(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InventorySourceselectionalgorithmlist(), $fetch);
    }
    /**
     * 
     *
     * @param \Kiboko\Magento\Model\V1InventorySourceSelectionAlgorithmResultPostBody $postV1InventorySourceselectionalgorithmresultBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1InventorySourceselectionalgorithmresultUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventorySourceSelectionApiDataSourceSelectionResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1InventorySourceselectionalgorithmresult(\Kiboko\Magento\Model\V1InventorySourceSelectionAlgorithmResultPostBody $postV1InventorySourceselectionalgorithmresultBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1InventorySourceselectionalgorithmresult($postV1InventorySourceselectionalgorithmresultBody), $fetch);
    }
    /**
     * Notify customer that the orders is ready for pickup.
     *
     * @param \Kiboko\Magento\Model\V1OrderNotifyOrdersAreReadyForPickupPostBody $postV1OrderNotifyordersarereadyforpickupBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1OrderNotifyordersarereadyforpickupUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryInStorePickupSalesApiDataResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1OrderNotifyordersarereadyforpickup(\Kiboko\Magento\Model\V1OrderNotifyOrdersAreReadyForPickupPostBody $postV1OrderNotifyordersarereadyforpickupBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1OrderNotifyordersarereadyforpickup($postV1OrderNotifyordersarereadyforpickupBody), $fetch);
    }
    /**
     * Get the source item configuration
     *
     * @param string $sourceCode 
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1InventoryLowquantitynotificationSourceCodeSkuUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1InventoryLowquantitynotificationSourceCodeSkuInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryLowQuantityNotificationApiDataSourceItemConfigurationInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1InventoryLowquantitynotificationSourceCodeSku(string $sourceCode, string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1InventoryLowquantitynotificationSourceCodeSku($sourceCode, $sku), $fetch);
    }
    /**
     * 
     *
     * @param \Kiboko\Magento\Model\V1InventoryLowQuantityNotificationPostBody $postV1InventoryLowquantitynotificationBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1InventoryLowquantitynotificationUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1InventoryLowquantitynotification(\Kiboko\Magento\Model\V1InventoryLowQuantityNotificationPostBody $postV1InventoryLowquantitynotificationBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1InventoryLowquantitynotification($postV1InventoryLowquantitynotificationBody), $fetch);
    }
    /**
     * Delete multiple source items configuration for low quantity
     *
     * @param \Kiboko\Magento\Model\V1InventoryLowQuantityNotificationsDeletePostBody $postV1InventoryLowquantitynotificationsdeleteBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1InventoryLowquantitynotificationsdeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1InventoryLowquantitynotificationsdelete(\Kiboko\Magento\Model\V1InventoryLowQuantityNotificationsDeletePostBody $postV1InventoryLowquantitynotificationsdeleteBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1InventoryLowquantitynotificationsdelete($postV1InventoryLowquantitynotificationsdeleteBody), $fetch);
    }
    /**
     * Delete asset
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1AdobestockAssetIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1AdobestockAssetIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1AdobestockAssetId(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1AdobestockAssetId($id), $fetch);
    }
    /**
     * Get asset by id
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1AdobestockAssetIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1AdobestockAssetIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\AdobeStockAssetApiDataAssetInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1AdobestockAssetId(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1AdobestockAssetId($id), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1AdobestockAssetSearchUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\AdobeStockAssetApiDataAssetSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1AdobestockAssetSearch(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1AdobestockAssetSearch($queryParameters), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1AdobestockAssetListUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1AdobestockAssetListInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\FrameworkSearchSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1AdobestockAssetList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1AdobestockAssetList($queryParameters), $fetch);
    }
    /**
     * Delete rule by ID.
     *
     * @param int $ruleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1SalesRulesRuleIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1SalesRulesRuleIdBadRequestException
     * @throws \Kiboko\Magento\Exception\DeleteV1SalesRulesRuleIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1SalesRulesRuleId(int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1SalesRulesRuleId($ruleId), $fetch);
    }
    /**
     * Get rule by ID.
     *
     * @param int $ruleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1SalesRulesRuleIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1SalesRulesRuleIdBadRequestException
     * @throws \Kiboko\Magento\Exception\GetV1SalesRulesRuleIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesRuleDataRuleInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1SalesRulesRuleId(int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1SalesRulesRuleId($ruleId), $fetch);
    }
    /**
     * Save sales rule.
     *
     * @param string $ruleId 
     * @param \Kiboko\Magento\Model\V1SalesRulesRuleIdPutBody $putV1SalesRulesRuleIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1SalesRulesRuleIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1SalesRulesRuleIdBadRequestException
     * @throws \Kiboko\Magento\Exception\PutV1SalesRulesRuleIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesRuleDataRuleInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1SalesRulesRuleId(string $ruleId, \Kiboko\Magento\Model\V1SalesRulesRuleIdPutBody $putV1SalesRulesRuleIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1SalesRulesRuleId($ruleId, $putV1SalesRulesRuleIdBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1SalesRulesSearchUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1SalesRulesSearchInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesRuleDataRuleSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1SalesRulesSearch(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1SalesRulesSearch($queryParameters), $fetch);
    }
    /**
     * Save sales rule.
     *
     * @param \Kiboko\Magento\Model\V1SalesRulesPostBody $postV1SalesRulesBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1SalesRulesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1SalesRulesBadRequestException
     * @throws \Kiboko\Magento\Exception\PostV1SalesRulesInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesRuleDataRuleInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1SalesRules(\Kiboko\Magento\Model\V1SalesRulesPostBody $postV1SalesRulesBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1SalesRules($postV1SalesRulesBody), $fetch);
    }
    /**
     * Delete coupon by coupon id.
     *
     * @param int $couponId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1CouponsCouponIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1CouponsCouponIdBadRequestException
     * @throws \Kiboko\Magento\Exception\DeleteV1CouponsCouponIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1CouponsCouponId(int $couponId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1CouponsCouponId($couponId), $fetch);
    }
    /**
     * Get coupon by coupon id.
     *
     * @param int $couponId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CouponsCouponIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CouponsCouponIdBadRequestException
     * @throws \Kiboko\Magento\Exception\GetV1CouponsCouponIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesRuleDataCouponInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CouponsCouponId(int $couponId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CouponsCouponId($couponId), $fetch);
    }
    /**
     * Save a coupon.
     *
     * @param string $couponId 
     * @param \Kiboko\Magento\Model\V1CouponsCouponIdPutBody $putV1CouponsCouponIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1CouponsCouponIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1CouponsCouponIdBadRequestException
     * @throws \Kiboko\Magento\Exception\PutV1CouponsCouponIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesRuleDataCouponInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1CouponsCouponId(string $couponId, \Kiboko\Magento\Model\V1CouponsCouponIdPutBody $putV1CouponsCouponIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1CouponsCouponId($couponId, $putV1CouponsCouponIdBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1CouponsSearchUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1CouponsSearchInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesRuleDataCouponSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CouponsSearch(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CouponsSearch($queryParameters), $fetch);
    }
    /**
     * Save a coupon.
     *
     * @param \Kiboko\Magento\Model\V1CouponsPostBody $postV1CouponsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CouponsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CouponsBadRequestException
     * @throws \Kiboko\Magento\Exception\PostV1CouponsInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesRuleDataCouponInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1Coupons(\Kiboko\Magento\Model\V1CouponsPostBody $postV1CouponsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1Coupons($postV1CouponsBody), $fetch);
    }
    /**
     * Generate coupon for a rule
     *
     * @param \Kiboko\Magento\Model\V1CouponsGeneratePostBody $postV1CouponsGenerateBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CouponsGenerateUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CouponsGenerateInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CouponsGenerate(\Kiboko\Magento\Model\V1CouponsGeneratePostBody $postV1CouponsGenerateBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CouponsGenerate($postV1CouponsGenerateBody), $fetch);
    }
    /**
     * Delete coupon by coupon ids.
     *
     * @param \Kiboko\Magento\Model\V1CouponsDeleteByIdsPostBody $postV1CouponsDeleteByIdsBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CouponsDeleteByIdsUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CouponsDeleteByIdsBadRequestException
     * @throws \Kiboko\Magento\Exception\PostV1CouponsDeleteByIdsInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesRuleDataCouponMassDeleteResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CouponsDeleteByIds(\Kiboko\Magento\Model\V1CouponsDeleteByIdsPostBody $postV1CouponsDeleteByIdsBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CouponsDeleteByIds($postV1CouponsDeleteByIdsBody), $fetch);
    }
    /**
     * Delete coupon by coupon codes.
     *
     * @param \Kiboko\Magento\Model\V1CouponsDeleteByCodesPostBody $postV1CouponsDeleteByCodesBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1CouponsDeleteByCodesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1CouponsDeleteByCodesBadRequestException
     * @throws \Kiboko\Magento\Exception\PostV1CouponsDeleteByCodesInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesRuleDataCouponMassDeleteResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1CouponsDeleteByCodes(\Kiboko\Magento\Model\V1CouponsDeleteByCodesPostBody $postV1CouponsDeleteByCodesBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1CouponsDeleteByCodes($postV1CouponsDeleteByCodesBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1CartsLicenceUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CheckoutAgreementsDataAgreementInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsLicence(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsLicence(), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1CartsLicenceListUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CheckoutAgreementsDataAgreementInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1CartsLicenceList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1CartsLicenceList($queryParameters), $fetch);
    }
    /**
     * Create or update tax rate
     *
     * @param \Kiboko\Magento\Model\V1TaxRatesPostBody $postV1TaxRatesBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1TaxRatesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1TaxRatesBadRequestException
     * @throws \Kiboko\Magento\Exception\PostV1TaxRatesInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TaxDataTaxRateInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1TaxRates(\Kiboko\Magento\Model\V1TaxRatesPostBody $postV1TaxRatesBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1TaxRates($postV1TaxRatesBody), $fetch);
    }
    /**
     * Create or update tax rate
     *
     * @param \Kiboko\Magento\Model\V1TaxRatesPutBody $putV1TaxRatesBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1TaxRatesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1TaxRatesBadRequestException
     * @throws \Kiboko\Magento\Exception\PutV1TaxRatesInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TaxDataTaxRateInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1TaxRates(\Kiboko\Magento\Model\V1TaxRatesPutBody $putV1TaxRatesBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1TaxRates($putV1TaxRatesBody), $fetch);
    }
    /**
     * Delete tax rate
     *
     * @param int $rateId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1TaxRatesRateIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1TaxRatesRateIdBadRequestException
     * @throws \Kiboko\Magento\Exception\DeleteV1TaxRatesRateIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1TaxRatesRateId(int $rateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1TaxRatesRateId($rateId), $fetch);
    }
    /**
     * Get tax rate
     *
     * @param int $rateId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1TaxRatesRateIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1TaxRatesRateIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TaxDataTaxRateInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1TaxRatesRateId(int $rateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1TaxRatesRateId($rateId), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1TaxRatesSearchUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1TaxRatesSearchBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TaxDataTaxRateSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1TaxRatesSearch(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1TaxRatesSearch($queryParameters), $fetch);
    }
    /**
     * Save TaxRule
     *
     * @param \Kiboko\Magento\Model\V1TaxRulesPostBody $postV1TaxRulesBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1TaxRulesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1TaxRulesBadRequestException
     * @throws \Kiboko\Magento\Exception\PostV1TaxRulesInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TaxDataTaxRuleInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1TaxRules(\Kiboko\Magento\Model\V1TaxRulesPostBody $postV1TaxRulesBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1TaxRules($postV1TaxRulesBody), $fetch);
    }
    /**
     * Save TaxRule
     *
     * @param \Kiboko\Magento\Model\V1TaxRulesPutBody $putV1TaxRulesBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1TaxRulesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1TaxRulesBadRequestException
     * @throws \Kiboko\Magento\Exception\PutV1TaxRulesInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TaxDataTaxRuleInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1TaxRules(\Kiboko\Magento\Model\V1TaxRulesPutBody $putV1TaxRulesBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1TaxRules($putV1TaxRulesBody), $fetch);
    }
    /**
     * Delete TaxRule
     *
     * @param int $ruleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1TaxRulesRuleIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1TaxRulesRuleIdBadRequestException
     * @throws \Kiboko\Magento\Exception\DeleteV1TaxRulesRuleIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1TaxRulesRuleId(int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1TaxRulesRuleId($ruleId), $fetch);
    }
    /**
     * Get TaxRule
     *
     * @param int $ruleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1TaxRulesRuleIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TaxDataTaxRuleInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1TaxRulesRuleId(int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1TaxRulesRuleId($ruleId), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1TaxRulesSearchUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1TaxRulesSearchBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TaxDataTaxRuleSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1TaxRulesSearch(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1TaxRulesSearch($queryParameters), $fetch);
    }
    /**
     * Create a Tax Class
     *
     * @param \Kiboko\Magento\Model\V1TaxClassesPostBody $postV1TaxClassesBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PostV1TaxClassesUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PostV1TaxClassesBadRequestException
     * @throws \Kiboko\Magento\Exception\PostV1TaxClassesInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1TaxClasses(\Kiboko\Magento\Model\V1TaxClassesPostBody $postV1TaxClassesBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1TaxClasses($postV1TaxClassesBody), $fetch);
    }
    /**
     * Delete a tax class with the given tax class id.
     *
     * @param int $taxClassId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DeleteV1TaxClassesTaxClassIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\DeleteV1TaxClassesTaxClassIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteV1TaxClassesTaxClassId(int $taxClassId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DeleteV1TaxClassesTaxClassId($taxClassId), $fetch);
    }
    /**
     * Get a tax class with the given tax class id.
     *
     * @param int $taxClassId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1TaxClassesTaxClassIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1TaxClassesTaxClassIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TaxDataTaxClassInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1TaxClassesTaxClassId(int $taxClassId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1TaxClassesTaxClassId($taxClassId), $fetch);
    }
    /**
     * Create a Tax Class
     *
     * @param string $classId 
     * @param \Kiboko\Magento\Model\V1TaxClassesClassIdPutBody $putV1TaxClassesClassIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1TaxClassesClassIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\PutV1TaxClassesClassIdBadRequestException
     * @throws \Kiboko\Magento\Exception\PutV1TaxClassesClassIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1TaxClassesClassId(string $classId, \Kiboko\Magento\Model\V1TaxClassesClassIdPutBody $putV1TaxClassesClassIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1TaxClassesClassId($classId, $putV1TaxClassesClassIdBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1TaxClassesSearchUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1TaxClassesSearchBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TaxDataTaxClassSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1TaxClassesSearch(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1TaxClassesSearch($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1TfaInstalledprovidersUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TwoFactorAuthProviderInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1TfaInstalledproviders(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1TfaInstalledproviders(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1TfaForcedprovidersUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TwoFactorAuthProviderInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1TfaForcedproviders(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1TfaForcedproviders(), $fetch);
    }
    /**
     * Get a user provider
     *
     * @param int $userId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1TfaUserprovidersUserIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TwoFactorAuthProviderInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1TfaUserprovidersUserId(int $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1TfaUserprovidersUserId($userId), $fetch);
    }
    /**
     * Set providers
     *
     * @param int $userId 
     * @param \Kiboko\Magento\Model\V1TfaUserProvidersUserIdPutBody $putV1TfaUserprovidersUserIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1TfaUserprovidersUserIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1TfaUserprovidersUserId(int $userId, \Kiboko\Magento\Model\V1TfaUserProvidersUserIdPutBody $putV1TfaUserprovidersUserIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1TfaUserprovidersUserId($userId, $putV1TfaUserprovidersUserIdBody), $fetch);
    }
    /**
     * Returns a list of providers to configure/enroll
     *
     * @param int $userId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1TfaProviderstoactivateUserIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TwoFactorAuthProviderInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1TfaProviderstoactivateUserId(int $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1TfaProviderstoactivateUserId($userId), $fetch);
    }
    /**
     * Get default provider
     *
     * @param int $userId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1TfaDefaultprovidercodeUserIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1TfaDefaultprovidercodeUserId(int $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1TfaDefaultprovidercodeUserId($userId), $fetch);
    }
    /**
     * Set default provider code
     *
     * @param int $userId 
     * @param \Kiboko\Magento\Model\V1TfaDefaultProviderCodeUserIdPutBody $putV1TfaDefaultprovidercodeUserIdBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\PutV1TfaDefaultprovidercodeUserIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putV1TfaDefaultprovidercodeUserId(int $userId, \Kiboko\Magento\Model\V1TfaDefaultProviderCodeUserIdPutBody $putV1TfaDefaultprovidercodeUserIdBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PutV1TfaDefaultprovidercodeUserId($userId, $putV1TfaDefaultprovidercodeUserIdBody), $fetch);
    }
    /**
     * Get the providers that the user is able to use for 2fa
     *
     * @param array $queryParameters {
     *     @var string $tfaToken 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TwoFactorAuthProviderInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1TfaTfatuserproviders(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1TfaTfatuserproviders($queryParameters), $fetch);
    }
    /**
     * Get the providers that the user still needs to configure
     *
     * @param array $queryParameters {
     *     @var string $tfaToken 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TwoFactorAuthProviderInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1TfaTfatproviderstoactivate(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1TfaTfatproviderstoactivate($queryParameters), $fetch);
    }
    /**
     * Get the information required to configure google
     *
     * @param \Kiboko\Magento\Model\V1TfaProviderGoogleConfigurePostBody $postV1TfaProviderGoogleConfigureBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TwoFactorAuthDataGoogleConfigureInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1TfaProviderGoogleConfigure(\Kiboko\Magento\Model\V1TfaProviderGoogleConfigurePostBody $postV1TfaProviderGoogleConfigureBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1TfaProviderGoogleConfigure($postV1TfaProviderGoogleConfigureBody), $fetch);
    }
    /**
     * Activate the provider and get an admin token
     *
     * @param \Kiboko\Magento\Model\V1TfaProviderGoogleActivatePostBody $postV1TfaProviderGoogleActivateBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1TfaProviderGoogleActivate(\Kiboko\Magento\Model\V1TfaProviderGoogleActivatePostBody $postV1TfaProviderGoogleActivateBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1TfaProviderGoogleActivate($postV1TfaProviderGoogleActivateBody), $fetch);
    }
    /**
     * Get an admin token by authenticating using google
     *
     * @param \Kiboko\Magento\Model\V1TfaProviderGoogleAuthenticatePostBody $postV1TfaProviderGoogleAuthenticateBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1TfaProviderGoogleAuthenticate(\Kiboko\Magento\Model\V1TfaProviderGoogleAuthenticatePostBody $postV1TfaProviderGoogleAuthenticateBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1TfaProviderGoogleAuthenticate($postV1TfaProviderGoogleAuthenticateBody), $fetch);
    }
    /**
     * Get the information required to configure google
     *
     * @param \Kiboko\Magento\Model\V1TfaProviderAuthyConfigurePostBody $postV1TfaProviderAuthyConfigureBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TwoFactorAuthDataAuthyRegistrationPromptResponseInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1TfaProviderAuthyConfigure(\Kiboko\Magento\Model\V1TfaProviderAuthyConfigurePostBody $postV1TfaProviderAuthyConfigureBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1TfaProviderAuthyConfigure($postV1TfaProviderAuthyConfigureBody), $fetch);
    }
    /**
     * Activate the provider and get an admin token
     *
     * @param \Kiboko\Magento\Model\V1TfaProviderAuthyActivatePostBody $postV1TfaProviderAuthyActivateBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1TfaProviderAuthyActivate(\Kiboko\Magento\Model\V1TfaProviderAuthyActivatePostBody $postV1TfaProviderAuthyActivateBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1TfaProviderAuthyActivate($postV1TfaProviderAuthyActivateBody), $fetch);
    }
    /**
     * Get an admin token using authy 2fa
     *
     * @param \Kiboko\Magento\Model\V1TfaProviderAuthyAuthenticatePostBody $postV1TfaProviderAuthyAuthenticateBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1TfaProviderAuthyAuthenticate(\Kiboko\Magento\Model\V1TfaProviderAuthyAuthenticatePostBody $postV1TfaProviderAuthyAuthenticateBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1TfaProviderAuthyAuthenticate($postV1TfaProviderAuthyAuthenticateBody), $fetch);
    }
    /**
     * Send a one time password to a device using authy
     *
     * @param string $via 
     * @param \Kiboko\Magento\Model\V1TfaProviderAuthySendTokenViaPostBody $postV1TfaProviderAuthySendtokenViaBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1TfaProviderAuthySendtokenVia(string $via, \Kiboko\Magento\Model\V1TfaProviderAuthySendTokenViaPostBody $postV1TfaProviderAuthySendtokenViaBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1TfaProviderAuthySendtokenVia($via, $postV1TfaProviderAuthySendtokenViaBody), $fetch);
    }
    /**
     * Authenticate using the present one touch response and get an admin token
     *
     * @param \Kiboko\Magento\Model\V1TfaProviderAuthyAuthenticateOnetouchPostBody $postV1TfaProviderAuthyAuthenticateonetouchBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1TfaProviderAuthyAuthenticateonetouch(\Kiboko\Magento\Model\V1TfaProviderAuthyAuthenticateOnetouchPostBody $postV1TfaProviderAuthyAuthenticateonetouchBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1TfaProviderAuthyAuthenticateonetouch($postV1TfaProviderAuthyAuthenticateonetouchBody), $fetch);
    }
    /**
     * Get the information to initiate a WebAuthn registration ceremony
     *
     * @param \Kiboko\Magento\Model\V1TfaProviderU2fkeyConfigurePostBody $postV1TfaProviderU2fkeyConfigureBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TwoFactorAuthDataU2fWebAuthnRequestInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1TfaProviderU2fkeyConfigure(\Kiboko\Magento\Model\V1TfaProviderU2fkeyConfigurePostBody $postV1TfaProviderU2fkeyConfigureBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1TfaProviderU2fkeyConfigure($postV1TfaProviderU2fkeyConfigureBody), $fetch);
    }
    /**
     * Activate the provider and get a token
     *
     * @param \Kiboko\Magento\Model\V1TfaProviderU2fkeyActivatePostBody $postV1TfaProviderU2fkeyActivateBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1TfaProviderU2fkeyActivate(\Kiboko\Magento\Model\V1TfaProviderU2fkeyActivatePostBody $postV1TfaProviderU2fkeyActivateBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1TfaProviderU2fkeyActivate($postV1TfaProviderU2fkeyActivateBody), $fetch);
    }
    /**
     * Get the information to initiate a WebAuthn registration ceremony
     *
     * @param \Kiboko\Magento\Model\V1TfaProviderU2fkeyAuthenticationChallengePostBody $postV1TfaProviderU2fkeyAuthenticationchallengeBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TwoFactorAuthDataU2fWebAuthnRequestInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1TfaProviderU2fkeyAuthenticationchallenge(\Kiboko\Magento\Model\V1TfaProviderU2fkeyAuthenticationChallengePostBody $postV1TfaProviderU2fkeyAuthenticationchallengeBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1TfaProviderU2fkeyAuthenticationchallenge($postV1TfaProviderU2fkeyAuthenticationchallengeBody), $fetch);
    }
    /**
     * Authenticate with the provider and get a token
     *
     * @param \Kiboko\Magento\Model\V1TfaProviderU2fkeyVerifyPostBody $postV1TfaProviderU2fkeyVerifyBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1TfaProviderU2fkeyVerify(\Kiboko\Magento\Model\V1TfaProviderU2fkeyVerifyPostBody $postV1TfaProviderU2fkeyVerifyBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1TfaProviderU2fkeyVerify($postV1TfaProviderU2fkeyVerifyBody), $fetch);
    }
    /**
     * Get the information required to configure duo
     *
     * @param \Kiboko\Magento\Model\V1TfaProviderDuoSecurityConfigurePostBody $postV1TfaProviderDuoSecurityConfigureBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TwoFactorAuthDataDuoDataInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1TfaProviderDuoSecurityConfigure(\Kiboko\Magento\Model\V1TfaProviderDuoSecurityConfigurePostBody $postV1TfaProviderDuoSecurityConfigureBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1TfaProviderDuoSecurityConfigure($postV1TfaProviderDuoSecurityConfigureBody), $fetch);
    }
    /**
     * Activate the provider and get an admin token
     *
     * @param \Kiboko\Magento\Model\V1TfaProviderDuoSecurityActivatePostBody $postV1TfaProviderDuoSecurityActivateBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1TfaProviderDuoSecurityActivate(\Kiboko\Magento\Model\V1TfaProviderDuoSecurityActivatePostBody $postV1TfaProviderDuoSecurityActivateBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1TfaProviderDuoSecurityActivate($postV1TfaProviderDuoSecurityActivateBody), $fetch);
    }
    /**
     * Get the information required to configure duo
     *
     * @param \Kiboko\Magento\Model\V1TfaProviderDuoSecurityGetAuthenticationDataPostBody $postV1TfaProviderDuoSecurityGetauthenticationdataBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TwoFactorAuthDataDuoDataInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1TfaProviderDuoSecurityGetauthenticationdata(\Kiboko\Magento\Model\V1TfaProviderDuoSecurityGetAuthenticationDataPostBody $postV1TfaProviderDuoSecurityGetauthenticationdataBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1TfaProviderDuoSecurityGetauthenticationdata($postV1TfaProviderDuoSecurityGetauthenticationdataBody), $fetch);
    }
    /**
     * Authenticate and get an admin token
     *
     * @param \Kiboko\Magento\Model\V1TfaProviderDuoSecurityAuthenticatePostBody $postV1TfaProviderDuoSecurityAuthenticateBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postV1TfaProviderDuoSecurityAuthenticate(\Kiboko\Magento\Model\V1TfaProviderDuoSecurityAuthenticatePostBody $postV1TfaProviderDuoSecurityAuthenticateBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\PostV1TfaProviderDuoSecurityAuthenticate($postV1TfaProviderDuoSecurityAuthenticateBody), $fetch);
    }
    /**
     * Get Bulk summary data with list of operations items full data.
     *
     * @param string $bulkUuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1BulkBulkUuidDetailedstatusUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1BulkBulkUuidDetailedstatusBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\AsynchronousOperationsDataDetailedBulkOperationsStatusInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1BulkBulkUuidDetailedstatus(string $bulkUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1BulkBulkUuidDetailedstatus($bulkUuid), $fetch);
    }
    /**
     * Get Bulk summary data with list of operations items short data.
     *
     * @param string $bulkUuid 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1BulkBulkUuidStatusUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GetV1BulkBulkUuidStatusBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\AsynchronousOperationsDataBulkOperationsStatusInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1BulkBulkUuidStatus(string $bulkUuid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1BulkBulkUuidStatus($bulkUuid), $fetch);
    }
    /**
     * Get operations count by bulk uuid and status.
     *
     * @param string $bulkUuid 
     * @param int $status 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GetV1BulkBulkUuidOperationstatusStatusUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1BulkBulkUuidOperationstatusStatus(string $bulkUuid, int $status, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1BulkBulkUuidOperationstatusStatus($bulkUuid, $status), $fetch);
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
     * @throws \Kiboko\Magento\Exception\GetV1BulkUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\AsynchronousOperationsDataOperationSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1Bulk(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1Bulk($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\PayPalBraintreeDataAuthDataInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getV1ApplepayAuth(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GetV1ApplepayAuth(), $fetch);
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
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Kiboko\Magento\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}