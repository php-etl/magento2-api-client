<?php

namespace Kiboko\Magento\v2_3\Exception;

class CompanyCreditCreditLimitRepositoryV1GetGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
