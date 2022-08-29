<?php

namespace Kiboko\Magento\v2_1\Exception;

class PostV1CartsByQuoteIdItemUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Kiboko\Magento\v2_1\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('401 Unauthorized');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse(): \Kiboko\Magento\v2_1\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}
