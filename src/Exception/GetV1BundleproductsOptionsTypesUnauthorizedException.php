<?php

namespace Kiboko\Magento\Exception;

class GetV1BundleproductsOptionsTypesUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \Kiboko\Magento\Model\ErrorResponse
     */
    private $errorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Kiboko\Magento\Model\ErrorResponse $errorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('401 Unauthorized');
        $this->errorResponse = $errorResponse;
        $this->response = $response;
    }
    public function getErrorResponse() : \Kiboko\Magento\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}