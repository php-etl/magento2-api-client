<?php

namespace Kiboko\Magento\v2_4\Exception;

class CustomerAccountManagementV1ValidateResetPasswordLinkTokenGetInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal Server error');
    }
}
