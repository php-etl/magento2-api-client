<?php

namespace Kiboko\Magento\v2_2\Exception;

class EavAttributeSetRepositoryV1SavePutInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal Server error');
    }
}
