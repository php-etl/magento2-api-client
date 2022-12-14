<?php

namespace Kiboko\Magento\V2_3\Exception;

class SalesRuleRuleRepositoryV1SavePostInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \Kiboko\Magento\V2_3\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Kiboko\Magento\V2_3\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Internal Server error');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse(): \Kiboko\Magento\V2_3\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}
