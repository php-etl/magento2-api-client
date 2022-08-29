<?php

namespace Kiboko\Magento\v2_2\Exception;

class SalesRefundOrderV1ExecutePostUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
