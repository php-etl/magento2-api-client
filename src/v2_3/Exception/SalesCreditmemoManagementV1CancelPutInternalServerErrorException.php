<?php

namespace Kiboko\Magento\v2_3\Exception;

class SalesCreditmemoManagementV1CancelPutInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal Server error');
    }
}
