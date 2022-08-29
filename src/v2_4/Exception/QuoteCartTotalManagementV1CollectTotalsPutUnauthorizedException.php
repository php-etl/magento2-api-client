<?php

namespace Kiboko\Magento\v2_4\Exception;

class QuoteCartTotalManagementV1CollectTotalsPutUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Kiboko\Magento\v2_4\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('401 Unauthorized');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse(): \Kiboko\Magento\v2_4\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}
