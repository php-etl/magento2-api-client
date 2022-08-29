<?php

namespace Kiboko\Magento\v2_2\Exception;

class NegotiableQuotePaymentInformationManagementV1SavePaymentInformationPostBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('400 Bad Request');
    }
}
