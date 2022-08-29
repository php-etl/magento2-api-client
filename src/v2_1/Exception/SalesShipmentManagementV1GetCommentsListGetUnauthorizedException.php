<?php

namespace Kiboko\Magento\v2_1\Exception;

class SalesShipmentManagementV1GetCommentsListGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
