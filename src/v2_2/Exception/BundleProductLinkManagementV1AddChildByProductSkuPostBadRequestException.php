<?php

namespace Kiboko\Magento\v2_2\Exception;

class BundleProductLinkManagementV1AddChildByProductSkuPostBadRequestException extends BadRequestException
{
    /**
     * @var \Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Kiboko\Magento\v2_2\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('400 Bad Request');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse(): \Kiboko\Magento\v2_2\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}
