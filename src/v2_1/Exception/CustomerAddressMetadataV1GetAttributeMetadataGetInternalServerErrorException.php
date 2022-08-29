<?php

namespace Kiboko\Magento\v2_1\Exception;

class CustomerAddressMetadataV1GetAttributeMetadataGetInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal Server error');
    }
}
