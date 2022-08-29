<?php

namespace Kiboko\Magento\v2_1\Exception;

class SalesInvoiceCommentRepositoryV1SavePostUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
