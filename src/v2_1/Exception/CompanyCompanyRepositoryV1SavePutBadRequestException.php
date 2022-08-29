<?php

namespace Kiboko\Magento\v2_1\Exception;

class CompanyCompanyRepositoryV1SavePutBadRequestException extends BadRequestException
{
    /**
     * @var \Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Kiboko\Magento\v2_1\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('400 Bad Request');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse(): \Kiboko\Magento\v2_1\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}
