<?php

namespace Kiboko\Magento\v2_4\Exception;

class CmsBlockRepositoryV1DeleteByIdDeleteInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Kiboko\Magento\v2_4\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Internal Server error');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse(): \Kiboko\Magento\v2_4\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}
