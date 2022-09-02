<?php

namespace Kiboko\Magento\V2_3\Exception;

class CustomerCustomerRepositoryV1GetByIdGetBadRequestException extends BadRequestException
{
    /**
     * @var \Kiboko\Magento\V2_3\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Kiboko\Magento\V2_3\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('400 Bad Request');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse(): \Kiboko\Magento\V2_3\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}
