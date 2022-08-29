<?php

namespace Kiboko\Magento\v2_3\Exception;

class CustomerCustomerRepositoryV1SavePutInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Kiboko\Magento\v2_3\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Internal Server error');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Kiboko\Magento\v2_3\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}