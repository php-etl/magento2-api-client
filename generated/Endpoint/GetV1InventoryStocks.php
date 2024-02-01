<?php

namespace Kiboko\Magento\Endpoint;

class GetV1InventoryStocks extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Find Stocks by given SearchCriteria SearchCriteria is not required because load all stocks is useful case
     *
     * @param array $queryParameters {
     *     @var string $searchCriteria[filterGroups][0][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][0][filters][1][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][1][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][1][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][0][filters][2][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][2][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][2][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][0][filters][3][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][3][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][3][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][0][filters][4][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][4][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][4][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][0][filters][5][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][5][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][5][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][0][filters][6][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][6][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][6][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][0][filters][7][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][7][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][7][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][0][filters][8][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][8][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][8][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][0][filters][9][field] Field
     *     @var string $searchCriteria[filterGroups][0][filters][9][value] Value
     *     @var string $searchCriteria[filterGroups][0][filters][9][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][1][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][1][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][1][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][1][filters][1][field] Field
     *     @var string $searchCriteria[filterGroups][1][filters][1][value] Value
     *     @var string $searchCriteria[filterGroups][1][filters][1][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][1][filters][2][field] Field
     *     @var string $searchCriteria[filterGroups][1][filters][2][value] Value
     *     @var string $searchCriteria[filterGroups][1][filters][2][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][1][filters][3][field] Field
     *     @var string $searchCriteria[filterGroups][1][filters][3][value] Value
     *     @var string $searchCriteria[filterGroups][1][filters][3][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][1][filters][4][field] Field
     *     @var string $searchCriteria[filterGroups][1][filters][4][value] Value
     *     @var string $searchCriteria[filterGroups][1][filters][4][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][1][filters][5][field] Field
     *     @var string $searchCriteria[filterGroups][1][filters][5][value] Value
     *     @var string $searchCriteria[filterGroups][1][filters][5][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][1][filters][6][field] Field
     *     @var string $searchCriteria[filterGroups][1][filters][6][value] Value
     *     @var string $searchCriteria[filterGroups][1][filters][6][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][1][filters][7][field] Field
     *     @var string $searchCriteria[filterGroups][1][filters][7][value] Value
     *     @var string $searchCriteria[filterGroups][1][filters][7][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][1][filters][8][field] Field
     *     @var string $searchCriteria[filterGroups][1][filters][8][value] Value
     *     @var string $searchCriteria[filterGroups][1][filters][8][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][1][filters][9][field] Field
     *     @var string $searchCriteria[filterGroups][1][filters][9][value] Value
     *     @var string $searchCriteria[filterGroups][1][filters][9][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][2][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][2][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][2][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][2][filters][1][field] Field
     *     @var string $searchCriteria[filterGroups][2][filters][1][value] Value
     *     @var string $searchCriteria[filterGroups][2][filters][1][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][2][filters][2][field] Field
     *     @var string $searchCriteria[filterGroups][2][filters][2][value] Value
     *     @var string $searchCriteria[filterGroups][2][filters][2][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][2][filters][3][field] Field
     *     @var string $searchCriteria[filterGroups][2][filters][3][value] Value
     *     @var string $searchCriteria[filterGroups][2][filters][3][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][2][filters][4][field] Field
     *     @var string $searchCriteria[filterGroups][2][filters][4][value] Value
     *     @var string $searchCriteria[filterGroups][2][filters][4][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][2][filters][5][field] Field
     *     @var string $searchCriteria[filterGroups][2][filters][5][value] Value
     *     @var string $searchCriteria[filterGroups][2][filters][5][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][2][filters][6][field] Field
     *     @var string $searchCriteria[filterGroups][2][filters][6][value] Value
     *     @var string $searchCriteria[filterGroups][2][filters][6][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][2][filters][7][field] Field
     *     @var string $searchCriteria[filterGroups][2][filters][7][value] Value
     *     @var string $searchCriteria[filterGroups][2][filters][7][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][2][filters][8][field] Field
     *     @var string $searchCriteria[filterGroups][2][filters][8][value] Value
     *     @var string $searchCriteria[filterGroups][2][filters][8][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][2][filters][9][field] Field
     *     @var string $searchCriteria[filterGroups][2][filters][9][value] Value
     *     @var string $searchCriteria[filterGroups][2][filters][9][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][3][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][3][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][3][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][3][filters][1][field] Field
     *     @var string $searchCriteria[filterGroups][3][filters][1][value] Value
     *     @var string $searchCriteria[filterGroups][3][filters][1][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][3][filters][2][field] Field
     *     @var string $searchCriteria[filterGroups][3][filters][2][value] Value
     *     @var string $searchCriteria[filterGroups][3][filters][2][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][3][filters][3][field] Field
     *     @var string $searchCriteria[filterGroups][3][filters][3][value] Value
     *     @var string $searchCriteria[filterGroups][3][filters][3][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][3][filters][4][field] Field
     *     @var string $searchCriteria[filterGroups][3][filters][4][value] Value
     *     @var string $searchCriteria[filterGroups][3][filters][4][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][3][filters][5][field] Field
     *     @var string $searchCriteria[filterGroups][3][filters][5][value] Value
     *     @var string $searchCriteria[filterGroups][3][filters][5][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][3][filters][6][field] Field
     *     @var string $searchCriteria[filterGroups][3][filters][6][value] Value
     *     @var string $searchCriteria[filterGroups][3][filters][6][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][3][filters][7][field] Field
     *     @var string $searchCriteria[filterGroups][3][filters][7][value] Value
     *     @var string $searchCriteria[filterGroups][3][filters][7][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][3][filters][8][field] Field
     *     @var string $searchCriteria[filterGroups][3][filters][8][value] Value
     *     @var string $searchCriteria[filterGroups][3][filters][8][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][3][filters][9][field] Field
     *     @var string $searchCriteria[filterGroups][3][filters][9][value] Value
     *     @var string $searchCriteria[filterGroups][3][filters][9][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][4][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][4][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][4][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][4][filters][1][field] Field
     *     @var string $searchCriteria[filterGroups][4][filters][1][value] Value
     *     @var string $searchCriteria[filterGroups][4][filters][1][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][4][filters][2][field] Field
     *     @var string $searchCriteria[filterGroups][4][filters][2][value] Value
     *     @var string $searchCriteria[filterGroups][4][filters][2][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][4][filters][3][field] Field
     *     @var string $searchCriteria[filterGroups][4][filters][3][value] Value
     *     @var string $searchCriteria[filterGroups][4][filters][3][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][4][filters][4][field] Field
     *     @var string $searchCriteria[filterGroups][4][filters][4][value] Value
     *     @var string $searchCriteria[filterGroups][4][filters][4][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][4][filters][5][field] Field
     *     @var string $searchCriteria[filterGroups][4][filters][5][value] Value
     *     @var string $searchCriteria[filterGroups][4][filters][5][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][4][filters][6][field] Field
     *     @var string $searchCriteria[filterGroups][4][filters][6][value] Value
     *     @var string $searchCriteria[filterGroups][4][filters][6][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][4][filters][7][field] Field
     *     @var string $searchCriteria[filterGroups][4][filters][7][value] Value
     *     @var string $searchCriteria[filterGroups][4][filters][7][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][4][filters][8][field] Field
     *     @var string $searchCriteria[filterGroups][4][filters][8][value] Value
     *     @var string $searchCriteria[filterGroups][4][filters][8][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][4][filters][9][field] Field
     *     @var string $searchCriteria[filterGroups][4][filters][9][value] Value
     *     @var string $searchCriteria[filterGroups][4][filters][9][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][5][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][5][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][5][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][5][filters][1][field] Field
     *     @var string $searchCriteria[filterGroups][5][filters][1][value] Value
     *     @var string $searchCriteria[filterGroups][5][filters][1][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][5][filters][2][field] Field
     *     @var string $searchCriteria[filterGroups][5][filters][2][value] Value
     *     @var string $searchCriteria[filterGroups][5][filters][2][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][5][filters][3][field] Field
     *     @var string $searchCriteria[filterGroups][5][filters][3][value] Value
     *     @var string $searchCriteria[filterGroups][5][filters][3][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][5][filters][4][field] Field
     *     @var string $searchCriteria[filterGroups][5][filters][4][value] Value
     *     @var string $searchCriteria[filterGroups][5][filters][4][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][5][filters][5][field] Field
     *     @var string $searchCriteria[filterGroups][5][filters][5][value] Value
     *     @var string $searchCriteria[filterGroups][5][filters][5][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][5][filters][6][field] Field
     *     @var string $searchCriteria[filterGroups][5][filters][6][value] Value
     *     @var string $searchCriteria[filterGroups][5][filters][6][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][5][filters][7][field] Field
     *     @var string $searchCriteria[filterGroups][5][filters][7][value] Value
     *     @var string $searchCriteria[filterGroups][5][filters][7][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][5][filters][8][field] Field
     *     @var string $searchCriteria[filterGroups][5][filters][8][value] Value
     *     @var string $searchCriteria[filterGroups][5][filters][8][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][5][filters][9][field] Field
     *     @var string $searchCriteria[filterGroups][5][filters][9][value] Value
     *     @var string $searchCriteria[filterGroups][5][filters][9][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][6][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][6][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][6][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][6][filters][1][field] Field
     *     @var string $searchCriteria[filterGroups][6][filters][1][value] Value
     *     @var string $searchCriteria[filterGroups][6][filters][1][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][6][filters][2][field] Field
     *     @var string $searchCriteria[filterGroups][6][filters][2][value] Value
     *     @var string $searchCriteria[filterGroups][6][filters][2][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][6][filters][3][field] Field
     *     @var string $searchCriteria[filterGroups][6][filters][3][value] Value
     *     @var string $searchCriteria[filterGroups][6][filters][3][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][6][filters][4][field] Field
     *     @var string $searchCriteria[filterGroups][6][filters][4][value] Value
     *     @var string $searchCriteria[filterGroups][6][filters][4][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][6][filters][5][field] Field
     *     @var string $searchCriteria[filterGroups][6][filters][5][value] Value
     *     @var string $searchCriteria[filterGroups][6][filters][5][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][6][filters][6][field] Field
     *     @var string $searchCriteria[filterGroups][6][filters][6][value] Value
     *     @var string $searchCriteria[filterGroups][6][filters][6][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][6][filters][7][field] Field
     *     @var string $searchCriteria[filterGroups][6][filters][7][value] Value
     *     @var string $searchCriteria[filterGroups][6][filters][7][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][6][filters][8][field] Field
     *     @var string $searchCriteria[filterGroups][6][filters][8][value] Value
     *     @var string $searchCriteria[filterGroups][6][filters][8][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][6][filters][9][field] Field
     *     @var string $searchCriteria[filterGroups][6][filters][9][value] Value
     *     @var string $searchCriteria[filterGroups][6][filters][9][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][7][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][7][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][7][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][7][filters][1][field] Field
     *     @var string $searchCriteria[filterGroups][7][filters][1][value] Value
     *     @var string $searchCriteria[filterGroups][7][filters][1][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][7][filters][2][field] Field
     *     @var string $searchCriteria[filterGroups][7][filters][2][value] Value
     *     @var string $searchCriteria[filterGroups][7][filters][2][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][7][filters][3][field] Field
     *     @var string $searchCriteria[filterGroups][7][filters][3][value] Value
     *     @var string $searchCriteria[filterGroups][7][filters][3][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][7][filters][4][field] Field
     *     @var string $searchCriteria[filterGroups][7][filters][4][value] Value
     *     @var string $searchCriteria[filterGroups][7][filters][4][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][7][filters][5][field] Field
     *     @var string $searchCriteria[filterGroups][7][filters][5][value] Value
     *     @var string $searchCriteria[filterGroups][7][filters][5][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][7][filters][6][field] Field
     *     @var string $searchCriteria[filterGroups][7][filters][6][value] Value
     *     @var string $searchCriteria[filterGroups][7][filters][6][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][7][filters][7][field] Field
     *     @var string $searchCriteria[filterGroups][7][filters][7][value] Value
     *     @var string $searchCriteria[filterGroups][7][filters][7][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][7][filters][8][field] Field
     *     @var string $searchCriteria[filterGroups][7][filters][8][value] Value
     *     @var string $searchCriteria[filterGroups][7][filters][8][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][7][filters][9][field] Field
     *     @var string $searchCriteria[filterGroups][7][filters][9][value] Value
     *     @var string $searchCriteria[filterGroups][7][filters][9][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][8][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][8][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][8][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][8][filters][1][field] Field
     *     @var string $searchCriteria[filterGroups][8][filters][1][value] Value
     *     @var string $searchCriteria[filterGroups][8][filters][1][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][8][filters][2][field] Field
     *     @var string $searchCriteria[filterGroups][8][filters][2][value] Value
     *     @var string $searchCriteria[filterGroups][8][filters][2][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][8][filters][3][field] Field
     *     @var string $searchCriteria[filterGroups][8][filters][3][value] Value
     *     @var string $searchCriteria[filterGroups][8][filters][3][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][8][filters][4][field] Field
     *     @var string $searchCriteria[filterGroups][8][filters][4][value] Value
     *     @var string $searchCriteria[filterGroups][8][filters][4][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][8][filters][5][field] Field
     *     @var string $searchCriteria[filterGroups][8][filters][5][value] Value
     *     @var string $searchCriteria[filterGroups][8][filters][5][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][8][filters][6][field] Field
     *     @var string $searchCriteria[filterGroups][8][filters][6][value] Value
     *     @var string $searchCriteria[filterGroups][8][filters][6][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][8][filters][7][field] Field
     *     @var string $searchCriteria[filterGroups][8][filters][7][value] Value
     *     @var string $searchCriteria[filterGroups][8][filters][7][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][8][filters][8][field] Field
     *     @var string $searchCriteria[filterGroups][8][filters][8][value] Value
     *     @var string $searchCriteria[filterGroups][8][filters][8][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][8][filters][9][field] Field
     *     @var string $searchCriteria[filterGroups][8][filters][9][value] Value
     *     @var string $searchCriteria[filterGroups][8][filters][9][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][9][filters][0][field] Field
     *     @var string $searchCriteria[filterGroups][9][filters][0][value] Value
     *     @var string $searchCriteria[filterGroups][9][filters][0][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][9][filters][1][field] Field
     *     @var string $searchCriteria[filterGroups][9][filters][1][value] Value
     *     @var string $searchCriteria[filterGroups][9][filters][1][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][9][filters][2][field] Field
     *     @var string $searchCriteria[filterGroups][9][filters][2][value] Value
     *     @var string $searchCriteria[filterGroups][9][filters][2][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][9][filters][3][field] Field
     *     @var string $searchCriteria[filterGroups][9][filters][3][value] Value
     *     @var string $searchCriteria[filterGroups][9][filters][3][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][9][filters][4][field] Field
     *     @var string $searchCriteria[filterGroups][9][filters][4][value] Value
     *     @var string $searchCriteria[filterGroups][9][filters][4][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][9][filters][5][field] Field
     *     @var string $searchCriteria[filterGroups][9][filters][5][value] Value
     *     @var string $searchCriteria[filterGroups][9][filters][5][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][9][filters][6][field] Field
     *     @var string $searchCriteria[filterGroups][9][filters][6][value] Value
     *     @var string $searchCriteria[filterGroups][9][filters][6][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][9][filters][7][field] Field
     *     @var string $searchCriteria[filterGroups][9][filters][7][value] Value
     *     @var string $searchCriteria[filterGroups][9][filters][7][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][9][filters][8][field] Field
     *     @var string $searchCriteria[filterGroups][9][filters][8][value] Value
     *     @var string $searchCriteria[filterGroups][9][filters][8][conditionType] Condition type
     *     @var string $searchCriteria[filterGroups][9][filters][9][field] Field
     *     @var string $searchCriteria[filterGroups][9][filters][9][value] Value
     *     @var string $searchCriteria[filterGroups][9][filters][9][conditionType] Condition type
     *     @var string $searchCriteria[sortOrders][0][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][0][direction] Sorting direction.
     *     @var string $searchCriteria[sortOrders][1][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][1][direction] Sorting direction.
     *     @var string $searchCriteria[sortOrders][2][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][2][direction] Sorting direction.
     *     @var string $searchCriteria[sortOrders][3][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][3][direction] Sorting direction.
     *     @var string $searchCriteria[sortOrders][4][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][4][direction] Sorting direction.
     *     @var string $searchCriteria[sortOrders][5][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][5][direction] Sorting direction.
     *     @var string $searchCriteria[sortOrders][6][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][6][direction] Sorting direction.
     *     @var string $searchCriteria[sortOrders][7][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][7][direction] Sorting direction.
     *     @var string $searchCriteria[sortOrders][8][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][8][direction] Sorting direction.
     *     @var string $searchCriteria[sortOrders][9][field] Sorting field.
     *     @var string $searchCriteria[sortOrders][9][direction] Sorting direction.
     *     @var int $searchCriteria[pageSize] Page size.
     *     @var int $searchCriteria[currentPage] Current page.
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/V1/inventory/stocks';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('searchCriteria[filterGroups][0][filters][0][field]', 'searchCriteria[filterGroups][0][filters][0][value]', 'searchCriteria[filterGroups][0][filters][0][conditionType]', 'searchCriteria[filterGroups][0][filters][1][field]', 'searchCriteria[filterGroups][0][filters][1][value]', 'searchCriteria[filterGroups][0][filters][1][conditionType]', 'searchCriteria[filterGroups][0][filters][2][field]', 'searchCriteria[filterGroups][0][filters][2][value]', 'searchCriteria[filterGroups][0][filters][2][conditionType]', 'searchCriteria[filterGroups][0][filters][3][field]', 'searchCriteria[filterGroups][0][filters][3][value]', 'searchCriteria[filterGroups][0][filters][3][conditionType]', 'searchCriteria[filterGroups][0][filters][4][field]', 'searchCriteria[filterGroups][0][filters][4][value]', 'searchCriteria[filterGroups][0][filters][4][conditionType]', 'searchCriteria[filterGroups][0][filters][5][field]', 'searchCriteria[filterGroups][0][filters][5][value]', 'searchCriteria[filterGroups][0][filters][5][conditionType]', 'searchCriteria[filterGroups][0][filters][6][field]', 'searchCriteria[filterGroups][0][filters][6][value]', 'searchCriteria[filterGroups][0][filters][6][conditionType]', 'searchCriteria[filterGroups][0][filters][7][field]', 'searchCriteria[filterGroups][0][filters][7][value]', 'searchCriteria[filterGroups][0][filters][7][conditionType]', 'searchCriteria[filterGroups][0][filters][8][field]', 'searchCriteria[filterGroups][0][filters][8][value]', 'searchCriteria[filterGroups][0][filters][8][conditionType]', 'searchCriteria[filterGroups][0][filters][9][field]', 'searchCriteria[filterGroups][0][filters][9][value]', 'searchCriteria[filterGroups][0][filters][9][conditionType]', 'searchCriteria[filterGroups][1][filters][0][field]', 'searchCriteria[filterGroups][1][filters][0][value]', 'searchCriteria[filterGroups][1][filters][0][conditionType]', 'searchCriteria[filterGroups][1][filters][1][field]', 'searchCriteria[filterGroups][1][filters][1][value]', 'searchCriteria[filterGroups][1][filters][1][conditionType]', 'searchCriteria[filterGroups][1][filters][2][field]', 'searchCriteria[filterGroups][1][filters][2][value]', 'searchCriteria[filterGroups][1][filters][2][conditionType]', 'searchCriteria[filterGroups][1][filters][3][field]', 'searchCriteria[filterGroups][1][filters][3][value]', 'searchCriteria[filterGroups][1][filters][3][conditionType]', 'searchCriteria[filterGroups][1][filters][4][field]', 'searchCriteria[filterGroups][1][filters][4][value]', 'searchCriteria[filterGroups][1][filters][4][conditionType]', 'searchCriteria[filterGroups][1][filters][5][field]', 'searchCriteria[filterGroups][1][filters][5][value]', 'searchCriteria[filterGroups][1][filters][5][conditionType]', 'searchCriteria[filterGroups][1][filters][6][field]', 'searchCriteria[filterGroups][1][filters][6][value]', 'searchCriteria[filterGroups][1][filters][6][conditionType]', 'searchCriteria[filterGroups][1][filters][7][field]', 'searchCriteria[filterGroups][1][filters][7][value]', 'searchCriteria[filterGroups][1][filters][7][conditionType]', 'searchCriteria[filterGroups][1][filters][8][field]', 'searchCriteria[filterGroups][1][filters][8][value]', 'searchCriteria[filterGroups][1][filters][8][conditionType]', 'searchCriteria[filterGroups][1][filters][9][field]', 'searchCriteria[filterGroups][1][filters][9][value]', 'searchCriteria[filterGroups][1][filters][9][conditionType]', 'searchCriteria[filterGroups][2][filters][0][field]', 'searchCriteria[filterGroups][2][filters][0][value]', 'searchCriteria[filterGroups][2][filters][0][conditionType]', 'searchCriteria[filterGroups][2][filters][1][field]', 'searchCriteria[filterGroups][2][filters][1][value]', 'searchCriteria[filterGroups][2][filters][1][conditionType]', 'searchCriteria[filterGroups][2][filters][2][field]', 'searchCriteria[filterGroups][2][filters][2][value]', 'searchCriteria[filterGroups][2][filters][2][conditionType]', 'searchCriteria[filterGroups][2][filters][3][field]', 'searchCriteria[filterGroups][2][filters][3][value]', 'searchCriteria[filterGroups][2][filters][3][conditionType]', 'searchCriteria[filterGroups][2][filters][4][field]', 'searchCriteria[filterGroups][2][filters][4][value]', 'searchCriteria[filterGroups][2][filters][4][conditionType]', 'searchCriteria[filterGroups][2][filters][5][field]', 'searchCriteria[filterGroups][2][filters][5][value]', 'searchCriteria[filterGroups][2][filters][5][conditionType]', 'searchCriteria[filterGroups][2][filters][6][field]', 'searchCriteria[filterGroups][2][filters][6][value]', 'searchCriteria[filterGroups][2][filters][6][conditionType]', 'searchCriteria[filterGroups][2][filters][7][field]', 'searchCriteria[filterGroups][2][filters][7][value]', 'searchCriteria[filterGroups][2][filters][7][conditionType]', 'searchCriteria[filterGroups][2][filters][8][field]', 'searchCriteria[filterGroups][2][filters][8][value]', 'searchCriteria[filterGroups][2][filters][8][conditionType]', 'searchCriteria[filterGroups][2][filters][9][field]', 'searchCriteria[filterGroups][2][filters][9][value]', 'searchCriteria[filterGroups][2][filters][9][conditionType]', 'searchCriteria[filterGroups][3][filters][0][field]', 'searchCriteria[filterGroups][3][filters][0][value]', 'searchCriteria[filterGroups][3][filters][0][conditionType]', 'searchCriteria[filterGroups][3][filters][1][field]', 'searchCriteria[filterGroups][3][filters][1][value]', 'searchCriteria[filterGroups][3][filters][1][conditionType]', 'searchCriteria[filterGroups][3][filters][2][field]', 'searchCriteria[filterGroups][3][filters][2][value]', 'searchCriteria[filterGroups][3][filters][2][conditionType]', 'searchCriteria[filterGroups][3][filters][3][field]', 'searchCriteria[filterGroups][3][filters][3][value]', 'searchCriteria[filterGroups][3][filters][3][conditionType]', 'searchCriteria[filterGroups][3][filters][4][field]', 'searchCriteria[filterGroups][3][filters][4][value]', 'searchCriteria[filterGroups][3][filters][4][conditionType]', 'searchCriteria[filterGroups][3][filters][5][field]', 'searchCriteria[filterGroups][3][filters][5][value]', 'searchCriteria[filterGroups][3][filters][5][conditionType]', 'searchCriteria[filterGroups][3][filters][6][field]', 'searchCriteria[filterGroups][3][filters][6][value]', 'searchCriteria[filterGroups][3][filters][6][conditionType]', 'searchCriteria[filterGroups][3][filters][7][field]', 'searchCriteria[filterGroups][3][filters][7][value]', 'searchCriteria[filterGroups][3][filters][7][conditionType]', 'searchCriteria[filterGroups][3][filters][8][field]', 'searchCriteria[filterGroups][3][filters][8][value]', 'searchCriteria[filterGroups][3][filters][8][conditionType]', 'searchCriteria[filterGroups][3][filters][9][field]', 'searchCriteria[filterGroups][3][filters][9][value]', 'searchCriteria[filterGroups][3][filters][9][conditionType]', 'searchCriteria[filterGroups][4][filters][0][field]', 'searchCriteria[filterGroups][4][filters][0][value]', 'searchCriteria[filterGroups][4][filters][0][conditionType]', 'searchCriteria[filterGroups][4][filters][1][field]', 'searchCriteria[filterGroups][4][filters][1][value]', 'searchCriteria[filterGroups][4][filters][1][conditionType]', 'searchCriteria[filterGroups][4][filters][2][field]', 'searchCriteria[filterGroups][4][filters][2][value]', 'searchCriteria[filterGroups][4][filters][2][conditionType]', 'searchCriteria[filterGroups][4][filters][3][field]', 'searchCriteria[filterGroups][4][filters][3][value]', 'searchCriteria[filterGroups][4][filters][3][conditionType]', 'searchCriteria[filterGroups][4][filters][4][field]', 'searchCriteria[filterGroups][4][filters][4][value]', 'searchCriteria[filterGroups][4][filters][4][conditionType]', 'searchCriteria[filterGroups][4][filters][5][field]', 'searchCriteria[filterGroups][4][filters][5][value]', 'searchCriteria[filterGroups][4][filters][5][conditionType]', 'searchCriteria[filterGroups][4][filters][6][field]', 'searchCriteria[filterGroups][4][filters][6][value]', 'searchCriteria[filterGroups][4][filters][6][conditionType]', 'searchCriteria[filterGroups][4][filters][7][field]', 'searchCriteria[filterGroups][4][filters][7][value]', 'searchCriteria[filterGroups][4][filters][7][conditionType]', 'searchCriteria[filterGroups][4][filters][8][field]', 'searchCriteria[filterGroups][4][filters][8][value]', 'searchCriteria[filterGroups][4][filters][8][conditionType]', 'searchCriteria[filterGroups][4][filters][9][field]', 'searchCriteria[filterGroups][4][filters][9][value]', 'searchCriteria[filterGroups][4][filters][9][conditionType]', 'searchCriteria[filterGroups][5][filters][0][field]', 'searchCriteria[filterGroups][5][filters][0][value]', 'searchCriteria[filterGroups][5][filters][0][conditionType]', 'searchCriteria[filterGroups][5][filters][1][field]', 'searchCriteria[filterGroups][5][filters][1][value]', 'searchCriteria[filterGroups][5][filters][1][conditionType]', 'searchCriteria[filterGroups][5][filters][2][field]', 'searchCriteria[filterGroups][5][filters][2][value]', 'searchCriteria[filterGroups][5][filters][2][conditionType]', 'searchCriteria[filterGroups][5][filters][3][field]', 'searchCriteria[filterGroups][5][filters][3][value]', 'searchCriteria[filterGroups][5][filters][3][conditionType]', 'searchCriteria[filterGroups][5][filters][4][field]', 'searchCriteria[filterGroups][5][filters][4][value]', 'searchCriteria[filterGroups][5][filters][4][conditionType]', 'searchCriteria[filterGroups][5][filters][5][field]', 'searchCriteria[filterGroups][5][filters][5][value]', 'searchCriteria[filterGroups][5][filters][5][conditionType]', 'searchCriteria[filterGroups][5][filters][6][field]', 'searchCriteria[filterGroups][5][filters][6][value]', 'searchCriteria[filterGroups][5][filters][6][conditionType]', 'searchCriteria[filterGroups][5][filters][7][field]', 'searchCriteria[filterGroups][5][filters][7][value]', 'searchCriteria[filterGroups][5][filters][7][conditionType]', 'searchCriteria[filterGroups][5][filters][8][field]', 'searchCriteria[filterGroups][5][filters][8][value]', 'searchCriteria[filterGroups][5][filters][8][conditionType]', 'searchCriteria[filterGroups][5][filters][9][field]', 'searchCriteria[filterGroups][5][filters][9][value]', 'searchCriteria[filterGroups][5][filters][9][conditionType]', 'searchCriteria[filterGroups][6][filters][0][field]', 'searchCriteria[filterGroups][6][filters][0][value]', 'searchCriteria[filterGroups][6][filters][0][conditionType]', 'searchCriteria[filterGroups][6][filters][1][field]', 'searchCriteria[filterGroups][6][filters][1][value]', 'searchCriteria[filterGroups][6][filters][1][conditionType]', 'searchCriteria[filterGroups][6][filters][2][field]', 'searchCriteria[filterGroups][6][filters][2][value]', 'searchCriteria[filterGroups][6][filters][2][conditionType]', 'searchCriteria[filterGroups][6][filters][3][field]', 'searchCriteria[filterGroups][6][filters][3][value]', 'searchCriteria[filterGroups][6][filters][3][conditionType]', 'searchCriteria[filterGroups][6][filters][4][field]', 'searchCriteria[filterGroups][6][filters][4][value]', 'searchCriteria[filterGroups][6][filters][4][conditionType]', 'searchCriteria[filterGroups][6][filters][5][field]', 'searchCriteria[filterGroups][6][filters][5][value]', 'searchCriteria[filterGroups][6][filters][5][conditionType]', 'searchCriteria[filterGroups][6][filters][6][field]', 'searchCriteria[filterGroups][6][filters][6][value]', 'searchCriteria[filterGroups][6][filters][6][conditionType]', 'searchCriteria[filterGroups][6][filters][7][field]', 'searchCriteria[filterGroups][6][filters][7][value]', 'searchCriteria[filterGroups][6][filters][7][conditionType]', 'searchCriteria[filterGroups][6][filters][8][field]', 'searchCriteria[filterGroups][6][filters][8][value]', 'searchCriteria[filterGroups][6][filters][8][conditionType]', 'searchCriteria[filterGroups][6][filters][9][field]', 'searchCriteria[filterGroups][6][filters][9][value]', 'searchCriteria[filterGroups][6][filters][9][conditionType]', 'searchCriteria[filterGroups][7][filters][0][field]', 'searchCriteria[filterGroups][7][filters][0][value]', 'searchCriteria[filterGroups][7][filters][0][conditionType]', 'searchCriteria[filterGroups][7][filters][1][field]', 'searchCriteria[filterGroups][7][filters][1][value]', 'searchCriteria[filterGroups][7][filters][1][conditionType]', 'searchCriteria[filterGroups][7][filters][2][field]', 'searchCriteria[filterGroups][7][filters][2][value]', 'searchCriteria[filterGroups][7][filters][2][conditionType]', 'searchCriteria[filterGroups][7][filters][3][field]', 'searchCriteria[filterGroups][7][filters][3][value]', 'searchCriteria[filterGroups][7][filters][3][conditionType]', 'searchCriteria[filterGroups][7][filters][4][field]', 'searchCriteria[filterGroups][7][filters][4][value]', 'searchCriteria[filterGroups][7][filters][4][conditionType]', 'searchCriteria[filterGroups][7][filters][5][field]', 'searchCriteria[filterGroups][7][filters][5][value]', 'searchCriteria[filterGroups][7][filters][5][conditionType]', 'searchCriteria[filterGroups][7][filters][6][field]', 'searchCriteria[filterGroups][7][filters][6][value]', 'searchCriteria[filterGroups][7][filters][6][conditionType]', 'searchCriteria[filterGroups][7][filters][7][field]', 'searchCriteria[filterGroups][7][filters][7][value]', 'searchCriteria[filterGroups][7][filters][7][conditionType]', 'searchCriteria[filterGroups][7][filters][8][field]', 'searchCriteria[filterGroups][7][filters][8][value]', 'searchCriteria[filterGroups][7][filters][8][conditionType]', 'searchCriteria[filterGroups][7][filters][9][field]', 'searchCriteria[filterGroups][7][filters][9][value]', 'searchCriteria[filterGroups][7][filters][9][conditionType]', 'searchCriteria[filterGroups][8][filters][0][field]', 'searchCriteria[filterGroups][8][filters][0][value]', 'searchCriteria[filterGroups][8][filters][0][conditionType]', 'searchCriteria[filterGroups][8][filters][1][field]', 'searchCriteria[filterGroups][8][filters][1][value]', 'searchCriteria[filterGroups][8][filters][1][conditionType]', 'searchCriteria[filterGroups][8][filters][2][field]', 'searchCriteria[filterGroups][8][filters][2][value]', 'searchCriteria[filterGroups][8][filters][2][conditionType]', 'searchCriteria[filterGroups][8][filters][3][field]', 'searchCriteria[filterGroups][8][filters][3][value]', 'searchCriteria[filterGroups][8][filters][3][conditionType]', 'searchCriteria[filterGroups][8][filters][4][field]', 'searchCriteria[filterGroups][8][filters][4][value]', 'searchCriteria[filterGroups][8][filters][4][conditionType]', 'searchCriteria[filterGroups][8][filters][5][field]', 'searchCriteria[filterGroups][8][filters][5][value]', 'searchCriteria[filterGroups][8][filters][5][conditionType]', 'searchCriteria[filterGroups][8][filters][6][field]', 'searchCriteria[filterGroups][8][filters][6][value]', 'searchCriteria[filterGroups][8][filters][6][conditionType]', 'searchCriteria[filterGroups][8][filters][7][field]', 'searchCriteria[filterGroups][8][filters][7][value]', 'searchCriteria[filterGroups][8][filters][7][conditionType]', 'searchCriteria[filterGroups][8][filters][8][field]', 'searchCriteria[filterGroups][8][filters][8][value]', 'searchCriteria[filterGroups][8][filters][8][conditionType]', 'searchCriteria[filterGroups][8][filters][9][field]', 'searchCriteria[filterGroups][8][filters][9][value]', 'searchCriteria[filterGroups][8][filters][9][conditionType]', 'searchCriteria[filterGroups][9][filters][0][field]', 'searchCriteria[filterGroups][9][filters][0][value]', 'searchCriteria[filterGroups][9][filters][0][conditionType]', 'searchCriteria[filterGroups][9][filters][1][field]', 'searchCriteria[filterGroups][9][filters][1][value]', 'searchCriteria[filterGroups][9][filters][1][conditionType]', 'searchCriteria[filterGroups][9][filters][2][field]', 'searchCriteria[filterGroups][9][filters][2][value]', 'searchCriteria[filterGroups][9][filters][2][conditionType]', 'searchCriteria[filterGroups][9][filters][3][field]', 'searchCriteria[filterGroups][9][filters][3][value]', 'searchCriteria[filterGroups][9][filters][3][conditionType]', 'searchCriteria[filterGroups][9][filters][4][field]', 'searchCriteria[filterGroups][9][filters][4][value]', 'searchCriteria[filterGroups][9][filters][4][conditionType]', 'searchCriteria[filterGroups][9][filters][5][field]', 'searchCriteria[filterGroups][9][filters][5][value]', 'searchCriteria[filterGroups][9][filters][5][conditionType]', 'searchCriteria[filterGroups][9][filters][6][field]', 'searchCriteria[filterGroups][9][filters][6][value]', 'searchCriteria[filterGroups][9][filters][6][conditionType]', 'searchCriteria[filterGroups][9][filters][7][field]', 'searchCriteria[filterGroups][9][filters][7][value]', 'searchCriteria[filterGroups][9][filters][7][conditionType]', 'searchCriteria[filterGroups][9][filters][8][field]', 'searchCriteria[filterGroups][9][filters][8][value]', 'searchCriteria[filterGroups][9][filters][8][conditionType]', 'searchCriteria[filterGroups][9][filters][9][field]', 'searchCriteria[filterGroups][9][filters][9][value]', 'searchCriteria[filterGroups][9][filters][9][conditionType]', 'searchCriteria[sortOrders][0][field]', 'searchCriteria[sortOrders][0][direction]', 'searchCriteria[sortOrders][1][field]', 'searchCriteria[sortOrders][1][direction]', 'searchCriteria[sortOrders][2][field]', 'searchCriteria[sortOrders][2][direction]', 'searchCriteria[sortOrders][3][field]', 'searchCriteria[sortOrders][3][direction]', 'searchCriteria[sortOrders][4][field]', 'searchCriteria[sortOrders][4][direction]', 'searchCriteria[sortOrders][5][field]', 'searchCriteria[sortOrders][5][direction]', 'searchCriteria[sortOrders][6][field]', 'searchCriteria[sortOrders][6][direction]', 'searchCriteria[sortOrders][7][field]', 'searchCriteria[sortOrders][7][direction]', 'searchCriteria[sortOrders][8][field]', 'searchCriteria[sortOrders][8][direction]', 'searchCriteria[sortOrders][9][field]', 'searchCriteria[sortOrders][9][direction]', 'searchCriteria[pageSize]', 'searchCriteria[currentPage]'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][0][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][0][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][0][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][1][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][1][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][1][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][2][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][2][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][2][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][3][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][3][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][3][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][4][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][4][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][4][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][5][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][5][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][5][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][6][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][6][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][6][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][7][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][7][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][7][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][8][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][8][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][8][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][9][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][9][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][0][filters][9][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][0][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][0][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][0][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][1][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][1][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][1][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][2][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][2][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][2][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][3][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][3][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][3][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][4][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][4][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][4][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][5][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][5][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][5][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][6][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][6][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][6][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][7][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][7][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][7][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][8][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][8][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][8][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][9][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][9][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][1][filters][9][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][0][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][0][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][0][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][1][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][1][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][1][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][2][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][2][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][2][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][3][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][3][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][3][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][4][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][4][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][4][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][5][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][5][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][5][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][6][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][6][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][6][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][7][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][7][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][7][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][8][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][8][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][8][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][9][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][9][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][2][filters][9][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][0][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][0][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][0][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][1][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][1][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][1][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][2][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][2][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][2][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][3][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][3][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][3][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][4][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][4][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][4][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][5][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][5][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][5][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][6][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][6][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][6][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][7][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][7][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][7][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][8][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][8][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][8][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][9][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][9][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][3][filters][9][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][0][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][0][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][0][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][1][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][1][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][1][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][2][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][2][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][2][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][3][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][3][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][3][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][4][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][4][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][4][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][5][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][5][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][5][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][6][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][6][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][6][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][7][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][7][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][7][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][8][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][8][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][8][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][9][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][9][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][4][filters][9][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][0][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][0][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][0][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][1][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][1][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][1][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][2][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][2][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][2][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][3][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][3][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][3][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][4][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][4][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][4][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][5][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][5][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][5][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][6][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][6][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][6][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][7][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][7][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][7][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][8][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][8][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][8][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][9][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][9][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][5][filters][9][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][0][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][0][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][0][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][1][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][1][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][1][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][2][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][2][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][2][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][3][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][3][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][3][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][4][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][4][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][4][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][5][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][5][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][5][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][6][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][6][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][6][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][7][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][7][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][7][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][8][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][8][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][8][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][9][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][9][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][6][filters][9][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][0][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][0][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][0][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][1][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][1][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][1][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][2][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][2][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][2][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][3][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][3][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][3][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][4][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][4][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][4][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][5][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][5][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][5][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][6][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][6][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][6][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][7][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][7][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][7][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][8][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][8][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][8][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][9][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][9][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][7][filters][9][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][0][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][0][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][0][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][1][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][1][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][1][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][2][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][2][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][2][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][3][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][3][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][3][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][4][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][4][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][4][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][5][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][5][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][5][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][6][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][6][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][6][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][7][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][7][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][7][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][8][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][8][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][8][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][9][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][9][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][8][filters][9][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][0][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][0][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][0][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][1][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][1][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][1][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][2][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][2][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][2][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][3][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][3][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][3][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][4][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][4][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][4][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][5][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][5][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][5][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][6][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][6][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][6][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][7][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][7][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][7][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][8][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][8][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][8][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][9][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][9][value]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[filterGroups][9][filters][9][conditionType]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[sortOrders][0][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[sortOrders][0][direction]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[sortOrders][1][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[sortOrders][1][direction]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[sortOrders][2][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[sortOrders][2][direction]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[sortOrders][3][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[sortOrders][3][direction]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[sortOrders][4][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[sortOrders][4][direction]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[sortOrders][5][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[sortOrders][5][direction]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[sortOrders][6][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[sortOrders][6][direction]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[sortOrders][7][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[sortOrders][7][direction]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[sortOrders][8][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[sortOrders][8][direction]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[sortOrders][9][field]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[sortOrders][9][direction]', array('string'));
        $optionsResolver->addAllowedTypes('searchCriteria[pageSize]', array('int'));
        $optionsResolver->addAllowedTypes('searchCriteria[currentPage]', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\GetV1InventoryStocksUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\InventoryApiDataStockSearchResultsInterface|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\InventoryApiDataStockSearchResultsInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\GetV1InventoryStocksUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}