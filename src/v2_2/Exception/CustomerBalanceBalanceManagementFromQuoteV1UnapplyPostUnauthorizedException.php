<?php

namespace Kiboko\Magento\v2_2\Exception;

class CustomerBalanceBalanceManagementFromQuoteV1UnapplyPostUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
