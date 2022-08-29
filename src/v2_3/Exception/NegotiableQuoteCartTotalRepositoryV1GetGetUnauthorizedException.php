<?php

namespace Kiboko\Magento\v2_3\Exception;

class NegotiableQuoteCartTotalRepositoryV1GetGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
