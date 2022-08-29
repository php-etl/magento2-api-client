<?php

namespace Kiboko\Magento\v2_2\Exception;

class CatalogCategoryManagementV1MovePutUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Kiboko\Magento\v2_2\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('401 Unauthorized');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse(): \Kiboko\Magento\v2_2\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}
