<?php

namespace Kiboko\Magento\v2_3\Exception;

class CustomerAddressMetadataV1GetAttributesGetInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal Server error');
    }
}
