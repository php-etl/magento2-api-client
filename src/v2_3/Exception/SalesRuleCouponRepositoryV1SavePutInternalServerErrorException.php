<?php

namespace Kiboko\Magento\v2_3\Exception;

class SalesRuleCouponRepositoryV1SavePutInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal Server error');
    }
}
