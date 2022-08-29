<?php

namespace Kiboko\Magento\v2_4\Exception;

class CheckoutPaymentInformationManagementV1SavePaymentInformationPostBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('400 Bad Request');
    }
}
