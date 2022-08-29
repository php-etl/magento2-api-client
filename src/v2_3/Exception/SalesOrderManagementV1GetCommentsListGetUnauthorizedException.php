<?php

namespace Kiboko\Magento\v2_3\Exception;

class SalesOrderManagementV1GetCommentsListGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
