<?php

namespace Kiboko\Magento\v2_3\Exception;

class CatalogInventoryStockRegistryV1GetStockStatusBySkuGetUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Kiboko\Magento\v2_3\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('401 Unauthorized');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Kiboko\Magento\v2_3\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}