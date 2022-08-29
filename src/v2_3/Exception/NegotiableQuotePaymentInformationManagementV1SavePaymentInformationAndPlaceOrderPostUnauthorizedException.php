<?php

namespace Kiboko\Magento\v2_3\Exception;

class NegotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
