<?php

namespace Kiboko\Magento\v2_4\Exception;

class CustomerCustomerRepositoryV1DeleteByIdDeleteBadRequestException extends BadRequestException
{
    /**
     * @var \Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Kiboko\Magento\v2_4\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('400 Bad Request');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse(): \Kiboko\Magento\v2_4\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}
