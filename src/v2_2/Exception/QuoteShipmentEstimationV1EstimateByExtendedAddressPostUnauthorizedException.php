<?php

namespace Kiboko\Magento\v2_2\Exception;

class QuoteShipmentEstimationV1EstimateByExtendedAddressPostUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
