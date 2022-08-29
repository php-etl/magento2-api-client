<?php

namespace Kiboko\Magento\v2_2\Exception;

class GetV1CustomerByCustomerIdInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Kiboko\Magento\v2_2\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Internal Server error');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse(): \Kiboko\Magento\v2_2\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}
