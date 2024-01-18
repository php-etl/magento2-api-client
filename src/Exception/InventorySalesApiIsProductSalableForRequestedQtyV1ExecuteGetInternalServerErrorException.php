<?php

namespace Kiboko\Magento\Exception;

class InventorySalesApiIsProductSalableForRequestedQtyV1ExecuteGetInternalServerErrorException extends InternalServerErrorException
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
        parent::__construct('Internal Server error');
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