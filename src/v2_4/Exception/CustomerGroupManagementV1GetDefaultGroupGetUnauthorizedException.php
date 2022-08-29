<?php

namespace Kiboko\Magento\v2_4\Exception;

class CustomerGroupManagementV1GetDefaultGroupGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
