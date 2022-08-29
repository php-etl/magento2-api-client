<?php

namespace Kiboko\Magento\v2_2\Exception;

class CustomerAddressMetadataV1GetAttributesGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
