<?php

namespace Kiboko\Magento\v2_3\Exception;

class CheckoutPaymentInformationManagementV1SavePaymentInformationPostUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
