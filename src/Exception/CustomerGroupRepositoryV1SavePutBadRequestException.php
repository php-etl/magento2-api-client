<?php

namespace Kiboko\Magento\V2\Exception;

class CustomerGroupRepositoryV1SavePutBadRequestException extends BadRequestException
{
    /**
     * @var \Kiboko\Magento\V2\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Kiboko\Magento\V2\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('400 Bad Request');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Kiboko\Magento\V2\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}