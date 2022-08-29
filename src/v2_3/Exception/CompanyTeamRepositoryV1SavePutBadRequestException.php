<?php

namespace Kiboko\Magento\v2_3\Exception;

class CompanyTeamRepositoryV1SavePutBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('400 Bad Request');
    }
}
