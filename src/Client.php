<?php

namespace Kiboko\Magento;

class Client extends \Kiboko\Magento\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\StoreStoreRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\StoreDataStoreInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function storeStoreRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\StoreStoreRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\StoreGroupRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\StoreDataGroupInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function storeGroupRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\StoreGroupRepositoryV1GetListGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\StoreWebsiteRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\StoreDataWebsiteInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function storeWebsiteRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\StoreWebsiteRepositoryV1GetListGet(), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $storeCodes 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\StoreStoreConfigManagerV1GetStoreConfigsGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\StoreDataStoreConfigInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function storeStoreConfigManagerV1GetStoreConfigsGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\StoreStoreConfigManagerV1GetStoreConfigsGet($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\DirectoryDataCurrencyInformationInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function directoryCurrencyInformationAcquirerV1GetCurrencyInfoGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DirectoryCurrencyInformationAcquirerV1GetCurrencyInfoGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\DirectoryDataCountryInformationInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function directoryCountryInformationAcquirerV1GetCountriesInfoGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DirectoryCountryInformationAcquirerV1GetCountriesInfoGet(), $fetch);
    }
    /**
     * Get country and region information for the store.
     *
     * @param string $countryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DirectoryCountryInformationAcquirerV1GetCountryInfoGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\DirectoryDataCountryInformationInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function directoryCountryInformationAcquirerV1GetCountryInfoGet(string $countryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DirectoryCountryInformationAcquirerV1GetCountryInfoGet($countryId), $fetch);
    }
    /**
     * Delete page by ID.
     *
     * @param int $pageId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CmsPageRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CmsPageRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\CmsPageRepositoryV1DeleteByIdDeleteInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1DeleteByIdDelete(int $pageId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CmsPageRepositoryV1DeleteByIdDelete($pageId), $fetch);
    }
    /**
     * Retrieve page.
     *
     * @param int $pageId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CmsPageRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CmsPageRepositoryV1GetByIdGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CmsDataPageInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1GetByIdGet(int $pageId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CmsPageRepositoryV1GetByIdGet($pageId), $fetch);
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
     * @throws \Kiboko\Magento\Exception\CmsPageRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CmsPageRepositoryV1GetListGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CmsDataPageSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CmsPageRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save page.
     *
     * @param \Kiboko\Magento\Model\V1CmsPagePostBody $cmsPageRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CmsPageRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CmsPageRepositoryV1SavePostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CmsDataPageInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1SavePost(\Kiboko\Magento\Model\V1CmsPagePostBody $cmsPageRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CmsPageRepositoryV1SavePost($cmsPageRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Save page.
     *
     * @param string $id 
     * @param \Kiboko\Magento\Model\V1CmsPageIdPutBody $cmsPageRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CmsPageRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CmsPageRepositoryV1SavePutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CmsDataPageInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsPageRepositoryV1SavePut(string $id, \Kiboko\Magento\Model\V1CmsPageIdPutBody $cmsPageRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CmsPageRepositoryV1SavePut($id, $cmsPageRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Delete block by ID.
     *
     * @param int $blockId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CmsBlockRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CmsBlockRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\CmsBlockRepositoryV1DeleteByIdDeleteInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1DeleteByIdDelete(int $blockId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CmsBlockRepositoryV1DeleteByIdDelete($blockId), $fetch);
    }
    /**
     * Retrieve block.
     *
     * @param int $blockId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CmsBlockRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CmsBlockRepositoryV1GetByIdGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CmsDataBlockInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1GetByIdGet(int $blockId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CmsBlockRepositoryV1GetByIdGet($blockId), $fetch);
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
     * @throws \Kiboko\Magento\Exception\CmsBlockRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CmsBlockRepositoryV1GetListGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CmsDataBlockSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CmsBlockRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save block.
     *
     * @param \Kiboko\Magento\Model\V1CmsBlockPostBody $cmsBlockRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CmsBlockRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CmsBlockRepositoryV1SavePostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CmsDataBlockInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1SavePost(\Kiboko\Magento\Model\V1CmsBlockPostBody $cmsBlockRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CmsBlockRepositoryV1SavePost($cmsBlockRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Save block.
     *
     * @param string $id 
     * @param \Kiboko\Magento\Model\V1CmsBlockIdPutBody $cmsBlockRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CmsBlockRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CmsBlockRepositoryV1SavePutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CmsDataBlockInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cmsBlockRepositoryV1SavePut(string $id, \Kiboko\Magento\Model\V1CmsBlockIdPutBody $cmsBlockRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CmsBlockRepositoryV1SavePut($id, $cmsBlockRepositoryV1SavePutBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\EavAttributeSetRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeSetSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\EavAttributeSetRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Remove attribute set by given ID
     *
     * @param int $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\EavAttributeSetRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\EavAttributeSetRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetRepositoryV1DeleteByIdDelete(int $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\EavAttributeSetRepositoryV1DeleteByIdDelete($attributeSetId), $fetch);
    }
    /**
     * Retrieve attribute set information based on given ID
     *
     * @param int $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\EavAttributeSetRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\EavAttributeSetRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeSetInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetRepositoryV1GetGet(int $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\EavAttributeSetRepositoryV1GetGet($attributeSetId), $fetch);
    }
    /**
     * Save attribute set data
     *
     * @param string $attributeSetId 
     * @param \Kiboko\Magento\Model\V1EavAttributeSetsAttributeSetIdPutBody $eavAttributeSetRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\EavAttributeSetRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\EavAttributeSetRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\EavAttributeSetRepositoryV1SavePutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeSetInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetRepositoryV1SavePut(string $attributeSetId, \Kiboko\Magento\Model\V1EavAttributeSetsAttributeSetIdPutBody $eavAttributeSetRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\EavAttributeSetRepositoryV1SavePut($attributeSetId, $eavAttributeSetRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Create attribute set from data
     *
     * @param \Kiboko\Magento\Model\V1EavAttributeSetsPostBody $eavAttributeSetManagementV1CreatePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\EavAttributeSetManagementV1CreatePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\EavAttributeSetManagementV1CreatePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeSetInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function eavAttributeSetManagementV1CreatePost(\Kiboko\Magento\Model\V1EavAttributeSetsPostBody $eavAttributeSetManagementV1CreatePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\EavAttributeSetManagementV1CreatePost($eavAttributeSetManagementV1CreatePostBody), $fetch);
    }
    /**
     * Delete customer group by ID.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerGroupRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerGroupRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerGroupRepositoryV1DeleteByIdDeleteInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1DeleteByIdDelete(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerGroupRepositoryV1DeleteByIdDelete($id), $fetch);
    }
    /**
     * Get customer group by group ID.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerGroupRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerGroupRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerGroupRepositoryV1GetByIdGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataGroupInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1GetByIdGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerGroupRepositoryV1GetByIdGet($id), $fetch);
    }
    /**
     * Save customer group.
     *
     * @param string $id 
     * @param \Kiboko\Magento\Model\V1CustomerGroupsIdPutBody $customerGroupRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerGroupRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerGroupRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerGroupRepositoryV1SavePutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataGroupInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1SavePut(string $id, \Kiboko\Magento\Model\V1CustomerGroupsIdPutBody $customerGroupRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerGroupRepositoryV1SavePut($id, $customerGroupRepositoryV1SavePutBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\CustomerGroupRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerGroupRepositoryV1GetListGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataGroupSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerGroupRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save customer group.
     *
     * @param \Kiboko\Magento\Model\V1CustomerGroupsPostBody $customerGroupRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerGroupRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerGroupRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerGroupRepositoryV1SavePostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataGroupInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupRepositoryV1SavePost(\Kiboko\Magento\Model\V1CustomerGroupsPostBody $customerGroupRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerGroupRepositoryV1SavePost($customerGroupRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Get default customer group.
     *
     * @param int $storeId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerGroupManagementV1GetDefaultGroupGetWithStoreIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerGroupManagementV1GetDefaultGroupGetWithStoreIdBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerGroupManagementV1GetDefaultGroupGetWithStoreIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataGroupInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupManagementV1GetDefaultGroupGetWithStoreId(int $storeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerGroupManagementV1GetDefaultGroupGetWithStoreId($storeId), $fetch);
    }
    /**
     * Get default customer group.
     *
     * @param array $queryParameters {
     *     @var int $storeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerGroupManagementV1GetDefaultGroupGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerGroupManagementV1GetDefaultGroupGetBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerGroupManagementV1GetDefaultGroupGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataGroupInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupManagementV1GetDefaultGroupGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerGroupManagementV1GetDefaultGroupGet($queryParameters), $fetch);
    }
    /**
     * Check if customer group can be deleted.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerGroupManagementV1IsReadonlyGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerGroupManagementV1IsReadonlyGetBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerGroupManagementV1IsReadonlyGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerGroupManagementV1IsReadonlyGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerGroupManagementV1IsReadonlyGet($id), $fetch);
    }
    /**
     * Set system default customer group.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerGroupConfigV1SetDefaultCustomerGroupPut(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPut($id), $fetch);
    }
    /**
     * Retrieve attribute metadata.
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerCustomerMetadataV1GetAttributeMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerCustomerMetadataV1GetAttributeMetadataGetBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerCustomerMetadataV1GetAttributeMetadataGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAttributeMetadataInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerMetadataV1GetAttributeMetadataGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerCustomerMetadataV1GetAttributeMetadataGet($attributeCode), $fetch);
    }
    /**
     * Retrieve all attributes filtered by form code
     *
     * @param string $formCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerCustomerMetadataV1GetAttributesGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerCustomerMetadataV1GetAttributesGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerMetadataV1GetAttributesGet(string $formCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerCustomerMetadataV1GetAttributesGet($formCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerCustomerMetadataV1GetAllAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerCustomerMetadataV1GetAllAttributesMetadataGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerMetadataV1GetAllAttributesMetadataGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerCustomerMetadataV1GetAllAttributesMetadataGet(), $fetch);
    }
    /**
     * Get custom attributes metadata for the given data interface.
     *
     * @param array $queryParameters {
     *     @var string $dataInterfaceName 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerCustomerMetadataV1GetCustomAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerCustomerMetadataV1GetCustomAttributesMetadataGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerMetadataV1GetCustomAttributesMetadataGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerCustomerMetadataV1GetCustomAttributesMetadataGet($queryParameters), $fetch);
    }
    /**
     * Retrieve attribute metadata.
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerAddressMetadataV1GetAttributeMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerAddressMetadataV1GetAttributeMetadataGetBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerAddressMetadataV1GetAttributeMetadataGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAttributeMetadataInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressMetadataV1GetAttributeMetadataGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerAddressMetadataV1GetAttributeMetadataGet($attributeCode), $fetch);
    }
    /**
     * Retrieve all attributes filtered by form code
     *
     * @param string $formCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerAddressMetadataV1GetAttributesGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerAddressMetadataV1GetAttributesGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressMetadataV1GetAttributesGet(string $formCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerAddressMetadataV1GetAttributesGet($formCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerAddressMetadataV1GetAllAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerAddressMetadataV1GetAllAttributesMetadataGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressMetadataV1GetAllAttributesMetadataGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerAddressMetadataV1GetAllAttributesMetadataGet(), $fetch);
    }
    /**
     * Get custom attributes metadata for the given data interface.
     *
     * @param array $queryParameters {
     *     @var string $dataInterfaceName 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerAddressMetadataV1GetCustomAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerAddressMetadataV1GetCustomAttributesMetadataGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAttributeMetadataInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressMetadataV1GetCustomAttributesMetadataGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerAddressMetadataV1GetCustomAttributesMetadataGet($queryParameters), $fetch);
    }
    /**
     * Delete customer by Customer ID.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1DeleteByIdDeleteInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1DeleteByIdDelete(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerCustomerRepositoryV1DeleteByIdDelete($customerId), $fetch);
    }
    /**
     * Get customer by Customer ID.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1GetByIdGetWithCustomerIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1GetByIdGetWithCustomerIdBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1GetByIdGetWithCustomerIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataCustomerInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1GetByIdGetWithCustomerId(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerCustomerRepositoryV1GetByIdGetWithCustomerId($customerId), $fetch);
    }
    /**
     * Create or update a customer.
     *
     * @param string $customerId 
     * @param \Kiboko\Magento\Model\V1CustomersCustomerIdPutBody $customerCustomerRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1SavePutWithCustomerIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1SavePutWithCustomerIdBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1SavePutWithCustomerIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataCustomerInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1SavePutWithCustomerId(string $customerId, \Kiboko\Magento\Model\V1CustomersCustomerIdPutBody $customerCustomerRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerCustomerRepositoryV1SavePutWithCustomerId($customerId, $customerCustomerRepositoryV1SavePutBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1GetByIdGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataCustomerInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1GetByIdGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerCustomerRepositoryV1GetByIdGet(), $fetch);
    }
    /**
     * Create or update a customer.
     *
     * @param \Kiboko\Magento\Model\V1CustomersMePutBody $customerCustomerRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1SavePutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataCustomerInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1SavePut(\Kiboko\Magento\Model\V1CustomersMePutBody $customerCustomerRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerCustomerRepositoryV1SavePut($customerCustomerRepositoryV1SavePutBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerCustomerRepositoryV1GetListGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataCustomerSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerCustomerRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerCustomerRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create customer account. Perform necessary business operations like sending email.
     *
     * @param \Kiboko\Magento\Model\V1CustomersPostBody $customerAccountManagementV1CreateAccountPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1CreateAccountPostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataCustomerInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1CreateAccountPost(\Kiboko\Magento\Model\V1CustomersPostBody $customerAccountManagementV1CreateAccountPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerAccountManagementV1CreateAccountPost($customerAccountManagementV1CreateAccountPostBody), $fetch);
    }
    /**
     * Activate a customer account using a key that was sent in a confirmation email.
     *
     * @param \Kiboko\Magento\Model\V1CustomersMeActivatePutBody $customerAccountManagementV1ActivateByIdPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1ActivateByIdPutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1ActivateByIdPutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataCustomerInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ActivateByIdPut(\Kiboko\Magento\Model\V1CustomersMeActivatePutBody $customerAccountManagementV1ActivateByIdPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerAccountManagementV1ActivateByIdPut($customerAccountManagementV1ActivateByIdPutBody), $fetch);
    }
    /**
     * Activate a customer account using a key that was sent in a confirmation email.
     *
     * @param string $email 
     * @param \Kiboko\Magento\Model\V1CustomersEmailActivatePutBody $customerAccountManagementV1ActivatePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1ActivatePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1ActivatePutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataCustomerInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ActivatePut(string $email, \Kiboko\Magento\Model\V1CustomersEmailActivatePutBody $customerAccountManagementV1ActivatePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerAccountManagementV1ActivatePut($email, $customerAccountManagementV1ActivatePutBody), $fetch);
    }
    /**
     * Change customer password.
     *
     * @param \Kiboko\Magento\Model\V1CustomersMePasswordPutBody $customerAccountManagementV1ChangePasswordByIdPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1ChangePasswordByIdPutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1ChangePasswordByIdPutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ChangePasswordByIdPut(\Kiboko\Magento\Model\V1CustomersMePasswordPutBody $customerAccountManagementV1ChangePasswordByIdPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerAccountManagementV1ChangePasswordByIdPut($customerAccountManagementV1ChangePasswordByIdPutBody), $fetch);
    }
    /**
     * Check if password reset token is valid.
     *
     * @param int $customerId If 0 is given then a customer will be matched by the RP token.
     * @param string $resetPasswordLinkToken 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1ValidateResetPasswordLinkTokenGetBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1ValidateResetPasswordLinkTokenGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ValidateResetPasswordLinkTokenGet(int $customerId, string $resetPasswordLinkToken, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerAccountManagementV1ValidateResetPasswordLinkTokenGet($customerId, $resetPasswordLinkToken), $fetch);
    }
    /**
     * Send an email to the customer with a password reset link.
     *
     * @param \Kiboko\Magento\Model\V1CustomersPasswordPutBody $customerAccountManagementV1InitiatePasswordResetPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1InitiatePasswordResetPutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1InitiatePasswordResetPut(\Kiboko\Magento\Model\V1CustomersPasswordPutBody $customerAccountManagementV1InitiatePasswordResetPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerAccountManagementV1InitiatePasswordResetPut($customerAccountManagementV1InitiatePasswordResetPutBody), $fetch);
    }
    /**
     * Reset customer password.
     *
     * @param \Kiboko\Magento\Model\V1CustomersResetPasswordPostBody $customerAccountManagementV1ResetPasswordPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1ResetPasswordPostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ResetPasswordPost(\Kiboko\Magento\Model\V1CustomersResetPasswordPostBody $customerAccountManagementV1ResetPasswordPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerAccountManagementV1ResetPasswordPost($customerAccountManagementV1ResetPasswordPostBody), $fetch);
    }
    /**
     * Gets the account confirmation status.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1GetConfirmationStatusGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1GetConfirmationStatusGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1GetConfirmationStatusGet(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerAccountManagementV1GetConfirmationStatusGet($customerId), $fetch);
    }
    /**
     * Resend confirmation email.
     *
     * @param \Kiboko\Magento\Model\V1CustomersConfirmPostBody $customerAccountManagementV1ResendConfirmationPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1ResendConfirmationPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1ResendConfirmationPostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ResendConfirmationPost(\Kiboko\Magento\Model\V1CustomersConfirmPostBody $customerAccountManagementV1ResendConfirmationPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerAccountManagementV1ResendConfirmationPost($customerAccountManagementV1ResendConfirmationPostBody), $fetch);
    }
    /**
     * Validate customer data.
     *
     * @param \Kiboko\Magento\Model\V1CustomersValidatePutBody $customerAccountManagementV1ValidatePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1ValidatePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1ValidatePutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataValidationResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1ValidatePut(\Kiboko\Magento\Model\V1CustomersValidatePutBody $customerAccountManagementV1ValidatePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerAccountManagementV1ValidatePut($customerAccountManagementV1ValidatePutBody), $fetch);
    }
    /**
     * Check if customer can be deleted.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1IsReadonlyGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1IsReadonlyGetBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1IsReadonlyGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1IsReadonlyGet(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerAccountManagementV1IsReadonlyGet($customerId), $fetch);
    }
    /**
     * Check if given email is associated with a customer account in given website.
     *
     * @param \Kiboko\Magento\Model\V1CustomersIsEmailAvailablePostBody $customerAccountManagementV1IsEmailAvailablePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1IsEmailAvailablePostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1IsEmailAvailablePost(\Kiboko\Magento\Model\V1CustomersIsEmailAvailablePostBody $customerAccountManagementV1IsEmailAvailablePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerAccountManagementV1IsEmailAvailablePost($customerAccountManagementV1IsEmailAvailablePostBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAddressInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1GetDefaultBillingAddressGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerAccountManagementV1GetDefaultBillingAddressGet(), $fetch);
    }
    /**
     * Retrieve default billing address for the given customerId.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetWithCustomerIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetWithCustomerIdBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1GetDefaultBillingAddressGetWithCustomerIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAddressInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1GetDefaultBillingAddressGetWithCustomerId(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerAccountManagementV1GetDefaultBillingAddressGetWithCustomerId($customerId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAddressInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1GetDefaultShippingAddressGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerAccountManagementV1GetDefaultShippingAddressGet(), $fetch);
    }
    /**
     * Retrieve default shipping address for the given customerId.
     *
     * @param int $customerId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetWithCustomerIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetWithCustomerIdBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerAccountManagementV1GetDefaultShippingAddressGetWithCustomerIdInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAddressInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAccountManagementV1GetDefaultShippingAddressGetWithCustomerId(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerAccountManagementV1GetDefaultShippingAddressGetWithCustomerId($customerId), $fetch);
    }
    /**
     * Retrieve customer address.
     *
     * @param int $addressId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerAddressRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerAddressRepositoryV1GetByIdGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CustomerDataAddressInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressRepositoryV1GetByIdGet(int $addressId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerAddressRepositoryV1GetByIdGet($addressId), $fetch);
    }
    /**
     * Delete customer address by ID.
     *
     * @param int $addressId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CustomerAddressRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CustomerAddressRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\CustomerAddressRepositoryV1DeleteByIdDeleteInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function customerAddressRepositoryV1DeleteByIdDelete(int $addressId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CustomerAddressRepositoryV1DeleteByIdDelete($addressId), $fetch);
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
     * @throws \Kiboko\Magento\Exception\CatalogProductRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create product
     *
     * @param \Kiboko\Magento\Model\V1ProductsPostBody $catalogProductRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1SavePost(\Kiboko\Magento\Model\V1ProductsPostBody $catalogProductRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductRepositoryV1SavePost($catalogProductRepositoryV1SavePostBody), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1DeleteByIdDelete(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductRepositoryV1DeleteByIdDelete($sku), $fetch);
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
     * @throws \Kiboko\Magento\Exception\CatalogProductRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1GetGet(string $sku, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductRepositoryV1GetGet($sku, $queryParameters), $fetch);
    }
    /**
     * Create product
     *
     * @param string $sku 
     * @param \Kiboko\Magento\Model\V1ProductsSkuPutBody $catalogProductRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRepositoryV1SavePut(string $sku, \Kiboko\Magento\Model\V1ProductsSkuPutBody $catalogProductRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductRepositoryV1SavePut($sku, $catalogProductRepositoryV1SavePutBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeTypesListV1GetItemsGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductAttributeTypeInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeTypesListV1GetItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductAttributeTypesListV1GetItemsGet(), $fetch);
    }
    /**
     * Delete Attribute by id
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1DeleteByIdDelete(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductAttributeRepositoryV1DeleteByIdDelete($attributeCode), $fetch);
    }
    /**
     * Retrieve specific attribute
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductAttributeInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1GetGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductAttributeRepositoryV1GetGet($attributeCode), $fetch);
    }
    /**
     * Save attribute data
     *
     * @param string $attributeCode 
     * @param \Kiboko\Magento\Model\V1ProductsAttributesAttributeCodePutBody $catalogProductAttributeRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductAttributeInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1SavePut(string $attributeCode, \Kiboko\Magento\Model\V1ProductsAttributesAttributeCodePutBody $catalogProductAttributeRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductAttributeRepositoryV1SavePut($attributeCode, $catalogProductAttributeRepositoryV1SavePutBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductAttributeSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductAttributeRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save attribute data
     *
     * @param \Kiboko\Magento\Model\V1ProductsAttributesPostBody $catalogProductAttributeRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductAttributeInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeRepositoryV1SavePost(\Kiboko\Magento\Model\V1ProductsAttributesPostBody $catalogProductAttributeRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductAttributeRepositoryV1SavePost($catalogProductAttributeRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Retrieve specific attribute
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogCategoryAttributeRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataCategoryAttributeInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryAttributeRepositoryV1GetGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogCategoryAttributeRepositoryV1GetGet($attributeCode), $fetch);
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
     * @throws \Kiboko\Magento\Exception\CatalogCategoryAttributeRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataCategoryAttributeSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryAttributeRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogCategoryAttributeRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Retrieve list of attribute options
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogCategoryAttributeOptionManagementV1GetItemsGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogCategoryAttributeOptionManagementV1GetItemsGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeOptionInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryAttributeOptionManagementV1GetItemsGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogCategoryAttributeOptionManagementV1GetItemsGet($attributeCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductTypeListV1GetProductTypesGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductTypeInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductTypeListV1GetProductTypesGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductTypeListV1GetProductTypesGet(), $fetch);
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
     * @throws \Kiboko\Magento\Exception\CatalogAttributeSetRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeSetSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogAttributeSetRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Remove attribute set by given ID
     *
     * @param int $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogAttributeSetRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogAttributeSetRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetRepositoryV1DeleteByIdDelete(int $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogAttributeSetRepositoryV1DeleteByIdDelete($attributeSetId), $fetch);
    }
    /**
     * Retrieve attribute set information based on given ID
     *
     * @param int $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogAttributeSetRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogAttributeSetRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeSetInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetRepositoryV1GetGet(int $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogAttributeSetRepositoryV1GetGet($attributeSetId), $fetch);
    }
    /**
     * Save attribute set data
     *
     * @param string $attributeSetId 
     * @param \Kiboko\Magento\Model\V1ProductsAttributeSetsAttributeSetIdPutBody $catalogAttributeSetRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogAttributeSetRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogAttributeSetRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\CatalogAttributeSetRepositoryV1SavePutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeSetInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetRepositoryV1SavePut(string $attributeSetId, \Kiboko\Magento\Model\V1ProductsAttributeSetsAttributeSetIdPutBody $catalogAttributeSetRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogAttributeSetRepositoryV1SavePut($attributeSetId, $catalogAttributeSetRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Create attribute set from data
     *
     * @param \Kiboko\Magento\Model\V1ProductsAttributeSetsPostBody $catalogAttributeSetManagementV1CreatePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogAttributeSetManagementV1CreatePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogAttributeSetManagementV1CreatePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeSetInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogAttributeSetManagementV1CreatePost(\Kiboko\Magento\Model\V1ProductsAttributeSetsPostBody $catalogAttributeSetManagementV1CreatePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogAttributeSetManagementV1CreatePost($catalogAttributeSetManagementV1CreatePostBody), $fetch);
    }
    /**
     * Retrieve related attributes based on given attribute set ID
     *
     * @param string $attributeSetId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeManagementV1GetAttributesGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeManagementV1GetAttributesGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductAttributeInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeManagementV1GetAttributesGet(string $attributeSetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductAttributeManagementV1GetAttributesGet($attributeSetId), $fetch);
    }
    /**
     * Assign attribute to attribute set
     *
     * @param \Kiboko\Magento\Model\V1ProductsAttributeSetsAttributesPostBody $catalogProductAttributeManagementV1AssignPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeManagementV1AssignPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeManagementV1AssignPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeManagementV1AssignPost(\Kiboko\Magento\Model\V1ProductsAttributeSetsAttributesPostBody $catalogProductAttributeManagementV1AssignPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductAttributeManagementV1AssignPost($catalogProductAttributeManagementV1AssignPostBody), $fetch);
    }
    /**
     * Remove attribute from attribute set
     *
     * @param string $attributeSetId 
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeManagementV1UnassignDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeManagementV1UnassignDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeManagementV1UnassignDelete(string $attributeSetId, string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductAttributeManagementV1UnassignDelete($attributeSetId, $attributeCode), $fetch);
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
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeGroupRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeGroupRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeGroupSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeGroupRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductAttributeGroupRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save attribute group
     *
     * @param \Kiboko\Magento\Model\V1ProductsAttributeSetsGroupsPostBody $catalogProductAttributeGroupRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeGroupRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeGroupInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeGroupRepositoryV1SavePost(\Kiboko\Magento\Model\V1ProductsAttributeSetsGroupsPostBody $catalogProductAttributeGroupRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductAttributeGroupRepositoryV1SavePost($catalogProductAttributeGroupRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Save attribute group
     *
     * @param string $attributeSetId 
     * @param \Kiboko\Magento\Model\V1ProductsAttributeSetsAttributeSetIdGroupsPutBody $catalogProductAttributeGroupRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeGroupRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeGroupInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeGroupRepositoryV1SavePut(string $attributeSetId, \Kiboko\Magento\Model\V1ProductsAttributeSetsAttributeSetIdGroupsPutBody $catalogProductAttributeGroupRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductAttributeGroupRepositoryV1SavePut($attributeSetId, $catalogProductAttributeGroupRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Remove attribute group by id
     *
     * @param int $groupId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeGroupRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeGroupRepositoryV1DeleteByIdDelete(int $groupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductAttributeGroupRepositoryV1DeleteByIdDelete($groupId), $fetch);
    }
    /**
     * Retrieve list of attribute options
     *
     * @param string $attributeCode 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeOptionManagementV1GetItemsGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeOptionManagementV1GetItemsGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\EavDataAttributeOptionInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeOptionManagementV1GetItemsGet(string $attributeCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductAttributeOptionManagementV1GetItemsGet($attributeCode), $fetch);
    }
    /**
     * Add option to attribute
     *
     * @param string $attributeCode 
     * @param \Kiboko\Magento\Model\V1ProductsAttributesAttributeCodeOptionsPostBody $catalogProductAttributeOptionManagementV1AddPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeOptionManagementV1AddPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeOptionManagementV1AddPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeOptionManagementV1AddPost(string $attributeCode, \Kiboko\Magento\Model\V1ProductsAttributesAttributeCodeOptionsPostBody $catalogProductAttributeOptionManagementV1AddPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductAttributeOptionManagementV1AddPost($attributeCode, $catalogProductAttributeOptionManagementV1AddPostBody), $fetch);
    }
    /**
     * Delete option from attribute
     *
     * @param string $attributeCode 
     * @param string $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeOptionManagementV1DeleteDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeOptionManagementV1DeleteDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeOptionManagementV1DeleteDelete(string $attributeCode, string $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductAttributeOptionManagementV1DeleteDelete($attributeCode, $optionId), $fetch);
    }
    /**
     * Retrieve the list of media attributes (fronted input type is media_image) assigned to the given attribute set.
     *
     * @param string $attributeSetName 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductMediaAttributeManagementV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductAttributeInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductMediaAttributeManagementV1GetListGet(string $attributeSetName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductMediaAttributeManagementV1GetListGet($attributeSetName), $fetch);
    }
    /**
     * Remove gallery entry
     *
     * @param string $sku 
     * @param int $entryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeMediaGalleryManagementV1RemoveDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeMediaGalleryManagementV1RemoveDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1RemoveDelete(string $sku, int $entryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductAttributeMediaGalleryManagementV1RemoveDelete($sku, $entryId), $fetch);
    }
    /**
     * Return information about gallery entry
     *
     * @param string $sku 
     * @param int $entryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeMediaGalleryManagementV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeMediaGalleryManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductAttributeMediaGalleryEntryInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1GetGet(string $sku, int $entryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductAttributeMediaGalleryManagementV1GetGet($sku, $entryId), $fetch);
    }
    /**
     * Update gallery entry
     *
     * @param string $sku 
     * @param string $entryId 
     * @param \Kiboko\Magento\Model\V1ProductsSkuMediaEntryIdPutBody $catalogProductAttributeMediaGalleryManagementV1UpdatePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeMediaGalleryManagementV1UpdatePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeMediaGalleryManagementV1UpdatePutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1UpdatePut(string $sku, string $entryId, \Kiboko\Magento\Model\V1ProductsSkuMediaEntryIdPutBody $catalogProductAttributeMediaGalleryManagementV1UpdatePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductAttributeMediaGalleryManagementV1UpdatePut($sku, $entryId, $catalogProductAttributeMediaGalleryManagementV1UpdatePutBody), $fetch);
    }
    /**
     * Retrieve the list of gallery entries associated with given product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeMediaGalleryManagementV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductAttributeMediaGalleryEntryInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductAttributeMediaGalleryManagementV1GetListGet($sku), $fetch);
    }
    /**
     * Create new gallery entry
     *
     * @param string $sku 
     * @param \Kiboko\Magento\Model\V1ProductsSkuMediaPostBody $catalogProductAttributeMediaGalleryManagementV1CreatePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeMediaGalleryManagementV1CreatePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductAttributeMediaGalleryManagementV1CreatePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductAttributeMediaGalleryManagementV1CreatePost(string $sku, \Kiboko\Magento\Model\V1ProductsSkuMediaPostBody $catalogProductAttributeMediaGalleryManagementV1CreatePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductAttributeMediaGalleryManagementV1CreatePost($sku, $catalogProductAttributeMediaGalleryManagementV1CreatePostBody), $fetch);
    }
    /**
     * Get tier price of product
     *
     * @param string $sku 
     * @param string $customerGroupId 'all' can be used to specify 'ALL GROUPS'
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductTierPriceManagementV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductTierPriceManagementV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductTierPriceInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductTierPriceManagementV1GetListGet(string $sku, string $customerGroupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductTierPriceManagementV1GetListGet($sku, $customerGroupId), $fetch);
    }
    /**
     * Create tier price for product
     *
     * @param string $sku 
     * @param string $customerGroupId 'all' can be used to specify 'ALL GROUPS'
     * @param float $price 
     * @param float $qty 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductTierPriceManagementV1AddPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductTierPriceManagementV1AddPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductTierPriceManagementV1AddPost(string $sku, string $customerGroupId, float $price, float $qty, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductTierPriceManagementV1AddPost($sku, $customerGroupId, $price, $qty), $fetch);
    }
    /**
     * Remove tier price from product
     *
     * @param string $sku 
     * @param string $customerGroupId 'all' can be used to specify 'ALL GROUPS'
     * @param float $qty 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductTierPriceManagementV1RemoveDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductTierPriceManagementV1RemoveDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductTierPriceManagementV1RemoveDelete(string $sku, string $customerGroupId, float $qty, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductTierPriceManagementV1RemoveDelete($sku, $customerGroupId, $qty), $fetch);
    }
    /**
     * Return product prices. In case of at least one of skus is not found exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsTierPricesInformationPostBody $catalogTierPriceStorageV1GetPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogTierPriceStorageV1GetPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogTierPriceStorageV1GetPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataTierPriceInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogTierPriceStorageV1GetPost(\Kiboko\Magento\Model\V1ProductsTierPricesInformationPostBody $catalogTierPriceStorageV1GetPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogTierPriceStorageV1GetPost($catalogTierPriceStorageV1GetPostBody), $fetch);
    }
    /**
     * Add or update product prices. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsTierPricesPostBody $catalogTierPriceStorageV1UpdatePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogTierPriceStorageV1UpdatePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogTierPriceStorageV1UpdatePost(\Kiboko\Magento\Model\V1ProductsTierPricesPostBody $catalogTierPriceStorageV1UpdatePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogTierPriceStorageV1UpdatePost($catalogTierPriceStorageV1UpdatePostBody), $fetch);
    }
    /**
     * Remove existing tier prices and replace them with the new ones. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from replace list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsTierPricesPutBody $catalogTierPriceStorageV1ReplacePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogTierPriceStorageV1ReplacePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogTierPriceStorageV1ReplacePut(\Kiboko\Magento\Model\V1ProductsTierPricesPutBody $catalogTierPriceStorageV1ReplacePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogTierPriceStorageV1ReplacePut($catalogTierPriceStorageV1ReplacePutBody), $fetch);
    }
    /**
     * Delete product tier prices. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from delete list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsTierPricesDeletePostBody $catalogTierPriceStorageV1DeletePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogTierPriceStorageV1DeletePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogTierPriceStorageV1DeletePost(\Kiboko\Magento\Model\V1ProductsTierPricesDeletePostBody $catalogTierPriceStorageV1DeletePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogTierPriceStorageV1DeletePost($catalogTierPriceStorageV1DeletePostBody), $fetch);
    }
    /**
     * Return product prices. In case of at least one of skus is not found exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsBasePricesInformationPostBody $catalogBasePriceStorageV1GetPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogBasePriceStorageV1GetPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataBasePriceInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogBasePriceStorageV1GetPost(\Kiboko\Magento\Model\V1ProductsBasePricesInformationPostBody $catalogBasePriceStorageV1GetPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogBasePriceStorageV1GetPost($catalogBasePriceStorageV1GetPostBody), $fetch);
    }
    /**
     * Add or update product prices. Input item should correspond \Magento\Catalog\Api\Data\CostInterface. If any items will have invalid price, store id or sku, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsBasePricesPostBody $catalogBasePriceStorageV1UpdatePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogBasePriceStorageV1UpdatePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogBasePriceStorageV1UpdatePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogBasePriceStorageV1UpdatePost(\Kiboko\Magento\Model\V1ProductsBasePricesPostBody $catalogBasePriceStorageV1UpdatePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogBasePriceStorageV1UpdatePost($catalogBasePriceStorageV1UpdatePostBody), $fetch);
    }
    /**
     * Return product prices. In case of at least one of skus is not found exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsCostInformationPostBody $catalogCostStorageV1GetPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogCostStorageV1GetPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogCostStorageV1GetPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataCostInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCostStorageV1GetPost(\Kiboko\Magento\Model\V1ProductsCostInformationPostBody $catalogCostStorageV1GetPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogCostStorageV1GetPost($catalogCostStorageV1GetPostBody), $fetch);
    }
    /**
     * Add or update product cost. Input item should correspond to \Magento\Catalog\Api\Data\CostInterface. If any items will have invalid cost, store id or sku, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsCostPostBody $catalogCostStorageV1UpdatePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogCostStorageV1UpdatePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCostStorageV1UpdatePost(\Kiboko\Magento\Model\V1ProductsCostPostBody $catalogCostStorageV1UpdatePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogCostStorageV1UpdatePost($catalogCostStorageV1UpdatePostBody), $fetch);
    }
    /**
     * Delete product cost. In case of at least one of skus is not found exception will be thrown. If error occurred during the delete exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsCostDeletePostBody $catalogCostStorageV1DeletePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogCostStorageV1DeletePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogCostStorageV1DeletePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCostStorageV1DeletePost(\Kiboko\Magento\Model\V1ProductsCostDeletePostBody $catalogCostStorageV1DeletePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogCostStorageV1DeletePost($catalogCostStorageV1DeletePostBody), $fetch);
    }
    /**
     * Return product's special price. In case of at least one of skus is not found exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsSpecialPriceInformationPostBody $catalogSpecialPriceStorageV1GetPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogSpecialPriceStorageV1GetPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogSpecialPriceStorageV1GetPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataSpecialPriceInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogSpecialPriceStorageV1GetPost(\Kiboko\Magento\Model\V1ProductsSpecialPriceInformationPostBody $catalogSpecialPriceStorageV1GetPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogSpecialPriceStorageV1GetPost($catalogSpecialPriceStorageV1GetPostBody), $fetch);
    }
    /**
     * Add or update product's special price. If any items will have invalid price, store id, sku or dates, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsSpecialPricePostBody $catalogSpecialPriceStorageV1UpdatePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogSpecialPriceStorageV1UpdatePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogSpecialPriceStorageV1UpdatePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogSpecialPriceStorageV1UpdatePost(\Kiboko\Magento\Model\V1ProductsSpecialPricePostBody $catalogSpecialPriceStorageV1UpdatePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogSpecialPriceStorageV1UpdatePost($catalogSpecialPriceStorageV1UpdatePostBody), $fetch);
    }
    /**
     * Delete product's special price. If any items will have invalid price, store id, sku or dates, they will be marked as failed and excluded from delete list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the delete exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsSpecialPriceDeletePostBody $catalogSpecialPriceStorageV1DeletePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogSpecialPriceStorageV1DeletePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogSpecialPriceStorageV1DeletePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogSpecialPriceStorageV1DeletePost(\Kiboko\Magento\Model\V1ProductsSpecialPriceDeletePostBody $catalogSpecialPriceStorageV1DeletePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogSpecialPriceStorageV1DeletePost($catalogSpecialPriceStorageV1DeletePostBody), $fetch);
    }
    /**
     * Delete category by identifier
     *
     * @param int $categoryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogCategoryRepositoryV1DeleteByIdentifierDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogCategoryRepositoryV1DeleteByIdentifierDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryRepositoryV1DeleteByIdentifierDelete(int $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogCategoryRepositoryV1DeleteByIdentifierDelete($categoryId), $fetch);
    }
    /**
     * Get info about category by category id
     *
     * @param int $categoryId 
     * @param array $queryParameters {
     *     @var int $storeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogCategoryRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogCategoryRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataCategoryInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryRepositoryV1GetGet(int $categoryId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogCategoryRepositoryV1GetGet($categoryId, $queryParameters), $fetch);
    }
    /**
     * Retrieve list of categories
     *
     * @param array $queryParameters {
     *     @var int $rootCategoryId 
     *     @var int $depth 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogCategoryManagementV1GetTreeGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogCategoryManagementV1GetTreeGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataCategoryTreeInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryManagementV1GetTreeGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogCategoryManagementV1GetTreeGet($queryParameters), $fetch);
    }
    /**
     * Create category service
     *
     * @param \Kiboko\Magento\Model\V1CategoriesPostBody $catalogCategoryRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogCategoryRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogCategoryRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataCategoryInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryRepositoryV1SavePost(\Kiboko\Magento\Model\V1CategoriesPostBody $catalogCategoryRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogCategoryRepositoryV1SavePost($catalogCategoryRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Create category service
     *
     * @param string $id 
     * @param \Kiboko\Magento\Model\V1CategoriesIdPutBody $catalogCategoryRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogCategoryRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogCategoryRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataCategoryInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryRepositoryV1SavePut(string $id, \Kiboko\Magento\Model\V1CategoriesIdPutBody $catalogCategoryRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogCategoryRepositoryV1SavePut($id, $catalogCategoryRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Move category
     *
     * @param int $categoryId 
     * @param \Kiboko\Magento\Model\V1CategoriesCategoryIdMovePutBody $catalogCategoryManagementV1MovePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogCategoryManagementV1MovePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogCategoryManagementV1MovePutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\CatalogCategoryManagementV1MovePutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryManagementV1MovePut(int $categoryId, \Kiboko\Magento\Model\V1CategoriesCategoryIdMovePutBody $catalogCategoryManagementV1MovePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogCategoryManagementV1MovePut($categoryId, $catalogCategoryManagementV1MovePutBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\CatalogCategoryListV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataCategorySearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryListV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogCategoryListV1GetListGet($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductCustomOptionTypeListV1GetItemsGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductCustomOptionTypeInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionTypeListV1GetItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductCustomOptionTypeListV1GetItemsGet(), $fetch);
    }
    /**
     * Get the list of custom options for a specific product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductCustomOptionRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductCustomOptionInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductCustomOptionRepositoryV1GetListGet($sku), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductCustomOptionRepositoryV1DeleteByIdentifierDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete(string $sku, int $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete($sku, $optionId), $fetch);
    }
    /**
     * Get custom option for a specific product
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductCustomOptionRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductCustomOptionInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1GetGet(string $sku, int $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductCustomOptionRepositoryV1GetGet($sku, $optionId), $fetch);
    }
    /**
     * Save Custom Option
     *
     * @param \Kiboko\Magento\Model\V1ProductsOptionsPostBody $catalogProductCustomOptionRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductCustomOptionRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductCustomOptionInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1SavePost(\Kiboko\Magento\Model\V1ProductsOptionsPostBody $catalogProductCustomOptionRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductCustomOptionRepositoryV1SavePost($catalogProductCustomOptionRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Save Custom Option
     *
     * @param string $optionId 
     * @param \Kiboko\Magento\Model\V1ProductsOptionsOptionIdPutBody $catalogProductCustomOptionRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductCustomOptionRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductCustomOptionInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductCustomOptionRepositoryV1SavePut(string $optionId, \Kiboko\Magento\Model\V1ProductsOptionsOptionIdPutBody $catalogProductCustomOptionRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductCustomOptionRepositoryV1SavePut($optionId, $catalogProductCustomOptionRepositoryV1SavePutBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductLinkTypeListV1GetItemsGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductLinkTypeInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkTypeListV1GetItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductLinkTypeListV1GetItemsGet(), $fetch);
    }
    /**
     * Provide a list of the product link type attributes
     *
     * @param string $type 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductLinkTypeListV1GetItemAttributesGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductLinkAttributeInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkTypeListV1GetItemAttributesGet(string $type, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductLinkTypeListV1GetItemAttributesGet($type), $fetch);
    }
    /**
     * Provide the list of links for a specific product
     *
     * @param string $sku 
     * @param string $type 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductLinkManagementV1GetLinkedItemsByTypeGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductLinkInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkManagementV1GetLinkedItemsByTypeGet(string $sku, string $type, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductLinkManagementV1GetLinkedItemsByTypeGet($sku, $type), $fetch);
    }
    /**
     * Assign a product link to another product
     *
     * @param string $sku 
     * @param \Kiboko\Magento\Model\V1ProductsSkuLinksPostBody $catalogProductLinkManagementV1SetProductLinksPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductLinkManagementV1SetProductLinksPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductLinkManagementV1SetProductLinksPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkManagementV1SetProductLinksPost(string $sku, \Kiboko\Magento\Model\V1ProductsSkuLinksPostBody $catalogProductLinkManagementV1SetProductLinksPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductLinkManagementV1SetProductLinksPost($sku, $catalogProductLinkManagementV1SetProductLinksPostBody), $fetch);
    }
    /**
     * Save product link
     *
     * @param string $sku 
     * @param \Kiboko\Magento\Model\V1ProductsSkuLinksPutBody $catalogProductLinkRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductLinkRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductLinkRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkRepositoryV1SavePut(string $sku, \Kiboko\Magento\Model\V1ProductsSkuLinksPutBody $catalogProductLinkRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductLinkRepositoryV1SavePut($sku, $catalogProductLinkRepositoryV1SavePutBody), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param string $type 
     * @param string $linkedProductSku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductLinkRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductLinkRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductLinkRepositoryV1DeleteByIdDelete(string $sku, string $type, string $linkedProductSku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductLinkRepositoryV1DeleteByIdDelete($sku, $type, $linkedProductSku), $fetch);
    }
    /**
     * Get products assigned to category
     *
     * @param int $categoryId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogCategoryLinkManagementV1GetAssignedProductsGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataCategoryProductLinkInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryLinkManagementV1GetAssignedProductsGet(int $categoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogCategoryLinkManagementV1GetAssignedProductsGet($categoryId), $fetch);
    }
    /**
     * Assign a product to the required category
     *
     * @param string $categoryId 
     * @param \Kiboko\Magento\Model\V1CategoriesCategoryIdProductsPostBody $catalogCategoryLinkRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogCategoryLinkRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogCategoryLinkRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryLinkRepositoryV1SavePost(string $categoryId, \Kiboko\Magento\Model\V1CategoriesCategoryIdProductsPostBody $catalogCategoryLinkRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogCategoryLinkRepositoryV1SavePost($categoryId, $catalogCategoryLinkRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Assign a product to the required category
     *
     * @param string $categoryId 
     * @param \Kiboko\Magento\Model\V1CategoriesCategoryIdProductsPutBody $catalogCategoryLinkRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogCategoryLinkRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogCategoryLinkRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryLinkRepositoryV1SavePut(string $categoryId, \Kiboko\Magento\Model\V1CategoriesCategoryIdProductsPutBody $catalogCategoryLinkRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogCategoryLinkRepositoryV1SavePut($categoryId, $catalogCategoryLinkRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Remove the product assignment from the category by category id and sku
     *
     * @param string $categoryId 
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogCategoryLinkRepositoryV1DeleteByIdsDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogCategoryLinkRepositoryV1DeleteByIdsDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogCategoryLinkRepositoryV1DeleteByIdsDelete(string $categoryId, string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogCategoryLinkRepositoryV1DeleteByIdsDelete($categoryId, $sku), $fetch);
    }
    /**
     * Assign a product to the website
     *
     * @param string $sku 
     * @param \Kiboko\Magento\Model\V1ProductsSkuWebsitesPostBody $catalogProductWebsiteLinkRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductWebsiteLinkRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductWebsiteLinkRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductWebsiteLinkRepositoryV1SavePost(string $sku, \Kiboko\Magento\Model\V1ProductsSkuWebsitesPostBody $catalogProductWebsiteLinkRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductWebsiteLinkRepositoryV1SavePost($sku, $catalogProductWebsiteLinkRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Assign a product to the website
     *
     * @param string $sku 
     * @param \Kiboko\Magento\Model\V1ProductsSkuWebsitesPutBody $catalogProductWebsiteLinkRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductWebsiteLinkRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductWebsiteLinkRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductWebsiteLinkRepositoryV1SavePut(string $sku, \Kiboko\Magento\Model\V1ProductsSkuWebsitesPutBody $catalogProductWebsiteLinkRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductWebsiteLinkRepositoryV1SavePut($sku, $catalogProductWebsiteLinkRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Remove the website assignment from the product by product sku
     *
     * @param string $sku 
     * @param int $websiteId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogProductWebsiteLinkRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogProductWebsiteLinkRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete(string $sku, int $websiteId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductWebsiteLinkRepositoryV1DeleteByIdDelete($sku, $websiteId), $fetch);
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
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductRenderSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogProductRenderListV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogProductRenderListV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Enables an administrative user to return information for a specified cart.
     *
     * @param int $cartId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCartRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCartRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartRepositoryV1GetGet(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCartRepositoryV1GetGet($cartId), $fetch);
    }
    /**
     * Assigns a specified customer to a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1CartsCartIdPutBody $quoteCartManagementV1AssignCustomerPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCartManagementV1AssignCustomerPutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1AssignCustomerPut(int $cartId, \Kiboko\Magento\Model\V1CartsCartIdPutBody $quoteCartManagementV1AssignCustomerPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCartManagementV1AssignCustomerPut($cartId, $quoteCartManagementV1AssignCustomerPutBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\QuoteCartRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCartRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCartManagementV1GetCartForCustomerGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCartManagementV1GetCartForCustomerGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1GetCartForCustomerGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCartManagementV1GetCartForCustomerGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCartManagementV1CreateEmptyCartForCustomerPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCartManagementV1CreateEmptyCartForCustomerPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1CreateEmptyCartForCustomerPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCartManagementV1CreateEmptyCartForCustomerPost(), $fetch);
    }
    /**
     * Save quote
     *
     * @param \Kiboko\Magento\Model\V1CartsMinePutBody $quoteCartRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCartRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartRepositoryV1SavePut(\Kiboko\Magento\Model\V1CartsMinePutBody $quoteCartRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCartRepositoryV1SavePut($quoteCartRepositoryV1SavePutBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCartManagementV1CreateEmptyCartPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCartManagementV1CreateEmptyCartPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1CreateEmptyCartPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCartManagementV1CreateEmptyCartPost(), $fetch);
    }
    /**
     * Creates an empty cart and quote for a specified customer if customer does not have a cart yet.
     *
     * @param int $customerId The customer ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCartManagementV1CreateEmptyCartForCustomerPostWithCustomerIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCartManagementV1CreateEmptyCartForCustomerPostWithCustomerIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1CreateEmptyCartForCustomerPostWithCustomerId(int $customerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCartManagementV1CreateEmptyCartForCustomerPostWithCustomerId($customerId), $fetch);
    }
    /**
     * Places an order for a specified cart.
     *
     * @param \Kiboko\Magento\Model\V1CartsMineOrderPutBody $quoteCartManagementV1PlaceOrderPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCartManagementV1PlaceOrderPutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCartManagementV1PlaceOrderPutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1PlaceOrderPut(\Kiboko\Magento\Model\V1CartsMineOrderPutBody $quoteCartManagementV1PlaceOrderPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCartManagementV1PlaceOrderPut($quoteCartManagementV1PlaceOrderPutBody), $fetch);
    }
    /**
     * Places an order for a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1CartsCartIdOrderPutBody $quoteCartManagementV1PlaceOrderPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCartManagementV1PlaceOrderPutWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCartManagementV1PlaceOrderPutWithCartIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartManagementV1PlaceOrderPutWithCartId(int $cartId, \Kiboko\Magento\Model\V1CartsCartIdOrderPutBody $quoteCartManagementV1PlaceOrderPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCartManagementV1PlaceOrderPutWithCartId($cartId, $quoteCartManagementV1PlaceOrderPutBody), $fetch);
    }
    /**
     * Enable a guest user to return information for a specified cart.
     *
     * @param string $cartId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteGuestCartRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartRepositoryV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteGuestCartRepositoryV1GetGet($cartId), $fetch);
    }
    /**
     * Assign a specified customer to a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdPutBody $quoteGuestCartManagementV1AssignCustomerPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteGuestCartManagementV1AssignCustomerPutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartManagementV1AssignCustomerPut(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdPutBody $quoteGuestCartManagementV1AssignCustomerPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteGuestCartManagementV1AssignCustomerPut($cartId, $quoteGuestCartManagementV1AssignCustomerPutBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteGuestCartManagementV1CreateEmptyCartPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartManagementV1CreateEmptyCartPost(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteGuestCartManagementV1CreateEmptyCartPost(), $fetch);
    }
    /**
     * Place an order for a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdOrderPutBody $quoteGuestCartManagementV1PlaceOrderPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteGuestCartManagementV1PlaceOrderPutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartManagementV1PlaceOrderPut(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdOrderPutBody $quoteGuestCartManagementV1PlaceOrderPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteGuestCartManagementV1PlaceOrderPut($cartId, $quoteGuestCartManagementV1PlaceOrderPutBody), $fetch);
    }
    /**
     * Lists applicable shipping methods for a specified quote.
     *
     * @param int $cartId The shopping cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteShippingMethodManagementV1GetListGetWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteShippingMethodManagementV1GetListGetWithCartIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShippingMethodManagementV1GetListGetWithCartId(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteShippingMethodManagementV1GetListGetWithCartId($cartId), $fetch);
    }
    /**
     * Estimate shipping
     *
     * @param int $cartId The shopping cart ID.
     * @param \Kiboko\Magento\Model\V1CartsCartIdEstimateShippingMethodsByAddressIdPostBody $quoteShippingMethodManagementV1EstimateByAddressIdPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteShippingMethodManagementV1EstimateByAddressIdPostWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShippingMethodManagementV1EstimateByAddressIdPostWithCartId(int $cartId, \Kiboko\Magento\Model\V1CartsCartIdEstimateShippingMethodsByAddressIdPostBody $quoteShippingMethodManagementV1EstimateByAddressIdPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteShippingMethodManagementV1EstimateByAddressIdPostWithCartId($cartId, $quoteShippingMethodManagementV1EstimateByAddressIdPostBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteShippingMethodManagementV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteShippingMethodManagementV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShippingMethodManagementV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteShippingMethodManagementV1GetListGet(), $fetch);
    }
    /**
     * Estimate shipping
     *
     * @param \Kiboko\Magento\Model\V1CartsMineEstimateShippingMethodsByAddressIdPostBody $quoteShippingMethodManagementV1EstimateByAddressIdPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteShippingMethodManagementV1EstimateByAddressIdPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShippingMethodManagementV1EstimateByAddressIdPost(\Kiboko\Magento\Model\V1CartsMineEstimateShippingMethodsByAddressIdPostBody $quoteShippingMethodManagementV1EstimateByAddressIdPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteShippingMethodManagementV1EstimateByAddressIdPost($quoteShippingMethodManagementV1EstimateByAddressIdPostBody), $fetch);
    }
    /**
     * Estimate shipping by address and return list of available shipping methods
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\Model\V1CartsCartIdEstimateShippingMethodsPostBody $quoteShipmentEstimationV1EstimateByExtendedAddressPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteShipmentEstimationV1EstimateByExtendedAddressPostWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShipmentEstimationV1EstimateByExtendedAddressPostWithCartId(string $cartId, \Kiboko\Magento\Model\V1CartsCartIdEstimateShippingMethodsPostBody $quoteShipmentEstimationV1EstimateByExtendedAddressPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteShipmentEstimationV1EstimateByExtendedAddressPostWithCartId($cartId, $quoteShipmentEstimationV1EstimateByExtendedAddressPostBody), $fetch);
    }
    /**
     * Estimate shipping by address and return list of available shipping methods
     *
     * @param \Kiboko\Magento\Model\V1CartsMineEstimateShippingMethodsPostBody $quoteShipmentEstimationV1EstimateByExtendedAddressPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteShipmentEstimationV1EstimateByExtendedAddressPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteShipmentEstimationV1EstimateByExtendedAddressPost(\Kiboko\Magento\Model\V1CartsMineEstimateShippingMethodsPostBody $quoteShipmentEstimationV1EstimateByExtendedAddressPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteShipmentEstimationV1EstimateByExtendedAddressPost($quoteShipmentEstimationV1EstimateByExtendedAddressPostBody), $fetch);
    }
    /**
     * List applicable shipping methods for a specified quote.
     *
     * @param string $cartId The shopping cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteGuestShippingMethodManagementV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestShippingMethodManagementV1GetListGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteGuestShippingMethodManagementV1GetListGet($cartId), $fetch);
    }
    /**
     * Estimate shipping by address and return list of available shipping methods
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdEstimateShippingMethodsPostBody $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdEstimateShippingMethodsPostBody $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteGuestShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody), $fetch);
    }
    /**
     * Lists items that are assigned to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1GetListGetWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1GetListGetWithCartIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartItemInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1GetListGetWithCartId(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCartItemRepositoryV1GetListGetWithCartId($cartId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $quoteId 
     * @param \Kiboko\Magento\Model\V1CartsQuoteIdItemsPostBody $quoteCartItemRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1SavePostWithQuoteIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1SavePostWithQuoteIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartItemInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1SavePostWithQuoteId(string $quoteId, \Kiboko\Magento\Model\V1CartsQuoteIdItemsPostBody $quoteCartItemRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCartItemRepositoryV1SavePostWithQuoteId($quoteId, $quoteCartItemRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Removes the specified item from the specified cart.
     *
     * @param int $cartId The cart ID.
     * @param int $itemId The item ID of the item to be removed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1DeleteByIdDeleteWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1DeleteByIdDeleteWithCartIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1DeleteByIdDeleteWithCartId(int $cartId, int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCartItemRepositoryV1DeleteByIdDeleteWithCartId($cartId, $itemId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $cartId 
     * @param string $itemId 
     * @param \Kiboko\Magento\Model\V1CartsCartIdItemsItemIdPutBody $quoteCartItemRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1SavePutWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1SavePutWithCartIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartItemInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1SavePutWithCartId(string $cartId, string $itemId, \Kiboko\Magento\Model\V1CartsCartIdItemsItemIdPutBody $quoteCartItemRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCartItemRepositoryV1SavePutWithCartId($cartId, $itemId, $quoteCartItemRepositoryV1SavePutBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartItemInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCartItemRepositoryV1GetListGet(), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param \Kiboko\Magento\Model\V1CartsMineItemsPostBody $quoteCartItemRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartItemInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1SavePost(\Kiboko\Magento\Model\V1CartsMineItemsPostBody $quoteCartItemRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCartItemRepositoryV1SavePost($quoteCartItemRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Removes the specified item from the specified cart.
     *
     * @param int $itemId The item ID of the item to be removed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1DeleteByIdDelete(int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCartItemRepositoryV1DeleteByIdDelete($itemId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $itemId 
     * @param \Kiboko\Magento\Model\V1CartsMineItemsItemIdPutBody $quoteCartItemRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCartItemRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartItemInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartItemRepositoryV1SavePut(string $itemId, \Kiboko\Magento\Model\V1CartsMineItemsItemIdPutBody $quoteCartItemRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCartItemRepositoryV1SavePut($itemId, $quoteCartItemRepositoryV1SavePutBody), $fetch);
    }
    /**
     * List items that are assigned to a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteGuestCartItemRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartItemInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartItemRepositoryV1GetListGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteGuestCartItemRepositoryV1GetListGet($cartId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdItemsPostBody $quoteGuestCartItemRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteGuestCartItemRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartItemInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartItemRepositoryV1SavePost(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdItemsPostBody $quoteGuestCartItemRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteGuestCartItemRepositoryV1SavePost($cartId, $quoteGuestCartItemRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Remove the specified item from the specified cart.
     *
     * @param string $cartId The cart ID.
     * @param int $itemId The item ID of the item to be removed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteGuestCartItemRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartItemRepositoryV1DeleteByIdDelete(string $cartId, int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteGuestCartItemRepositoryV1DeleteByIdDelete($cartId, $itemId), $fetch);
    }
    /**
     * Add/update the specified cart item.
     *
     * @param string $cartId 
     * @param string $itemId 
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdItemsItemIdPutBody $quoteGuestCartItemRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteGuestCartItemRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataCartItemInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartItemRepositoryV1SavePut(string $cartId, string $itemId, \Kiboko\Magento\Model\V1GuestCartsCartIdItemsItemIdPutBody $quoteGuestCartItemRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteGuestCartItemRepositoryV1SavePut($cartId, $itemId, $quoteGuestCartItemRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Returns the payment method for a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuotePaymentMethodManagementV1GetGetWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuotePaymentMethodManagementV1GetGetWithCartIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataPaymentInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1GetGetWithCartId(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuotePaymentMethodManagementV1GetGetWithCartId($cartId), $fetch);
    }
    /**
     * Adds a specified payment method to a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1CartsCartIdSelectedPaymentMethodPutBody $quotePaymentMethodManagementV1SetPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuotePaymentMethodManagementV1SetPutWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuotePaymentMethodManagementV1SetPutWithCartIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1SetPutWithCartId(int $cartId, \Kiboko\Magento\Model\V1CartsCartIdSelectedPaymentMethodPutBody $quotePaymentMethodManagementV1SetPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuotePaymentMethodManagementV1SetPutWithCartId($cartId, $quotePaymentMethodManagementV1SetPutBody), $fetch);
    }
    /**
     * Lists available payment methods for a specified shopping cart. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See http://devdocs.magento.com/codelinks/attributes.html#PaymentMethodManagementInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuotePaymentMethodManagementV1GetListGetWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuotePaymentMethodManagementV1GetListGetWithCartIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataPaymentMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1GetListGetWithCartId(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuotePaymentMethodManagementV1GetListGetWithCartId($cartId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuotePaymentMethodManagementV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuotePaymentMethodManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataPaymentInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuotePaymentMethodManagementV1GetGet(), $fetch);
    }
    /**
     * Adds a specified payment method to a specified shopping cart.
     *
     * @param \Kiboko\Magento\Model\V1CartsMineSelectedPaymentMethodPutBody $quotePaymentMethodManagementV1SetPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuotePaymentMethodManagementV1SetPutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuotePaymentMethodManagementV1SetPutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1SetPut(\Kiboko\Magento\Model\V1CartsMineSelectedPaymentMethodPutBody $quotePaymentMethodManagementV1SetPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuotePaymentMethodManagementV1SetPut($quotePaymentMethodManagementV1SetPutBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuotePaymentMethodManagementV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuotePaymentMethodManagementV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataPaymentMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quotePaymentMethodManagementV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuotePaymentMethodManagementV1GetListGet(), $fetch);
    }
    /**
     * Return the payment method for a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteGuestPaymentMethodManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataPaymentInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestPaymentMethodManagementV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteGuestPaymentMethodManagementV1GetGet($cartId), $fetch);
    }
    /**
     * Add a specified payment method to a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdSelectedPaymentMethodPutBody $quoteGuestPaymentMethodManagementV1SetPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteGuestPaymentMethodManagementV1SetPutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestPaymentMethodManagementV1SetPut(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdSelectedPaymentMethodPutBody $quoteGuestPaymentMethodManagementV1SetPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteGuestPaymentMethodManagementV1SetPut($cartId, $quoteGuestPaymentMethodManagementV1SetPutBody), $fetch);
    }
    /**
     * List available payment methods for a specified shopping cart. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See http://devdocs.magento.com/codelinks/attributes.html#GuestPaymentMethodManagementInterface to determine which call to use to get detailed information about all attributes for an object.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteGuestPaymentMethodManagementV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataPaymentMethodInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestPaymentMethodManagementV1GetListGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteGuestPaymentMethodManagementV1GetListGet($cartId), $fetch);
    }
    /**
     * Returns the billing address for a specified quote.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteBillingAddressManagementV1GetGetWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteBillingAddressManagementV1GetGetWithCartIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataAddressInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteBillingAddressManagementV1GetGetWithCartId(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteBillingAddressManagementV1GetGetWithCartId($cartId), $fetch);
    }
    /**
     * Assigns a specified billing address to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1CartsCartIdBillingAddressPostBody $quoteBillingAddressManagementV1AssignPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteBillingAddressManagementV1AssignPostWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteBillingAddressManagementV1AssignPostWithCartIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteBillingAddressManagementV1AssignPostWithCartId(int $cartId, \Kiboko\Magento\Model\V1CartsCartIdBillingAddressPostBody $quoteBillingAddressManagementV1AssignPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteBillingAddressManagementV1AssignPostWithCartId($cartId, $quoteBillingAddressManagementV1AssignPostBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteBillingAddressManagementV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteBillingAddressManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataAddressInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteBillingAddressManagementV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteBillingAddressManagementV1GetGet(), $fetch);
    }
    /**
     * Assigns a specified billing address to a specified cart.
     *
     * @param \Kiboko\Magento\Model\V1CartsMineBillingAddressPostBody $quoteBillingAddressManagementV1AssignPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteBillingAddressManagementV1AssignPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteBillingAddressManagementV1AssignPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteBillingAddressManagementV1AssignPost(\Kiboko\Magento\Model\V1CartsMineBillingAddressPostBody $quoteBillingAddressManagementV1AssignPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteBillingAddressManagementV1AssignPost($quoteBillingAddressManagementV1AssignPostBody), $fetch);
    }
    /**
     * Return the billing address for a specified quote.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteGuestBillingAddressManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataAddressInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestBillingAddressManagementV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteGuestBillingAddressManagementV1GetGet($cartId), $fetch);
    }
    /**
     * Assign a specified billing address to a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdBillingAddressPostBody $quoteGuestBillingAddressManagementV1AssignPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteGuestBillingAddressManagementV1AssignPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestBillingAddressManagementV1AssignPost(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdBillingAddressPostBody $quoteGuestBillingAddressManagementV1AssignPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteGuestBillingAddressManagementV1AssignPost($cartId, $quoteGuestBillingAddressManagementV1AssignPostBody), $fetch);
    }
    /**
     * Deletes a coupon from a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCouponManagementV1RemoveDeleteWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCouponManagementV1RemoveDeleteWithCartIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1RemoveDeleteWithCartId(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCouponManagementV1RemoveDeleteWithCartId($cartId), $fetch);
    }
    /**
     * Returns information for a coupon in a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCouponManagementV1GetGetWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCouponManagementV1GetGetWithCartIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1GetGetWithCartId(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCouponManagementV1GetGetWithCartId($cartId), $fetch);
    }
    /**
     * Adds a coupon by code to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $couponCode The coupon code data.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCouponManagementV1SetPutWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCouponManagementV1SetPutWithCartIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1SetPutWithCartId(int $cartId, string $couponCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCouponManagementV1SetPutWithCartId($cartId, $couponCode), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCouponManagementV1RemoveDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCouponManagementV1RemoveDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1RemoveDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCouponManagementV1RemoveDelete(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCouponManagementV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCouponManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCouponManagementV1GetGet(), $fetch);
    }
    /**
     * Adds a coupon by code to a specified cart.
     *
     * @param string $couponCode The coupon code data.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCouponManagementV1SetPutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCouponManagementV1SetPutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCouponManagementV1SetPut(string $couponCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCouponManagementV1SetPut($couponCode), $fetch);
    }
    /**
     * Delete a coupon from a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteGuestCouponManagementV1RemoveDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCouponManagementV1RemoveDelete(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteGuestCouponManagementV1RemoveDelete($cartId), $fetch);
    }
    /**
     * Return information for a coupon in a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteGuestCouponManagementV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCouponManagementV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteGuestCouponManagementV1GetGet($cartId), $fetch);
    }
    /**
     * Add a coupon by code to a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $couponCode The coupon code data.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteGuestCouponManagementV1SetPutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCouponManagementV1SetPut(string $cartId, string $couponCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteGuestCouponManagementV1SetPut($cartId, $couponCode), $fetch);
    }
    /**
     * Returns quote totals data for a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCartTotalRepositoryV1GetGetWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCartTotalRepositoryV1GetGetWithCartIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataTotalsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartTotalRepositoryV1GetGetWithCartId(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCartTotalRepositoryV1GetGetWithCartId($cartId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCartTotalRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuoteCartTotalRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataTotalsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartTotalRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCartTotalRepositoryV1GetGet(), $fetch);
    }
    /**
     * Set shipping/billing methods and additional data for cart and collect totals for guest.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdCollectTotalsPutBody $quoteGuestCartTotalManagementV1CollectTotalsPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataTotalsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartTotalManagementV1CollectTotalsPut(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdCollectTotalsPutBody $quoteGuestCartTotalManagementV1CollectTotalsPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteGuestCartTotalManagementV1CollectTotalsPut($cartId, $quoteGuestCartTotalManagementV1CollectTotalsPutBody), $fetch);
    }
    /**
     * Return quote totals data for a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteGuestCartTotalRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataTotalsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteGuestCartTotalRepositoryV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteGuestCartTotalRepositoryV1GetGet($cartId), $fetch);
    }
    /**
     * Set shipping/billing methods and additional data for cart and collect totals.
     *
     * @param \Kiboko\Magento\Model\V1CartsMineCollectTotalsPutBody $quoteCartTotalManagementV1CollectTotalsPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\QuoteCartTotalManagementV1CollectTotalsPutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataTotalsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function quoteCartTotalManagementV1CollectTotalsPut(\Kiboko\Magento\Model\V1CartsMineCollectTotalsPutBody $quoteCartTotalManagementV1CollectTotalsPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\QuoteCartTotalManagementV1CollectTotalsPut($quoteCartTotalManagementV1CollectTotalsPutBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\BackendModuleServiceV1GetModulesGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function backendModuleServiceV1GetModulesGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\BackendModuleServiceV1GetModulesGet(), $fetch);
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
    public function searchV1SearchGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SearchV1SearchGet($queryParameters), $fetch);
    }
    /**
     * Loads a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesOrderRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataOrderInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesOrderRepositoryV1GetGet($id), $fetch);
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
     * @throws \Kiboko\Magento\Exception\SalesOrderRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataOrderSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesOrderRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Performs persist operations for a specified order.
     *
     * @param \Kiboko\Magento\Model\V1OrdersCreatePutBody $salesOrderRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesOrderRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataOrderInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderRepositoryV1SavePut(\Kiboko\Magento\Model\V1OrdersCreatePutBody $salesOrderRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesOrderRepositoryV1SavePut($salesOrderRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Performs persist operations for a specified order.
     *
     * @param \Kiboko\Magento\Model\V1OrdersPostBody $salesOrderRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesOrderRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataOrderInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderRepositoryV1SavePost(\Kiboko\Magento\Model\V1OrdersPostBody $salesOrderRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesOrderRepositoryV1SavePost($salesOrderRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Gets the status for a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesOrderManagementV1GetStatusGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1GetStatusGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesOrderManagementV1GetStatusGet($id), $fetch);
    }
    /**
     * Cancels a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesOrderManagementV1CancelPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1CancelPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesOrderManagementV1CancelPost($id), $fetch);
    }
    /**
     * Emails a user a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesOrderManagementV1NotifyPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1NotifyPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesOrderManagementV1NotifyPost($id), $fetch);
    }
    /**
     * Holds a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesOrderManagementV1HoldPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1HoldPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesOrderManagementV1HoldPost($id), $fetch);
    }
    /**
     * Releases a specified order from hold status.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesOrderManagementV1UnHoldPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1UnHoldPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesOrderManagementV1UnHoldPost($id), $fetch);
    }
    /**
     * Lists comments for a specified order.
     *
     * @param int $id The order ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesOrderManagementV1GetCommentsListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataOrderStatusHistorySearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1GetCommentsListGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesOrderManagementV1GetCommentsListGet($id), $fetch);
    }
    /**
     * Adds a comment to a specified order.
     *
     * @param int $id The order ID.
     * @param \Kiboko\Magento\Model\V1OrdersIdCommentsPostBody $salesOrderManagementV1AddCommentPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesOrderManagementV1AddCommentPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderManagementV1AddCommentPost(int $id, \Kiboko\Magento\Model\V1OrdersIdCommentsPostBody $salesOrderManagementV1AddCommentPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesOrderManagementV1AddCommentPost($id, $salesOrderManagementV1AddCommentPostBody), $fetch);
    }
    /**
     * Performs persist operations for a specified order address.
     *
     * @param string $parentId 
     * @param \Kiboko\Magento\Model\V1OrdersParentIdPutBody $salesOrderAddressRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesOrderAddressRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataOrderAddressInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderAddressRepositoryV1SavePut(string $parentId, \Kiboko\Magento\Model\V1OrdersParentIdPutBody $salesOrderAddressRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesOrderAddressRepositoryV1SavePut($parentId, $salesOrderAddressRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Loads a specified order item.
     *
     * @param int $id The order item ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesOrderItemRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataOrderItemInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderItemRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesOrderItemRepositoryV1GetGet($id), $fetch);
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
     * @throws \Kiboko\Magento\Exception\SalesOrderItemRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataOrderItemSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesOrderItemRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesOrderItemRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Loads a specified invoice.
     *
     * @param int $id The invoice ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesInvoiceRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataInvoiceInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesInvoiceRepositoryV1GetGet($id), $fetch);
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
     * @throws \Kiboko\Magento\Exception\SalesInvoiceRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataInvoiceSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesInvoiceRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Performs persist operations for a specified invoice.
     *
     * @param \Kiboko\Magento\Model\V1InvoicesPostBody $salesInvoiceRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesInvoiceRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataInvoiceInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceRepositoryV1SavePost(\Kiboko\Magento\Model\V1InvoicesPostBody $salesInvoiceRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesInvoiceRepositoryV1SavePost($salesInvoiceRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Lists comments for a specified invoice.
     *
     * @param int $id The invoice ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesInvoiceManagementV1GetCommentsListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataInvoiceCommentSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceManagementV1GetCommentsListGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesInvoiceManagementV1GetCommentsListGet($id), $fetch);
    }
    /**
     * Emails a user a specified invoice.
     *
     * @param int $id The invoice ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesInvoiceManagementV1NotifyPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceManagementV1NotifyPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesInvoiceManagementV1NotifyPost($id), $fetch);
    }
    /**
     * Voids a specified invoice.
     *
     * @param int $id The invoice ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesInvoiceManagementV1SetVoidPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceManagementV1SetVoidPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesInvoiceManagementV1SetVoidPost($id), $fetch);
    }
    /**
     * Sets invoice capture.
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesInvoiceManagementV1SetCapturePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceManagementV1SetCapturePost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesInvoiceManagementV1SetCapturePost($id), $fetch);
    }
    /**
     * Performs persist operations for a specified invoice comment.
     *
     * @param \Kiboko\Magento\Model\V1InvoicesCommentsPostBody $salesInvoiceCommentRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesInvoiceCommentRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\SalesInvoiceCommentRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataInvoiceCommentInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceCommentRepositoryV1SavePost(\Kiboko\Magento\Model\V1InvoicesCommentsPostBody $salesInvoiceCommentRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesInvoiceCommentRepositoryV1SavePost($salesInvoiceCommentRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Create refund for invoice
     *
     * @param int $invoiceId 
     * @param \Kiboko\Magento\Model\V1InvoiceInvoiceIdRefundPostBody $salesRefundInvoiceV1ExecutePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesRefundInvoiceV1ExecutePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRefundInvoiceV1ExecutePost(int $invoiceId, \Kiboko\Magento\Model\V1InvoiceInvoiceIdRefundPostBody $salesRefundInvoiceV1ExecutePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesRefundInvoiceV1ExecutePost($invoiceId, $salesRefundInvoiceV1ExecutePostBody), $fetch);
    }
    /**
     * Lists comments for a specified credit memo.
     *
     * @param int $id The credit memo ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesCreditmemoManagementV1GetCommentsListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataCreditmemoCommentSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoManagementV1GetCommentsListGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesCreditmemoManagementV1GetCommentsListGet($id), $fetch);
    }
    /**
     * Performs persist operations for a specified entity.
     *
     * @param string $id 
     * @param \Kiboko\Magento\Model\V1CreditmemoIdCommentsPostBody $salesCreditmemoCommentRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesCreditmemoCommentRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\SalesCreditmemoCommentRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataCreditmemoCommentInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoCommentRepositoryV1SavePost(string $id, \Kiboko\Magento\Model\V1CreditmemoIdCommentsPostBody $salesCreditmemoCommentRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesCreditmemoCommentRepositoryV1SavePost($id, $salesCreditmemoCommentRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Loads a specified credit memo.
     *
     * @param int $id The credit memo ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesCreditmemoRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataCreditmemoInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesCreditmemoRepositoryV1GetGet($id), $fetch);
    }
    /**
     * Cancels a specified credit memo.
     *
     * @param int $id The credit memo ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesCreditmemoManagementV1CancelPutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\SalesCreditmemoManagementV1CancelPutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoManagementV1CancelPut(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesCreditmemoManagementV1CancelPut($id), $fetch);
    }
    /**
     * Emails a user a specified credit memo.
     *
     * @param int $id The credit memo ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesCreditmemoManagementV1NotifyPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoManagementV1NotifyPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesCreditmemoManagementV1NotifyPost($id), $fetch);
    }
    /**
     * Prepare creditmemo to refund and save it.
     *
     * @param \Kiboko\Magento\Model\V1CreditmemoRefundPostBody $salesCreditmemoManagementV1RefundPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesCreditmemoManagementV1RefundPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataCreditmemoInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoManagementV1RefundPost(\Kiboko\Magento\Model\V1CreditmemoRefundPostBody $salesCreditmemoManagementV1RefundPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesCreditmemoManagementV1RefundPost($salesCreditmemoManagementV1RefundPostBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\SalesCreditmemoRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataCreditmemoSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesCreditmemoRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Performs persist operations for a specified credit memo.
     *
     * @param \Kiboko\Magento\Model\V1CreditmemoPostBody $salesCreditmemoRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesCreditmemoRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataCreditmemoInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesCreditmemoRepositoryV1SavePost(\Kiboko\Magento\Model\V1CreditmemoPostBody $salesCreditmemoRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesCreditmemoRepositoryV1SavePost($salesCreditmemoRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Create offline refund for order
     *
     * @param int $orderId 
     * @param \Kiboko\Magento\Model\V1OrderOrderIdRefundPostBody $salesRefundOrderV1ExecutePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesRefundOrderV1ExecutePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRefundOrderV1ExecutePost(int $orderId, \Kiboko\Magento\Model\V1OrderOrderIdRefundPostBody $salesRefundOrderV1ExecutePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesRefundOrderV1ExecutePost($orderId, $salesRefundOrderV1ExecutePostBody), $fetch);
    }
    /**
     * Loads a specified shipment.
     *
     * @param int $id The shipment ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesShipmentRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataShipmentInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesShipmentRepositoryV1GetGet($id), $fetch);
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
     * @throws \Kiboko\Magento\Exception\SalesShipmentRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataShipmentSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesShipmentRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Performs persist operations for a specified shipment.
     *
     * @param \Kiboko\Magento\Model\V1ShipmentPostBody $salesShipmentRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesShipmentRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataShipmentInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentRepositoryV1SavePost(\Kiboko\Magento\Model\V1ShipmentPostBody $salesShipmentRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesShipmentRepositoryV1SavePost($salesShipmentRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Lists comments for a specified shipment.
     *
     * @param int $id The shipment ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesShipmentManagementV1GetCommentsListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataShipmentCommentSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentManagementV1GetCommentsListGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesShipmentManagementV1GetCommentsListGet($id), $fetch);
    }
    /**
     * Performs persist operations for a specified shipment comment.
     *
     * @param string $id 
     * @param \Kiboko\Magento\Model\V1ShipmentIdCommentsPostBody $salesShipmentCommentRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesShipmentCommentRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\SalesShipmentCommentRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataShipmentCommentInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentCommentRepositoryV1SavePost(string $id, \Kiboko\Magento\Model\V1ShipmentIdCommentsPostBody $salesShipmentCommentRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesShipmentCommentRepositoryV1SavePost($id, $salesShipmentCommentRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Emails user a specified shipment.
     *
     * @param int $id The shipment ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesShipmentManagementV1NotifyPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentManagementV1NotifyPost(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesShipmentManagementV1NotifyPost($id), $fetch);
    }
    /**
     * Gets a specified shipment label.
     *
     * @param int $id The shipment label ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesShipmentManagementV1GetLabelGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentManagementV1GetLabelGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesShipmentManagementV1GetLabelGet($id), $fetch);
    }
    /**
     * Performs persist operations for a specified shipment track.
     *
     * @param \Kiboko\Magento\Model\V1ShipmentTrackPostBody $salesShipmentTrackRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesShipmentTrackRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\SalesShipmentTrackRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataShipmentTrackInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentTrackRepositoryV1SavePost(\Kiboko\Magento\Model\V1ShipmentTrackPostBody $salesShipmentTrackRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesShipmentTrackRepositoryV1SavePost($salesShipmentTrackRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Deletes a specified shipment track by ID.
     *
     * @param int $id The shipment track ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesShipmentTrackRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\SalesShipmentTrackRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipmentTrackRepositoryV1DeleteByIdDelete(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesShipmentTrackRepositoryV1DeleteByIdDelete($id), $fetch);
    }
    /**
     * Creates new Shipment for given Order.
     *
     * @param int $orderId 
     * @param \Kiboko\Magento\Model\V1OrderOrderIdShipPostBody $salesShipOrderV1ExecutePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesShipOrderV1ExecutePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesShipOrderV1ExecutePost(int $orderId, \Kiboko\Magento\Model\V1OrderOrderIdShipPostBody $salesShipOrderV1ExecutePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesShipOrderV1ExecutePost($orderId, $salesShipOrderV1ExecutePostBody), $fetch);
    }
    /**
     * Loads a specified transaction.
     *
     * @param int $id The transaction ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesTransactionRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataTransactionInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesTransactionRepositoryV1GetGet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesTransactionRepositoryV1GetGet($id), $fetch);
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
     * @throws \Kiboko\Magento\Exception\SalesTransactionRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesDataTransactionSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesTransactionRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesTransactionRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $orderId 
     * @param \Kiboko\Magento\Model\V1OrderOrderIdInvoicePostBody $salesInvoiceOrderV1ExecutePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesInvoiceOrderV1ExecutePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesInvoiceOrderV1ExecutePost(int $orderId, \Kiboko\Magento\Model\V1OrderOrderIdInvoicePostBody $salesInvoiceOrderV1ExecutePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesInvoiceOrderV1ExecutePost($orderId, $salesInvoiceOrderV1ExecutePostBody), $fetch);
    }
    /**
     * 
     *
     * @param string $productSku 
     * @param array $queryParameters {
     *     @var int $scopeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogInventoryStockRegistryV1GetStockItemBySkuGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogInventoryStockRegistryV1GetStockItemBySkuGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogInventoryDataStockItemInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogInventoryStockRegistryV1GetStockItemBySkuGet(string $productSku, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogInventoryStockRegistryV1GetStockItemBySkuGet($productSku, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $productSku 
     * @param string $itemId 
     * @param \Kiboko\Magento\Model\V1ProductsProductSkuStockItemsItemIdPutBody $catalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogInventoryStockRegistryV1UpdateStockItemBySkuPut(string $productSku, string $itemId, \Kiboko\Magento\Model\V1ProductsProductSkuStockItemsItemIdPutBody $catalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogInventoryStockRegistryV1UpdateStockItemBySkuPut($productSku, $itemId, $catalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\CatalogInventoryStockRegistryV1GetLowStockItemsGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogInventoryDataStockItemCollectionInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogInventoryStockRegistryV1GetLowStockItemsGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogInventoryStockRegistryV1GetLowStockItemsGet($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $productSku 
     * @param array $queryParameters {
     *     @var int $scopeId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CatalogInventoryStockRegistryV1GetStockStatusBySkuGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CatalogInventoryStockRegistryV1GetStockStatusBySkuGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogInventoryDataStockStatusInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function catalogInventoryStockRegistryV1GetStockStatusBySkuGet(string $productSku, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CatalogInventoryStockRegistryV1GetStockStatusBySkuGet($productSku, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdShippingInformationPostBody $checkoutGuestShippingInformationManagementV1SaveAddressInformationPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestShippingInformationManagementV1SaveAddressInformationPost(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdShippingInformationPostBody $checkoutGuestShippingInformationManagementV1SaveAddressInformationPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CheckoutGuestShippingInformationManagementV1SaveAddressInformationPost($cartId, $checkoutGuestShippingInformationManagementV1SaveAddressInformationPostBody), $fetch);
    }
    /**
     * 
     *
     * @param \Kiboko\Magento\Model\V1CartsMineShippingInformationPostBody $checkoutShippingInformationManagementV1SaveAddressInformationPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CheckoutShippingInformationManagementV1SaveAddressInformationPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutShippingInformationManagementV1SaveAddressInformationPost(\Kiboko\Magento\Model\V1CartsMineShippingInformationPostBody $checkoutShippingInformationManagementV1SaveAddressInformationPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CheckoutShippingInformationManagementV1SaveAddressInformationPost($checkoutShippingInformationManagementV1SaveAddressInformationPostBody), $fetch);
    }
    /**
     * 
     *
     * @param int $cartId 
     * @param \Kiboko\Magento\Model\V1CartsCartIdShippingInformationPostBody $checkoutShippingInformationManagementV1SaveAddressInformationPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CheckoutShippingInformationManagementV1SaveAddressInformationPostWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutShippingInformationManagementV1SaveAddressInformationPostWithCartId(int $cartId, \Kiboko\Magento\Model\V1CartsCartIdShippingInformationPostBody $checkoutShippingInformationManagementV1SaveAddressInformationPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CheckoutShippingInformationManagementV1SaveAddressInformationPostWithCartId($cartId, $checkoutShippingInformationManagementV1SaveAddressInformationPostBody), $fetch);
    }
    /**
     * Calculate quote totals based on address and shipping method.
     *
     * @param int $cartId 
     * @param \Kiboko\Magento\Model\V1CartsCartIdTotalsInformationPostBody $checkoutTotalsInformationManagementV1CalculatePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CheckoutTotalsInformationManagementV1CalculatePostWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataTotalsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutTotalsInformationManagementV1CalculatePostWithCartId(int $cartId, \Kiboko\Magento\Model\V1CartsCartIdTotalsInformationPostBody $checkoutTotalsInformationManagementV1CalculatePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CheckoutTotalsInformationManagementV1CalculatePostWithCartId($cartId, $checkoutTotalsInformationManagementV1CalculatePostBody), $fetch);
    }
    /**
     * Calculate quote totals based on address and shipping method.
     *
     * @param \Kiboko\Magento\Model\V1CartsMineTotalsInformationPostBody $checkoutTotalsInformationManagementV1CalculatePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CheckoutTotalsInformationManagementV1CalculatePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataTotalsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutTotalsInformationManagementV1CalculatePost(\Kiboko\Magento\Model\V1CartsMineTotalsInformationPostBody $checkoutTotalsInformationManagementV1CalculatePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CheckoutTotalsInformationManagementV1CalculatePost($checkoutTotalsInformationManagementV1CalculatePostBody), $fetch);
    }
    /**
     * Calculate quote totals based on address and shipping method.
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdTotalsInformationPostBody $checkoutGuestTotalsInformationManagementV1CalculatePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataTotalsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestTotalsInformationManagementV1CalculatePost(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdTotalsInformationPostBody $checkoutGuestTotalsInformationManagementV1CalculatePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CheckoutGuestTotalsInformationManagementV1CalculatePost($cartId, $checkoutGuestTotalsInformationManagementV1CalculatePostBody), $fetch);
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
    public function checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CheckoutGuestPaymentInformationManagementV1GetPaymentInformationGet($cartId), $fetch);
    }
    /**
     * Set payment information and place order for a specified cart.
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdPaymentInformationPostBody $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdPaymentInformationPostBody $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody), $fetch);
    }
    /**
     * Set payment information for a specified cart.
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdSetPaymentInformationPostBody $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdSetPaymentInformationPostBody $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CheckoutGuestPaymentInformationManagementV1SavePaymentInformationPost($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CheckoutPaymentInformationManagementV1GetPaymentInformationGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CheckoutDataPaymentDetailsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutPaymentInformationManagementV1GetPaymentInformationGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CheckoutPaymentInformationManagementV1GetPaymentInformationGet(), $fetch);
    }
    /**
     * Set payment information and place order for a specified cart.
     *
     * @param \Kiboko\Magento\Model\V1CartsMinePaymentInformationPostBody $checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost(\Kiboko\Magento\Model\V1CartsMinePaymentInformationPostBody $checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody), $fetch);
    }
    /**
     * Set payment information for a specified cart.
     *
     * @param \Kiboko\Magento\Model\V1CartsMineSetPaymentInformationPostBody $checkoutPaymentInformationManagementV1SavePaymentInformationPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\CheckoutPaymentInformationManagementV1SavePaymentInformationPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutPaymentInformationManagementV1SavePaymentInformationPost(\Kiboko\Magento\Model\V1CartsMineSetPaymentInformationPostBody $checkoutPaymentInformationManagementV1SavePaymentInformationPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CheckoutPaymentInformationManagementV1SavePaymentInformationPost($checkoutPaymentInformationManagementV1SavePaymentInformationPostBody), $fetch);
    }
    /**
     * Get all children for Configurable product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\ConfigurableProductLinkManagementV1GetChildrenGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductLinkManagementV1GetChildrenGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\ConfigurableProductLinkManagementV1GetChildrenGet($sku), $fetch);
    }
    /**
     * Remove configurable product option
     *
     * @param string $sku 
     * @param string $childSku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\ConfigurableProductLinkManagementV1RemoveChildDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\ConfigurableProductLinkManagementV1RemoveChildDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductLinkManagementV1RemoveChildDelete(string $sku, string $childSku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\ConfigurableProductLinkManagementV1RemoveChildDelete($sku, $childSku), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param \Kiboko\Magento\Model\V1ConfigurableProductsSkuChildPostBody $configurableProductLinkManagementV1AddChildPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\ConfigurableProductLinkManagementV1AddChildPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductLinkManagementV1AddChildPost(string $sku, \Kiboko\Magento\Model\V1ConfigurableProductsSkuChildPostBody $configurableProductLinkManagementV1AddChildPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\ConfigurableProductLinkManagementV1AddChildPost($sku, $configurableProductLinkManagementV1AddChildPostBody), $fetch);
    }
    /**
     * Generate variation based on same product
     *
     * @param \Kiboko\Magento\Model\V1ConfigurableProductsVariationPutBody $configurableProductConfigurableProductManagementV1GenerateVariationPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\ConfigurableProductConfigurableProductManagementV1GenerateVariationPutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataProductInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductConfigurableProductManagementV1GenerateVariationPut(\Kiboko\Magento\Model\V1ConfigurableProductsVariationPutBody $configurableProductConfigurableProductManagementV1GenerateVariationPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\ConfigurableProductConfigurableProductManagementV1GenerateVariationPut($configurableProductConfigurableProductManagementV1GenerateVariationPutBody), $fetch);
    }
    /**
     * Remove option from configurable product
     *
     * @param string $sku 
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\ConfigurableProductOptionRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\ConfigurableProductOptionRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1DeleteByIdDelete(string $sku, int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\ConfigurableProductOptionRepositoryV1DeleteByIdDelete($sku, $id), $fetch);
    }
    /**
     * Get option for configurable product
     *
     * @param string $sku 
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\ConfigurableProductOptionRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\ConfigurableProductOptionRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ConfigurableProductDataOptionInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1GetGet(string $sku, int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\ConfigurableProductOptionRepositoryV1GetGet($sku, $id), $fetch);
    }
    /**
     * Save option
     *
     * @param string $sku 
     * @param string $id 
     * @param \Kiboko\Magento\Model\V1ConfigurableProductsSkuOptionsIdPutBody $configurableProductOptionRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\ConfigurableProductOptionRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\ConfigurableProductOptionRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\ConfigurableProductOptionRepositoryV1SavePutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1SavePut(string $sku, string $id, \Kiboko\Magento\Model\V1ConfigurableProductsSkuOptionsIdPutBody $configurableProductOptionRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\ConfigurableProductOptionRepositoryV1SavePut($sku, $id, $configurableProductOptionRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Get all options for configurable product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\ConfigurableProductOptionRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\ConfigurableProductOptionRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ConfigurableProductDataOptionInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\ConfigurableProductOptionRepositoryV1GetListGet($sku), $fetch);
    }
    /**
     * Save option
     *
     * @param string $sku 
     * @param \Kiboko\Magento\Model\V1ConfigurableProductsSkuOptionsPostBody $configurableProductOptionRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\ConfigurableProductOptionRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\ConfigurableProductOptionRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\ConfigurableProductOptionRepositoryV1SavePostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function configurableProductOptionRepositoryV1SavePost(string $sku, \Kiboko\Magento\Model\V1ConfigurableProductsSkuOptionsPostBody $configurableProductOptionRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\ConfigurableProductOptionRepositoryV1SavePost($sku, $configurableProductOptionRepositoryV1SavePostBody), $fetch);
    }
    /**
     * List of links with associated samples
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DownloadableLinkRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\DownloadableDataLinkInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableLinkRepositoryV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DownloadableLinkRepositoryV1GetListGet($sku), $fetch);
    }
    /**
     * Update downloadable link of the given product (link type and its resources cannot be changed)
     *
     * @param string $sku 
     * @param \Kiboko\Magento\Model\V1ProductsSkuDownloadableLinksPostBody $downloadableLinkRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DownloadableLinkRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableLinkRepositoryV1SavePost(string $sku, \Kiboko\Magento\Model\V1ProductsSkuDownloadableLinksPostBody $downloadableLinkRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DownloadableLinkRepositoryV1SavePost($sku, $downloadableLinkRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Update downloadable link of the given product (link type and its resources cannot be changed)
     *
     * @param string $sku 
     * @param string $id 
     * @param \Kiboko\Magento\Model\V1ProductsSkuDownloadableLinksIdPutBody $downloadableLinkRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DownloadableLinkRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableLinkRepositoryV1SavePut(string $sku, string $id, \Kiboko\Magento\Model\V1ProductsSkuDownloadableLinksIdPutBody $downloadableLinkRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DownloadableLinkRepositoryV1SavePut($sku, $id, $downloadableLinkRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Delete downloadable link
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DownloadableLinkRepositoryV1DeleteDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableLinkRepositoryV1DeleteDelete(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DownloadableLinkRepositoryV1DeleteDelete($id), $fetch);
    }
    /**
     * List of samples for downloadable product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DownloadableSampleRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\DownloadableDataSampleInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableSampleRepositoryV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DownloadableSampleRepositoryV1GetListGet($sku), $fetch);
    }
    /**
     * Update downloadable sample of the given product
     *
     * @param string $sku 
     * @param \Kiboko\Magento\Model\V1ProductsSkuDownloadableLinksSamplesPostBody $downloadableSampleRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DownloadableSampleRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableSampleRepositoryV1SavePost(string $sku, \Kiboko\Magento\Model\V1ProductsSkuDownloadableLinksSamplesPostBody $downloadableSampleRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DownloadableSampleRepositoryV1SavePost($sku, $downloadableSampleRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Update downloadable sample of the given product
     *
     * @param string $sku 
     * @param string $id 
     * @param \Kiboko\Magento\Model\V1ProductsSkuDownloadableLinksSamplesIdPutBody $downloadableSampleRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DownloadableSampleRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableSampleRepositoryV1SavePut(string $sku, string $id, \Kiboko\Magento\Model\V1ProductsSkuDownloadableLinksSamplesIdPutBody $downloadableSampleRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DownloadableSampleRepositoryV1SavePut($sku, $id, $downloadableSampleRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Delete downloadable sample
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\DownloadableSampleRepositoryV1DeleteDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function downloadableSampleRepositoryV1DeleteDelete(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\DownloadableSampleRepositoryV1DeleteDelete($id), $fetch);
    }
    /**
     * Return the gift message for a specified order.
     *
     * @param int $cartId The shopping cart ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GiftMessageCartRepositoryV1GetGetWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageCartRepositoryV1GetGetWithCartId(int $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GiftMessageCartRepositoryV1GetGetWithCartId($cartId), $fetch);
    }
    /**
     * Set the gift message for an entire order.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1CartsCartIdGiftMessagePostBody $giftMessageCartRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GiftMessageCartRepositoryV1SavePostWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GiftMessageCartRepositoryV1SavePostWithCartIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageCartRepositoryV1SavePostWithCartId(int $cartId, \Kiboko\Magento\Model\V1CartsCartIdGiftMessagePostBody $giftMessageCartRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GiftMessageCartRepositoryV1SavePostWithCartId($cartId, $giftMessageCartRepositoryV1SavePostBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GiftMessageCartRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageCartRepositoryV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GiftMessageCartRepositoryV1GetGet(), $fetch);
    }
    /**
     * Set the gift message for an entire order.
     *
     * @param \Kiboko\Magento\Model\V1CartsMineGiftMessagePostBody $giftMessageCartRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GiftMessageCartRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GiftMessageCartRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageCartRepositoryV1SavePost(\Kiboko\Magento\Model\V1CartsMineGiftMessagePostBody $giftMessageCartRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GiftMessageCartRepositoryV1SavePost($giftMessageCartRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Return the gift message for a specified item in a specified shopping cart.
     *
     * @param int $cartId The shopping cart ID.
     * @param int $itemId The item ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GiftMessageItemRepositoryV1GetGetWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GiftMessageItemRepositoryV1GetGetWithCartIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageItemRepositoryV1GetGetWithCartId(int $cartId, int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GiftMessageItemRepositoryV1GetGetWithCartId($cartId, $itemId), $fetch);
    }
    /**
     * Set the gift message for a specified item in a specified shopping cart.
     *
     * @param int $cartId The cart ID.
     * @param int $itemId The item ID.
     * @param \Kiboko\Magento\Model\V1CartsCartIdGiftMessageItemIdPostBody $giftMessageItemRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GiftMessageItemRepositoryV1SavePostWithCartIdUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GiftMessageItemRepositoryV1SavePostWithCartIdBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageItemRepositoryV1SavePostWithCartId(int $cartId, int $itemId, \Kiboko\Magento\Model\V1CartsCartIdGiftMessageItemIdPostBody $giftMessageItemRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GiftMessageItemRepositoryV1SavePostWithCartId($cartId, $itemId, $giftMessageItemRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Return the gift message for a specified item in a specified shopping cart.
     *
     * @param int $itemId The item ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GiftMessageItemRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GiftMessageItemRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageItemRepositoryV1GetGet(int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GiftMessageItemRepositoryV1GetGet($itemId), $fetch);
    }
    /**
     * Set the gift message for a specified item in a specified shopping cart.
     *
     * @param int $itemId The item ID.
     * @param \Kiboko\Magento\Model\V1CartsMineGiftMessageItemIdPostBody $giftMessageItemRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GiftMessageItemRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\GiftMessageItemRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageItemRepositoryV1SavePost(int $itemId, \Kiboko\Magento\Model\V1CartsMineGiftMessageItemIdPostBody $giftMessageItemRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GiftMessageItemRepositoryV1SavePost($itemId, $giftMessageItemRepositoryV1SavePostBody), $fetch);
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
    public function giftMessageGuestCartRepositoryV1GetGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GiftMessageGuestCartRepositoryV1GetGet($cartId), $fetch);
    }
    /**
     * Set the gift message for an entire order.
     *
     * @param string $cartId The cart ID.
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdGiftMessagePostBody $giftMessageGuestCartRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GiftMessageGuestCartRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageGuestCartRepositoryV1SavePost(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdGiftMessagePostBody $giftMessageGuestCartRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GiftMessageGuestCartRepositoryV1SavePost($cartId, $giftMessageGuestCartRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Return the gift message for a specified item in a specified shopping cart.
     *
     * @param string $cartId The shopping cart ID.
     * @param int $itemId The item ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GiftMessageGuestItemRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\GiftMessageDataMessageInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageGuestItemRepositoryV1GetGet(string $cartId, int $itemId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GiftMessageGuestItemRepositoryV1GetGet($cartId, $itemId), $fetch);
    }
    /**
     * Set the gift message for a specified item in a specified shopping cart.
     *
     * @param string $cartId The cart ID.
     * @param int $itemId The item ID.
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdGiftMessageItemIdPostBody $giftMessageGuestItemRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\GiftMessageGuestItemRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function giftMessageGuestItemRepositoryV1SavePost(string $cartId, int $itemId, \Kiboko\Magento\Model\V1GuestCartsCartIdGiftMessageItemIdPostBody $giftMessageGuestItemRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\GiftMessageGuestItemRepositoryV1SavePost($cartId, $itemId, $giftMessageGuestItemRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Add child product to specified Bundle option by product sku
     *
     * @param string $sku 
     * @param int $optionId 
     * @param \Kiboko\Magento\Model\V1BundleProductsSkuLinksOptionIdPostBody $bundleProductLinkManagementV1AddChildByProductSkuPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\BundleProductLinkManagementV1AddChildByProductSkuPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\BundleProductLinkManagementV1AddChildByProductSkuPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductLinkManagementV1AddChildByProductSkuPost(string $sku, int $optionId, \Kiboko\Magento\Model\V1BundleProductsSkuLinksOptionIdPostBody $bundleProductLinkManagementV1AddChildByProductSkuPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\BundleProductLinkManagementV1AddChildByProductSkuPost($sku, $optionId, $bundleProductLinkManagementV1AddChildByProductSkuPostBody), $fetch);
    }
    /**
     * 
     *
     * @param string $sku 
     * @param string $id 
     * @param \Kiboko\Magento\Model\V1BundleProductsSkuLinksIdPutBody $bundleProductLinkManagementV1SaveChildPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\BundleProductLinkManagementV1SaveChildPutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\BundleProductLinkManagementV1SaveChildPutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductLinkManagementV1SaveChildPut(string $sku, string $id, \Kiboko\Magento\Model\V1BundleProductsSkuLinksIdPutBody $bundleProductLinkManagementV1SaveChildPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\BundleProductLinkManagementV1SaveChildPut($sku, $id, $bundleProductLinkManagementV1SaveChildPutBody), $fetch);
    }
    /**
     * Get all children for Bundle product
     *
     * @param string $productSku 
     * @param array $queryParameters {
     *     @var int $optionId 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\BundleProductLinkManagementV1GetChildrenGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\BundleProductLinkManagementV1GetChildrenGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\BundleDataLinkInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductLinkManagementV1GetChildrenGet(string $productSku, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\BundleProductLinkManagementV1GetChildrenGet($productSku, $queryParameters), $fetch);
    }
    /**
     * Remove product from Bundle product option
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $childSku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\BundleProductLinkManagementV1RemoveChildDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\BundleProductLinkManagementV1RemoveChildDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductLinkManagementV1RemoveChildDelete(string $sku, int $optionId, string $childSku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\BundleProductLinkManagementV1RemoveChildDelete($sku, $optionId, $childSku), $fetch);
    }
    /**
     * Get all options for bundle product
     *
     * @param string $sku 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\BundleProductOptionRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\BundleProductOptionRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\BundleDataOptionInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionRepositoryV1GetListGet(string $sku, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\BundleProductOptionRepositoryV1GetListGet($sku), $fetch);
    }
    /**
     * Remove bundle option
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\BundleProductOptionRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\BundleProductOptionRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionRepositoryV1DeleteByIdDelete(string $sku, int $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\BundleProductOptionRepositoryV1DeleteByIdDelete($sku, $optionId), $fetch);
    }
    /**
     * Get option for bundle product
     *
     * @param string $sku 
     * @param int $optionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\BundleProductOptionRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\BundleProductOptionRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\BundleDataOptionInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionRepositoryV1GetGet(string $sku, int $optionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\BundleProductOptionRepositoryV1GetGet($sku, $optionId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\BundleProductOptionTypeListV1GetItemsGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\BundleDataOptionTypeInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionTypeListV1GetItemsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\BundleProductOptionTypeListV1GetItemsGet(), $fetch);
    }
    /**
     * Add new option for bundle product
     *
     * @param \Kiboko\Magento\Model\V1BundleProductsOptionsAddPostBody $bundleProductOptionManagementV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\BundleProductOptionManagementV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\BundleProductOptionManagementV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionManagementV1SavePost(\Kiboko\Magento\Model\V1BundleProductsOptionsAddPostBody $bundleProductOptionManagementV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\BundleProductOptionManagementV1SavePost($bundleProductOptionManagementV1SavePostBody), $fetch);
    }
    /**
     * Add new option for bundle product
     *
     * @param string $optionId 
     * @param \Kiboko\Magento\Model\V1BundleProductsOptionsOptionIdPutBody $bundleProductOptionManagementV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\BundleProductOptionManagementV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\BundleProductOptionManagementV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function bundleProductOptionManagementV1SavePut(string $optionId, \Kiboko\Magento\Model\V1BundleProductsOptionsOptionIdPutBody $bundleProductOptionManagementV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\BundleProductOptionManagementV1SavePut($optionId, $bundleProductOptionManagementV1SavePutBody), $fetch);
    }
    /**
     * Create access token for admin given the admin credentials.
     *
     * @param \Kiboko\Magento\Model\V1IntegrationAdminTokenPostBody $integrationAdminTokenServiceV1CreateAdminAccessTokenPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostBadRequestException
     * @throws \Kiboko\Magento\Exception\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function integrationAdminTokenServiceV1CreateAdminAccessTokenPost(\Kiboko\Magento\Model\V1IntegrationAdminTokenPostBody $integrationAdminTokenServiceV1CreateAdminAccessTokenPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPost($integrationAdminTokenServiceV1CreateAdminAccessTokenPostBody), $fetch);
    }
    /**
     * Create access token for admin given the customer credentials.
     *
     * @param \Kiboko\Magento\Model\V1IntegrationCustomerTokenPostBody $integrationCustomerTokenServiceV1CreateCustomerAccessTokenPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\IntegrationCustomerTokenServiceV1CreateCustomerAccessTokenPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function integrationCustomerTokenServiceV1CreateCustomerAccessTokenPost(\Kiboko\Magento\Model\V1IntegrationCustomerTokenPostBody $integrationCustomerTokenServiceV1CreateCustomerAccessTokenPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\IntegrationCustomerTokenServiceV1CreateCustomerAccessTokenPost($integrationCustomerTokenServiceV1CreateCustomerAccessTokenPostBody), $fetch);
    }
    /**
     * Delete rule by ID.
     *
     * @param int $ruleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesRuleRuleRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\SalesRuleRuleRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\SalesRuleRuleRepositoryV1DeleteByIdDeleteInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1DeleteByIdDelete(int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesRuleRuleRepositoryV1DeleteByIdDelete($ruleId), $fetch);
    }
    /**
     * Get rule by ID.
     *
     * @param int $ruleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesRuleRuleRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\SalesRuleRuleRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\Exception\SalesRuleRuleRepositoryV1GetByIdGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesRuleDataRuleInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1GetByIdGet(int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesRuleRuleRepositoryV1GetByIdGet($ruleId), $fetch);
    }
    /**
     * Save sales rule.
     *
     * @param string $ruleId 
     * @param \Kiboko\Magento\Model\V1SalesRulesRuleIdPutBody $salesRuleRuleRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesRuleRuleRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\SalesRuleRuleRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\SalesRuleRuleRepositoryV1SavePutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesRuleDataRuleInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1SavePut(string $ruleId, \Kiboko\Magento\Model\V1SalesRulesRuleIdPutBody $salesRuleRuleRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesRuleRuleRepositoryV1SavePut($ruleId, $salesRuleRuleRepositoryV1SavePutBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\SalesRuleRuleRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\SalesRuleRuleRepositoryV1GetListGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesRuleDataRuleSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesRuleRuleRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save sales rule.
     *
     * @param \Kiboko\Magento\Model\V1SalesRulesPostBody $salesRuleRuleRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesRuleRuleRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\SalesRuleRuleRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\SalesRuleRuleRepositoryV1SavePostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesRuleDataRuleInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleRuleRepositoryV1SavePost(\Kiboko\Magento\Model\V1SalesRulesPostBody $salesRuleRuleRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesRuleRuleRepositoryV1SavePost($salesRuleRuleRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Delete coupon by coupon id.
     *
     * @param int $couponId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesRuleCouponRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\SalesRuleCouponRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\SalesRuleCouponRepositoryV1DeleteByIdDeleteInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1DeleteByIdDelete(int $couponId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesRuleCouponRepositoryV1DeleteByIdDelete($couponId), $fetch);
    }
    /**
     * Get coupon by coupon id.
     *
     * @param int $couponId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesRuleCouponRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\SalesRuleCouponRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\Exception\SalesRuleCouponRepositoryV1GetByIdGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesRuleDataCouponInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1GetByIdGet(int $couponId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesRuleCouponRepositoryV1GetByIdGet($couponId), $fetch);
    }
    /**
     * Save a coupon.
     *
     * @param string $couponId 
     * @param \Kiboko\Magento\Model\V1CouponsCouponIdPutBody $salesRuleCouponRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesRuleCouponRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\SalesRuleCouponRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\SalesRuleCouponRepositoryV1SavePutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesRuleDataCouponInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1SavePut(string $couponId, \Kiboko\Magento\Model\V1CouponsCouponIdPutBody $salesRuleCouponRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesRuleCouponRepositoryV1SavePut($couponId, $salesRuleCouponRepositoryV1SavePutBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\SalesRuleCouponRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\SalesRuleCouponRepositoryV1GetListGetInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesRuleDataCouponSearchResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesRuleCouponRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save a coupon.
     *
     * @param \Kiboko\Magento\Model\V1CouponsPostBody $salesRuleCouponRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesRuleCouponRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\SalesRuleCouponRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\SalesRuleCouponRepositoryV1SavePostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesRuleDataCouponInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponRepositoryV1SavePost(\Kiboko\Magento\Model\V1CouponsPostBody $salesRuleCouponRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesRuleCouponRepositoryV1SavePost($salesRuleCouponRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Generate coupon for a rule
     *
     * @param \Kiboko\Magento\Model\V1CouponsGeneratePostBody $salesRuleCouponManagementV1GeneratePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesRuleCouponManagementV1GeneratePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\SalesRuleCouponManagementV1GeneratePostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponManagementV1GeneratePost(\Kiboko\Magento\Model\V1CouponsGeneratePostBody $salesRuleCouponManagementV1GeneratePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesRuleCouponManagementV1GeneratePost($salesRuleCouponManagementV1GeneratePostBody), $fetch);
    }
    /**
     * Delete coupon by coupon ids.
     *
     * @param \Kiboko\Magento\Model\V1CouponsDeleteByIdsPostBody $salesRuleCouponManagementV1DeleteByIdsPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesRuleCouponManagementV1DeleteByIdsPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\SalesRuleCouponManagementV1DeleteByIdsPostBadRequestException
     * @throws \Kiboko\Magento\Exception\SalesRuleCouponManagementV1DeleteByIdsPostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesRuleDataCouponMassDeleteResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponManagementV1DeleteByIdsPost(\Kiboko\Magento\Model\V1CouponsDeleteByIdsPostBody $salesRuleCouponManagementV1DeleteByIdsPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesRuleCouponManagementV1DeleteByIdsPost($salesRuleCouponManagementV1DeleteByIdsPostBody), $fetch);
    }
    /**
     * Delete coupon by coupon codes.
     *
     * @param \Kiboko\Magento\Model\V1CouponsDeleteByCodesPostBody $salesRuleCouponManagementV1DeleteByCodesPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\SalesRuleCouponManagementV1DeleteByCodesPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\SalesRuleCouponManagementV1DeleteByCodesPostBadRequestException
     * @throws \Kiboko\Magento\Exception\SalesRuleCouponManagementV1DeleteByCodesPostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\SalesRuleDataCouponMassDeleteResultInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function salesRuleCouponManagementV1DeleteByCodesPost(\Kiboko\Magento\Model\V1CouponsDeleteByCodesPostBody $salesRuleCouponManagementV1DeleteByCodesPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\SalesRuleCouponManagementV1DeleteByCodesPost($salesRuleCouponManagementV1DeleteByCodesPostBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\AnalyticsLinkProviderV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\AnalyticsDataLinkInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function analyticsLinkProviderV1GetGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\AnalyticsLinkProviderV1GetGet(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\CheckoutAgreementsCheckoutAgreementsRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CheckoutAgreementsDataAgreementInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function checkoutAgreementsCheckoutAgreementsRepositoryV1GetListGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\CheckoutAgreementsCheckoutAgreementsRepositoryV1GetListGet(), $fetch);
    }
    /**
     * Create or update tax rate
     *
     * @param \Kiboko\Magento\Model\V1TaxRatesPostBody $taxTaxRateRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TaxTaxRateRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TaxTaxRateRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\TaxTaxRateRepositoryV1SavePostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TaxDataTaxRateInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1SavePost(\Kiboko\Magento\Model\V1TaxRatesPostBody $taxTaxRateRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TaxTaxRateRepositoryV1SavePost($taxTaxRateRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Create or update tax rate
     *
     * @param \Kiboko\Magento\Model\V1TaxRatesPutBody $taxTaxRateRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TaxTaxRateRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TaxTaxRateRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\TaxTaxRateRepositoryV1SavePutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TaxDataTaxRateInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1SavePut(\Kiboko\Magento\Model\V1TaxRatesPutBody $taxTaxRateRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TaxTaxRateRepositoryV1SavePut($taxTaxRateRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Delete tax rate
     *
     * @param int $rateId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TaxTaxRateRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TaxTaxRateRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\TaxTaxRateRepositoryV1DeleteByIdDeleteInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1DeleteByIdDelete(int $rateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TaxTaxRateRepositoryV1DeleteByIdDelete($rateId), $fetch);
    }
    /**
     * Get tax rate
     *
     * @param int $rateId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TaxTaxRateRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TaxTaxRateRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TaxDataTaxRateInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1GetGet(int $rateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TaxTaxRateRepositoryV1GetGet($rateId), $fetch);
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
     * @throws \Kiboko\Magento\Exception\TaxTaxRateRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TaxTaxRateRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TaxDataTaxRateSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRateRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TaxTaxRateRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Save TaxRule
     *
     * @param \Kiboko\Magento\Model\V1TaxRulesPostBody $taxTaxRuleRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TaxTaxRuleRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TaxTaxRuleRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\TaxTaxRuleRepositoryV1SavePostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TaxDataTaxRuleInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1SavePost(\Kiboko\Magento\Model\V1TaxRulesPostBody $taxTaxRuleRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TaxTaxRuleRepositoryV1SavePost($taxTaxRuleRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Save TaxRule
     *
     * @param \Kiboko\Magento\Model\V1TaxRulesPutBody $taxTaxRuleRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TaxTaxRuleRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TaxTaxRuleRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\TaxTaxRuleRepositoryV1SavePutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TaxDataTaxRuleInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1SavePut(\Kiboko\Magento\Model\V1TaxRulesPutBody $taxTaxRuleRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TaxTaxRuleRepositoryV1SavePut($taxTaxRuleRepositoryV1SavePutBody), $fetch);
    }
    /**
     * Delete TaxRule
     *
     * @param int $ruleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TaxTaxRuleRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TaxTaxRuleRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\TaxTaxRuleRepositoryV1DeleteByIdDeleteInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1DeleteByIdDelete(int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TaxTaxRuleRepositoryV1DeleteByIdDelete($ruleId), $fetch);
    }
    /**
     * Get TaxRule
     *
     * @param int $ruleId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TaxTaxRuleRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TaxDataTaxRuleInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1GetGet(int $ruleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TaxTaxRuleRepositoryV1GetGet($ruleId), $fetch);
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
     * @throws \Kiboko\Magento\Exception\TaxTaxRuleRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TaxTaxRuleRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TaxDataTaxRuleSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxRuleRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TaxTaxRuleRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * Create a Tax Class
     *
     * @param \Kiboko\Magento\Model\V1TaxClassesPostBody $taxTaxClassRepositoryV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TaxTaxClassRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TaxTaxClassRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\Exception\TaxTaxClassRepositoryV1SavePostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1SavePost(\Kiboko\Magento\Model\V1TaxClassesPostBody $taxTaxClassRepositoryV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TaxTaxClassRepositoryV1SavePost($taxTaxClassRepositoryV1SavePostBody), $fetch);
    }
    /**
     * Delete a tax class with the given tax class id.
     *
     * @param int $taxClassId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TaxTaxClassRepositoryV1DeleteByIdDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TaxTaxClassRepositoryV1DeleteByIdDeleteBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1DeleteByIdDelete(int $taxClassId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TaxTaxClassRepositoryV1DeleteByIdDelete($taxClassId), $fetch);
    }
    /**
     * Get a tax class with the given tax class id.
     *
     * @param int $taxClassId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TaxTaxClassRepositoryV1GetGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TaxTaxClassRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TaxDataTaxClassInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1GetGet(int $taxClassId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TaxTaxClassRepositoryV1GetGet($taxClassId), $fetch);
    }
    /**
     * Create a Tax Class
     *
     * @param string $classId 
     * @param \Kiboko\Magento\Model\V1TaxClassesClassIdPutBody $taxTaxClassRepositoryV1SavePutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TaxTaxClassRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TaxTaxClassRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\Exception\TaxTaxClassRepositoryV1SavePutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1SavePut(string $classId, \Kiboko\Magento\Model\V1TaxClassesClassIdPutBody $taxTaxClassRepositoryV1SavePutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TaxTaxClassRepositoryV1SavePut($classId, $taxTaxClassRepositoryV1SavePutBody), $fetch);
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
     * @throws \Kiboko\Magento\Exception\TaxTaxClassRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TaxTaxClassRepositoryV1GetListGetBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TaxDataTaxClassSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function taxTaxClassRepositoryV1GetListGet(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TaxTaxClassRepositoryV1GetListGet($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $amazonOrderReferenceId 
     * @param \Kiboko\Magento\Model\V1AmazonShippingAddressAmazonOrderReferenceIdPutBody $amazonPaymentAddressManagementV1GetShippingAddressPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function amazonPaymentAddressManagementV1GetShippingAddressPut(string $amazonOrderReferenceId, \Kiboko\Magento\Model\V1AmazonShippingAddressAmazonOrderReferenceIdPutBody $amazonPaymentAddressManagementV1GetShippingAddressPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\AmazonPaymentAddressManagementV1GetShippingAddressPut($amazonOrderReferenceId, $amazonPaymentAddressManagementV1GetShippingAddressPutBody), $fetch);
    }
    /**
     * 
     *
     * @param string $amazonOrderReferenceId 
     * @param \Kiboko\Magento\Model\V1AmazonBillingAddressAmazonOrderReferenceIdPutBody $amazonPaymentAddressManagementV1GetBillingAddressPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function amazonPaymentAddressManagementV1GetBillingAddressPut(string $amazonOrderReferenceId, \Kiboko\Magento\Model\V1AmazonBillingAddressAmazonOrderReferenceIdPutBody $amazonPaymentAddressManagementV1GetBillingAddressPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\AmazonPaymentAddressManagementV1GetBillingAddressPut($amazonOrderReferenceId, $amazonPaymentAddressManagementV1GetBillingAddressPutBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function amazonPaymentOrderInformationManagementV1RemoveOrderReferenceDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\AmazonPaymentOrderInformationManagementV1RemoveOrderReferenceDelete(), $fetch);
    }
    /**
     * Handle selected delivery option.
     *
     * @param \Kiboko\Magento\Model\V1CartsMineDeliveryOptionPostBody $temandoShippingQuoteCartDeliveryOptionManagementV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TemandoShippingQuoteCartDeliveryOptionManagementV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TemandoShippingQuoteCartDeliveryOptionManagementV1SavePostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingQuoteCartDeliveryOptionManagementV1SavePost(\Kiboko\Magento\Model\V1CartsMineDeliveryOptionPostBody $temandoShippingQuoteCartDeliveryOptionManagementV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TemandoShippingQuoteCartDeliveryOptionManagementV1SavePost($temandoShippingQuoteCartDeliveryOptionManagementV1SavePostBody), $fetch);
    }
    /**
     * Handle selected delivery option.
     *
     * @param string $cartId The shopping cart ID.
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdDeliveryOptionPostBody $temandoShippingQuoteGuestCartDeliveryOptionManagementV1SavePostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TemandoShippingQuoteGuestCartDeliveryOptionManagementV1SavePostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingQuoteGuestCartDeliveryOptionManagementV1SavePost(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdDeliveryOptionPostBody $temandoShippingQuoteGuestCartDeliveryOptionManagementV1SavePostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TemandoShippingQuoteGuestCartDeliveryOptionManagementV1SavePost($cartId, $temandoShippingQuoteGuestCartDeliveryOptionManagementV1SavePostBody), $fetch);
    }
    /**
     * Assign platform shipment IDs to a core RMA entity.
     *
     * @param int $rmaId 
     * @param \Kiboko\Magento\Model\V1TemandoRmaRmaIdShipmentsPutBody $temandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPut(int $rmaId, \Kiboko\Magento\Model\V1TemandoRmaRmaIdShipmentsPutBody $temandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPut($rmaId, $temandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutBody), $fetch);
    }
    /**
     * 
     *
     * @param string $cartId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1DeleteSearchRequestDeleteInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointGuestCartCollectionPointManagementV1DeleteSearchRequestDelete(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1DeleteSearchRequestDelete($cartId), $fetch);
    }
    /**
     * 
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdCollectionPointSearchRequestPutBody $temandoShippingCollectionPointGuestCartCollectionPointManagementV1SaveSearchRequestPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1SaveSearchRequestPutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TemandoShippingDataCollectionPointSearchRequestInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointGuestCartCollectionPointManagementV1SaveSearchRequestPut(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdCollectionPointSearchRequestPutBody $temandoShippingCollectionPointGuestCartCollectionPointManagementV1SaveSearchRequestPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1SaveSearchRequestPut($cartId, $temandoShippingCollectionPointGuestCartCollectionPointManagementV1SaveSearchRequestPutBody), $fetch);
    }
    /**
     * 
     *
     * @param string $cartId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TemandoShippingDataCollectionPointQuoteCollectionPointInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointGuestCartCollectionPointManagementV1GetCollectionPointsGet(string $cartId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1GetCollectionPointsGet($cartId), $fetch);
    }
    /**
     * 
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdCollectionPointSelectPostBody $temandoShippingCollectionPointGuestCartCollectionPointManagementV1SelectCollectionPointPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1SelectCollectionPointPostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointGuestCartCollectionPointManagementV1SelectCollectionPointPost(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdCollectionPointSelectPostBody $temandoShippingCollectionPointGuestCartCollectionPointManagementV1SelectCollectionPointPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TemandoShippingCollectionPointGuestCartCollectionPointManagementV1SelectCollectionPointPost($cartId, $temandoShippingCollectionPointGuestCartCollectionPointManagementV1SelectCollectionPointPostBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1DeleteSearchRequestDeleteUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1DeleteSearchRequestDeleteInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointCartCollectionPointManagementV1DeleteSearchRequestDelete(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TemandoShippingCollectionPointCartCollectionPointManagementV1DeleteSearchRequestDelete(), $fetch);
    }
    /**
     * 
     *
     * @param \Kiboko\Magento\Model\V1CartsMineCollectionPointSearchRequestPutBody $temandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPutBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPutInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TemandoShippingDataCollectionPointSearchRequestInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPut(\Kiboko\Magento\Model\V1CartsMineCollectionPointSearchRequestPutBody $temandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPutBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TemandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPut($temandoShippingCollectionPointCartCollectionPointManagementV1SaveSearchRequestPutBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1GetCollectionPointsGetUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\TemandoShippingDataCollectionPointQuoteCollectionPointInterface[]|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointCartCollectionPointManagementV1GetCollectionPointsGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TemandoShippingCollectionPointCartCollectionPointManagementV1GetCollectionPointsGet(), $fetch);
    }
    /**
     * 
     *
     * @param \Kiboko\Magento\Model\V1CartsMineCollectionPointSelectPostBody $temandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TemandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPostInternalServerErrorException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPost(\Kiboko\Magento\Model\V1CartsMineCollectionPointSelectPostBody $temandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TemandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPost($temandoShippingCollectionPointCartCollectionPointManagementV1SelectCollectionPointPostBody), $fetch);
    }
    /**
     * 
     *
     * @param string $cartId 
     * @param \Kiboko\Magento\Model\V1GuestCartsCartIdCheckoutFieldsPostBody $temandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TemandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPost(string $cartId, \Kiboko\Magento\Model\V1GuestCartsCartIdCheckoutFieldsPostBody $temandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TemandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPost($cartId, $temandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBody), $fetch);
    }
    /**
     * 
     *
     * @param \Kiboko\Magento\Model\V1CartsMineCheckoutFieldsPostBody $temandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\TemandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\TemandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function temandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPost(\Kiboko\Magento\Model\V1CartsMineCheckoutFieldsPostBody $temandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\TemandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPost($temandoShippingQuoteCartCheckoutFieldManagementV1SaveCheckoutFieldsPostBody), $fetch);
    }
    /**
     * 
     *
     * @param \Kiboko\Magento\Model\V1VertexAddressValidationVertexAddressPostBody $vertexAddressValidationAddressManagementV1GetValidAddressPostBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\QuoteDataAddressInterface|\Kiboko\Magento\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function vertexAddressValidationAddressManagementV1GetValidAddressPost(\Kiboko\Magento\Model\V1VertexAddressValidationVertexAddressPostBody $vertexAddressValidationAddressManagementV1GetValidAddressPostBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Kiboko\Magento\Endpoint\VertexAddressValidationAddressManagementV1GetValidAddressPost($vertexAddressValidationAddressManagementV1GetValidAddressPostBody), $fetch);
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