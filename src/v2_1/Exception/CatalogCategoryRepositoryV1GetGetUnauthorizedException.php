<?php

namespace Kiboko\Magento\V2_1\Exception;

class CatalogCategoryRepositoryV1GetGetUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \Kiboko\Magento\V2_1\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Kiboko\Magento\V2_1\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('401 Unauthorized');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse(): \Kiboko\Magento\V2_1\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}
