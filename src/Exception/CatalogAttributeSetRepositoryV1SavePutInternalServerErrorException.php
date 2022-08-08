<?php

namespace Kiboko\Magento\V2\Exception;

class CatalogAttributeSetRepositoryV1SavePutInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \Kiboko\Magento\V2\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Kiboko\Magento\V2\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Internal Server error');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse(): \Kiboko\Magento\V2\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}
