<?php

namespace Kiboko\Magento\v2_4\Exception;

class CompanyCreditCreditHistoryManagementV1UpdatePutUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
