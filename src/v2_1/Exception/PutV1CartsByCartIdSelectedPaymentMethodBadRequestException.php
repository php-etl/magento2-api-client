<?php

namespace Kiboko\Magento\V2_1\Exception;

class PutV1CartsByCartIdSelectedPaymentMethodBadRequestException extends BadRequestException
{
    /**
     * @var \Kiboko\Magento\V2_1\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Kiboko\Magento\V2_1\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('400 Bad Request');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse(): \Kiboko\Magento\V2_1\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}
