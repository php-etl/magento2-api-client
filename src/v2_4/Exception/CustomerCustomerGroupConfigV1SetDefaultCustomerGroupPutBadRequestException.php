<?php

namespace Kiboko\Magento\v2_4\Exception;

class CustomerCustomerGroupConfigV1SetDefaultCustomerGroupPutBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('400 Bad Request');
    }
}
