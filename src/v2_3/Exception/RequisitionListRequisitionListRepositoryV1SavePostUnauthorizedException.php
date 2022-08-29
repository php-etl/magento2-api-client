<?php

namespace Kiboko\Magento\v2_3\Exception;

class RequisitionListRequisitionListRepositoryV1SavePostUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
